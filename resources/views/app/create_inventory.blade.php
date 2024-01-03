@extends('layouts.app')


@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Item Form</h2>

            <form id="itemForm" action="{{route('item.store')}}" method="POST">
                @csrf
                <!-- Item Category Dropdown -->
               {{-- <div class="form-group">
                    <label for="category">Item Category:</label>
                    <select class="form-control" id="category" name="category_id">
                        <option value="electronics">Electronics</option>
                        <option value="clothing">Clothing</option>
                        <option value="books">Books</option>
                        <!-- Add more categories as needed -->
                    </select>
                </div>
--}}
                <!-- Sub-Category Dropdown (Dynamically Populated) -->
                <div class="form-group">
                    <label for="subcategory">Sub-Category:</label>
                    <select class="form-control" id="subcategory" name="sub_category_id">
                        <!-- Sub-categories will be dynamically populated using JavaScript -->
                        @forelse($subCategory as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>

                <!-- Value Input -->
                <div class="form-group">
                    <label for="value">Item-Name:</label>
                    <input type="text" class="form-control" id="value" name="name" placeholder="Enter value">
                </div>

                {{--<div class="form-group">
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
