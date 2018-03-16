<?php
  // mysqli_connect() function opens a new connection to the MySQL server.
  $conn = mysqli_connect("oneworldacademymz.com", "oneworv0_admin", "admin", "oneworv0_students") or die ('I cannot connect to the database.');
  // session_start();// Starting Session

  // Storing Session
  session_start();
  $user_check = $_COOKIE['lu'];

  // SQL Query To Fetch PROFILE Information Of User
  $query = "SELECT * from profiles where username = '$user_check'";
  $ses_sql = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($ses_sql);

  # Get User Details
  $ls__id = $row['id'];
  $ls__first_name = $row['first_name'];
  $ls__last_name = $row['last_name'];
  $ls__grade = $row['grade'];
  $ls__started_year = $row['started_year'];


  $queryred = "SELECT year, '1a Classe' as 'classe' FROM port_1a WHERE nome_id=$ls__id UNION ALL SELECT year, '2a Classe' FROM port_2a WHERE nome_id=$ls__id UNION ALL SELECT year, '3a Classe' FROM port_3a WHERE nome_id=$ls__id UNION ALL SELECT year, '4a Classe' FROM port_4a WHERE nome_id=$ls__id";
  $red_sql_ = mysqli_query($conn, $queryred);
  // @$row_red_ = mysqli_fetch_assoc($red_sql_);


  // SQL Query To Fetch MENSALIDADE Information Of User
  $query = "SELECT * FROM mensalidades WHERE id = $ls__id AND payment_year=".date('Y');
  $ses_sql = mysqli_query($conn, $query);
  @$row = mysqli_fetch_assoc($ses_sql);

  $ls__fev = $row['fev'];
  $ls__mar = $row['mar'];
  $ls__abr = $row['abr'];
  $ls__mai = $row['mai'];
  $ls__jun = $row['jun'];
  $ls__jul = $row['jul'];
  $ls__ago = $row['ago'];
  $ls__set = $row['sete'];
  $ls__out = $row['outu'];
  $ls__nov = $row['nov'];

  // SELECT port_1a.year FROM port_1a WHERE nome_id=246 UNION ALL SELECT port_2a.year FROM port_2a WHERE nome_id=246 UNION ALL SELECT port_3a.year FROM port_3a WHERE nome_id=246 UNION ALL SELECT port_4a.year FROM port_4a WHERE nome_id=246


  /*
  SELECT prim_trim, seg_trim, ter_trim FROM port_1a WHERE nome_id=1
  UNION ALL
  SELECT prim_trim, seg_trim, ter_trim FROM mat_1a WHERE nome_id=1
  UNION ALL
  SELECT prim_trim, seg_trim, ter_trim FROM ing_1a WHERE nome_id=1
  UNION ALL
  SELECT prim_trim, seg_trim, ter_trim FROM artesvisuais_1a WHERE nome_id=1
  UNION ALL
  SELECT prim_trim, seg_trim, ter_trim FROM musica_1a WHERE nome_id=1
  UNION ALL
  SELECT prim_trim, seg_trim, ter_trim FROM edf_1a WHERE nome_id=1
  UNION ALL
  SELECT prim_trim, seg_trim, ter_trim FROM danca_1a WHERE nome_id=1
  */

  // // SERIALIZATION DOWN
  // /////////////////////
  // $my_array = array("Joe", "Bloggs", "22, Letsby Avenue");
  //
  // /// Serialize Array
  // $my_array = serialize($my_array);
  //
  // /// Add to MySQL database table
  // $query = "INSERT INTO artesvisuais_1a (id, segundoTrim) VALUES ('4', '$my_array')";
  // mysqli_query($conn, $query);
  // mysqli_fetch_assoc($ses_sql);
  //
  //   /// Retrieve array
  // $query = "SELECT segundoTrim FROM artesvisuais_1a WHERE id=4 ";
  // $snglQuery = $conn->query($query);
  // $row = $snglQuery->fetch_assoc();
  // $member = $row["segundoTrim"];
  // /// Retrieve array data and structure with unserialize()
  // $member = unserialize($member);
  // print_r($member[0]);
?>
