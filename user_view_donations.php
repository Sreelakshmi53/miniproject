<?php
session_start();
	require_once('conn.php');
	include('user_header.php');
	$qry="select * from donations";
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
	  <th width="80">iddonations</th>
	  <th width="150">name</th>
	  <th width="159">amount</th>
	  <th width="159">posted_date</th>
      <th width="150">description</th>
      <th width="159">address</th> 	 
	  <th width="150"> </th>	
	
    </tr>
	  <tr>
		  <td colspan="12" height="25"></td>
	  </tr>
	<?php	 
	if(mysqli_num_rows($res)>0) 
	{		 
		while($row=mysqli_fetch_array($res)) 
		{       
	?>
	<tr>
			
      		<td><?php echo($row['iddonations']); ?></td>
      		<td><?php echo($row['name']); ?></td>
			<td><?php echo($row['amount']); ?></td>
			<td><?php echo($row['posted_date']); ?></td>
			<td><?php echo($row['description']); ?></td>
			<td><?php echo($row['address']); ?></td>
	 		<td> <a href="register_payments.php?a=<?php echo($row["iddonations"])?>" class="style1">Donate</a></td>
			
			
   	</tr>
	<?php
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