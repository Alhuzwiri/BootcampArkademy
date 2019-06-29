<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Daftar Hobie</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <div class="container">
        <form action="add.php" method="POST" role="form">
            <legend>Input Hobie</legend>
        
            <div class="form-group">
                
                <input type="text" class="form-control" id="nama" placeholder="nama">
                <br>
                <input type="text" class="form-control" id="kategori" placeholder="Kategori">
                <br>
                <input type="text" class="form-control" id="hobi" placeholder="Hobi">
            </div>
            <button type="submit" class="btn btn-primary">Save</button> 
        </form>
    </div>
</body>
</html>

<?php
     if(isset($_POST['Submit'])) {
        $name = $_POST['nama'];
        $kategori = $_POST['Kategori'];
        $hobi = $_POST['Hobi'];
        // include database connection file
        include_once("config.php");
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO Kategori('name') VALUES('sss')");
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</?php

