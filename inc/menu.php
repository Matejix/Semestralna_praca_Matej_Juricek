<div class="wrapper">
      <div class="button-menu-wrapper">
        <button class="hamburger" type="button" id="hamburger-button">
          <span class="hamburger-line top-left"></span>
          <span class="hamburger-line middle"></span>
          <span class="hamburger-line bottom-right"></span>
        </button>
      </div>
      
      <div class="side-menu">
        <ul class="menu">

          <?php 
              if(isset($_SESSION['logged'])){
                echo '<li class="menu-item login"><a href="logout.php">logout</a></li>';
              }else{
                  echo '<li class="menu-item login"><a href="login.php">Login</a></li>';
              }
          ?>

            <li class="menu-item"><a href="index.php">Home</a></li>
            <li class="menu-item"><a href="about_us.php">About</a></li>
            <li class="menu-item"><a href="gallery.php">Gallery</a></li>

            <?php 
              if(isset($_SESSION['logged']) && $_SESSION['isAdmin'] == '1'){
                echo '<li id="admin" class="menu-item"><a href="admin.php">Admin</a></li>';
              }
            ?>

        </ul>
      </div>
      <div class="side-menu-shade"></div>

      <div class="wrapper-middle-lines"></div>
        <div class="logo">
          <a href="index.php"><img src="./img/logo2.png" alt="Logo Zoo zu" /></a>
      </div>