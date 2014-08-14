<?php
require_once 'functions/function.php';

?>
<html>
    <body>
        <select>
            <option value="Category">Category</option>
                <?php
                    loopCategory();
                ?>
        </select>
    </body>
</html>