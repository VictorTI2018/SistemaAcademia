<?php

namespace App\Core\Input;

class Field
{

    private $fields = [];

    public function request($fields = [])
    {
        foreach ($fields as $key => $value) {
            $this->fields[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }
        return $this->fields;
    }
}
