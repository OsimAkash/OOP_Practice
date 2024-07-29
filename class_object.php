
<?php

// Task Management System 

// Create Task


class Task {

    public $name;
    public $status;
    public $members = [  ];

    public function setName ($name) {
        $this->name = $name;
    }
    public function changeStatus($status) {
        $this->status = $status; 
    }

    public  function setMembers($members) {
        $this->members = $members;
    }
}

class Memeber {

}

$task_one = new Task();
$task_one->setName(name: 'Okka');
$task_two = new Task();