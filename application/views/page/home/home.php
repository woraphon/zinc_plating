<?php
   $this->view('include/header');
   $this->view('include/navbar');
   //$this->view('include/slide');
?>   
	<div class="container">

<div class="row">
	<br>
		<div class="col-md-6"> 
			<?php $this->view('include/slide');?>	
		</div>
		<!-- main content -->
		
      	<div class="col-md-6">
      	<!-- open Update -->
      	<div class="panel panel-black">
 		 <!-- Default panel contents 
  		<div class="panel-heading"></div> -->
  		<div class="panel-body">
        		<div class="row">
  					<div class="col-sm-6 col-md-6">
   	 					<div class="boxpic">
      						<img src="<?php echo base_url()?>images/home/jig.jpg" alt="...">
      						<div class="caption">
        						<!-- <h3 align="center">JIG</h3> -->
        						<p align="center"><a href="#" class="btn btn-primary btn-sm" role="button">JIG</a></p>
      						</div>
    					</div>
  					</div>
  					<div class="col-sm-6 col-md-6">
   	 					<div class="boxpic">
      						<img src="<?php echo base_url()?>images/home/zinc.jpg" alt="...">
      						<div class="caption">
        						<!-- <h3 align="center">ZINC</h3> -->
        						<p align="center"><a href="#" class="btn btn-primary btn-sm" role="button">ZINC</a> </p>
      						</div>
    					</div>
  					</div>
  					
  					
				</div>
			</div>
			</div>
			<!-- close update  -->	
  			</div>
  		
      	</div>
      
		

   
   
 <?php  $this->view('include/footer');