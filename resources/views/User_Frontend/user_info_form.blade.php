@extends('layouts.user_master')
@section('title','User Info Form')
@section('content')
    <div class="user-info-form">
        <div class="form-heading">
            <h2 class="">User Information Form</h2>
        </div>
        <div class="info-form">
            <form action="#" method="post">
                <label for="profile_picture">Edit Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture" required>

                <label for="address">Address</label>
                <input type="text" placeholder="Enter Address" name="address" id="address" required>

                <label for="phone_number">Contact Number</label>
                <input type="text" placeholder="enter Contact number" name="phone_number" id="phone_number" required>

                <button type="submit" class="btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection
