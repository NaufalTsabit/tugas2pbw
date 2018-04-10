<?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=hasil-export.xls");
  foreach ($data as $data) { 
    echo $data['Name'];
    echo $data['Comment'];
  }
?>