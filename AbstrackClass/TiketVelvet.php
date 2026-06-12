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

    // Mengimplementasikan metode abstrak dari induk
    public function hitungTotalHarga() {
        // Studio Velvet memiliki biaya premium flat (misal: +Rp 100.000 untuk fasilitas tempat tidur & pelayanan)
        $biaya_premium = 100000;
        return ($this->harga_dasar_tiket * $this->jumlah_kursi) + $biaya_premium;
    }

    public function tampilkanInfoFasilitas() {
        echo "Fasilitas Tiket Velvet (Premium Bed):<br>";
        echo "- Jumlah Paket Bantal & Selimut: " . $this->bantal_selimut_pack . " Pack<br>";
        echo "- Layanan Butler (Pelayan): " . ($this->layanan_butler ? "Tersedia (Aktif)" : "Tidak Tersedia") . "<br>";
    }
}
?>