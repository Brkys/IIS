  
<!DOCTYPE html>
<html lang="cz">
<head>
	<title>Mafie</title>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/app.css">

	<!-- Bootstrap CSS --> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body background="black">

	<!-- Navigator panel -->
	<nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background-color: #262626">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent"> 
	    	<ul class="navbar-nav mr-auto">
	      		<li class="nav-item active">
	    	    	<a class="nav-link" href="#">Domů <span class="sr-only">(current)</span></a>
	   		   </li>
	   	    	<li class="nav-item">
	     		   <a class="nav-link" href="#">Novinky</a>
	      		</li>
				  @if(isset($data))
				  <li class="nav-item">
  					<a class="nav-link" href=""><?php echo($data['name']) ?></a>
				  </li>
				  <li class="nav-item">
  					<a class="nav-link" href=""><?php echo($data['pwd']) ?></a>
				  </li>
				  @endif
	      		<li class="nav-item dropdown">
	        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Přehled</a>
	        		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          			<a class="dropdown-item" href="#">Rodiny</a>
	          			<a class="dropdown-item" href="#">Členové</a>
	          			<div class="dropdown-divider"></div>
	          			<a class="dropdown-item" href="#">Území</a>
	        		</div>
	      		</li>
	    	</ul>
    		<span class="navbar-text my-2 my-sm-0 pr-1">
			    <a class="btn btn-sm my-2 my-sm-0" href="#" data-toggle="modal" data-target="#registerModal">Registrovat se</a>
			</span>
      		<button class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="modal" data-target="#loginModal">Příhlásit se</button>
		</div>
	</nav>



	<!-- Modal login --> 
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labeledby="modal_login">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal_login">Login</h5>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body" id="modal_body">
  				<form action="login" method="post">

                    <label>Uživatelské jméno</label>
                    <input type="text" name="username" id="username" class="form-control"/>
                    <br/>
                    <label>Heslo</label>
                    <input type="password" name="password" id="password" class="form-control" />
					@csrf
                    <br/>
                    <button type="submit" name="login_btn" id="login_btn" class="btn btn-outline-success">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal register -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
 
                <form id="formRegister" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name">
                            <small class="help-block"></small>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email">
                            <small class="help-block"></small>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">
                            <small class="help-block"></small>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-outline-success">
                                Register
                            </button>
                        </div>
                    </div>
                </form>                       
 
            </div>
        </div>
    </div>
</div>

	<!-- Bootstrap javascript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


@if(!empty(Session::get('openLogin')) && Session::get('openLogin') == true)
<script>
$(document).ready(function() {
$("#loginModal").modal('show');
});
</script>
@endif


</body>
</html>