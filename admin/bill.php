<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVOICE</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<br><br><br>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card header py-3">
            <h5 class="ml-5 font-weight-bold text-primary text-center">INVOICE</h5>
        </div>
        <div class="card-body">
        <?php
   $conn = mysqli_connect('localhost','root','','user_panel');
   if(isset($_POST['gen_btn'])){
    $id = $_POST['id'];
    $query = "SELECT * FROM service WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);
    foreach($query_run as $row)
    {
        ?>
<form action="" method="post">
        
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <div class="form-group">
            <input type="text" name="edit_name" disabled value="<?php echo $row['username'] ?>" class="form-control" placeholder="enter name" required>
        </div><br>
        <div class="form-group">
            <input type="text" name="edit_job" disabled value="<?php echo $row['category'] ?>" class="form-control" placeholder="job type" required>
        </div><br>
        <div class="form-group">
            <input type="text" name="edit_phone" disabled value="<?php echo $row['name'] ?>" class="form-control" placeholder="enter phone no" required>
        </div><br>
        <div class="form-group">
            <input type="text" name="edit_phone" value="<?php echo $row['number'] ?>" disabled class="form-control" placeholder="enter phone no" required>
        </div><br>
        <div class="form-group">
            <input type="text" name="amount"  class="form-control" placeholder="enter service charge" required>
        </div><br>
        <button class="btn btn-success" type="submit" name="submit">SEND</button>
    </form>
        <?php
    }
   }

?>


        </div>
    </div>
</div>




<?php
$conn = mysqli_connect('localhost','root','','user_panel');

if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $amount = $_POST['amount'];
    $query = "UPDATE service SET amount='$amount'  WHERE id='$id'   ";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
    {
        
         echo "<h1 class='text-primary text-uppercase text-center'>Service charge added successfully</h1>";
    }
    else{
        echo "<h1 class='text-primary text-uppercase text-center'>unsuccessful</h1>";
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
</body>
</html>