<?php
include './database/config.php';

$did = $_GET['post_id'];

  $query = "DELETE FROM causes WHERE cause_id='$did'";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {   

    echo "<script> 
    alert('Cause has been Deleted.');
    window.location.href='ngo_causes.php';
    </script>";
    

  }else{
    echo "<script>alert('Cannot Delete Cause');
      window.location.href='ngo_causes.php';
      </script>";
  }
?>