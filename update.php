 <?php
    include("config.php");

    if (isset($_POST['Update'])) {
        $id = $_GET['id'];
        $New_Name = $_POST['Name'];
        $New_Email = $_POST['Email'];
        $New_MobNo = $_POST['MobNo'];
        $New_Password = $_POST['Password'];

        $sql = "UPDATE user SET  id=$id,Name='$New_Name', Email='$New_Email', MobNo='$New_MobNo', Password='$New_Password' where id=$id ";
        $query = mysqli_query($conn, $sql);
        header('location:list.php');

        if ($query) {
            echo '<script>alert("Data Updated Successfully")</script>';
        } else {
            echo '<script>alert("Server Issue")</script>';
        }
    }

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>update</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

 </head>

 <body>

     <div class="container border border-5 border-primary my-4">
         <h3 class="h3 text-center">
             Update Operation
         </h3>




         <?php
            $sql_read = "SELECT * FROM user";
            $query = mysqli_query($conn, $sql_read);
            //only one dat get
            $row = mysqli_fetch_assoc($query)
            //get all data
            // while ($row = mysqli_fetch_array($query)) 
            // {
            ?>

         <!--Fetching Data-->
         <div class="container-fluide">
             <form action="" method="post">

                 <input type="text" name="Name" id="" value="<?php echo  $row['Name'] ?>" class="form-control my-4">
                 <input type="text" name="Email" id="" value="<?php echo  $row['Email'] ?>" class="form-control my-4">
                 <input type="text" name="MobNo" id="" value="<?php echo  $row['MobNo'] ?>" class="form-control my-4">
                 <input type="text" name="Password" id="" value="<?php echo  $row['Password'] ?>" class="form-control my-4">

                 <button type="submit" name="Update" class="btn btn-primary">Submit</button>

             </form>
         </div>

         <?php
            // }
            ?>



     </div>

 </body>

 </html>