
<?php
require '../public/init.php';
require_once '../config/config.php';
?>
<html>

    <div>
        <div style="text-align: center;">
            <h1>This is the help website</h1>
            <p>Is you have any problem , please call our hotline</p>

            <span style="font-size: 40px; color: #ff6b35;"><?php echo $webtel?></span>

        </div>
    </div>
    <?php
    require_once "../include/foot.php"
    ?>
</html>
