//localhost/php/index.php?id=1
//localhost/php/index.php?id=2

<?php
    echo file_get_contents($_GET['id'].'.txt');
?>