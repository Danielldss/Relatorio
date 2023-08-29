<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Basic Inputs - Forms | Frest - Bootstrap Admin Template</title>


    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">


    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />


    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
</head>

<body>


<!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Layout wrapper -->
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">






        <!-- Navbar -->








        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="container-xxl">




                <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                    <a href="index.html" class="app-brand-link gap-2">
          <span class="app-brand-logo demo">
<svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <title>icon</title>
  <defs>
    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
      <stop stop-color="#5A8DEE" offset="0%"></stop>
      <stop stop-color="#699AF9" offset="100%"></stop>
    </linearGradient>
    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
      <stop stop-color="#FDAC41" offset="0%"></stop>
      <stop stop-color="#E38100" offset="100%"></stop>
    </linearGradient>
  </defs>
  <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
      <g id="Login" transform="translate(519.000000, 244.000000)">
        <g id="Logo" transform="translate(148.000000, 42.000000)">
          <g id="icon" transform="translate(0.000000, 4.000000)">
            <path d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z" id="Combined-Shape" fill="#4880EA"></path>
            <path d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
            <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
          </g>
        </g>
      </g>
    </g>
  </g>
</svg>

</span>
                        <span class="app-brand-text demo menu-text fw-bold">Frest</span>
                    </a>



                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                        <i class="bx bx-x bx-sm align-middle"></i>
                    </a>

                </div>





                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none  ">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>


                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">



                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- Language -->
                        <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <i class='fi fi-us fis rounded-circle fs-3 me-1'></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                                        <i class="fi fi-us fis rounded-circle fs-4 me-1"></i>
                                        <span class="align-middle">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                                        <i class="fi fi-fr fis rounded-circle fs-4 me-1"></i>
                                        <span class="align-middle">French</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                                        <i class="fi fi-de fis rounded-circle fs-4 me-1"></i>
                                        <span class="align-middle">German</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                                        <i class="fi fi-pt fis rounded-circle fs-4 me-1"></i>
                                        <span class="align-middle">Portuguese</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Language -->



                        <!-- Search -->
                        <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
                            <a class="nav-item nav-link search-toggler" href="javascript:void(0);">
                                <i class="bx bx-search bx-sm"></i>
                            </a>
                        </li>
                        <!-- /Search -->


                        <!-- Style Switcher -->
                        <li class="nav-item me-2 me-xl-0">
                            <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                <i class='bx bx-sm'></i>
                            </a>
                        </li>
                        <!--/ Style Switcher -->

                        <!-- Quick links  -->
                        <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class='bx bx-grid-alt bx-sm'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <div class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                        <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                                    </div>
                                </div>
                                <div class="dropdown-shortcuts-list scrollable-container">
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-calendar fs-4"></i>
                    </span>
                                            <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                            <small class="text-muted mb-0">Appointments</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-food-menu fs-4"></i>
                    </span>
                                            <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                            <small class="text-muted mb-0">Manage Accounts</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-user fs-4"></i>
                    </span>
                                            <a href="app-user-list.html" class="stretched-link">User App</a>
                                            <small class="text-muted mb-0">Manage Users</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-check-shield fs-4"></i>
                    </span>
                                            <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                                            <small class="text-muted mb-0">Permission</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                    </span>
                                            <a href="index.html" class="stretched-link">Dashboard</a>
                                            <small class="text-muted mb-0">User Profile</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-cog fs-4"></i>
                    </span>
                                            <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                                            <small class="text-muted mb-0">Account Settings</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-help-circle fs-4"></i>
                    </span>
                                            <a href="pages-help-center-landing.html" class="stretched-link">Help Center</a>
                                            <small class="text-muted mb-0">FAQs & Articles</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-window-open fs-4"></i>
                    </span>
                                            <a href="modal-examples.html" class="stretched-link">Modals</a>
                                            <small class="text-muted mb-0">Useful Popups</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Quick links -->

                        <!-- Notification -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bx bx-bell bx-sm"></i>
                                <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end py-0">
                                <li class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h5 class="text-body mb-0 me-auto">Notification</h5>
                                        <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                                    </div>
                                </li>
                                <li class="dropdown-notifications-list scrollable-container">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                    <p class="mb-0">Won the monthly best seller gold badge</p>
                                                    <small class="text-muted">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Charles Franklin</h6>
                                                    <p class="mb-0">Accepted your connection</p>
                                                    <small class="text-muted">12hr ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">New Message ✉️</h6>
                                                    <p class="mb-0">You have new message from Natalie</p>
                                                    <small class="text-muted">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                                                    <p class="mb-0">ACME Inc. made new order $1,154</p>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Application has been approved 🚀 </h6>
                                                    <p class="mb-0">Your ABC project application has been approved.</p>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Monthly report is generated</h6>
                                                    <p class="mb-0">July monthly financial report is generated </p>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Send connection request</h6>
                                                    <p class="mb-0">Peter sent you connection request</p>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">New message from Jane</h6>
                                                    <p class="mb-0">Your have new message from Jane</p>
                                                    <small class="text-muted">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">CPU is running high</h6>
                                                    <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                                                    <small class="text-muted">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-menu-footer border-top">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                                        View all notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Notification -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block lh-1">John Doe</span>
                                                <small>Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-profile-user.html">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <i class="bx bx-cog me-2"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-billing.html">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                    <span class="flex-grow-1 align-middle">Billing</span>
                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                  </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-help-center-landing.html">
                                        <i class="bx bx-support me-2"></i>
                                        <span class="align-middle">Help</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-faq.html">
                                        <i class="bx bx-help-circle me-2"></i>
                                        <span class="align-middle">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-pricing.html">
                                        <i class="bx bx-dollar me-2"></i>
                                        <span class="align-middle">Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->


                    </ul>
                </div>


                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
                    <input type="text" class="form-control search-input  border-0" placeholder="Search..." aria-label="Search...">
                    <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                </div>


            </div>
        </nav>



        <!-- / Navbar -->



        <!-- Layout container -->
        <div class="layout-page">

            <!-- Content wrapper -->
            <div class="content-wrapper">







                <!-- Menu -->
                <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal  menu bg-menu-theme flex-grow-0">


                    <div class="container-xxl d-flex h-100">
                        <ul class="menu-inner">

                            <!-- Dashboards -->
                            <li class="menu-item ">
                                <a href="{{ route('admin.home') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                    <div>Home</div>
                                </a>

                            </li>
                            <!-- Serviços -->
                            <li class="menu-item">
                                <a href="{{route('admin.new-service')}}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-news"></i>
                                    <div>Serviços</div>
                                </a>
                            </li>

                            <!-- Relatorios -->
                            <li class="menu-item">
                                <a href="{{route('admin.list-service')}}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-bar-chart-square"></i>
                                    <div>Relatorios</div>
                                </a>
                            </li>


                            <!-- Orçamentos -->
                            <li class="menu-item">
                                <a href="{{route('admin.list-orcamentos')}}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-bar-chart-alt-2"></i>
                                    <div>Orçamentos</div>
                                </a>
                            </li>

                            <!-- Financeiro -->
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-money-withdraw"></i>
                                    <div>Financeiro</div>
                                </a>
                            </li>

                        {{--                                <ul class="menu-sub">--}}
                        {{--                                    <li class="menu-item">--}}
                        {{--                                        <a href="" class="menu-link ">--}}
                        {{--                                            <i class="menu-icon "></i>--}}
                        {{--                                            <div data-i18n="Charts"></div>--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            </li>--}}

                        <!-- Apps -->
                            <li class="menu-item">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <i class='menu-icon tf-icons bx bx-customize'></i>
                                    <div data-i18n="Apps">Apps</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-email.html" class="menu-link">
                                            <i class='menu-icon tf-icons bx bx-envelope'></i>
                                            <div data-i18n="Email">Email</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-chat.html" class="menu-link">
                                            <i class='menu-icon tf-icons bx bx-chat'></i>
                                            <div data-i18n="Chat">Chat</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-calendar.html" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-calendar"></i>

                                            <div data-i18n="Calendar">Calendar</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-kanban.html" class="menu-link">
                                            <i class='menu-icon tf-icons bx bx-grid'></i>
                                            <div data-i18n="Kanban">Kanban</div>
                                        </a>
                                    </li>
                                    <li class="menu-item
