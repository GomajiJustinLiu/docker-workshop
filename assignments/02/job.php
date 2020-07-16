<?php
class Job {
    public function perform() {
        echo "my-job start!\n";
        print_r($this->args);
    }
}