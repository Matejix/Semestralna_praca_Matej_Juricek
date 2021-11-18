    <?php
        session_start();

        $conn = mysqli_connect("localhost", "root", "", "zoozu");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $author = $_SESSION['loggedID'];
        $comment = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['comment']));
        $clanokID =htmlspecialchars(mysqli_real_escape_string($conn, $_POST['clanokID']));

        if(empty($comment)){
            header('Location: ../discover_more.php#commentars');
            die();
        }
        // Performing insert query execution
        // here our table name is college

        $sql = "INSERT INTO comment (autor_id, koment, clanok_id) VALUES ('$author', '$comment', '$clanokID')";
          
        if(mysqli_query($conn, $sql)){
            header('Location: ../discover_more.php?clanokID='.$clanokID.'#commentars');

        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    ?>