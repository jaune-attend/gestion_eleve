new Vue({
    el:"#app",
    data:{
        listeClasse:[],
    },
    mounted(){
        this.GetListeClasse();
    },
    methods:{
        // AddTodo(){
        //     var scope = this;
        //     var nom = prompt("Veuillez saisir le nom de votre Todo Liste");
        //     if(nom == null) return;
        //     $.ajax({
        //         url:"api/api.php?cas=addTodo",
        //         type:"POST",
        //         data:{nom},
        //         success:function(){
        //             scope.GetListe();
        //         },
        //     });
        // },

        GetListeClasse(){
            var scope = this;
            $.ajax({
                url:"03-Api/api.php?cas=infosClasse",
                type:"POST",
                data:{},
                success:function(res){
                    // scope.listeClasse = JSON.parse(res);
                },
            });
        },
    },

    filters:{

    },
    watch:{

    },
});