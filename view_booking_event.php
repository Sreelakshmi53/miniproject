<?php
session_start();
	require_once('conn.php');
	include('header.php');
	$idevent=$_GET['a'];
	$_SESSION['idevent']=$idevent;

	$qry="select * from user_event_register where idevent='".$idevent."' ";
	$res=mysqli_query($conn,$qry);
?>
	

<style type="text/css">
 <style>
        #cs {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

            #cs td, #cs th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #cs tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            #cs tr:hover {
                background-color: #ddd;
            }

            #cs th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
            }
			#cs th:nth-child(4),
			#cs td:nth-child(4) {
    width: 200px;
}

    body {
	background-image: url(bg/vee.jpg);
}
.style1 {color: #FF0000}
</style>
</head>
<div id="Layer1">
  <table id="cs" width="100%" height="158" border="0">
	  <tr>
		  <td colspan="8" height="42" align="center"><b>EVENT LIST</b></td>
	  </tr>
    <tr>
	  <th width="159">Sl.No</th>
	  <th width="159">Name</th>
      <th width="159">Mobile</th>
	  <th width="150">Register Date</th>
 		<th width="150">Members</th>
    </tr>
	  <tr>
		  <td colspan="8" height="25"></td>
	  </tr>
	<?php
		 
	if(mysqli_num_rows($res)>0) 
	{
		 $i=1;
		while($row=mysqli_fetch_array($res)) 
		{
       
	?>
	<tr>
      		<td><?php echo($i); ?></td>
      		<td><?php echo($row['name']); ?></td>
			<td><?php echo($row['mobile']); ?></td>
			<td><?php echo($row['register_date']); ?></td>
			<td><?php echo($row['members']); ?></td>
   	</tr>
	<?php
		$i++;
		}
		
	}
	else
	{
    	echo "No Booking....";
	}

?>
  </table>
</div>
 
<?php
include('footer.php')
?>