<?php
/**
 * Created by PhpStorm.
 * User: cmcclees
 * Date: 1/28/14
 * Time: 6:03 PM
 */

namespace classes;


class Query {
    protected $pdo;
    protected $sql;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->sql = "SELECT artist_name FROM songs INNER JOIN artists
  ON songs.artist_id = artists.id";
    }
    /*get all of the artists in the database*/
    public function getAll() {
        $statement = $this->pdo->prepare($this->sql);
        $statement->execute();
        return $statement->fetchAll();
    }
 
}
$host = 'itp460.usc.edu';
$dbname = 'music';
$user = 'student';
$pass = 'ttrojan';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$artistQuery = new ArtistQuery($pdo);

$artists = $artistQuery->getAll();

var_dump($artists);