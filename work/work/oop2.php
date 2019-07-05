<?php
class Student {
    private $ch, $eng, $math;
    public function __construct($ch, $eng, $math){
        $this->ch = $ch;
        $this->eng = $eng;
        $this->math = $math;
    }
    public function sum(){
        return $this->ch + $this->eng + $this->math;
    }
    public function avg(){
        return $this->sum() / 3;
    }
    public function setCh($newch){
        $this->ch = $newch;
    }
}