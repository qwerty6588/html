<?php

class Game {
    public string $name;
    public int $year;
    public string $company;

    public function __construct(string $name, int $year, string $company)
    {
        $this->name = $name;
        $this->year = $year;
        $this->company = $company;
    }
    
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getCompany(): string 
    {
        return $this->company;
    }

    public function setCompany(string $company): void 
    {
        $this->company = $company;
    }
}


$game1 = new Game("Ghost of Tsushima", 2020, "Sucker Punch Productions");
$game2 = new Game("Star Wars Jedi: Fallen Order", 2019, "Respawn Entertainment");
$game3 = new Game("Star Wars Jedi: Survivor", 2023, "Respawn Entertainment");
$game4 = new Game("Cyberpunk 2077", 2020, "CD Projekt Red");


var_dump($game1);
var_dump($game2);
var_dump($game3);
var_dump($game4);

?>