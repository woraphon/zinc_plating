<?php
   $this->view('include/header');
   $this->view('include/navbar');
   //$this->view('include/slide');
?>  
	<div class="row">
		<div class="col-md-12">
			<div class=" ">
				<?php $this->view('include/slide');?>
			</div>
		</div>
	</div> 
	<br>
<div class="container">
	<div class="row">
  		<div class="col-md-5">
  			<div class="col-md-12 panel boxpic">
  				<p><strong class="">Zinc Plating Co.,Ltd.</strong>, provide component repair solutions, using Hard   Chrome plating, to a wide spectrum of customers in the engineering industry:   Oil/Gas, Marine, Automotive repair, Mold &amp; Die etc...
  				</p>
  				<a href="#"style="text-decoration:none"> Read More>></a>
  			</div>
  		</div>
  		<div class="col-md-2">
  			<div class="col-md-12 panel boxpic">
  				<img src="<?php echo base_url()?>images/iso.jpg" alt="...">
  			</div>
  		</div>
  		<div class="col-md-5">
  			<div class="col-md-12 panel boxpic">
				<p><strong class="">Zinc Plating Co.,Ltd.</strong>, provide component repair solutions, using Hard   Chrome plating, to a wide spectrum of customers in the engineering industry:   Oil/Gas, Marine, Automotive repair, Mold &amp; Die etc...
  				</p>
  				<a href="#"style="text-decoration:none"> Read More>></a>
  			</div> 				
  		</div>	
	</div>
	
 <?php  $this->view('include/footer');