Vue.component('eleveListe',
    {
        template: "#tpl-eleve-liste",
        props: ['id'],
        data() {
            return {
                nom: "",
                prenom: "",
                list_eleve: [],
            }
        },
        computed: {},
        mounted() {
            this.getAllEleve();
        },
        methods: {

            getAllEleve() {
                var scope = this;
                // faire appel a api.php et le case pour récup dans la bdd
                $.ajax({
                    url: "03-Api/api.php?cas=alleleve",
                    type: 'POST',
                    data: {},
                    success: function (res) {
                        var tmp = JSON.parse(res);
                        setTimeout(() => {
                            scope.list_eleve = tmp;
                            scope.$forceUpdate();
                        }, 1);
                    }
                })
            },

            addEleve() {
                var scope = this;
                var nom = scope.nom;
                var prenom = scope.prenom;

                $.ajax({
                    url: "03-Api/api.php?cas=addEleve",
                    type: "POST",
                    data: {nom, prenom},
                    success: function () {
                        scope.nom = "";
                        scope.prenom = "";
                        scope.getAllEleve();
                    },
                });
            },

            supprEleve(eleve) {
                var scope = this;
                var id = eleve.id;

                $.ajax({
                    url: "03-Api/api.php?cas=supprEleve",
                    type: "POST",
                    data: {id},
                    success: function () {
                        alert("L'élève est supprimé");
                        scope.getAllEleve();
                    }
                });
            },

            modifEleve(eleve) {
                var scope = this;
                var id = eleve.id;

                var nom = prompt("Mettez le nouveau NOM");
                var prenom = prompt("Mettre le nouveau PRENOM");
                if ((nom == null) || (nom == "") || (prenom == null) || (prenom == ""))
                {
                    alert("Veuillez mettre des valeurs");
                    return;
                }
                $.ajax({
                    url: "03-Api/api.php?cas=modifEleve",
                    type: "POST",
                    data: {id, nom, prenom},
                    success: function () {
                        alert("Le profil de l'eleve a été modifié avec succées");
                        scope.getAllEleve();
                    }
                });
            },
            test(){
                alert("test");
            }
        }
    });
