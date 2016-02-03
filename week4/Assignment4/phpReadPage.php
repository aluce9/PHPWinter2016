<!--

********************************************************

RUN THE SQL FILE BEFORE YOU CONTINUE WITH THIS DEMO

********************************************************

-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

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
        
        $id = filter_input(INPUT_GET, 'id');
        
        
        $stmt = $db->prepare("SELECT * FROM corps WHERE id = :id");
        
        $binds = array(
                ":id" => $id
            );

        /*
         * We execute the statement and make sure we
         * got some results back.
         */
        $results = array();
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <h1>Date time results</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Corporation</th>
                    <th>E-mail</th>
                    <th>Owner</th>
                    <th>Zip Code</th>
                    <th>Phone Number</th>
                    <th>Date</th>
                </tr>
            </thead>
            <?php
            /*
             * Use a for each loop to go through the
             * associative array. $results is a multi 
             * dimensional array. Arrays with arrays.
             * 
             * So we loop through each result to get back
             * an array with values
             * 
             * feel free to 
             * <?php echo print_r($results); ?>
             * to see how the array is structured
             */ 
            
            
            /*
             * http://us.php.net/manual/en/function.date.php
             *  Desired Text            Code
                August 07, 2015         date("F d, Y",strtotime($myrow['date']));
                Friday, August 07, 2015	date("l, F d, Y",strtotime($myrow['date']));
                Aug 07, 2015            date("M d, Y",strtotime($myrow['date']));
                07 August 2015          date("d F Y",strtotime($myrow['date']));
                07 Aug 2015             date("d M Y",strtotime($myrow['date']));
                Fri, 07 Aug 2015	date("D, d M Y",strtotime($myrow['date']));
             */
            ?>
            
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['corp']; ?></td>
                    <td><?php echo $row['email']; ?></td> 
                    <td><?php echo $row['owner']; ?></td> 
                     <td><?php echo $row['zipcode']; ?></td>  
                     <td><?php echo $row['phone']; ?></td> 
                     <td><?php echo date("M d, Y",strtotime($row['incorp_dt'])); ?> </td>


                </tr>
            <?php endforeach; ?>
        </table>
        
        <p><a href="phpViewPage.php">Go Back</a></p>

    </body>
</html>



