new Vue({
    el: "#app",
    data: {
        listeClasse: [],
        nom_c: "",
    },
    mounted() {
        this.GetAllClasse();
    },
    methods: {
        GetListeClasse() {
            var scope = this;
            $.ajax({
                url: "03-Api/api.php?cas=allclasse",
                type: "POST",
                data: {},
                success: function (res) {
                    console.log(res);
                    scope.listeClasse = JSON.parse(res);
                },
            });
        },
        GetAllClasse(){
            var scope = this;
            $.ajax({
                url:"03-api/api.php?cas=allclasse",
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
        AddClasse(){
            var scope = this;
            var nom_c = scope.nom_c;

            // var nom_c = prompt("Veuillez saisir le nom de votre Todo Liste");
            if(nom_c == null) return;
            $.ajax({
                url:"03-api/api.php?cas=AddClasse",
                type:"POST",
                data:{nom_c},
                success:function(){
                    scope.GetAllClasse();
                },
            });
        },
        filters: {},
        watch: {},
    }
});
