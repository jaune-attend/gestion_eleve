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
</head>
<body>
<div class="container-fluid">
    <div class="row">
    <div class="col header"><h1>Hypergestion </h1></div>
    </div>
</div>

<!--Affichage de toute les classe (app.vue.js) -->
<main id="app" class="container">
    <div class="row">
        <h2>Liste de Classe</h2>
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody v-for="elem in listeClasse">
                <tr>
                    <td>{{elem.nom_c}}</td>
                    <td>Action</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--Affichage de tout les eleves (app.vue.js) -->
    <div class="row">
        <h3>Liste des eleves</h3>
        <table class="table-striped">
            <thead class="thead-dark">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
            </tr>
            </thead>
            <tbody v-for="eleve in list_eleve">
                <tr>
                    <td><b>{{eleve.nom}}</b></td>
                    <td>{{eleve.prenom}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row col-sm-6">
        <h3>Les Matieres</h3>
        <table class="table-striped">
            <thead>
                <tr>
                    <th>Nom matiere</th>
                </tr>
            </thead>
            <tbody v-for="matiere in list_matiere">
                <tr>
                    <td>{{ matiere.nom_m }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<main id="app">
<div class="container">
    <h2>Gestion des Classes</h2>
    <div class="row">
        <div class="col-6">
            <div class="block-left">
                <div class="input-group col-6 float-right">
                    <input type="text" placeholder="Ajouter une classe" class="form-control mt-3">
                    <div class="input-group-append mt-3">
                        <button type="button" class="btn btn-info">
                            <img src="./css/plus.png" height="20" width="20">
                        </button>
                    </div>
                </div><br><br><br>
                <div v-for="elem in listeClasse">
                    <table>
                        <thead>
                            <tr>
                                <th>Classe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{elem.nom_c}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!--<classe-liste :id="elem.id_c" :ref="elem.id_c" :key="elem.id_c"></classe-liste> -->
<!--                    <li style="background:#009bd4; list-style: none; margin-left: 10px; border-bottom: 1px solid black; padding-bottom: 20px"><img src="./css/edit.png" height="20" width="20"> <b style="color: white">{{nom_c}}</b> <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>-->
<!--                    <li style="list-style: none; margin-left: 10px; border-bottom: 1px solid black; padding-bottom: 20px"><img src="./css/edit.png" height="20" width="20"> Première <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>-->
<!--                    <li style="list-style: none; margin-left: 10px; border-bottom: 1px solid black; padding-bottom: 20px"><img src="./css/edit.png" height="20" width="20"> Terminale <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>-->
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-4">
                    <div class="block-right" style="background: #009BD4; color: white">
                        <img src="./css/classe.png" height="80" width="80" class="mt-3" style="margin-bottom: 5px"><br>
                        <b>Classe</b>
                    </div>
                </div>
                <div class="col-4">
                    <div class="block-right">
                        <img src="./css/mat.png" height="80" width="80" class="mt-3" style="margin-bottom: 5px"><br>
                        <b>Matière</b>

                    </div>
                </div>
                <div class="col-4">
                    <div class="block-right">
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

                        <li style="list-style: none; margin-left: 10px; margin-bottom: 5px; border-bottom: 1px solid black; padding-bottom: 20px">Histoire <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>
                        <li style="list-style: none; margin-left: 10px; margin-bottom: 5px; border-bottom: 1px solid black; padding-bottom: 20px">Physique/Chimie <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>
                        <li style="list-style: none; margin-left: 10px; margin-bottom: 5px; border-bottom: 1px solid black; padding-bottom: 20px">EPS <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>

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

                        <li style="list-style: none; margin-left: 10px; margin-bottom: 5px; border-bottom: 1px solid black; padding-bottom: 20px">Jean Mimolette <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>
                        <li style="list-style: none; margin-left: 10px; margin-bottom: 5px; border-bottom: 1px solid black; padding-bottom: 20px">Peter Poil <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>
                        <li style="list-style: none; margin-left: 10px; margin-bottom: 5px; border-bottom: 1px solid black; padding-bottom: 20px">Maggie Piggy <span class="float-right"><img src="./css/delete.png" height="20" width="20" style="margin-right: 10px"></span></li>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
