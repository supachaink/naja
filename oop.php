<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class car{
    public $color;
    
    public function setcolor($c) {
        return 'Car color :'.$this -> color = $c;
    }
        
    public function sayhello() {
      return 'say hello i ba';
    }
}
    
    $newcar = new car;
    
    $test=$newcar->setColor('red');
    echo $test;
    echo '<hr>';
    echo $newcar->sayHello();
    echo '<hr>';
    echo $newcar->color='red';
    
    //public function sayhello() {
      //   return 'sayhello
        
    
?>


