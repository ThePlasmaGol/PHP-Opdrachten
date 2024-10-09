<?php
declare(strict_types=1);

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

// Testen of het werkt
$music = new Music("Bohemian Rhapsody", "Queen", 354);
echo $music->getTitle() . " by " . $music->getArtist() . " lasts " . $music->getDuration() . " seconds.";

// Halen de datatypes weg uit de constructor en voeg een array toe
class MusicAlt {
    public string $title;
    public string $artist;
    public int $duration;

    public function __construct(array $data) {
        $this->title = $data['title'];
        $this->artist = $data['artist'];
        $this->duration = $data['duration'];
    }
}

// Controleer wat er gebeurt
$musicData = [
    'title' => "Stairway to Heaven",
    'artist' => "Led Zeppelin",
    'duration' => 480
];
$musicAlt = new MusicAlt($musicData);
echo $musicAlt->getTitle() . " by " . $musicAlt->getArtist() . " lasts " . $musicAlt->getDuration() . " seconds.";

// Zet de datatypes terug aan de public function
class MusicStrict {
    public string $title;
    public string $artist;
    public int $duration;

    public function __construct(string $title, string $artist, int $duration) {
        $this->title = $title;
        $this->artist = $artist;
        $this->duration = $duration;
    }
}

// Test het en zorg dat alles werkt
$musicStrict = new MusicStrict("Hotel California", "Eagles", 391);
echo $musicStrict->getTitle() . " by " . $musicStrict->getArtist() . " lasts " . $musicStrict->getDuration() . " seconds.";
?>
