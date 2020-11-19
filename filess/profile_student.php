<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile student</title>
    <link rel="stylesheet" type="text/css" href="../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/quill/dist/quill.snow.css">
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <style>
    #user_image{
      float:left;
      height:120px;
      width:120px;
      border-radius:50%;
      background-image:url("auct_farmer.jpg");
      background-size: 100% 100%;
      margin-left:50px;
      margin-top:50px;
      opacity:75%;
    }

    </style>
</head>
<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="">
                        <b class="logo-icon p-l-10">
                             <img src="../assets/images/favicon.jpg" alt="user" class="rounded-circle" width="31"></b>
                        <span class="logo-text">
                        <h2>Shiksha</h2>
                      </a>

                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto"></ul>

                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link  waves-effect waves-dark" href="#" ><i class="mdi mdi-home font-24"></i> Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  waves-effect waves-dark" href="quiz.html" ><i class="mdi  mdi-pen"></i></i></i> Quiz</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  waves-effect waves-dark" href="#" ><i class="mdi mdi-laptop"></i> Job portal</a>
                        </li>
                    </ul>
                </div>
          </nav>
      </header>

      <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                      <div id="user_image"></div>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indx.html" aria-expanded="false"><span class="hide-menu"></span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indx.html" aria-expanded="false"><span class="hide-menu"></span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="p.html" aria-expanded="false"><span class="hide-menu">Name</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="personal.php" aria-expanded="false"><i class="ti-user m-r-5 m"></i><span class="hide-menu">Personal info</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="education.php" aria-expanded="false"><i class="mdi mdi-laptop"></i><span class="hide-menu">Education info</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
          <div class ="row">
            <div class="col-lg-1">
              <br>
              <br>
              <br>
            </div>
            <div class="col-lg-7">
              <br>
              <br>
              <br>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title m-b-0">My Applied Courses</h4>

                </div>
              </div>
              <br>
              <br>
              <div class="card">
                <div class="card-body">
                      <h4 class="card-title m-b-0">My Applied Scholarships</h4>
                </div>
              </div>
              <br>
              <br>
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title m-b-0">My Applied Jobs</h4>
                  </div>
              </div>
            </div>

            <div class="col-lg-3">
            <br>
            <br>
            <br>
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title m-b-0">Progress Box</h4>
                      <div class="m-t-20">
                          <div class="d-flex no-block align-items-center">
                              <span>81% Python</span>
                              <div class="ml-auto">
                                 <span>125</span>
                              </div>
                          </div>
                          <br>
                          <div class="progress">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <br>
                      </div>
                      <div>
                          <div class="d-flex no-block align-items-center m-t-25">
                              <span>72% Braille Blaster</span>
                              <div class="ml-auto">
                                  <span>120</span>
                              </div>
                          </div>
                          <br>
                          <div class="progress">
                              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                      <div>
                      <br>
                        <div class="d-flex no-block align-items-center m-t-25">
                              <span>53% Indian Sign Language</span>
                              <div class="ml-auto">
                                  <span>785</span>
                              </div>
                          </div>
                          <br>
                          <div class="progress">
                              <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 53%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                      <div>
                          <div class="d-flex no-block align-items-center m-t-25">
                              <span>3% Others</span>
                              <div class="ml-auto">
                                  <span>8</span>
                              </div>
                          </div>
                          <br>
                          <br>
                          <div class="progress">
                              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
       </div>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="../dist/js/waves.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <script src="../dist/js/custom.min.js"></script>
    <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../dist/js/pages/mask/mask.init.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
</body>
</html>