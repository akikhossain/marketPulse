@extends('Admin.master')

@section('content')
<section class="main_content dashboard_part" style="margin: 30px">
    <div class="white_box_tittle list_header w-75 mx-auto d-flex justify-content-between">
        <h4 class="fw-bold ">Create User</h4>
        <div class="box_right d-flex lms_block">

            <div class="add_button ms-2">
                <a href="{{ route('user.list') }}" class="btn_1 text-decoration-none ">User List</a>
            </div>
        </div>
    </div>


    {{-- <div class="d-flex justify-content-end" style="margin-right: 410px">
        <button type="button" class="btn btn-primary mt-5 mb-3" data-mdb-ripple-init><a
                class="text-white text-decoration-none" href="{{ route('user.list') }}">User List</a></button>
    </div> --}}
    <div class="w-50 mx-auto shadow-sm p-5" style="margin-top: 80px">
        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Text input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Name</label>
                <input placeholder="Enter User Name" name="name" required type="text" id="form6Example3"
                    class="form-control mb-2" />
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Email</label>
                <input placeholder="Enter Email Address" name="email" required type="email" id="form6Example3"
                    class="form-control mb-2" />
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Contact</label>
                <input placeholder="Enter Mobile Number" name="contact" required type="tel"  id="form6Example3"
                    class="form-control mb-2" />
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Role</label>
                <input placeholder="Enter Role Name" name="role" required type="text" id="form6Example3"
                    class="form-control mb-2" />
            </div>
            
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Image</label>
                <input name="image" required type="file" id="form6Example3"
                    class="form-control mb-2" />
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