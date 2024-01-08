<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta name="google-adsense-account" content="ca-pub-2240749798064726">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PULANGUI WATER LEVEL</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Ludens---Contact-Info--Google-Map.css">
    <link rel="stylesheet" href="assets/css/Navbar-Apple.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js" integrity="sha512-UXumZrZNiOwnTcZSHLOfcTs0aos2MzBWHXOHOuB0J/R44QB0dwY5JgfbvljXcklVf65Gc4El6RjZ+lnwd2az2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-zoom/2.0.1/chartjs-plugin-zoom.min.js" integrity="sha512-wUYbRPLV5zs6IqvWd88HIqZU/b8TBx+I8LEioQ/UC0t5EMCLApqhIAnUg7EsAzdbhhdgW07TqYDdH3QEXRcPOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid" style="margin-top: 35px;margin-bottom: 35px;">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4 padding-top">
                        <h3 class="text-dark mb-0">Pulangui Water Level Monitoring</h3>
                        <nav class="navbar navbar-expand-md fixed-top bg-dark p-0 navbar-dark">
                            <div class="container">
                                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                                    <span class="visually-hidden">Toggle navigation</span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navcol-1">
                                    <ul class="navbar-nav flex-grow-1 justify-content-between">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/img/logo.png" alt="Pulangui Logo" width="30px" height="25px">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="">Advisory</a></li>
                                        <li class="nav-item"><a class="nav-link" href="contact.html">Emergency Hotline</a></li>
                                        <li class="nav-item"><a class="nav-link" href="aboutus.html">About Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div id="alert-message" >
                        <!-- Alert message will be updated dynamically here -->
                    </div>
                    <div id="waterAlertBatangan">
                        <!-- Alert message will be updated dynamically here -->
                    </div>
                    <div id="waterAlertLumbayao">
                        <!-- Alert message will be updated dynamically here -->
                    </div>
                    <div class="row justify-content-center text-center" style="margin-top: 15px; margin-bottom: 2px;">
                        <div class="col-lg-5 offset-lg-0 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0">Valencia City Weather Forecast</h6>
                                </div><a class="weatherwidget-io forecast" href="https://forecast7.com/en/7d86125d17/valencia-city/" data-label_1="VALENCIA" data-label_2="Pulangui Weather" data-theme="weather_one" >VALENCIA Pulangui Weather</a>
                                <script>
                                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                                </script>
                            </div>
                        </div>
                    </div> 
                    <div class="row justify-content-center text-center" style="margin-bottom: 0px;padding-bottom: 5px;">
                        <div class="col-lg-5 offset-lg-0 mb-4">
                            <div class="card shadow mb-4 card-size">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0" >Pulangui Batangan Water Level Meter</h6>
                                </div>
                                <div class="card-body water-level" style="margin-top: -2px;padding-top: 2px;padding-bottom: 0px;margin-bottom: 4px;"><div class="text-center small padding-top"><span class="me-2"><i class="fas fa-circle safe-color"></i> Safe</span><span class="me-2"><i class="fas fa-circle warning-color"></i> Warning</span><span class="me-2"><i class="fas fa-circle danger-color"></i> Danger</span></div><script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <div id="batangan_gauge" class="water-meter"></div>
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-5 col-xl-4">
                            <div class="card shadow mb-4 card-size">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0">Pulangui Lumabayao Water Level Meter</h6>
                                </div>
                                <div class="card-body water-level" style="margin-top: -2px;padding-top: 2px;padding-bottom: 0px;margin-bottom: 4px;"><div class="text-center small padding-top"><span class="me-2"><i class="fas fa-circle safe-color"></i> Safe</span><span class="me-2"><i class="fas fa-circle warning-color"></i> Warning</span><span class="me-2"><i class="fas fa-circle danger-color"></i> Danger</span></div><script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <div id="lumbayao_gauge" class="water-meter"></div>
                                </div>
                            </div>
                        </div>
                    <div class="row justify-content-center " style="margin-top: 30px;padding-bottom: 31px;">
                        <div style="margin-top: 50px;">
                            <div class="card shadow">
                                <div class="card-header d-flex  py-3">
                                    <h6 class="text-primary fw-bold m-0">Recent Batangan Water Level</h6>
                                </div>
                                <div>
                                <label for="BatangandateFilter">Select Time Range:</label>
                                <select id="BatangandateFilter" onchange="updateBatanganChart()">
                                    <option value="all">All</option>
                                    <option value="last_30_minutes" selected>30 mins</option>
                                    <option value="today" >Today</option>
                                    <option value="yesterday">Yesterday</option>
                                    <option value="last_week">Last Week</option>
                                    <option value="this_month">This Month</option>
                                    <option value="last_month">Last Month</option>
                                </select>
                                </div>
                                <div class="card shadow"><canvas id="BatanganChart"></canvas></div>
                            </div>
                        </div>
                        <div style="margin-top: 30px;">
                            <div class="card shadow">
                                <div class="card-header d-flex  py-3">
                                    <h6 class="text-primary fw-bold m-0">Recent Lumbayao Water Level</h6>
                                </div>
                                <div>
                                <label for="LumbayaodateFilter">Select Time Range:</label>
                                <select id="LumbayaodateFilter" onchange="updateLumbayaoChart()">
                                    <option value="all">All</option>
                                    <option value="last_30_minutes" selected>30 mins</option>
                                    <option value="today" >Today</option>
                                    <option value="yesterday">Yesterday</option>
                                    <option value="last_week">Last Week</option>
                                    <option value="this_month">This Month</option>
                                    <option value="last_month">Last Month</option>
                                </select>
                                </div>
                                <div class="card shadow"><canvas id="LumbayaoChart"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © ACLC 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://app2.weatherwidget.org/js/?id=ww_e6a1953df88de"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/WOWSlider-about-us.js"></script>
</body>

</html>