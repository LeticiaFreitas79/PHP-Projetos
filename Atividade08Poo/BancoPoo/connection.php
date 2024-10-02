    <?php
        $dsn = 'mysql:host=localhost;dbname=locadora';
        $user = 'root';
        $pass = '';

        $connection = new PDO($dsn, $user, $pass);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>