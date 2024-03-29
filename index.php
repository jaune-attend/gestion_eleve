<!doctype html>
<html lang="fr">
<head>
    <title>Gestion élève</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="./css/hyper.png" sizes="32x32" />

</head>
<body>
<div class="container-fluid">
    <div class="row">
    <div class="col header"><h1><img src="./css/hyper.png"> Hypergestion </h1></div>
    </div>
</div>

<template id="tpl-eleve-liste">     <!------------------J'ai pas touché à ça faut l'adapter------------------->
    <main>
        <h3>Ajout eleve</h3>
        <input type="text" v-model="nom">
        <input type="text" v-model="prenom">

        <button @click="addEleve(nom, prenom)" type="button" class="btn-success"></button>
    </main>
</template>

<template id="tpl-classe-liste">        <!--------------------TEMPLATE CLASSE (se baser sur lui pour faire les autres)----------------->
    <main>
        <div class="input-group col-6 float-right">
            <input v-model="nom_c" type="text"   @keyup.enter="AddClasse()" placeholder="Ajouter une classe" class="form-control mt-3">    <!--///// AJOUTER UNE CLASSE ////--->
            <div class="input-group-append mt-3">
                <button type="button" class="btn btn-info"  @click="AddClasse()">
                    <img src="./css/plus.png" height="20" width="20">
                </button>
            </div>
        </div><br><br><br>
        <div v-for="elem in listeClasse" style="padding-left: 10px; padding-right: 10px">
            <label class="form-control ">{{elem.nom_c}} <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span> </label>
        </div>
</template>

