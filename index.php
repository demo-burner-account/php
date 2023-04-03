<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CD-test PHP + MySQL</title>
</head>

<body>
    <h1>CD-test PHP + MySQL</h1>
    <div class=".db-table">
        <table>
            <tr>
                <th>Version:</th>
            </tr>
            <?php
            $user = 'root';
            $pass = 'example';

            try {
                $dbh = new PDO('mysql:host=mysql-service;dbname=app', $user, $pass);
                foreach ($dbh->query('SELECT * from message') as $row) {
                    $html = "<tr><td>${row['id']}</td><td>${row['message']}</td></tr>";
                    echo $html;
                }
                $dbh = null;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            ?>
        </table>
    </div>
</body>

</html>
