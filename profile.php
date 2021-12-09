<?php
        include_once 'header.php';
?>

  <div class="bg-profile w-100 d-flex justify-content-center"> 
       <!-- Page content-->
        <div class="text-center w-100 h-100 d-flex justify-content-center align-items-center">
          <div class="hero-content mb-5">
            <div class="hero-text text-white mb-5 py-5 px-5 bg-opacity-50 bg-dark border border-white border-1"> 
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo '<h1 class="pb-2">Hello, ' . $_SESSION["useruid"] . ' !!! </h1>';
                    echo '<h5 class="pb-2">You are logged in!</h5>';
                }                
              ?> 
            </div><!--.hero-text-->            
          </div><!--.hero-content-->
        </div><!--.bg-white-->
  </div><!--.bg-home-->
  
<?php
        include_once 'footer.php';
?> 
        