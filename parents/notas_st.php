<?php
include('session.php');

$sa=$_POST['sa'];

if ($ls__grade == "1a Classe") {

  # code...
  $query_1a = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_1a WHERE nome_id=$ls__id AND year=$sa
  ";

  $ses_sql_a = mysqli_query($conn, $query_1a);
  ?>
  <table class="ui unstackable selectable celled structured table">
    <thead>
      <tr>
        <th class="center aligned" rowspan="2">Disciplina</th>
        <th class="center aligned" colspan="3">Trimestral</th>
        <th class="center aligned" rowspan="2">Anual</th>
      </tr>

      <tr>
        <th class="center aligned">1º</th>
        <th class="center aligned">2º</th>
        <th class="center aligned">3º</th>
      </tr>
    </thead>

    <tbody>
  <?php while($r1a = mysqli_fetch_assoc($ses_sql_a)) {?>
        <tr>
          <td><?php echo $r1a['Português']; ?></td>
          <td><?php echo $r1a['prim_trim']; ?></td>
          <td><?php echo $r1a['seg_trim']; ?></td>
          <td><?php echo $r1a['ter_trim']; ?></td>
          <td><?php echo $r1a['notafinal']; ?></td>
        </tr>
  <?php
  }?>
    </tbody>
  </table>
<?php

} else if ($ls__grade == "2a Classe") {

  # code...
  $query_2a = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_2a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_2a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_2a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_2a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_2a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_2a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_2a WHERE nome_id=$ls__id AND year=$sa
  ";
  $ses_sql_a = mysqli_query($conn, $query_2a);
  ?>
  <table class="ui unstackable selectable celled structured table">
    <thead>
      <tr>
        <th class="center aligned" rowspan="2">Disciplina</th>
        <th class="center aligned" colspan="3">Trimestral</th>
        <th class="center aligned" rowspan="2">Anual</th>
      </tr>

      <tr>
        <th class="center aligned">1º</th>
        <th class="center aligned">2º</th>
        <th class="center aligned">3º</th>
      </tr>
    </thead>

    <tbody>
  <?php while($r1a = mysqli_fetch_assoc($ses_sql_a)) {?>

        <tr>
          <td><?php echo $r1a['Português']; ?></td>
          <td><?php echo $r1a['prim_trim']; ?></td>
          <td><?php echo $r1a['seg_trim']; ?></td>
          <td><?php echo $r1a['ter_trim']; ?></td>
          <td><?php echo $r1a['notafinal']; ?></td>
        </tr>
  <?php
  }?>
    </tbody>
  </table>

  <?php

} else if ($ls__grade == "3a Classe") {

  # code...
  $query_3a = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_3a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_3a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_3a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_3a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_3a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_3a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_3a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Ciências Naturais' FROM cnaturais_3a WHERE nome_id=$ls__id AND year=$sa
  ";

  $ses_sql_a = mysqli_query($conn, $query_3a);
  ?>
  <table class="ui unstackable selectable celled structured table">
    <thead>
      <tr>
        <th class="center aligned" rowspan="2">Disciplina</th>
        <th class="center aligned" colspan="3">Trimestral</th>
        <th class="center aligned" rowspan="2">Anual</th>
      </tr>

      <tr>
        <th class="center aligned">1º</th>
        <th class="center aligned">2º</th>
        <th class="center aligned">3º</th>
      </tr>
    </thead>

    <tbody>
  <?php while($r1a = mysqli_fetch_assoc($ses_sql_a)) {?>

        <tr>
          <td><?php echo $r1a['Português']; ?></td>
          <td><?php echo $r1a['prim_trim']; ?></td>
          <td><?php echo $r1a['seg_trim']; ?></td>
          <td><?php echo $r1a['ter_trim']; ?></td>
          <td><?php echo $r1a['notafinal']; ?></td>
        </tr>
  <?php
  }?>
    </tbody>
  </table>

  <?php

}  else if ($ls__grade == "4a Classe") {

  # code...
  $query_4a = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_4a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_4a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_4a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_4a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_4a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_4a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_4a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Ciências Naturais' FROM cnaturais_4a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Ciências Sociais' FROM csociais_4a WHERE nome_id=$ls__id AND year=$sa
  ";

  $ses_sql_a = mysqli_query($conn, $query_4a);
  ?>
  <table class="ui unstackable selectable celled structured table">
    <thead>
      <tr>
        <th class="center aligned" rowspan="2">Disciplina</th>
        <th class="center aligned" colspan="3">Trimestral</th>
        <th class="center aligned" rowspan="2">Anual</th>
      </tr>

      <tr>
        <th class="center aligned">1º</th>
        <th class="center aligned">2º</th>
        <th class="center aligned">3º</th>
      </tr>
    </thead>

    <tbody>
  <?php while($r1a = mysqli_fetch_assoc($ses_sql_a)) {?>

        <tr>
          <td><?php echo $r1a['Português']; ?></td>
          <td><?php echo $r1a['prim_trim']; ?></td>
          <td><?php echo $r1a['seg_trim']; ?></td>
          <td><?php echo $r1a['ter_trim']; ?></td>
          <td><?php echo $r1a['notafinal']; ?></td>
        </tr>
  <?php
  }?>
    </tbody>
  </table>

  <?php
} ?>