">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class='menu-icon tf-icons bx bx-food-menu'></i>
                                            <div data-i18n="Invoice">Invoice</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="app-invoice-list.html" class="menu-link">
                                                    <div data-i18n="List">List</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-invoice-preview.html" class="menu-link">
                                                    <div data-i18n="Preview">Preview</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-invoice-edit.html" class="menu-link">
                                                    <div data-i18n="Edit">Edit</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-invoice-add.html" class="menu-link">
                                                    <div data-i18n="Add">Add</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item
">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-user"></i>
                                            <div data-i18n="Users">Users</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="app-user-list.html" class="menu-link">
                                                    <div data-i18n="List">List</div>
                                                </a>
                                            </li>
                                            <li class="menu-item
">
                                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                    <div data-i18n="View">View</div>
                                                </a>
                                                <ul class="menu-sub">
                                                    <li class="menu-item">
                                                        <a href="app-user-view-account.html" class="menu-link">
                                                            <div data-i18n="Account">Account</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="app-user-view-security.html" class="menu-link">
                                                            <div data-i18n="Security">Security</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="app-user-view-billing.html" class="menu-link">
                                                            <div data-i18n="Billing & Plans">Billing & Plans</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="app-user-view-notifications.html" class="menu-link">
                                                            <div data-i18n="Notifications">Notifications</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="app-user-view-connections.html" class="menu-link">
                                                            <div data-i18n="Connections">Connections</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item
