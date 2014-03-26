<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * HTML Helper from James Moreira
 * Html Helpers of Twitter BootStrap.
 */

// ------------------------------------------------------------------------
if ( ! function_exists('html_button'))
{
    /**
     * Cria um Botão de Formulário fornecendo seus Atributos.
     * 
     * @param string/array $value <p>Nome do Botão. ou Array onde:</p>
     * <li>0 => Nome do Botão</li>
     * <li>1 => Link para onde vai</li>
     * @param int $type 
     * <li>0 => Button</li>
     * <li>1 => Submit</li>
     * @param int $option 
     * <li>0 => default</li> 
     * <li>1 => primary</li> 
     * <li>2 => success</li> 
     * <li>3 => info</li> 
     * <li>4 => warning</li>
     * <li>5 => danger</li> 
     * <li>6 => link</li>
     * @param int $size
     * <li>0 - default</li>
     * <li>1 - Large</li>
     * <li>2 - Small</li>
     * <li>3 - Extra Small</li>
     * @param bool $disabled Botão desativado, padrão é FALSE
     * @return string
     */
	function html_button($value , $type = 0, $option = 0, $size = 0, $disabled = FALSE)
	{
            $valor = $value;
            $link = NULL;
            
            if (is_array($value)) {
                $valor = $value[0];
                $link = $value[1];
            }
            
            $class = '';
            
            switch ($option) {
                case 1:
                    $class = 'primary';
                    break;
                case 2:
                    $class = 'success';
                    break;
                case 3:
                    $class = 'info';
                    break;
                case 4:
                    $class = 'warning';
                    break;
                case 5:
                    $class = 'danger';
                    break;
                case 6:
                    $class = 'link';
                    break;
                default:
                    $class = 'default';
                    break;
            }
            
            switch ($size) {
                case 1:
                    $class .= ' btn-lg'; //Large
                    break;
                case 2:
                    $class .= ' btn-sm'; //Small
                    break;
                case 3:
                    $class .= ' btn-xs'; //Extra Small
                    break;
            }
            
            if ($disabled) {
                $disabled = 'disabled="disabled"';
            } else {
                $disabled = '';
            }
            
            switch ($type) {
                case 1:
                    $type = 'submit';
                    break;
                default:
                    $type = 'button';
                    break;
            }
            
            if ($link == NULL) {
                $button = "<button type='$type' class='btn btn-$class' $disabled>$valor</button>\n";
            } else {
                $button = "<a href='".base_url($link)."' type='$type' class='btn btn-$class' $disabled>$valor</a>";
            }
            
            return $button;
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('html_button_dropdowns'))
{
        /**
         * 
         * @param type $name
         * @param array $links
         * @param type $option
         * @param type $disabled
         * @return string
         */
	function html_button_dropdowns($name, array $links, $option = 0, $disabled = FALSE)
	{
            $class = '';
            
            switch ($option) {
                case 1:
                    $class = 'primary';
                    break;
                case 2:
                    $class = 'success';
                    break;
                case 3:
                    $class = 'info';
                    break;
                case 4:
                    $class = 'warning';
                    break;
                case 5:
                    $class = 'danger';
                    break;
                case 6:
                    $class = 'link';
                    break;
                default:
                    $class = 'default';
                    break;
            }
            
            if ($disabled) {
                $disabled = 'disabled="disabled"';
            } else {
                $disabled = '';
            }
            
            $button = ""
                    . "<!-- Single button -->
                        <div class='btn-group'>
                          <button type='button' class='btn btn-$class dropdown-toggle' data-toggle='dropdown'>
                            $name <span class='caret'></span>
                          </button>
                          <ul class='dropdown-menu' role='menu'>\n";
                          
            foreach ($links as $key => $value) {
                $button .= "<li>".anchor($value, $key)."</li>\n";
            }
            
            $button .= "".
                          "</ul>
                        </div>\n";
            
            return $button;
	}
}

// ------------------------------------------------------------------------