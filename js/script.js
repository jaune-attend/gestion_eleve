$(function() {
    //ONGLET
    $("[id^='choix-']").on("click", function () {   //On séléctionne tous les id commençant par btn-onglet-
        let id = $(this).attr("id").replace("choix-", "") //this = élément séléctionné //attr = valeur de l'élément passé en paramètre //replace : remplace le premeir paramètre par le second

        $("[id^='choix-']").removeClass("block-selected").addClass("block-right");
        $("#choix-" + id).removeClass("block-right").addClass("block-selected");

        $("[id^='choix2-']").removeClass("block-selected").addClass("block-right");
        $("#choix2-" + id).removeClass("block-right").addClass("block-selected");

        $("[id^='choix3-']").removeClass("block-selected").addClass("block-right");
        $("#choix3-" + id).removeClass("block-right").addClass("block-selected");

        $("[id^='onglet-']").addClass("hidden");
        $("#onglet-" + id).fadeIn(0).removeClass("hidden");
    });
});