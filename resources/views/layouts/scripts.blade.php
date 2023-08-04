<!-- BEGIN VENDOR JS-->
<script src="{{asset('js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('js/chartist.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="{{asset('js/app-menu-lite.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/app-lite.js')}}" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('js/dashboard-lite.js')}}" type="text/javascript"></script>
    
<script>
    // Code jQuery pour manipuler l'affichage des champs cachés
    $(document).ready(function () {
        // Sélectionnez le bouton et ajoutez un gestionnaire d'événements au clic
        $("#showHiddenFieldsButton").click(function () {
            // Sélectionnez les champs cachés par leur ID et affichez-les en changeant leur style display à "block"
            $("#hiddenFields").show();
        });
    });
</script>