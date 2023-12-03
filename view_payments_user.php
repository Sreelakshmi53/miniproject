<?php
session_start();
	require_once('conn.php');
	include('user_header.php');
	$userId= $_SESSION["user_id"]; 
	$qry="select * from payments where user_id='".$userId."' ";
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
    body {
	background-image: url(bg/vee.jpg);
}
.style1 {color: #FF0000}
</style>
</head>
<div id="Layer1">
  <table id="cs" width="100%" height="158" border="0">
	  <tr>
		  <td colspan="12" height="42" align="center"><b>View Donations</b></td>
	  </tr>
    <tr>	  
	  <th width="80">Sl.No</th>
	   
	  <th width="159">User id</th>
	  <th width="159">Donation Date</th>
      <th width="150">Amount </th>
   </tr>
	  <tr>
		  <td colspan="12" height="25"></td>
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
      		 
			<td><?php echo($row['user_id']); ?></td>
			<td><?php echo($row['donation_date']); ?></td>
			<td><?php echo($row['amount']); ?></td>
   	</tr>
	<?php
		$i++;
		}		
	}
	else
	{
    	echo "0 results";
	}
	mysqli_close($conn);
?>
  </table>
</div>
<?php
include('footer.php')
?>