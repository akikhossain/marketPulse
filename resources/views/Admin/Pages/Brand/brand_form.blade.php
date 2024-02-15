@extends('Admin.master')

@section('content')
<section class="main_content dashboard_part" style="margin: 30px">
    <div class="white_box_tittle list_header w-75 mx-auto d-flex justify-content-between">
        <h4 class="fw-bold ">Brand Form</h4>
        <div class="box_right d-flex lms_block">

            <div class="add_button ms-2">
                <a href="{{route('brand.list')}}" class="btn_1 text-decoration-none ">Brand List</a>
            </div>
        </div>
    </div>


    {{-- <div class="d-flex justify-content-end" style="margin-right: 410px">
        <button type="button" class="btn btn-primary mt-5 mb-3" data-mdb-ripple-init><a
                class="text-white text-decoration-none" href="">Brand List</a></button>
    </div> --}}
    <div class="w-50 mx-auto shadow-sm p-5" style="margin-top: 80px">
        <form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Text input -->
            <div data-mdb-input-init class="form-outline mb-4">
               <label class="form-label" for="form6Example3">Brand Name</label>
                <input placeholder="Enter Brand Name" name="brand_name" required type="text" id="form6Example3"
                    class="form-control mb-2" />
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Brand Image</label>
                <input placeholder="Enter Category Name" name="brand_image" required type="file" id="form6Example3"
                    class="form-control mb-2" />
            </div>

            <!-- Message input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Additional Information</label>
                <textarea placeholder="Enter Brand Description" name="description" required class="form-control mb-2"
                    id="form6Example7" rows="4"></textarea>
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