new Vue({
    el: "#eleve",
    data: {
        nom: "Franck",
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
          // faire appel a api.php et le case pour récup dans la bdd
        },
        get_class(){
            alert("test get classe mounted");
        },
    }
});
