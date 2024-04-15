<?php

class Animal
{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function eat()
    {
        echo $this->nama . " is eating.<br>";
    }

    public function sleep()
    {
        echo $this->nama . " is sleeping.<br>";
    }
}

class Cat extends Animal
{
    public function meow()
    {
        echo $this->nama . " says meow!<br>";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo $this->nama . " says woof!<br>";
    }
}

$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat->eat();
$dog->sleep();

$cat->meow();
$dog->bark();
