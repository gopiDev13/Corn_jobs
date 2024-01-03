@extends('layouts.app')


@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Item Form</h2>

            <form id="categoryform" action="{{route('category.store')}}" method="POST">
              @csrf
                <!-- Item Category Dropdown -->

           
                <!-- Value Input -->
                <div class="form-group">
                    <label for="value">Category-Name:</label>
                    <input type="text" class="form-control" id="value" name="name" placeholder="Enter value">
                </div>
               {{-- <div class="form-group">
                    <label for="value">Description:</label>
                    <textarea type="text" class="form-control" id="value" name="category_description" placeholder="Enter description"></textarea>
                </div>--}}

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
     $('#categoryform').validate({
      rules:{
        category_name:{
          required:true,
        },
        description:{
          required:true,
        },
       
      },
        messages :{
            category_name:{
            required:'Enter category description',
          },
          category_description:{
            required:'Enter category description',
          },
       
        
        },
        submitHandler: function(form) {
            form.submit();
        },
   
      
    });
});  
</script>
@endsection
