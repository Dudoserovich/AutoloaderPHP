<?php

namespace University;

class Group
{
    protected string $number;
    protected array $arrStudents = [];

    public function __construct($number = "Хто мы?")
    {
        if (trim($number) != "")
            $this->number = $number;
        else $this->number = "Хто мы?";
    }

    protected function getGroup():string {
        return $this->number;
    }

    public function addStudent(Student $student) {
        array_push($this->arrStudents, $student);
    }

    public function delStudent(Student $student):bool {
        $index = array_search($student, $this->arrStudents);
        //print_r($index);
        if ($index >= 0) {
            unset($this->arrStudents[$index]);
            return true;
        } else {
            return false;
        }
    }

    public function printStudents() {
        if (count($this->arrStudents))
            foreach($this->arrStudents as $student) {
                echo(str_replace(" говорит", "[{$this->getGroup()}] говорит" ,
                        $student->getStudent()) . PHP_EOL);
            }
        else
            echo("Студенты группы {$this->getGroup()} вымерли!" . PHP_EOL);
    }
}