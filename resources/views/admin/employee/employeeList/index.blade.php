@extends('layouts.app')
@section('page_name') Employee Data @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Home</a>
</li>
<li class="breadcrumb-item active">Employee
</li>
@endsection
@section('content')
 
            <div class="content-body">
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Employee Table</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><button class="btn btn-secondary" data-toggle="modal" data-target="#addModal"><i class="feather icon-plus-circle"> Add</i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard" id="dataRow">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

<!-- ADD MODAL -->
<div class="modal fade text-left" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info white">
                <h3 class="modal-title" id="myModalLabel35">Add Employee</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="addForm" enctype="multipart/form-data">
            @csrf
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                           <label for="branch_id">Select Branch</label>
                           <select class="form-control" id="branch_id" name="branch_id">
                             @foreach($branchs as $branch)
                            <option value="{{ $branch->branch_id}}">{{ $branch->branch_name}}</option>
                            @endforeach
                           </select>
                         </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                           <label for="cat_id">Select Category</label>
                           <select class="form-control" id="cat_id" name="cat_id">
                             @foreach($categorys as $category)
                             <option value="{{ $category->emp_cat_id}}">{{ $category->emp_cat_name}}</option>
                             @endforeach
                           </select>
                         </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6">

                      <fieldset class="form-group floating-label-form-group">
                          <label for="name">Full Name</label>
                          <input type="text" class="form-control" id="name" name="full_name" placeholder="Enter Employee Name" required data-validation-required-message="This field is required">
                      </fieldset>
                    </div>

                    <div class="col-md-6">
                      <div id="div_id_gender" class="form-group">
                         <label for="id_gender"  class="control-label col-md-4">Gender </label>
                         <div class="controls col-md-8 "  style="margin-bottom: 10px">
                              <label class="radio-inline"> <input type="radio" name="gender" id="gender_1" value="1"  style="margin-bottom: 10px">Male</label>
                              <label class="radio-inline"> <input type="radio" name="gender" id="gender_2" value="2"  style="margin-bottom: 10px">Female </label>
                         </div>
                     </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-5">
                      <fieldset class="form-group floating-label-form-group">
                          <label for="user_name">User Name</label>
                          <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter Employee Name" required data-validation-required-message="This field is required">
                      </fieldset>
                    </div>

                    <div class="col-md-4">
                      <fieldset class="form-group floating-label-form-group">
                          <label for="salery">Salary</label>
                          <input type="text" class="form-control" id="salery" name="salery" placeholder="Enter Employee Name" required data-validation-required-message="This field is required">
                      </fieldset>
                    </div>

                  <div class="col-md-3">
                  <div id="div_status" class="form-group">
                         <label for="status"  class="control-label col-md-4">Status </label>
                         <div class="controls btn-group" role="group" style="margin-left:15px">
                              <label class="radio-inline btn btn-icon btn-danger" for="inactive"> <input type="radio" name="status" id="inactive" checked value="inactive"><i class="fa fa-times"></i></label>
                              <label class="radio-inline btn btn-icon btn-success" for="active"> <input type="radio" name="status"  id="active" value="active"><i class="fa fa-check"></i></label>
                         </div>
                     </div>
                  </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <fieldset class="form-group floating-label-form-group">
                          <label for="name">Phone</label>
                          <input type="text" class="form-control" id="name" name="phone" placeholder="Enter Employee Name" required data-validation-required-message="This field is required">
                      </fieldset>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="email">Email address</label>
                           <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email ">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <fieldset class="form-group floating-label-form-group">
                          <label for="detaaddressils">Address</label>
                          <textarea class="form-control" id="address" rows="3" name="address" placeholder="Enter Employee Address" ></textarea>
                      </fieldset>
                    </div>
                  </div>


                      <fieldset class="form-group floating-label-form-group">
                          <label for="details">Uploade Image</label>
                          <input type="file" class="image" name="image" id="image" >
                      </fieldset>

                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary" data-dismiss="modal" value="Close">
                    <input type="submit" class="btn btn-outline-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- VIEW MODAL -->
<div class="modal fade text-left" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel20">Employee View</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" id="viewBody"></div>

            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- EDIT MODAL -->
<div class="modal fade text-left" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel35">Edit Employee</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <div id="editBody"></div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script type="text/javascript">

$(document).ready(function(){
    dataList();

$("#addForm").submit(function(e){
 e.preventDefault();
  $.ajax({
    url:"{{route('employee.store')}}",
    data:  new FormData(this),
    contentType: false,
    cache: false,
    processData:false,
    dataType:'json',
    type:'post',
  success:function(data)
  {
    $("#addModal").modal('hide');
    $("#addForm").trigger( "reset" );
    dataList();
    toastr["success"](data.message);
  }
  });

});

$(document).on('click','.view',function(){
  var id=$(this).attr("get_id");
  $.ajax({
      url:"{{route('employee.show')}}",
      data:{'id':id},
      dataType:'html',
      type:'get',
      success:function(data)
      {
          $("#viewBody").html(data);
      }
  });
  });

$(document).on("click",".edit",function(){
  var id=$(this).attr("get_id");
  $("#edit_id").val(id);
  $.ajax({
      url:"{{url('employee_edit')}}",
      type:"get",
      data:{id:id},
      dataType:"html",
      success:function(data)
      {
        $("#editBody").html(data);
      }
  });
});

$(document).on('submit','#editForm',function(e){
    e.preventDefault();
    $.ajax({
        url:"{{route('employee.update')}}",
        type:"post",
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        dataType:"json",
        success:function(data)
        {
            $("#editModal").modal('hide');
            dataList();
            toastr["success"](data.message);
        }
    });

   });

$(document).on('click','#delete',function(){
var id=$(this).attr("get_id");
$.ajax({
    url:"{{route('employee.destroy')}}",
    data:{'id':id, "_token": "{{ csrf_token() }}"},
    dataType:'json',
    type:'delete',
    success:function(data)
    {
        dataList();
        toastr["success"](data.message);
    }
});
});

$(document).on('click',"#status_btn",function(){
  var value=$(this).attr("data-set");
  var id=$(this).attr("data-id");
  var status='';
  if(value=='active')
  {
    status='inactive';
  }
  else if(value=='inactive')
  {
    status='active';
  }
  else
  {
    status='active';
  }

  $.ajax({
    url:"{{route('employee_status.change')}}",
    data:{'status':status, 'id':id, '_token': '{{ csrf_token() }}'},
    dataType:'json',
    type:'get',
    success:function(data)
    {
      dataList();
      toastr["success"](data.message);
    }
  });

});

});
function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#previmage')
          .attr('src', e.target.result)
          .width(140)
          .height(140);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
function dataList(){
    $.ajax({
        url:"{{route('employee.create')}}",
        dataType:'html',
        type:'get',
        success:function(data)
        {
            $("#dataRow").html(data);
        }
    });
};
</script>
@endsection
