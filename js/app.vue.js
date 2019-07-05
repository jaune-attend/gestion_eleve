new Vue({
    el: "#app",
    data: {
        listeClasse: [],
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
        filters: {},
        watch: {},
    }
});
