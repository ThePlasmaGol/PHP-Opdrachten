<?php
declare(strict_types=1);

class Music {
    private string $title;
    private string $artist;
    private int $duration;

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

// Controleer of het werkt
$music = new Music("Bohemian Rhapsody", "Queen", 354);
echo $music->getTitle() . " by " . $music->getArtist() . " lasts " . $music->getDuration() . " seconds.";
?>
