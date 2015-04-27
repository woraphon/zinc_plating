<!-- Modal register-->
<div class="modal fade " id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Register</h4>
      </div>
      <div class="modal-body">
        
        <?php
  				$attributes = array('class' => 'form-horizontal', );

				 echo form_open('index/login', $attributes); 	?>
				<div class="form-group">
					<div class="col-md-offset-1 col-sm-8">
  						<div class="input-group">
  							<span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
  							<input type="text" class="form-control glyphicon glyphicon-user col-xs-3" name="username" placeholder="E-mail" aria-describedby="basic-addon1" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
  						</div>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-md-offset-1 col-sm-8">
  						<div class="input-group">
  							<span class="input-group-addon glyphicon glyphicon-pencil" id="basic-addon1"></span>
  							<input type="password" class="form-control glyphicon glyphicon-pencil col-xs-3" name="password" placeholder="Password" aria-describedby="basic-addon1">
  						</div>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-md-offset-1 col-sm-8">
  						<div class="input-group">
  							<span class="input-group-addon glyphicon glyphicon-pencil" id="basic-addon1"></span>
  							<input type="password" class="form-control glyphicon glyphicon-pencil col-xs-3" name="password" placeholder="Password" aria-describedby="basic-addon1">
  						</div>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-md-offset-1 col-sm-8">		
  						<button type="submit" class="btn btn-info btn-lg btn-block">Register</button>
  					</div>
  				</div>
               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>