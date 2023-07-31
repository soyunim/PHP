<html>
    <head></head>

    <body>
        <header>
            <h1><a href="http://localhost/php/index.php">HOME</a></h1>
        </header>

        <nav>
            <ul>
                <?php
                    echo file_get_contents("list.txt");
                ?>
            </ul>
        </nav>

        <article>
            <?php
                if( empty($_GET['id']) == false ){
                    echo file_get_contents($_GET['id'].'.txt');
                }
            ?>
        </article>  
    </body>
</html>