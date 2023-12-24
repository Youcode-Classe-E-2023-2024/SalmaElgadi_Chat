<?php
if(!isset($_SESSION['id_user'])){
    header("location:index.php?page=login");
}
?>


<form action="index.php?page=page1" method="POST">
    <button type="submit" name="logout">Logout</button>
</form>