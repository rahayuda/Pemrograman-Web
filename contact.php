    <br>
    <h2><b>Contact</b></h2>
    <br>

    <div class="jumbotron">
    	<h1 class="display-4">Hello, world!</h1>
    	<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    	<hr class="my-4">
    </div>

    <button type="button" class="btn btn-primary" id="myBtn1">Toast</button>
    <button type="button" class="btn btn-warning" id="myBtn2">Toast</button>
    <button type="button" class="btn btn-danger" id="myBtn3">Toast</button>
    <button type="button" class="btn btn-success" id="myBtn4">Toast</button>

    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 0px;">
    	<div style="position: absolute; bottom: 0; right: 0;" class="mt-0">

    		<div class="toast bg-primary mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-delay="500" data-autohide="true">
    			<div class="toast-body text-white">
    				<strong>Holy guacamole!</strong><br>Halo, ini pesan notifikasi toast.
    			</div>
    		</div>

    		<div class="toast bg-warning mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-delay="500" data-autohide="true">
    			<div class="toast-body text-white">
    				<strong>Holy guacamole!</strong><br>Halo, ini pesan notifikasi toast.
    			</div>
    		</div>

    		<div class="toast bg-danger mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-delay="500" data-autohide="true">
    			<div class="toast-body text-white">
    				<strong>Holy guacamole!</strong><br>Halo, ini pesan notifikasi toast.
    			</div>
    		</div>

    		<div class="toast bg-success mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-delay="500" data-autohide="true">
    			<div class="toast-body text-white">
    				<strong>Holy guacamole!</strong><br>Halo, ini pesan notifikasi toast.
    			</div>
    		</div>

    	</div>
    </div>

    <script>
    	$(document).ready(function(){
    		$("#myBtn1").click(function(){
    			$('.bg-primary').toast('show');
    		});
    	});
    </script>

    <script>
    	$(document).ready(function(){
    		$("#myBtn2").click(function(){
    			$('.bg-warning').toast('show');
    		});
    	});
    </script>

    <script>
    	$(document).ready(function(){
    		$("#myBtn3").click(function(){
    			$('.bg-danger').toast('show');
    		});
    	});
    </script>

    <script>
    	$(document).ready(function(){
    		$("#myBtn4").click(function(){
    			$('.bg-success').toast('show');
    		});
    	});
    </script>

