<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 03/07/2019
 * Time: 23:22
 */

class Note
{
    use genos;

    public $id;
    public $note;
    public $id_m;
    public $id_e;

    public function __construct(){
        $this ->primary_key = "id_e" ;
        $this->id 	= 0;
        $this->note = 0;
        $this->id_m = 0;
        $this->id_e = 0;
    }


}