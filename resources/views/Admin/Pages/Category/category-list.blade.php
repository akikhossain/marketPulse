@extends('Admin.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
      h2{
        margin-top: 20px;
        margin-bottom: 30px;
        text-align: left;
      }

        table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        .container {
            text-align: right;
            margin-bottom: 10px;
        }

        .add-category-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #ffffff;
            border: 1px solid #007bff;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-category-btn:hover {
            background-color: #0056b3;
            color: #ffffff;
        }
        @media (max-width: 576px) {
            table {
                overflow-x: auto;
                display: block;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Category List</h2>
    <div class="table-responsive">
    <div class="container">
    <a href="{{route('category.form')}}" class="add-category-btn">Add New Category</a>
</div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category name</th>
                    <th>Description</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td></td>
                </tr>
              
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>

<script src="path/to/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection