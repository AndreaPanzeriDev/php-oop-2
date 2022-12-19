<?php

class Giocattoli{
    public $caratteristiche;
    public $dimensioni;


    public function __construct(
        String $caratteristiche,
        String $dimensioni
    )
    {
        $this->caratteristiche= $caratteristiche;
        $this->dimensioni= $dimensioni;
    }
}

?>