<?php
$kelas = 4;

if ($kelas == 4) {

    // SOAL PENJUMLAHAN
    $no = 1;
    $kunci = [];
    for ($i=0; $i < 5; $i++) {
        $a = rand(5000,9999);
        $b = rand(1000,5000); 
        $kunci[$no] = $a+$b; 
        echo $no.". ";
        echo $a." + ".$b." = ";
        echo "<br>";
        $no++;
    }

    // SOAL PENGURANGAN
    for ($i=0; $i < 5; $i++) { 
        $a = rand(5000,9999);
        $b = rand(1000,5000);
        $kunci[$no] = $a-$b;
        echo $no.". ";
        echo $a." - ".$b." = ";
        echo "<br>";
        $no++;
    }

    // SOAL PERKALIAN
    for ($i=0; $i < 5; $i++) { 
        $a = rand(101,999);
        $b = rand(15,99);
        $kunci[$no] = $a*$b;
        echo $no.". ";
        echo $a." x ".$b." = ";
        echo "<br>";
        $no++;
    }

    // SOAL PEMBAGIAN
    for ($i=0; $i < 5; $i++) { 
        $a = rand(1,99);
        $b = rand(1,10);
        $c = $a * $b;
        $kunci[$no] = $a;
        echo $no.". ";
        echo $c." : ".$b." = ";
        echo "<br>";
        $no++;
    }
} else if($kelas == 2)
{
   
    // SOAL PENJUMLAHAN
    $no = 1;
    $kunci = [];
    for ($i=0; $i < 5; $i++) {
        $a = rand(5000,9999);
        $b = rand(1000,5000); 
        $kunci[$no] = $a+$b; 
        echo $no.". ";
        echo $a." + ".$b." = ";
        echo "<br>";
        $no++;
    }

    // SOAL PENGURANGAN
    for ($i=0; $i < 5; $i++) { 
        $a = rand(5000,9999);
        $b = rand(1000,5000);
        $kunci[$no] = $a-$b;
        echo $no.". ";
        echo $a." - ".$b." = ";
        echo "<br>";
        $no++;
    }

    // SOAL PERKALIAN
    for ($i=0; $i < 5; $i++) { 
        $a = rand(0,50);
        $b = rand(0,10);
        $kunci[$no] = $a*$b;
        echo $no.". ";
        echo $a." x ".$b." = ";
        echo "<br>";
        $no++;
    }

    // SOAL PEMBAGIAN
    for ($i=0; $i < 5; $i++) { 
        $a = rand(1,50);
        $b = rand(1,10);
        $c = $a * $b;
        $kunci[$no] = $a;
        echo $no.". ";
        echo $c." : ".$b." = ";
        echo "<br>";
        $no++;
    } 
} else if($kelas == 1)
{
   
    // SOAL PENJUMLAHAN
    $no = 1;
    $kunci = [];
    for ($i=0; $i < 10; $i++) {
        $a = rand(1,20);
        $b = rand(1,20); 
        $kunci[$no] = $a+$b; 
        echo $no.". ";
        echo $a." + ".$b." = ";
        echo "<br>";
        $no++;
    }

    // SOAL PENGURANGAN
    for ($i=0; $i < 10; $i++) { 
        $a = rand(11,20);
        $b = rand(0,11);
        $kunci[$no] = $a-$b;
        echo $no.". ";
        echo $a." - ".$b." = ";
        echo "<br>";
        $no++;
    }
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<pre>";
print_r($kunci);
?>