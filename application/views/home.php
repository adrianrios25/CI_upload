<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Codeigniter Upload Image with Preview Sample</title>

<!-- Bootstrap -->
<link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<div class="container-fluid theme-showcase" role="main">
	<div class="row">	
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header">
				<h1>Codeigniter Upload Image with Preview Sample</h1>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
	<div class="panel panel-primary">
		<div class="panel-heading">Upload file</div>
		<div class="panel-body">
			<?php echo form_open_multipart('home/upload', array('role'=>'form'));
			if(isset($message)): 
			echo "<div class='alert alert-success'>".$message."</div>";
			endif; ?>	
			<div class="form-group">
				
				<label for="title">File</label>
				<input type="file" name="userfile" id="image" onchange="readURL(this)"/>
			</div>
			<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div id="previewLoad" style='margin-left: 0px; display: none'>
					<img src='<?php echo base_url();?>images/loading.gif'/>
				</div>
				<div class="image_preview">
				
				</div>
			</div>
			</div>					
			
			<hr />
			<input type="submit" value="Save" class="btn btn-primary"/>
			<a href="#" onclick="reset();" class="btn btn-warning">reset</a>
			<hr />			
		
			<?php form_close();
			if(isset($errors)):
				echo "<div class='alert alert-danger'>".$errors."</div>";
			endif; ?>			
		</div>
		<div class="row">
		<?php if($uploaded_images):?>
		<?php foreach($uploaded_images as $images):?>
			<div class="col-md-6">
				<div class="well">
					<img src="<?php echo base_url()."uploads/".$images->file_dir;?>" alt="" class="img-thumbnail" width="100%" height="auto"/>
					Date Uploaded: <?php echo $images->date_uploaded;?>
				</div>
			</div>			
		<?php endforeach; ?>
		<?php endif; ?>
		</div>
	</div>
	</div>
	</div>
	</div> <!-- end container -->	

	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	function readURL(input) {
	$('#previewLoad').show();
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('.image_preview').html('<img src="'+e.target.result+'" alt="'+reader.name+'" class="img-thumbnail" width="304" height="236"/>');
		}

		reader.readAsDataURL(input.files[0]);
		$('#previewLoad').hide();
	}
	}
	
	function reset(){
	$('#image').val("");
	$('.image_preview').html("");
	}
	</script>
</body>
</html>