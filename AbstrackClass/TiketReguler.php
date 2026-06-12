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

    // ==========================================
    // GETTER & SETTER SPESIFIK REGULAR
    // ==========================================

    public function getTipeAudio() {
        return $this->tipe_audio;
    }

    public function setTipeAudio($tipe_audio) {
        $this->tipe_audio = $tipe_audio;
    }

    public function getLokasiBaris() {
        return $this->lokasi_baris;
    }

    public function setLokasiBaris($lokasi_baris) {
        $this->lokasi_baris = $lokasi_baris;
    }

    // ==========================================
    // TAHAP 5: IMPLEMENTASI POLIMORFISME OVERRIDING
    // ==========================================

    public function hitungTotalHarga() {
        // Logika Bisnis: Total Harga = jumlah_kursi * hargaDasarTiket
        // (Tarif standar murni tanpa biaya tambahan fasilitas)
        return $this->jumlah_kursi * $this->harga_dasar_tiket;
    }

    public function tampilkanInfoFasilitas() {
        echo "Fasilitas Tiket Regular:<br>";
        echo "- Audio: " . $this->tipe_audio . "<br>";
        echo "- Posisi Kursi: " . $this->lokasi_baris . "<br>";
    }
}
?>