<?php

namespace App;

class Book
{
    private static $idCounter = 1;
    private $id;
    private $title;
    private $authors;
    private $publisher;
    private $year;

    public function __construct()
    {
        $this->id = self::$idCounter++;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getAuthors()
    {
        return $this->authors;
    }

    public function setAuthors($authors)
    {
        $this->authors = $authors;
        return $this;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    public function __toString()
    {
        $authors = implode(", ", $this->authors);
        return "Id: {$this->id}\nНазвание: {$this->title}\nАвторы: {$authors}\nИздательство: {$this->publisher}\nГод: {$this->year}";
    }
}
