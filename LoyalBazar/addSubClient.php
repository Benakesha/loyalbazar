
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="container"  style="margin-left: 20%;">
				<div class="row">
					<div class="col-md-12">
						<form method="post"  action="validateAddUser.php">
							<div style="margin-left: 11%;color: green;font-size: 30px;">
								<p>Add New Client:</p>
								<h4 style="color: red;font-size: 15px;float: left;"> 
								<?php if(!isset($_GET['msg'])=='clientExist'){  
					                     }else{
					                      $error="user already present in database";
					                     echo $error;
					                  }

					                 ?>
					          </h4><br>
							</div>
							
							<div class="input-group" style="width:40%;">
								<input type="text" name="txtUserName" class="form-control" placeholder="User Name">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-user"></i></span>
								</div>
							</div><br>
							<div class="input-group" style="width:40%;">
								<input type="text" name="txtEmailId" class="form-control" placeholder="Email Id">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-at"></i></span>
								</div>
							</div><br>
							<div class="input-group" style="width:40%;">
								<input type="password" name="txtPassword" class="form-control" placeholder="Password">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-key"></i></span>
								</div>
							</div><br>
							<div class="input-group" style="width:40%;">
								<input type="text" name="txtConfirmPassword" class="form-control" placeholder="Confirm Password">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-key"></i></span>
								</div>
							</div><br>
							<div class="input-group" style="width:40%;">
								<label for="userType" style="color:black;font-weight: bold;">Select User Type:</label>
							</div>
							<div class="input-group" style="width:40%;">
								<select class="form-control" name="UserType" >
									<option value="normaluser">Normal User</option>
									<option value="adminuser">Admin User</option>
								</select>
								
							</div><br>
							<div class="input-group" style="width:40%;">
								<button type="submit" id="addUser" name="addUser" class="btn btn-success form-control">Add User</button>
							</div><br><br><br><br><br><br>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

