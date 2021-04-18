@extends('layouts.app')
@section('content')
    <div class="service-center-info-form">
        <div class="container">
            <div class="form-heading">
                <h2 class="display-5 text-center mb-5">Service Center Information Form</h2>
            </div>
            <div class="info-form">
                <form action="{{route('service-center.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="item custom-file-upload">
                        <label for="display_picture"><i class="fa fa-user-circle"></i><i class="fa fa-camera"></i> </label>
                        <input type="file" name="display_picture" id="display_picture" class="form-control" required>
                        <h4 class="file-path text-center"></h4>
                    </div>
                    <div class="item">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" required>
                    </div>
                    <div class="item">
                        <label for="phone_number">Contact Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Enter Phone Number" required>
                    </div>
                    <div class="item">
                        <label for="short_description">Short Description of Company</label>
                        <textarea type="text" name="short_description" id="short_description" class="content form-control" placeholder="enter short description of the company" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="item custom-file-upload">
                        <label for="description_picture"><i class="fa fa-user-circle"></i><i class="fa fa-camera"></i></label>
                        <input type="file" name="description_picture" id="description_picture" class="form-control" required>
                        <h4 class="file-path text-center"></h4>
                    </div>
                    <div class="item">
                        <label for="long_description">Long Description of company</label>
                        <textarea type="text" name="long_description" id="long_description" class="content form-control" placeholder="enter long description of the company" cols="60" rows="10" required></textarea>
                    </div>
                    <div class="item">
                        <button type="submit" class="btn btn-success" style="width: 150px">Add Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function(){
            jQuery("div.custom-file-upload").each(function(){
                jQuery(this).find("input[type='file']").on('change', function(){
                    var dataPath = jQuery(this).val();
                    jQuery(this).parents('.custom-file-upload').find('.file-path').text(dataPath);
                });
            });
        });
    </script>
@endsection


