Vue.component('eleveListe',
    {
        template: "#tpl-eleve-liste",
        props: ['id'],
        data() {
            return {
                list_eleve: [],
                nom: "",
                prenom: "",
            }
        },
        computed: {},
        mounted() {
            // this.get_class();
            this.GetAllEleve();
        },
        methods: {
            GetAllEleve() {
                alert("GET ALL ELEVE");
                var scope = this;
                $.ajax({
                    url: "03-api/api.php?cas=alleleve",
                    type: "POST",
                    data: {},
                    success: function (res) {
                        var tmp = JSON.parse(res);
                        console.log(res);
                        setTimeout(() => {
                            scope.list_eleve = tmp;
                            scope.$forceUpdate();
                        }, 1);
                    }
                })
            },

            get_eleve() {
                var scope = this;
                // faire appel a api.php et le case pour récup dans la bdd
                $.ajax({
                    url: "03-Api/api.php?cas=eleve",
                    type: 'POST',
                    data: {id},
                    success: function (res) {
                        scope.todos = JSON.parse(res);
                    }
                })
            },
        }
    });
