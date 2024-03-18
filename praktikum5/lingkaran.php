<?php
class Lingkaran {
    private $jari;
    const PHI = 3.14;

   function __construct($r) {
     $this->jari = $r;
   }
    
   function getLuas(){
        return self ::PHI * $this->jari * $this->jari;

    }

    function getkeliling(){
        return 2 * self::PHI * $this->jari;
    }
} 

// Instance object 
$lingkaran1 = new Lingkaran(10);
echo "Nilai PHI = " . Lingkaran::PHI;
echo "<br>Luas Lingkaran = ". $lingkaran1->getLuas();
echo "<br>Keliling Lingkaran = ". $lingkaran1->getKeliling();

// instance object ke-2
$lingkaran2 = new Lingkaran(20);
echo "<br>Luas Lingkaran = ". $lingkaran2->getLuas();
echo "<br>Keliling Lingkaran = ". $lingkaran2->getKeliling();
