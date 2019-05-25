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