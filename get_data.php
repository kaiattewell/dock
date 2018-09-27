<?php

	$ipname = $_GET['ipname'];
   $uname = $_GET['uname'];
   $psw = $_GET['psw'];
   $dbname = $_GET['dbname'];

   //$con=mysqli_connect($ipname,$uname,$psw,$dbname);
   
   //$con=mysqli_connect("35.233.11.254","Tester","Digital00","Pokemon");
   //$tablename = 'pokelist';
   
   $con=mysqli_connect("sachinsshahcom.ipagemysql.com","coachusers","coachusers","coachusers");
   $tablename = 'users';

   
   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $result = mysqli_query($con,"SELECT * FROM $tablename");
   $row = mysqli_fetch_array($result);
   
   echo "<table id='mytab1' border='1'>
<tr>
<th>Number</th>
<th>Name</th>
<th>Type1</th>
<th>Type2</th>
<th>Gene ration</th>
<th>Legendary</th>
</tr>";
   while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td><div contenteditable>" . $row[0] . "</div></td>";
		echo "<td><div contenteditable>" . $row[1] . "</div></td>";
		echo "<td><div contenteditable>" . $row[2] . "</div></td>";
		echo "<td><div contenteditable>" . $row[3] . "</div></td>";
		//echo "<td><div contenteditable>" . $row[4] . "</div></td>";
		//echo "<td><div contenteditable>" . $row[5] . "</div></td>";
		echo "</tr>";
	}
	echo "</table>";
	   
   
   

   
   	echo "  <button onclick=\"updateDatabase()\" style=\"font-size:50px;\" type=\"button\" id=\"updatebutton\" value=\"1\" >Update</button>";
	
	echo '<script type="text/javascript">';
	echo 'function updateDatabase() {';
	echo 'var table = document.getElementById("mytab1");';
	echo 'for (var i = 1, row; row = table.rows[i]; i++) {';

	echo 'var res = "\'".concat(((row.cells[0].innerHTML).substring(24, row.cells[0].innerHTML.length-6)), "\', \'", ((row.cells[1].innerHTML).substring(24, row.cells[1].innerHTML.length-6)), "\', \'", ((row.cells[2].innerHTML).substring(24, row.cells[2].innerHTML.length-6)), "\', \'", ((row.cells[3].innerHTML).substring(24, row.cells[3].innerHTML.length-6)), "\'");';
	
	//echo 'var res = "\'".concat(((row.cells[0].innerHTML).substring(24, row.cells[0].innerHTML.length-6)), "\', \'", ((row.cells[1].innerHTML).substring(24, row.cells[1].innerHTML.length-6)), "\', \'", ((row.cells[2].innerHTML).substring(24, row.cells[2].innerHTML.length-6)), "\', \'", ((row.cells[3].innerHTML).substring(24, row.cells[3].innerHTML.length-6)), "\', \'", ((row.cells[4].innerHTML).substring(24, row.cells[5].innerHTML.length-6)), "\', \'", ((row.cells[5].innerHTML).substring(24, row.cells[5].innerHTML.length-6)), "\'");';
	echo 'alert(res);';
	echo '}';
	echo '}';
	echo '</script>';

  
   $con->close();
   mysqli_close($con);
?>