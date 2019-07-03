<?php include("../01-Config/config-genos.php");

$cas = $_GET["cas"];

switch ($cas){
    case 'classe':
        $c = new Classe;
        $req = "SELECT * FROM classe ORDER BY nom_c";
        $champs = $c->FieldList();
        echo $res = $c->StructList($req, $champs, "json");
        break;
}