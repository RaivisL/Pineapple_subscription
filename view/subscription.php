<?php
include __DIR__ . '/../controllers/functions.php';
addEmail();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Subscription form</title>
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="subscription.php" method="post">
                <div class="form-group">
                    <label for="submit_email">E-mail address:</label>
                    <input type="text"  class="form-control" name="userEmail" placeholder="Type your email address here...">
                    
                
                    
                </div>
                <p></p>
                <input name="button1" type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
    
    
</body>
</html>