<?php

namespace My_Helper\Form\Fields;

class Field implements iField
{
    protected $type, $name, $id, $class, $value, $placeholder, $taille, $label;

    /**
     * Field constructor.
     * @param $type
     * @param $name
     * @param $id
     * @param $class
     * @param $value
     * @param $placeholder
     */
    public function __construct($type, $name, $id, $class, $value, $placeholder, $taille = 3, $label)
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->class = $class;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->taille = $taille;
        $this->label = $label;
    }

    /**
     * @return int
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param int $taille
     */
    public function setTaille($taille)
    {
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param mixed $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    public function getHtmlField()
    {
            return '<label class="label">' . $this->getLabel() . '</label>
            <input type="' . $this->getType() . '" name="' . $this->getName() . '" id="' . $this->getId() . '" class="' . $this->getClass() . '" value="' . $this->getValue() . '" placeholder="' . $this->getPlaceholder() . '">';
    }
}