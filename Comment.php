<?php

// Function to set comment
function setComments($conn) {
    if (isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $conn->query($sql); 
    }
}

// Comments Appear in the Website
function getComments($conn) {
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comContainer'><p>";
            echo $row['uid'], "<br>";
            echo $row['date'], "<br>";
            echo nl2br($row['message']);
        echo "</p>

            <form class='edit-btn' method='POST' action='editcomment.php'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <input type='hidden' name='uid' value='".$row['uid']."'>
                <input type='hidden' name='date' value='".$row['date']."'>
                <input type='hidden' name='message' value='".$row['message']."'>
                <button>Respond/Edit</button>
            </form>
        </div>";
    } 
}

// Function to edit Comment
function editComments($conn) {
    if (isset($_POST['commentSubmit'])){
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
        $result = $conn->query($sql);
        header("Location: About.php");
    }
}

?>
