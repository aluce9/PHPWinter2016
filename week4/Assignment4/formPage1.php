<!-- USED TO COLLECT DATA -->

<form action="viewPage4.php" method="get">
    <fieldset>
        <legend>Sort Data</legend>
        
        <label>Ascending Order</label>  
        <input type="radio" name="ascending" value="sort" />
        <input type="radio" name="ascending" value="sort" checked="checked"/>
        
        <label>Descending Order</label>  
        <input type="radio" name="descending" value="sort" />
        <input type="radio" name="descending" value="sort" checked="checked"/>
        
        <label>Group By</label>  
        <select name="datatwo">
            <option value="id">ID</option>
            <option value="corp">Corporation</option>
            <option value="email">E-mail</option>
              <option value="owner">Owner</option>
              <option value="zipcode">Zip Code</option>
               <option value="phone">Phone Number</option>
                <option value="date">Date</option>
              
        </select>
        <input type="hidden" name="action" value="sort" />
        <input type="submit" value="Submit1" />
    </fieldset>    
</form>