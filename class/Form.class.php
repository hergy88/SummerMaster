<?php


class Form {

    public $name;
    public $action;
    public $method;

    function __construct($method, $action, $name = 'form') {
        $this->name = $name;
        $this->action = $action;
        $this->method = $method;
    }

    function open_form($args = '') {
        echo '<form name="' . $this->name . '" action="' . $this->action . '" method="' . $this->method . '" ' . $args . '>';
    }

    function add_input($name, $type, $label = '', $value = '', $args = '') {
        echo $label . '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" ' . $args . '>';
    }

    public function add_text_area($name, $cols, $rows, $label = "", $value = "", $args = "") {
        echo $label . '<textarea name="' . $name . '" cols="' . $cols . '" rows="' . $rows . '" ' . $args . '>' . $value . '</textarea>';
    }

    function add_dropdown($name, $data, $label = '', $selected = '', $args = '') {

        echo $label . '<select name="' . $name . '" ' . $args . '>';
        if (count($data) == 2 && is_numeric($data[0]) && is_numeric($data[1])) {
            for ($i = $data[0]; $i <= $data[1]; $i++) {
                echo '<option>' . $i . '</option>';
            }
        } else
        if (is_array($data)) {
            foreach ($data as $k => $v) {
                if ($selected == $k) {
                    echo '<option value="' . $k . '" selected>' . $v . '</option>';
                } else {
                    echo '<option value="' . $k . '">' . $v . '</option>';
                }
            }
        } else {
            for ($i = 0; $i <= $data; $i++) {
                echo '<option>' . $i . '</option>';
            }
        }
        echo '<select>';
    }

    function close_form() {
        echo '</form>';
    }

}
