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

    <title>Admin Page</title>


    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <div id="wrapper">

        
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex">
                <div class="sidebar-brand-text">
                <div class="sidebar-brand-text mx-3">Welcome Admin</div>
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

            <li class="nav-item">
                <a class="nav-link" href="mechanic.php">
                    <span>Mechanic List</span>
                </a>
            </li>  
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
                    <span>Service Requests</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Responded</a>
                        <a class="collapse-item" href="#">Not Responded</a>
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
                    <span>User Enquiry</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="admin_enq.php">Respond Services</a>
                        
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
                                    <?php echo $_SESSION['admin_name'] ?></h5>
                                
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
















            <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card header py-3">
            <h5 class="ml-5 font-weight-bold text-primary">RESPOND</h5>
        </div>
        <div class="card-body">
        <?php
   $conn = mysqli_connect('localhost','root','','enquiry');
   if(isset($_POST['respond_btn'])){
    $id = $_POST['respond_id'];
    $query = "SELECT * FROM enquiry_form WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);
    foreach($query_run as $row)
    {
        ?>
<form action="" method="post">
        
            <input type="text" name="res_id" value="<?php echo $row['id'] ?>">
        <div class="form-group">
            <input type="text" name="res_name" value="<?php echo $row['username'] ?>" class="form-control" placeholder="enter name" required>
        </div>
        <div class="form-group">
            <input type="text" name="enquiry" value="<?php echo $row['enquiry'] ?>" class="form-control" placeholder="job type" required>
        </div>
        <div class="form-group">
            <input type="text" name="description" value="<?php echo $row['description'] ?>" class="form-control" placeholder="enter phone no" required>
        </div>
        <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Response</label>
                <div class="col-sm-10">
                    <textarea rows="5" cols="94" name="response"></textarea>
                </div>
            </div>
        <button class="btn btn-success" type="submit" name="submit">send</button>
    </form>
        <?php
    }
   }

?>


        </div>
    </div>
</div>




<?php
$conn = mysqli_connect('localhost','root','','enquiry');

if(isset($_POST['submit'])){
    $id= $_POST['res_id'];
    $name = mysqli_real_escape_string($conn, $_POST['res_name']);
    $job_type= $_POST['enquiry'];
    $phone_no = $_POST['description'];
    $respond = $_POST['response'];
    $query = "UPDATE enquiry_form SET username='$name' , enquiry='$job_type' , description='$phone_no' ,  response='$respond' WHERE id='$id'   ";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
    {
        
         echo "<h1 class='text-primary text-uppercase text-center'>updated successfully</h1>";
    }
    else{
        echo "<h1 class='text-primary text-uppercase text-center'>updated unsuccessful</h1>";
    }

}
?>




<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center mb-auto text-black">
                        <h4>Copyright &copy; AUTOCARE</h4>
                    </div>
                </div>
            </footer> 
