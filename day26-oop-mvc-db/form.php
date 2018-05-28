<?php

/**
 * form library
 * 
 * contains utility methods for generating form elements
 */

class form
{
    /**
     * return HTML code for a <select> input field
     * 
     * @param string $name - value of name attribute of the <select>
     * @param array $options - array of options in format value => label
     * @param mixed $selected - value of the <option> that should be selected
     * @param string $html - HTML attributes to insert into the opening <select> tag
     */
    public static function select($name, $options = [], $selected = null, $html = null)
    {
        $html = '';

        $html .= '<select ...';

        // your magic...

        $html .= '</select>';

        return $html;
    }

    public static function checkbox($name, $value, $checked = false, $html = null)
    {

    }

    public static function radio($name, $value, $checked = false, $html = null)
    {
        
    }
}