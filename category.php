<?php 
  include("./inc/header.php");
  include("./inc/menu.php");

  
    if(isset($_GET['categoryID'])){
        $premenaGET = $_GET['categoryID'];
        $query = "SELECT * FROM posts JOIN category on (posts.kategoria_fk = category.id) WHERE kategoria_fk = $premenaGET";
        $result = $conn->query($query);
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        if(empty($rows)){
            echo "Error: " . $query . "<br>" . $conn->error;
            }
        } 
   else if (isset($_GET['tagID'])){
        $premenaGET = $_GET['tagID'];
        $query = "SELECT posts.id,nazov,nazov_obrazku,nazov_clanku FROM tags JOIN post_tags on (tags.id = post_tags.tag_fk) 
                        JOIN posts on (posts.id = post_tags.post_fk) WHERE post_tags.tag_fk = $premenaGET;";
        $result = $conn->query($query);
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        // print_r ($rows);
        // exit();
        if(empty($rows)){
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    } else {
        $query = "SELECT id, nazov_obrazku, nazov_clanku FROM posts";
        $result = $conn->query($query);
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    }
?>

<div class="container category-con">
    
        <h1>Articles</h1>
              
        <?php 
            if(isset($_GET['categoryID'])):
        ?>   
            <a class="category-back-arrow" href="discover_more.php"><i class="fas fa-long-arrow-alt-left"></i></a>
            <h3>Category: </h3>
            <p>
            <?=$rows[0]['nazov'];?>
            </p>
        <?php
            endif;
        ?>
        <?php 
            if(isset($_GET['tagID'])):
        ?>     
            <a class="category-back-arrow" href="discover_more.php"><i class="fas fa-long-arrow-alt-left"></i></a>
            <h3>Tag: </h3>
            <div class="category tags tags-boxes">
            <li><a href="#"><?= $rows[0]['nazov']?></a></li>
            </div>
        <?php
            endif;
        ?>
    <div class="list-of-articles">
        <?php 
            if($result->num_rows > 0)

                foreach($rows as $row):
        ?>
        <div class="choose-article">
         <a href="discover_more.php?clanokID=<?= $row['id']?>">
                <div class="choose-article-img">
                    <img src="img/<?= $row['nazov_obrazku'] ?>" alt="">
                </div>
                <span><?= $row['nazov_clanku'] ?></span>
            </a>
        </div>
        <?php 
            endforeach;
        ?>
    </div>
</div>


<?php 
    include("./inc/footer.php")
?>