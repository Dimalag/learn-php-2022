<?php

namespace Coursework;

class Database
{
    private $students;

    function __construct()
    {
        $this->students = array(
            1 => new Student(1, "Василий", "Куклачёв"),
            2 => new Student(2, "Дмитрий", "Сявушкин"),
            3 => new Student(3, "Вячеслав", "Хан"),
            4 => new Student(4, "Юрий", "Бредзикин")
        );
    }

    public function getStudentIds(): array
    {
        return array_keys($this->students);
    }

    public function getStudentById($studentId): Student
    {
        return $this->students["$studentId"];
    }
}
