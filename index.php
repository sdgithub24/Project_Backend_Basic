<!DOCTYPE html>
<html>
    <head>
        <title>Survey form</title>
    </head>
    <h1>Enter basic details</h1>
    <body bgcolor = "LightGray">
        <form action = 'connect.php' method = "POST">
            <label for ="user">Name:</label><br>
            <input type = 'text' name = 'name' id='name' required/> <br> <br>


            <label for ="user">Email:</label><br>
            <input type = 'email' name = 'email' id='email' required/> <br> <br>

            
            <input type = 'submit' name = 'submit' id='submit' required/>
        </form>

    </body>
</html>

