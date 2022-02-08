<?php

abstract class Machine
{
    public $options;

    protected abstract function Forward();
    protected abstract function Back();
}

interface Ability
{
    public function useOptions();
}

class Car extends Machine implements Ability
{
    public $carInterior;
    public $color;

    public function __construct($options, $carInterior, $color)
    {
        $this->options = $options;
        $this->carInterior = $carInterior;
        $this->color = $color;
    }

    public function useOptions()
    {
        echo "Использованно: {$this->options}";
    }
    public  function Forward()
    {
        // Go!
    }
    public  function Back()
    {
        // Go!
    }
    public  function useWiper()
    {
        // Go!
    }
    public  function useSignal()
    {
        // Go!
    }
}

class Bulldozer extends Machine implements Ability
{
    public $power;

    public function __construct($options, $power)
    {
        $this->options = $options;
        $this->power = $power;
    }
    public  function Forward()
    {
        // Go!
    }
    public  function Back()
    {
        // Go!
    }
    public function useOptions()
    {
        echo "Использованно: {$this->options}";
    }
}

class Tank extends Machine implements Ability
{
    public $model;

    public function __construct($options, $model)
    {
        $this->options = $options;
        $this->model = $model;
    }
    public  function Forward()
    {
        // Go!
    }
    public  function Back()
    {
        // Go!
    }
    public function useOptions()
    {
        echo "Использованно: {$this->options}";
    }
}
