<?php

class mobil {
    public $warna = "merah";
    public $merk = "toyota";
    public $tahun = 2020;
}

$mobil1 = new mobil();

// mobil toyota berwarna merah tahun 2020
echo "<br>";
echo "mobil " . $mobil1->merk . " berwarna " . $mobil1->warna . " tahun " . $mobil1->tahun; 

class motor {
    // properti
    public $warna ;
    public $merk ;
    public $tahun ;
    public $jenis ;

    // method
    public function infoMotor() {
        return "motor " . $this->merk . " berwarna " . $this->warna . " tahun " . $this->tahun . " jenis " . $this->jenis;
    }

    public function nyalakanMesin() {
        return "Mesin motor " . $this->merk . " dihidupkan. Vroom vroom!";
    }
}
// motor1 adalah object dari class motor
$motor1 = new motor();
$motor1->merk = "honda";
$motor1->warna = "hitam";
$motor1->tahun = 2021;
$motor1->jenis = "sport";


// motor 2 adalah object dari class motor
$motor2 = new motor();
$motor2->merk = "yamaha";
$motor2->warna = "biru";
$motor2->tahun = 2022;
$motor2->jenis = "moped";

echo "<br>";
echo $motor1->infoMotor();
echo "<br>";
echo $motor1->nyalakanMesin();
echo "<br>";
echo $motor2->infoMotor();

?>