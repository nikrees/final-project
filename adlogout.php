<?php
session_start();
session_destroy();
header("location:alog.php?mes=you are logout.");
?>