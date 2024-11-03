<?php

class Movie {
    public string $name;
    public int $year;
    public string $director;

    public function __construct(string $name, int $year, string $director)
    {
        $this->name = $name;
        $this->year = $year;
        $this->director = $director;
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

    public function getDirector(): string 
    {
        return $this->director;
    }

    public function setdirector(string $director): void 
    {
        $this->director = $director;
    }
}


$movie1= new Movie("Bohemian Rhapsody" , 2018, "Bryan Singer" );
$movie2= new Movie("Green Book", 2018, "Peter Farrelly");


var_dump($movie1). "<br>";
var_dump($movie2). "<br>";
?>