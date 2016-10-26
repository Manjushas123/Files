<form action="page2.php" method="post">          

    <label for="rows">Number of Rows (Min 1, Max 10)</label>
    <input type="number" class="form-control" min="1" max="10"  value="" name="rows" required>

    <label for="columns">Number of Columns (Min 3, Max 10)</label>
    <input type="number" class="form-control" min="3" max="10" value="" name="columns" required>

    <input type="submit" name="submit2" value="Submit"/>
    <input type="hidden" name="method" value="post" /> 

</form>