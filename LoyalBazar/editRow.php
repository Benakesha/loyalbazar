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
		<div class="col-md-6" style="margin-top: 2%;margin-left: 15%;">
			<form method="post" action="editSendRow.php">
				<div class="input-group" style="width: 70%;margin-left: 30%;font-size: 25px;color: green;font-weight: bold;">
					<label>Update Tray</label>	
				</div><br>
				<div class="input-group" style="width: 70%;margin-left: 10%;font-weight: bold;">
					<label>Client Id:</label>
				</div>
				<div class="input-group" style="width: 70%;margin-left: 10%;">
					<input type="text" name="clientId" value="<?php echo $ID;?>" class="form-control">
				</div><br>
				<div class="input-group" style="width: 70%;margin-left: 10%;font-weight: bold;">
					<label>Client Name:</label>
				</div>	
				<div class="input-group" style="width: 70%;margin-left: 10%">
					<input type="text" name="clientName" value="<?php echo $client_name;?>" class="form-control">
				</div><br>
				<div class="input-group" style="width: 70%;margin-left: 10%;font-weight: bold;">
					<label> Enter no of treay to update:</label>
				</div>
				<div class="input-group" style="width: 70%;margin-left: 10%">
					<input type="text" name="noOfTreayRecieved" value="<?php echo $noOfTreayRecieved;?>" class="form-control">
				</div><br>
				<div class="input-group" style="width: 70%;margin-left: 10%">
					<button type="submit" name="editRow" class="form-control btn btn-success">
						<span><i class="fa fa-pencil-square-o"></i></span>
						&nbsp;Update Tray
					</button>
				</div>

			</form>
		</div>
	</div>
</div>