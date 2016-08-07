<nav class="navbar navbar-default">
		<div class="container-fluid navi">

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="laureli"><a href="<?php echo base_url();?>">laureleye</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-star"></span><span> 5.0</span></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url();?>student/myProfile">Profile</a></li>
							<li><a href="<?php echo base_url();?>account/logout">Sign Out</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class = "container-fluid">
		<div class = "container col-md-1"></div>
		<div class = "container col-md-2">
			<center><div class = "list-group-item"><img src="<?php echo base_url();?>assets/imgs/me.png" height = "150px" width = "150px" ></div></center>
			<div class = "list-group-item"><p class = "name"><?php echo $name;?></p></div>

			<div class="list-group">
				<a href="<?php echo base_url();?>student/myProfile" class="list-group-item active">My Profile</a>
				<a href="<?php echo base_url();?>student/myLessons" class="list-group-item">My Lessons</a>
				<a href="#" class="list-group-item">Payment Statements</a>
				<a href="#" class="list-group-item">Free Tutorials</a>
				<a href="<?php echo base_url();?>account/logout" class="list-group-item">Log Out</a>
				<a class = "list-group dummy"></a>
			</div>
		</div>
		<div class = "container col-md-9 name">
			<div class="container name">
			<table class="table" style="max-width:900px;">
				<tbody>
				<thead>
					<th colspan = "5"><h1><?php echo $name;?> A.</h1></th>
				</thead>
				<tr>
					<td colspan = "5"><strong>General Information</strong></td>
				</tr>
				<tr>
					<td><strong>Name</strong></td>
					<td><?php echo $name;?></td>

					<td><strong>Location</strong></td>
					<td>Philippines,Cebu</td>
				</tr>
				<tr>
					<td><strong>Profile Photo</strong></td>
					<td><img src = "<?php echo base_url();?>assets/imgs/me.png" height = "50px" width = "50px"></img></td>
					<td><strong>Mobile </strong></td>
					<td>09228325365</td>
				</tr>
				<tr>
					<td><strong>Email Address:</strong></td>
					<td colspan = "3"><?php echo $email;?></td>
				</tr>
				<tr>
					<td colspan = "4"><center><button type="button" class="btn btn-info" style = "width: 200px">Save</button></center></td>
				</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</body>
</html>

<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>