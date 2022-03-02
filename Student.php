<?php

namespace Coursework;
class Student
{
    public $id;

    public $name;

    public $surname;

    function __construct($id, $name, $surname)

    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
    }
}
