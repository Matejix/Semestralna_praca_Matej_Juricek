<?php 
    include("./inc/header.php");
    include("./inc/menu.php");
?>
    <div class="container discover">
        <div class="side-bars">
            <div class="side-bars-links">
                <div class="recent-posts">
                    <h2 class="side-bars-headings">Recent posts</h2>
                        <ul>

                        <?php 
                            $query = "SELECT id, nazov_obrazku, nazov_clanku FROM posts ORDER BY datum_vytvorenia desc limit 3";
                            $result = $conn->query($query);
                            if($result->num_rows > 0)
                            while ($row = $result->fetch_assoc()):
                        ?>

                            <li>
                                <img src="./img/<?= $row['nazov_obrazku']?>" alt="<?= $row['nazov_clanku']?>">
                                <a href="discover_more.php?clanokID=<?= $row['id']?>"><?= $row['nazov_clanku']?></a>   
                            </li>

                        <?php 
                            endwhile;
                        ?>

                        </ul>
                </div>
                <div class="discover-more-tags-links">
                    <div class="categories">
                        <h2 class="side-bars-headings">Categories</h2>
                            <ul>

                            <?php 
                                $query = "SELECT * FROM category";
                                $result = $conn->query($query);
                                if($result->num_rows > 0)
                                while ($row = $result->fetch_assoc()):
                            ?>

                            <li><i class="fas fa-angle-right"></i><a href="category.php?categoryID=<?= $row['id']?>"><?= $row['nazov']?></a></li>
                            
                            <?php 
                                endwhile;
                            ?>

                            </ul>
                    </div>
                    <div class="tags">
                        <h2 class="side-bars-headings">Tags</h2>
                            <div class="tags-boxes">
                                <ul>

                                    <?php 
                                    $query = "SELECT * FROM tags";
                                    $result = $conn->query($query);
                                    if($result->num_rows > 0)
                                    while ($row = $result->fetch_assoc()):
                                ?>

                                    <li><a href="category.php?tagID=<?= $row['id']?>"><?= $row['nazov']?></a></li>
                                
                                <?php 
                                    endwhile;
                                ?>

                                </ul>
                            </div>
                    </div>
                </div>
            </div>
            <?php 
                $id = 1;
                if(isset($_GET['clanokID'])){
                    $id = $_GET['clanokID'];
                }
                $query = "SELECT * FROM posts WHERE id = $id";
                $result = $conn->query($query);
                $clanok = $result->fetch_array();
            ?>
        </div>
        <div class="main-article">
            <img src="./img/<?= $clanok['nazov_obrazku'] ?>" alt="obrazok zirafy" />
                <h1><?= $clanok['nazov_clanku'] ?></h1>
                    <p>
                        <?= nl2br($clanok['text']) ?>   
                    </p>
                <div class="tags">
                    <div class="tags-boxes">
                        <ul>

                        <?php 
                            $query = "SELECT * FROM post_tags JOIN tags on (post_tags.tag_fk = tags.id) WHERE post_fk = $id";
                            
                            $result = $conn->query($query);
                            if($result->num_rows > 0)
                            while ($row = $result->fetch_assoc()):
                        ?>

                            <li><a href="category.php?tagID=<?= $row['id'] ?>"><?= $row['nazov'] ?></a></li>

                        <?php 
                            endwhile;
                        ?>

                        </ul>
                    </div>
                </div>

                        <?php 
                        $query = "SELECT comment.id,meno_priezvisko,koment,autor_id FROM comment JOIN users on (comment.autor_id = users.id) WHERE clanok_id = $id";
                        $result = $conn->query($query);
                        ?>

                <div class="comments-section" id="commentars">
                    <!-- skratka na echo -->
                    <h2><span><?=$result->num_rows ?></span> Comment</h2>

                    <?php 
                         if($result->num_rows > 0)
                         while ($row = $result->fetch_assoc()):
                    ?>

                    <div class="comment">
                        <img src="./img/profile_picture.png" alt="obrazok komentujuceho">
                        <div class="the_comment">
                            <h4>

                                <?php 
                                    echo $row['meno_priezvisko'];
                                ?>

                            </h4>
                            <p>

                                <?php 
                                    echo $row['koment'];
                                ?>

                            </p>
                        </div>
                        <?php 
                            if(($row['autor_id'] === $_SESSION['loggedID']) || $_SESSION['isAdmin']):
                        ?>
                            <div class="comment-UD">
                                <a class="edit_link" href="comments/edit.php?commentID=<?= $row['id'] ?>&clanokID=<?= $id?>">edit</a>
                                <a class="delete" href="comments/delete.php?commentID=<?= $row['id'] ?>&clanokID=<?= $id?>" onclick="return confirm('Naozaj chcete vymazať?')"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        <?php 
                            endif;
                        ?>
                    </div>

                    <?php 
                        endwhile;
                    ?>

                </div>

                    <?php 
                        if(isset($_SESSION['logged'])):
                    ?>

                <div class="answer-formular">
                    <h2>Leave a Comment</h2>
                    <form action="./inc/db_data.php" method="POST">
                        <textarea name="comment" id="comment" cols="40" rows="8" placeholder="Comment" ></textarea>
                        <input type="hidden" name="clanokID" id="clanokID" value="<?= $id ?>">
                        <button class="submit" type="submit" name="submit">Send</button>
                    </form>
    
                </div>
                    
                <?php 
                    endif;
                ?>

            </div>
    </div>

<?php 
    include("./inc/footer.php")
?>