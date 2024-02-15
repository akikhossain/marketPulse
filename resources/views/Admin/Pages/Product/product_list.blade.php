@extends('Admin.master')
@section('content')
<section class="main_content dashboard_part" style="margin: 30px">
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Product List</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="add_button ms-2">
                                    <a href="{{ route('product.form') }}" class="btn_1 text-decoration-none ">Add
                                        New</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table ">

                            <table class="table  align-middle text-center lms_table_active">
                                <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Category </th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Image1 </th>
                                        <th scope="col">Image2 </th>
                                        <th scope="col">Image3 </th>
                                        <th scope="col">Price </th>
                                        <th scope="col">Quantity </th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->category->category_name}}</td>
                                        <td>{{ $product->brand->brand_name}}</td>
                                        <td><img class="p-1" style="width: 100px; height: 100px;"
                                                src="{{ url('/uploads//' . $product->image1) }}" alt=""></td>
                                        <td><img class="p-1" style="width: 100px; height: 100px;"
                                                src="{{ url('/uploads//' . $product->image2) }}" alt=""></td>
                                        <td><img class="p-1" style="width: 100px; height: 100px;"
                                                src="{{ url('/uploads//' . $product->image3) }}" alt=""></td>

                                        <td>{{ $product->price}}</td>
                                        <td>{{ $product->quantity_in_stock}}</td>
                                        <td>{{ $product->product_description}}</td>
                                        <td><a href="#" class="status_btn">{{ $product->status}}</a></td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center gap-1">
                                                <a class="btn btn-success rounded-pill" href="#"><i
                                                        class="fa-solid fa-pen-to-square text-white"></i></a>
                                                <a class="btn btn-danger rounded-pill ml-2"
                                                    href="{{ route('product.delete', $product->id) }}"><i
                                                        class="fa-solid fa-trash text-white"></i></a>
                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection