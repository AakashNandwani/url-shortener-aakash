<?php
    include "config.php";
    if(isset($_GET['delete'])){
        $sql3 = mysqli_query($conn, "DELETE FROM url");
        if($sql3){
            header("Location: ../");
        }else{
            header("Location: ../");
        }
    }else{
        header("Location: ../");
    }
?>