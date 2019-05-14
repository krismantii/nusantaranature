<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="js/bootstrap.min.js"></script>
		<!---- Bootstrap js link local for well and modal + panels ----->
<div class="container">
    <div class="row">
        <div class="col-sm-2 col-md-2">
            <img src="http://thetransformedmale.files.wordpress.com/2011/06/bruce-wayne-armani.jpg"
            alt="" class="img-rounded img-responsive" />
        </div>
        <div class="col-sm-4 col-md-4">
            <blockquote>
                <p> {{ Auth::user()->name }} </p> <small><cite title="Source Title">Gotham, United Kingdom  <i class="glyphicon glyphicon-map-marker"></i></cite></small>
            </blockquote>
            <p> <i class="glyphicon glyphicon-envelope"></i> masterwayne@batman.com
                <br
                /> <i class="glyphicon glyphicon-globe"></i> www.bootsnipp.com
                <br /> <i class="glyphicon glyphicon-gift"></i> January 30, 1974</p>
        </div>
    </div>
</div>
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
									<a class="nav-link" data-toggle="tab" href="#blogs" role="tab">Community</a>
								  </li>	
                                  <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#link2" role="tab">link2</a>
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
												<p class="mb-1">{{ $post->body }}}</p>
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
								  </div>
                                  @endforeach
								  
								  <div class="tab-pane" id="blogs" role="tabpanel">
										<div class="list-group">
											  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
												  <h5 class="mb-1">Animal Diagnostic and precautions</h5>
												  <small>3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small>Donec id elit non mi porta.</small>
												<footer class="blockquote-footer">Dr. Doctor quack quack</footer>
											  </a>
											  	
											</div>
								  </div>

                                    <div class="tab-pane" id="link2" role="tabpanel">link2</div>		  
						        </div>
                            </div>
                        </div>