<?php

namespace App\Behavioral;

class Observer
{
    private string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function update(int $newState)
    {
        echo $this->nom . " : a recu le nouvel état : " . $newState . "<br>";
    }
}
