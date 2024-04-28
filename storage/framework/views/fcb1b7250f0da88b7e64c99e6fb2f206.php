
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>PAY PORTAL</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(env('ASSET_URL')); ?>/assets/img/favicon.ico"/>
    <link href="<?php echo e(env('ASSET_URL')); ?>/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(env('ASSET_URL')); ?>/plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo e(env('ASSET_URL')); ?>/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo e(env('ASSET_URL')); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(env('ASSET_URL')); ?>/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(env('ASSET_URL')); ?>/assets/css/forms/theme-checkbox-radio.css">
    <link href="<?php echo e(env('ASSET_URL')); ?>/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(env('ASSET_URL')); ?>/assets/css/apps/contacts.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->  

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo e(env('ASSET_URL')); ?>/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(env('ASSET_URL')); ?>/assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(env('ASSET_URL')); ?>/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(env('ASSET_URL')); ?>/plugins/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL STYLES -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="<?php echo e(env('ASSET_URL')); ?>/assets/css/apps/invoice.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->


</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="index.html">
                    
                    <span class="navbar-brand-name">PAYPORTAL</span></a>
            </div>

            
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="index.html">
                            <img src="<?php echo e(env('ASSET_URL')); ?>/assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.html" class="nav-link"> CORK </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu <?php echo e(request()->is('/') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('/')); ?>">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                    </li>
                    <li class="menu single-menu <?php echo e(request()->is('payments*') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('/payments')); ?>">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Payment</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                    </li>
                    <li class="menu single-menu <?php echo e(request()->is('settings*') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('/settings')); ?>">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Setting</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->
        
        <!--  BEGIN CONTENT PART  -->
        <?php echo $__env->yieldContent('content'); ?>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(env('ASSET_URL')); ?>/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo e(env('ASSET_URL')); ?>/plugins/apex/apexcharts.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/assets/js/dashboard/dash_2.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/plugins/notification/snackbar/snackbar.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/assets/js/apps/contact.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/assets/js/apps/invoice.js"></script>
    <?php if(session()->has('message')): ?>
        <script>
            // Show Snackbar notification
            Snackbar.show({
                text: '<?php echo e(session('message')); ?>',
                duration: 5000, // 5 seconds
            });
        </script>
    <?php endif; ?>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo e(env('ASSET_URL')); ?>/plugins/table/datatable/datatables.js"></script>
    <script>        
        $('#table').DataTable( {
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "order": [[ 3, "desc" ]],
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
	    } );
    </script>
    <?php echo $__env->yieldContent('script'); ?>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html><?php /**PATH C:\Users\Hasnat Khan\Desktop\mypayportal\mypayportal\resources\views/layouts/app.blade.php ENDPATH**/ ?>