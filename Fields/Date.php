<?php

namespace My_Helper\Form\Fields;

class Date extends Field
{
    public function __construct($name, $id, $class, $value, $taille = 3, $label)
    {
        parent::__construct('date', $name, $id, $class, $value, '', $taille, $label);
    }

    public function getValue()
    {
        return strftime('%Y-%m-%d', strtotime(str_replace('/', '-', $this->value)));
    }
}