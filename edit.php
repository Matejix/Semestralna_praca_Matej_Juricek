<?php
    include './inc/admin_main_settings.php';
    $id = $_GET['id_clanku'];
    $query = "SELECT * FROM posts WHERE id = $id";
    $result = $conn->query($query);
    $num_row = $result->num_rows;
    $row = $result->fetch_array();
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Edit article</title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>
        <div class="form-updated">
            <h1>Update Record</h1>
        <?php
            $status = "";
            if(isset($_POST['edit']) && $_POST['edit'] == 1)
            {
                $nazov_obrazku = $_REQUEST['obrazok'];
                $nadpis = $_REQUEST['nadpis'];
                $trn_date = date("Y-m-d H:i:s");
                $text = $_REQUEST['clanok'];
                $update='UPDATE posts SET datum_vytvorenia="'.$trn_date.'", nazov_obrazku="'. $nazov_obrazku.'", 
                    nazov_clanku="'.$nadpis.'", text="'.$text.'" WHERE id="'.$id.'"'; 

                    if ($conn->query($update) === TRUE) {
                        echo "<p class='updated_report'>Record Updated Successfully</p>";
                      } else {
                        echo "Error: " . $update . "<br>" . $conn->error;
                      }
                header("refresh:1; url=admin.php");
            }else {
        ?>
            <div class="form-updating">
                <form name="form" method="post" action="" > 
                    <input type="hidden" name="edit" value="1" />
                    <p><input name="obrazok" type="text" value="<?php echo $row['nazov_obrazku'];?>" /></p>
                    <p><input name="nadpis" type="text" value="<?php echo $row['nazov_clanku'];?>" /></p>
                    <p><textarea name="clanok" type="text" rows="20" cols="80" ><?php echo $row['text'];?></textarea></p>
                        <p><input class="updt-butt" name="submit" type="submit" value="Update" /></p>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </body>
    </html>