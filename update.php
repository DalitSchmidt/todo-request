<?php
require 'functions.php';

$task_id = $_GET['id'];
$task = getTask( $id );
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <form method="post" action="save.php">
            <input type="text" name="title" placeholder="Title" value="<?php echo $task['title']; ?>"><br>
            <input type="date" name="date" value="<?php echo $task['date']; ?>"><br>
            <textarea name="description" id="description" cols="30" rows="10"><?php echo $task['description']; ?></textarea><br>
            <button>Update</button>
        </form>
    </body>
</html>