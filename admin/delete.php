<?php
    include '../inc/admin_main_settings.php';
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title><?php echo ucfirst(basename($_SERVER['REQUEST_URI'], ".php"))?> article</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        <div class="form-updated">
            <h1>Delete Record</h1>
    <?php
        $id=$_REQUEST['id_clanku'];
        $query = "DELETE FROM posts WHERE id=$id"; 
        if ($conn->query($query) === TRUE) {
            echo "<p class='deleted_report'>Record Deleted Successfully</p>";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
            header("refresh:0.5; url=admin.php");
    ?>

        </div>
    </body>
    </html>