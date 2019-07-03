Vue.component("classeListe",{
    template:"#tpl-classe-liste",
    props:["id"],
    data() {
        return {
            listeClasse:[],
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
            $.ajax({
                url: "03-Api/api.php?cas=classe",
                type:"POST",
                data:{id},
                success:function(res){
                    scope.listeClasse = JSON.parse(res);
                },

            });
        },
    }
});
