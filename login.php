<?php
        include_once 'header.php';
?>

            <!-- Page content-->
            <div class="container">
                <div class="text-center mt-5">
                    <h1>LOG IN</h1>
                    <p class="lead">If you have an account with us, please login below!</p>
                </div>

                <div id="form-wrapper" class="mx-auto mt-4 w-50 py-4 px-4 bg-secondary bg-opacity-10">
                    <form action="includes/login.inc.php" method="POST">
                    <div class="mb-3">
                            <label for="InputName" class="form-label">Username / Email</label>
                            <input type="text" class="form-control" name="uid">                            
                        </div>    
                        <div class="mb-3">
                            <label for="InputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pwd">
                        </div>                       
                        <div class="text-center w-100 mx-auto">
                        <button type="submit" name="submit" class="btn btn-secondary text-center">Log In</button>
                        </div>
                    </form>
                </div><!--#form-wrapper-->

                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p class='text-center'>Fill in all fields!</p>";
                        }
                        elseif ($_GET["error"] == "wronglogin") {
                            echo "<p class='text-center'>Incorrect login!</p>";
                        }
                        elseif ($_GET["error"] == "wrongpassword") {
                            echo "<p class='text-center'>Incorrect password!</p>";
                        }                        
                    }
                ?>

            </div><!--.container-->

<?php
        include_once 'footer.php';
?> 
