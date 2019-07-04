new Vue({
    el:"#app",
    data:{
        listeClasse:[],
    },
    mounted(){
        this.GetListeClasse();
    },
    methods:{
        GetListeClasse(){
            var scope = this;
            $.ajax({
                url:"03-Api/api.php?cas=classe",
                type:"POST",
                data:{},
                success:function(res){
                    // var test = JSON.parse(res);
                    scope.listeClasse = JSON.parse(res);
                },
            });
        },
    },

    filters:{

    },
    watch:{

    },
});