">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class='menu-icon tf-icons bx bx-check-shield'></i>
                                            <div data-i18n="Roles & Permissions">Roles & Permission</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="app-access-roles.html" class="menu-link">
                                                    <div data-i18n="Roles">Roles</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-access-permission.html" class="menu-link">
                                                    <div data-i18n="Permission">Permission</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <!-- Pages -->
                            <li class="menu-item">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-collection"></i>
                                    <div data-i18n="Pages">Pages</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item
">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-user-circle"></i>
                                            <div data-i18n="User Profile">User Profile</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="pages-profile-user.html" class="menu-link">
                                                    <div data-i18n="Profile">Profile</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-profile-teams.html" class="menu-link">
                                                    <div data-i18n="Teams">Teams</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-profile-projects.html" class="menu-link">
                                                    <div data-i18n="Projects">Projects</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-profile-connections.html" class="menu-link">
                                                    <div data-i18n="Connections">Connections</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item
">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-cog"></i>
                                            <div data-i18n="Account Settings">Account Settings</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="pages-account-settings-account.html" class="menu-link">
                                                    <div data-i18n="Account">Account</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-account-settings-security.html" class="menu-link">
                                                    <div data-i18n="Security">Security</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-account-settings-billing.html" class="menu-link">
                                                    <div data-i18n="Billing & Plans">Billing & Plans</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-account-settings-notifications.html" class="menu-link">
                                                    <div data-i18n="Notifications">Notifications</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-account-settings-connections.html" class="menu-link">
                                                    <div data-i18n="Connections">Connections</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-faq.html" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-help-circle"></i>
                                            <div data-i18n="FAQ">FAQ</div>
                                        </a>
                                    </li>
                                    <li class="menu-item
">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bxs-buoy"></i>
                                            <div data-i18n="Help Center">Help Center</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="pages-help-center-landing.html" class="menu-link">
                                                    <div data-i18n="Landing">Landing</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-help-center-categories.html" class="menu-link">
                                                    <div data-i18n="Categories">Categories</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-help-center-article.html" class="menu-link">
                                                    <div data-i18n="Article">Article</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-pricing.html" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-diamond"></i>
                                            <div data-i18n="Pricing">Pricing</div>
                                        </a>
                                    </li>
                                    <li class="menu-item
