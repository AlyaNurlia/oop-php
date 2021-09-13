<?php
{
    //mendefinisikan sebuah kelas
    class kucing
{
    //membuat property atau atribut
    public $warna ="coklat";
    public $jumlahkaki = 4;
    public $jnsbulu ="panjang";
    public $makananfav ="Ikan Pindang";

    //membuat method(behaviour)
    public function bersuara()
    {
        return "meowng,,,meowng,,,meowng,,,";
    }

    public function berburu()
    {
        return "Berburu Ikan";
        }
    }
    //membuat object (inisisasi object)
    $kucing1 = new kucing();
    echo "Warna Kucing Itu ".$kucing1 ->warna. "<br>";
    echo "Suara Kucing Itu ".$kucing1 ->bersuara()."<hr>";

    $kucing2 = new kucing();
    //set warna kucing
    $kucing2->warna = "orange";
    echo "Warna Kucing Itu ".$kucing2 ->warna. "<br>";
    echo "Suara Kucing Itu ".$kucing2 ->bersuara()."<hr>";
}
?>