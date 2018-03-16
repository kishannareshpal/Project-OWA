<?php

  $scRaw=$_GET['sc'];
  $sc = $scRaw." Classe";

  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

  $sql = "SELECT CONCAT(p.first_name, ' ', p.last_name) as fullname, p.id, p.first_name, p.last_name, p.username, p.password, p.grade FROM profiles as p WHERE p.grade='".$sc."'";
  $qe = mysqli_query($conn, $sql);

  // var_dump($row['prim_trim']);
  while($row = mysqli_fetch_assoc($qe)) {
?>
    <tr>
      <td ><?php echo $row['fullname'] ?></td>
      <td onclick="plsremove(this)" class="center aligned hoverable" style="cursor: pointer" id='<?php echo $row['id'] ?>'><i class="trash alternate outline red icon"></i></td>
      <td onclick="plseditme(this)"  class="center aligned hoverable" style="cursor: pointer" id='<?php echo $row['id'] ?>'><i class="pencil alternate yellow icon"></i></td>
    </tr>
<?php }

  # Close connection when finished
  $qe->close();
  $conn->close();
 ?>
