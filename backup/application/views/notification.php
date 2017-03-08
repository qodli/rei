<?php if (isset($_GET['delete-success'])): ?>
	
	<div class="col-xs-12">
	    <div class="alert alert-dismissable alert-danger">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <strong>Data Berhasil di Delete!</strong>
	    </div>
	</div>

<?php elseif (isset($_GET['success'])): ?>

	<div class="col-xs-12">
	    <div class="alert alert-dismissable alert-success">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <strong>Data Berhasil di Input!</strong>
	    </div>
	</div>


<?php elseif (isset($_GET['edit-success'])): ?>
	<div class="col-xs-12">
	    <div class="alert alert-dismissable alert-success">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <strong>Data Berhasil di Edit!</strong>
	    </div>
	</div>

<?php elseif (isset($_GET['password-success'])): ?>
	<div class="col-xs-12">
	    <div class="alert alert-dismissable alert-success">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <strong>Password Berhasil di Edit!</strong>
	    </div>
	</div>

<?php elseif (isset($_GET['password-failed'])): ?>
	<div class="col-xs-12">
	    <div class="alert alert-dismissable alert-danger">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <strong>Password Gaggal di Edit!</strong>
	    </div>
	</div>



<?php endif ?>