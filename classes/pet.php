<?php
class Pet
{
    private $_name;
    private $_color;

    function __construct()
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo $this->_name . " is Eating...<br>";
    }

    function talk()
    {
        echo $this->_name . " is Talking...<br>";
    }

    function sleep()
    {
        echo $this->_name . " is Sleeping...<br>";
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function getName()
    {
        return $this->_name;
    }

    function setColor($color)
    {
        $this->_color = $color;
    }

    function getColor()
    {
        return $this->_color;
    }
}