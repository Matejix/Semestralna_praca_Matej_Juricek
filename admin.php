<?php 
  include './inc/admin_main_settings.php';

?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zoo zu Admin</title>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
  <body>

  <div class="container">
    <div class="side-bar">
        <div class="logo">
            <img src="img/logo2.png" alt="">
        </div>
        <ul class="admin-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">About us</a></li>
            <li onclick="schovaj()"><a href="#">Discover_more</a></li>
            <li><a href="index.php">Back</a></li>
        </ul>
    </div>

    <div id="discover" class="table-of-posts">
    <a class="edit_link add" href="add.php">add</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Heading</th>
                <th></th>
            </tr>
            <?php 
                 $query = "SELECT id,nazov_clanku FROM posts";
                 $result = $conn->query($query);
                 if($result->num_rows > 0)
                 while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= $row['id']?></td>
                <td><?= $row['nazov_clanku']?></td>
                <td>
                    <a class="edit_link" href="edit.php?id_clanku=<?= $row['id'] ?>">edit</a>
                    <a class="delete" href="delete.php?id_clanku=<?= $row['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php
                endwhile;
            ?>
        </table>
    </div>
  </div>
   
    <script src="js/admin.js"></script>

  </body>
</html>