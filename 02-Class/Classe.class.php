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

    public $id;
    public $nom_c;

    public function __construct(){
        $this ->primary_key = "id_c" ;
        $this->id 	= 0;
        $this->nom_c 	= "";
    }

}