<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
<style> 
	@font-face {
  	font-family: Montserrat;
  	src: url('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900');
}
		.badan { 
	background-image: url('images/last.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center; 
	}
	.hero-image {
	background-image: url('images/last.jpg'); /* The image used */
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
		
		div.kotak label{
		font-weight: bold;
  		
		}
</style>
</head>
<body class="hero-image">
<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1 style="position: center"> Create article</h1>
    		
			<div class="Kotak">
    		<form action="{{ route('camp.store') }}" method="POST">
    		    {{ csrf_field() }}
    		    <div class="form-group">
    		        <label style="font-family: 'Montserrat', sans-serif; font-size: 14px; color: #ffffff;" for="nama">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="nama" />
    		    </div>

    		    <div class="form-group">
					<div class="tulisan">
    		        <label style="font-family: 'Montserrat', sans-serif; font-size: 14px; color: #ffffff;" for="area">Area</label>
    		        <textarea rows="5" class="form-control" name="area" ></textarea>
					</div>
    		    </div>

    		    <div class="form-group">
    		        <label style="font-family: 'Montserrat', sans-serif; font-size: 14px; color: #ffffff;" for="desc">Description</label>
    		        <textarea rows="5" class="form-control" name="desc" ></textarea>
    		    </div>
    		    
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Post
    		        </button>
    		        <button class="btn btn-default"><a href="artikel">
    		            Discard
                    </a>
    		        </button>
    		    </div>
    		    
    		</form>
			</div>
		</div>
		
	</div>
</div>
</body>