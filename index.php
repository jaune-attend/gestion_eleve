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


<main id="app">
    <div class="container" id="onglet-1">
        <h2>Gestion des Classes</h2>
        <div class="row">
            <div class="col-6">
                <div class="block-left">
                    <div class="input-group col-6 float-right">
                        <input v-model="nom_c" type="text"  placeholder="Ajouter une classe" class="form-control mt-3">
                        <div class="input-group-append mt-3">
                            <button type="button" class="btn btn-info"  @click="AddClasse()">
                                <img src="./css/plus.png" height="20" width="20">
                            </button>
                        </div>
                    </div><br><br><br>
                    <div v-for="elem in listeClasse" style="padding-left: 10px; padding-right: 10px">

                        <label class="form-control ">{{elem.nom_c}} <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span> </label>

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
                        <div class="block-right" id="choix-3">
                            <img src="./css/cap.png" height="100" width="100"><br>
                            <b>Elèves</b>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="under-block">
                            <h3 class="text-center" style="padding-top: 10px">Matière</h3>
                            <select style="width: 180px; height: 37px; margin-left: 10px; margin-bottom: 20px; border-radius: 3px">
                                <option value="">Maths</option>
                                <option value="">Français</option>
                            </select> <button type="button" class="btn btn-info" style="margin-top: -5px">
                                <img src="./css/plus.png" height="20" width="20">
                            </button>

                            <label class="form-control">Histoire<span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>
                            <label class="form-control">Physique/Chimie <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>
                            <label class="form-control">EPS <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>

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
    <!--/////////////////////////////// TEST \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="container hidden" id="onglet-2">
        <h2>Gestion des Matières</h2>
        <div class="row">
            <div class="col-6">
                <div class="block-left">
                    <div class="input-group col-6 float-right">
                        <input type="text" placeholder="Ajouter une matière" class="form-control mt-3">
                        <div class="input-group-append mt-3">
                            <button type="button" class="btn btn-info">
                                <img src="./css/plus.png" height="20" width="20">
                            </button>
                        </div>
                    </div><br><br><br>

<!--                    <div v-for="elem in listeMatiere">-->
<!--                        <matiere-liste :id="elem.id" :ref="elem.id" :key="elem.id"></matiere-liste>-->
<!--                                            <li style="background:#009bd4; list-style: none; margin-left: 10px; border-bottom: 1px solid black; padding-bottom: 20px"><img src="./css/edit.png" height="20" width="20"> <b style="color: white">{{nom_c}}</b> <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>-->
<!--                                            <li style="list-style: none; margin-left: 10px; border-bottom: 1px solid black; padding-bottom: 20px"><img src="./css/edit.png" height="20" width="20"> Première <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>-->
<!--                                            <li style="list-style: none; margin-left: 10px; border-bottom: 1px solid black; padding-bottom: 20px"><img src="./css/edit.png" height="20" width="20"> Terminale <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>-->
<!--                    </div>-->
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

                            <label class="form-control">Seconde A <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>
                            <label class="form-control">Première<span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>
                            <label class="form-control">Terminale <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></label>


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

    <!--/////////////////////////////// TEST 2 \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="container hidden" id="onglet-3">
        <h2>Gestion des Elèves</h2>
        <div class="row">
            <div class="col-6">
                <div class="block-left">
                    <div class="input-group col-6 float-right">
                        <input type="text" placeholder="Ajouter un élève" class="form-control mt-3">
                        <div class="input-group-append mt-3">
                            <button type="button" class="btn btn-info">
                                <img src="./css/plus.png" height="20" width="20">
                            </button>
                        </div>
                    </div><br><br><br>

<!--                    <div v-for="elem in listeMatiere">-->
<!--                        <matiere-liste :id="elem.id" :ref="elem.id" :key="elem.id"></matiere-liste>-->
                        <!--                    <li style="background:#009bd4; list-style: none; margin-left: 10px; border-bottom: 1px solid black; padding-bottom: 20px"><img src="./css/edit.png" height="20" width="20"> <b style="color: white">{{nom_c}}</b> <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>-->
                        <!--                    <li style="list-style: none; margin-left: 10px; border-bottom: 1px solid black; padding-bottom: 20px"><img src="./css/edit.png" height="20" width="20"> Première <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>-->
                        <!--                    <li style="list-style: none; margin-left: 10px; border-bottom: 1px solid black; padding-bottom: 20px"><img src="./css/edit.png" height="20" width="20"> Terminale <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>-->
<!--                    </div>-->
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
                            <h3 class="text-center" style="padding-top: 10px">Matières</h3>

                            <label class="form-control mt-4 btn-primary">Chimie <span class="float-right"><b>11</b></span></label>
                            <label class="form-control">Histoire <span class="float-right"><b>13</b></span></label>
                            <label class="form-control">Géographie <span class="float-right"><b>8.5</b></span></label>


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
