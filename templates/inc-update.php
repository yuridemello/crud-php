<?php
	require_once('database/inc-update.php');
?>
<form method="post">
	<div class="form-group">
		<label for="exampleInputEmail1">Name</label>
		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user['name']; ?>" name="name">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user['email']; ?>" name="email">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Phone</label>
		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $user['phone']; ?>" name="phone">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1" value="<?= $user['password']; ?>" name="password">
	</div>
	<button type="submit" class="btn-create">Submit</button>
</form>
