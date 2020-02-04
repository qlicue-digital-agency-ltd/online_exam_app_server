<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SPE Admin  - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    @if(session('error'))
    <div>{{session('error')}}</div>
    @endif
    
    @if(session('msg'))
    <div class="alert alert-success alert-dismissible">
      <button class="close" type="button" data-dismiss="alert"><span>&times;</span></button> 
      {{session('msg')}}</div>
    @endif

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <form  action="{{route('profile')}}" method="POST" class="profile" enctype="multipart/form-data">
                @csrf
                
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text"  class="form-control" required>
             </div>  <br>
             <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control" id="gender">
                    <option>Select</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select> <br>
                  <div class="form-group">
                    <label>Profile Image</label>
                    <input name="file" type="file"  class="form-control" required>
                 </div>
             </div>

            {{-- <input name="user_id"  value="{{ $user->id }}" class="form-control" required> --}}
             					
            </div>
            <div class="modal-footer">
             <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
             <input type="submit" class="btn btn-success" value="Save">
            </div>
            </form>
            </div>
            </div>
            </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
