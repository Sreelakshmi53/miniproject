<?php
session_start();
	require_once('conn.php');
	include('user_header.php');
	$qry="select * from event";
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
		  <td colspan="8" height="42" align="center"><b><h3>LIST OF EVENTS</h3></b></td>
	  </tr>
    <tr>
	  <th width="159">id event</th>
	  <th width="159">Event Name</th>
      <th width="159">Time slot</th>
	  <th width="150">description</th>
     <th width="150"> </th>
       
	  
	 
	 
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
      		<td><?php echo($row['idevent']); ?></td>
      		<td><?php echo($row['event_name']); ?></td>
			<td><?php echo($row['time_slot']); ?></td>
			<td><?php echo($row['description']); ?></td>
			 <td><a href="book_event.php?a=<?php echo($row["0"])?>" class="style1">Book Now</a></td>
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