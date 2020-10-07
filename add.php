<?php


?>

<!DOCTYPE html>
<html lang="en">


    <?php include('./templates/header.php'); ?>

    <section class="container gray-text">
        <h4 class="center">Add a Pizza</h4>
        <form class="white" action="" method="">
            <label>Your Email:</label>
            <input type="text" name="email">
            <label>Pizza Title:</label>
            <input type="text" name="Title">
            <label>Ingredients (comma separated):</label>
            <input type="text" name="ingrediets">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>


    <?php include('./templates/footer.php'); ?>
 

    
</body>
</html>