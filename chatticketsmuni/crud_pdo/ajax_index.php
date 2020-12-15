<?php
                // incluye la conexión
                include_once('connection.php');
                //echo $_SESSION['privilegio'];

                $database = new Connection();
                $db = $database->open();
                $array = [];
                try {
                    $sql = 'SELECT * FROM members';
                        foreach ($db->query($sql) as $row) {
                             array_push($array, $row['estado']);

                    }
                    echo json_encode($array);
                } catch (PDOException $e) {
                    echo "There is some problem in connection: " . $e->getMessage();
                }

                //cerrar conexión
                $database->close();

?>