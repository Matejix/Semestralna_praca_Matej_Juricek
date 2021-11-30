<?php 
  include '../inc/main_settings.php';
  ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title><?= ucfirst(basename($_SERVER['REQUEST_URI'], ".php"))?> comment</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        <div class="form-updated">
            <h1>Delete</h1>
    <?php
        $id=$_REQUEST['commentID'];
        $clanokID=$_REQUEST['clanokID'];
        $query = "DELETE FROM comment WHERE id=$id"; 
        if ($conn->query($query) === TRUE) {
            echo "<p class='deleted_report'>Comment Deleted Successfully</p>";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
            header("refresh:1.5; url=../discover_more.php?clanokID=$clanokID#commentars");
    ?>

        </div>
    </body>
    </html>