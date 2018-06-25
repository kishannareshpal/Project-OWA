<?php
include('session.php');

$sa=$_GET['sa'];

if ($ls__grade == "1a Classe") {

  # code...
  $query_1a = "SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Português' FROM port_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Matemática' FROM mat_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Inglês' FROM ing_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Artes Visuais' FROM artesvisuais_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Música' FROM musica_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Educação Física' FROM edf_1a WHERE nome_id=$ls__id AND year=$sa UNION ALL SELECT prim_trim, seg_trim, ter_trim, notafinal, 'Dança' FROM danca_1a WHERE nome_id=$ls__id AND year=$sa";

  $ses_sql_a = mysqli_query($conn, $query_1a);
  ?>
  <table class="ui unstackable selectable celled structured table">
    <thead>
      <tr>
        <th class="center aligned eight wide" rowspan="2">Disciplina</th>
        <th class="center aligned three wide" colspan="3">Trimestral</th>
        <th class="center aligned one wide" rowspan="2">Anual</th>
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
          <td <?php if($r1a['notafinal']>=10){ echo "class='positive'"; } elseif($r1a['notafinal']>=0 && $r1a['notafinal']<10 && is_numeric($r1a['notafinal'])) { echo "class='negative'";} else {echo "class=''";};?>><?php echo $r1a['Português'];?></td>
          <td <?php if($r1a['prim_trim']>=10){ echo "class='positive'"; } elseif($r1a['prim_trim']>=0 && $r1a['prim_trim']<10 && is_numeric($r1a['prim_trim'])) { echo "class='negative'";} else {echo "class=''";};?>><?php echo $r1a['prim_trim'];?></td>
          <td <?php if($r1a['seg_trim']>=10) { echo "class='positive'"; } elseif($r1a['seg_trim'] >=0 && $r1a['seg_trim']<10  && is_numeric($r1a['seg_trim']))  { echo "class='negative'";} else {echo "class=''";};?>><?php echo $r1a['seg_trim'];?></td>
          <td <?php if($r1a['ter_trim']>=10) { echo "class='positive'"; } elseif($r1a['ter_trim'] >=0 && $r1a['ter_trim']<10  && is_numeric($r1a['ter_trim']))  { echo "class='negative'";} else {echo "class=''";};?>><?php echo $r1a['ter_trim'];?></td>
          <td <?php if($r1a['notafinal']>=10){ echo "class='positive'"; } elseif($r1a['notafinal']>=0 && $r1a['notafinal']<10 && is_numeric($r1a['notafinal'])) { echo "class='negative'";} else {echo "class=''";};?>><?php echo $r1a['notafinal'];?></td>
        </tr>
  <?php
  }?>
    </tbody>
  </table>
  <?php
  $query = "SELECT media FROM medias_1a WHERE identity=$identity"; // UNION ALL SELECT year, nome_id, media FROM medias_2a WHERE identity=$identity UNION ALL SELECT year, nome_id, media FROM medias_3a WHERE identity=$identity UNION ALL SELECT year, nome_id, media FROM medias_4a WHERE identity=$identity";
  $ses_sql_ = mysqli_query($conn, $query);
  @$r1a = mysqli_fetch_assoc($ses_sql_);
  $ls__mediafinal_1a = $r1a['media'];
   ?>

  <h6 id="k-media" style="text-align: right; position: relative; right: 10px" class="mdl-color-text--grey-500">
    <strong>
      Méd. final da 1a Classe:
      <span class="hoverable <?php if($ls__mediafinal_1a>=10){ echo 'mdl-color-text--green'; } elseif($ls__mediafinal_1a>=0 && $ls__mediafinal_1a<10 && is_numeric($ls__mediafinal_1a)) { echo 'mdl-color-text--red';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
        <?php if(!empty($ls__mediafinal_1a)){echo $ls__mediafinal_1a;} else {echo "___";}; ?>
      </span>
    </strong>
    <?php if (!empty($ls__mediafinal_1a)): ?>
      <br><br>
      <strong>
        <span class="<?php if($ls__mediafinal_1a>=10){ echo 'mdl-color-text--blue-500'; } elseif($ls__mediafinal_1a>=0 && $ls__mediafinal_1a<10 && is_numeric($ls__mediafinal_1a)) { echo 'mdl-color-text--red-500';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
          <span><?php if($ls__mediafinal_1a>=10){ echo 'Transitou. Parabéns à '.$ls__first_name.'!!'; } elseif($ls__mediafinal_1a>=0 && $ls__mediafinal_1a<10 && is_numeric($ls__mediafinal_1a)) { echo 'Não Transitou.';}; ?></span>
        </span>
      </strong>
    <?php endif; ?>
  </h6>


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
        <th class="center aligned eight wide" rowspan="2">Disciplina</th>
        <th class="center aligned three wide" colspan="3">Trimestral</th>
        <th class="center aligned one wide  " rowspan="2">Anual</th>
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
    $query = "SELECT media, exame FROM medias_2a WHERE identity=$identity"; // UNION ALL SELECT year, nome_id, media FROM medias_2a WHERE identity=$identity UNION ALL SELECT year, nome_id, media FROM medias_3a WHERE identity=$identity UNION ALL SELECT year, nome_id, media FROM medias_4a WHERE identity=$identity";
    $ses_sql_ = mysqli_query($conn, $query);
    @$r1a = mysqli_fetch_assoc($ses_sql_);
    $ls__mediafinal_2a = $r1a['media'];
    $ls__notadoexame_2a = $r1a['exame'];
    $goesto_2a = false;
   ?>


  <h6 id="k-media" style="text-align: right; position: relative; right: 10px" class="mdl-color-text--grey-500">
    <?php if (!empty($ls__mediafinal_2a)): ?>
      <strong>
        <span class="<?php if($ls__mediafinal_2a>=10){ echo 'mdl-color-text--blue-500'; } elseif($ls__mediafinal_2a>=0 && $ls__mediafinal_2a<10 && is_numeric($ls__mediafinal_2a)) { echo 'mdl-color-text--yellow-800';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
          <span><?php if($ls__mediafinal_2a>=10){ echo 'Dispensou! Parabéns à '.$ls__first_name.'!!'; } elseif($ls__mediafinal_2a>=0 && $ls__mediafinal_2a<10 && is_numeric($ls__mediafinal_2a)) { echo 'Aprovou para o Exame com '.$ls__mediafinal_2a; $goesto_2a=true;}; ?></span>
        </span>
      </strong>
      <br><br>
    <?php endif; ?>

      <strong>
        <?php if ($ls__mediafinal_2a>=0 && $ls__mediafinal_2a<10 && is_numeric($ls__mediafinal_2a)): ?>
          <span class="<?php if($ls__notadoexame_2a>=10){ echo 'mdl-color-text--blue-500'; } elseif($ls__notadoexame_2a>=0 && $ls__notadoexame_2a<10 && is_numeric($ls__notadoexame_2a)) { echo 'mdl-color-text--grey-800';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
            <span><?php if($ls__notadoexame_2a>=10){ echo 'Transitou! Parabéns à '.$ls__first_name.'!!'; } elseif($ls__notadoexame_2a>=0 && $ls__notadoexame_2a<10 && is_numeric($ls__notadoexame_2a)) { echo 'Não Transitou.';} else{ echo "Aguardando o resultado do exame...";}; ?></span>
          </span>
          <br><br>
        <?php endif; ?>

          <?php if ($goesto_2a == true): ?>
            Méd. final da 2a Classe:
            <span class="hoverable <?php if(ceil(($ls__mediafinal_2a+$ls__notadoexame_2a)/2)>=10){ echo 'mdl-color-text--green'; } elseif(ceil(($ls__mediafinal_2a+$ls__notadoexame_2a)/2)>=0 && ceil(($ls__mediafinal_2a+$ls__notadoexame_2a)/2)<10 && is_numeric(ceil(($ls__mediafinal_2a+$ls__notadoexame_2a)/2))) { echo 'mdl-color-text--grey-600';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
              <?php if(!empty(ceil(($ls__mediafinal_2a+$ls__notadoexame_2a)/2) && $ls__notadoexame_2a && $ls__mediafinal_2a)){echo ceil(($ls__mediafinal_2a+$ls__notadoexame_2a)/2);} else {echo "___";}; ?>
            </span>
          <?php else: ?>
            Méd. final da 2a Classe:
            <span class="<?php if($ls__mediafinal_2a>=10){ echo 'mdl-color-text--green'; } elseif($ls__mediafinal_2a>=0 && $ls__mediafinal_2a<10 && is_numeric($ls__mediafinal_2a)) { echo 'mdl-color-text--red';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
              <?php if(!empty($ls__mediafinal_2a)){echo $ls__mediafinal_2a;} else {echo "___";}; ?>
            </span>
          <?php endif; ?>
      </strong>
  </h6>
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
        <th class="center aligned eight wide" rowspan="2">Disciplina</th>
        <th class="center aligned three wide" colspan="3">Trimestral</th>
        <th class="center aligned one wide  " rowspan="2">Anual</th>
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
  $query = "SELECT media FROM medias_3a WHERE identity=$identity"; // UNION ALL SELECT year, nome_id, media FROM medias_2a WHERE identity=$identity UNION ALL SELECT year, nome_id, media FROM medias_3a WHERE identity=$identity UNION ALL SELECT year, nome_id, media FROM medias_4a WHERE identity=$identity";
  $ses_sql_ = mysqli_query($conn, $query);
  @$r3a = mysqli_fetch_assoc($ses_sql_);
  $ls__mediafinal_3a = $r3a['media'];
   ?>

  <h6 id="k-media" style="text-align: right; position: relative; right: 10px" class="mdl-color-text--grey-500">
    <strong>
      Méd. final da 3a Classe:
      <span class="hoverable <?php if($ls__mediafinal_3a>=10){ echo 'mdl-color-text--green'; } elseif($ls__mediafinal_3a>=0 && $ls__mediafinal_3a<10 && is_numeric($ls__mediafinal_3a)) { echo 'mdl-color-text--red';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
        <?php if(!empty($ls__mediafinal_3a)){echo $ls__mediafinal_3a;} else {echo "___";}; ?>
      </span>
    </strong>
    <?php if (!empty($ls__mediafinal_3a)): ?>
      <br><br>
      <strong>
        <span class="<?php if($ls__mediafinal_3a>=10){ echo 'mdl-color-text--blue-500'; } elseif($ls__mediafinal_3a>=0 && $ls__mediafinal_3a<10 && is_numeric($ls__mediafinal_3a)) { echo 'mdl-color-text--red-500';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
          <span><?php if($ls__mediafinal_3a>=10){ echo 'Transita. Parabéns ao '.$ls__first_name.'!!'; } elseif($ls__mediafinal_3a>=0 && $ls__mediafinal_3a<10 && is_numeric($ls__mediafinal_3a)) { echo 'Não Transita.';}; ?></span>
        </span>
      </strong>
    <?php endif; ?>
  </h6>


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
        <th class="center aligned eight wide" rowspan="2">Disciplina</th>
        <th class="center aligned three wide" colspan="3">Trimestral</th>
        <th class="center aligned one wide" rowspan="2">Anual</th>
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
    $query = "SELECT media, exame FROM medias_4a WHERE identity=$identity"; // UNION ALL SELECT year, nome_id, media FROM medias_4a WHERE identity=$identity UNION ALL SELECT year, nome_id, media FROM medias_3a WHERE identity=$identity UNION ALL SELECT year, nome_id, media FROM medias_4a WHERE identity=$identity";
    $ses_sql_ = mysqli_query($conn, $query);
    @$r1a = mysqli_fetch_assoc($ses_sql_);
    $ls__mediafinal_4a = $r1a['media'];
    $ls__notadoexame_4a = $r1a['exame'];
   ?>


   <h6 id="k-media" style="text-align: right; position: relative; right: 10px" class="mdl-color-text--grey-500">
     <?php if (!empty($ls__mediafinal_4a)): ?>
       <strong>
         <span class="<?php if($ls__mediafinal_4a>=10){ echo 'mdl-color-text--blue-500'; } elseif($ls__mediafinal_4a>=0 && $ls__mediafinal_4a<10 && is_numeric($ls__mediafinal_4a)) { echo 'mdl-color-text--yellow-800';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
           <span><?php if($ls__mediafinal_4a>=10){ echo 'Dispensou! Parabéns à '.$ls__first_name.'!!'; } elseif($ls__mediafinal_4a>=0 && $ls__mediafinal_4a<10 && is_numeric($ls__mediafinal_4a)) { echo 'Aprovou para o Exame com '.$ls__mediafinal_4a; $goesto_4a=true;}; ?></span>
         </span>
       </strong>
       <br><br>
     <?php endif; ?>

       <strong>
         <?php if ($ls__mediafinal_4a>=0 && $ls__mediafinal_4a<10 && is_numeric($ls__mediafinal_4a)): ?>
           <span class="<?php if($ls__notadoexame_4a>=10){ echo 'mdl-color-text--blue-500'; } elseif($ls__notadoexame_4a>=0 && $ls__notadoexame_4a<10 && is_numeric($ls__notadoexame_4a)) { echo 'mdl-color-text--grey-800';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
             <span><?php if($ls__notadoexame_4a>=10){ echo 'Transitou! Parabéns à '.$ls__first_name.'!!'; } elseif($ls__notadoexame_4a>=0 && $ls__notadoexame_4a<10 && is_numeric($ls__notadoexame_4a)) { echo 'Não Transitou.';} else{ echo "Aguardando o resultado do exame...";}; ?></span>
           </span>
           <br><br>
         <?php endif; ?>

           <?php if ($goesto_4a == true): ?>
             Méd. final da 4a Classe:
             <span class="hoverable <?php if(ceil(($ls__mediafinal_4a+$ls__notadoexame_4a)/2)>=10){ echo 'mdl-color-text--green'; } elseif(ceil(($ls__mediafinal_4a+$ls__notadoexame_4a)/2)>=0 && ceil(($ls__mediafinal_4a+$ls__notadoexame_4a)/2)<10 && is_numeric(ceil(($ls__mediafinal_4a+$ls__notadoexame_4a)/2))) { echo 'mdl-color-text--grey-600';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
               <?php if(!empty(ceil(($ls__mediafinal_4a+$ls__notadoexame_4a)/2) && $ls__notadoexame_4a && $ls__mediafinal_4a)){echo ceil(($ls__mediafinal_4a+$ls__notadoexame_4a)/2);} else {echo "___";}; ?>
             </span>
           <?php else: ?>
             Méd. final da 4a Classe:
             <span class="<?php if($ls__mediafinal_4a>=10){ echo 'mdl-color-text--green'; } elseif($ls__mediafinal_4a>=0 && $ls__mediafinal_4a<10 && is_numeric($ls__mediafinal_4a)) { echo 'mdl-color-text--red';}; ?> mdl-color--grey-200" style="padding: 5px; border-radius: 5px">
               <?php if(!empty($ls__mediafinal_4a)){echo $ls__mediafinal_4a;} else {echo "___";}; ?>
             </span>
           <?php endif; ?>
       </strong>
   </h6>

  <?php
} ?>
