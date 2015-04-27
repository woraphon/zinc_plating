<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content ">
    <div role="tabpanel" class="tab-pane active " id="home">.1.
    	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. </p>
    </div>
    <div role="tabpanel" class="tab-pane " id="profile">.2.
    	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. </p>
    </div>
    <div role="tabpanel" class="tab-pane " id="messages">.3.
    	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. </p>
    </div>
    <div role="tabpanel" class="tab-pane " id="settings">.4.
    	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. </p>
    </div>
  </div>
	
		<script>
  		$(function () {
   	 		$('#myTab a[href="#profile"]').tab('show') // Select tab by name
			$('#myTab a:first').tab('show') // Select first tab
			$('#myTab a:last').tab('show') // Select last tab
			$('#myTab li:eq(2) a').tab('show') // Select third tab (0-indexed)
			$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		  		e.target // newly activated tab
		  		e.relatedTarget // previous active tab
				})
  		})
		</script>	
		
	</div>


