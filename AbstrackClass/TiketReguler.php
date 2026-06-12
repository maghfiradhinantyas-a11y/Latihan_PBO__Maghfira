<?php
// Pastikan file abstract class sudah di-include
require_once 'Tiket.php';

class TiketRegular extends Tiket {
    // Properti tambahan spesifik
    private $tipe_audio;
    private $lokasi_baris;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $tipe_audio, $lokasi_baris) {
        // Memanggil constructor dari abstract class (induk)
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        $this->tipe_audio = $tipe_audio;
        $this->lokasi_baris = $lokasi_baris;
    }

    // Mengimplementasikan metode abstrak dari induk
    public function hitungTotalHarga() {
        // Tiket Reguler hanya menghitung harga dasar dikali jumlah kursi
        return $this->harga_dasar_tiket * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas() {
        echo "Fasilitas Tiket Regular:<br>";
        echo "- Audio: " . $this->tipe_audio . "<br>";
        echo "- Posisi Kursi: " . $this->lokasi_baris . "<br>";
    }
}
?>