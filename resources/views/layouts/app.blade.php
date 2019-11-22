<!DOCTYPE html>

<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title>A2Z - @yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme #1 for full width layout with mega menu" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="/admin/assets/font-awesome-master/css/font-awesome.min.css">
    <link href="/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
<script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/admin/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/admin/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"
          type="text/css"/>
    <link href="/admin/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"
          type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/admin/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/admin/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/admin/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css"/>
    <link href="/admin/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/admin/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css"
          id="style_color"/>
    <link href="/admin/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css"/>


{{--datatable--}}
<!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/admin/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet"
          type="text/css"/>
    <link href="/admin/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>

    <!-- toastr notifications -->
{{-- <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}"> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
--}}
<!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/admin/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->

    @yield('css')
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-footer-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
<div class="page-wrapper">


    <!-- BEGIN HEADER -->
@include('pages.include.beginHeader')
<!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"></div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
    @include('pages.include.beginSidebar')
    <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->


        @yield('content')

        <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
        @include('pages.include.beginFooter')
        <!-- END FOOTER -->
        </div>
    </div>
    <!-- BEGIN QUICK NAV -->

</div>

<!-- BEGIN CORE PLUGINS -->
<script src="/admin/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/admin/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{--<script src="/admin/assets/global/plugins/moment.min.js" type="text/javascript"></script>--}}

<script src="/admin/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>

<script src="/admin/assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/admin/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/admin/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/admin/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="/admin/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="/admin/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/admin/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->

{{--datatable--}}
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/admin/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/admin/assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
{{--enddatatable--}}

<script>
    $(document).ready(function () {
        $('#clickmewow').click(function () {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>

<!-- Google Code for Universal Analytics -->

<!-- End -->

<!-- Google Tag Manager -->
<noscript>
    {{--<iframe src="http://www.googletagmanager.com/ns.html?id=GTM-W276BJ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>--}}
</noscript>

<!-- End -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/admin/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/admin/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/admin/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"
        type="text/javascript"></script>
<script src="/admin/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"
        type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/admin/assets/pages/scripts/form-fileupload.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->



<!-- toastr notifications -->
{{-- <script type="text/javascript" src="{{ asset('toastr/toastr.min.js') }}"></script> --}}
{{--<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/admin/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/admin/assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>

{{--raw add --}}
<script src="/admin/assets/global/plugins/jquery-repeater/jquery.repeater.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/admin/assets/pages/scripts/form-repeater.min.js" type="text/javascript"></script>
<script src="/admin/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
<!-- BEGIN THEME GLOBAL SCRIPTS -->

{{--end raw add--}}



<!-- END PAGE LEVEL SCRIPTS -->

<script>
    //Command: toastr[error]("Gnome & Growl type non-blocking notifications", "Toastr Notifications")
    toastr.options = {
        "closeButton": true,
        "debug": true,
        "positionClass": "toast-top-center",
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    // var msg = 'error';

    //toastr.error(msg);
    // toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
</script>

@include('pages.include.show_flash_message')











@yield('js')
</body>

</html>