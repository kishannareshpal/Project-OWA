<?php

  $sc=$_POST['sc'];
  $sd=$_POST['sd'];
  $disc = $sd.$sc;

  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

  // $value=$_POST['value'];
  // // $theID=$_POST['theID'];
  // // $field=$_POST['field'];
  // var_dump($value);
  //
  // $sql= mysqli_query($conn, "UPDATE artesvisuais_1a SET primeiroTrim=$value");
    $curryear = date("Y");
    $sql = "SELECT CONCAT(profiles.first_name, ' ', profiles.last_name) as fullname, disciplina.nome_id, disciplina.prim_trim, disciplina.seg_trim, disciplina.ter_trim, disciplina.notafinal FROM $disc as disciplina, profiles WHERE disciplina.nome_id=profiles.id AND disciplina.year=$curryear";
    // SELECT profiles.username, prim_trim, seg_trim, ter_trim notafinal FROM musica_2a as disciplina INNER JOIN profiles ON disciplina.nome_id=profiles.id
    // $sql = "SELECT * FROM educacaofisica_4a";
    $qe = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($qe)) {
?>
    <tr>
      <td><?php echo $row['fullname'] ?></td>
      <td ondblclick="plsedit(this)" onBlur="saveToDatabase(this,'prim_trim','<?php echo $row['nome_id']; ?>')"><?php echo $row['prim_trim']; ?></td>
      <td ondblclick="plsedit(this)" onBlur="saveToDatabase(this,'seg_trim','<?php echo $row['nome_id']; ?>')"><?php echo $row['seg_trim']; ?></td>
      <td ondblclick="plsedit(this)" onBlur="saveToDatabase(this,'ter_trim','<?php echo $row['nome_id']; ?>')"><?php echo $row['ter_trim']; ?></td>
      <td ondblclick="plsedit(this)" onBlur="saveToDatabase(this,'notafinal','<?php echo $row['nome_id']; ?>')"><?php echo $row['notafinal']; ?></td>
    </tr>
<?php } ?>
