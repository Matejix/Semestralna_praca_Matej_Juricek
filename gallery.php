<?php 
  include("./inc/header.php");
  include("./inc/menu.php");
   ?>
 <div class="container">
            <div class="tags-boxes gallery-menu">
                <ul class="filter-menu">
                    <li class="animals all" data-target="all"><a href="#">all</a></li>
                    <li class="animals mammals" data-target="mammals"><a href="#">mammals</a></li>
                    <li class="animals fish" data-target="fish"><a href="#">the fish</a></li>
                    <li class="animals insects" data-target="insects"><a href="#">insects</a></li>
                    <li class="animals reptiles" data-target="reptiles"><a href="#">reptiles</a></li>
                    <li class="animals spiders" data-target="spiders"><a href="#">spiders</a></li>
                    <li class="animals arthropods" data-target="arthropods"><a href="#">arthropods</a></li>
                </ul>
            </div>

            <div class="gallery-photos">
                <a class="photo reptile" data-item="reptiles" data-fslightbox="gallery" href="img/chameleon.jpg"><img src="img/chameleon.jpg" alt=""></a> 
                <a class="photo mammal" data-item="mammals" data-fslightbox="gallery" href="img/deer.jpg"><img src="img/deer.jpg" alt=""></a> 
                <a class="photo insect" data-item="insects" data-fslightbox="gallery" href="img/dragonfly.jpg"><img src="img/dragonfly.jpg" alt=""></a> 
                <a class="photo fisha" data-item="fish" data-fslightbox="gallery" href="img/fish.jpg"><img src="img/fish.jpg" alt=""></a> 
                <a class="photo arthropod" data-item="arthropods" data-fslightbox="gallery" href="img/scorpion.jpg"><img src="img/scorpion.jpg" alt=""></a> 
                <a class="photo spider" data-item="spiders" data-fslightbox="gallery" href="img/tarantula.jpg"><img src="img/tarantula.jpg" alt=""></a> 
            </div>
</div>

<?php 
  include("./inc/footer.php")
?>
