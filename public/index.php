<?php

require_once dirname(__DIR__) . '/bootstrap.php';

header('Content-Type: text/plain; charset=UTF-8');

$group = new \University\Group("    ");
$siaomi = new \University\Groups\SIAOMI();
$student = new \University\Student();

$siaomi->sayGroup();
$siaomi->printStudents();
$siaomi->addStudent($student);
$siaomi->delStudent($student);
$siaomi->delStudent($student);
$siaomi->printStudents();
$student->say();
