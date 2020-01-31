@extends('layout.app')
@section('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

                
               <style type="text/css">
                   
                  .table-wrapper {
                       background: #fff;
                       padding: 20px 25px;
                       margin: 30px 0;
                     border-radius: 3px;
                       box-shadow: 0 1px 1px rgba(0,0,0,.05);
                   }
                  .table-title {        
                     padding-bottom: 15px;
                     background: #4e73df;
                     color: #fff;
                     padding: 16px 30px;
                     margin: -20px -25px 10px;
                     border-radius: 3px 3px 0 0;
                   }
                   .table-title h2 {
                     margin: 5px 0 0;
                     font-size: 24px;
                  }
                  .table-title .btn-group {
                     float: right;
                  }
                  .table-title .btn {
                     color: #fff;
                     float: right;
                     font-size: 13px;
                     border: none;
                     min-width: 50px;
                     border-radius: 2px;
                     border: none;
                     outline: none !important;
                     margin-left: 10px;
                  }
                  .table-title .btn i {
                     float: left;
                     font-size: 21px;
                     margin-right: 5px;
                  }
                  .table-title .btn span {
                     float: left;
                     margin-top: 2px;
                  }
                   table.table tr th, table.table tr td {
                       border-color: #e9e9e9;
                     padding: 12px 15px;
                     vertical-align: middle;
                   }
                  table.table tr th:first-child {
                     width: 60px;
                  }
                  table.table tr th:last-child {
                     width: 100px;
                  }
                   table.table-striped tbody tr:nth-of-type(odd) {
                      background-color: #fcfcfc;
                  }
                  table.table-striped.table-hover tbody tr:hover {
                     background: #f5f5f5;
                  }
                   table.table th i {
                       font-size: 13px;
                       margin: 0 5px;
                       cursor: pointer;
                   }	
                   table.table td:last-child i {
                     opacity: 0.9;
                     font-size: 22px;
                       margin: 0 5px;
                   }
                  table.table td a {
                     font-weight: bold;
                     color: #566787;
                     display: inline-block;
                     text-decoration: none;
                     outline: none !important;
                  }
                  table.table td a:hover {
                     color: #2196F3;
                  }
                  table.table td a.edit {
                       color: #FFC107;
                   }
                   table.table td a.delete {
                       color: #F44336;
                   }
                   table.table td i {
                       font-size: 19px;
                   }
                  table.table .avatar {
                     border-radius: 50%;
                     vertical-align: middle;
                     margin-right: 10px;
                  }
                   .pagination {
                       float: right;
                       margin: 0 0 5px;
                   }
                   .pagination li a {
                       border: none;
                       font-size: 13px;
                       min-width: 30px;
                       min-height: 30px;
                       color: #999;
                       margin: 0 2px;
                       line-height: 30px;
                       border-radius: 2px !important;
                       text-align: center;
                       padding: 0 6px;
                   }
                   .pagination li a:hover {
                       color: #666;
                   }	
                   .pagination li.active a, .pagination li.active a.page-link {
                       background: #03A9F4;
                   }
                   .pagination li.active a:hover {        
                       background: #0397d6;
                   }
                  .pagination li.disabled i {
                       color: #ccc;
                   }
                   .pagination li i {
                       font-size: 16px;
                       padding-top: 6px
                   }
                   .hint-text {
                       float: left;
                       margin-top: 10px;
                       font-size: 13px;
                   }    
                  /* Custom checkbox */
                  .custom-checkbox {
                     position: relative;
                  }
                  .custom-checkbox input[type="checkbox"] {    
                     opacity: 0;
                     position: absolute;
                     margin: 5px 0 0 3px;
                     z-index: 9;
                  }
                  .custom-checkbox label:before{
                     width: 18px;
                     height: 18px;
                  }
                  .custom-checkbox label:before {
                     content: '';
                     margin-right: 10px;
                     display: inline-block;
                     vertical-align: text-top;
                     background: white;
                     border: 1px solid #bbb;
                     border-radius: 2px;
                     box-sizing: border-box;
                     z-index: 2;
                  }
                  .custom-checkbox input[type="checkbox"]:checked + label:after {
                     content: '';
                     position: absolute;
                     left: 6px;
                     top: 3px;
                     width: 6px;
                     height: 11px;
                     border: solid #000;
                     border-width: 0 3px 3px 0;
                     transform: inherit;
                     z-index: 3;
                     transform: rotateZ(45deg);
                  }
                  .custom-checkbox input[type="checkbox"]:checked + label:before {
                     border-color: #03A9F4;
                     background: #03A9F4;
                  }
                  .custom-checkbox input[type="checkbox"]:checked + label:after {
                     border-color: #fff;
                  }
                  .custom-checkbox input[type="checkbox"]:disabled + label:before {
                     color: #b8b8b8;
                     cursor: auto;
                     box-shadow: none;
                     background: #ddd;
                  }
                  /* Modal styles */
                  .modal .modal-dialog {
                     max-width: 400px;
                  }
                  .modal .modal-header, .modal .modal-body, .modal .modal-footer {
                     padding: 20px 30px;
                  }
                  .modal .modal-content {
                     border-radius: 3px;
                  }
                  .modal .modal-footer {
                     background: #ecf0f1;
                     border-radius: 0 0 3px 3px;
                  }
                   .modal .modal-title {
                       display: inline-block;
                   }
                  .modal .form-control {
                     border-radius: 2px;
                     box-shadow: none;
                     border-color: #dddddd;
                  }
                  .modal textarea.form-control {
                     resize: vertical;
                  }
                  .modal .btn {
                     border-radius: 2px;
                     min-width: 100px;
                  }	
                  .modal form label {
                     font-weight: normal;
                  }	
               </style>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
@endsection
@section('contents')    
                       
<body>
       <div class="container">
           <div class="table-wrapper">
               <div class="table-title">
                   <div class="row">
                       <div class="col-sm-6">
                                             <h2>Manage <b>Examinations</b></h2>
                                      </div>
                                      <div class="col-sm-6">
                                             <a href="#addExaminationModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span href="/create_exam">Add New Examination</span></a>
                                             {{-- <a href="#deleteExaminationModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						 --}}
                                      </div>
                   </div>
               </div>
               <table class="table table-striped table-hover">
                   <thead>
                       <tr>
                                            
                           <th>Id</th>
                           <th>Subject Name</th>
                           <th>Subject Id</th>
                           <th>Examination No</th>
                            <th>Grade</th>
                           <th>Date Created</th>
                           <th>Actions</th>
                       </tr>
                   </thead>
                   <tbody>
                     @foreach ($Examinations as $Examination)
                       <tr>                 
                           <td>{{$Examination->id}}</td>
                           <td>{{$Examination->subjects()->get()->first()['name']}}</td>
                           <td>{{$Examination->subject_id}}</td>
                           <td>{{$Examination->exam_no}}</td>
                            <td>{{$Examination->grade()->get()->first()['name']}}</td>
                           <td>{{$Examination->created_at}}</td>
                           <td>
                           <a href="/create/exam/{{$Examination->id}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="#deleteExaminationModal" class="delete" data-toggle="modal" data-examination="{{$Examination}}" data-examination_name="{{$Examination->subjects()->get()->first()['name']}}"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                               
                              </a>
                           </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
                        {{-- <div class="clearfix">
                   <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                   <ul class="pagination">
                       <li class="page-item disabled"><a href="#">Previous</a></li>
                       <li class="page-item"><a href="#" class="page-link">1</a></li>
                       <li class="page-item"><a href="#" class="page-link">2</a></li>
                       <li class="page-item active"><a href="#" class="page-link">3</a></li>
                       <li class="page-item"><a href="#" class="page-link">4</a></li>
                       <li class="page-item"><a href="#" class="page-link">5</a></li>
                       <li class="page-item"><a href="#" class="page-link">Next</a></li>
                   </ul>
               </div> --}}
           </div>
       </div>
          <!-- Addexam Modal HTML -->
          <div id="addExaminationModal" class="modal fade">
                 <div class="modal-dialog">
                        <div class="modal-content">
                        <form method="post" action="{{route('create.exam')}}">
                                      <div class="modal-header">						
                                             <h4 class="modal-title">Add Examination</h4>
                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      </div>
                                      <div class="modal-body">					
                                             <div class="form-group">
                                                    <label>Subject Name</label>
                                                    <select name="subject_id" class="form-control" id="subject">
                                                        <option >Select</option>
                                                        @foreach ($subjects as $subject)
                                                    <option value="{{$subject->id}}">{{$subject->name}}</option>  
                                                        @endforeach
                                                       
                                                        
                                                         
                                                      </select>
                                             </div>
                                             <div class="form-group">
                                                    <label>Grade</label>
                                                    <select name="grade_id" class="form-control" id="grade">
                                                        <option>Select</option>
                                                        @foreach ($grades as $grade)
                                                        <option value="{{$grade->id}}">{{$grade->id}}</option>  
                                                        @endforeach
                                                        
                                                        
                                                      </select>
                                             </div>
                                       
                                          <input name="teacher_id" value="1" type="hidden" class="form-control" required>
                                             
                                             <div class="form-group">
                                                <label>Duration</label>
                                                <input name="duration" type="number"  class="form-control" required>
                                            </div>
                                            
                                             <div class="form-group">
                                                    <label>Starting Time</label>
                                                    <input name="opening_time" type="date" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                <label>Closing Time</label>
                                                <input name="closing_time" type="date" class="form-control" required>
                                         </div>					
                                      </div>
                                      <div class="modal-footer">
                                             <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                             <input type="submit" class="btn btn-success" value="Create Exam">
                                      </div>
                               </form>
                        </div>
                 </div>
          </div>
          <!-- End Add modal -->
         
          <!-- Delete Modal HTML -->
          <div id="deleteExaminationModal" class="modal fade">
                 <div class="modal-dialog">
                        <div class="modal-content">
                               <form id="deleteForm">
                                  @method('delete')
                                  @csrf
                                      <div class="modal-header">						
                                             <h4 class="modal-title">Delete Examination</h4>
                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                             
                                      </div>
                                      <div class="modal-body">	
                                       <h2 class="examinationName"></h2>					
                                             <p>Are you sure you want to delete this Exam?</p>
                                             <p class="text-warning"><small>This action cannot be undone.</small></p>
                                      </div>
                                      <div class="modal-footer">
                                             <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                             <input type="submit" class="btn btn-danger" value="Delete">
                                      </div>
                               </form>
                        </div>
                 </div>
          </div>
   </body>
   </html>                               
        
       @endsection

       @section('scripts')

   
               <script type="text/javascript">
               $(document).ready(function(){
                  // Activate tooltip
                  $('[data-toggle="tooltip"]').tooltip();
                  
                  // Select/Deselect checkboxes
                  var checkbox = $('table tbody input[type="checkbox"]');
                  $("#selectAll").click(function(){
                     if(this.checked){
                        checkbox.each(function(){
                           this.checked = true;                        
                        });
                     } else{
                        checkbox.each(function(){
                           this.checked = false;                        
                        });
                     } 
                  });
                  checkbox.click(function(){
                     if(!this.checked){
                        $("#selectAll").prop("checked", false);
                     }
                  });
               });
               
   $('#deleteExaminationModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var examination = button.data('examination') // Extract info from data-* attributes
            var examination_name = button.data('examination_name')
            
   
            var modal = $(this)
            // modal.find('.modal-title').text('Delete Message !' )
            modal.find('#deleteForm').attr('action','/delete/examination/'+ examination['id']) 
            modal.find('.examinationName').text(examination_name)

        });
</script>
@endsection
