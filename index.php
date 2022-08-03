<?php
require "header.php"
?>

<main>
    <?php
    if(isset($_SESSION['userId'])){
        echo '<div class="mx-auto alert alert-info" role="alert" style="margin-top: 10px; width: 200px;">
        you are logged in!</div>';
    }
    else {
        echo '<div class="mx-auto alert alert-info" role="alert" style="width: 200px;">
        you are logged out!</div>';
    }
    ?>




</main>



<?php
require "footer.php"
?>
