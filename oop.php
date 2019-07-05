<?php
/*
* 物件導向
*/
class Bike {
    protected $speed = 0;
    function upSpeed(){
        $this->speed = $this->speed<1 ? 1:$this->speed*1.2;
    }
    function downSpeed(){
        $this->speed = $this->speed<1 ? 0:$this->speed*0.7;
    }
    function getSpeed(){
        return $this->speed;
    }
}

class Scooter extends Bike {
    private $gear = 0;
    // override -> 將父類別的方法/功能蓋掉 (名字與接收參數相符才算蓋掉)
    function upSpeed(){
        //$this->speed = $this->speed<1 ? 2:$this->speed*2;
        parent::upspeed();  // 使用父親的function內容
    }
    function upSpeedV2(){
        $this->speed = $this->speed<1 ? 2 : $this->speed*($this->gear*1.2);
    }
    function chGear($gear){
        $this->gear = $gear;
    }
}

class Person {
    private $myBike;  // has-a Bike Object
    private $myScooter;  // has-a Bike Object
    private $myName;

    // 建構式, 建構子, 建構方法 => 物件的初始化程序
    function __construct($name){
        $this->myBike = new Bike;
        $this->myScooter = new Scooter;
        $this->myName = $name;
    }

    // // 解構式
    // function __destruct($name){

    // }
}


$b1 = new Bike;
// var_dump($b1);
$b2 = new Scooter;
$b1->upSpeed();$b1->upSpeed();$b1->upSpeed();$b1->upSpeed();
$b1->downSpeed();

$count = 0;
do{
$b2->upSpeed();
$count++;
}while($b2->getSpeed()<10);

echo '腳踏車1的當前速度 : ' . $b1->getSpeed() . ' km/hr<br>';
echo '腳踏車2的當前速度 : ' . $b2->getSpeed() . ' km/hr<br>';
echo '加速' . $count . '次，速度可以到10以上<hr>';


$p1 = new Person('Archer');
var_dump($p1);