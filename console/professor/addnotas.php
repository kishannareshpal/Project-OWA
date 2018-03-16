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
    var_dump($row['prim_trim']);
    while($row = mysqli_fetch_assoc($qe)) {
?>
    <tr>
      <td <?php if($row['notafinal']>=10){ echo "class='positive'"; } elseif($row['notafinal']>=0 && $row['notafinal']<10 && is_numeric($row['notafinal'])) { echo "class='negative'";} else {echo "class=''";};?>><?php echo $row['fullname'] ?></td>
      <td <?php if($row['prim_trim']>=10){ echo "class='positive'"; } elseif($row['prim_trim']>=0 && $row['prim_trim']<10 && is_numeric($row['prim_trim'])) { echo "class='negative'";} else {echo "class=''";};?> ondblclick="plsedit(this)" onBlur="saveToDatabase(this,'prim_trim','<?php echo $row['nome_id']; ?>')"><?php echo $row['prim_trim']; ?></td>
      <td <?php if($row['seg_trim']>=10){ echo "class='positive'"; } elseif($row['seg_trim']>=0 && $row['seg_trim']<10 && is_numeric($row['seg_trim'])) { echo "class='negative'";} else {echo "class=''";};?> ondblclick="plsedit(this)" onBlur="saveToDatabase(this,'seg_trim','<?php echo $row['nome_id']; ?>')"><?php echo $row['seg_trim']; ?></td>
      <td <?php if($row['ter_trim']>=10){ echo "class='positive'"; } elseif($row['ter_trim']>=0 && $row['ter_trim']<10 && is_numeric($row['ter_trim'])) { echo "class='negative'";} else {echo "class=''";};?> ondblclick="plsedit(this)" onBlur="saveToDatabase(this,'ter_trim','<?php echo $row['nome_id']; ?>')"><?php echo $row['ter_trim']; ?></td>
      <td <?php if($row['notafinal']>=10){ echo "class='positive'"; } elseif($row['notafinal']>=0 && $row['notafinal']<10 && is_numeric($row['notafinal'])) { echo "class='negative'";} else {echo "class=''";};?>><?php echo $row['notafinal']; ?></td>
    </tr>
<?php } ?>
