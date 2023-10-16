
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Form</title> 
    </head> 
   
    <body> 
          
        <!-- form tag to create form --> 
        <form  method = "post"> 
              
            Author : <input type = "text" name = "author"
                placeholder = "Author's Name" /> 
                  
            <br><br> 
              
            Number of published Article : <input type = "number" 
                name="num_article" placeholder="Published Article"/> 
              
            <br><br> 
              
            <input type = "submit" name = "submit" value = "Submit"> 
        </form> 
          
        <!-- script to check form submission --> 
        <?php
            if (isset($_POST['submit'])) { 
                echo "GeeksforGeeks"; 
            } 
        ?>
    </body> 
</html>