">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-shape-circle"></i>
                                            <div data-i18n="Misc">Misc</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="pages-misc-error.html" class="menu-link" target="_blank">
                                                    <div data-i18n="Error">Error</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                                                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                                                    <div data-i18n="Coming Soon">Coming Soon</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                                                    <div data-i18n="Not Authorized">Not Authorized</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item
">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                                            <div data-i18n="Authentications">Authentications</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item
">
                                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                    <div data-i18n="Login">Login</div>
                                                </a>
                                                <ul class="menu-sub">
                                                    <li class="menu-item">
                                                        <a href="auth-login-basic.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Basic">Basic</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="auth-login-cover.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Cover">Cover</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item
">
                                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                    <div data-i18n="Register">Register</div>
                                                </a>
                                                <ul class="menu-sub">
                                                    <li class="menu-item">
                                                        <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Basic">Basic</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="auth-register-cover.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Cover">Cover</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Multi-steps">Multi-steps</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                    <div data-i18n="Verify Email">Verify Email</div>
                                                </a>
                                                <ul class="menu-sub">
                                                    <li class="menu-item">
                                                        <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Basic">Basic</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Cover">Cover</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                    <div data-i18n="Reset Password">Reset Password</div>
                                                </a>
                                                <ul class="menu-sub">
                                                    <li class="menu-item">
                                                        <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Basic">Basic</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Cover">Cover</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                    <div data-i18n="Forgot Password">Forgot Password</div>
                                                </a>
                                                <ul class="menu-sub">
                                                    <li class="menu-item">
                                                        <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Basic">Basic</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Cover">Cover</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                    <div data-i18n="Two Steps">Two Steps</div>
                                                </a>
                                                <ul class="menu-sub">
                                                    <li class="menu-item">
                                                        <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Basic">Basic</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                                                            <div data-i18n="Cover">Cover</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item
">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                                            <div data-i18n="Wizard Examples">Wizard Examples</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="wizard-ex-checkout.html" class="menu-link">
                                                    <div data-i18n="Checkout">Checkout</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="wizard-ex-property-listing.html" class="menu-link">
                                                    <div data-i18n="Property Listing">Property Listing</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="wizard-ex-create-deal.html" class="menu-link">
                                                    <div data-i18n="Create Deal">Create Deal</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="modal-examples.html" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-window-open"></i>
                                            <div data-i18n="Modal Examples">Modal Examples</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Components -->
                            <li class="menu-item">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-code-block"></i>
                                    <div data-i18n="Components">Components</div>
                                </a>
                                <ul class="menu-sub">
                                    <!-- Cards -->
                                    <li class="menu-item">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-collection"></i>
                                            <div data-i18n="Cards">Cards</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="cards-basic.html" class="menu-link">
                                                    <div data-i18n="Basic">Basic</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="cards-advance.html" class="menu-link">
                                                    <div data-i18n="Advance">Advance</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="cards-statistics.html" class="menu-link">
                                                    <div data-i18n="Statistics">Statistics</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="cards-analytics.html" class="menu-link">
                                                    <div data-i18n="Analytics">Analytics</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="cards-actions.html" class="menu-link">
                                                    <div data-i18n="Actions">Actions</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- User interface -->
                                    <li class="menu-item
