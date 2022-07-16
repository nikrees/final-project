<?php
session_start();
session_destroy();
header("location:1st.php?mes=you are logout");
?>