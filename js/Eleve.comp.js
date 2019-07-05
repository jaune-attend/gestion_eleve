new Vue({
    el: "#eleve",
    data: {
        list_eleve:{},
        nom: "",
        prenom: "",
        age: 0,
        rech:"",
    },

    computed :{

    },
    mounted(){
        // this.get_class();
        this.get_eleve();
    },
    methods: {
        get_eleve(){
        var scope = this;
          // faire appel a api.php et le case pour récup dans la bdd
            $.ajax({
                url: "03-Api/api.php?cas=eleve",
                type: 'POST',
                data : {id},
                success: function(res){
                    scope.todos = JSON.parse(res);
                }
            })
        },
        get_class(){
            alert("test get classe mounted");
        },
    }
});
