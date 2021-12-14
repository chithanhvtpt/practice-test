<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<form  method="post" enctype="multipart/form-data" class="container">
    @csrf
    <div style="margin-top:50px;margin-left: 200px ">
        <table  class="table table-dark" style="width: 700px;height: 500px">
            <tr>
                <td><input type="text" name="name" style="width: 700px" placeholder="name" class="alert alert-primary" role="alert">
                    @error('name')
                    <p class="text text-danger">{{$message}}</p>
                    @enderror
                </td>
            </tr>

            <tr>

                <td><input type="email" name="email" style="width: 700px" placeholder="email" class="alert alert-primary" role="alert">
                                        @error('email')
                                        <p class="text text-danger">{{$message}}</p>
                                        @enderror
                </td>
            </tr>
            <tr>

                <td><input type="date" name="birthday" style="width: 700px" placeholder="price" class="alert alert-primary" role="alert">
{{--                    @error('birthday')--}}
{{--                    <p class="text text-danger">{{$message}}</p>--}}
{{--                    @enderror--}}
                </td>
            </tr>
            <tr>
                <td>
                <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select"
                        name="sex" >
                        <option>Nam</option>
                        <option>Nữ</option>
                </select>
                </td>
            </tr>

            <tr>

                <td><input type="number" name="phone" style="width: 700px" placeholder="numberphone" class="alert alert-primary" role="alert">
                                        @error('phone')
                                        <p class="text text-danger">{{$message}}</p>
                                        @enderror
                </td>
            </tr>

            <tr>

                <td><input type="number" name="cmnd" style="width: 700px" placeholder="Số cmnd" class="alert alert-primary" role="alert">
                                        @error('cmnd')
                                        <p class="text text-danger">{{$message}}</p>
                                        @enderror
                </td>
            </tr>

            <tr>

                <td><input type="text" name="address" style="width: 700px" placeholder="Địa chỉ" class="alert alert-primary" role="alert">
                                        @error('address')
                                        <p class="text text-danger">{{$message}}</p>
                                        @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select"
                            name="category_id" >
                        @foreach($categories as $category)
                            <option name="category_id" value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

        </table>

    </div>
    <div style="margin-left: 200px">
        <a href="{{route('users.list')}}" class="btn btn-primary">Back</a>
        <button class="btn btn-primary" type="submit">Add Product</button>
    </div>


</form>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
