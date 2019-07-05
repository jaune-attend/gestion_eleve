<?php
    include("../01-Config/config-genos.php");

$cas = $_GET["cas"];

switch ($cas){
    case 'classe':
        $id = $_POST['id'];
        $c = new Classe;
        $c->id= $id;
        $c->Load();

        echo json_encode($c);
        break;

    case 'allclasse':
        $t = new Classe;
        $req = "SELECT * FROM classe ORDER BY nom_c";
        $champs = $t->FieldList();
        echo $res = $t->StructList($req,$champs,"json");
        break;
    case 'alleleve':
        $e = new Eleve();
        $req = "SELECT * FROM eleve ORDER BY nom";
        $champs = $e->FieldList();
        echo  $res = $e->StructList($req, $champs, "json");
        break;
    case 'allmatiere':
        $m = new Matiere();
        $req = "SELECT * FROM matiere ORDER BY nom_m";
        $champs = $m->FieldList();
        echo $res = $m->StructList($req, $champs, 'json');
        break;
    case 'addClasse':
        $c = new Classe;
        $c->nom_c = $_POST['nom_c'];
        $c->Add();
        break;

    case 'modifClasse':
        $id = $_POST['id'];
        $c = new Classe;
        $c->id=$id;
        $c->Load();

        $c->nom_c = $_POST['nom_c'];
        $c->Update();
        break;

    case 'supprClasse':
        $c = new Classe;
        $c->id = $_POST['id'];
        $c->Delete();
        break;

    case 'matiere':
        $id = $_POST['id'];
        $m = new Matiere;
        $m->id=$id;
        $m->Load();

        echo json_encode($m);
        break;

    case 'allMatiere':
        $m = new Matiere;
        $req = "SELECT * FROM matiere ORDER BY nom_m";
        $champs = $m->FieldList();
        $res = $m->StructList($req, $champs, "json");
        break;

    case 'addMatiere':
        $m = new Matiere;
        $m->nom_m = $_POST['nom_m'];
        $m->Add();
        break;

    case 'modifMatiere':
        $id = $_POST['id'];
        $m = new Matiere;
        $m->id=$id;
        $m->Load();

        $m->nom_m = $_POST['nom_m'];
        $m->Update();
        break;

    case 'supprMatiere':
        $m = new Matiere;
        $m->id = $_POST['id'];
        $m->Delete();
        break;
}
