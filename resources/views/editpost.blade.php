<!DOCTYPE html>
<html lang="en">
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<title>Edit Post</title>
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
                            <div class="tab-pane" id="article" role="tabpanel">
							<table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Created at</th>
              <th>Title</th>
              <th>Options</th>
            </tr>
          </thead>
          
          <tbody>
          @foreach($posts as $post)
            <tr>
              <td>{{ $post->created_at }}</td>
              <td>{{ $post->title }}</td>
              <td>
                <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span> Update</button>
                <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span> Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
          
        
        <div class="tab-pane" id="campaign" role="tabpanel">
          @foreach($camps as $camp)
          <tbody>
            <tr>
              <td>{{ $camp->created_at }}</td>
              <td>{{ $camp->nama_camp }}</td>
              <td>
                <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span> Update</button>
                <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span> Delete</button>
              </td>
            </tr>
          </tbody>
          @endforeach
        </div>
        <div class="tab-pane" id="komunitas" role="tabpanel">
          @foreach($komunitas as $item)
          <tbody>
            <tr>
              <td>{{ $item->created_at }}</td>
              <td>{{ $item->nama }}</td>
              <td>
                <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span> Update</button>
                <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span> Delete</button>
              </td>
            </tr>
          </tbody>
          @endforeach
        </div>
        </table>		
              </div>
          </div>


<div class="container">
<div class="panel panel-default">

    
        </div>
</div>
</body>
</html>