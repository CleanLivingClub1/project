
<link href="{$TEMPLATE}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{$TEMPLATE}/css/style1.css" rel="stylesheet" type="text/css" />

<body>
	  <div class="container text-center">
            <div class="col-md-12">
              <h1 class="text-center">Clean Living Club</h1> 
            </div>
        </div>
	  	
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
		  
          <h4 class="text-center">Login</h4>
      </div>
	  
	   {if isset($logfail)}
     <div class="text-center">
        {$logfail}
		</div>
		
  	{/if}
      <div class="modal-body loginbody">
          <form class="form col-md-12 center-block" action="{$ADMIN_PATH}index.php" method="POST">
            <div class="form-group">
              <input type="text" name="username" class="form-control input-lg" placeholder="UserName">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" name="login">Sign In</button>
            </div>
          </form>
      </div>

  </div>
  </div> 
   
</body>
</html>
