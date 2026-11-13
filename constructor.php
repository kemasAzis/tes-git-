<?php

class Karyawan {
    // ----------------------------------------------------
    // 1. VISIBILITAS (Hak Akses)
    // ----------------------------------------------------
    
    // PUBLIC: Bisa diakses dari mana saja (dari dalam maupun luar class).
    public $nama; 
    
    // PRIVATE: HANYA bisa diakses dari dalam class ini sendiri.
    // Tidak bisa diakses dari luar, bahkan oleh anak class (turunannya).
    private $gaji;
    
    // PROTECTED: Bisa diakses dari dalam class ini DAN class turunannya (Inheritance).
    // Tapi tetap tidak bisa diakses langsung dari luar.
    protected $departemen;

    // ----------------------------------------------------
    // 2. CONSTRUCTOR (__construct)
    // ----------------------------------------------------
    
    // Constructor adalah method spesial yang OTOMATIS BERJALAN 
    // saat kita membuat object baru menggunakan kata kunci 'new'.
    public function __construct($namaAwal, $gajiAwal, $departemenAwal) {
        // Memasukkan nilai awal ke dalam properti
        $this->nama = $namaAwal;
        $this->gaji = $gajiAwal;
        $this->departemen = $departemenAwal;
        
        echo "=> Constructor berjalan: Object Karyawan '{$this->nama}' berhasil dibuat!<br>";
    }

    // Method public untuk "mengintip" data private
    public function lihatGaji() {
        return "Gaji {$this->nama} adalah Rp " . number_format($this->gaji, 0, ',', '.');
    }
}


// --- MARI KITA UJI KODENYA ---

echo "<b>Membuat Object Baru:</b><br>";
// Saat baris di bawah ini dieksekusi, __construct() otomatis dipanggil!
$karyawan1 = new Karyawan("Andi", 7500000, "IT");
echo "<br>";

echo "<b>Menguji Visibilitas:</b><br>";

// 1. Mengakses PUBLIC (Berhasil)
echo "Nama Karyawan: " . $karyawan1->nama . "<br>"; 

// 2. Mengakses PRIVATE dari luar (Gagal/Error jika tanda // dihapus)
// echo $karyawan1->gaji; 
// Jika dijalankan akan muncul: Fatal error: Cannot access private property

// 3. Mengakses PROTECTED dari luar (Gagal/Error jika tanda // dihapus)
// echo $karyawan1->departemen; 
// Jika dijalankan akan muncul: Fatal error: Cannot access protected property

// 4. Cara yang benar mengakses PRIVATE dari luar (lewat method public)
echo "Cek Gaji: " . $karyawan1->lihatGaji() . "<br>";

?>