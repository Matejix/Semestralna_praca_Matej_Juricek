<?php 
  include("./inc/header.php");
  include("./inc/menu.php");
    $fault_alert="";

    if(isset($_POST['submit-login'])){
        $username = $conn->real_escape_string( $_POST['username']);
        $password = $conn->real_escape_string( $_POST['password']);
        if(empty($username) || empty($password)){
            $fault_alert = "Nezadal si meno alebo heslo!";
        }
        else{
            $query = 'SELECT id, admin FROM users WHERE meno = "'. $username .'" AND heslo = "'. md5($password) .'"';
            $result = $conn->query($query);
            if($result->num_rows > 0){
                $user = $result->fetch_array();
                $_SESSION['logged'] = true;
                $_SESSION['loggedID'] = $user['id'];
                $_SESSION['isAdmin'] = $user['admin'];
                if( $_SESSION['isAdmin'] == '1'){
                    header("Location: ./admin/admin.php");
                }else{
                    header("Location: index.php");
                }
            } else{
                $fault_alert = "Nesprávne meno alebo heslo!";
            }
        }
    }

?>
    <div class="login-box">
        <div class="profile-icon">
            <i class="far fa-user"></i>
        </div>
        
        <?php 
            echo $fault_alert;
        ?>
        <form action="login.php" method='POST' onsubmit="return checkLoginForm(this)">
            <div class="login-input">
                <i class="fas fa-user"></i>
                <input type="text" name="username" id="username" placeholder="Username">
                
            </div>

            <div class="login-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>

            <a class="login-register-link" href="#">Not registered yet?</a>
            <button class="submit" type="submit" name="submit-login">Login</button>
        </form>
    </div>

    <div class="login-box register not-registered hidden">
    <span class="register-close">X</span>
        <h2>Register formular </h2>
        <form name="register" action="#">
            <div class="login-input">
                <i class="fas fa-user"></i>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>

            <div class="login-input">
                <i class="fas fa-user"></i>
                <input type="text" name="username" id="username" placeholder="Name and surname" required>
            </div>

            <div class="login-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password-register" placeholder="Password" required>
            </div>

            <div class="login-input">
                <i class="fas fa-key"></i>
                <input type="password" name="password" id="password-again" placeholder="Again password" required>
            </div>

            <div class="login-input">
                <i class="fas fa-at"></i>
                <input type="email" name="email" id="email" placeholder="email@...com" required>
            </div>
            
            
            <div class="register-question">
                <label for="">Answer on question <i class="far fa-question-circle"> <div class="register-side-info visually-hidden">
                    This question is for validation of your profile.
                </div></i></label>
                
                <label for="">"Random question"</label>
                <input type="text" name="question" id="question" placeholder="Your answer" required>
            </div>
            <button class="submit" type="submit" name="submit-register" onclick="empty()">Register</button>
        </form>
    </div>
<?php 
  include("./inc/footer.php")
?>