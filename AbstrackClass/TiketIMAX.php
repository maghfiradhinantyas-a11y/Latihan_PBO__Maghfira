<?php
// Pastikan file abstract class sudah di-include
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
    // Properti tambahan spesifik
    private $kacamata_3d_id;
    private $efek_gerak_fitur;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $kacamata_3d_id, $efek_gerak_fitur) {
        // Memanggil constructor dari abstract class (induk)
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        $this->kacamata_3d_id = $kacamata_3d_id;
        $this->efek_gerak_fitur = $efek_gerak_fitur;
    }

    // ==========================================
    // GETTER & SETTER SPESIFIK IMAX
    // ==========================================

    public function getKacamata3dId() {
        return $this->kacamata_3d_id;
    }
    public function setKacamata3dId($kacamata_3d_id) {
        $this->kacamata_3d_id = $kacamata_3d_id;
    }

    public function getEfekGerakFitur() {
        return $this->efek_gerak_fitur;
    }
    public function setEfekGerakFitur($efek_gerak_fitur) {
        $this->efek_gerak_fitur = $efek_gerak_fitur;
    }

    // ==========================================
    // TAHAP 5: IMPLEMENTASI POLIMORFISME OVERRIDING
    // ==========================================
    
    public function hitungTotalHarga() {
        // Logika Bisnis Baru: Biaya tambahan teknologi layar & audio flat Rp 35.000
        $biaya_tambahan_imax = 35000;
        return ($this->jumlah_kursi * $this->harga_dasar_tiket) + $biaya_tambahan_imax;
    }

    public function tampilkanInfoFasilitas() {
        echo "Fasilitas Tiket IMAX:<br>";
        echo "- ID Kacamata 3D: " . ($this->kacamata_3d_id ?? "Tidak menggunakan kacamata 3D") . "<br>";
        echo "- Fitur Efek Gerak: " . $this->efek_gerak_fitur . "<br>";
    }
}
?>