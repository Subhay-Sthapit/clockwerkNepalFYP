@extends('layouts.app')
@section('content')
    <div class="user-info-form">
        <div class="container">
            <div class="info-form">
                <div class="form-heading">
                    <h2 class="display-5 text-center mb-5">Customer Information Form</h2>
                </div>
                <form action="{{route('customer.create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="item text-center custom-file-upload">
                        <label for="profile_picture" data-profile-img=""><i class="fa fa-user-circle"></i><i class="fa fa-camera"></i></label>
                        <input type="file" name="profile_picture" id="profile_picture" class="form-control" required>
                        <h4 id="file-path"></h4>
                    </div>
                    <div class="item">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Enter Address" name="address" id="address" class="form-control" required>
                    </div>
                    <div class="item">
                        <label for="phone_number">Contact Number</label>
                        <input type="text" placeholder="enter Contact number" name="phone_number" id="phone_number" class="form-control" required>
                    </div>
                    <div class="item">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function(){
            $('#profile_picture').on('change', function(){
                var profilePicInputData = jQuery('#profile_picture').val();
                $('#file-path').text(profilePicInputData);
            });
        });
    </script>
@endsection

