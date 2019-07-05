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
            addEleve() {
                var scope = this;

            }
        }
    });
