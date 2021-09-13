<?php
{
    class komputer
{
    public $nama = "Alya Nurlia";
    public $merek = "Acer";
    public $ukuran = 22  ;
    
    public function Dinyalakan()
    {
        return "Silahkan anda Nyalakan";
    }

    public function Dimatikan()
    {
        return "Silahkan anda matikan";
        }
    }
    $komputer1 = new komputer();
    echo "Nama Pemilik :  ".$komputer1->nama. "<br>";
    echo "Merk Komputer: ".$komputer1 -> merek."<br>";
    echo "Ukuran Komputer: ".$komputer1 -> ukuran. " inch <br>";
    echo "Status Komputer: ".$komputer1->Dinyalakan(). "<hr>";

    $komputer2 = new komputer();
    $komputer2->nama = "Anggi Fitria";
    $komputer2->merk = "Asus";
    $komputer2->ukuran = 20;
    echo "Nama Pemilik :  ".$komputer2->nama. "<br>";
    echo "Merk Komputer: ".$komputer2 -> merek."<br>";
    echo "Ukuran Komputer: ".$komputer2 -> ukuran. " inch <br>";
    echo "Status Komputer: ".$komputer2->Dimatikan(). "<hr>";

    $komputer3 = new komputer();
    $komputer3->nama = "Anisa Andriani";
    $komputer3->merk = "Asus";
    $komputer3->ukuran = 22;
    echo "Nama Pemilik :  ".$komputer3->nama. "<br>";
    echo "Merk Komputer: ".$komputer3 -> merek."<br>";
    echo "Ukuran Komputer: ".$komputer3 -> ukuran. " inch <br>";
    echo "Status Komputer: ".$komputer3->Dinyalakan(). "<hr>";

    $komputer4 = new komputer();
    $komputer4->nama = "Arif muhammad Iqbal";
    $komputer4->merk = "Asus";
    $komputer4->ukuran = 23;
    echo "Nama Pemilik :  ".$komputer4->nama. "<br>";
    echo "Merk Komputer: ".$komputer4 -> merek."<br>";
    echo "Ukuran Komputer: ".$komputer4 -> ukuran. " inch <br>";
    echo "Status Komputer: ".$komputer4->Dinyalakan(). "<hr>";
}
?>