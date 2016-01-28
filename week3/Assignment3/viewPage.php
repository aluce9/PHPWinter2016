<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
         
    </head>
    <body>
        <?php
        /*
         * include the data base connect file
         * and helper functions as if we are adding
         * the code on the page
         */
        include './dbconnect.php';
        include './functions.php';
        
        

        /*
         * get and hold a database connection 
         * into the $db variable
         */
        $db = getDatabase();

        /*
         * create a variable to hold the database
         * SQL statement
         */
        $stmt = $db->prepare("SELECT * FROM corps");

        /*
         * We execute the statement and make sure we
         * got some results back.
         */
       
        
       $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
       
        ?>
        
        <table>
            <thead>
                <tr>
                    <th>Corporation</th>
                    <th></th>
                </tr>
            </thead>
        
        
        
        
        
        
        

            
            <?php foreach ($results as $row): ?>
            <tr>
                <td> <?php echo $row['corp']; ?></td>
                <td> <a href="readPage.php?id=">Read</a></td>
                <td><a href="UpdatePage.php?id=<?php echo $row['id']; ?>">Update</a></td>
                <td> <a href="DeletePage.php?id=<?php echo $row['id']; ?>">Delete</a></td>
        
       
                
            </tr>
            
            
        
            <?php endforeach; ?>
            
            <a href="addNewCorp.php?id=<?php echo $row['id']; ?>">Add New Corporation</a>
        
               
           
        </table>
           
    </body>
</html>
