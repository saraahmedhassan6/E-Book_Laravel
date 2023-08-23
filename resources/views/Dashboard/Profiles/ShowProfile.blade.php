@extends('Dashboard.layouts.master')

@section('dashTitle')
Profile
@endsection

@section('dashCss')
    <style>
        .create-project-btn {
            background-color: #a3cef1;
            color: #fff;
            border: none;
            border-radius: 15px;
            font-size: 12px;
            font-weight:600;
            cursor: pointer;
            margin-bottom:20px;
            padding:3px 15px;
            }
    </style>

@endsection

@section('dashContent')
    <main style="margin-left:300px;margin-top:25px">
        <section id="posts" class="posts">
            <p style="font-weight:600;font-size:30px;">Update Profile</p>
            <button class="create-project-btn" data-toggle="modal" data-target="#modal2" ><i class="fas fa-edit"></i> Update Profile</button>
            <div style="width:1000px;margin-top:20px;">
                <table style="width:1100px;">
                    <tr>
                        <td>
                            <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                <input type="hidden" class="form-control" id="id" name="id" >
                                <label for="name" style="color:black;font-weight:600">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $Profiles->name }}" readonly style="border:none;border-bottom:1px solid gray;">
                            </div>
                        </td>
                        <td>
                            <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                <label for="email" style="color:black;font-weight:600">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $Profiles->email }}" readonly style="border:none;border-bottom:1px solid gray; ">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                <label for="password" style="color:black;font-weight:600">Password</label>
                                <input type="text" class="form-control" id="password" name="password" value=*************** readonly style="border:none;border-bottom:1px solid gray">
                            </div>
                        </td>
                        <td>
                           <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                <label for="position" style="color:black;font-weight:600">Role</label>
                                <input type="text" class="form-control" id="Role" name="Role" readonly value="{{ $Profiles->role }}" style="border:none;border-bottom:1px solid gray">
                           </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                <label for="phone" style="color:black;font-weight:600">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" readonly value="{{ $Profiles->phone }}" style="border:none;border-bottom:1px solid gray">
                            </div>
                        </td>
                        <td>
                           <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                <label for="address" style="color:black;font-weight:600">Address</label>
                                <input type="text" class="form-control" id="address" name="address" readonly value="{{ $Profiles->address }}" style="border:none;border-bottom:1px solid gray">
                           </div>
                        </td>
                    </tr>
                </table>
            </div>
            <!--Modal Edit-->
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document" style="max-width: 70%;margin-left:300px;margin-top:100px">
                    <div class="modal-content" style="background-color: transparent; backdrop-filter: blur(5px);">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: transparent;border:none">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/Profile/update" method="post" autocomplete="off" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{ method_field('patch') }}
                                <table style="width:950px;">
                                    <tr>
                                        <td>
                                            <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                                <label for="name" style="color:black;font-weight:600">Name</label>
                                                <input type="hidden" class="form-control" id="id" name="id" value="{{ $Profiles->id }}" >
                                                <input type="text" class="form-control" id="name" name="name" value="{{ $Profiles->name }}" required style="border:none;border-bottom:1px solid white;color:white">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                                <label for="email" style="color:black;font-weight:600">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ $Profiles->email }}" required style="border:none;border-bottom:1px solid white;color:white ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                                <label for="password" style="color:black;font-weight:600">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" autocomplete="off" required style="border: none; border-bottom: 1px solid white;color:white">
                                            </div>
                                        </td>
                                        <td>
                                        <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                                <label for="position" style="color:black;font-weight:600">Role</label>
                                                <input type="text" class="form-control" id="Role" name="Role" readonly value="{{ $Profiles->role }}" required style="border:none;border-bottom:1px solid white;color:gray;color:white">
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                                <label for="phone" style="color:black;font-weight:600">Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $Profiles->phone }}" required style="border:none;border-bottom:1px solid white;color:white">
                                            </div>
                                        </td>
                                        <td>
                                        <div class="form-group" style="margin-right:80px;margin-bottom:40px">
                                                <label for="address" style="color:black;font-weight:600">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" value="{{ $Profiles->address }}" required style="border:none;border-bottom:1px solid white;color:white">
                                        </div>
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary" style="background-color: #a3cef1;border-color:#a3cef1;border-radius:5px;margin-left:800px;padding:5px 20px;box-shadow: none;">Update</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

@endsection

@section('dashJS')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
@endsection