">
                                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-box"></i>
                                            <div data-i18n="User interface">User interface</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="ui-accordion.html" class="menu-link">
                                                    <div data-i18n="Accordion">Accordion</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-alerts.html" class="menu-link">
                                                    <div data-i18n="Alerts">Alerts</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-badges.html" class="menu-link">
                                                    <div data-i18n="Badges">Badges</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-buttons.html" class="menu-link">
                                                    <div data-i18n="Buttons">Buttons</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-carousel.html" class="menu-link">
                                                    <div data-i18n="Carousel">Carousel</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-collapse.html" class="menu-link">
                                                    <div data-i18n="Collapse">Collapse</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-dropdowns.html" class="menu-link">
                                                    <div data-i18n="Dropdowns">Dropdowns</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-footer.html" class="menu-link">
                                                    <div data-i18n="Footer">Footer</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-list-groups.html" class="menu-link">
                                                    <div data-i18n="List groups">List groups</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-modals.html" class="menu-link">
                                                    <div data-i18n="Modals">Modals</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-navbar.html" class="menu-link">
                                                    <div data-i18n="Navbar">Navbar</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-offcanvas.html" class="menu-link">
                                                    <div data-i18n="Offcanvas">Offcanvas</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                                                    <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-progress.html" class="menu-link">
                                                    <div data-i18n="Progress">Progress</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-spinners.html" class="menu-link">
                                                    <div data-i18n="Spinners">Spinners</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-tabs-pills.html" class="menu-link">
                                                    <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-toasts.html" class="menu-link">
                                                    <div data-i18n="Toasts">Toasts</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-tooltips-popovers.html" class="menu-link">
                                                    <div data-i18n="Tooltips & popovers">Tooltips &amp; popovers</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ui-typography.html" class="menu-link">
                                                    <div data-i18n="Typography">Typography</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Extended components -->
                                    <li class="menu-item
">
                                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-copy"></i>
                                            <div data-i18n="Extended UI">Extended UI</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="extended-ui-avatar.html" class="menu-link">
                                                    <div data-i18n="Avatar">Avatar</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="extended-ui-blockui.html" class="menu-link">
                                                    <div data-i18n="BlockUI">BlockUI</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="extended-ui-drag-and-drop.html" class="menu-link">
                                                    <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="extended-ui-media-player.html" class="menu-link">
                                                    <div data-i18n="Media Player">Media Player</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                                                    <div data-i18n="Perfect scrollbar">Perfect scrollbar</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="extended-ui-star-ratings.html" class="menu-link">
                                                    <div data-i18n="Star Ratings">Star Ratings</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="extended-ui-sweetalert2.html" class="menu-link">
                                                    <div data-i18n="SweetAlert2">SweetAlert2</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="extended-ui-text-divider.html" class="menu-link">
                                                    <div data-i18n="Text Divider">Text Divider</div>
                                                </a>
                                            </li>
                                            <li class="menu-item
">
                                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                    <div data-i18n="Timeline">Timeline</div>
                                                </a>
                                                <ul class="menu-sub">
                                                    <li class="menu-item">
                                                        <a href="extended-ui-timeline-basic.html" class="menu-link">
                                                            <div data-i18n="Basic">Basic</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                                                            <div data-i18n="Fullscreen">Fullscreen</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="extended-ui-tour.html" class="menu-link">
                                                    <div data-i18n="Tour">Tour</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="extended-ui-treeview.html" class="menu-link">
                                                    <div data-i18n="Treeview">Treeview</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="extended-ui-misc.html" class="menu-link">
                                                    <div data-i18n="Miscellaneous">Miscellaneous</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Icons -->
                                    <li class="menu-item
