<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MedicApp - Medical & Hospital </title>
    <meta name="keywords" content="MedicApp">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/icofont.min.css">
    <link rel="stylesheet" href="../assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="../assets/css/jquery.typeahead.css">
    <link rel="stylesheet" href="../assets/css/datatables.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/css/Chart.min.css">
    <link rel="stylesheet" href="../assets/css/morris.css">
    <link rel="stylesheet" href="../assets/css/leaflet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="vertical-layout boxed">
    <div class="app-loader main-loader">
        <div class="loader-box">
            <div class="bounceball"></div>
            <div class="text">Medic<span>app</span></div>
        </div>
    </div>
    <!-- .main-loader -->
    <div class="page-box">
        <div class="app-container">
            <!-- Horizontal navbar -->
            <div id="navbar1" class="app-navbar horizontal">
                <div class="navbar-wrap">
                    <button class="no-style navbar-toggle navbar-open d-lg-none"><span></span><span></span><span></span></button>
                    <form class="app-search d-none d-md-block">
                        <div class="form-group typeahead__container with-suffix-icon mb-0">
                            <div class="typeahead__field">
                                <div class="typeahead__query"><input
                                        class="form-control autocomplete-control topbar-search" type="search"
                                        placeholder="Type page's title" autocomplete="off"
                                        data-source="../assets/data/search-menu.json">
                                    <div class="suffix-icon "><i class=" fa fa-search"></i></div>
                                </div>
                            </div>
                        </div>
                    </form>
                 <div class="app-actions">
                        <div class="dropdown item">
                            <button class="no-style dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-bs-offset="0, 12"><span class="icon "><i class="fa fa-bell"></i></span> <span
                                class="badge badge-danger badge-sm">0</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-w-280">
                                <div class="menu-header">
                                        <h4 class="h5 menu-title mt-0 mb-0">Notifications</h4><a href="#"
                                            class="text-danger">Clear All</a>
                                </div>
                                <ul class="list">
                                    <li><a href="#"><span class="icon "><i class="fa fa-envelope"></i></span>
                                            <div class="content"><span class="desc">no notification yet !!</span>
                                                <span class="date">no time</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="menu-footer"><button class="btn btn-primary w-100">all notifications
                                        <span class="btn-icon ms-2 "><i class="fa fa-envelopes-bulk"></i></span></button>
                                </div>
                                </div>
                            
                                </div>
                                <div class="dropdown item">
                                    <button class="no-style dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-bs-offset="0, 10"><span class="d-flex align-items-center"><img
                                        src="https://th.bing.com/th/id/R.c11b6f38dffc24a4508217513b0e50bd?rik=Pt%2bkITlukiMkWg&riu=http%3a%2f%2fwww.emmegi.co.uk%2fwp-content%2fuploads%2f2019%2f01%2fUser-Icon.jpg&ehk=zjS04fF4nxx%2bpkvRPsSezyic3Z7Yfu%2fuoT75KnbNv1Y%3d&risl=&pid=ImgRaw&r=0" alt="" width="40" height="40"
                                        class="rounded-500 me-1"> <i class="fa fa-angles-down"></i></span>
                                  </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-w-180">
                                        <ul class="list">
                                            <li><a href="./edit-account.php" class="align-items-center"><span
                                                class="icon "><i class="fa fa-gear"></i></span> Edit account</a></li>
                                            <li><a href="./user-profile.php" class="align-items-center"><span
                                                class="icon "><i class="fa-solid fa-user"></i></span> User profile</a></li>
                                            <li><a href="./sign-in.php" class="align-items-center"><span
                                                class="icon "><i class="fa-solid fa-right-from-bracket"></i></span> Log Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                         <div class="navbar-skeleton horizontal">
                               <div class="left-part d-flex align-items-center"><span class="navbar-button bg animated-bg d-lg-none"></span> <span 
                                    class="sk-logo bg animated-bg d-none d-lg-block"></span> <span class="search d-none d-md-block bg animated-bg"></span>
                             </div>
                                <div class="right-part d-flex align-items-center">
                                    <div class="icon-box"><span class="icon bg animated-bg"></span> <span class="badge"></span>
                                    </div>
                                    <span class="avatar bg animated-bg"></span>
                                </div>
                            </div>
                     </div>
                  </div>
                        <!-- end Horizontal navbar -->
                         <!-- Vertical navbar -->
                 <div id="navbar2" class="app-navbar vertical">
                        <div class="navbar-wrap">
                            <button class="no-style navbar-toggle navbar-close  d-lg-none"><i class="fa fa-close"></i></button>
                         <div class="app-wrap col-sm-12 d-flex justify-content-center">
                                <div class="logo-wrap ">
                                    <img  src="../assets/img/logo.png" alt=""  width="130" height="33" class="logo-img">
                                </div>
                            </div>
                    <div class="main-menu">
                        <nav class="main-menu-wrap">
                          <ul class="menu-ul ">
                              <li class="menu-item"><a class="item-link" href="index.php"><span class="link-icon "><i class="fa fa-chart-line"></i></span> <span class="link-text">Dashboard</span></a></li>
                              <li class="menu-item"><a class="item-link" href="appointments.php"><span class="link-icon"><i class="fa fa-stethoscope"></i></span> <span class="link-text">Appointments</span></a></li>
                              <li class="menu-item"><a class="item-link" href="doctors.php"><span class="link-icon "><i class="fa-solid fa-user-doctor"></i></span> <span class="link-text">Doctors</span></a></li>
                              <li class="menu-item"><a class="item-link" href="departments.php"><span class="link-icon"><i class="fa-solid fa-user-nurse"></i></span> <span class="link-text">Departments</span></a></li>
                              <li class="menu-item"><a class="item-link" href="patients.php"><span class="link-icon"><i class="fa-solid fa-wheelchair"></i></span> <span class="link-text">Patients</span></a></li>
                              <li class="menu-item"><a class="item-link" href="pharmacy.php"><span class="link-icon "><i class="fa-solid fa-staff-snake"></i></i></span> <span class="link-text">Pharmacy</span></a></li>
                              <li class="menu-item"><a class="item-link" href="payments.php"><span class="link-icon "><i class="fa-solid fa-hand-holding-dollar"></i></span> <span class="link-text">Payments</span></a></li>
                              <li class="menu-item"><a class="item-link" href="calendrier.php"><span class="link-icon "><i class="fa-solid fa-calendar-days"></i></span> <span class="link-text">Calendrier</span></a></li>
                            </ul>
                        </nav>
                  </div>
                           
              
              
              
              
              
              
              
              
              
              
              
              
              
                </div>
               
            </div>
                          <!-- end Vertical navbar -->
                          <main class="main-content">
                    <div class="app-loader">
                        <i class="icofont-spinner-alt-4 rotate"></i>
                    </div>
                    <div class="main-content-wrap">
                        <div class="page-content">
                            <div class="row">
                                <div class="col col-12 col-md-6 col-xl-3">
                                    <div class="card animated fadeInUp delay-01s bg-light">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col col-5">
                                                    <div
                                                        class="icon p-0 fs-48 text-primary opacity-50 "><i class="fa-solid fa-stethoscope fa-xl" style="color: #5993f7;"></i>
                                                    </div>
                                                   </div>
                                                    <div class="col col-7">
                                                        <h6 class="mt-0 mb-1">Appointments</h6>
                                                        <div class="count text-primary fs-20">213</div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                </div>
                                <div class="col col-12 col-md-6 col-xl-3">
                                <div class="card animated fadeInUp delay-02s bg-light">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col col-5">
                                                <div class="icon p-0 fs-48 text-primary opacity-50 "><i class="fa-solid fa-truck-medical fa-xl" style="color: #5993f7;"></i>
                                                </div>
                                            </div>
                                            <div class="col col-7">
                                                <h6 class="mt-0 mb-1">New patients</h6>
                                                <div class="count text-primary fs-20">104</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 col-xl-3">
                                <div class="card animated fadeInUp delay-03s bg-light">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col col-5">
                                                <div class="icon p-0 fs-48 text-primary opacity-50 "><i class="fa-solid fa-bed-pulse fa-xl" style="color: #5993f7;"></i>

                                                </div>
                                            </div>
                                            <div class="col col-7">
                                                <h6 class="mt-0 mb-1">Operations</h6>
                                                <div class="count text-primary fs-20">24</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 col-xl-3">
                                <div class="card animated fadeInUp delay-04s bg-light">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col col-5">
                                                <div class="icon p-0 fs-48 text-primary opacity-50 "><i class="fa-solid fa-sack-dollar fa-xl" style="color: #5993f7;"></i>
                                                </div>
                                            </div>
                                            <div class="col col-7">
                                                <h6 class="mt-0 mb-1 text-nowrap">Hospital Earning</h6>
                                                <div class="count text-primary fs-20">$5238</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 col-xl-3">
                                <div class="card animated fadeInUp delay-04s bg-light">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col col-5">
                                                <div class="icon p-0 fs-48 text-primary opacity-50 "><i class="fa-solid fa-user-doctor fa-xl" style="color: #5993f7;"></i>
                                                </div>
                                            </div>
                                            <div class="col col-7">
                                                <h6 class="mt-0 mb-1 text-nowrap">Doctors</h6>
                                                <div class="count text-primary fs-20">50</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                                <div class="card mb-0">
                                    <div class="card-header">Last appointments</div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                              <thead>
                                                <tr>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Visit time</th>
                                                <th scope="col">Number</th>
                                                <th scope="col">Doctor</th>
                                                <th scope="col">Injury / Condition</th>
                                                <th scope="col">Actions</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                              <?php foreach( $cnx->query('select * from ticket appointment') as $v) { ?>
                                              <tr>
                                                <td><img src="../assets/content/user-40-1.jpg" alt="" width="40"
                                                        height="40" class="rounded-500"></td>
                                                <td><strong><?=$v['']?></strong></td>
                                                <td>
                                                    <div class="d-flex align-items-center nowrap text-primary"> liam@gmail.com
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-muted text-nowrap">10 Feb 2018</div>
                                                </td>
                                                <td>
                                                    <div class="text-muted text-nowrap">9:15 - 9:45</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center nowrap text-primary"> 0126595743 </div>
                                                </td>
                                                  <td>Dr. Benjamin</td>
                                                <td>mumps</td>
                                                    <td>
                                                        <div class="actions"><button
                                                            class="btn btn-info btn-sm btn-square rounded-pill"><span class="btn-icon "><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></span></button>
                                                            <button class="btn btn-error btn-sm btn-square rounded-pill"><span class="btn-icon "><i class="fa-solid fa-trash"></i></span></button>
                                                       </div>
                                                  </td>
                                                </tr>
                                                <?php } ?>
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                     </div>
                    </div>
                </main>
        </div>
 </div>

            



    <!-- end Add patients modals -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.typeahead.min.js"></script>
    <script src="../assets/js/datatables.min.js"></script>
    <script src="../assets/js/bootstrap-select.min.js"></script>
    <script src="../assets/js/jquery.barrating.min.js"></script>
    <script src="../assets/js/Chart.min.js"></script>
    <script src="../assets/js/raphael-min.js"></script>
    <script src="../assets/js/morris.min.js"></script>
    <script src="../assets/js/echarts.min.js"></script>
    <script src="../assets/js/echarts-gl.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>