    <?php
        $dsn = 'mysql:host=localhost;dbname=bancoLocadora';
        $user = 'root';
        $pass = '';

        $connection = new PDO($dsn, $user, $pass);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>