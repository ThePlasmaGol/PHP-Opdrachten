<?php
declare(strict_types=1);

require_once 'ListenList.php';

class Music {
    public string $title;
    public string $artist;
    public int $duration;

    public function __construct(string $title, string $artist, int $duration) {
        $this->title = $title;
        $this->artist = $artist;
        $this->duration = $duration;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getArtist(): string {
        return $this->artist;
    }

    public function getDuration(): int {
        return $this->duration;
    }
}

// Maak een persoon met een naam toe aan de ListenList
$kees = new ListenList();

// Voeg een tweede muziek item toe
$music1 = new Music("Imagine", "John Lennon", 183);
$music2 = new Music("ABC", "House", 2);
$music3 = new Music("Thriller", "Michael Jackson", 358);

// Voeg muziek toe aan de ListenList
$kees->addMusic($music1);
$kees->addMusic($music2);
$kees->addMusic($music3);

// Echo dit en laat dit met een var_dump zien
echo "Music list: <br>";
foreach ($kees->getMusic() as $music) {
    echo $music->getTitle() . " by " . $music->getArtist() . " lasts " . $music->getDuration() . " seconds.<br>";
}

echo "<pre>";
var_dump($kees->getMusic());
echo "</pre>";
?>


<?php
declare(strict_types=1);

class ListenList {
    private array $music = [];

    public function addMusic(Music $music) {
        $this->music[] = $music;
    }

    public function getMusic(): array {
        return $this->music;
    }
}
?>
