<?php

namespace APP\Clases;

 class Box{

    protected $nombre;

    public function __construct($n)
    {
        $this->nombre=$n;
    }

    public function getNombre($nombre){

        return $nombre;
    }

}
?>