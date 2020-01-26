@extends('layout.app')
@section('contents')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create an Exam</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="container">
                 
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Grade Name:</th>
            <th>Subject Name:</th>
            <th>Examination No:</th>
            <th>Teacher Name:</th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td>{{$examination->grade()->get()->first()->name}}</td>
            <td>{{$examination->subjects()->get()->first()->name}}</td>
            <td>{{$examination->exam_no}}</td>
            <td>{{$examination->user()->get()->first()->name}}</td>
            
          </tr>
         
        </tbody>
      </table>
    </div>
  <br>
    

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Question:</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">1/50</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-chalkboard fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Exams</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$examinations}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Content Row -->

<div class="container">
   
    <form method="POST">
      <div class="form-group">
        <label >Qn 1:</label>
        <textarea class="form-control" rows="5" id=""></textarea>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
            <div class="input-group fg-float">
                <span class="input-group-addon"><i class="zmdi zmdi-pin-help"></i></span>
                <div class="fg-line">
                   
                   
                </div>
            </div>
        </div>

        </div>
             <br /><br />
         <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-check-circle"></i></span>
                                        <div class="fg-line">
                                            <input name="name[]" type="text" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                            <div class="radio m-b-15">
                                <label>
                                    <input name="answer[]" type="radio" value="1">

                                    <i class="input-helper"></i>
                                    A:
                                </label>
                                    </div>
                                </div>
                            </div>
                            <br /><br />
                            <div class="row">

                                {{--ANSWERS--}}

                                <div class="col-sm-6">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-check-circle"></i></span>
                                        <div class="fg-line">
                                            <input name="name[]" type="text" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                            <div class="radio m-b-15">
                                <label>
                                    <input name="answer[]" type="radio" value="1">
                                    <i class="input-helper"></i>
                                    B:
                                </label>
                                    </div>
                                </div>
                            </div>



                          <br /><br />
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-check-circle"></i></span>
                                        <div class="fg-line">
                                            <input name="name[]" type="text" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                            <div class="radio m-b-15">
                                <label>
                                    <input name="answer[]" type="radio" value="1">
                                    <i class="input-helper"></i>
                                    C:
                                </label>
                                    </div>
                                </div>
                            </div>
                           <br /><br />
                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-check-circle"></i></span>
                                        <div class="fg-line">
                                            <input name="name[]" type="text" class="form-control">

                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                            <div class="radio m-b-15">
                                <label>
                                    <input name="answer[]" type="radio" value="1">
                                    <i class="input-helper"></i>
                                    D:
                                </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                      <button type="submit" class="btn btn-primary">Add Question</button>
   
                    </form>
             </div>
           </div>

@endsection