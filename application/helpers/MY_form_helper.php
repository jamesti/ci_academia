<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * HTML Helper from James Moreira
 * Html Helpers of Twitter BootStrap.
 */

// ------------------------------------------------------------------------

/**
 * form_input
 *
 * Generates an HTML heading tag.  First param is the data.
 * Second param is the size of the heading tag.
 *
 * @access	public
 * @param	string
 * @param	integer
 * @return	string
 */
if ( ! function_exists('form_input'))
{
	function form_input($type, $name, $label, $value, $placeholder = '', $atributes = '', $size = 4)
	{
            switch ($type) {
                case "textarea":
                    return "<div class='form-group'>
                        <label for='$name' class='col-sm-2 control-label'>$label</label>
                        <div class='col-xs-$size'>
                    <textarea class='form-control' rows='$size' name='$name' id='$name' $atributes>$value</textarea>
                        </div>
                      </div>\n";
                case "checkbox":
                    return "<div class='form-group'>
                            <div class='col-sm-offset-2 col-sm-10'>
                                <div class='checkbox'>
                                <label>
                                <input type='checkbox' value='$value' name='$name' id='$name' $atributes>
                                  $label
                                </label>
                              </div></div></div>\n";
                case "radio":
                    return "<div class='form-group'>
                            <div class='col-sm-offset-2 col-sm-10'>
                            <div class='radio'>
                                <label>
                                  <input type='radio' value='$value' name='$name' id='$name$size' $atributes>
                                  $label
                                </label>
                              </div></div></div>\n";
                default :
                    return "<div class='form-group'>
                        <label for='$name' class='col-sm-2 control-label'>$label</label>
                        <div class='col-xs-$size'>
                          <input type='$type' class='form-control' name='$name' id='$name' value='$value' placeholder='$placeholder' $atributes >
                        </div>
                      </div>\n";
            }
	}
}

// ------------------------------------------------------------------------

// ------------------------------------------------------------------------

/**
 * form_select
 *
 * Generates an HTML heading tag.  First param is the data.
 * Second param is the size of the heading tag.
 *
 * @access	public
 * @param	string
 * @param	integer
 * @return	string
 */
if ( ! function_exists('form_select'))
{
	function form_select($name, $label, array $values, $selected = '', $size = 3, $atributes = '')
	{
            $opts = "";
            foreach ($values as $key => $value) {
                if ($key == $selected || $value == $selected) {
                    $opts .= "<option value='$key' selected >$value</option>\n";
                } else {
                    $opts .= "<option value='$key'>$value</option>\n";
                }                
            }
            
            return "<div class='form-group'>
                        <label for='$name' class='col-sm-2 control-label'>$label</label>
                        <div class='col-xs-$size'>
                          <select class='form-control' name='$name' id='$name' $atributes >
                              $opts
                           </select>
                        </div>
                      </div>\n";
	}
}

// ------------------------------------------------------------------------

// ------------------------------------------------------------------------

if ( ! function_exists('form_button'))
{
    /**
     * Cria um Botão de Formulário fornecendo seus Atributos.
     * 
     * @param string $value <p>Nome do Botão.</p>
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
	function form_button($value , $type = 0, $option = 0, $size = 0, $disabled = FALSE)
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
            
            $button = "<div class='form-group'>
                            <div class='col-sm-offset-2 col-sm-10'>
                              <button type='$type' class='btn btn-$class' $disabled>$value</button>
                            </div>
                          </div>";
            
            return $button;
	}
}

// ------------------------------------------------------------------------