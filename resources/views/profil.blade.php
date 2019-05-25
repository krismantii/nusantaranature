<!DOCTYPE html>
<html lang="en">
<head>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo asset('css/profil.css')?>" type="text/css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container emp-profile">
		<button><a href="/">Home</a></button>
			<div class="row">
				<div class="col-md-4">
        	<div class="profile-img">
          	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
            <div class="file btn btn-lg btn-primary">
            	Change Photo
              <input type="file" name="file"/>
            </div>
          </div>
        </div>
        <div class="col-md-6">
        	<div class="profile-head">
          <h5>{{ Auth::user()->name }}</h5>
					<h6>Web Developer and Designer</h6>
					<p class="proile-rating">{{ Auth::user()->email }}</span></p>
				</div>
      </div>
			<div class="col-md-2">
				
      	<input type="submit" href="editprofil" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
      </div>
</div>
					<button><a href="editpost">Edit Post</a></button>
					<div class="col-lg-7">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
								  <li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#article" role="tab">Article</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#campaign" role="tab">Campaign</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#komunitas" role="tab">Community</a>
								  </li>	 
								</ul>

								<!-- Tab panes -->
							<div class="tab-content">
									
								  <div class="tab-pane active" id="article" role="tabpanel"> 
											@foreach($posts as $post)	
											<div class="list-group">
											  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">                      
													<h5 class="mb-1">{{ $post->title }}</h5>
												  <small>{{ $post->created_at }}</small>
												</div>
												<p class="mb-1">{{ $post->body }} <span id="dots">...</span> </p>
												<small>{{$post->comments->count()}} {{ str_plural('comment', $post->comments->count()) }}</small>
												</a>
											</div> 
											@endforeach
								  </div>

									
								  <div class="tab-pane" id="campaign" role="tabpanel">
											@foreach($camps as $camp) 
								  		<div class="list-group">
											  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
												  <h5 class="mb-1">{{ $camp->nama_camp }}</h5>
												  <small>{{ $camp->created_at }}</small>
												</div>
												<p class="mb-1">{{ $camp->desc_camp }}</p>
												<small>{{ $camp->daerah }}</small>
											  </a>
											</div>
											@endforeach	
								  </div>
                  

									
								  <div class="tab-pane" id="komunitas" role="tabpanel">
											@foreach($komunitas as $item)
											<div class="list-group">
													<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">{{ $item->nama }}</h5>
														<small>{{ $item->created_at }}</small>
													</div>
													<p class="mb-1">{{ $item->deskripsi }}</p>
													<small> {{ $item->daerah }}</small>
													</a>
											</div>	
											@endforeach
								  </div>
									

              </div>
          </div>
</body>
</html>