<?php 
require_once('/home/MAIN/egd1486/connection.db.php');
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

function sanitize($str, $length=50) {
    $str = trim($str);

    $str = htmlentities($str, ENT_QUOTES); //replace all unknown characters with string based entity codes 
    //ex < is replaced with &lt, prevents injections
    return substr($str, 0, $length);
}

if($mysqli)
{
    //if we are adding a new comment
    if(!empty($_POST['name']) && !empty($_POST['comment']))
    {
        $name = sanitize($_POST['name'], 30); //varchar(30)
        $comment = sanitize($_POST['comment'], 16777215); //medium text

        $stmt = $mysqli->prepare("INSERT INTO `finalComments` (`from`, `message`, `date`) VALUES (?, ?, now());");
        $stmt -> bind_param("ss", $name, $comment);
        $stmt -> execute();
        if($stmt -> error) {
            print($stmt->error);
        }
        $stmt -> close();
        header("Location: Comments.php"); //when a user reloads the page, the past input is not resubmitted
        exit();
    }
    // get contents of table
    $results = $mysqli->query("SELECT `from`, `message`, `date` FROM finalComments");
    if($results) {
        while($rowHolder = mysqli_fetch_array($results, MYSQLI_ASSOC))
        {
            $records[] = $rowHolder;
        }
    }
}
?>

<?php 
  require_once("assets/inc/header.inc.php");
?>

<main class="comments">
    <div class="input-form">
        <h3>What are your thoughts on the website?</h3>
        <form action="Comments.php" method="post">
            <section class="formError" id="errorBox"></section>
            <label for="firstName">First Name: </label>
            <input type="text" id="from" name="name" placeholder="Bob" required maxlength="30">

            <textarea placeholder="Thoughts?" id="message" name="comment" required></textarea>

            <input type="submit" id="submitButton" value="Post Comment">
        </form>
    </div>

    <div class="past-comments">
        <h3>Past Comments</h3>
        <?php 
        if(!empty($records))
        {
            foreach($records as $row)
            {
                // have htmlspecialchars so the css works... fixes inline rendering
                echo '<div contentEditable class="comment-box"><span class="name">' . htmlspecialchars($row['from']) . ': </span>' . htmlspecialchars($row['message']) . ' @ <span class="time">' . htmlspecialchars($row['date']) . '</span></div>';
            }
        }
        ?>
    </div>

    <script src="assets/script/comment.js"> </script>
</main>

<?php 
  require_once("assets/inc/footer.inc.php");
?>
