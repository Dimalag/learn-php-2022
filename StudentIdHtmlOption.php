<?php

namespace Coursework;
class StudentIdHtmlOption
{
    public $id;

    function __construct($id)

    {
        $this->id = $id;
    }

    public function __toString(): string
    {
        return "<option value=\"" . $this->id . "\">" . $this->id . "</option>";
    }
}
