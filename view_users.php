<?php
session_start();
	require_once('conn.php');
	include('header.php');
	$qry="select * from registration";
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
		  <td colspan="8" height="42" align="center"><b>LIST OF USERS</b></td>
	  </tr>
    <tr>
	  <th width="159">User Id</th>
	  <th width="159">First name</th>
      <th width="159">Last name</th>
	  <th width="150">Address</th>
      <th width="120">Mobile</th>
      <th width="157">Email</th>
	  <th width="100">Pincode</th>
	  <th>Action</th>
	 
    </tr>
	  <tr>
		  <td colspan="8" height="25"></td>
	  </tr>
	<?php
	
	 
	if(mysqli_num_rows($res)>0) 
	{
		 
		while($row=mysqli_fetch_array($res)) 
		{
       
	?>
	<tr>
      		<td><?php echo($row['user_id']); ?></td>
      		<td><?php echo($row['first_name']); ?></td>
			<td><?php echo($row['last_name']); ?></td>
			<td><?php echo($row['address']); ?></td>
			<td><?php echo($row['mobile']); ?></td>
			<td><?php echo($row['email']); ?></td>
			<td><?php echo($row['pincode']); ?></td>
			
			
			<td width="92">
			 <a href="delete_user.php?a=<?php echo($row["0"])?>" class="style1">Delete</a></td>
			
   	</tr>
	<?php
		}
		
	}
	else
	{
    	echo "0 results";
	}

?>
  </table>
</div>
 
<?php
include('footer.php')
?>