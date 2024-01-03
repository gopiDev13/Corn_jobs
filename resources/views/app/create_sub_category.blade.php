@extends('layouts.app')


@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Item Form</h2>

            <form id="subcategoryform" action="{{ route('sub-category.store')}}" method="POST">
                @csrf
                <!-- Item Category Dropdown -->
                <div class="form-group">
                    <label for="category"> Category:</label>
                    <select class="form-control" id="category" name="category_id">
                        @forelse($category as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @empty
                        @endforelse
                        <!-- Add more categories as needed -->
                    </select>
                </div>  

           
                <!-- Value Input -->
                <div class="form-group">
                    <label for="value">Sub-Category-Name:</label>
                    <input type="text" class="form-control" id="value" name="name" placeholder="Enter value">
                </div>
               {{-- <div class="form-group">
                    <label for="value">Description:</label>
                    <textarea type="text" class="form-control" id="value" name="description" placeholder="Enter description"></textarea>
                </div>--}}

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
@push('custom-scripts')
<script src = "{{ asset('js/inventory.js')}}"></script>
@endpush
@endsection
