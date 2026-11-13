<?php

class Karyawan {

    public $nama;
    private $gaji;
    protected $departemen;

    public function __construct($namaAwal, $gajiAwal, $departemenAwal) {

        $this->nama = $namaAwal;
        $this->gaji = $gajiAwal;
        $this->departemen = $departemenAwal;

        echo "=> Constructor berjalan: Object Karyawan '{$this->nama}' berhasil dibuat!<br>";
    }

    public function lihatGaji() {
        return "Gaji {$this->nama} adalah Rp " . number_format($this->gaji, 0, ',', '.');
    }
}

class Manager extends Karyawan {

    public function infoDepartemen() {

        return "Manager {$this->nama} memimpin departemen: <b>{$this->departemen}</b>";
    }

    public function cobaCetakGaji() {

        return "Bocoran dari sistem: " . $this->lihatGaji();
    }
}

echo "<b>Membuat Object Karyawan Biasa:</b><br>";
$karyawan1 = new Karyawan("Andi", 7500000, "IT");
echo "<br>";

echo "<b>Membuat Object Manager (Class Anak):</b><br>";

$manager1 = new Manager("Budi Susanto", 15000000, "Marketing");
echo "<br>";

echo "<b>Menguji Inheritance & Protected:</b><br>";

echo "- " . $manager1->infoDepartemen() . "<br>";

echo "- " . $manager1->cobaCetakGaji() . "<br>";

?>