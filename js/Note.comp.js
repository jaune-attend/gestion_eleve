Vue.Component('noteEleve',
{
    template: "#tpl-note-eleve",
    props: ['id'],
    data() {
        return{
            matiere: "",
            note: 0,
            list_note: []
        }
    },
    computed: {},
    mounted(){
        this.getNoteEleve();
    },
    methods: {

        getNoteEleve(){
            var scope = this;
            var id = scope.id;
            alert(id);
            $.ajax({
                url: "03-Api/api.php?cas=NoteEleve",
                type: "POST",
                data: {id},
                success: function(res){
                    var tmp = JSON.parse(res);
                    setTimeout(() => {
                        scope.list_note = tmp;
                        scope.$forceUpdate();
                    })
                }
            });
        },
    }
});
