<?php
include("config.php");

//Create Operation

if (isset($_POST['Register'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $MobNo = $_POST['MobNo'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO user (Name, Email, MobNo, Password) VALUES ('$Name', '$Email', '$MobNo', '$Password')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data Inserted Successfully";
        echo '<script>location.replace("list.php") </script>';
    } else {
        echo '<script>alert("Server Issue")</script>';
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <!--Create Operation-->
    <div class="container border border-5 border-danger my-4">
        <h2>Create operation</h2>

        <form action="" method="post">

            <input type="text" name="Name" id="" placeholder="Your Name" class="form-control my-4">
            <input type="text" name="Email" id="" placeholder="Your Email" class="form-control my-4">
            <input type="text" name="MobNo" id="" placeholder="Your Mobile No" class="form-control my-4">
            <input type="text" name="Password" id="" placeholder="Your Password" class="form-control my-4">

            <button type="submit" name="Register" class="btn btn-primary">Submit</button>
            
        </form>


    </div>









    <br><br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>