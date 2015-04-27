<!-- Modal login-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> LOGIN</h4>
      </div>
      <div class="modal-body">
       
   
		<div class="row ">
  				<?php
  				$attributes = array('class' => 'form-horizontal', );

				 echo form_open('', $attributes); 	?>
				<div class="form-group">
					<div class="col-md-offset-2 col-sm-8">
  						<div class="input-group">
  							<span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
  							<input type="text" class="form-control glyphicon glyphicon-user col-xs-3" name="username" placeholder="E-mail" aria-describedby="basic-addon1">
  						</div>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-md-offset-2 col-sm-8">
  						<div class="input-group">
  							<span class="input-group-addon glyphicon glyphicon-pencil" id="basic-addon1"></span>
  							<input type="password" class="form-control glyphicon glyphicon-pencil col-xs-3" name="password" placeholder="Password" aria-describedby="basic-addon1">
  						</div>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-md-offset-2 col-sm-8">		
  						<button type="submit" class="btn btn-info btn-lg btn-block">log in</button>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-md-offset-5 col-sm-8">		
  						<label style="text-align: center; margin-left:5%;">or</label>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-md-offset-2 col-sm-8">		
  						<button type="submit" class="btn btn-primary btn-lg btn-block" disabled="disabled">Log in with Google</button>
  					</div>
  				</div>
  			</div>
  			<?php echo form_close()?>

    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-toggle="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Login</button> -->
      </div>
    </div>
  </div>
</div>