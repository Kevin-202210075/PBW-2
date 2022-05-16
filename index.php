<?php
class Animal
{
    // public $nama;
    // public $legs;
    // public $blood;

    public function set_nama($nama)
    {
        $this->nama = $nama;
    }

    public function get_nama()
    {
        return $this->nama;
    }

    public function set_legs($legs)
    {
        $this->legs = $legs;
    }

    public function get_legs()
    {
        return $this->legs;
    }

    public function set_blood($blood)
    {
        $this->blood = $blood;
    }

    public function get_blood()
    {
        return $this->blood;
    }
}

class Ape extends Animal
{

    public function yell()
    {
        echo "Yell: Auoo";
    }
}

class Frog extends Animal
{

    public function jump()
    {
        echo "Jump: Hop Hop";
    }
}

$sheep = new Animal();
$sheep->set_nama("Shaun");
$sheep->set_legs(4);
$sheep->set_blood("No");

$sungokong = new Ape();
$sungokong->set_nama("Kera Sakti");
$sungokong->set_legs("2");
$sungokong->set_blood("No");

$kodok = new Frog();
$kodok->set_nama("Buduk");
$kodok->set_legs("4");
$kodok->set_blood("No");

echo "<h3>Output Akhir</h3>";
echo "Nama: " . $sheep->get_nama();
echo "<br>";
echo "Legs: " . $sheep->get_legs();
echo "<br>";
echo "Cold Blooded: " . $sheep->get_blood();
echo "<br>";


echo "<br>";
echo "Nama: " . $kodok->get_nama();
echo "<br>";
echo "Legs: " . $kodok->get_legs();
echo "<br>";
echo "Cold Blooded: " . $kodok->get_blood();
echo "<br>";
echo $kodok->jump();
echo "<br>";


echo "<br>";
echo "Nama: " . $sungokong->get_nama();
echo "<br>";
echo "Legs: " . $sungokong->get_legs();
echo "<br>";
echo "Cold Blooded: " . $sungokong->get_blood();
echo "<br>";
echo $sungokong->yell();
