<?php

class Kalibataku
{

    private $angka1;
    protected $angka2;
    public $angka3;

    public function setTambah($angka1, $angka2, $angka3)
    {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $this->angka3 = $angka3;
        $hasil = $this->angka1 + $this->angka2 + $this->angka3;
        return $hasil;
    }
    public function setRataRata($angka1, $angka2, $angka3)
    {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $this->angka3 = $angka3;
        $hasil = ($this->angka1 + $this->angka2 + $this->angka3) / 3;
        return $hasil;
    }
}