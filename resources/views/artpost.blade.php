<head>

	<style> 
	@font-face {
  	font-family: Montserrat;
  	src: url('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900');
}
		.badan { 
	background-image: url('images/login.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center; 
	}
	.hero-image {
	background-image: url('images/login.jpg'); /* The image used */
	/*background-color: #cccccc; Used if the image is unavailable */
	height: 500px; /* You must set a specified height */
	background-position: center; /* Center the image */
	background-repeat: no-repeat; /* Do not repeat the image */
	background-size: cover; /* Resize the background image to cover the entire container */
	}
		.kotak {
		border-radius: 5px;
  		background-color: #131a2f;
		padding: 20px;
		padding-bottom: 50px;
		
}
</style>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body class="hero-image">
<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1 style="position: center">Create post</h1>
			<div class="Kotak">	


			<form action="{{ route('postsstore') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group has-feedback{{ $errors->has('title') ? ' has error ' : ''}}" style="width:300px">
					<label for="" style="color: #ffffff; font: Montserrat, sans serif;">Title</label>
					<input type="text" class="form-control" name="title" placeholder="Post title" value="{{ old('title') }}">
					@if($errors->has('title'))
						<span class="help-block">
							<p>{{ $errors->first('title')}}</p>
						</span>
					@endif
				</div>


				<div class="form-group has-feedback{{ $errors->has('content') ? ' has error ' : ''}}" style="width:700px">
					<label for="" style="color: #ffffff; font: Montserrat, sans serif;">Content</label>
					<textarea name="desc" id="" rows="9" class="form-control" placeholder="Post content">{{ old('content') }}</textarea>
					@if($errors->has('content'))
						<span class="help-block">
							<p>{{ $errors->first('content')}}</p>
						</span>
					@endif           
				</div>

				<div class="form-group has-feedback{{ $errors->has('image') ? ' has error ' : ''}}" style="width:700px">
					<label for="" style="color: #ffffff; font: Montserrat, sans serif;">Image</label>
					<input type="file" name="image">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>


			</div>
		</div>
		
	</div>
</div>
</body>
