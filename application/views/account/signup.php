<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
		<div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
				<div class = "col-md-2"></div><div class = "col-md-4"><a href="laureleye.com" class="navbar-brand" id = "brand-text"><p class = "navtext">laureleye</p></a></div>
				<div class = "col-md-4">
			<!-- Collection of nav links and other content for toggling -->
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.html" title = "Log In"><p class = "navtext">Log In</p></a></li>
					<li><a href="signup.html" title = "Sign Up"><p class = "navtext">Sign Up</p></a></li>
				</ul>
			</div>
			</div>
		</div>
	</nav>

  <div class="container-fluid bg-2" style="background-image: url('../assets/imgs/bg.jpg'); background-size: cover;">
    <div class="col-md-4">
    </div>
    <div class="col-md-4 content" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 10px; padding-bottom: 30px">
      <div class="form-group">
        <span class="glyphicon glyphicon-plus" style="color: black"> <span class="loginform">Sign Up</span></span>
      </div>
      <form method="POST" action="signup">
        <div class="form-group">
          <a href="https://www.facebook.com">
            <img src="../assets/imgs/google.png" width="100%" height="40px" class="login"/>
          </a>
        </div>
        <div class="form-group">
          <a href="https://www.google.com">
            <img  src="../assets/imgs/facebook.png" width="100%" height="40px" class="login"/>
          </a>
        </div>
        <div class="form-group  loginform text-muted" style="font-style: italic"><center>------------------ or ------------------</center>
        </div>
        <div class="form-group loginform">
          <label for="exampleInputEmail1">Username:</label>
          <input name="username" type="email" class="form-control" id="exampleInputUsername" placeholder="Email">
        </div>
        <div class="form-group loginform">
          <label for="exampleInputEmail1">Email:</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
        </div>
        <div class="form-group loginform">
          <label for="exampleInputPassword1">Password:</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group loginform">
          <input type="checkbox"> I agree to the <a href="">terms of use</a></label>
        </div>
        <button type="submit" class="btn btn-block btn-warning loginform">Sign In</button>
      </form>
    </div>
    <div clss="col-md-4">
    </div>
  </div>

  <div class ="container-fluid bg-6">
		<div class = "container">
			<!-- DIV 6 -->
			<h1 align = "center">Footer</h1><br><br>
		</div>
	</div>