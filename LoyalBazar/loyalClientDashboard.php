<?php

	$id=$_SESSION['UserId'];
	$userName=$_SESSION['UserName'];

//	echo $id;
	$sql="SELECT C.*,U.* FROM loyal_user_client C,loyal_user U WHERE U.CompanyID=C.client_admin_id and U.UserName = '$userName'";
	$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

	while ($row=mysqli_fetch_assoc($res)) {

		$clientName=$row['client_name'];
		$ids=$row['client_admin_id'];
	}		
?>
<style type="text/css">
		
		#customers {
		    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		    border-collapse: collapse;
		    width: 68%;
		    margin-left: 7%;
		  
		}

		#customers td, #customers th {
		    border: 1px solid #ddd;
		    padding: 8px;padding-left: 30px;
		    font-weight: bold;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;padding-left: 30px;}

		#customers tr:hover {background-color: orange;color: white}

		#customers th {
		    padding-top: 12px;
		    padding-bottom: 12px;
		    padding-left: 30px;
		    text-align: left;
		    background-color: #4CAF50;
		    color: white;
		}
</style>

<div class="container" id="c2" style="display:show;">
	<div class="row">
		<div class="col-md-12" style="margin-top: 30px;">
			<table class="table table-striped table-eco" id="customers">
				<thead>
			    	<tr>
			    		<th valign="middle">SL No.</th>
					    <th valign="middle">Client Name </th>
					    <th valign="middle">No Of Treay Received</th>
					    <th valign="middle">Treay Received Date</th>
					   
				   </tr>	
					<?php		
						$sql1="SELECT * FROM loyal_client_db WHERE ClientName='$userName'";
						$res1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
						$count=0;
						while($row1=mysqli_fetch_assoc($res1)){

							$client_name=$row1['ClientName'];
							$noTreayRecieved=$row1['noTreayRecieved'];
							$treayReceivedDate=$row1['TreaySentDate'];
							$count++;
						?>
							<tbody>			
								<td><?php echo $count;?></td>
								<td><?php echo $client_name;?></td>
								<td><?php echo $noTreayRecieved;?></td>
								<td><?php echo $treayReceivedDate;?></td>
							</tbody>
						<?php } ?>
				</thead>
			</table>
		</div>
	</div>
</div>

		

