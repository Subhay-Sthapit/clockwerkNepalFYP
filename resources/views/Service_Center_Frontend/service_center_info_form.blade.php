<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('Service_Center_Frontend/service_center_frontend.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Service Center Info Form</title>
</head>
<body>
<div class="service-center-info-form">
    <div class="form-heading">
        <h2 class="">Service Center Information Form</h2>
    </div>
    <div class="info-form">
        <form action="{{route('service-center.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="display_picture">Company Display Picture</label>
            <br>
            <input type="file" name="display_picture" id="display_picture" required>
            <br>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" placeholder="Enter Address" required>
            <br>
            <label for="phone_number">Contact Number</label>
            <input type="text" name="phone_number" id="phone_number" placeholder="Enter Phone Number" required>
            <br>
            <label for="short_description">Short Description of Company</label>
            <br>
            <textarea type="text" name="short_description" id="short_description" placeholder="enter short description of the company" cols="30" rows="10" required></textarea>
            <br>
            <label for="description_picture">Company About Picture</label>
            <br>
            <input type="file" name="description_picture" id="description_picture" required>
            <br>
            <label for="long_description">Long Description of company</label>
            <br>
            <textarea type="text" name="long_description" id="long_description" placeholder="enter long description of the company" cols="60" rows="10" required></textarea>
            <br>
            <button type="submit" class="btn btn-success" style="width: 150px">Add Info</button>
        </form>
    </div>
</div>
</body>
</html>


