<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/GestionUsuarios.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/GestionTipousuario.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/GestionAsigTareas.js') }}"></script>
<script src="{{ asset('/js/moment.js') }}"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>