<?php 
include ("header.php")
?>


<button type="button" class="btn btn-warning" data-toggle="model" data-target="#loginModel" name="login">
	
</button>




<script>$('#loginModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>



<div id="loginModel " class="model fade"  role="dialog">
	<div class="model-dialog">
		<div class="model-header">
          <button type="button" class="close" data-dismiss="model">X</button>
		<h4>Login</h4>
		</div>
	    <div class="model-body">
	    	<label>	Adresse Mail </label>
	    	<input type="text" name="username" id="username"  class="form-control">
	    	<br/>
	    	<label>Mot de passe</label>
	    	<input type="password" name="password" id="password" class="form-control">
	    	<br/>
	    	<button name="login-button" class="btn btn-warning" type="button" id="login-button"> Login</button>
	    </div>	
	    <div class="model-footer">
	    	
	    </div>
		
	</div>
</div>
<?php 
include ("footer.php")
?>


