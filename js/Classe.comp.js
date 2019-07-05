Vue.component("classeListe",{
    template:"#tpl-classe-liste",
    props:['id'],
    data() {
        return {
            nom_c: "",
            classe: {},
            listeClasses:[],
        }
    },

    computed :{
    },
    mounted(){
        this.GetClasse();
    },
    methods: {
        GetClasse(){
            var scope = this;
            var id = scope.id;
            // nom_c = scope.nom_c;
            $.ajax({
                url: "03-Api/api.php?cas=classe",
                type:"POST",
                data:{id},
                success:function(res){
                    scope.classe = JSON.parse(res);
                },

            });
        },
        ModifClasse(){
            var scope = this;
            var id = scope.id;
            var nom_c = prompt("Modifier le nom de la classe");
            if(nom_c == null) return;

            $.ajax({
                url:"api/api.php?cas=modifClasse",
                type: "POST",
                data:{id, nom_c},
                success:function(){
                    scope.GetClasse();
                },
            });
        },
        AddClasse(){
            var scope = this;
            var id = scope.id;
            var nom_c = scope.nom_c;

            $.ajax({
                url:"api/api.php?cas=addClasse",
                type: "POST",
                data: {id, nom_c},
                success:function(){
                    scope.nom_c = "";
                    scope.GetClasse();
                },
            });
        },

    }
});
