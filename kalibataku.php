<?php

class Kalibataku
{

    private $angka1;
    protected  $angka2;

    public function setTambah($angka1, $angka2)
    {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $hasil = $this->angka1 + $this->angka2;
        return $hasil;
    }

    public function setKurang($angka1, $angka2)
    {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $hasil = $this->angka1 - $this->angka2;
        return $hasil;
    }
    public function setKali($angka1, $angka2)
    {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $hasil = $this->angka1 * $this->angka2;
        return $hasil;
    }
    public function setBagi($angka1, $angka2)
    {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $hasil = $this->angka1 / $this->angka2;
        return $hasil;
    }
    public function setModulus($angka1, $angka2)
    {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $hasil = $this->angka1 % $this->angka2;
        return $hasil;
    }
}