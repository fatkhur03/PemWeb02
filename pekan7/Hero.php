<?php
class Hero
{
    // Attribut / Properties pada class
    public $name;
    public $health;
    public $damage;
    public $level = 1;

    // constructor akan dijalankan secara otomatis
    public function __construct($name, $health, $damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }

    // method untuk menampilkan informasi hero
    public function getInfo()
    {
        echo "Hero: " . $this->name;
        echo "<br> HP: " . $this->health;
        echo "<br> Damage: " . $this->damage;
        echo "<br> Level: " . $this->level;

    }

    // method untuk naik satu level
    public function levelUp($number)
    {
        $this->level = $this->level + $number;
        $this->health = $this->health + (200 * $number);
        $this->damage = $this->damage + (50 * $number);
    }


}

// membuat objek dari class Hero
$hero1 = new Hero('Alucard', 3200, 200);
$hero2 = new Hero('Franco', 5000, 50);

// memanggil method
$hero1->getInfo();

echo "<br> <hr>";

$hero1->levelUp(4);

$hero1->getInfo();