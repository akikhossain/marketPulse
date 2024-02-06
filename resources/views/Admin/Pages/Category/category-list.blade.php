@extends('Admin.master')
@section('content')
<section class="main_content dashboard_part" style="margin: 30px">
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Category List</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="add_button ms-2">
                                    <a href="{{ route('category.form') }}" class="btn_1 text-decoration-none ">Add
                                        New</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table ">

                            <table class="table lms_table_active">
                                <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Category Description</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $category)

                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td><a href="#" class="status_btn">Active</a></td>
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