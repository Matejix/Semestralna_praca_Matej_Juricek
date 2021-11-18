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
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Discover_more</a></li>
            <li><a href="index.php">Back</a></li>
        </ul>
    </div>

    <div class="table-of-posts">
        <table>
            <tr>
                <th>ID</th>
                <th>Heading</th>
                <th></th>
            </tr>
            <tr>
                <td>1</td>
                <td>Nadpis</td>
                <td>
                    <a class="edit_link" href="#">edit</a>
                    <a class="delete" href="#"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nadpis2</td>
                <td>
                    <a class="edit_link" href="#">edit</a>
                    <a class="delete" href="#"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        </table>
    </div>
  </div>
   
  </body>
</html>