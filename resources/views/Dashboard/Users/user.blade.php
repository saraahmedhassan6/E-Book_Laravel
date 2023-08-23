@extends('Dashboard.layouts.master')

@section('dashTitle')
Users
@endsection

@section('dashCss')
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@endsection

@section('dashContent')
    <main style="margin-left:300px;margin-top:25px">
        <h3>Users</h3>
        <input type="text" class="form-control" id="searchId" name="searchId" placeholder="Search by ID"
            style="color:gray;border:none;border:1px solid gray;background-color: transparent;width:200px;border-radius:20px;height:30px">
        <div id="tableContainer">
            <table class="table" style="margin-top:50px;width:1000px;">
                <thead class="thead-dark" >
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td style="text-align:center">{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                <div style="display: flex; align-items: center;">
                                    <a data-toggle="modal" href="#modal2"
                                        data-id="{{ $user->id }}"
                                        data-name="{{$user->name}}"
                                        data-email="{{$user->email}}"
                                        data-phone="{{$user->phone}}"
                                        data-address="{{$user->address}}"
                                        data-role="{{$user->role}}"
                                        style="color:black;margin-right: 10px;">  
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div style="position:absolute;right:100px">{{$users->links()}}</div>

         <!--Modal View-->
         <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" style="max-width: 75%;margin-left:300px;margin-top:130px">
                <div class="modal-content" style="background-color: transparent; backdrop-filter: blur(3px);">
                    <div class="modal-header" >
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-left:0;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr>
                                <td>
                                    <label for="id" style="color:black;font-weight:600;font-size:18px">Student ID</label>
                                    <input type="text" class="form-control" id="id" name="id" value=""
                                        readonly style="color:white;border:none;border-bottom:1px solid white;background-color: transparent;width:400px;margin-right:60px;margin-bottom:30px;">
                                </td>
                                <td>
                                    <label for="name" style="color:black;font-weight:600;font-size:18px">Username</label>
                                    <input type="name" class="form-control" id="name" name="name" value=""
                                        readonly style="color:white;border:none;border-bottom:2px solid white;background-color: transparent;width:400px">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="email" style="color:black;font-weight:600;font-size:18px">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value=""
                                    readonly style="color:white;border:none;border-bottom:1px solid white;background-color: transparent;width:400px;margin-bottom:30px">
                                </td>
                                <td>
                                    <label for="phone" style="color:black;font-weight:600;font-size:18px">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value=""
                                    readonly style="color:white;border:none;border-bottom:1px solid white;background-color: transparent;width:400px">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="address" style="color:black;font-weight:600;font-size:18px">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" value=""readonly style="color:white;border:none;border-bottom:1px solid white;background-color: transparent;width:400px">
                                </td>
                                <td>
                                    <label for="role" style="color:black;font-weight:600;font-size:18px">Role</label>
                                    <input type="text" class="form-control" id="role" name="role" value=""readonly style="color:white;border:none;border-bottom:1px solid white;background-color: transparent;width:400px;">
                                </td>
                            </tr>
                        </table >
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('dashJS')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function () {
        $("#searchId").on("keyup", function () {
            var searchText = $(this).val().toLowerCase();
            $("#tableContainer table tbody tr").filter(function () {
                $(this).toggle(
                    $(this)
                        .find("td:first-child")
                        .text()
                        .toLowerCase()
                        .indexOf(searchText) > -1
                );
            });
        });
    });
</script>

    <script>
        $('#modal2').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var email = button.data('email');
            var phone = button.data('phone');
            var address = button.data('address');
            var role = button.data('role');
            var modal = $(this);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #email').val(email);
            modal.find('.modal-body #phone').val(phone);
            modal.find('.modal-body #address').val(address);
            modal.find('.modal-body #role').val(role);
        });
    </script>
@endsection