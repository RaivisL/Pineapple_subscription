<?php
include __DIR__ . '/../models/db.php';
include __DIR__ . '/../controllers/functions.php';
deleteEmail();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Show subscribers</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    


    <div class="container">
        <div class="col-m-6">

        <h1>List of subscribers</h1>

        <div class="container">
            <label for="">Choose e-mail domain:</label>
            <div class='container'>
                <form action="show_subscribers.php" method="post">
                <input type="submit" class="btn btn-warning" name="allDomain" value="All domains" />
                </form>
                <?php
                domainButtons();
                ?>

            </div>
            <p></p>
            <div class="container">
                <label for="">Search an e-mail address:</label>
                <form action="show_subscribers.php" method="post">
                    <input type="text">
                    <input type="submit" value="Search">   
                </form>
            </div>
            <p></p>
            </div>
            <table>
                <tr>
                <th>
                    <form action="show_subscribers.php" method="post">
                    <input type="submit" class="btn btn-outline-secondary" name="dataByDate" value="Date" />
                    </form>
                </th>
                <th>
                    <form action="show_subscribers.php" method="post">
                    <input type="submit" class="btn btn-outline-secondary" name="dataByEmail" value="Email" />
                    </form>
                </th>
                <th>ID</th>
                </tr>

                <?php
                sortData();
                if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['allDomain'])) {
                    showDataByDate();

                }

                ?>
            </table>

                
            </div>
        <div class="container">
        <p></p>
        <label for="">To delete email address, select ID:</label>
        <form action='show_subscribers.php' method='post'>
            <select name="id" id="">    
                <?php showAllData(); ?>
            </select>
            <input type='submit' class='btn btn-outline-danger btn-sm' name='deleteButton' value='Delete'/>
        </form>
        
        </div>
    </div>
       
</body>
</html>