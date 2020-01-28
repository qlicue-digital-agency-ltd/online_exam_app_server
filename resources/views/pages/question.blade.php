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
                     max-width: 60%;
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
						<h2>Manage <b>Questions</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addQuestionModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Question</span></a>
                        {{-- <a href="#deleteQuestionModal" class="btn btn-danger" data-toggle="modal" data-question="{{$Questions}}" data-examination_name="{{$Questions->Question_id()}}"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> --}}
                        {{-- <a href="#deleteExaminationModal" class="delete" data-toggle="modal" data-examination="{{$Examination}}" data-examination_name="{{$Examination->subjects()->get()->first()['name']}}"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>						 --}}
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Question_Id</th>
                        <th>Question_No</th>
                        <th>Question_Content</th>
						      <th>Examination_Id</th>
                        <th>Created_at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($Questions as $Question)
                      
                   <tr>
                         <td>{{$Question->id}}</td>
                        <td>{{$Question->number}}</td>
                        <td>{{$Question->content}}</td>
                        <td>{{$Question->examination_id}}</td>
                        <td>{{$Question->created_at}}</td>
                        <td>
                            <a href="/question{{$Question->id}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            
                            <a href="#deleteQuestionModal" class="delete" data-toggle="modal" data-question="{{$Question}}" data-question_name="{{$Question->id}}"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            
                   </td>
                    </tr> 
                    @endforeach
               
                </tbody>
            </table>
			<div class="clearfix">
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
            </div>
        </div>
    </div>
	<!-- Add Modal -->
<div id="addQuestionModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Question</h4>
        </div>
      <form method="POST" action="{{route('question')}}" ><input name="examination_id" type="hidden" value="">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <input name="topic_id" type="hidden" value="1">
                <div class="form-group">                  
                  <label for="question">Question</label>
                  <span class="required">*</span>
                  <textarea class="form-control" placeholder="Please Enter Question" rows="8" required="required" name="question" cols="50" id="question"></textarea>
                  <small class="text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="answer">Correct Answer</label>
                    <span class="required">*</span>
                    <select class="form-control select2" required="required" id="answer" name="answer"><option selected="selected" value=""></option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option></select>
                    <small class="text-danger"></small>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="a">A - Option</label>
                  <span class="required">*</span>
                  <input class="form-control" placeholder="Please Enter A Option" required="required" name="a" type="text" id="a">
                  <small class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label for="b">B - Option</label>
                  <span class="required">*</span>
                  <input class="form-control" placeholder="Please Enter B Option" required="required" name="b" type="text" id="b">
                  <small class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label for="c">C - Option</label>
                  <span class="required">*</span>
                  <input class="form-control" placeholder="Please Enter C Option" required="required" name="c" type="text" id="c">
                  <small class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label for="d">D - Option</label>
                  <span class="required">*</span>
                  <input class="form-control" placeholder="Please Enter D Option" required="required" name="d" type="text" id="d">
                  <small class="text-danger"></small>
                </div>
              </div>
             
              <div class="col-md-12">
                <div class="extras-block">
                  <h4 class="extras-heading">An Image For Question</h4>
                  <div class="row">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="question_img">Add Image To Question</label>
                        <input name="question_img" type="file" id="question_img">
                        <small class="text-danger"></small>
                         <p class="help">Please Choose Only .JPG, .JPEG and .PNG</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="btn-group pull-right">
              <input class="btn btn-default" type="reset" value="Reset">
              <input class="btn btn-wave" type="submit" value="Add">
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
	
   
	<!-- Delete Modal HTML -->
	<div id="deleteQuestionModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="deleteForm">
                    @method('delete')
                    @csrf
					<div class="modal-header">
                        <h2 class="questionNumber"></h2>						
						<h4 class="modal-title">Delete Question</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete this Question ?</p>
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
        
$('#deleteQuestionModal').on('show.bs.modal', function (event) {
     var button = $(event.relatedTarget) // Button that triggered the modal
     var question = button.data('question') // Extract info from data-* attributes
     var question_number = button.data('question_number')
     

     var modal = $(this)
     // modal.find('.modal-title').text('Delete Message !' )
     modal.find('#deleteForm').attr('action','/delete/question/'+ question['id']) 
     modal.find('.questionNumber').text(question_number)

 });
</script>
@endsection
