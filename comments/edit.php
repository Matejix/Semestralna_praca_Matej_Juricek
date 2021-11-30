<?php
    include '../inc/main_settings.php';
    $id = $_REQUEST['commentID'];
    $clanokID = $_REQUEST['clanokID'];
    $query = "SELECT * FROM comment WHERE id = $id";
    $result = $conn->query($query);
    $num_row = $result->num_rows;
    $row = $result->fetch_array();
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
            <h1>Edit Comment</h1>
        <?php
            $status = "";
            if(isset($_POST['edit']) && $_POST['edit'] == 1)
            {
                $komentar = $_REQUEST['koment'];
                $update='UPDATE comment SET koment="'. $komentar .'" WHERE id="'.$id.'"'; 

                    if ($conn->query($update) === TRUE) {
                        echo "<p class='updated_report'>Record Updated Successfully</p>";
                      } else {
                        echo "Error: " . $update . "<br>" . $conn->error;
                      }
                header("refresh:1; url=../discover_more.php?clanokID=$clanokID#commentars");
            }else {
        ?>
            <div class="form-updating">
                <form name="form" method="post" action="" > 
                    <input type="hidden" name="edit" value="1" />
                    <p><textarea name="koment" type="text" rows="20" cols="80" ><?php echo $row['koment'];?></textarea></p>
                        <p><input class="updt-butt" name="submit" type="submit" value="Update" /></p>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </body>
    </html>