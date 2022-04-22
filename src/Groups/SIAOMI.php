<?php
namespace University\Groups;

class SIAOMI extends \University\Group
{
    public function __construct()
    {
        parent::__construct("SIAOMI");
    }

    public function sayGroup() {
        $group = parent::getGroup();
        echo($group . " - группа шизиков!" . PHP_EOL);
    }
}