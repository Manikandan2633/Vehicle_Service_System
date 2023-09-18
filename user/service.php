<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Service Form</title>


    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <div id="wrapper">

        
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex">
                <div class="sidebar-brand-text">
                <div class="sidebar-brand-text mx-3">Welcome user</div>
                </div>
            </a>

            
            <hr class="sidebar-divider my-0">

           
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <span>Dashboard</span></a>
            </li>

            
            <hr class="sidebar-divider">

            
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- <li class="nav-item">
                <a class="nav-link" href="mechanic.php">
                    <span>Mechanic List</span>
                </a>
            </li>   -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Mechanics</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="mechanic.php">Add Mechanics</a>
                        <a class="collapse-item" href="#">View mechanics</a>
                    </div>
                </div>
            </li> -->
             <hr class="sidebar-divider">

           
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Enquiry</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="user_enquiry.php">Enquiry Form</a>
                        <a class="collapse-item" href="enq_history.php">Enquiry History</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!--
            <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <span>Service Request</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="service.php">Service Request Form</a>
                        <a class="collapse-item" href="history.php">Service History</a>
                        
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                        <!-- Nav Item - User Information -->
                         <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mr-2 d-none d-lg-inline text-gray-600">
                                    <?php echo $_SESSION['user_name'] ?></h5>
                                
                                    <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a> 
                            <!-- Dropdown - User Information -->
                             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li> 

                    </ul>

                </nav>




<form class="form-horizontal" action="" method="post">
<div class="container">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title text-primary font-weight-bold">SERVICE REQUEST FORM</h5>
        </div>

        <div class="modal-body">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">User Name</label>
                <div class="col-sm-10">
                   <input type="text" name="username" value="<?php echo $_SESSION['user_name'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Category</label>
                <div class="col-sm-10">
                   <select class="form-select col-sm-12 p-2" name="category" required>
                     <option>select<option>
                     <option>Two Wheeler<option>
                     <option>Four Wheeler<option>
                     <option>Heavy vehicle<option>
                   </select>
                </div>
            </div> <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">vehicle Name</label>
                <div class="col-sm-10">
                   <input type="text" name="name" class="form-control" placeholder="enter name" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">vehicle Number</label>
                <div class="col-sm-10">
                   <input type="text" name="number" class="form-control" placeholder="enter number" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Service Date</label>
                <div class="col-sm-10">
                   <input type="date" name="date" class="form-control" placeholder="enter date" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Service Time</label>
                <div class="col-sm-10">
                   <input type="time" name="time" class="form-control" placeholder="enter time" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Service Type</label>
                <div class="col-sm-10">
                   <select class="form-select col-sm-12 p-2" required name="type">
                     <option>select<option>
                     <option>PickUp Service<option>
                     <option>drop Service<option>
                     <option>Both<option>
                     <option>None<option>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Adderss</label>
                <div class="col-sm-8">
                   <input type="text" name="address" class="form-control" placeholder="enter Address" required><a class="btn btn-outline-primary mt-1" onclick="myFunction()" id="">Location</a>
                   <iframe id="map" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62672.23674682531!2d79.33304706942761!3d10.962254568447497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5532b360353419%3A0x9ecb5d94413ad35!2sKumbakonam%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1679984903437!5m2!1sen!2sin" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   <script>
                     function myFunction() {
                    var iframe = $("#map");
                    iframe.attr("src",iframe.data("src"));
                   }
                    </script>

                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>
    </div>  
</div>
</form>



<?php
   $conn = mysqli_connect('localhost','root','','user_panel');
   if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $category = $_POST['category'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number= $_POST['number'];
    $date = $_POST['date'];
    $time =$_POST['time'];
    $type = $_POST['type'];
    $address = $_POST['address'];
    
        $insert = "INSERT INTO service(username,category,name ,number, date, time, type, address) VALUES('$username','$category','$name','$number','$date','$time','$type','$address')";
        $result = mysqli_query($conn, $insert);
        if($result)
        {
           
           echo "<h1 class='text-primary text-uppercase text-center'>Added successfully</h1>";
        }
        else
        {
         echo "<h1 class='text-primary text-uppercase text-center'>List not added successfully</h1>";
           
        }
     
};

?>






<br><br><br>




    


                               <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white w-100">
                <div class="container my-auto">
                    <div class="copyright text-center mb-auto text-black">
                        <h4>Copyright &copy; AUTOCARE</h4>
                    </div>
                </div>
            </footer> 

            <!-- End of Footer -->


        <!-- End of Content Wrapper -->

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../index.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>