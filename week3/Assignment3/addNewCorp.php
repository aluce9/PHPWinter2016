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
    </head>
    <body>
        <?php
        include './dbconnect.php';
        include './functions.php';

        $results = '';

        if (isPostRequest()) {
            $db = getDatabase();

            /*
             * Notice we use the now function from MySql to add the date and time to the date column.  
             * The date column is a varchar but can also be a datetime format
             */
            $stmt = $db->prepare("INSERT INTO corps SET id = :id, corp = :corp, incorp_dt = :incorp_dt, email = :email,
                zipcode = :zipcode, owner = :owner, phone = :phone, date = now()");
            
             
                $corp = filter_input(INPUT_POST, 'corp');
                $email = filter_input(INPUT_POST, 'email');
                $zipcode = filter_input(INPUT_POST, 'zipcode');
                $owner = filter_input(INPUT_POST, 'owner');
                $phone = filter_input(INPUT_POST, 'phone');
            
            
        

            $binds = array(
                    
                    ":corp" => $corp,
                    ":email" => $email,
                    ":zipcode" => $zipcode,
                    ":owner" => $owner,
                    ":phone" => $phone,
            );

            /*
             * empty()
             * isset()
             */

            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = 'Data Added';
            }
        }
        ?>


        <h1><?php echo $results; ?></h1>

        <h1>Add a new Corporation</h1>
        <form method="post" action="#">            
             Corporation <input type="text" value="" name="corp" />
            <br />
            E-mail <input type="text" value="" name="email" />
            <br />  
            Zip Code <input type="text" value="" name="zipcode" />
            <br />
            Owner <input type="text" value="" name="owner" />
            <br />
            Phone Number <input type="text" value="" name="phone" />
            <br />
          
           
            <input type="submit" value="Submit" />
        </form>
        
        <p><a href="viewPage.php">View Data</a></p>
    </body>
</html>

