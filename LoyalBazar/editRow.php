<?php

	include "loyal_db.php";
	
	$id= $_GET['id'];
	

	$sql="SELECT * FROM loyal_client_db WHERE ID=$id";
	$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	while ($row=mysqli_fetch_assoc($res)) {
		
		$noOfTreayRecieved=$row['noTreayRecieved'];
		$client_name=$row['ClientName'];
		$ID=$row['ID'];
	}
?>

<div class="container">
	<div class="row">
		<div class="col-md-6" style="margin-top: 5%;margin-left: 10%;">
			<form method="post" action="editSendRow.php">
				<div class="input-group" style="width: 70%;margin-left: 30%;font-size: 25px;color: green;">
					<label>Edit Treay</label>	
				</div><br>
				<div class="input-group" style="width: 60%;margin-left: 10%">
					<label>Client Id:</label>
				</div>
				<div class="input-group" style="width: 60%;margin-left: 10%">
					<input type="text" name="clientId" value="<?php echo $ID;?>" class="form-control">
				</div><br>
				<div class="input-group" style="width: 60%;margin-left: 10%">
					<label>Client Name:</label>
				</div>	
				<div class="input-group" style="width: 60%;margin-left: 10%">
					<input type="text" name="clientName" value="<?php echo $client_name;?>" class="form-control">
				</div><br>
				<div class="input-group" style="width: 60%;margin-left: 10%">
					<label> Enter no of treay to update:</label>
				</div>
				<div class="input-group" style="width: 60%;margin-left: 10%">
					<input type="text" name="noOfTreayRecieved" value="<?php echo $noOfTreayRecieved;?>" class="form-control">
				</div><br>
				<div class="input-group" style="width: 60%;margin-left: 10%">
					<input type="submit" name="editRow" class="form-control btn btn-success" value="Update Row" >
				</div>

			</form>>
		</div>
	</div>
</div>