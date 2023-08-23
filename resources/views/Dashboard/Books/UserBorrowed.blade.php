@extends('Dashboard.layouts.master')

@section('dashTitle')
Books
@endsection

@section('dashCss')
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        
    </style>
@endsection

@section('dashContent')
    <main style="margin-left:300px;margin-top:25px">
        <h3>Books</h3>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Your Books</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Borrowd Books</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                <div style="position:absolute;margin:10px;right:10px;">
                    @foreach($borrowedBooks as $borrowedBook)
                            <div style="display: flex; flex-direction: column;  padding: 10px; background-color: #f8f9fa;margin-top: 0">
                                <div style="display: flex; align-items: center;">
                                    <div style="flex: 1;"><img src="{{asset('assets/Uploads/Books/' . $borrowedBook->Book->image)}}" alt="hh" style="width: 350px; height: 350px;"></div>
                                        <div style="flex: 2; margin-left: 20px;">
                                            <div style="display: flex; flex-direction: column;">
                                                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                                                    <h3 style="max-width: 800px; !important;  word-wrap: break-word ; top: 10px!important;">{{$borrowedBook->Book->name}} </h3>
                                                </div>
                                                <div style="max-width: 600px; !important;  word-wrap: break-word ;">{{implode(' ', array_slice(explode(' ', $borrowedBook->Book->descr), 0, 50))}}</div>
                                            </div>
                                            <div  style="margin-top:30px">
                                                <a href="{{ url('Books/Show') }}/{{ $borrowedBook->Book->id }}" class="modal-effect btn btn-sm btn-primary" style="color:white;background-color:black;box-shadow: none;"><i
                                                        class="fas fa-plus"></i>&nbsp; Read More
                                                </a>
                                                @auth
                                                    <form method="POST" action="{{ url('Books/Show/Borrow') }}/{{$borrowedBook->Book->id}}">
                                                        @csrf
                                                        @method('PUT')
                                                        @if($borrowedBook->Book->borrowed==1)
                                                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                                            <button type="submit" class="modal-effect btn btn-sm btn-primary" style="color:white;border-radius:5px;background-color:#a3cef1;border:#a3cef1;box-shadow: none;">Return Now!</button>
                                                        @endif
                                                    </form>
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    
                    @endforeach
                </div>
            </div>


            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div style="position:absolute;margin:10px;right:10px;">
                        @foreach($allBorrowedBooks as $allBorrowedBook)
                                <div style="display: flex; flex-direction: column;  padding: 10px; background-color: #f8f9fa;margin-top: 0">
                                    <div style="display: flex; align-items: center;">
                                        <div style="flex: 1;"><img src="{{asset('assets/Uploads/Books/' . $allBorrowedBook->Book->image)}}" alt="hh" style="width: 350px; height: 350px;"></div>
                                            <div style="flex: 2; margin-left: 20px;">
                                                <div style="display: flex; flex-direction: column;">
                                                    <div class="section-header d-flex justify-content-between align-items-center mb-5">
                                                        <h3 style="max-width: 800px; !important;  word-wrap: break-word ; top: 10px!important;">{{$allBorrowedBook->Book->name}} </h3>
                                                    </div>
                                                    <div style="max-width: 600px; !important;  word-wrap: break-word ;">{{implode(' ', array_slice(explode(' ', $allBorrowedBook->Book->descr), 0, 50))}}</div>
                                                </div>
                                                <div  style="margin-top:30px">
                                                    <a href="{{ url('Books/Show') }}/{{ $allBorrowedBook->Book->id }}" class="modal-effect btn btn-sm btn-primary" style="color:white;background-color:black;box-shadow: none;"><i
                                                            class="fas fa-plus"></i>&nbsp; Read More
                                                    </a>
                                                    <span style="background-color:red;color:white;margin-left:150px">Book will Return in: {{$allBorrowedBook->returned}}</span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        
                        @endforeach
                </div>
            </div>


            
        </div>

      

       
    </main>
@endsection

@section('dashJS')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
@endsection