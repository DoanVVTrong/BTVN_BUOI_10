<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.masterCuba.css')
</head>

<body onload="startTime()">
    <!-- tap on top starts-->
    <div class="tap-top"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-chevrons-up">
            <polyline points="17 11 12 6 7 11"></polyline>
            <polyline points="17 18 12 13 7 18"></polyline>
        </svg></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper horizontal-wrapper enterprice-type" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            @include('pages.masterCuba.menu')
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="index.html" data-bs-original-title="" title=""><img
                                class="img-fluid for-light" src="../assetsCuba/images/logo/logo.png" alt=""><img
                                class="img-fluid for-dark" src="../assetsCuba/images/logo/logo_dark.png"
                                alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar" checked="checked"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-grid status_toggle middle sidebar-toggle">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html" data-bs-original-title="" title=""><img
                                class="img-fluid" src="../assetsCuba/images/logo/logo-icon.png" alt=""></a>
                    </div>
                    @include('pages.masterCuba.navbar')
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <div class="page-body">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- footer start-->
            @include('pages.masterCuba.footer')
        </div>
    </div>
    @include('pages.masterCuba.js')

</body>

</html>
