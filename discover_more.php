<?php 
  include("./inc/header.php");
  include("./inc/menu.php");

  
  if(isset($_POST["submit"]) && !empty($_POST["author"]) 
  && !empty($_POST["email"]) && !empty($_POST["comment"]))
  {
    print_r($_POST);
  }
?>

            <div class="container discover">
                <div class="side-bars">
                    <div class="search-bar shadow-boxes">
                        <input type="text" placeholder="Search..">
                    </div>
                        <div class="side-bars-links">
                            <div class="recent-posts">
                                <h2 class="side-bars-headings">Recent posts</h2>
                                <ul>
                                    <li>
                                        <img src="./img/home_picture.jpg" alt="Zirafa">
                                    <a href="#">Giraffa reticulata</a>   
                                    </li>
                                    <li>
                                        <img src="./img/home_picture.jpg" alt="Zirafa">
                                        <a href="#">Giraffa reticulata</a>    
                                    </li>
                                    <li>
                                        <img src="./img/home_picture.jpg" alt="Zirafa">
                                        <a href="#">Giraffa reticulata</a>   
                                    </li>
                                </ul>
                            </div>
                            <div class="discover-more-tags-links">
                                <div class="categories">
                                    <h2 class="side-bars-headings">Categories</h2>
                                    <ul>
                                        <li><i class="fas fa-angle-right"></i><a href="">Mammals</a></li>
                                        <li><i class="fas fa-angle-right"></i><a href="">The fish</a></li>
                                        <li><i class="fas fa-angle-right"></i><a href="">Insects</a></li>
                                        <li><i class="fas fa-angle-right"></i><a href="">Reptiles</a></li>
                                    </ul>
                                </div>
                                <div class="tags">
                                    <h2 class="side-bars-headings">Tags</h2>
                                    <div class="tags-boxes">
                                        <ul>
                                            <li><a href="">mammals</a></li>
                                            <li><a href="">the fish</a></li>
                                            <li><a href="">insects</a></li>
                                            <li><a href="">reptiles</a></li>
                                            <li><a href="">spiders</a></li>
                                            <li><a href="">arthropods</a></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                   
                   
                </div>
                <div class="main-article">
                    <img src="./img/home_picture.jpg" alt="obrazok zirafy" />
                    <h1>Giraffa reticulata</h1>
                    <p>
                        Its name is derived from reddish-brown spots covering the body and legs and separated by a white net. 
                        It is 6 m high, 3 meters long, weighs about 1,500 kg. It has a very long (45 - 50 cm) 
                        and a strong tongue colored purple reaches it up to the nose. He has small horns on his head, 
                        which are 15 cm. It feeds on leaves and grass. 
                        He has a good sense of smell. It runs fast up to 50 km / h.
                    </p>
                        <p>
                            Their neck is up to 2.4 meters, but the number of vertebrae in them is the same as us.
                            They can close it so that ants don't get in it and the sand doesn't blow during sandstorms.
                            Scientists have uncovered another of their secrets. Apparently there is not just one species of giraffe with nine subspecies, but four separate species of giraffes.
                            He lives in Africa, Somalia, Kenya and Ethiopia. They are bred in many zoos, in the Czech Republic, for example. in the Brno Zoo.
                        </p>

                    <div class="comments-section">
                        <h2><span>1</span> Comment</h2>
                        <div class="comment">
                            <img src="./img/profile_picture.png" alt="obrazok komentujuceho">
                            <div class="the_comment">
                                <h4>Admin</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi itaque rem, alias, perferendis a blanditiis earum ipsam nemo, veniam tempora excepturi! Repudiandae expedita ipsa ducimus reiciendis, facere eaque impedit sint.
                                </p>

                                <a href="#">Reply</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="answer-formular">
                        <h2>Leave a Comment</h2>
                        <form method="POST">
                            <div class="contact-inputs">
                                <input type="text" id="name" name="author" placeholder="Full Name" required>
                                <input type="email" placeholder="Email" id="email" name="email" required>
                            </div>
                            <textarea name="comment" id="message" cols="40" rows="8" placeholder="Comment" required></textarea>
                            <button class="submit" type="submit" name="submit">Send</button>
                        </form>
                    </div>
                </div>
               
            </div>

<?php 
  include("./inc/footer.php")
?>