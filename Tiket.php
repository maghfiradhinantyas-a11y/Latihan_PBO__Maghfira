<?php

abstract class Tiket {
    // Properti/Atribut Terenkapsulasi (Protected)
    protected $id_tiket;
    protected $nama_film;
    protected $jadwal_tayang;
    protected $jumlah_kursi;
    protected $harga_dasar_tiket;

    // Constructor untuk menginisialisasi atribut induk saat objek anak dibuat
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket) {
        $this->id_tiket = $id_tiket;
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;
        $this->harga_dasar_tiket = $harga_dasar_tiket;
    }

    // ==========================================
    // GETTER & SETTER (Untuk Akses Luar Kelas)
    // ==========================================

    // 1. id_tiket
    public function getIdTiket() {
        return $this->id_tiket;
    }
    public function setIdTiket($id_tiket) {
        $this->id_tiket = $id_tiket;
    }

    // 2. nama_film
    public function getNamaFilm() {
        return $this->nama_film;
    }
    public function setNamaFilm($nama_film) {
        $this->nama_film = $nama_film;
    }

    // 3. jadwal_tayang
    public function getJadwalTayang() {
        return $this->jadwal_tayang;
    }
    public function setJadwalTayang($jadwal_tayang) {
        $this->jadwal_tayang = $jadwal_tayang;
    }

    // 4. jumlah_kursi
    public function getJumlahKursi() {
        return $this->jumlah_kursi;
    }
    public function setJumlahKursi($jumlah_kursi) {
        // Contoh validasi sederhana: jumlah kursi tidak boleh minus
        if ($jumlah_kursi > 0) {
            $this->jumlah_kursi = $jumlah_kursi;
        }
    }

    // 5. harga_dasar_tiket
    public function getHargaDasarTiket() {
        return $this->harga_dasar_tiket;
    }
    public function setHargaDasarTiket($harga_dasar_tiket) {
        $this->harga_dasar_tiket = $harga_dasar_tiket;
    }

    // ==========================================
    // METODE ABSTRAK
    // ==========================================
    
    // Wajib di-override/diimplementasikan oleh class anak
    abstract public function hitungTotalHarga();
    abstract public function tampilkanInfoFasilitas();
}