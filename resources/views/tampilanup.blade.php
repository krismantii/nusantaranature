<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Update Komunitas</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Update your Community</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('updatekom')}}" class="login100-form validate-form" enctype="multipart/form-data">
                    @csrf    
                        <div class="form-row">
                            <div class="name">Nama</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama" id="nama" value="{{ $item->nama }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Daerah</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="daerah" id="daerah" value="{{ $item->daerah }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telfon</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="telfon" id="telfon" value="{{ $item->telfon }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Deskripsi komunitas</div>
                            <div class="value">
                                <div class="input-group">
                                <textarea class="form-control" cols="65" rows="5" id="deskripsi" name="deskripsi" required>{{$item->deskripsi}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Foto</div>
                            <div class="value">
                                <div class="input-group">
                                <img class="img-responsive img-cover img-center mb-2" id="preview" src="/storage/{{substr($item->foto, 7)}}" style="max-height:400px; max-width: 400px;" >
                                <input id="foto" class="input--style-5" type="file" name="foto" required>  
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    <!-- FOTO PREVIEW-->
    <script type="text/javascript">
    function preview(input) {
        if (input.files && input.files[0]) {
            var freader = new FileReader();
            freader.onload = function (e) {
                $("#preview").show();
                $('#preview').attr('src', e.target.result);
            }
            freader.readAsDataURL(input.files[0]);
        }
    }
    $("#foto").change(function(){
        preview(this);
    });
</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->