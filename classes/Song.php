<?php

class Song {
    public $artistId;
    public $genreId;
    public $title;
    public $price;
    public $id;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function setArtistId($anArtistId) {
        $this->artistId = $anArtistId;
    }

    public function setGenreId($aGenreId) {
        $this->genreId = $aGenreId;
    }

    public function setTitle($aTitle) {
        $this->title = $aTitle;
    }
    public function setPrice($aPrice) {
        $this->price = $aPrice;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getId() {
        return $this->pdo->lastInsertId();
    }

    public function save() {
        $sql = "INSERT INTO songs (title, artist_id, genre_id, price) VALUES (:title, :artist_id, :genre_id, :price)";
        $statement = $this->pdo->prepare($sql);

        $statement->bindParam(':title', $this->title);
        $statement->bindParam(':artist_id', $this->artistId);
        $statement->bindParam(':genre_id', $this->genreId);
        $statement->bindParam(':price', $this->price);
        return $statement->execute();
    }
}
?>