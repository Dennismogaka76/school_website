<?php
session_start();
$_SESSION['login']=="";
session_destroy();
session_unset();

?>
<script language="javascript">
alert('You have Succesfully Logged out');
document.location="index.php";
</script>
