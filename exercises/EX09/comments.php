<?php 
require_once('/home/MAIN/egd1486/connection.db.php');

function sanitize($str, $length=50) {
    $str = trim($str); //gets rid of leading or trailing blank space
    $str = htmlentities($str, ENT_QUOTES); //gets rid of html entitites <, > etc
    return substr($str, 0, $length);
}

if($mysqli)
{
    //if we are adding a new user
    if(!empty($_GET['name']) && !empty($_GET['comment']))
    {
        $stmt = $mysqli->prepare("INSERT INTO `comments` (`from`, `message`, `date`) VALUES (?, ?, now());");
        $stmt -> bind_param("ss", $name, $comment);
        $name = sanitize($_GET['name'], 30);
        $comment = sanitize($_GET['comment'], 255);
        $stmt -> execute();
        $stmt -> close();
    }
    // get contents of table
    $results = $mysqli->query("SELECT `from`, `message`, `date` FROM comments");
    if($results) {
        while($rowHolder = mysqli_fetch_array($results, MYSQLI_ASSOC))
        {
            $records[] = $rowHolder;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Comments</title>
</head>
<body>
    <h2>What do you think?</h2>
    <ul>
        <?php 
        if(!empty($records))
        {
            foreach($records as $row)
            {
                // have htmlspecialchars so the css works... fixes inline rendering
                echo '<li><span class="name">' . htmlspecialchars($row['from']) . ': </span>' . $row['message'] . ' @ <span class="time">' . htmlspecialchars($row['date']) . '</span></li>';
            }
        }
        ?>
    </ul>
    <hr>

    <h2>What do you have to say?</h2>
    <form action="comments.php" method="get">
        First name: <input type="text" id="from" name="name">
         <textarea placeholder="say what?" id="message" name="comment"></textarea>
        <input type="submit" value="Add to the List">
    </form>
    <script src="script.js"> </script>
</body>
</html>