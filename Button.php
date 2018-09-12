<?php

namespace My_Helper\Form;


use My_Helper\Form\Fields\iField;

class Button implements iField
{
    protected $label, $id, $class, $taille;

    /**
     * Button constructor.
     * @param $label
     * @param $id
     * @param $class
     * @param $taille
     */
    public function __construct($label = '', $id = '', $class = '', $taille = 3)
    {
        $this->label = $label;
        $this->id = $id;
        $this->class = $class;
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    public function getHtmlField()
    {
        return '<button type="submit" id="' . $this->id . '" class="' . $this->class . '">' . $this->label . '</button>';
    }

}