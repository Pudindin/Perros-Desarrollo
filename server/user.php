
<?php

# https://www.daniweb.com/programming/web-development/tutorials/482414/separation-of-business-logic-and-presentation-logic-for-non-oop;

$dbsn = 'mysql:host=localhost;dbname=grupo_i';
$username = 'iic3143';
$password = 'iic3143';
try {
    $db_con = new PDO($dbsn, $username, $password);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
    echo $e->getMessage();
} 

function get_items($db_con,$query){
    if($db_con){
        try{
        $db= $db_con->prepare($query);
        $db->execute();
        $row_count = $db->rowCount();
        $result = $db->fetchAll();
        return array($result,$row_count);
    }
    catch(PDOException $e) {
                return false;
            }
    }
    else{
        return false;
    }
}

?>

