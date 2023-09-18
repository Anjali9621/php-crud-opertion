

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<style>

    .btn-group{
        margin-top: 20px;
        margin-left: 45vw;
    }
    .container {
        background-color: whitesmoke;
        padding: 20px;
        border: 2px solid black;
    }
</style>
<body>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary active mt-5  text-center " aria-current="page">New Data</a>
    </div>
    <!--List Operation-->
    <div class="container  border border-5 my-4">
        <h3 class="h1 text-center">
            List Data
        </h3>
        <table class="table table-dark table-hover table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Date of Reg</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include("config.php");
                $sql_read = "SELECT * FROM user";
                $query = mysqli_query($conn, $sql_read);

                while ($row = mysqli_fetch_array($query)) {
                ?>

                    <!--Fetching Data-->
                    <tr>
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['Email'] ?></td>
                        <td><?php echo $row['MobNo'] ?></td>
                        <td><?php echo $row['Date'] ?></td>
                        <td><a href="update.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary">Edit</button></a></td>

                        <td><a href="delete.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a></td>

                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>

    </div>


    <br><br>




</body>

</html>