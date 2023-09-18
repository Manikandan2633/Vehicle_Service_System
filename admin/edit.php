<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Mechanic Page</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex">
                <div class="sidebar-brand-text">
                <div class="sidebar-brand-text mx-3">Edit page</div>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="mechanic.php">
                    <span>Mechanic List</span>
                </a>
            </li> 
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
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

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
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
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h5 class="mr-2 d-none d-lg-inline text-gray-600">Manikandan </h5>
                    
                        <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a> 
            </li> 

        </ul>

    </nav>




    <!-- <form action="#" method="post">
<div class="modal fade" id="demo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add mechanic details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  


       <div class="modal-body">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="enter name" required>
        </div>
        <div class="form-group">
            <label>Job Type</label>
            <input type="text" name="job" class="form-control" placeholder="Part or Full time job" required>
        </div>
        <div class="form-group">
            <label>Contact No</label>
            <input type="text" name="phoneno" class="form-control" placeholder="enter phone number" required>
        </div>
        <div class="form-group">
            <label>Mechanic image</label><br>
            <input type="file" name="image" required>
        </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="submit">Save</button>
      </div>
    </div>
  </div>
</div>
</form>
<div class="container-fluid">      
                <button type="button" class="btn btn-primary ml-5" data-toggle="modal" data-target="#demo">
  ADD
</button>
</div> -->




<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card header py-3">
            <h5 class="ml-5 font-weight-bold text-primary">EDIT</h5>
        </div>
        <div class="card-body">
        <?php
   $conn = mysqli_connect('localhost','root','','admin_panel');
   if(isset($_POST['edit_btn'])){
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM mechanic_form WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);
    foreach($query_run as $row)
    {
        ?>
<form action="" method="post">
        
            <input type="text" name="edit_id" value="<?php echo $row['id'] ?>">
        <div class="form-group">
            <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="enter name" required>
        </div>
        <div class="form-group">
            <input type="text" name="edit_job" value="<?php echo $row['job'] ?>" class="form-control" placeholder="job type" required>
        </div>
        <div class="form-group">
            <input type="text" name="edit_phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="enter phone no" required>
        </div>
        <button class="btn btn-success" type="submit" name="submit">EDIT</button>
    </form>
        <?php
    }
   }

?>


        </div>
    </div>
</div>




<?php
$conn = mysqli_connect('localhost','root','','admin_panel');

if(isset($_POST['submit'])){
    $id= $_POST['edit_id'];
    $name = mysqli_real_escape_string($conn, $_POST['edit_name']);
    $job_type= $_POST['edit_job'];
    $phone_no = $_POST['edit_phone'];
    $query = "UPDATE mechanic_form SET name='$name' , job='$job_type' , phone='$phone_no' WHERE id='$id'   ";
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


























