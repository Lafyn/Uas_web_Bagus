<?php require 
"includes/config.php"; 
require "includes/function.php"; 
?> 

<!doctype html> 
<html lang="en"> 

<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Daftar Kuliner</title> 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dataTables/dataTables.bootstraps.js">
    <link rel="stylesheet" href="assets/js/main.js">
    <link rel="stylesheet" href="assets/css/style.css">
</head> 

<body> 

    <div style="text-align: center;"> 
        <?php require "includes/navbar.php" ?> 
        <hr> 
    </div> 

    <div align="center"> 
        <?php require "includes/konten.php" ?> 
    </div> 

    <footer style="margin-top: 3em; text-align: center;"> 
        <hr> 
        Pemrograman Web 1 @ <?= date("Y") ?> 
    </footer> 
    <script src="assets/jquery/jquery-3.7.1.js"></script>
            <script src="assets/datatables/dataTables.js"></script>
            <script src="assets/js/bootstrap.bundle.min.js"></script>
            <script src="assets/dataTables/dataTables.bootstraps.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="assets/css/style.css"></script>
            <script>
                new DataTable('#example');
            </script>
</body>  
</html>
