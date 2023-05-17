<div class="wrap">
    <form method="POST" action="options.php">
    <?php
    settings_fields('hpg');
    ?>
    <label>Heading title</label>
    <br>
    <input type="text" name="home_page_heading" value="<?= get_option('home_page_heading')?>">
    <br>
    <label>Subheading title</label>
    <br>
    <input type="text" name="home_sub_heading" value="<?= get_option('home_sub_heading')?>">
    <br>
    <label for="favcolor">Select your NavBar color:</label>
    <br>
   <input type="color"  name="nav_bar_color" value="<?= get_option('nav_bar_color')?>"><br><br>
    
    <?= submit_button()?>

    </form>


</div>