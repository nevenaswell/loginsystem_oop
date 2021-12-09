<?php
        include_once 'header.php';
?>

            <!-- Page content-->
            <div class="container">
                <div class="text-center mt-5">
                    <h1>SIGN UP</h1>
                    <p class="lead">Register now and enjoy all the benefits as a member!</p>
                </div>

                <div id="form-wrapper" class="mx-auto mt-4 w-50 py-4 px-4 bg-secondary bg-opacity-10">
                    <form action="includes/signup.inc.php" method="POST">
                    <div class="mb-3">
                            <label for="InputName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name">                            
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label">Email address</label>
                            <input type="text" class="form-control" name="email">                            
                        <div class="mb-3">
                            <label for="InputUid" class="form-label">Username</label>
                            <input type="text" class="form-control" name="uid">
                        </div>
                        <div class="mb-3">
                            <label for="InputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pwd">
                        </div> 
                        <div class="mb-3">
                            <label for="InputPassword" class="form-label">Repeat Password</label>
                            <input type="password" class="form-control" name="pwdrepeat">
                        </div>                       
                        <div class="text-center w-100 mx-auto">
                        <button type="submit" name="submit" class="btn btn-secondary text-center">Sign Up</button>
                        </div>
                    </form>
                </div><!--#form-wrapper-->

                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p class='text-center'>Fill in all fields!</p>";
                        }
                        elseif ($_GET["error"] == "invaliduid") {
                            echo "<p class='text-center'>Choose a proper username!</p>";
                        }
                        elseif ($_GET["error"] == "invalidemail") {
                            echo "<p class='text-center'>Choose a proper email!</p>";
                        }
                        elseif ($_GET["error"] == "passwordsdontmatch") {
                            echo "<p class='text-center'>Passwords don't match!</p>";
                        }
                        elseif ($_GET["error"] == "stmtfailed") {
                            echo "<p class='text-center'>Something went wrong, try again!</p>";
                        }
                        elseif ($_GET["error"] == "uidtaken") {
                            echo "<p class='text-center'>Usermane already taken!</p>";
                        }
                        elseif ($_GET["error"] == "none") {
                            echo "<p class='text-center'>You have successfully signed up!</p>";
                        }
                    }
                ?>
                
            </div><!--.container-->

<?php
        include_once 'footer.php';
?> 
