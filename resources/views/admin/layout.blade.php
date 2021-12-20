<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>DarioPro</title>
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{asset('backend/media/logos/90fav.png')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->

    <link href="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Root-->
        <div class="page d-flex flex-row flex-column-fluid">
            @include('admin.body.aside')
            <!--begin::Page-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">


                @include('admin.body.header')

                <div class="content d-flex flex-column flex-column-fluid mt-20" id="kt_content">
                    <!--begin::Container-->
                    
                    <div class="container" id="kt_content_container">@yield('admin')
                    </div>
                </div>

                <!--begin::Javascript-->
                <!--begin::Global Javascript Bundle(used by all pages)-->
                @include('admin.body.footer')
                <script src="{{asset('plugins/global/plugins.bundle.js')}}"></script>
                <script src="{{asset('backend/js/scripts.bundle.js')}}"></script>
                <!--end::Global Javascript Bundle-->
                <!--begin::Page Vendors Javascript(used by this page)-->
                <script src="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
                <!--end::Page Vendors Javascript-->
                <!--begin::Page Custom Javascript(used by this page)-->
                <script src="{{asset('backend/js/custom/widgets.js')}}"></script>
                <script src="{{asset('backend/js/custom/apps/chat/chat.js')}}"></script>
                <script src="{{asset('backend/js/custom/modals/create-app.js')}}"></script>
                <script src="{{asset('backend/js/custom/modals/upgrade-plan.js')}}"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <!--end::Page Custom Javascript-->
                <!--end::Javascript-->
            </div>
        </div>
    </div>
    
</body>
<!--end::Body-->

</html>