<?php 

	//session_start();
	$role=$_SESSION['Role'];
	$id=$_SESSION['UserId'];
	include "loyal_db.php";
?>

<div class="container">
	<div class="row">
		<div class="col-md-12" style="margin-top: 30px;float: left;">
	 		<div class="col-md-6" style="float: left;">
				<form method="post" action="validateAddTreay.php">
					<div class="col-md-12" style="margin-left: 1%;">
						<div class="input-group"  style="width: 70%;margin-left: 10%">
							<input type="number" name="noOfTreay" id="noOfTreay" class="form-control" placeholder="Enter Treay">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-th"></i></span>
							</div>
				    	</div><br>
				    	<div class="input-group"  style="width: 70%;margin-left: 10%">
							<button type="submit" id="addTreay" name="addTreay" class="form-control btn btn-success"> <span ><i class="fa fa-cart-plus"></i></span> &nbsp;Add Treay
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4" style="float: right;">
				<div style="border: 1px solid black;text-align: center;background-color: orange;color:green;font-size: 20px;padding-top: 1px;">
					<p>Number of Treay Remaining:</p>
					<p><?php $sql="SELECT * FROM loyal_user WHERE UserID=$id";
						$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
						while($row=mysqli_fetch_assoc($res)){
							$noOfTreays=$row['noOfTreay'];
							echo $noOfTreays;		
						} ?>
					</p>
				</div>
			</div>
	</div>
	</div>
</div>
