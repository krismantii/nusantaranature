<!DOCTYPE   html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
    <link href= <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div clas="container">
        <div class= "row">
        <br>
            <form action="{{ route('upload.file')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
                <input type="file" name="file">
                <input type="submit" class="btn btn-info">
            </form>
        </div>
    </div>
</body>
