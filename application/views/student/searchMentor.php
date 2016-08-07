<nav class="navbar navbar-default">
		<div class="container-fluid navi">

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="laureli"><a href="<?php echo base_url();?>">laureleye</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
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
			<div class = "list-group-item"><p class = "name">Pineda, Gabriel Andrew</p></div>

			<div class="list-group">
				<a href="<?php echo base_url();?>student/myProfile" class="list-group-item">My Profile</a>
				<a href="<?php echo base_url();?>student/myLessons" class="list-group-item">My Lessons</a>
				<a href="#" class="list-group-item">Payment Statements</a>
				<a href="#" class="list-group-item">Free Tutorials</a>
				<a href="<?php echo base_url();?>student/searchMentor" class="list-group-item active">Search Mentor</a>
				<a href="<?php echo base_url();?>account/logout" class="list-group-item">Log Out</a>
				<a class = "list-group dummy"></a>
			</div>
		</div>
		<div class = "container col-md-9 name">
			<div class="container name">
			<table class="table" style="max-width:900px;">
				<tbody>
				<thead>
					<th colspan = "5"><h1>Pineda, Gabriel Andrew A.</h1></th>
				</thead>
			        <tr >
			          <td>
			        <!--     <input type="text" placeholder="Input Subject" /> -->
			        	<form id="searchParameters">
			        	<div class="container">
			        	<div class="col-md-2">
			            <select class="form-control" name="language">
						  <option value="1" selected>English</option> 
						  <option value="2" >Tagalog</option>
						  <option value="3">Chinese</option>
						  <option value="4">Farsi</option>
						</select>
						</div>
						<div class="col-md-2">
			            <input class="form-control" name="price" type="text" placeholder="Tutorial Fee(per hour)"/>
			            </div>
			            <div class="col-md-2">
			            <select class="form-control" name="subject">
						  <option value="1" selected>Math</option> 
						  <option value="2" >Physics</option>
						</select>
						</div>
						<div class="col-md-2">
						<button class="btn btn-primary">Search Mentor</button>
						</div>
						</div>
			            
			            </form>
			            </td>
			        </tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>