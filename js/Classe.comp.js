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
        this.GetClasses();
    },
    methods: {
        GetClasses(){
            var scope = this;
            $.ajax({
                url:"03-Api/api.php?cas=allclasse",
                type:"POST",
                data:{},
                success:function(res){
                    var tmp = JSON.parse(res);
                    setTimeout(()=>{
                        scope.listeClasse = tmp;
                        scope.$forceUpdate();
                    },1);
                }
            })
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
                    scope.GetClasses();
                },
            });
        },
        AddClasse(){
            var scope = this;
            // alert(scope.nom_c);
            var id = scope.id;
            var nom_c = scope.nom_c;

            $.ajax({
                url:"03-Api/api.php?cas=addClasse",
                type: "POST",
                data: {nom_c},
                success:function(){
                    // alert(scope.nom_c);
                    scope.nom_c = "";
                    scope.GetClasses();
                },
            });
        },

    }
});
