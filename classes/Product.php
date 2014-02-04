<?php


class Product {

    public $title;
    public $price;
    public $id;

    public function __construct($title = 'NA') {
        $this->title = $title;
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
        return $pdo->lastInsertId();
    }

} 