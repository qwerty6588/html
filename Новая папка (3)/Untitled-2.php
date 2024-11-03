<?php

class Team {
    public string $name;
    public string $league;
    public int $year;

    public function __construct($name, $league, $year) {
        $this->name = $name;
        $this->league = $league;
        $this->year = $year;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLeague(): string
    {
        return $this->league;
    }

    public function setLeague(int $league): void
    {
        $this->year = $league;
    }
    public function getYear(): int 
    {
        return $this->year;
    }

    public function setYear(int $year): void 
    {
        $this->year = $year;
    }

}
$team1 = new Team("Real Madrid", "La Liga", 1902);
$team2 = new Team("AC Milan", "Serie A", 1899);
$team3 = new Team("Borussia Dortmund", "Bundesliga", 1909);

var_dump($team1); 
var_dump($team2); 
var_dump($team3); 


?>