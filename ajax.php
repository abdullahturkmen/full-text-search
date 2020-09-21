<?php
require 'connect.php';

$kelime = $_POST['text'];

if(isset($kelime)){

    $query = $db->query("SELECT *, MATCH (title,code,content,description) AGAINST ('".$kelime."' IN NATURAL LANGUAGE MODE) AS score FROM products WHERE MATCH (title,code,content,description) AGAINST ('".$kelime."' IN NATURAL LANGUAGE MODE) ORDER BY score DESC limit 15", PDO::FETCH_ASSOC);
    if ( $query->rowCount() ){
        foreach( $query as $row ){
            echo "<li class='list-group-item'>".$row['title']."</li>";
        }
    }

}

?>
