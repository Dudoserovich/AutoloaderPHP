<?php
namespace University;
class Student
{
    private string $name;
    private string $quote;

    public function __construct($name = "Роман Лось", $quote = "Я пишу на PHP")
    {
        $this->name = $name;
        $this->quote = $quote;
    }

    public function getStudent():string {
        return "{$this->name} говорит: \"{$this->quote}\"";
    }

    public function say() {
        echo("{$this->name} говорит: \"{$this->quote}\"");
    }
}