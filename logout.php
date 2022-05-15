<?php
session_start();
session_destroy();
echo "<script>
alert('Logging you out!');
window.location.href='index'; 
</script>";
?>