<?php
namespace app\Models;

class Team {
    public $name;
    public $coach;

    public function __construct($name, $coach) {
        $this->name = $name;
        $this->coach = $coach;
    }
}