<main id="app">                     <!------------------------MAIN---------------->
    <div class="container" id="onglet-1">
        <h2>Gestion des Classes</h2>
        <div class="row">
            <div class="col-6">
                <div class="block-left">
                    <classe-liste></classe-liste>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-4">
                        <div class="block-selected" id="choix-1">
                            <img src="./css/classe.png" height="80" width="80" class="mt-3" style="margin-bottom: 5px"><br>
                            <b>Classe</b>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-right" id="choix-2">
                            <img src="./css/mat.png" height="80" width="80" class="mt-3" style="margin-bottom: 5px"><br>
                            <b>Matière</b>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-right" id="choix-3">
                            <img src="./css/cap.png" height="100" width="100"><br>
                            <b>Elèves</b>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="under-block">
                            <h3 class="text-center" style="padding-top: 10px">Matières</h3>
                            <select style="width: 180px; height: 37px; margin-left: 10px; margin-bottom: 20px; border-radius: 3px">
                                <option value="">Maths</option>
                                <option value="">Français</option>
                            </select> <button type="button" class="btn btn-info" style="margin-top: -5px">
                                <img src="./css/plus.png" height="20" width="20">
                            </button>
                            <div v-for="elem in list_matiere" style="padding-left: 10px; padding-right: 10px">

                                <label class="form-control ">{{elem.nom_m}} <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span> </label>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="under-block">
                            <h3 class="text-center" style="padding-top: 10px">Elève</h3>

                            <select style="width: 180px; height: 37px; margin-left: 10px; margin-bottom: 20px; border-radius: 3px">
                                <option value="">John Bulldog</option>
                                <option value="">Henry Dick</option>
                            </select> <button type="button" class="btn btn-info" style="margin-top: -5px">
                                <img src="./css/plus.png" height="20" width="20">
                            </button>

                            <label class="form-control">Jean Mimolette <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>
                            <label class="form-control">Peter Poil <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>
                            <label class="form-control">Maggie Piggy <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/////////////////////////////// GESTION MATIERE - A FAIRE (On va adapter pour n'avoir qu'un seul container à la fin qui appellera juste els différents templates au lieu d'avoir 3 fois le même container) \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="container hidden" id="onglet-2">
        <h2>Gestion des Matières</h2>
        <div class="row">
            <div class="col-6">
                <div class="block-left">
                    <div class="input-group col-6 float-right">
                        <input type="text" placeholder="Ajouter une matière" class="form-control mt-3">
                        <div class="input-group-append mt-3">
                            <button type="button" class="btn btn-info">                             <!--///// AJOUTER UNE MATIERE ////--->
                                <img src="./css/plus.png" height="20" width="20">
                            </button>
                        </div>
                    </div><br><br><br>

                    <div v-for="elem in list_matiere" style="padding-left: 10px; padding-right: 10px">

                        <label class="form-control ">{{elem.nom_m}}                                 <!--///// SUPPRIMER UNE MATIERE ////--->
                            <span class="float-right">
                                <img src="./css/delete.png" height="20" width="20" style="margin-right: 10px">
                            </span>                                                                 <!--///// --------------------- ////--->
                        </label>

                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-4">
                        <div class="block-selected" id="choix-1">
                            <img src="./css/classe.png" height="80" width="80" class="mt-3" style="margin-bottom: 5px"><br>
                            <b>Classe</b>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-right" id="choix2-2">
                            <img src="./css/mat.png" height="80" width="80" class="mt-3" style="margin-bottom: 5px"><br>
                            <b>Matière</b>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-right" id="choix-3">
                            <img src="./css/cap.png" height="100" width="100"><br>
                            <b>Elèves</b>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="under-block">
                            <h3 class="text-center" style="padding-top: 10px">Classe</h3>
                            <select style="width: 180px; height: 37px; margin-left: 10px; margin-bottom: 20px; border-radius: 3px">
                                <option value="">Seconde B</option>
                                <option value="">Seconde C</option>
                            </select> <button type="button" class="btn btn-info" style="margin-top: -5px">
                                <img src="./css/plus.png" height="20" width="20">
                            </button>

                            <div v-for="elem in listeClasse" style="padding-left: 10px; padding-right: 10px">

                                <label class="form-control ">{{elem.nom_c}}  </label>

                            </div>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="under-block">
                            <h3 class="text-center" style="padding-top: 10px">Elève</h3>

                            <select style="width: 180px; height: 37px; margin-left: 10px; margin-bottom: 20px; border-radius: 3px">
                                <option value="">John Bulldog</option>
                                <option value="">Henry Dick</option>
                            </select> <button type="button" class="btn btn-info" style="margin-top: -5px">
                                <img src="./css/plus.png" height="20" width="20">
                            </button>

                            <div v-for="eleve in list_eleve" style="padding-left: 10px; padding-right: 10px">
                                <label class="form-control ">{{eleve.nom}} {{eleve.prenom}}  <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span> </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/////////////////////////////// PARTIE ELEVE - A FAIRE \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="container hidden" id="onglet-3">
        <h2>Gestion des Elèves</h2>
        <div class="row">
            <div class="col-6">
                <div class="block-left">
                    <div class="input-group col-6 float-right">
                        <input type="text" placeholder="Ajouter un élève" class="form-control mt-3">
                        <div class="input-group-append mt-3">
                            <button type="button" class="btn btn-info">                         <!----- BOUTON AJOUTER ELEVE-------->
                                <img src="./css/plus.png" height="20" width="20">
                            </button>
                        </div>
                    </div><br><br><br>

                    <div v-for="eleve in list_eleve" style="padding-left: 10px; padding-right: 10px">

                        <label class="form-control ">{{eleve.nom}} {{eleve.prenom}}
                            <span class="float-right">                                              <!--///// SUPPRIMER UN ELEVE ////--->
                                <img src="./css/delete.png" height="20" width="20" style="margin-right: 10px">
                            </span>                                                                 <!--///// ------------------ ////--->
                        </label>

                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-4">
                        <div class="block-selected" id="choix-1">
                            <img src="./css/classe.png" height="80" width="80" class="mt-3" style="margin-bottom: 5px"><br>
                            <b>Classe</b>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-right" id="choix-2">
                            <img src="./css/mat.png" height="80" width="80" class="mt-3" style="margin-bottom: 5px"><br>
                            <b>Matière</b>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-right" id="choix3-3">
                            <img src="./css/cap.png" height="100" width="100"><br>
                            <b>Elèves</b>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="under-block">
                            <h3 class="text-center mb-4" style="padding-top: 10px">Matières</h3>

                            <div v-for="elem in list_matiere"  style="padding-left: 10px; padding-right: 10px">

                                <label class="form-control ">{{elem.nom_m}} </label>

                            </div>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="under-block">
                            <h3 class="text-center" style="padding-top: 10px">Notes</h3>

                            <div class="input-group">
                                <input type="text" placeholder="Ajouter une note" class="form-control mt-3">
                                <div class="input-group-append mt-3 mb-2">
                                    <button type="button" class="btn btn-info">
                                        <img src="./css/plus.png" height="20" width="20">
                                    </button>
                                </div>
                            </div>

                            <label class="form-control"><b>8.5</b> /20<span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>
                            <label class="form-control"><b>12.5</b> /20 <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>
                            <label class="form-control"><b>10</b> /20 <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="./js/jquery.min.js"></script>
<script src="./js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="js/vue.js"></script>
<!--<script src="./03-Api/Eleve.comp.js"></script>-->
<script src="js/Classe.comp.js"></script>
<script src="js/app.vue.js"></script>
</body>
</html>
