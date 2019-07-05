<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 03/07/2019
 * Time: 23:18
 */

class Classe
{
    use genos;

    public $primary_key;
    public $id;
    public $nom_c;

    public function __construct(){
        $this->id 	= 0;
        $this->nom_c    = "";
    }

}
