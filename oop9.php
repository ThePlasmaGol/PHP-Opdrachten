<?php

class Music {
    public string $name;
    public string $genre;
    public int $listen;

    /**
     * Constructor van de Music class.
     *
     * @param string $name   Naam van de muziek
     * @param string $genre  Genre van de muziek
     * @param int $listen    Aantal keer beluisterd
     */
    public function __construct(string $name, string $genre, int $listen) {
        $this->name = $name;
        $this->genre = $genre;
        $this->listen = $listen;
    }

    /**
     * Geeft de naam van de muziek terug.
     *
     * @return string Naam van de muziek
     */
    public function getName(): string {
        return $this->name;
    }
}

// part2/index.php
<?php
require_once 'Music.php';

$music1 = new Music(name: 'Bach', genre: 'Klassiek', listen: 3);
echo $music1->getName();
var_dump($music1);
