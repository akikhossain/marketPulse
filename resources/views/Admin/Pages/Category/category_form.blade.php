@extends('Admin.master')

@section('content')
<section class="main_content dashboard_part" style="margin: 30px">
    <div class="white_box_tittle list_header w-75 mx-auto d-flex justify-content-between">
        <h4 class="fw-bold ">Category Form</h4>
        <div class="box_right d-flex lms_block">

            <div class="add_button ms-2">
                <a href="{{ route('category.list') }}" class="btn_1 text-decoration-none ">Category List</a>
            </div>
        </div>
    </div>


    {{-- <div class="d-flex justify-content-end" style="margin-right: 410px">
        <button type="button" class="btn btn-primary mt-5 mb-3" data-mdb-ripple-init><a
                class="text-white text-decoration-none" href="{{ route('category.list') }}">Category List</a></button>
    </div> --}}
    <div class="w-50 mx-auto shadow-sm p-5" style="margin-top: 80px">
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <!-- Text input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input placeholder="Enter Category Name" name="category_name" required type="text" id="form6Example3"
                    class="form-control mb-2" />
                <label class="form-label" for="form6Example3">Category Name</label>
            </div>

            <!-- Message input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <textarea placeholder="Enter Category Description" name="description" required class="form-control mb-2"
                    id="form6Example7" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Additional Information</label>
            </div>

            <!-- Submit button -->
            <div class="mx-auto w-25">
                <button data-mdb-ripple-init type="submit"
                    class="bg-primary text-white px-3 py-2 rounded-pill">Create</button>
            </div>
        </form>
    </div>
</section>
@endsection