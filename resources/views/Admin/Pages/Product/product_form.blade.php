@extends('Admin.master')

@section('content')
<section class="main_content dashboard_part" style="margin: 30px">
    <div class="white_box_tittle list_header w-75 mx-auto">
        <h4>Product Form</h4>
        <div class="box_right d-flex lms_block">

            <div class="add_button ms-2">
                <a href="{{route('product.list')}}" class="btn_1 text-decoration-none ">Product List</a>
            </div>
        </div>
    </div>


    {{-- <div class="d-flex justify-content-end" style="margin-right: 410px">
        <button type="button" class="btn btn-primary mt-5 mb-3" data-mdb-ripple-init><a
                class="text-white text-decoration-none" href="">Product List</a></button>
    </div> --}}

    <div class="w-50 mx-auto mt-5">
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Text input -->
            <div data-mdb-input-init class="form-outline mb-4 ">
                <label class="form-label" for="form6Example3">Product Name</label>
                <input name="product_name" required type="text" id="form6Example3" class="form-control mb-2" placeholder="Enter your product name" />
            </div>
            <div class="d-flex">
                <div class="form-group col-md-6" style="margin-right: 5px;">
                    <label for="productName">Select Category</label>
                    <select class="form-control mb-4  " name="category_id" required>
                        @foreach ($categories as $category )
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="form-group col-md-6">
                    <label for="productName">Select Brand</label>
                    <select class="form-control mb-4 " name="brand_id" required>
                        @foreach ($categories as $category )
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="d-flex">
                <div class="form-group col-md-6 mb-4" style="margin-right: 5px;">
                    <label for="productImage">Image1</label>
                    <input type="file" class="form-control" id="productImage" name="image1" required>
                </div>
                <div class="form-group col-md-6 mb-4">
                    <label for="productImage">Image2</label>
                    <input type="file" class="form-control" id="productImage" name="image2" required>
                </div>
            </div>

            <div class="d-flex mb-4">
                <div class="form-group col-md-6" style="margin-right: 5px;">
                    <label for="productImage">Image3</label>
                    <input type="file" class="form-control" id="productImage" name="image3" required>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="productPrice">Product Price</label>
                    <input type="number" step="0.01" class="form-control" id="productPrice" name="price" placeholder="Enter product amount" required>
                </div>
            </div>
            <div class="d-flex mb-4">
                <div class="form-group col-md-6" style="margin-right: 5px;">
                    <label for="productImage">Quantity</label>
                    <input type="number" class="form-control" id="productImage" name="quantity_in_stock" required>
                </div>
            </div>
            <!-- Message input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Additional Information</label>
                <textarea name="product_description" required class="form-control mb-2" id="form6Example7" rows="4"></textarea>
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