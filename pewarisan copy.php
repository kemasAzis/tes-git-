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

// ----------------------------------------------------
// 3. INHERITANCE (Pewarisan) & PROTECTED
// ----------------------------------------------------

// Class Manager "mewarisi" (extends) semua isi dari class Karyawan.
// Class Manager adalah "Anak", Class Karyawan adalah "Induk".
class Manager extends Karyawan {
    
    // Method khusus untuk Manager
    public function infoDepartemen() {
        // ✅ BERHASIL: Class anak (Manager) BISA mengakses properti PROTECTED milik induk
        return "Manager {$this->nama} memimpin departemen: <b>{$this->departemen}</b>";
    }

    public function cobaCetakGaji() {
        // ❌ GAGAL: Class anak (Manager) TIDAK BISA mengakses properti PRIVATE milik induk
        // return $this->gaji; // Jika kamu menghapus tanda komentar (//) di awal baris ini, script akan Error!
        
        // ✅ SOLUSI: Class anak memanggil method PUBLIC milik induk untuk mengakses data private
        return "Bocoran dari sistem: " . $this->lihatGaji();
    }
}


// --- MARI KITA UJI KODENYA ---

echo "<b>Membuat Object Karyawan Biasa:</b><br>";
$karyawan1 = new Karyawan("Andi", 7500000, "IT");
echo "<br>";

echo "<b>Membuat Object Manager (Class Anak):</b><br>";
// Manager BISA menggunakan constructor (__construct) milik Karyawan secara otomatis!
$manager1 = new Manager("Budi Susanto", 15000000, "Marketing");
echo "<br>";

echo "<b>Menguji Inheritance & Protected:</b><br>";

// 1. Mengakses PROTECTED lewat class Anak (Sukses)
echo "- " . $manager1->infoDepartemen() . "<br>";

// 2. Mengakses PRIVATE lewat class Anak (Terkunci, harus lewat method induk)
echo "- " . $manager1->cobaCetakGaji() . "<br>";

// 3. Coba akses PROTECTED dari luar class secara langsung (Tetap Error)
// echo $manager1->departemen; // Coba hapus // di baris ini, pasti akan Fatal Error!

?>