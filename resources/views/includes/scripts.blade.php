<!--   Core JS Files   -->
<script src="{{ asset('../Static/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('../Static/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('../Static/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('../Static/js/plugins/moment.min.js') }}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('../Static/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('../Static/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('../Static/js/material-kit.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        //init DateTimePickers
        materialKit.initFormExtendedDatetimepickers();

        // Sliders Init
        materialKit.initSliders();
    });
</script>
