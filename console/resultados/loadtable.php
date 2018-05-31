<?php

  $sc=$_POST['sc'];
  $sa=$_POST['sa'];

  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');

  // $value=$_POST['value'];
  // // $theID=$_POST['theID'];
  // // $field=$_POST['field'];
  // var_dump($value);
  //
  // $sql= mysqli_query($conn, "UPDATE artesvisuais_1a SET primeiroTrim=$value");
    $curryear = date("Y");
    $sql = "SELECT CONCAT(p.first_name, ' ', p.last_name) as fullname, m.identity, m.media, m.year, m.exame FROM ".'medias_'.$sc." AS m, profiles AS p WHERE m.nome_id=p.id AND m.year=".$sa;
    // var_dump($sql);
    // SELECT profiles.username, prim_trim, seg_trim, ter_trim notafinal FROM musica_2a as disciplina INNER JOIN profiles ON disciplina.nome_id=profiles.id
    // $sql = "SELECT * FROM educacaofisica_4a";
    $qe = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($qe)) {
?>
    <?php if (($sc == "1a") || ($sc == "3a")): ?>
      <tr>
        <td <?php if($row['media']>=10){ echo "class='positive'"; } elseif($row['media']>=0 && $row['media']<10 && is_numeric($row['media'])) { echo "class='negative'";} else {echo "class=''";};?>><?php echo $row['fullname'] ?></td>
        <td <?php if($row['media']>=10){ echo "class='positive'"; } elseif($row['media']>=0 && $row['media']<10 && is_numeric($row['media'])) { echo "class='negative'";} else {echo "class=''";};?>><?php echo $row['media']; ?></td>
        <td class="mdl-color--black"> - </td>
        <td <?php if($row['media']>=10){ echo "class='positive'"; } elseif($row['media']>=0 && $row['media']<10 && is_numeric($row['media'])) { echo "class='negative'";} else {echo "class=''";};?>><?php echo $row['media']; ?></td>
      </tr>

    <?php elseif (($sc == "2a") || ($sc == "4a")): ?>
      <tr>
        <tr>
          <td <?php if( empty($row['media']) || empty($row['exame']) ) {echo "class=''";} elseif(ceil(($row['media']+$row['exame'])/2)>=10){ echo "class='positive'"; } elseif(ceil(($row['media']+$row['exame'])/2)>=0 && ceil(($row['media']+$row['exame'])/2)<10 && is_numeric(ceil(($row['media']+$row['exame'])/2))) { echo "class='negative'";};?>><?php echo $row['fullname'] ?></td>
          <td <?php if($row['media']>=10){ echo "class='positive'"; } elseif($row['media']>=0 && $row['media']<10 && is_numeric($row['media'])) { echo "class='negative'";} else {echo "class=''";};?>><?php echo $row['media']; ?></td>
          <td <?php if($row['exame']>=10){ echo "class='positive'"; } elseif($row['exame']>=0 && $row['exame']<10 && is_numeric($row['exame'])) { echo "class='negative'";} else {echo "class=''";};?> ondblclick="plsedit(this)" onBlur="saveToDatabase(this,'exame','<?php echo $row['identity'];?>')"><?php echo $row['exame'];?></td>
          <td <?php if( empty($row['media']) || empty($row['exame']) ) {echo "class=''";} elseif(ceil(($row['media']+$row['exame'])/2)>=10){ echo "class='positive'"; } elseif(ceil(($row['media']+$row['exame'])/2)>=0 && ceil(($row['media']+$row['exame'])/2)<10 && is_numeric(ceil(($row['media']+$row['exame'])/2))) { echo "class='negative'";};?>><?php if(!empty($row['media']) && !empty($row['exame'])){echo ceil(($row['media']+$row['exame'])/2);} else {echo '';} ?></td>
        </tr>
      </tr>
    <?php endif; ?>

<?php } ?>
