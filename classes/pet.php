<?php
class Pet
{
    private $_name;
    private $_color;

    /**
     * Construct a Pet object
     *
     * Optional longer, multi-line
     * description with further details.
     *
     */
    function __construct()
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    /**
     * Tell the pet to eat
     *
     */
    function eat()
    {
        echo $this->_name . " is Eating...<br>";
    }

    /**
     * Tell the pet to talk
     *
     */
    function talk()
    {
        echo $this->_name . " is Talking...<br>";
    }

    /**
     * Tell the pet to sleep
     *
     */
    function sleep()
    {
        echo $this->_name . " is Sleeping...<br>";
    }

    /**
     * Set the pet's name
     *
     * @param String $name The pet's name
     *
     */
    function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * Get the pet's name
     *
     * @return String The pet's name
     *
     */
    function getName()
    {
        return $this->_name;
    }

    /**
     * Set the pet's color
     *
     * @param String $color The pet's color
     *
     */
    function setColor($color)
    {
        $this->_color = $color;
    }

    /**
     * Get the pet's color
     *
     * @return String The pet's color
     *
     */
    function getColor()
    {
        return $this->_color;
    }
}