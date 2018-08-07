	<?php
		include "loyal_db.php";

		$UserID= $_SESSION['UserId'];
		$sessionRole=$_SESSION['Role'];
		
		$sql= "SELECT * FROM loyal_user WHERE UserID=$UserID";
		$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

		while($row=mysqli_fetch_assoc($res)){

			$id=$row['UserID'];
			$noOfTreay=$row['noOfTreay'];
			$role=$row['role'];

		}
	?> 

	<style type="text/css">
		.addTreay{
			margin-top: 40px;
			margin-left: 60px;
		}

		#customers {
		    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		    border-collapse: collapse;
		    width: 68%;
		    margin-left: 7%;
		  
		}

		#customers td, #customers th {
		    border: 1px solid #ddd;
		    padding: 8px;padding-left: 30px;
		    color: white;
		 	font-weight: bold;

		    
		}

		#customers tr:nth-child(even){background-color:#ddd;padding-left: 30px;color: orange;}

		#customers tr:hover {background-color: orange;color: white;}

		#customers th {
		    padding-top: 12px;
		    padding-bottom: 12px;
		    padding-left: 30px;
		    text-align: left;
		    background-color: #4CAF50;
		    color: white;
		}


	</style>
	<div class="container addTreay">
		<div class="row">
			<div class="col-md-12">
			<form method="post" action="validateSendTreay.php">
				<div class="col-md-6" style="float: left; margin-top: -30px;">
						<div class="input-group"  style="width: 70%;margin-left: 10%;font-weight: bold;">
							<label for="userNames">Select Users:</label>
						</div>
						<div class="input-group"  style="width: 70%;margin-left: 10%">
							<select id="userNames" name="userNames" class="form-control">
							<!--	<option value="dominos">dominos</option>
								<option value="pizza hut">pizza hut</option>
								<option value="swiggy">swiggy</option>
							-->
							<?php 
								$sql = "SELECT lc.client_name FROM loyal_user_client lc,loyal_user u WHERE lc.client_admin_id=$id and u.UserID=$id";
								// lc.client_admin_id = u.CompanyID and u.UserID=$UserID"
								$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
								while ($row = mysqli_fetch_assoc($res)){?>
								<option value='<?php echo $row["client_name"];?>'> <?php echo $row['client_name']; ?></option>;
								<?php }
							?>
							</select>
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-users"></i></span>
							</div>
						</div><br>
						<div class="input-group"  style="width: 70%;margin-left: 10%">
							<input type="number" name="noOfTreay" id="noOfTreay" class="form-control" placeholder="Enter no of treay to send">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-th"></i></span>
							</div>
						</div><br>
						<div class="input-group"  style="width: 70%;margin-left: 10%">
							<button type="submit" name="btnSendTreay" id="btnSendTreay" class="form-control btn btn-primary"><span><i class="fa fa-share-square-o"></i></span>&nbsp;&nbsp;Send Treay</button>
						</div>
					</div>	
					<div class="col-md-4" style="border: 1px solid black;text-align: center;background-color: orange;color:green;font-size: 20px;padding-top: 10px;float: right;margin-right: 10px;">
							<p>No of Treay Remaining</p>
							<p><?php echo $noOfTreay;?></p>
					</div>	

				<br>
				<br><br>
			</form>
				</div>
			</div>
		</div> 
		
		<div class="container" id="c2" style="display:show;">
			<div class="row">
			
				<div class="col-md-12" style="margin-top: 30px;">
					<table class="table table-striped table-eco" id="customers">
						<thead>
					    	<tr>
					    		<th valign="middle">SL No.</th>
							    <th valign="middle" >Client Name </th>
							    <th valign="middle" >No of Treay Sent</th>
							    <th valign="middle" >Treay Sent Date</th>
							    <th valign="middle"> Action</th>
							</tr>
							<?php
									include "loyal_db.php";
									$sql="SELECT * FROM loyal_client_db WHERE CompanyID=$id";

									//WHERE c.CompanyID=$id and u.UserID=$id";
										$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
										$count=mysqli_num_rows($res);
										$lastValue=0;
										while ($row=mysqli_fetch_assoc($res)) {
												
												$client_name=$row['ClientName'];
												$noTreayRecieved=$row['noTreayRecieved'];
												$TreaySentDate=$row['TreaySentDate'];
												$id=$row['ID'];
												$lastValue=$lastValue+1;
											
											//	$subNoOfTreay=$row['noOfTreay']-$noTreayRecieved;
											
								?>
							<tbody>
								<td><?php echo $lastValue;?></td>
								<td><?php echo $client_name;?></td>
								<td><?php echo $noTreayRecieved; ?></td>
								<td><?php echo $TreaySentDate; ?></td>
								<td align="center"><?php 
									if($sessionRole=='normaluser'){ ?>
										<i id="noEdit" title="Editing disabled" class="fa fa-expeditedssl"></i></td>
									<?php }else if($lastValue == $count){ ?>
									 <a href="editSendTableRow.php?ids=<?php echo $id;?>"><i class="fa fa-pencil-square-o" style="color:blue;font-size: 16px;" title="Edit"></i></a>
									</td>
								<?php }else{ ?>
									<i id="noEdit" title="Editing disabled" class="fa fa-expeditedssl"></i>
								<?php }
									?></td>
							</tbody>
						<?php } ?>
						</thead>
					</table><br>
					<br><br><br>
					</div>
			
		</div>
	</div>
	<div class="container" id="c3" style="display: none">

	</div>
