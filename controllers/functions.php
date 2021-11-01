<?php
include __DIR__ . '/../models/db.php';

function addEmail()
{
    if (isset($_POST['button1'])) {
        $userEmail = $_POST['userEmail'];
        if ($userEmail == "") {
            echo "Email address is required";
        } else if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            echo "Please provide a valid e-mail address";
        } else if (substr($userEmail, -3) == ".co") {
            echo "We are not accepting subscriptions from Colombia emails";
        // } else if (!isset($_POST['checkbox']) == false) {
        //     echo "You must accept the terms and conditions";
        } else {
            global $connection;
            $query = 'INSERT INTO emails(userEmail) ';
            $query .= "VALUES ('$userEmail')";
            $result = mysqli_query($connection, $query);
            if (!$result) {
                die('Query failed!' . mysqli_error($connection));
            } else {
                header("Location: thank_you.html");
            }
        }
    }
}

function showAllData()
{
    global $connection;
    $query = 'SELECT * FROM emails';
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query failed!' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value = '$id' >$id</option>";
    }
}

function deleteEmail()
{
    if (isset($_POST['deleteButton'])) {
        global $connection;
        $id = $_POST['id'];
        $query = "DELETE FROM emails ";
        $query .= "WHERE id = $id ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query failed!' . mysqli_error($connection));
        }
    }
}


function showDataByDate()
{
    global $connection;
    $query = 'SELECT * FROM emails ORDER BY date';
    global $result;
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query failed!' . mysqli_error($connection));
    }
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"] . "</td><td>" . $row["userEmail"] . "</td><td>" . $row["id"] . "</td></tr>";
    }
}

function domainButtons()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['allDomain'])) {
        showDataByDate();
    }
    global $connection;
    $query = 'SELECT * FROM emails';
    global $result;
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query failed!' . mysqli_error($connection));
    }
    $emailArray = array();
    while ($clientEmail = $result->fetch_assoc()) {
        array_push($emailArray, strstr($clientEmail['userEmail'], '@'));
    }
    $uniqDomains = array_unique($emailArray, SORT_LOCALE_STRING);
    echo "<table><tr>";
    foreach ($uniqDomains as $key => $value) {

        echo "<form action='show_subscribers.php' method='post'>
            <input type='submit' class='btn btn-outline-warning' name='{$value}' value='{$value}' margin=5px/>
            </form>";
    }
    echo "</tr></table>";
}

function showDataByEmail()
{
    global $connection;
    $query = 'SELECT * FROM emails ORDER BY userEmail';
    global $result;
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query failed!' . mysqli_error($connection));
    }
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"] . "</td><td>" . $row["userEmail"] . "</td><td>" . $row["id"] . "</td></tr>";
    }
}

function sortData()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dataByDate'])) {
        showDataByDate();
    } else if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dataByEmail'])) {
        showDataByEmail();
    } else {
        showDataByDate();
    }
}


?>