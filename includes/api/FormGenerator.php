<!--------------------------------------------------->
<!-- Dean James - Content Management System Engine -->
<!--------------------------------------------------->

<?php

/**
 * 
 */
class FormGenerator
{

    /**
     * 
     */
    public static function render($form, $data = null)
    {
        foreach ($form as $element)
        {
            self::renderElement($element, $data);
        }
    }

    /**
     * 
     */
    private static function renderElement($element, $data)
    {
        $permissions = [];

        if (isset($_SESSION["login"]))
        {
            $accessLevel = $_SESSION["login"]["access_level"];
            $permissions = isset($element["permissions"][$accessLevel]) ? $element["permissions"][$accessLevel] : [];
        }

        switch ($element['type'])
        {
            case 'text':
            case 'password':
            case 'number':
            case 'hidden':
            case 'file':
                self::generateInput($element, $data, $permissions);
                break;
            case 'submit':
                self::generateSubmit($element, $permissions);
                break;
            case 'select':
                self::generateSelect($element, $data, $permissions);
                break;
            case 'textarea':
                self::generateTextArea($element, $data, $permissions);
                break;
        }
    }

    /**
     * 
     */
    private static function generateInput($element, $data, $permissions)
    {
        $value = isset($data) ? $data[$element['name']] : '';
        $readonly = (isset($permissions["readonly"]) && $permissions["readonly"] == 1) ? "readonly" : "";

        echo ''
        . '<div class="form-group">'
        . '<input type="' . $element['type'] . '" id="' . $element['name'] . '" name="' . $element['name'] . '" value="' . $value . '"' . $readonly . '>'
        . '<label for="' . $element['name'] . '">' . $element['label'] . '</label>'
        . '</div>';
    }

    /**
     * 
     */
    private static function generateSelect($element, $data, $permissions)
    {
        if ((isset($permissions["readonly"]) && $permissions["readonly"] == 1))
        {
            $element['type'] = "text";
            self::generateInput($element, $data, $permissions);
            return;
        }

        echo ''
        . '<div class="form-group">'
        . '<select id="' . $element['name'] . '" name="' . $element['name'] . '">';

        if (isset($element["options"]))
        {
            for ($i = 0; $i < count($element["options"]); $i++)
            {
                $selected = ($data[$element['name']] == $element["options"][$i]["value"] ? 'selected' : '');
                echo '<option value="' . $element["options"][$i]["value"] . '" ' . $selected . '>' . $element["options"][$i]["label"] . '</option>';
            }
        }

        echo ''
        . '</select>'
        . '<label for="' . $element['name'] . '">' . $element['label'] . '</label>'
        . '</div>';
    }

    /**
     * 
     */
    private static function generateTextArea($element, $data, $permissions)
    {
        $value = isset($data) ? $data[$element['name']] : '';

        echo ''
        . '<div class="form-group">'
        . '<textarea id="' . $element['name'] . '" name="' . $element['name'] . '" rows="' . $element['size'] . '">' . $value . '</textarea>'
        . '<label for="' . $element['name'] . '">' . $element['label'] . '</label>'
        . '</div>';
    }

    /**
     * 
     */
    private static function generateSubmit($element, $permissions)
    {
        if (isset($permissions["active"]) && $permissions["active"] == false)
        {
            return;
        }

        echo ''
        . '<div class="form-group form-group-button">'
        . '<button id="' . $element['name'] . '" class="' . $element['class'] . '">' . $element['label'] . '</button>'
        . '</div>';
    }

}
