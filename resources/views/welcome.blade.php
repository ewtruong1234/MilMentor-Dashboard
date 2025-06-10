<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=bookmark" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"> <!--end::Fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="{{ asset('css/plugins.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
        #kt_app_wrapper {
            max-width: 1200px;
            margin-top: 0px !important;
            margin-left: 300px !important;
        }

        @media (max-width: 992px) {
            #kt_app_wrapper {
                margin-left: 0px !important;
            }
        }
    </style>
    <!-- Livewire Styles -->
    <style>
        [wire\:loading][wire\:loading],
        [wire\:loading\.delay][wire\:loading\.delay],
        [wire\:loading\.inline-block][wire\:loading\.inline-block],
        [wire\:loading\.inline][wire\:loading\.inline],
        [wire\:loading\.block][wire\:loading\.block],
        [wire\:loading\.flex][wire\:loading\.flex],
        [wire\:loading\.table][wire\:loading\.table],
        [wire\:loading\.grid][wire\:loading\.grid],
        [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.none][wire\:loading\.delay\.none],
        [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short][wire\:loading\.delay\.short],
        [wire\:loading\.delay\.default][wire\:loading\.delay\.default],
        [wire\:loading\.delay\.long][wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline][wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        :root {
            --livewire-progress-bar-color: #2299dd;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
    <style>
        /* Make clicks pass-through */

        #nprogress {
            pointer-events: none;
        }

        #nprogress .bar {
            background: var(--livewire-progress-bar-color, #29d);

            position: fixed;
            z-index: 1031;
            top: 0;
            left: 0;

            width: 100%;
            height: 2px;
        }

        /* Fancy blur effect */
        #nprogress .peg {
            display: block;
            position: absolute;
            right: 0px;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px var(--livewire-progress-bar-color, #29d), 0 0 5px var(--livewire-progress-bar-color, #29d);
            opacity: 1.0;

            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px);
        }

        /* Remove these to get rid of the spinner */
        #nprogress .spinner {
            display: block;
            position: fixed;
            z-index: 1031;
            top: 15px;
            right: 15px;
        }

        #nprogress .spinner-icon {
            width: 18px;
            height: 18px;
            box-sizing: border-box;

            border: solid 2px transparent;
            border-top-color: var(--livewire-progress-bar-color, #29d);
            border-left-color: var(--livewire-progress-bar-color, #29d);
            border-radius: 50%;

            -webkit-animation: nprogress-spinner 400ms linear infinite;
            animation: nprogress-spinner 400ms linear infinite;
        }

        .nprogress-custom-parent {
            overflow: hidden;
            position: relative;
        }

        .nprogress-custom-parent #nprogress .spinner,
        .nprogress-custom-parent #nprogress .bar {
            position: absolute;
        }

        @-webkit-keyframes nprogress-spinner {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes nprogress-spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" data-kt-app-aside-enabled="true"
    data-kt-app-aside-fixed="false" class="app-default">
    <!-- Google tag (gtag.js) -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-16LXPG6W65"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-16LXPG6W65');
    </script>
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->


    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


            <!--begin::Header-->

            <body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
                data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
                data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true"
                data-kt-app-toolbar-enabled="true" data-kt-app-aside-enabled="true" data-kt-app-aside-fixed="false"
                class="app-default" __processed_6fc382ae-2b0c-4955-8325-623faa89e278__="true"
                bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJlbmFibGVkIiwiRkFDRUJPT0siOiJlbmFibGVkIiwiVFdJVFRFUiI6ImVuYWJsZWQiLCJSRURESVQiOiJlbmFibGVkIiwiUElOVEVSRVNUIjoiZW5hYmxlZCIsIklOU1RBR1JBTSI6ImVuYWJsZWQiLCJMSU5LRURJTiI6ImVuYWJsZWQiLCJDT05GSUciOiJkaXNhYmxlZCJ9LCJ2ZXJzaW9uIjoiMi4wLjIyIiwic2NvcmUiOjIwMDIyMH1d">
                <!-- Google tag (gtag.js) -->
                <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-16LXPG6W65"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];

                    function gtag() {
                        dataLayer.push(arguments);
                    }
                    gtag('js', new Date());

                    gtag('config', 'G-16LXPG6W65');
                </script>
                <!--begin::Theme mode setup on page load-->
                <script>
                    var defaultThemeMode = "light";
                    var themeMode;

                    if (document.documentElement) {
                        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                        } else {
                            if (localStorage.getItem("data-bs-theme") !== null) {
                                themeMode = localStorage.getItem("data-bs-theme");
                            } else {
                                themeMode = defaultThemeMode;
                            }
                        }

                        if (themeMode === "system") {
                            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                        }

                        document.documentElement.setAttribute("data-bs-theme", themeMode);
                    }
                </script>
                <!--end::Theme mode setup on page load-->
                <!--Begin::Google Tag Manager (noscript) -->
                <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0"
                        width="0" style="display:none;visibility:hidden"></iframe></noscript>
                <!--End::Google Tag Manager (noscript) -->


                <!--begin::App-->
                <div class="d-flex flex-column flex-root app-root" id="kt_app_root" bis_skin_checked="1">
                    <!--begin::Page-->
                    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page" bis_skin_checked="1">


                        <!--begin::Header-->
                        <div id="kt_app_header" class="app-header " bis_skin_checked="1">

                            <!--begin::Header logo-->
                            <div class="app-header-logo d-flex align-items-center ps-lg-10 gap-4 gap-lg-6"
                                bis_skin_checked="1">
                                <!--begin::Aside toggle-->
                                <button id="kt_app_aside_toggle"
                                    class="d-none btn btn-icon bg-gray-300 bg-opacity-75 btn-color-gray-700 btn-active-color-primary rounded-1 w-30px h-30px ms-n3 ms-lg-0">
                                    <i class="ki-outline ki-burger-menu-6 fs-3"></i> </button>
                                <!--end::Aside toggle-->

                                <!--begin::Logo image-->
                                <a href="/">
                                    <img alt="Logo" src="https://app.milmentor.com/img/logo-mm.png"
                                        class="h-20px d-sm-none d-inline theme-light-show">
                                    <img alt="Logo" src="https://app.milmentor.com/img/logo-mm.png"
                                        class="h-45px h-lg-45px theme-light-show d-none d-sm-inline"
                                        style="heightx: 70px !important;">
                                    <img alt="Logo" src="https://app.milmentor.com/img/logo-mm.png"
                                        class="h-20px h-lg-25px theme-dark-show">
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Header logo-->

                            <!--begin::Header wrapper-->
                            <div class="app-header-wrapper" bis_skin_checked="1">
                                <div class="app-container container-fluid" bis_skin_checked="1">
                                    <div class="app-navbar flex-shrink-0" bis_skin_checked="1">
                                        <!--begin::Search-->
                                        <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1 me-1 me-lg-0"
                                            bis_skin_checked="1">

                                            <!--begin::Search-->
                                            <div id="kt_header_search"
                                                class="header-search d-flex align-items-center w-lg-400px"
                                                data-kt-search-keypress="true" data-kt-search-min-length="2"
                                                data-kt-search-enter="enter" data-kt-search-layout="menu"
                                                data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
                                                data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start"
                                                data-kt-search="true" bis_skin_checked="1">

                                                <!--begin::Tablet and mobile search toggle-->
                                                <div data-kt-search-element="toggle"
                                                    class="search-toggle-mobile d-flex d-lg-none align-items-center"
                                                    bis_skin_checked="1">
                                                    <div class="d-flex " bis_skin_checked="1">
                                                        <i class="ki-outline ki-magnifier fs-1 "></i>
                                                    </div>
                                                </div>
                                                <!--end::Tablet and mobile search toggle-->

                                                <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                                                <form data-kt-search-element="form"
                                                    class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0"
                                                    autocomplete="off" action="/mentee/feed">
                                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                                    <input type="hidden">
                                                    <!--end::Hidden input-->

                                                    <!--begin::Icon-->
                                                    <i
                                                        class="ki-outline ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i>
                                                    <!--end::Icon-->

                                                    <!--begin::Input-->
                                                    <input type="text"
                                                        class="search-input form-control form-control rounded-1  ps-13"
                                                        name="search" value=""
                                                        placeholder="Search Name, Industry, Experience"
                                                        data-kt-search-element="input">
                                                    <!--end::Input-->

                                                    <!--begin::Spinner-->
                                                    <span
                                                        class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                                        data-kt-search-element="spinner">
                                                        <span
                                                            class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                                    </span>
                                                    <!--end::Spinner-->

                                                    <!--begin::Reset-->
                                                    <span
                                                        class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                                        data-kt-search-element="clear">
                                                        <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i> </span>
                                                    <!--end::Reset-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--end::Search-->

                                        <!--begin::Filters-->
                                        <div class="app-navbar-item ms-1 ms-md-3" bis_skin_checked="1">
                                            <!--begin::Menu- wrapper-->
                                            <div class="btn btn-icon btn-custom btn-color-gray-500 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                                                data-kt-menu-trigger="{default: 'click'}" data-kt-menu-attach="parent"
                                                data-kt-menu-placement="bottom-end" bis_skin_checked="1">
                                                <i class="ki-outline ki-setting-4 fs-2"></i>
                                            </div>

                                            <!--begin::My apps-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px"
                                                data-kt-menu="true" style="" bis_skin_checked="1">
                                                <!--begin::Card-->
                                                <div class="card" bis_skin_checked="1">
                                                    <!--begin::Card header-->
                                                    <div class="card-header" bis_skin_checked="1">
                                                        <!--begin::Card title-->
                                                        <div class="card-title" bis_skin_checked="1">Filters</div>
                                                        <!--end::Card title-->

                                                        <!--begin::Card toolbar-->
                                                        <div class="card-toolbar" bis_skin_checked="1">
                                                        </div>
                                                        <!--end::Card toolbar-->
                                                    </div>
                                                    <!--end::Card header-->

                                                    <!--begin::Card body-->
                                                    <div class="card-body py-5" bis_skin_checked="1">
                                                        <!--begin::Scroll-->
                                                        <div class="mh-450px scroll-y me-n5 pe-5"
                                                            bis_skin_checked="1">
                                                            <!--begin::Row-->
                                                            <div class="row g-2" bis_skin_checked="1">
                                                                <h4>Badges</h4>
                                                                <div class="d-block badges" bis_skin_checked="1">
                                                                    <!--begin::Badge-->
                                                                    <a href="/mentee/feed?badge=access_to_employment">
                                                                        <div class="badge badge-lg badge-light-primary me-2 mb-2"
                                                                            bis_skin_checked="1">Has access to
                                                                            employment opportunities</div>
                                                                    </a>
                                                                    <!--begin::Badge-->
                                                                    <!--begin::Badge-->
                                                                    <a
                                                                        href="/mentee/feed?badge=happy_to_make_introductions">
                                                                        <div class="badge badge-lg badge-light-dark me-2 mb-2"
                                                                            bis_skin_checked="1">Happy to make
                                                                            introductions</div>
                                                                    </a>
                                                                    <!--begin::Badge-->
                                                                    <!--begin::Badge-->
                                                                    <a href="/mentee/feed?badge=veteran">
                                                                        <div class="badge badge-lg badge-light-success me-2 mb-2"
                                                                            bis_skin_checked="1">Veteran</div>
                                                                    </a>
                                                                    <!--begin::Badge-->
                                                                    <!--begin::Badge-->
                                                                    <a href="/mentee/feed?badge=military_spouse">
                                                                        <div class="badge badge-lg badge-light-warning me-2 mb-2"
                                                                            bis_skin_checked="1">Military Spouse</div>
                                                                    </a>
                                                                    <!--begin::Badge-->
                                                                    <!--begin::Badge-->
                                                                    <a href="/mentee/feed?badge=business_founder">
                                                                        <div class="badge badge-lg badge-light-danger me-2 mb-2"
                                                                            bis_skin_checked="1">Business Founder</div>
                                                                    </a>
                                                                    <!--begin::Badge-->
                                                                </div>
                                                                <div class="separator my-5" bis_skin_checked="1">
                                                                </div>
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--begin::Row-->
                                                            <div class="row g-2" bis_skin_checked="1">
                                                                <h4 class="my-2">Topics</h4>
                                                                <div class="d-block badges" bis_skin_checked="1">
                                                                    <!--begin::Topic-->
                                                                    <a href="/mentee/feed?topic=Ask me about transitioning"
                                                                        class="text-black">
                                                                        <div class="fw-boldx fs-6"
                                                                            bis_skin_checked="1">- Ask me about
                                                                            transitioning</div>
                                                                    </a>
                                                                    <!--begin::Topic-->
                                                                    <!--begin::Topic-->
                                                                    <a href="/mentee/feed?topic=Ask me about my career journey"
                                                                        class="text-black">
                                                                        <div class="fw-boldx fs-6"
                                                                            bis_skin_checked="1">- Ask me about my
                                                                            career journey</div>
                                                                    </a>
                                                                    <!--begin::Topic-->
                                                                    <!--begin::Topic-->
                                                                    <a href="/mentee/feed?topic=Ask me about my job"
                                                                        class="text-black">
                                                                        <div class="fw-boldx fs-6"
                                                                            bis_skin_checked="1">- Ask me about my job
                                                                        </div>
                                                                    </a>
                                                                    <!--begin::Topic-->
                                                                    <!--begin::Topic-->
                                                                    <a href="/mentee/feed?topic=Ask me about higher education"
                                                                        class="text-black">
                                                                        <div class="fw-boldx fs-6"
                                                                            bis_skin_checked="1">- Ask me about higher
                                                                            education</div>
                                                                    </a>
                                                                    <!--begin::Topic-->
                                                                    <!--begin::Topic-->
                                                                    <a href="/mentee/feed?topic=Ask me for startup advice"
                                                                        class="text-black">
                                                                        <div class="fw-boldx fs-6"
                                                                            bis_skin_checked="1">- Ask me for startup
                                                                            advice</div>
                                                                    </a>
                                                                    <!--begin::Topic-->
                                                                    <!--begin::Topic-->
                                                                    <a href="/mentee/feed?topic=Ask me for interview help"
                                                                        class="text-black">
                                                                        <div class="fw-boldx fs-6"
                                                                            bis_skin_checked="1">- Ask me for interview
                                                                            help</div>
                                                                    </a>
                                                                    <!--begin::Topic-->
                                                                    <!--begin::Topic-->
                                                                    <a href="/mentee/feed?topic=Ask me for resume help"
                                                                        class="text-black">
                                                                        <div class="fw-boldx fs-6"
                                                                            bis_skin_checked="1">- Ask me for resume
                                                                            help</div>
                                                                    </a>
                                                                    <!--begin::Topic-->
                                                                    <!--begin::Topic-->
                                                                    <a href="/mentee/feed?topic=Ask me anything"
                                                                        class="text-black">
                                                                        <div class="fw-boldx fs-6"
                                                                            bis_skin_checked="1">- Ask me anything
                                                                        </div>
                                                                    </a>
                                                                    <!--begin::Topic-->
                                                                </div>
                                                                <div class="separator" bis_skin_checked="1"></div>
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Scroll-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::My apps--> <!--end::Menu wrapper-->
                                        </div>
                                        <!--end::Filters-->

                                        <div class="app-navbar-item ms-1 ms-md-3">
                                        <!--begin::Menu- wrapper-->
                                        <a href="https://app.milmentor.com/page/top-contributors" class="btn btn-icon btn-custom btn-color-gray-500 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px">
                                            <i class="ki-outline ki-ranking fs-2"></i>
                                        </a>
                                    </div>
                                    </div>

                                    <!--begin::Navbar-->
                                    <div class="app-navbar flex-shrink-0" bis_skin_checked="1">



                                        <div class="app-navbar-item me-5" bis_skin_checked="1">
                                            <a href="https://app.milmentor.com/set-acc-type/mentor"
                                                class="btn btn-flex flex-center btn-sm fw-bold btn-dark py-3 w-40px h-40px w-md-auto">
                                                <i class="ki-outline ki-arrows-loop d-inline-flex fs-2 p-0 m-0"></i>
                                                <span class="d-none d-md-inline ps-lg-1">Switch to Mentor</span>
                                            </a>
                                        </div>


                                        <!--begin::Notifications-->
                                        <div wire:snapshot="{&quot;data&quot;:{&quot;count&quot;:0,&quot;notifications&quot;:[null,{&quot;keys&quot;:[&quot;a237a532-0571-4bdf-b567-b567f1620a17&quot;],&quot;class&quot;:&quot;Illuminate\\Notifications\\DatabaseNotificationCollection&quot;,&quot;modelClass&quot;:&quot;Illuminate\\Notifications\\DatabaseNotification&quot;,&quot;s&quot;:&quot;elcln&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;KRDTMxQvRV4nelumUf91&quot;,&quot;name&quot;:&quot;profile.notifications&quot;,&quot;path&quot;:&quot;mentee\/feed&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;4bf4a3ed848c55e781937ad8a5ea1063907f18c6f5e77caf566bcff77e2f17e8&quot;}"
                                            wire:effects="[]" wire:id="KRDTMxQvRV4nelumUf91" id="kt_header_search"
                                            class="header-search d-flex align-items-stretch me-5"
                                            data-kt-menu-trigger="click" data-kt-menu-offset="0,5"
                                            data-kt-menu-overflow="false" data-kt-menu-permanent="true"
                                            data-kt-menu-placement="bottom-end" wire:ignore="" onclick="toggleMenu()"
                                            bis_skin_checked="1">
                                            <!--begin::Search toggle-->
                                            <div class="d-flex align-items-center" data-kt-search-element="toggle"
                                                id="kt_header_search_toggle" bis_skin_checked="1">
                                                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                                                    wire:click="markAsRead" bis_skin_checked="1">
                                                    <i class="ki-outline ki-notification fs-2x">
                                                    </i>
                                                    <!-- <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
            </span> -->
                                                </div>
                                            </div>
                                            <!--end::Search toggle-->
                                            <!--begin::Menu-->
                                            <div data-kt-search-element="content"
                                                class="menu menu-sub menu-sub-dropdown p-0 w-325px w-md-375px"
                                                data-kt-menu="true" id="kt_menu_select2" bis_skin_checked="1">
                                                <!--begin::Wrapper-->
                                                <div data-kt-search-element="wrapper" bis_skin_checked="1">

                                                    <!--begin::Recently viewed-->
                                                    <div class="mb-5" data-kt-search-element="main"
                                                        bis_skin_checked="1">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex flex-stack fw-semibold m-4"
                                                            bis_skin_checked="1">
                                                            <!--begin::Label-->
                                                            <span class="text-muted fs-6 me-2">Notifications</span>
                                                            <!--end::Label-->

                                                        </div>
                                                        <!--end::Heading-->

                                                        <!--begin::Items-->
                                                        <div class="scroll-y mh-200px mh-lg-325px"
                                                            bis_skin_checked="1">
                                                            <!--begin::Item-->
                                                            <a href="/mentor/profile/edit"
                                                                onclick="notiClick('/mentor/profile/edit')">
                                                                <div class="d-flex align-items-centerx p-5 "
                                                                    bis_skin_checked="1">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-circle symbol-40px me-4"
                                                                        bis_skin_checked="1">
                                                                        <span class="bg-light">
                                                                            <!-- <i class="ki-duotone ki-laptop fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i> -->
                                                                            <img src="/img/inactive-profile.png"
                                                                                alt="image"
                                                                                class="h-50px w-50px symbol symbol-circle">
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Symbol-->

                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column"
                                                                        bis_skin_checked="1">
                                                                        <span
                                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">Complete
                                                                            your profile! <span class="text-muted"
                                                                                style="float: right;">6
                                                                                days</span></span>
                                                                        <span class="fs-7 text-muted fw-semibold">Your
                                                                            profile is incomplete. Please complete it to
                                                                            get the most out of our platform.</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                            </a>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Recently viewed-->
                                                </div>
                                                <!--end::Wrapper-->

                                            </div>
                                            <!--end::Menu-->
                                            <script>
                                                function toggleMenu() {
                                                    // const menu = document.getElementById('kt_menu_select2');
                                                    // menu.classList.toggle('show');
                                                    $('#notiCount').css('display', 'none');
                                                }

                                                function notiClick(url) {
                                                    window.location = url;
                                                }
                                                $(document).ready(function() {
                                                    alert('ready');
                                                    $('#kt_header_search').on('click', function(event) {
                                                        event.stopPropagation(); // Prevents the dropdown from closing when clicked
                                                    });
                                                });
                                            </script>
                                        </div> <!--end::Notifications-->

                                        <div class="app-navbar-item ms-1 ms-md-3" bis_skin_checked="1">
                                            <!--begin::Menu- wrapper-->
                                            <a href="https://app.milmentor.com/mentor/profile/hours">
                                                <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px me-5"
                                                    data-bs-toggle="tooltip" data-bs-placement="right" id="tz_abb"
                                                    data-bs-original-title="Your timezone is America/Los_Angeles"
                                                    data-kt-initialized="1" bis_skin_checked="1">
                                                    <i class="ki-outline ki-time fs-1 me-2"></i>PDT
                                                </div>
                                            </a>
                                            <!--end::Menu wrapper-->
                                        </div>

                                        <!--begin::User menu-->
                                        <div class="app-navbar-item ms-1 ms-lg-3 me-2 me-lg-6"
                                            id="kt_header_user_menu_toggle" bis_skin_checked="1">
                                            <!--begin::Menu wrapper-->
                                            <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                                                data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                                data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
                                                bis_skin_checked="1">
                                                <img class="symbol symbol-circle symbol-35px symbol-md-40px"
                                                    src="https://milmentor.s3.amazonaws.com/avatars/1837.jpg"
                                                    onerror="this.onerror=null;this.src='/img/blank.png';"
                                                    alt="user">
                                            </div>

                                            <!--begin::User account menu-->
                                            <div class="d-nonex menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                                data-kt-menu="true" bis_skin_checked="1">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" bis_skin_checked="1">
                                                    <div class="menu-content d-flex align-items-center px-3"
                                                        bis_skin_checked="1">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-50px me-5" bis_skin_checked="1">
                                                            <img class="symbol symbol-circle symbol-35px symbol-md-40px"
                                                                src="https://milmentor.s3.amazonaws.com/avatars/1837.jpg"
                                                                alt="user">
                                                        </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Username-->
                                                        <div class="d-flex flex-column" bis_skin_checked="1">
                                                            <div class="fw-bold d-flex align-items-center fs-5"
                                                                bis_skin_checked="1">
                                                                Junelle Rose Jocson <span
                                                                    class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                            </div>

                                                            <a href="#"
                                                                class="fw-semibold text-muted text-hover-primary fs-7">junellerose@gmail.com</a>
                                                        </div>
                                                        <!--end::Username-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu separator-->
                                                <div class="separator my-2" bis_skin_checked="1"></div>
                                                <!--end::Menu separator-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-5" bis_skin_checked="1">
                                                    <a href="https://app.milmentor.com/mentee/profile"
                                                        class="menu-link px-5">
                                                        My Profile
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-5" bis_skin_checked="1">
                                                    <a href="https://app.milmentor.com/mentee/feed"
                                                        class="menu-link px-5">
                                                        <span class="menu-text">Feed</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu separator-->
                                                <div class="separator my-2" bis_skin_checked="1"></div>
                                                <!--end::Menu separator-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-5 my-1" bis_skin_checked="1">
                                                    <a href="https://app.milmentor.com/mentee/profile/edit"
                                                        class="menu-link px-5">
                                                        Profile Edit
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!-- begin::Menu item-->
                                                <div class="menu-item px-5" bis_skin_checked="1">
                                                    <form method="POST" action="https://app.milmentor.com/logout">
                                                        <input type="hidden" name="_token"
                                                            value="2st9cPyItkw0zGDOBIwlUsZRAwwJjVAsFtdIExiK"
                                                            autocomplete="off"> <a href=""
                                                            class="menu-link px-5"
                                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                            Log Out
                                                        </a>
                                                    </form>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::User account menu-->
                                            <!--end::Menu wrapper-->
                                        </div>
                                        <!--end::User menu-->

                                        <div class="app-navbar-item ms-1 ms-lg-3 me-n4 d-flex d-lg-none"
                                            bis_skin_checked="1">
                                            <!--begin::Sidebar toggle-->
                                            <button id="kt_app_sidebar_mobile_toggle"
                                                class="btn btn-icon w-35px h-35px w-md-40px h-md-40px">
                                                <i class="ki-outline ki-burger-menu-2 fs-2"></i> </button>
                                            <!--end::Sidebar toggle-->
                                        </div>
                                    </div>
                                    <!--end::Navbar-->
                                </div>
                            </div>
                        </div> <!--end::Header-->
                        <!--begin::Wrapper-->
                        <div class="app-wrapper d-flex m-auto" id="kt_app_wrapper" bis_skin_checked="1">
                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar d-flex flex-column justify-content-between drawer drawer-start" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle" style="width: 250px !important;">
                    
                    <div>

                        <!-- begin::Sidebar secondary menu -->
                        <div id="kt_app_sidebar_menu" data-kt-menu="false"
                            class="
                                    menu 
                                    menu-sub-indention 
                                    menu-rounded 
                                    menu-column 
                                    menu-active-bg 
                                    menu-title-gray-600 
                                    menu-icon-gray-500 
                                    menu-state-primary 
                                    menu-arrow-gray-500 
                                    fw-semibold 
                                    fs-6 
                                    py-4 
                                    py-lg-6 
                                    ps-5
                            ">

                            <div id="kt_app_sidebar_menu_wrapper" class="px-1 px-lg-10"
                                data-kt-sticky="true" data-kt-sticky-name="app-sidebar-menu-sticky"
                                data-kt-sticky-offset="{default: false, xl: '500px'}"
                                data-kt-sticky-release="#kt_app_stats" data-kt-sticky-left="auto"
                                data-kt-sticky-top="100px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95"
                                data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: true}"
                                data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header, #kt_app_header"
                                data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="0px"
                                style="height: 693px;">

                                <!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu content-->
                                    <div class="menu-content "><span class="menu-section fs-5 fw-bolder ps-1 py-1">Quick
                                            Links</span></div><!--end:Menu content-->
                                </div><!--end:Menu item-->

                                <!--begin:Menu item (Dashboard Header)-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon"><i class="ki-outline ki-home fs-2"></i></span>
                                        <span class="menu-title">Dashboard</span>
                                    </span>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item (Dashboard Header)-->
                                <div class="menu-sub" style="display: block;">
                                    <!--begin:Menu item (Mentors)-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="https://app.milmentor.com/mentee/feed">
                                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                            <span class="menu-title">Mentors</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item (Mentors)-->

                                    <!--begin:Menu item (Careers)-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="https://app.milmentor.com/mentee/careers">
                                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                            <span class="menu-title">Careers</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item (Careers)-->

                                    <!--begin:Menu item (Events & Resources)-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="https://www.milmentor.com/militaryhiringfairs/">
                                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                            <span class="menu-title">Events & Resources</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item (Events & Resources)-->
                                </div>
                                <!--begin:Menu item (Profile Header)-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon"><i class="ki-outline ki-profile-circle fs-2"></i></span>
                                        <span class="menu-title">Profile</span>
                                    </span>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item (Profile Header)-->
                                <div class="menu-sub" style="display: block;">
                                    <!--begin:Menu item (View Profile)-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="https://app.milmentor.com/mentee/profile">
                                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                            <span class="menu-title">View Profile</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item (View Profile)-->

                                    <!--begin:Menu item (Edit Profile)-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="https://app.milmentor.com/mentee/profile/edit">
                                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                            <span class="menu-title">Edit Profile</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item (Edit Profile)-->

                                    <!--begin:Menu item (Edit Availability)-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="https://app.milmentor.com/mentee/profile/hours">
                                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                            <span class="menu-title">Edit Availability</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item (Edit Availability)-->
                                </div>
                                <div class="aside-footer flex-column-auto pt-5 pb-7 px-7" id="kt_aside_footer">
                                    <a href="https://app.milmentor.com/settings/referral"
                                        class="btn btn-bg-light btn-color-gray-500 btn-active-color-gray-900 text-nowrap w-100"
                                        id="share_btn">
                                        <span class="btn-label">
                                            Share
                                        </span>
                                        <i class="ki-duotone ki-send btn-icon fs-2"><span class="path1"></span><span
                                                class="path2"></span></i> </a>
                                </div>
                                <!--begin:Sponsorship text pinned to bottom-->
                                <div class="sponsorship-text text-center px-7 pb-5">
                                    <div class="fs-8 text-muted">Proudly Supporting</div>
                                    <div class="sponsored-company-name fs-8 text-muted">©Sponsored Company Name</div>
                                </div>
                                <!--end:Sponsorship text-->
                            </div>
                        </div>
                        <!--end::Sidebar secondary menu-->
                    </div>
                </div>
                <!--end::Sidebar-->
                            <!--begin::Main-->
                            <div class="app-main flex-column flex-row-fluid " id="kt_app_main"
                                style="margin-top: 87px;" bis_skin_checked="1">
                                <!-- <a href="#">
                        <div class="sponsor-banner-teks" style="
                            margin-top: 87px;
                            /* z-index: 106; */
                            margin-left: -20px;
                            background: url('http://app.milmentor.com/img/sponsor-banner-teks.png') no-repeat;
                            background-size: cover;
                            height: 80px;
                            background-position: center;"
                        ></div>
                    </a> -->
                                <div class="d-flex flex-column flex-column-fluid" bis_skin_checked="1">

                                    <!--begin::Toolbar-->
                                    <div id="kt_app_toolbar" class="app-toolbar  pt-7 pt-lg-10 "
                                        bis_skin_checked="1">

                                        <!--begin::Toolbar container-->
                                        <div id="kt_app_toolbar_container"
                                            class="app-container  container-xxl d-flex align-items-stretch "
                                            bis_skin_checked="1">
                                            <!--begin::Toolbar wrapper-->
                                            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100"
                                                bis_skin_checked="1">


                                                <!--begin::Page title-->
                                                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3"
                                                    bis_skin_checked="1">
                                                    <!--begin::Title-->
                                                    <h1
                                                        class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                                                        Recommended Picks
                                                    </h1>
                                                    <!--end::Title-->

                                                    <!--begin::Breadcrumb-->
                                                    <ul
                                                        class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                                                        <!--begin::Item-->
                                                        <li class="breadcrumb-item text-muted">
                                                            <a href="/" class="text-muted text-hover-primary">
                                                                Home </a>
                                                        </li>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <li class="breadcrumb-item">
                                                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                                        </li>
                                                        <!--end::Item-->

                                                        <!--begin::Item-->
                                                        <li class="breadcrumb-item text-muted">
                                                            Dashboard </li>
                                                        <!--end::Item-->

                                                    </ul>
                                                    <!--end::Breadcrumb-->
                                                </div>
                                                <!--end::Page title-->
                                                <!--begin::Actions-->
                                                <div class="d-none d-flex align-items-center gap-2 gap-lg-3"
                                                    bis_skin_checked="1">
                                                    <a href="#"
                                                        class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                        Add Member
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-flex btn-primary h-40px fs-7 fw-bold"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_create_campaign">
                                                        New Campaign
                                                    </a>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Toolbar wrapper-->
                                        </div>
                                        <!--end::Toolbar container-->
                                    </div>
                                    <!--end::Toolbar-->

                                    <!--begin::Content-->
                                    <div id="kt_app_content" class="app-content " bis_skin_checked="1" style="margin-left: 50px;">
                                        <div class = "app-main flex-column flex-row-fluid " id = "kt_app_main" style = "margin-top: -20px">
                                            @php
                                                $event_resources = [
                                                    [
                                                        'img' => 'https://media.licdn.com/dms/image/v2/D560BAQFD4XKdi3JfAA/company-logo_200_200/company-logo_200_200/0/1738183582316/service_to_success_military_logo?e=2147483647&v=beta&t=IfpVRM4drCrEfti1foN6uL1BXb2B5t_pHXDMQBsmhYU',
                                                        'company_name' => 'Service to Success',
                                                        'event_name' => 'Virtual Military Hiring Fair',
                                                        'details' => 'Fri, Mon May 30 · 3:00 P.M. - 6:00 P.M.',
                                                        'attendance' => 'Remote',
                                                        'link' => 'https://www.milmentor.com/event/virtual-military-hiring-fair/'
                                                    ],
                                                    [
                                                        'img' => 'https://media.licdn.com/dms/image/v2/D560BAQFD4XKdi3JfAA/company-logo_200_200/company-logo_200_200/0/1738183582316/service_to_success_military_logo?e=2147483647&v=beta&t=IfpVRM4drCrEfti1foN6uL1BXb2B5t_pHXDMQBsmhYU',
                                                        'company_name' => 'Service to Success',
                                                        'event_name' => 'H.I.R.E Conference - Military & Federal',
                                                        'details' => 'Thurs, Apr 3 · 10:30 A.M. - 3:30 P.M. PST',
                                                        'attendance' => '7002 Arundel Mills Cir #7777, Hanover, MD',
                                                        'link' => 'https://www.milmentor.com/event/h-i-r-e-conference-military-and-federal/'                                                        
                                                    ],
                                                    [
                                                        'img' => 'https://upload.wikimedia.org/wikipedia/en/thumb/6/69/Wounded_Warrior_Project_logo.svg/1200px-Wounded_Warrior_Project_logo.svg.png',
                                                        'company_name' => 'Wounded Warrior Project',
                                                        'event_name' => 'Support the Wounded',
                                                        'details' => 'USAA is matching Memorial Day Donations $1-for-$1',
                                                        'attendance' => 'Sponsored',
                                                        'link' => 'https://support.woundedwarriorproject.org/Default.aspx?tsid=11585&ovr_acv_id=16821&campaignSource=ONLINE&source=BS25001AAABREAA&gad_source=1&gad_campaignid=1755672625&gbraid=0AAAAADg1Wjrsy9Z0nU9VU0gDpVrBNM4a-&gclid=Cj0KCQjwuvrBBhDcARIsAKRrkjckMQ590baO3OTSVmRcXwFDW3AzR8dn_3l-lzAxqvqRZXcvcegKfnMaAkYSEALw_wcB&gclsrc=aw.ds'
                                                    ],
                                                    [
                                                        'img' => 'https://media.licdn.com/dms/image/v2/D560BAQFD4XKdi3JfAA/company-logo_200_200/company-logo_200_200/0/1738183582316/service_to_success_military_logo?e=2147483647&v=beta&t=IfpVRM4drCrEfti1foN6uL1BXb2B5t_pHXDMQBsmhYU',
                                                        'company_name' => 'Service to Success',
                                                        'event_name' => 'Virtual Military Hiring Fair',
                                                        'details' => 'Fri, Aug 8 · 3:00 P.M. - 6:00 P.M. PST',
                                                        'attendance' => 'Remote',
                                                        'link' => 'https://www.milmentor.com/event/virtual-military-hiring-fair-2/'
                                                    ],
                                                ];
                                            @endphp
                                            <div class = "Carousel-Header" style = "display: flex; justify-content: space-between;">
                                                <span class="dash_headings with-margin">Mentor Picks for <span class="highlighted-text">Information Technology (IT)</span></span></span>
                                                <a href="https://app.milmentor.com/mentee/feed?search=Information%20Technology%20(IT)" class="with-margin" style="color: #0000EE; font-size: 1rem; font-weight: bold;"> <u>View More</u> </a>                                            </div>
                                            <x-carousel :items="$mentors" type="mentor" />
                                            <p>Not what you're looking for? <u><a href="/mentee/profile" style = "color:#0000EE">Update Career Interests</a></u></p>
                                            <hr>
                                            <div class = "Carousel-Header" style = "display: flex; justify-content: space-between;">
                                                <span class="dash_headings">Career Picks for <span class="highlighted-text">Information Technology (IT)</span></span>
                                                <a href="/mentee/feed" style="color: #0000EE; font-size: 1rem; font-weight: bold;"> <u>View More</u> </a>
                                            </div>
                                            <x-carousel :items="$careers" type="career" />
                                            <p>Not what you're looking for? <u><a href="/mentee/profile" style = "color:#0000EE">Update Career Interests</a></u></p>
                                            <hr>
                                            <span class="dash_headings">Events & Resources <span class="highlighted-text">for you</span></span>
                                            <x-carousel :items="$event_resources" type="event_resource" />
                                        </div>
                                    </div>

                                    <!--begin::Footer-->
                                    <div id="kt_app_footer" class="app-footer " bis_skin_checked="1">
                                        <!--begin::Footer container-->
                                        <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 "
                                            bis_skin_checked="1">
                                            <!--begin::Copyright-->
                                            <div class="text-gray-900 order-2 order-md-1" bis_skin_checked="1">
                                                <span class="text-muted fw-semibold me-1">2025©</span>
                                                <a href="#" class="text-gray-800 text-hover-primary">Service to
                                                    Success</a>
                                            </div>
                                            <!--end::Copyright-->

                                            <!--begin::Menu-->
                                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                                <li class="menu-item"><a href="/page/terms-conditions"
                                                        class="menu-link px-2" target="_blank">Terms &amp;
                                                        Conditions</a></li>

                                                <li class="menu-item"><a href="/page/privacy-policy"
                                                        class="menu-link px-2" target="_blank">Privacy Policy</a></li>
                                            </ul>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Footer container-->
                                    </div> <!--end::Footer-->
                                </div>

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Page-->
                    </div>
                    <!--end::App-->


                    <!--begin::Engage modals-->


                    <div class="modal fade" tabindex="1" id="job_board_coming_soon" bis_skin_checked="1">
                        <div class="modal-dialog modal-dialog-centered" bis_skin_checked="1">
                            <div class="modal-content" bis_skin_checked="1">
                                <div class="modal-header" bis_skin_checked="1">
                                    <h3 class="modal-title">Coming Soon!</h3>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                        data-bs-dismiss="modal" aria-label="Close"
                                        style="position: absolute;right: 15px;" bis_skin_checked="1">
                                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>
                                    <!--end::Close-->
                                </div>

                                <div class="modal-body" bis_skin_checked="1">
                                    Coming soon, a Career Board and Resource Directory within MilMentor! Search jobs
                                    from companies serious about hiring military, find scholarships, and more soon with
                                    your mentor profile!
                                </div>

                                <div class="d-nonex modal-footer" bis_skin_checked="1">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--begin::Scrolltop-->
                    <div id="kt_scrolltop" class="d-none scrolltop" data-kt-scrolltop="true" bis_skin_checked="1">
                        <i class="ki-outline ki-arrow-up"></i>
                    </div>
                    <!--end::Scrolltop-->

                    <!--begin::Help Button-->
                    <a href="#" id="help_btn" class="float">
                        <i class="fa fa-question my-float fs-1"></i>
                    </a>
                    <script>
                        const button = document.getElementById('help_btn');

                        button.addEventListener('click', e => {
                            e.preventDefault();

                            Swal.fire({
                                html: `<h2>Need Support?</h2></br>
                <ul style="text-align:left;"><li>Need help? Watch the walkthrough on how to be a mentor <a href="https://youtu.be/WFXFwq91XDg" target="_blank">here</a>, or on how to be a mentee and book the right mentors <a href="https://youtu.be/vNrzRJd-w-o" target="_blank">here</a>.</li> 
                <li>Want to help make the platform better? Submit your <a href="#" data-feedback-fish data-feedback-fish-userid="junellerose@gmail.com">feedback here</a></li>
                <li>Want to speak with a member of our team? Email <a href="mailto:peter.cline@servicetosuccess.com">here</a></li></ul>`,
                                icon: "question",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                }
                            });
                        });

                        function openFeedbackFish() {
                            var link = document.getElementById("feedback_link");
                            var event = new MouseEvent("click", {
                                bubbles: true,
                                cancelable: true,
                                view: window
                            });
                            link.dispatchEvent(event);
                        }
                    </script>
                    <!--end::Help Button-->

                    <!--begin:: Share Modal-->
                    <!-- <script>
                        const ShareButton = document.getElementById('share_btn');

                        ShareButton.addEventListener('click', e => {
                            e.preventDefault();

                            Swal.fire({
                                html: `<h2>Share Your Profile</h2></br>
                <p>We encourage you to share your about MilMentor on all channels to help more folks find unlimited, free mentors as well as careers and resources! Whether that is in formation spreading the word, posting on social media, or anything in between, we greatly appreciate it!</p> 
                <p>As a small and growing company building free tools for the community, your help in reaching more people is a game-changer. Click below for a shareable link for our referral program where you get rewarded with hoodies, recognition and more for referring new users!</p>`,
                                icon: "success",
                                showCancelButton: false,
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "Refer New Users",
                                customClass: {
                                    popup: 'share-swal-popup',
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Copy the link to the clipboard
                                    window.location = `http://app.milmentor.com/settings/referral`;
                                    const link = "http://app.milmentor.com/mentor/profile?id=1837";
                                    // navigator.clipboard.writeText(link).then(() => {

                                    // }).catch(err => {
                                    //     console.error('Error copying link: ', err);
                                    // });
                                }
                            });
                        });
                    </script> -->
                    <style>
                        .share-swal-popup {
                            width: 500px;
                            max-width: 100%;
                        }

                        .share-swal-popup .swal2-html-container {
                            max-height: unset;
                        }
                    </style>
                    <!--end:: Share Modal-->

                    <!--begin::Modals-->
                    <!--begin::View component-->
                    <div id="mentor_availibility_drawerx" class="bg-white drawer drawer-end" data-kt-drawer="true"
                        data-kt-drawer-activate="true" data-kt-drawer-close="#mentor_availibility_drawer_closex"
                        data-kt-drawer-toggle="#mentor_availibility_drawerx" data-kt-drawer-overlay="true"
                        data-kt-drawer-autohide="false" data-kt-drawer-permanent="false" data-kt-drawer-width="500px"
                        style="width: 500px !important;" bis_skin_checked="1">
                        <div class="card w-100 rounded-0" bis_skin_checked="1">
                            <!--begin::Card header-->
                            <div class="card-header pe-5" bis_skin_checked="1">
                                <!--begin::Title-->
                                <div class="card-title" bis_skin_checked="1">
                                    <!--begin::User-->
                                    <div class="d-flex justify-content-center flex-column me-3" bis_skin_checked="1">
                                        <a href="#"
                                            class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">Mentor
                                            Availability</a>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar" bis_skin_checked="1">
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-light-primary"
                                        id="mentor_availibility_drawer_close" bis_skin_checked="1">
                                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body hover-scroll-overlay-y ma-drawer" bis_skin_checked="1">
                                livewire('feed.mentor-availability2')
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <!--end::View component-->

                    <div class="modal fade" tabindex="-1" id="mentor_availibility_drawer" bis_skin_checked="1">
                        <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 900px;"
                            bis_skin_checked="1">
                            <div class="modal-content" bis_skin_checked="1">
                                <div class="modal-header d-none" bis_skin_checked="1">
                                    <h3 class="modal-title">Modal title</h3>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                        data-bs-dismiss="modal" aria-label="Close" bis_skin_checked="1">
                                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>
                                    <!--end::Close-->
                                </div>

                                <div class="modal-body" bis_skin_checked="1">
                                    <section
                                        wire:snapshot="{&quot;data&quot;:{&quot;mentor_id&quot;:5,&quot;mentor&quot;:[null,{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;key&quot;:5,&quot;s&quot;:&quot;mdl&quot;}],&quot;workingHours&quot;:null,&quot;availableSlots&quot;:&quot;&quot;,&quot;meeting_time&quot;:null,&quot;meeting_id&quot;:null,&quot;location&quot;:&quot;phone&quot;,&quot;enable_zoom&quot;:null},&quot;memo&quot;:{&quot;id&quot;:&quot;RTGdhMyV6N7RH3ohXVKp&quot;,&quot;name&quot;:&quot;feed.mentor-availability2&quot;,&quot;path&quot;:&quot;mentee\/feed&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;3b32f1edfb454873a048921ca89aa55d335ae6bc17809e8814cca027e264b036&quot;}"
                                        wire:effects="[]" wire:id="RTGdhMyV6N7RH3ohXVKp" wire:ignore="">
                                        <!--begin::loading-->
                                        <div class="loading" wire:loading.delay=""
                                            style="position: absolute; width: 100%; height: 100%; background: #ffffff; z-index: 1; opacity: .5; top: 0; left: 0;"
                                            bis_skin_checked="1">
                                            <span class="spinner-border text-primary" role="status"
                                                style="top: 45%;position: absolute;left: 49%;">
                                                <span class="visually-hidden">Loading...</span>
                                            </span>
                                        </div>
                                        <div class="row" bis_skin_checked="1">
                                            <div class="col-3 align-self-centerx" style="padding-top: 10%;"
                                                bis_skin_checked="1">
                                                <div class="d-flexx gap-7 text-center align-items-center justify-content-center"
                                                    data-id="" bis_skin_checked="1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-100px"
                                                        bis_skin_checked="1">
                                                        <img id="ma-avatar"
                                                            src="https://milmentor.s3.amazonaws.com/avatars/5.jpg"
                                                            alt="image"
                                                            onerror="this.onerror=null;this.src='/img/blank.png';">
                                                    </div><br><br>
                                                    <!--end::Avatar-->

                                                    <!--begin::Contact details-->
                                                    <div class="d-flex flex-column gap-2" bis_skin_checked="1">
                                                        <!--begin::Name-->
                                                        <h3 class="mb-0"><a href="#" id="ma-name">Abdul
                                                                Haq</a></h3>
                                                        <!--end::Name-->

                                                        <!--[if BLOCK]><![endif]--> <a href="#"
                                                            class="d-flexx align-items-center text-gray-500 text-hover-primary me-5 mb-2"
                                                            id="ma-heading">
                                                            <i class="ki-duotone ki-pencil fs-4 me-1"></i>SaaS
                                                            Development | DevOps | Software Architecture
                                                        </a>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                    <!--end::Contact details-->
                                                </div>
                                            </div>
                                            <div class="col-9 align-self-center"
                                                style="border-left: 1px solid #e2e2e2;" bis_skin_checked="1">
                                                <h3 class="text-center">Select Date &amp; Time</h3>
                                                <div id="hjsCalendar" bis_skin_checked="1">
                                                    <div class="" bis_skin_checked="1">
                                                        <div class="justify-content-center d-md-flex"
                                                            bis_skin_checked="1">
                                                            <div class="bg-white left" bis_skin_checked="1">
                                                                <div class="bg-white calendar mx-auto pb-3 px-2"
                                                                    bis_skin_checked="1">
                                                                    <div class="d-flex align-items-center justify-content-between text-uppercase month py-4"
                                                                        bis_skin_checked="1">
                                                                        <div class="fw-bold text-primary ms-3"
                                                                            id="date" bis_skin_checked="1">May
                                                                            2025</div>
                                                                        <div class="d-flex align-items-center justify-content-center gap-3"
                                                                            bis_skin_checked="1">
                                                                            <div class="d-flex align-items-center justify-content-center rounded-circle"
                                                                                id="prev" bis_skin_checked="1"><i
                                                                                    class="fa fa-angle-left"></i></div>
                                                                            <div class="d-flex align-items-center justify-content-center rounded-circle"
                                                                                id="nxt" bis_skin_checked="1"><i
                                                                                    class="fa fa-angle-right"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex align-items-center justify-content-between text-uppercase fw-light h-100 mb-2 text-sm w-100 weekdays"
                                                                        bis_skin_checked="1">
                                                                        <div class="fw-bold" bis_skin_checked="1">Sun
                                                                        </div>
                                                                        <div class="fw-bold" bis_skin_checked="1">Mon
                                                                        </div>
                                                                        <div class="fw-bold" bis_skin_checked="1">Tue
                                                                        </div>
                                                                        <div class="fw-bold" bis_skin_checked="1">Wed
                                                                        </div>
                                                                        <div class="fw-bold" bis_skin_checked="1">Thu
                                                                        </div>
                                                                        <div class="fw-bold" bis_skin_checked="1">Fri
                                                                        </div>
                                                                        <div class="fw-bold" bis_skin_checked="1">Sat
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between w-100 flex-wrap"
                                                                        id="days" bis_skin_checked="1">
                                                                        <div class="day prev-date"
                                                                            bis_skin_checked="1">27</div>
                                                                        <div class="day prev-date"
                                                                            bis_skin_checked="1">28</div>
                                                                        <div class="day prev-date"
                                                                            bis_skin_checked="1">29</div>
                                                                        <div class="day prev-date"
                                                                            bis_skin_checked="1">30</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">1</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">2</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">3</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">4</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">5</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">6</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">7</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">8</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">9</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">10</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">11</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">12</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">13</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">14</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">15</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">16</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">17</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">18</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">19</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">20</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">21</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">22</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">23</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">24</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">25</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">26</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">27</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">28</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">29</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">30</div>
                                                                        <div class="day unavailable"
                                                                            bis_skin_checked="1">31</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bg-white d-none px-3 right" id="rightContent"
                                                                bis_skin_checked="1">
                                                                <div class="fw-bold text-primary d-flex py-5"
                                                                    id="today-date" bis_skin_checked="1">
                                                                    <div id="event-day" bis_skin_checked="1"></div>
                                                                    <div id="event-date" bis_skin_checked="1">19 April
                                                                    </div>
                                                                </div>
                                                                <div class="text-center" style="width:200px"
                                                                    bis_skin_checked="1">
                                                                    <div class="events me-4"
                                                                        id="meeting_daily_timings"
                                                                        bis_skin_checked="1"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                                <p>Timezone: America/Los_Angeles</p>
                                            </div>
                                        </div>

                                        <script>
                                            function openAvailDrawar(button) {
                                                // check if account is blocked
                                                <
                                                !--[
                                                    if BLOCK
                                                ] > < ![endif]-- > < !--[
                                                    if ENDBLOCK
                                                ] > < ![endif]-- >
                                                // Find the nearest mentor card
                                                const card = button.closest('.mentor-card');

                                                // Get the elements containing the data within this card
                                                const avatarElement = card.querySelector('.mentor-avatar');
                                                const nameElement = card.querySelector('.mentor-name');
                                                const headingElement = card.querySelector('.mentor-heading');
                                                const mentorIdElement = card.querySelector('[data-id]');

                                                // Extract the data from these elements
                                                const imgUrl = avatarElement ? avatarElement.src : '';
                                                const name = nameElement ? nameElement.textContent : '';
                                                const heading = headingElement ? headingElement.textContent.trim() : '';
                                                const mentorId = mentorIdElement ? mentorIdElement.getAttribute('data-id') : '';
                                                window.Livewire.find('RTGdhMyV6N7RH3ohXVKp').setMentor(mentorId);

                                                // Now you can use this data as needed, for example, to show it in a modal
                                                $('#ma-avatar').attr('src', imgUrl);
                                                $('#ma-name').html(name);
                                                $('#ma-heading').html(heading);
                                                $('#mentor_availibility_drawer').attr('data-id', mentorId);

                                                // const drawer = KTDrawer.getInstance(document.querySelector('#mentor_availibility_drawer'));
                                                // if (drawer) {
                                                //     drawer.show();
                                                // }
                                                $('#mentor_availibility_drawer').modal('show');
                                            }

                                            document.addEventListener('DOMContentLoaded', function() {
                                                hjsCalendar([]);
                                                Livewire.on('updateCalendar', (event) => {
                                                    const calendarElement = document.getElementById("hjsCalendar");
                                                    if (!calendarElement) {
                                                        console.error("Element #hjsCalendar not found during Livewire update.");
                                                        return;
                                                    }

                                                    const {
                                                        availability
                                                    } = event[0];
                                                    hjsCalendar(availability);
                                                    // console.log('Calendar updated with availability:', availability);
                                                });
                                            });

                                            document.addEventListener('livewire:load', function() {
                                                $('#locationSelect').select2();

                                                // Emit value change event to Livewire

                                            });
                                        </script>

                                        <script>
                                            let selectedDateGlobal = ''; // Global variable to store the selected date

                                            function hjsCalendar(availableTimes) {
                                                const availability = availableTimes;

                                                document.getElementById("hjsCalendar").innerHTML =
                                                    '<div class=""><div class="justify-content-center d-md-flex"><div class="bg-white left"><div class="bg-white calendar mx-auto pb-3 px-2"><div class="d-flex align-items-center justify-content-between text-uppercase month py-4"><div class="fw-bold text-primary ms-3" id="date"></div><div class="d-flex align-items-center justify-content-center gap-3"><div class="d-flex align-items-center justify-content-center rounded-circle" id="prev"><i class="fa fa-angle-left"></i></div><div class="d-flex align-items-center justify-content-center rounded-circle" id="nxt"><i class="fa fa-angle-right"></i></div></div></div><div class="d-flex align-items-center justify-content-between text-uppercase fw-light h-100 mb-2 text-sm w-100 weekdays"><div class="fw-bold">Sun</div><div class="fw-bold">Mon</div><div class="fw-bold">Tue</div><div class="fw-bold">Wed</div><div class="fw-bold">Thu</div><div class="fw-bold">Fri</div><div class="fw-bold">Sat</div></div><div class="d-flex justify-content-between w-100 flex-wrap" id="days"></div></div></div><div class="bg-white d-none px-3 right" id="rightContent"><div class="fw-bold text-primary d-flex py-5" id="today-date"><div id="event-day"></div><div id="event-date">19 April</div></div><div class="text-center" style="width:200px"><div class="events me-4" id="meeting_daily_timings"></div></div></div></div></div>';

                                                const t = document.getElementById("date"),
                                                    n = document.getElementById("days"),
                                                    i = document.getElementById("prev"),
                                                    d = document.getElementById("nxt"),
                                                    l = document.getElementById("rightContent"),
                                                    y = document.getElementById("event-day"),
                                                    w = document.getElementById("event-date");

                                                let a = new Date(),
                                                    s = a.getMonth(),
                                                    c = a.getFullYear();

                                                const o = [
                                                    "January",
                                                    "February",
                                                    "March",
                                                    "April",
                                                    "May",
                                                    "June",
                                                    "July",
                                                    "August",
                                                    "September",
                                                    "October",
                                                    "November",
                                                    "December",
                                                ];

                                                function u() {
                                                    let e = new Date(c, s, 1),
                                                        i = new Date(c, s + 1, 0),
                                                        d = new Date(c, s, 0),
                                                        a = d.getDate(),
                                                        u = i.getDate(),
                                                        f = e.getDay(),
                                                        b = 7 - i.getDay() - 1;

                                                    t.innerHTML = `${o[s]} ${c}`;
                                                    let h = "";

                                                    for (let p = f; p > 0; p--)
                                                        h += `<div class='day prev-date'>${a - p + 1}</div>`;

                                                    for (let $ = 1; $ <= u; $++) {
                                                        const formattedDate = `${c}-${String(s + 1).padStart(2, "0")}-${String($).padStart(2, "0")}`;
                                                        const isAvailable = availability[formattedDate];

                                                        if (!isAvailable) {
                                                            h += `<div class='day unavailable'>${$}</div>`;
                                                        } else {
                                                            h += `<div class='day' data-date="${formattedDate}">${$}</div>`;
                                                        }
                                                    }

                                                    for (let x = 1; x <= b; x++) h += `<div class='day nxt-date'>${x}</div>`;
                                                    n.innerHTML = h;

                                                    addDayClickEventListeners();
                                                }

                                                function addDayClickEventListeners() {
                                                    document.querySelectorAll(".day").forEach((day) => {
                                                        day.addEventListener("click", () => {
                                                            if (day.classList.contains("unavailable")) return;

                                                            document.querySelectorAll(".day").forEach((d) => d.classList.remove("active"));
                                                            day.classList.add("active");

                                                            selectedDateGlobal = day.dataset.date; // Store the selected date globally
                                                            console.log(day.dataset);
                                                            const selectedDate1 = new Date(selectedDateGlobal + "T00:00:00Z")
                                                                .toLocaleDateString("en-US", {
                                                                    weekday: "long",
                                                                    month: "long",
                                                                    day: "numeric",
                                                                    timeZone: "UTC"
                                                                });

                                                            w.innerHTML = selectedDate1;
                                                            showTimeSlots(selectedDateGlobal);
                                                            l.classList.remove("d-none");
                                                        });
                                                    });
                                                }

                                                function showTimeSlots(selectedDate) {
                                                    const availableTimes = availability[selectedDate] || [];
                                                    const meetingTimingsDiv = document.getElementById("meeting_daily_timings");
                                                    let timeSlotsHtml = "";

                                                    for (let hour = 0; hour < 24; hour++) {
                                                        for (let minute of [0, 30]) {
                                                            const time = `${String(hour).padStart(2, "0")}:${String(minute).padStart(2, "0")}`;

                                                            if (!availableTimes.includes(time)) {
                                                                timeSlotsHtml += `<div class="button-full">
                            <button class="event-time meeting btnDisable" disabled>${time}</button>
                        </div>`;
                                                            } else {
                                                                timeSlotsHtml += `<div class="button-full" id="time_${hour}">
                            <button class="event-time meeting">${time}</button>
                            <button onclick="confirmTime('${selectedDateGlobal}', '${time}')" class="confirm-btn d-none">Confirm</button>
                        </div>`;
                                                            }
                                                        }
                                                    }

                                                    meetingTimingsDiv.innerHTML = timeSlotsHtml;

                                                    addConfirmLogic();
                                                }

                                                function addConfirmLogic() {
                                                    document.querySelectorAll(".button-full").forEach((slot) => {
                                                        const timeButton = slot.querySelector(".event-time.meeting");
                                                        const confirmButton = slot.querySelector(".confirm-btn");

                                                        timeButton.addEventListener("click", () => {
                                                            document.querySelectorAll(".confirm-btn").forEach((btn) => btn.classList.add(
                                                                "d-none"));
                                                            document.querySelectorAll(".event-time.meeting").forEach((btn) => btn.classList
                                                                .remove("activeEvent-time"));
                                                            confirmButton.classList.remove("d-none");
                                                            confirmButton.classList.add("activeConfirm-btn");
                                                            timeButton.classList.add("activeEvent-time");
                                                        });
                                                    });
                                                }

                                                u();

                                                i.addEventListener("click", () => {
                                                    --s < 0 && ((s = 11), c--);
                                                    u();
                                                });

                                                d.addEventListener("click", () => {
                                                    ++s > 11 && ((s = 0), c++);
                                                    u();
                                                });
                                            }

                                            function confirmTime(date, time) {
                                                // alert(`Confirmed time: ${time} on ${date}`);
                                                window.Livewire.find('RTGdhMyV6N7RH3ohXVKp').meeting_time = `${date} ${time}`;

                                                <
                                                !--[
                                                    if BLOCK
                                                ] > < ![endif]-- >
                                                var optionFormat = function(item) {
                                                    if (!item.id) {
                                                        return item.text;
                                                    }

                                                    var span = document.createElement('span');
                                                    var imgUrl = item.element.getAttribute('data-kt-select2-country');
                                                    var template = '';

                                                    template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
                                                    template += item.text;

                                                    span.innerHTML = template;

                                                    return $(span);
                                                }

                                                if (window.Livewire.find('RTGdhMyV6N7RH3ohXVKp').enable_zoom == null) {

                                                    var html = `Do you want to request a mentorship call with ` + $('#ma-name').text() +
                                                        ` on ${date} at ${time} <b>` + $('#tz_abb').text().trim() + '</b>' +
                                                        '<center class="py-5"><b>Select Location:</b></center>' +
                                                        '<select id="locationSelect" class="form-select" data-hide-search="true">' +
                                                        '<option value="phone" data-kt-select2-country="/img/phone-call.png">Phone Call</option>' +
                                                        '</select>';

                                                } else {

                                                    var html = `Do you want to request a mentorship call with ` + $('#ma-name').text() +
                                                        ` on ${date} at ${time} <b>` + $('#tz_abb').text().trim() + '</b>' +
                                                        '<center class="py-5"><b>Select Location:</b></center>' +
                                                        '<select id="locationSelect" class="form-select" data-hide-search="true">' +
                                                        '<option value="phone" data-kt-select2-country="/img/phone-call.png">Phone Call</option>' +
                                                        '<option value="zoom" data-kt-select2-country="/img/zoom-meeting.png">Zoom Meeting <i>(30 mins)</i></option>' +
                                                        '</select>';

                                                }

                                                Swal.fire({
                                                    title: "Confirm Meeting?",
                                                    html: html,
                                                    didOpen: function() {
                                                        // Initialize Select2 after the modal opens
                                                        $('#locationSelect').select2({
                                                            dropdownParent: $('.swal2-popup'),
                                                            templateSelection: optionFormat,
                                                            templateResult: optionFormat,
                                                            minimumResultsForSearch: Infinity
                                                        });
                                                        $('#locationSelect').on('change', function() {
                                                            window.Livewire.find('RTGdhMyV6N7RH3ohXVKp').location = $(this).val();
                                                        });
                                                    },
                                                    icon: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonColor: "#3085d6",
                                                    cancelButtonColor: "#d33",
                                                    confirmButtonText: "Yes, Confirm!",
                                                    cancelButtonText: "No, Reject"
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        window.Livewire.find('RTGdhMyV6N7RH3ohXVKp').createMeeting();
                                                    }
                                                });

                                                <
                                                !--[
                                                    if ENDBLOCK
                                                ] > < ![endif]-- >
                                            }
                                        </script>

                                        <!-- start: Reschedule Meeting Script -->
                                        <script>
                                            function rescheduleMeeting() {
                                                // Now you can use this data as needed, for example, to show it in a modal
                                                $('#ma-avatar').attr('src', 'https://milmentor.s3.amazonaws.com/avatars/5.jpg');
                                                $('#ma-name').html('Abdul Haq');
                                                $('#ma-heading').html('');
                                                $('#mentor_availibility_drawer').attr('data-id', '5');
                                                // const drawer = KTDrawer.getInstance(document.querySelector('#mentor_availibility_drawer'));
                                                // if (drawer) {
                                                //     drawer.show();
                                                // }
                                                window.Livewire.find('RTGdhMyV6N7RH3ohXVKp').setMentor('5');
                                                $('#mentor_availibility_drawer').modal('show');

                                            }
                                        </script>
                                        <!-- end: Reschedule Meeting Script -->

                                        <!-- start: Last Seen Mentor -->
                                        <script>
                                            function markMentorSeen(mentor_id) {
                                                window.Livewire.find('RTGdhMyV6N7RH3ohXVKp').markMentorSeen(mentor_id);
                                            }
                                        </script>
                                        <!-- end: Last Seen Mentor -->

                                        <!-- start: Calendly like UI styles -->
                                        <style>
                                            .calendar,
                                            .left {
                                                max-width: 400px;
                                                width: 100%;
                                            }

                                            #nxt,
                                            #prev {
                                                cursor: pointer;
                                                height: 38px;
                                                width: 38px;
                                            }

                                            #nxt:hover,
                                            #prev:hover {
                                                color: #0060e6;
                                                background: #eef5ff;
                                                height: 38px;
                                                width: 38px;
                                            }

                                            .chevron-container:hover {
                                                background: #f14b26;
                                                height: 32px;
                                                width: 32px;
                                            }

                                            .weekdays div {
                                                width: 14.28%;
                                                height: 100%;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                            }

                                            .calendar #days .day {
                                                width: 11%;
                                                height: 42px;
                                                margin: 4px;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                caret-color: transparent;
                                            }

                                            .calendar .day:not(.prev-date, .nxt-date, .tillCurrentDate, .futureDays, .unavailable) {
                                                background: #f0f6ff;
                                                color: #0060e6;
                                                border-radius: 50%;
                                                font-weight: 700;
                                                cursor: pointer;
                                            }

                                            .calendar .day:not(.prev-date,
                                                .nxt-date,
                                                .active,
                                                .tillCurrentDate,
                                                .futureDays,
                                                .unavailable):hover {
                                                background: #d9e6fc;
                                            }

                                            .calendar #days .nxt-date,
                                            .calendar #days .prev-date {
                                                visibility: hidden;
                                            }

                                            .calendar #days .active {
                                                background: #0060e6;
                                                color: #fff;
                                            }

                                            .calendar #days .today {
                                                position: relative;
                                            }

                                            .calendar #days .today::after {
                                                position: absolute;
                                                content: "";
                                                height: 6px;
                                                width: 6px;
                                                background: #0060e6;
                                                border-radius: 50%;
                                                bottom: 8px;
                                            }

                                            .calendar #days .active.today::after {
                                                background: #fff;
                                            }

                                            #rightContent {
                                                width: 240px;
                                                max-height: 480px;
                                                height: 100%;
                                                overflow-y: scroll;
                                                overflow-x: hidden;
                                            }

                                            .right {
                                                border-end-end-radius: 15px;
                                                border-top-right-radius: 15px;
                                                transition: 0.3s;
                                            }

                                            .events {
                                                height: 385px;
                                            }

                                            .left {
                                                /* height: 530px; */
                                                margin-bottom: 120px;
                                            }

                                            @media screen and (max-width: 768px) {
                                                .right {
                                                    width: 330px;
                                                    border-radius: 0;
                                                    margin: auto;
                                                }

                                                .left {
                                                    height: 450px;
                                                    margin: auto;
                                                }
                                            }

                                            ::-webkit-scrollbar {
                                                height: 4px;
                                                width: 8px;
                                                background: #fff;
                                                padding: 10px;
                                            }

                                            .confirm-btn,
                                            .event-time {
                                                height: 52px;
                                                font-weight: 700;
                                            }

                                            ::-webkit-scrollbar-track {
                                                background: #fff;
                                            }

                                            ::-webkit-scrollbar-thumb {
                                                background: #888;
                                                border-radius: 10px;
                                            }

                                            ::-webkit-scrollbar-thumb:hover {
                                                background: #555;
                                            }

                                            .event-time {
                                                padding: 12px;
                                                margin-bottom: 8px;
                                                border: 1px solid #0069ff80;
                                                width: 100%;
                                                border-radius: 4px;
                                                color: #0069ff;
                                                background: #fff;
                                                transition: width 0.3s, transform 0.3s;
                                            }

                                            .event-time:hover:not(.btnDisable, .activeEvent-time) {
                                                border-width: 2px;
                                                border-color: #0069ff;
                                            }

                                            .button-full .activeEvent-time {
                                                width: 48%;
                                                border-color: transparent;
                                                background-color: #00000099;
                                                color: #fff;
                                            }

                                            .button-full .activeConfirm-btn {
                                                transform: translateX(0);
                                            }

                                            .confirm-btn {
                                                width: 48%;
                                                margin-left: 3%;
                                                background-color: #0069ff;
                                                color: #fff;
                                                border-radius: 4px;
                                                box-shadow: 0 1px 6px 0 #0000001a;
                                                border: none;
                                                transform: translateX(20px);
                                            }

                                            .button-full {
                                                white-space: nowrap;
                                            }

                                            .btnDisable {
                                                border: 1px solid #f1f1f1;
                                                color: #837f7f;
                                                background: #f1f1f1;
                                            }

                                            @media screen and (max-width: 480px) {

                                                .calendar,
                                                .left {
                                                    width: 330px;
                                                }

                                                .left {
                                                    height: 360px;
                                                }

                                                .calendar #days .day {
                                                    width: 11.28%;
                                                    height: 35px;
                                                }

                                                .calendar #days .today::after {
                                                    bottom: 2px;
                                                }
                                            }

                                            .day.unavailable {
                                                /* background-color: #f8d7da; */
                                                /* color: #721c24; */
                                                /* pointer-events: none; */
                                                /* opacity: 0.6; */
                                            }

                                            .event-time.btnDisable {
                                                background-color: #e0e0e0;
                                                color: #a0a0a0;
                                                cursor: not-allowed;
                                                display: none;
                                            }
                                        </style>
                                        <!-- end: Calendly like UI styles -->

                                        <style>
                                            .swal2-input {
                                                height: 40px !important;
                                            }
                                        </style>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Modals-->

                    <!--begin::Javascript-->

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                    <script src="https://app.milmentor.com/js/plugins.bundle.js"></script>
                    <script src="https://app.milmentor.com/js/scripts.bundle.js"></script>
                    <!--end::Global Javascript Bundle-->

                    <!--begin::Custom Javascript(used for this page only)-->
                    <!-- Livewire Scripts -->
                    <script src="/livewire/livewire.js?id=0f65591d" data-csrf="2st9cPyItkw0zGDOBIwlUsZRAwwJjVAsFtdIExiK"
                        data-update-uri="/livewire/update" data-navigate-once="true"></script>
                    <!--end::Custom Javascript-->

                    <!--begin::Vendors Javascript(used for this page only)-->
                    <script>
                        document.querySelector('.ma-drawer').addEventListener('click', function(event) {
                            event.stopPropagation();
                        });
                    </script>
                    <script>
                        function addAdvisor(event) {
                            event.preventDefault();
                            toastr.options = {
                                "closeButton": false,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": false,
                                "positionClass": "toastr-top-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            };

                            toastr.success("Mentor added to advisors!");

                            const $addButton = $(event.target).closest('a');
                            const $removeButton = $addButton.siblings('.btn-remove-advisor');

                            $addButton.hide();
                            $removeButton.show();
                        }

                        function removeAdvisor(event) {
                            event.preventDefault();

                            const $removeButton = $(event.target).closest('a');
                            const $addButton = $removeButton.siblings('.btn-add-advisor');

                            $removeButton.hide();
                            $addButton.show();

                            toastr.success("Mentor Removed from advisors!");
                        }
                    </script>
                    <script>
                        const observer = new IntersectionObserver((entries) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    const mentorId = entry.target.dataset.mentorId;
                                    const menteeId = 1837;

                                    // Send seen event to backend
                                    // console.log('Seen: ' + mentorId)
                                    markMentorSeen(mentorId);

                                    observer.unobserve(entry.target); // Stop observing after seen
                                }
                            });
                        }, {
                            threshold: 1 // 50% visible
                        });

                        document.querySelectorAll('.feed-mentor-box').forEach(card => {
                            observer.observe(card);
                        });
                    </script>
                    <script></script>
                    <!--end::Vendors Javascript-->
                    <!--end::Javascript-->
                    <script>
                        (function() {
                            function c() {
                                var b = a.contentDocument || a.contentWindow.document;
                                if (b) {
                                    var d = b.createElement('script');
                                    d.innerHTML =
                                        "window.__CF$cv$params={r:'93f458f9ce690055',t:'MTc0NzE2MjI5MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                                    b.getElementsByTagName('head')[0].appendChild(d)
                                }
                            }
                            if (document.body) {
                                var a = document.createElement('iframe');
                                a.height = 1;
                                a.width = 1;
                                a.style.position = 'absolute';
                                a.style.top = 0;
                                a.style.left = 0;
                                a.style.border = 'none';
                                a.style.visibility = 'hidden';
                                document.body.appendChild(a);
                                if ('loading' !== document.readyState) c();
                                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                                else {
                                    var e = document.onreadystatechange || function() {};
                                    document.onreadystatechange = function(b) {
                                        e(b);
                                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                                    }
                                }
                            }
                        })();
                    </script><iframe height="1" width="1"
                        style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>


                    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg"
                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
                        <defs id="SvgjsDefs1002"></defs>
                        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
                        <path id="SvgjsPath1004" d="M0 0 "></path>
                    </svg>
            </body> <!--end::Header-->
                
                <script>
                    function openAvailDrawar(button) {
                        // check if account is blocked
                        <
                        !--[
                            if BLOCK
                        ] > < ![endif]-- > < !--[
                            if ENDBLOCK
                        ] > < ![endif]-- >
                        // Find the nearest mentor card
                        const card = button.closest('.mentor-card');

                        // Get the elements containing the data within this card
                        const avatarElement = card.querySelector('.mentor-avatar');
                        const nameElement = card.querySelector('.mentor-name');
                        const headingElement = card.querySelector('.mentor-heading');
                        const mentorIdElement = card.querySelector('[data-id]');

                        // Extract the data from these elements
                        const imgUrl = avatarElement ? avatarElement.src : '';
                        const name = nameElement ? nameElement.textContent : '';
                        const heading = headingElement ? headingElement.textContent.trim() : '';
                        const mentorId = mentorIdElement ? mentorIdElement.getAttribute('data-id') : '';
                        window.Livewire.find('qnac3splt91JBRbfad8S').setMentor(mentorId);

                        // Now you can use this data as needed, for example, to show it in a modal
                        $('#ma-avatar').attr('src', imgUrl);
                        $('#ma-name').html(name);
                        $('#ma-heading').html(heading);
                        $('#mentor_availibility_drawer').attr('data-id', mentorId);

                        // const drawer = KTDrawer.getInstance(document.querySelector('#mentor_availibility_drawer'));
                        // if (drawer) {
                        //     drawer.show();
                        // }
                        $('#mentor_availibility_drawer').modal('show');
                    }

                    document.addEventListener('DOMContentLoaded', function() {
                        hjsCalendar([]);
                        Livewire.on('updateCalendar', (event) => {
                            const calendarElement = document.getElementById("hjsCalendar");
                            if (!calendarElement) {
                                console.error("Element #hjsCalendar not found during Livewire update.");
                                return;
                            }

                            const {
                                availability
                            } = event[0];
                            hjsCalendar(availability);
                            // console.log('Calendar updated with availability:', availability);
                        });
                    });

                    document.addEventListener('livewire:load', function() {
                        $('#locationSelect').select2();

                        // Emit value change event to Livewire

                    });
                </script>

                <script>
                    let selectedDateGlobal = ''; // Global variable to store the selected date

                    function hjsCalendar(availableTimes) {
                        const availability = availableTimes;

                        document.getElementById("hjsCalendar").innerHTML =
                            '<div class=""><div class="justify-content-center d-md-flex"><div class="bg-white left"><div class="bg-white calendar mx-auto pb-3 px-2"><div class="d-flex align-items-center justify-content-between text-uppercase month py-4"><div class="fw-bold text-primary ms-3" id="date"></div><div class="d-flex align-items-center justify-content-center gap-3"><div class="d-flex align-items-center justify-content-center rounded-circle" id="prev"><i class="fa fa-angle-left"></i></div><div class="d-flex align-items-center justify-content-center rounded-circle" id="nxt"><i class="fa fa-angle-right"></i></div></div></div><div class="d-flex align-items-center justify-content-between text-uppercase fw-light h-100 mb-2 text-sm w-100 weekdays"><div class="fw-bold">Sun</div><div class="fw-bold">Mon</div><div class="fw-bold">Tue</div><div class="fw-bold">Wed</div><div class="fw-bold">Thu</div><div class="fw-bold">Fri</div><div class="fw-bold">Sat</div></div><div class="d-flex justify-content-between w-100 flex-wrap" id="days"></div></div></div><div class="bg-white d-none px-3 right" id="rightContent"><div class="fw-bold text-primary d-flex py-5" id="today-date"><div id="event-day"></div><div id="event-date">19 April</div></div><div class="text-center" style="width:200px"><div class="events me-4" id="meeting_daily_timings"></div></div></div></div></div>';

                        const t = document.getElementById("date"),
                            n = document.getElementById("days"),
                            i = document.getElementById("prev"),
                            d = document.getElementById("nxt"),
                            l = document.getElementById("rightContent"),
                            y = document.getElementById("event-day"),
                            w = document.getElementById("event-date");

                        let a = new Date(),
                            s = a.getMonth(),
                            c = a.getFullYear();

                        const o = [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                            "August",
                            "September",
                            "October",
                            "November",
                            "December",
                        ];

                        function u() {
                            let e = new Date(c, s, 1),
                                i = new Date(c, s + 1, 0),
                                d = new Date(c, s, 0),
                                a = d.getDate(),
                                u = i.getDate(),
                                f = e.getDay(),
                                b = 7 - i.getDay() - 1;

                            t.innerHTML = `${o[s]} ${c}`;
                            let h = "";

                            for (let p = f; p > 0; p--)
                                h += `<div class='day prev-date'>${a - p + 1}</div>`;

                            for (let $ = 1; $ <= u; $++) {
                                const formattedDate = `${c}-${String(s + 1).padStart(2, "0")}-${String($).padStart(2, "0")}`;
                                const isAvailable = availability[formattedDate];

                                if (!isAvailable) {
                                    h += `<div class='day unavailable'>${$}</div>`;
                                } else {
                                    h += `<div class='day' data-date="${formattedDate}">${$}</div>`;
                                }
                            }

                            for (let x = 1; x <= b; x++) h += `<div class='day nxt-date'>${x}</div>`;
                            n.innerHTML = h;

                            addDayClickEventListeners();
                        }

                        function addDayClickEventListeners() {
                            document.querySelectorAll(".day").forEach((day) => {
                                day.addEventListener("click", () => {
                                    if (day.classList.contains("unavailable")) return;

                                    document.querySelectorAll(".day").forEach((d) => d.classList.remove("active"));
                                    day.classList.add("active");

                                    selectedDateGlobal = day.dataset.date; // Store the selected date globally
                                    console.log(day.dataset);
                                    const selectedDate1 = new Date(selectedDateGlobal + "T00:00:00Z")
                                        .toLocaleDateString("en-US", {
                                            weekday: "long",
                                            month: "long",
                                            day: "numeric",
                                            timeZone: "UTC"
                                        });

                                    w.innerHTML = selectedDate1;
                                    showTimeSlots(selectedDateGlobal);
                                    l.classList.remove("d-none");
                                });
                            });
                        }

                        function showTimeSlots(selectedDate) {
                            const availableTimes = availability[selectedDate] || [];
                            const meetingTimingsDiv = document.getElementById("meeting_daily_timings");
                            let timeSlotsHtml = "";

                            for (let hour = 0; hour < 24; hour++) {
                                for (let minute of [0, 30]) {
                                    const time = `${String(hour).padStart(2, "0")}:${String(minute).padStart(2, "0")}`;

                                    if (!availableTimes.includes(time)) {
                                        timeSlotsHtml += `<div class="button-full">
                            <button class="event-time meeting btnDisable" disabled>${time}</button>
                        </div>`;
                                    } else {
                                        timeSlotsHtml += `<div class="button-full" id="time_${hour}">
                            <button class="event-time meeting">${time}</button>
                            <button onclick="confirmTime('${selectedDateGlobal}', '${time}')" class="confirm-btn d-none">Confirm</button>
                        </div>`;
                                    }
                                }
                            }

                            meetingTimingsDiv.innerHTML = timeSlotsHtml;

                            addConfirmLogic();
                        }

                        function addConfirmLogic() {
                            document.querySelectorAll(".button-full").forEach((slot) => {
                                const timeButton = slot.querySelector(".event-time.meeting");
                                const confirmButton = slot.querySelector(".confirm-btn");

                                timeButton.addEventListener("click", () => {
                                    document.querySelectorAll(".confirm-btn").forEach((btn) => btn.classList.add(
                                        "d-none"));
                                    document.querySelectorAll(".event-time.meeting").forEach((btn) => btn.classList
                                        .remove("activeEvent-time"));
                                    confirmButton.classList.remove("d-none");
                                    confirmButton.classList.add("activeConfirm-btn");
                                    timeButton.classList.add("activeEvent-time");
                                });
                            });
                        }

                        u();

                        i.addEventListener("click", () => {
                            --s < 0 && ((s = 11), c--);
                            u();
                        });

                        d.addEventListener("click", () => {
                            ++s > 11 && ((s = 0), c++);
                            u();
                        });
                    }

                    function confirmTime(date, time) {
                        // alert(`Confirmed time: ${time} on ${date}`);
                        window.Livewire.find('qnac3splt91JBRbfad8S').meeting_time = `${date} ${time}`;

                        <
                        !--[
                            if BLOCK
                        ] > < ![endif]-- >
                        var optionFormat = function(item) {
                            if (!item.id) {
                                return item.text;
                            }

                            var span = document.createElement('span');
                            var imgUrl = item.element.getAttribute('data-kt-select2-country');
                            var template = '';

                            template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
                            template += item.text;

                            span.innerHTML = template;

                            return $(span);
                        }

                        if (window.Livewire.find('qnac3splt91JBRbfad8S').enable_zoom == null) {

                            var html = `Do you want to request a mentorship call with ` + $('#ma-name').text() +
                                ` on ${date} at ${time} <b>` + $('#tz_abb').text().trim() + '</b>' +
                                '<center class="py-5"><b>Select Location:</b></center>' +
                                '<select id="locationSelect" class="form-select" data-hide-search="true">' +
                                '<option value="phone" data-kt-select2-country="/img/phone-call.png">Phone Call</option>' +
                                '</select>';

                        } else {

                            var html = `Do you want to request a mentorship call with ` + $('#ma-name').text() +
                                ` on ${date} at ${time} <b>` + $('#tz_abb').text().trim() + '</b>' +
                                '<center class="py-5"><b>Select Location:</b></center>' +
                                '<select id="locationSelect" class="form-select" data-hide-search="true">' +
                                '<option value="phone" data-kt-select2-country="/img/phone-call.png">Phone Call</option>' +
                                '<option value="zoom" data-kt-select2-country="/img/zoom-meeting.png">Zoom Meeting <i>(30 mins)</i></option>' +
                                '</select>';

                        }

                        Swal.fire({
                            title: "Confirm Meeting?",
                            html: html,
                            didOpen: function() {
                                // Initialize Select2 after the modal opens
                                $('#locationSelect').select2({
                                    dropdownParent: $('.swal2-popup'),
                                    templateSelection: optionFormat,
                                    templateResult: optionFormat,
                                    minimumResultsForSearch: Infinity
                                });
                                $('#locationSelect').on('change', function() {
                                    window.Livewire.find('qnac3splt91JBRbfad8S').location = $(this).val();
                                });
                            },
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, Confirm!",
                            cancelButtonText: "No, Reject"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.Livewire.find('qnac3splt91JBRbfad8S').createMeeting();
                            }
                        });

                        <
                        !--[
                            if ENDBLOCK
                        ] > < ![endif]-- >
                    }
                </script>

                <!-- start: Reschedule Meeting Script -->
                <script>
                    function rescheduleMeeting() {
                        // Now you can use this data as needed, for example, to show it in a modal
                        $('#ma-avatar').attr('src', 'https://milmentor.s3.amazonaws.com/avatars/5.jpg');
                        $('#ma-name').html('Abdul Haq');
                        $('#ma-heading').html('');
                        $('#mentor_availibility_drawer').attr('data-id', '5');
                        // const drawer = KTDrawer.getInstance(document.querySelector('#mentor_availibility_drawer'));
                        // if (drawer) {
                        //     drawer.show();
                        // }
                        window.Livewire.find('qnac3splt91JBRbfad8S').setMentor('5');
                        $('#mentor_availibility_drawer').modal('show');

                    }
                </script>
                <!-- end: Reschedule Meeting Script -->

                <!-- start: Last Seen Mentor -->
                <script>
                    function markMentorSeen(mentor_id) {
                        window.Livewire.find('qnac3splt91JBRbfad8S').markMentorSeen(mentor_id);
                    }
                </script>
                <!-- end: Last Seen Mentor -->

                <!-- start: Calendly like UI styles -->
                <style>
                    .calendar,
                    .left {
                        max-width: 400px;
                        width: 100%;
                    }

                    #nxt,
                    #prev {
                        cursor: pointer;
                        height: 38px;
                        width: 38px;
                    }

                    #nxt:hover,
                    #prev:hover {
                        color: #0060e6;
                        background: #eef5ff;
                        height: 38px;
                        width: 38px;
                    }

                    .chevron-container:hover {
                        background: #f14b26;
                        height: 32px;
                        width: 32px;
                    }

                    .weekdays div {
                        width: 14.28%;
                        height: 100%;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .calendar #days .day {
                        width: 11%;
                        height: 42px;
                        margin: 4px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        caret-color: transparent;
                    }

                    .calendar .day:not(.prev-date, .nxt-date, .tillCurrentDate, .futureDays, .unavailable) {
                        background: #f0f6ff;
                        color: #0060e6;
                        border-radius: 50%;
                        font-weight: 700;
                        cursor: pointer;
                    }

                    .calendar .day:not(.prev-date,
                        .nxt-date,
                        .active,
                        .tillCurrentDate,
                        .futureDays,
                        .unavailable):hover {
                        background: #d9e6fc;
                    }

                    .calendar #days .nxt-date,
                    .calendar #days .prev-date {
                        visibility: hidden;
                    }

                    .calendar #days .active {
                        background: #0060e6;
                        color: #fff;
                    }

                    .calendar #days .today {
                        position: relative;
                    }

                    .calendar #days .today::after {
                        position: absolute;
                        content: "";
                        height: 6px;
                        width: 6px;
                        background: #0060e6;
                        border-radius: 50%;
                        bottom: 8px;
                    }

                    .calendar #days .active.today::after {
                        background: #fff;
                    }

                    #rightContent {
                        width: 240px;
                        max-height: 480px;
                        height: 100%;
                        overflow-y: scroll;
                        overflow-x: hidden;
                    }

                    .right {
                        border-end-end-radius: 15px;
                        border-top-right-radius: 15px;
                        transition: 0.3s;
                    }

                    .events {
                        height: 385px;
                    }

                    .left {
                        /* height: 530px; */
                        margin-bottom: 120px;
                    }

                    @media screen and (max-width: 768px) {
                        .right {
                            width: 330px;
                            border-radius: 0;
                            margin: auto;
                        }

                        .left {
                            height: 450px;
                            margin: auto;
                        }
                    }

                    ::-webkit-scrollbar {
                        height: 4px;
                        width: 8px;
                        background: #fff;
                        padding: 10px;
                    }

                    .confirm-btn,
                    .event-time {
                        height: 52px;
                        font-weight: 700;
                    }

                    ::-webkit-scrollbar-track {
                        background: #fff;
                    }

                    ::-webkit-scrollbar-thumb {
                        background: #888;
                        border-radius: 10px;
                    }

                    ::-webkit-scrollbar-thumb:hover {
                        background: #555;
                    }

                    .event-time {
                        padding: 12px;
                        margin-bottom: 8px;
                        border: 1px solid #0069ff80;
                        width: 100%;
                        border-radius: 4px;
                        color: #0069ff;
                        background: #fff;
                        transition: width 0.3s, transform 0.3s;
                    }

                    .event-time:hover:not(.btnDisable, .activeEvent-time) {
                        border-width: 2px;
                        border-color: #0069ff;
                    }

                    .button-full .activeEvent-time {
                        width: 48%;
                        border-color: transparent;
                        background-color: #00000099;
                        color: #fff;
                    }

                    .button-full .activeConfirm-btn {
                        transform: translateX(0);
                    }

                    .confirm-btn {
                        width: 48%;
                        margin-left: 3%;
                        background-color: #0069ff;
                        color: #fff;
                        border-radius: 4px;
                        box-shadow: 0 1px 6px 0 #0000001a;
                        border: none;
                        transform: translateX(20px);
                    }

                    .button-full {
                        white-space: nowrap;
                    }

                    .btnDisable {
                        border: 1px solid #f1f1f1;
                        color: #837f7f;
                        background: #f1f1f1;
                    }

                    @media screen and (max-width: 480px) {

                        .calendar,
                        .left {
                            width: 330px;
                        }

                        .left {
                            height: 360px;
                        }

                        .calendar #days .day {
                            width: 11.28%;
                            height: 35px;
                        }

                        .calendar #days .today::after {
                            bottom: 2px;
                        }
                    }

                    .day.unavailable {
                        /* background-color: #f8d7da; */
                        /* color: #721c24; */
                        /* pointer-events: none; */
                        /* opacity: 0.6; */
                    }

                    .event-time.btnDisable {
                        background-color: #e0e0e0;
                        color: #a0a0a0;
                        cursor: not-allowed;
                        display: none;
                    }
                </style>
                <!-- end: Calendly like UI styles -->

                <style>
                    .swal2-input {
                        height: 40px !important;
                    }
                </style>
                </section>
            </div>
        </div>
    </div>
    </div>
    <!--end::Modals-->

    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="https://app.milmentor.com/js/plugins.bundle.js"></script>
    <script src="https://app.milmentor.com/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Custom Javascript(used for this page only)-->
    <!-- Livewire Scripts -->
    <script src="/livewire/livewire.js?id=0f65591d" data-csrf="HlpanhY4AVFIWOxbrYQ8kfI4y6SJEmYnlFnNmfKE"
        data-update-uri="/livewire/update" data-navigate-once="true"></script>
    <!--end::Custom Javascript-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script>
        document.querySelector('.ma-drawer').addEventListener('click', function(event) {
            event.stopPropagation();
        });
    </script>
    <script>
        function addAdvisor(event) {
            event.preventDefault();
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toastr-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.success("Mentor added to advisors!");

            const $addButton = $(event.target).closest('a');
            const $removeButton = $addButton.siblings('.btn-remove-advisor');

            $addButton.hide();
            $removeButton.show();
        }

        function removeAdvisor(event) {
            event.preventDefault();

            const $removeButton = $(event.target).closest('a');
            const $addButton = $removeButton.siblings('.btn-add-advisor');

            $removeButton.hide();
            $addButton.show();

            toastr.success("Mentor Removed from advisors!");
        }
    </script>
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const mentorId = entry.target.dataset.mentorId;
                    const menteeId = 1831;

                    // Send seen event to backend
                    // console.log('Seen: ' + mentorId)
                    markMentorSeen(mentorId);

                    observer.unobserve(entry.target); // Stop observing after seen
                }
            });
        }, {
            threshold: 1 // 50% visible
        });

        document.querySelectorAll('.feed-mentor-box').forEach(card => {
            observer.observe(card);
        });
    </script>
    <script></script>
    <!--end::Vendors Javascript-->
    <!--end::Javascript-->
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'93d429800f33f7b3',t:'MTc0NjgyNDgwMi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script><iframe height="1" width="1"
        style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>

</html>
