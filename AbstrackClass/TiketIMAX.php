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

    // Mengimplementasikan metode abstrak dari induk
    public function hitungTotalHarga() {
        // Studio IMAX memiliki biaya tambahan teknologi (misal: +Rp 25.000 per kursi)
        $biaya_tambahan_imax = 25000 * $this->jumlah_kursi;
        return ($this->harga_dasar_tiket * $this->jumlah_kursi) + $biaya_tambahan_imax;
    }

    public function tampilkanInfoFasilitas() {
        echo "Fasilitas Tiket IMAX:<br>";
        echo "- ID Kacamata 3D: " . ($this->kacamata_3d_id ?? "Tidak menggunakan kacamata 3D") . "<br>";
        echo "- Fitur Efek Gerak: " . $this->efek_gerak_fitur . "<br>";
    }
}
?>