<?php
session_start();
$con=mysqli_connect('localhost','root','','Abhyuday');

if(isset($_POST['register_student']))
{

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $dob=  $_POST['dob'];
  $state= $_POST['state'];
  $country=$_POST['country'];
  $gender=  $_POST['gender'];
  $disability= $_POST['disability'];
  $email=$_POST['email'];
  $mobno=  $_POST['mobno'];
  $user_name= $_POST['user_name'];
  $password=$_POST['password'];
  $pass=md5($password.$user_name);
  $query=$con->prepare("SELECT * FROM `user_info` WHERE `email`=?");
  $query->bind_param("s",$email);
  $query->execute();
  $run= $query->get_result();
  $row=$run->num_rows;
  	if($row==1)
    {
  	   echo '<script>alert("email already exists")</script>';
     }
    else {
      if(isset($_FILES['profile'])){
         $errors= array();
         $file_name = $_FILES['profile']['name'];
         $file_size =$_FILES['profile']['size'];
         $file_tmp =$_FILES['profile']['tmp_name'];
         $file_type=$_FILES['profile']['type'];
         $file_Ext=explode('.',$file_name);
         $file_ActualExt=mb_strtolower(end($file_Ext));
         $allowed=array('jpg','jpeg','png','pdf','docx','pptm','pptx');

         if(in_array($file_ActualExt,$allowed)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
         }
         if($file_size > 2097152){
            $errors[]='File size must be excately 2 MB';
         }
         if(empty($errors)==true){
            move_uploaded_file($file_tmp,"uploads/".$file_name);

            $query2=$con->prepare("INSERT INTO `documents`(`user_name`,`profile`) VALUES (?,?)");
            $query2->bind_param("ss", $user_name,$file_name);
            $query2->execute();
         }else{
            print_r($errors);
         }
      }
            $query1=$con->prepare("INSERT INTO `user_info`(`fname`,`lname`, `dob`, `state`,`country`, `gender`, `disability`, `email`, `mobno`,`user_name`,`password`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
            $query1->bind_param("sssssssssss",$fname,$lname,$dob, $state,  $country,$gender,$disability,$email,$mobno, $user_name,$pass);
            $query1->execute();
            echo '<script>alert("registered sucessfully")</script>';
       }
    }


?>

<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.jpg">
    <title>Registration</title>
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/quill/dist/quill.snow.css">
    <link href="../dist/css/style.min.css" rel="stylesheet">
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
              <div class="navbar-header" data-logobg="dark">
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
                  <ul class="navbar-nav float-left mr-auto">
                     <li></li>
                     <li></li>
                     <li style ="padding: 10px; height: 35px;" class="nav-item dropdown">

                       <div id="google_translate_element"></div>
                       <script type="text/javascript">
                       function googleTranslateElementInit() {
                         new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                       }
                       </script>
                       <script type="text/javascript" src="language_translation.js"></script>
                     </center>
                     </li>
                  </ul>
                  <ul class="navbar-nav float-right">

                    <li class="nav-item dropdown">
                        <a class="nav-link  waves-effect waves-dark" href="home.php" ><i class="mdi mdi-home font-24"></i> Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  waves-effect waves-dark" href="#contact_us" ><i class="mdi mdi-phone font-24"></i> Contact Us
                        </a>
                    </li>
                  </ul>
              </div>
            </nav>
          </header>
        </div>
         <main>
           <br>
           <br>

           <div class="container-fluid">
                   <form action="#" method="post" name="login" class="needs-validation" enctype ="multipart/form-data" novalidate>
               <div class="row">
                  <div class="col-md-1"></div>
                    <div class="col-md-5"style="background-color:lavender";>
                      <br>
                      <br>
                        <div class="card">
                          <div class="card-body" style="background-color:white;">
                              <h3 class="card-title">Personal Info</h3>
                              <div class="form-group row">
                                  <label for="fname" class="col-sm-3"><h5>First Name</h5></label>
                                  <div class="col-sm-9">
                                      <input type="text" style="border: 0.5px solid gray;color:black;" class="form-control" name ="fname" id="fname" placeholder="First Name Here">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="fname" class="col-sm-3"><h5>Last name</h5></label>
                                  <div class="col-sm-9">
                                      <input type="text" style="border: 0.5px solid gray;color:black;" class="form-control" name ="lname" id="fname" placeholder="Last Name Here">
                                  </div>
                              </div>
                              <div class="input-group form-group row">
                                    <label for="lname" class="col-sm-3"><h5>DOB</h5></label>
                                    <div class="col-sm-9">
                                  <input type="date" style="border: 0.5px solid gray;color:black;" name ="dob" class="form-control " placeholder="mm/dd/yyyy">
                                </div>
                              </div>
                              <div class="form-group row">
                                  <label class="col-md-3 m-t-15"><h5>State</h5></label>
                                  <div class="col-md-9">
                                      <input type="text"style="border: 0.5px solid gray;color:black;" class="form-control" name ="state" id="state" placeholder="">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="col-md-3 m-t-15"><h5>Country</h5></label>
                                  <div class="col-md-9">
                                      <input type="text" style="border: 0.5px solid gray;color:black;" class="form-control" name ="country" id="state" placeholder="">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="lname" class="col-sm-3"><h5>Gender</h5></label>
                                  <div class="col-md-9">
                                      <select style="border: 0.5px solid gray;color:black;" class="select2 form-control custom-select" name ="gender" style="width: 100%; height:36px;">
                                          <option>Select</option>

                                              <option value="F"><h5>Female</h5></option>
                                              <option value="M"><h5>Male</h5></option>
                                              <option value="O"><h5>Other</h5></option>


                                      </select>
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label class="col-md-3"><h5>Disability</h5></label>
                                  <div class="col-md-9">
                                    <span>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disability" id="inlineRadio1" value="Dumb">
                                         <label class="form-check-label" for="inlineRadio1"><h5>dumb</h5></label>
                                        </div>
                                      <br>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disability" id="inlineRadio1" value="Deaf">
                                         <label class="form-check-label" for="inlineRadio1"><h5>Deaf</h5></label>
                                        </div>
                                      <br>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disability" id="inlineRadio1" value="Blind">
                                         <label class="form-check-label" for="inlineRadio1"><h5>Blind</h5></label>
                                        </div>
                                      <br>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disability" id="inlineRadio1" value="Physically_Disability">
                                         <label class="form-check-label" for="inlineRadio1"><h5>Physically Disability</h5></label>
                                        </div>
                              <br></span>
                                  </div>
                              </div>
                          </div>
                        </div>
                     </div>
                     <div class="col-md-5" style="background-color:lavender";>
                       <br>
                       <br>
                         <div class="card">
                           <div class="card-body" style="background-color:white";>
                               <h5 class="card-title m-b-0"></h5>
                               <center><h6></h6></center>
                               <div class="form-group row">
                                   <label for="lname" class="col-sm-3"><h5>Email</h5></label>
                                   <div class="col-sm-9">
                                       <input type="email" style="border: 0.5px solid gray;color:black;" class="form-control" name ="email" placeholder="Email address">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label for="lname" class="col-sm-3"><h5>Mobile No.</h5></label>
                                   <div class="col-sm-9">
                                       <input type="text" style="border: 0.5px solid gray;color:black;" class="form-control" name ="mobno" placeholder="Mobile No.">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label for="lname" class="col-sm-3"><h5>user name</h5></label>
                                   <div class="col-sm-9">
                                       <input type="text" style="border: 0.5px solid gray;color:black;" class="form-control" name ="user_name" id="user_name" placeholder="user name">
                                   </div>
                               </div>

                               <div class="form-group row">
                                   <label for="lname" class="col-sm-3"><h5>Password</h5></label>
                                   <div class="col-sm-9">
                                       <input type="password" style="border: 0.5px solid gray;color:black;" class="form-control" name ="password" id="password" placeholder="Password ">
                                   </div>
                               </div>
                           </div>
                           <br>
                           <br>
                         </div>

                        <div class="card">
                            <div class="card-body" style="background-color:white";>
                              <center><h6> <h3>Upload Documents </h3> </h6></center>
                              <div class="form-group row">
                                  <label class="col-md-3"><h5>Photo</h5></label>
                                  <div class="col-md-9">
                                      <div class="custom-file">
                                          <input type="file" style="border: 0.5px solid gray;color:black;" class="custom-file-input" name ="profile"  id="validatedCustomFile" required>
                                          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                          <div class="invalid-feedback">Example invalid custom file feedback</div>
                                      </div>
                                  </div>
                              </div>
                              <br>
                              <br>
                              <br>
                            </div>
                        </div>

                      </div>
                  <div class="col-md-1"></div>
              </div>
            <br>
            <br>
            <div class="border-top">
            <div class="card-body">
          <center><button type="submit" name ="register_student" class="btn btn-success btn-lg">Save and Submit</button></center>
              </div>
              </div>
             </div>
        </form>
          </div>
         </main>
         <footer class="page-footer font-small cyan darken-3" style="background-color:black;">
           <div class="container">
             <section id="contact_us">
             <center>
               <br>
               <br>
               <h2 style= "color:  #d1c5cd">Contact Us</h2>
               <br>
               <br>
                 <div class="mb-5 flex-center">
                   <a class="fb-ic">
                     <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x" style="font-size:36px;color: #3b5998;"> </i>
                   </a>
                   <a class="tw-ic">
                     <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x" style="font-size:36px;color: #00aced;"> </i>
                   </a>
                   <a class="gplus-ic">
                     <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x" style="font-size:36px;color:green"> </i>
                   </a>
                   <a class="li-ic">
                     <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x" style="font-size:36px; color: #0e76a8"> </i>
                   </a>
                   <a class="ins-ic">
                     <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x" style="font-size:36px;  color: pink;"> </i>
                   </a>
                 </div>
                 <div class="row">
                     <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4"></div>
                     <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2">
                   <a class="phone">
                     <i class="fa fa-phone" aria-hidden="true" style="font-size:36px;color: #d1c5cd"> </i>
                     <br>
                     <h5 style="font-size:20px;color: #d1c5cd">7083472839</h5>
                   </a>
                   <br>
                 </div>
                   <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2">
                   <a class="email">
                     <i class="fa fa-envelope" aria-hidden="true" style="font-size:36px;color: #d1c5cd"> </i>
                     <br>
                       <h6 style="font-size:20px;color: #d1c5cd">abc@gmail.com</h6>
                   </a>
                 </div>
                 <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4"></div>
                 </div>
               </center>

             </section>
           </div>
           <div class="footer-copyright text-center py-3" style="color: #d1c5cd">© 2020 Copyright: KSsquare.com
           </div>

         </footer>

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
