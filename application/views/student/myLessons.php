<nav class="navbar navbar-default">
    <div class="container-fluid navi">

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="laureli"><a href="#">laureli</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-star"></span><span> 5.0</span></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Sign Out</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
	<div class = "container-fluid">
		<div class = "container col-md-1"></div>
		<div class = "container col-md-2">
			<center><div class = "list-group-item"><img src="../assets/imgs/me.png" height = "150px" width = "150px" ></div></center>
			<div class = "list-group-item"><p class = "name">Pineda, Gabriel Andrew</p></div>

			<div class="list-group">
				<a href="myProfile" class="list-group-item">My Profile</a>
				<a href="#" class="list-group-item active">My Lessons</a>
				<a href="#" class="list-group-item">Payment Statements</a>
				<a href="#" class="list-group-item">Free Tutorials</a>
				<a href="#" class="list-group-item">Log Out</a>
				<a class = "list-group dummy"></a>
			</div>
		</div>
		<div class = "container col-md-9 name">
			<div class="container name">
			<table class="table" style="max-width:900px;">
				<tbody>
				<thead>
					<th colspan = "5"><h1>My Lessons</h1></th>
				</thead>
				<tr>
					<td><strong>Subject</strong></td>
					<td><strong>Tutor</strong></td>
					<td><strong>Fee</strong></td>
					<td><strong>City</strong></td>
					<td><strong>Payment Method</strong></td>
				</tr>
				<tr>
					<td>07/5/16</td>
					<td>Cris</td>
					<td>PHP1,000</td>
					<td>Cebu</td>
					<td>UB</td>
				</tr>
				<tr>
					<td>07/1/16</td>
					<td>Adrian</td>
					<td>PHP100</td>
					<td>Bohol</td>
					<td>UB</td>
				</tr>
				<tr>
					<td>05/3/16</td>
					<td>Patrick</td>
					<td>PHP10,000</td>
					<td>Talisay</td>
					<td>BPI</td>
				</tr>
				<tr>
					<td>02/1/16</td>
					<td>Dave</td>
					<td>PHP1.0</td>
					<td>Lapu-Lapu</td>
					<td>BPO</td>
				</tr>
				<tr>
					<td>01/19/16</td>
					<td>Joshua</td>
					<td>PHP200.0</td>
					<td>Cebu</td>
					<td>UB</td>
				</tr>
				<tr>
					<td>01/1/16</td>
					<td>Laurence</td>
					<td>PHP100.0</td>
					<td>Cebu</td>
					<td>BDO</td>
				</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</body>
</html>

<script>
    /*$(document).ready(function(){
      <!-- navbar transition script -->
	  $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $(".navbar-fixed-top").css("background-color", "#ffffff"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".navbar-fixed-top").css("background", "rgba(255, 255, 255, 0.3)"); // if not, change it back to transparent
        }
      });
    });*/
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