<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 03/07/2019
 * Time: 23:08
 */

class Eleve
{
    use genos;

    public $primary_key;
    public $id;
    public $nom;
    public $prenom;

    public function __construct(){
        $this->id 	= 0;
        $this->nom 	= "";
        $this->prenom 	= "";
    }



}
