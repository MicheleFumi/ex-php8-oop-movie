<?php


class Genre
{
    public $genre;
    function __construct($_genre)
    {
        $this->genre = $_genre;
    }

    function __toString()
    {
        return $this->genre;
    }
}
