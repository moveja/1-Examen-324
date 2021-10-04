<?php
include "con_db.php";

session_start();
$nota=$_SESSION['ci'];
$sqlnotas="SELECT xpp.departamento, AVG(xpn.notafin) promedio
            FROM nota xpn,persona xpp
            WHERE xpn.ci = xpp.ci 
            GROUP BY xpp.departamento";
$hhh = mysqli_query ($conn,$sqlnotas);
$edg = mysqli_query ($conn,$sqlnotas);



?>
<html>
    <head>
        <title>Tabla BD</title>
        <style>
table {
  border-collapse: collapse;
  table-layout: fixed;
  width: 100%;
  background: white;
}

th, td {
  border: 1px solid lightgray;
  padding: 8px; 
  text-align: left;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;

  &:first-child {
    width: 90px;
  }
  &:last-child {
    text-align: right;
    width: 60px;
  }
}

th {
  background: teal;
  color: white;
  text-transform: uppercase;
  font-weight: normal;
}

table tr:first-child td {
  border-top: none;
}

.container {
  background: tan;
  width: 100%;
  padding: 24px;
  height: 300px;
}

.tWrap {
  height: 100%;
  overflow: hidden;
  display: flex;
  flex-direction: column;

  &head {
    flex: 0 0 37px; // for Safari and IE
    overflow-y: scroll;
  }

  &body {
    overflow-y: scroll;
  }
}
        </style>
    </head>
<table>
    <thead>
    <tr>
    <?php
    while($fila=mysqli_fetch_array($hhh)){
        echo "<td>".$fila["departamento"]."</td>";
    }?>
    </tr>
    </thead>
    <tbody>
	<?php
    while($fila=mysqli_fetch_array($edg)){
        echo "<td>".$fila["promedio"]."</td>";
    }?>
</tbody>
</table>