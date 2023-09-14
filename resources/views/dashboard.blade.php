<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC company</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Dashboard</h1>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-md" type="submit">Logout</button>
                </form>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('create-category')}}">Add Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('create-product')}}">Add Products</a>
                </li>
            </ul>
        </div>
    </nav>


    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>


                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->product_category}}</td>
                    <td>
                        <a href="{{url('edit-product', $product->id)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a onclick=" return confirm('Are you sure that delete this product?')" href="{{url('delete-product', $product->id)}}" class="btn btn-danger">Delete</a>
                    </td>


                </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
