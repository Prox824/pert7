<?php
class isiform extends CI_Model
{
    //Variabel Menampung Nilai
    public $nama, $nim, $kelas;
    //Metode Penjumlahan
    public function jumlah($nilai1 = null, $nilai2 = null)
    {
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}