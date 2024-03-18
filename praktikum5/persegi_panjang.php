<?php

class PersegiPanjang {
    // property
    public $panjang;
    public $lebar;


    // Method
    function __construct($p, $l){
       $this->panjang = $p;
       $this->lebar = $l;
    }

function getluas(){
      return $this->panjang * $this->lebar;
    }  

function getkeliling(){
    return 2 * ($this->panjang + $this->lebar);
   }
}

// instance object
$persegi_panjang1 = new PersegiPanjang(10,5);
echo "<br>Luas persegi panjang= ". $persegi_panjang1->getLuas();
echo "<br>keliling persegi panjang= ". $persegi_panjang1->getkeliling();
