<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <?php
        
           include_once './dbConnect.php';
                      
           $db = dbconnect();
           $column = 'corp';
           $order = 'ASC'; //DESC
           $stmt = $db->prepare("SELECT * FROM corps ORDER BY $column $order");

             $results = array();
             if ($stmt->execute() && $stmt->rowCount() > 0) {
                 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
             }
          
        ?>
        
                /* THIS INCLUDES THE TABLE FROM THE TEMPLATE PAGE */

                 <?php include './formPage1.php' ?>
                 <?php include './resultsTemplate.php' ?>
       
    </body>
</html>
