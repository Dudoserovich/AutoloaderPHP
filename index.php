<?php
function customAutoload(string $class)
{
    $prefix = 'University\\';
    $base_dir = __DIR__ . '/src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', DIRECTORY_SEPARATOR, $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('customAutoload');

$group = new \University\Group("    ");
$siaomi = new \University\SIAOMI();
$student = new \University\Student();

#$group->sayGroup();
$siaomi->sayGroup();
$siaomi->printStudents();
$siaomi->addStudent($student);
$siaomi->delStudent($student);
$siaomi->delStudent($student);
$siaomi->printStudents();
$student->say();
