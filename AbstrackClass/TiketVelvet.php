<?php
// Pastikan file abstract class sudah di-include
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    // Properti tambahan spesifik
    private $bantal_selimut_pack;
    private $layanan_butler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $bantal_selimut_pack, $layanan_butler) {
        // Memanggil constructor dari abstract class (induk)
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        $this->bantal_selimut_pack = $bantal_selimut_pack;
        $this->layanan_butler = $layanan_butler;
    }

    // ==========================================
    // GETTER & SETTER SPESIFIK VELVET
    // ==========================================

    public function getBantalSelimutPack() {
        return $this->bantal_selimut_pack;
    }

    public function setBantalSelimutPack($bantal_selimut_pack) {
        $this->bantal_selimut_pack = $bantal_selimut_pack;
    }

    public function getLayananButler() {
        return $this->layanan_butler;
    }

    public function setLayananButler($layanan_butler) {
        $this->layanan_butler = $layanan_butler;
    }

    // ==========================================
    // TAHAP 5: IMPLEMENTASI POLIMORFISME OVERRIDING
    // ==========================================

    public function hitungTotalHarga() {
        // Logika Bisnis Baru: Total Harga = (jumlah_kursi * hargaDasarTiket) * 1.50
        // (Dikenakan surcharge/biaya tambahan kelas premium sebesar 50% dari total harga dasar)
        return ($this->jumlah_kursi * $this->harga_dasar_tiket) * 1.50;
    }

    public function tampilkanInfoFasilitas() {
        echo "Fasilitas Tiket Velvet (Premium Bed):<br>";
        echo "- Jumlah Paket Bantal & Selimut: " . $this->bantal_selimut_pack . " Pack<br>";
        echo "- Layanan Butler (Pelayan): " . ($this->layanan_butler ? "Tersedia (Aktif)" : "Tidak Tersedia") . "<br>";
    }
}
?>