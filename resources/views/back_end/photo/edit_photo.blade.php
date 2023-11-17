@extends('back_end.layouts.index')
@section('content')

  <div class="content-wrapper">


   <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3>Photo</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item active">Photo</li>
          </ol>
        </div>
      </div>
    </div>
   </section>


   <!-- Main content -->
   <section class="content">

     <div class="container-fluid">
       <div class="row justify-content-center">

         <div class="col-md-8">
           <div class="card">

             <div class="card-header">
              <h3 class="card-title">Edit Photo</h3>
              <a href="{{ route('photo.view') }}" class="btn btn-primary btn-sm"  style="float:right;"><i class="fa fa-list"></i>&nbsp; View</a>
             </div>

             <div class="card-body">
               <div class="tab-content">

                <form method="POST" action="{{ route('photo.update',$alldata->id) }}" enctype="multipart/form-data" id="myForm">
                 @csrf

                <div class="row">

                 <div class="col-md-6 mt-2">
                  <smail for="content">Content</smail>
                  <input type="text" name="content" value="{{ $alldata->content }}" class="form-control form-control-sm" placeholder="Content">
                 </div>

                 <div class="form-group col-md-6 mt-2">
                   <smail for="button_url">Status</smail>
                    <select name="status" class="form-control form-control-sm">
                     <option value="">Select Role</option>
                     <option value="0" {{$alldata->status=="0"?"selected":""}}>Active</option>
                     <option value="1" {{$alldata->status=="1"?"selected":""}}>Inactive</option>
                    </select>
                </div>

                 <div class="col-md-6 mt-2">
                  <smail for="image">Image</smail>
                  <input type="file" name="image" id="image" class="form-control form-control-sm">
                  <font style="color:red">{{($errors->has('image'))?($errors->first('image')):'' }}</font>
                 </div>

                 <div class="form-group col-md-6 mt-3">
                    <img id="showImage" src="{{!empty($alldata->image)?url('upload/photo/'.$alldata->image):url('upload/no_image.png')}}" style="width:80%; height:140px; border:1px solid #CCC;">
                 </div>

                 <div class="col-md-12 mt-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                 </div>

                </div>

               </form>

               </div>
             </div>

           </div>
         </div>




       </div>
     </div>

   </section>


  </div>

  <script>
   $(function (){
    $('#myForm').validate({
     rules: {
     image: {
      required: true,
     },
    },

    messages: {
     image: {
      required: "Please file upload",
    },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
    error.addClass('invalid-feedback');
    element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
    $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
    $(element).removeClass('is-invalid');
    }
    });
   });
  </script>

 @endsection
