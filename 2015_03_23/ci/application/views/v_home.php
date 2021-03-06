<div class="container">
	<!---Insert new user-->
	<h2>User List</h2>
	<button class="btn btn-info" data-toggle="modal" data-target="#addUserModel">Add User</button>
	<!-- Modal -->
	<div class="modal fade" id="addUserModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
	      </div>
	      <form method="post" action="<?php echo site_url('user/insert')?>">
		      <div class="modal-body">
						  <div class="form-group">
						    <label for="name">Name</label>
						    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter name">
						  </div>
						  <div class="form-group">
						    <label for="email">Email address</label>
						    <input type="email" class="form-control" id="email" name="email" value="" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="username">Username</label>
						    <input type="text" class="form-control" id="username" name="username" value="" placeholder="Username">
						  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">Insert</button>
		      </div>
				</form>
	    </div>
	  </div>
	</div><!--end of model-->
	<!---List of users-->
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Username</th>
					<th>Departemnt</th>
					<th>Action</th>
				</tr>
			<?php foreach($users as $user): ?>
				<tr>
					<td><?php echo $user->name; ?></td>
					<td><?php echo $user->email; ?></td>
					<td><?php echo $user->username; ?></td>
					<td><?php echo $user->departmentName; ?></td>
					<td>
						<a href="<?php echo site_url('user/delete/'.$user->id); ?>" ><span class="glyphicon glyphicon-trash text-danger"/></a>
						<a href="#" data-toggle="modal" data-target="#model<?php echo $user->id?>"><span class="glyphicon glyphicon-pencil text-info"/></a>
					</td>
				</tr>
				<!-- Modal -->
				<div class="modal fade" id="model<?php echo $user->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
				      </div>
				      <form method="post" action="<?php echo site_url('user/edit/'.$user->id)?>">
					      <div class="modal-body">
									  <div class="form-group">
									    <label for="name">Name</label>
									    <input type="text" class="form-control" id="name" name="name" value="<?php echo $user->name ?>" placeholder="Enter name">
									  </div>
									  <div class="form-group">
									    <label for="email">Email address</label>
									    <input type="email" class="form-control" id="email" name="email" value="<?php echo $user->email ?>" placeholder="Enter email">
									  </div>
									  <div class="form-group">
									    <label for="username">Username</label>
									    <input type="text" class="form-control" id="username" name="username" value="<?php echo $user->username ?>" placeholder="Username">
									  </div>
									  <div class="form-group">
									    <label for="department">Department</label>
									    <select class="form-control" id="department" name="department">
									    	<?php foreach($departments as $department): ?>
									    		<?php if($department->id == $user->department): ?>
														<option selected="selected" value="<?php echo $department->id ?>"><?php echo $department->name?></option>
													<?php else: ?>
														<option value="<?php echo $department->id ?>"><?php echo $department->name?></option>
													<?php endif ?>
												<?php endforeach ?>
									    </select>
									  </div>
					      </div>
					      <div class="modal-footer">
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
							</form>
				    </div>
				  </div>
				</div>
			<?php endforeach ?>
			</table>
		</div>
	</div>
</div>