">
                                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-crown"></i>
                                            <div data-i18n="Icons">Icons</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="icons-boxicons.html" class="menu-link">
                                                    <div data-i18n="Boxicons">Boxicons</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="icons-font-awesome.html" class="menu-link">
                                                    <div data-i18n="Fontawesome">Fontawesome</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <!-- Misc -->
                            <li class="menu-item">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-shape-circle"></i>
                                    <div data-i18n="Misc">Misc</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="https://pixinvent.ticksy.com/" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-support"></i>
                                            <div data-i18n="Support">Support</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="https://demos.pixinvent.com/frest-html-admin-template/documentation/" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-file"></i>
                                            <div data-i18n="Documentation">Documentation</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>


                    </div>
                </aside>

                <!-- / Menu -->

                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">

                    <h4 class="py-3 breadcrumb-wrapper mb-4">
                        <span class="text-muted fw-light">Formulario /</span> Orçamento
                    </h4>

                        <!-- Form controls -->
                        <div class="center-content">
                            <div class="card mb-4">
                                <h5 class="card-header">Novo Orçamento</h5>
                                <form action="{{route('admin.newProduct-orcamentos')}}" method="POST">
                                    @csrf

                                    <div style="margin-top: -40px" class="card-body">

                                        <div id="produto1" class="row produto">


                                            <div class="col-1">
                                                <input type="hidden" name="orcamento_id" value="{{$orcamento->id}}" >
                                                <label class="form-label" for="qtd1">Qtd.</label><br>
                                                <input require class="form-control" type="number" name="amout_product" id="qtd1"><br>
                                            </div>
                                            <div class="col-5">
                                                <label class="form-label" for="descricao1">DESCRIÇÃO DO PRODUTO</label><br>
                                                <input require class="form-control" type="text" name="description_product" id="descricao1" placeholder="Produto"><br>
                                            </div>

                                            <div class="col-6">
                                                <label for="exampleFormControlInput1" class="form-label">Descrição do Serviço</label>
                                                <input type="text" class="form-control"  name="description_service" placeholder="Nome" />
                                            </div>

                                            <div class="col-3">
                                                <label class="form-label" for="valorUni1">VALOR UNI. </label><br>
                                                <input require class="form-control" type="text" name="single_value" id="valorUni1" placeholder="Produto"><br>
                                            </div>
                                            <div class="col-3">
                                                <label class="form-label" for="valorTotal1">VALOR TOTAL </label><br>
                                                <input require class="form-control" type="text" name="total_value" id="valorTotal1" placeholder="100"><br>
                                            </div>
                                        <div id="produtosExtras"></div>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-secondary add-new btn-primary" type="button">Adicionar Produto</button>
                                            <button class="btn btn-danger remove-last-product" type="button">Remover Último Produto</button>
                                            <input class="btn btn-secondary" type="submit" value="Cadastrar">
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">

                </footer>
                <!-- / Footer -->


                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
    </div>

</div>



<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>


<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

<!--/ Layout wrapper -->



<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/libs/popper/popper.js"></script>
<script src="../../assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../../assets/vendor/libs/hammer/hammer.js"></script>


<script src="../../assets/vendor/libs/i18n/i18n.js"></script>
<script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="../../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->



<!-- Main JS -->
<script src="../../assets/js/main.js"></script>

<!-- Page JS -->

<script src="../../assets/js/form-basic-inputs.js"></script>

<script>
    $(document).ready(function() {
        var contador = 2; // Contador para gerar IDs únicos para cada campo de produto

        $(".add-new").click(function() {
            var novoProduto = `
               <div id="produto${contador}" class="row produto">
                    <div class="col-1">
                        <label class="form-label" for="qtd${contador}">Qtd.</label><br>
                        <input require class="form-control" type="number" name="amout_product[]" id="qtd${contador}"><br>
                    </div>
                    <div class="col-5">
                        <label class="form-label" for="descricao${contador}">DESCRIÇÃO DO PRODUTO</label><br>
                        <input require class="form-control" type="text" name="description_product[]" id="descricao${contador}" placeholder="Produto"><br>
                    </div>
                    <div class="col-3">
                        <label class="form-label" for="valorUni${contador}">VALOR UNI. </label><br>
                        <input require class="form-control" type="text" name="single_value[]" id="valorUni${contador}" placeholder="Produto"><br>
                    </div>
                    <div class="col-3">
                        <label class="form-label" for="valorTotal${contador}">VALOR TOTAL </label><br>
                        <input require class="form-control" type="text" name="total_value[]" id="valorTotal${contador}" placeholder="100"><br>
                    </div>
                </div>
            `;

            $("#produtosExtras").append(novoProduto);
            contador++;

            $(".remove-last-product").click(function() {
                if (contador > 2) {
                    contador--;
                    $("#produtosExtras").children().last().remove();
                }
            });
        });
    });



</script>
</body>

</html>

<!-- beautify ignore:end -->