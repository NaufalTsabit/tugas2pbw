<!DOCTYPE html>
<html>
<body>
<?php 
 header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=hasil-export.xls");
?>
<table>
  <tr>
    <th>Nama</th>
    <th>Komentar</th>
  </tr>
  <?php foreach ($data as $data) { ?>
  <tr>
    <td><?php echo $data['Name'];?></td>
    <td><?php echo $data['Comment'];?></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>