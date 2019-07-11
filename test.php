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

        <template id="tpl-eleve-liste">
            <main>
                <div class="form-group">
                    <input type="text" class="form-control" v-model="nom">
                    <input type="text" class="form-control" v-model="prenom">
                </div>
                <button @click="addEleve()">Ajouter</button>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody v-for="elem in list_eleve">
                    <tr>
                        <td>{{elem.nom}}</td>
                        <td>{{elem.prenom}}</td>
                        <td><a href="#" @click="supprEleve(elem)">Supprimer</a></td>
                    </tr>
                    </tbody>
                </table>
        </template>

        <main id="app">
            <h3>Eleve liste</h3>
            <eleve-liste></eleve-liste>
        </main>

        <script src="./js/jquery.min.js"></script>
        <script src="./js/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="js/vue.js"></script>
        <script src="js/Eleve.comp.js"></script>
        <script src="js/Classe.comp.js"></script>
        <script src="js/app.vue.js"></script>
    </body>
</html>
