<?php

namespace My_Helper\Form\Fields;


class Radio extends Field
{
    protected $radios;

    /**
     * @return RadioOptions[]
     */
    public function getRadios()
    {
        return $this->radios;
    }

    /**
     * @param RadioOptions[] $radios
     */
    public function setRadios($radios)
    {
        $this->radios = $radios;
    }


    public function __construct($name, $id, $class, $taille = 3, $label, array $radios, $offset = 0)
    {
        parent::__construct('Radio', $name, $id, $class, '', '', $taille, $label, $offset);
        $this->radios = $radios;
    }

    public function getHtmlField()
    {
        $outDatas = '<div id="' . $this->getId() . '" class="' . $this->getClass() . '"><h6 class="color-theme text bold">' . $this->getLabel() . '</h6>';
        foreach ($this->getRadios() as $radio) {
            $outDatas .= $radio->getHtmlField();
        }
        $outDatas .= '</div>';
        return $outDatas;
    }

}