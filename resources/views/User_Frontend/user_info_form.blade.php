<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('User_Frontend/service_center_frontend.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Customer Info Form</title>
</head>
<body>
    <div class="user-info-form">
        <div class="form-heading">
            <h2 class="">User Information Form</h2>
        </div>
        <div class="info-form">
            <form action="{{route('customer.create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="profile_picture">Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture" required>

                <label for="address">Address</label>
                <input type="text" placeholder="Enter Address" name="address" id="address" required>

                <label for="phone_number">Contact Number</label>
                <input type="text" placeholder="enter Contact number" name="phone_number" id="phone_number" required>

                <button type="submit" class="btn-success">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>


