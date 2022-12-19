<?php

class Cibo{
    public $peso_netto;
    public $ingredienti;

    public function __construct(
        Float $peso_netto,
        String $ingredienti
    )
    {
        $this->peso_netto=$peso_netto;
        $this->ingredienti=$ingredienti;
    }
}

?>