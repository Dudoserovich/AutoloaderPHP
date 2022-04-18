<?php
namespace University;

class SIAOMI extends Group
{
    public function __construct()
    {
        parent::__construct("SIAOMI");
    }

    public function sayGroup() {
        $group = parent::getGroup();
        print($group . " - группа шизиков!" . PHP_EOL);
    }
}