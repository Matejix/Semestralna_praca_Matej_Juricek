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
            <h1>Add Record</h1>
        <?php
            $status = "";
            if(isset($_POST['add']) && $_POST['add'] == 1)
            {
                $nazov_obrazku = $_POST['obrazok'];
                $nadpis = $_POST['nadpis'];
                $trn_date = date("Y-m-d H:i:s");
                $text = $_POST['clanok'];
                $autor = $_POST['autor'];
                $kategoria = $_POST['kategoria'];
                if(empty($nazov_obrazku) || empty($nadpis) || empty($text) || empty($autor) || empty($kategoria) ){
                    echo "<p class='deleted_report'>Please fill in the form.</p>";
                }else{
                    $add="INSERT INTO posts (nazov_obrazku, nazov_clanku, text, autor_fk, datum_vytvorenia, kategoria_fk) 
                    VALUES ('{$nazov_obrazku}', '{$nadpis}', '{$text}', {$autor}, '{$trn_date}', {$kategoria})";

                 if ($conn->query($add) === TRUE) {
                echo "<p class='added_report'>Record Added Successfully</p>";
              } else {
                echo "Error: " . $add . "<br>" . $conn->error;
                }
                    header("refresh:1; url=admin.php");
                }
            }
        ?>
            <div class="form-updating">
                <form name="form" method="post" action="" > 
                    <input name="add" type="hidden" value="1">
                    <p><input name="obrazok" type="file" style="color:white;"/></p>
                    <p><input name="nadpis" type="text" placeholder="Nadpis clanku" value="<?php if(isset($_POST['nadpis'])) {echo $_POST['nadpis'];}?>"/></p>
                    <label style="color:white;" for="">Napíšte článok:</label>
                    <p><textarea name="clanok" type="text" rows="20" cols="80" placeholder="Sem vlozte text"><?php if(isset($_POST['clanok'])) {echo $_POST['clanok'];}?></textarea></p>
                    <p><select name="autor"> 
                        <option value="1">Admin</option>
                        <option value="0">User/Admin</option>
                    </select></p>
                    <p><select name="kategoria"> 
                        <option value="1">Mammals</option>
                        <option value="2">Fish</option>
                        <option value="3">Insects</option>
                        <option value="4">Reptiles</option>
                    </select></p>
                        <p><input class="updt-butt" name="submit" type="submit" value="Add to database" /></p>
                </form>
            </div>
        </div>
    </body>
</html>