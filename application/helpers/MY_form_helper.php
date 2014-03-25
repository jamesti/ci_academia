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