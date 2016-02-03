






 <h1>Client Database</h1>
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
        
 <p><a href="viewPage4.php">Go Back</a></p>

    </body>
</html>




<!-- <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Data One</th>
            <th>Data Two</th>
        </tr>
    </thead>
    <tbody>
       
        <?php foreach($results as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['corp']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['owner']; ?></td> 
                <td><?php echo $row['zipcode']; ?></td> 
                <td><?php echo $row['phone']; ?></td> 
                <td><?php echo $row['date']; ?></td> 



            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

-->