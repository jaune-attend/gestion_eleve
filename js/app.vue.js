new Vue({
    el: "#app",
    data: {
        listeClasse: [],
        list_eleve: [],
    },
    mounted() {
        this.GetAllClasse();
        this.GetAllEleve();
    },
    methods: {
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
        GetAllEleve() {
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
        filters: {},
        watch: {},
    }
});
