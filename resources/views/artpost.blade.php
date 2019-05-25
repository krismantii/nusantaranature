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
	        
    		<h1 style="position: center">Create New Article</h1>
			<div class="Kotak">		
    		<form action="{{ route('postsstore') }}" method="POST" enctype="multipart/form-data">
    		    {{ csrf_field() }}
    		    <div class="form-group">
    		        <label style="font-family: 'Montserrat', sans-serif; font-size: 14px; color: #ffffff;" for="title"> Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" />
    		    </div>
    		    
    		    <div class="form-group">
    		        <label style="font-family: 'Montserrat', sans-serif; font-size: 14px; color: #ffffff;" for="description">Description</label>
    		        <textarea rows="5" class="form-control" name="description" ></textarea>
    		    </div>
    		    
    		    <div class="form-group">
    		        <p style="font-family: 'Montserrat', sans-serif; font-size: 14px; color: #ffffff;"><span >*</span> - required fields</p>
    		        
    		    </div>

					<input type="file" name="file">
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary" style="position: absolute; right:40px; background:#fe435b" name="submit">
    		            Post
    		        </button>
    		        <button class="btn btn-default" style="position: absolute; right:110px; background:#dddddd" ><a href="artikel" >
    		            Discard
                    </a>
    		        </button>
    		    </div>

    		</form>
			</div>
		</div>
		
	</div>
</div>
</div>
</body>
