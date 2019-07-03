<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 03/07/2019
 * Time: 23:19
 */

class Matiere
{
    use genos;

    public $id;
    public $nom_m;

    public function __construct(){
        $this ->primary_key = "id_m" ;
        $this->id 	= 0;
        $this->nom_m 	= "";
    }

}