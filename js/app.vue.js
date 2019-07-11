new Vue({
    el: "#app",
    data: {
        listeClasse: [],
        list_eleve: [],
        list_matiere: [],
        counter: 0,
    },
    mounted() {
        this.GetAllClasse();
        this.GetAllEleve();
        this.GetAllMatiere();
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
                    setTimeout(() => {
                        scope.list_eleve = tmp;
                        scope.$forceUpdate();
                    }, 1);
                }
            })
        },
        GetAllMatiere(){
            var scope = this;
            $.ajax({
                url: "03-api/api.php?cas=allmatiere",
                type: "POST",
                data: {},
                success: function (res) {
                    var tmp = JSON.parse(res);
                    setTimeout(() => {
                        scope.list_matiere = tmp;
                        scope.$forceUpdate();
                    }, 1);
                }
            })
        },
        filters: {},
        watch: {},
    }
});
