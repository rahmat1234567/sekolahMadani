<?php 
    if(isset($_POST['absval'])) {
        for($i = 0; $i < sizeof($_POST['absval']); $i++) {
            echo "siswa: ".$_POST['nisn'][$i].", ";
        }
    }
?>