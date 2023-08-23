@extends('Dashboard.layouts.master')

@section('dashTitle')
Books
@endsection

@section('dashCss')
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .create-project-btn {
            background-color: #f6bd60;
            color: #fff;
            border: none;
            border-radius: 15px;
            font-size: 12px;
            font-weight:600;
            cursor: pointer;
            margin-bottom:20px;
            padding:3px 15px
            }
    </style>
@endsection

@section('dashContent')
    <main style="margin-left:300px;margin-top:25px">
        <h3>Books</h3>
        <button class="create-project-btn" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-plus"></i> Create New Book</button>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All Books</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Borrowd Books</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <table class="table" style="margin-top:20px;">
                    <thead class="thead-dark" >
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Author</th>
                        <th scope="col">Publisher</th>
                        <th scope="col">Publication Date</th>
                        <th scope="col">Language</th>
                        <th scope="col">Book Image</th>
                        <th scope="col">Author Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($Books as $Book)
                            <tr>
                                <td>{{$Book->name}}</td>
                                <td style="max-width: 150px; overflow: hidden; text-overflow: ellipsis;">{{ $Book->descr }}</td>
                                <td>{{$Book->author}}</td>
                                <td>{{$Book->publisher}}</td>
                                <td>{{$Book->publication_date}}</td>
                                <td>{{$Book->language}}</td>
                                <td><img src="{{asset('assets/Uploads/Books/' . $Book->image)}}" alt="Book Image" style="width: 50px; height: 50px;"></td>
                                <td><img src="{{asset('assets/Uploads/Authors/' . $Book->author_image)}}" alt="Author Image" style="width: 50px; height: 50px;"></td>
                                <td>{{$Book->Category->name}}</td>
                                <td>
                                    <div style="display: flex; align-items: center;">
                                        
                                        <a data-toggle="modal" href="#modal1"
                                            data-id="{{ $Book->id }}"
                                            data-name="{{ $Book->name }}"
                                            data-descr="{{ $Book->descr }}"
                                            data-publication_date="{{ $Book->publication_date }}"
                                            data-language="{{ $Book->language }}"
                                            data-author="{{ $Book->author }}"
                                            data-publisher="{{ $Book->publisher }}"
                                            data-author_image="{{ $Book->author_image }}"
                                            data-image="{{ $Book->image }}"
                                            data-category="{{ $Book->Category->name }}"
                                            style="color:black;margin-right: 10px;">  
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a data-toggle="modal" href="#modaldemo9"
                                            data-id="{{ $Book->id }}"
                                            data-name="{{ $Book->name }}"
                                            style="color:black;margin-right: 10px;">  
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="position:absolute;right:100px">{{$Books->links()}}</div>
            </div>


            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table" style="margin-top:20px;width:1000px;">
                        <thead class="thead-dark" >
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Author</th>
                            <th scope="col">Publication Date</th>
                            <th scope="col">Language</th>
                            <th scope="col">Book Image</th>
                            <th scope="col">Author Image</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($Borrowed as $Borrow)
                                <tr>
                                    <td>{{$Borrow->name}}</td>
                                    <td style="max-width: 150px; overflow: hidden; text-overflow: ellipsis;">{{ $Borrow->descr }}</td>
                                    <td>{{$Borrow->author}}</td>
                                    <td>{{$Borrow->publication_date}}</td>
                                    <td>{{$Borrow->language}}</td>
                                    <td><img src="{{asset('assets/Uploads/Books/' . $Book->image)}}" alt="Book Image" style="width: 50px; height: 50px;"></td>
                                    <td><img src="{{asset('assets/Uploads/Authors/' . $Book->author_image)}}" alt="Author Image" style="width: 50px; height: 50px;"></td>
                                    <td>{{$Book->Category->name}}</td>
                                    <td>
                                        <div style="display: flex; align-items: center;">
                                            <a data-toggle="modal" href="#modal1"
                                                data-id="{{ $Book->id }}"
                                                data-name="{{ $Book->name }}"
                                                data-descr="{{ $Book->descr }}"
                                                data-publication_date="{{ $Book->publication_date }}"
                                                data-language="{{ $Book->language }}"
                                                data-author="{{ $Book->author }}"
                                                data-publisher="{{ $Book->publisher }}"
                                                data-author_image="{{ $Book->author_image }}"
                                                data-image="{{ $Book->image }}"
                                                data-category="{{ $Book->Category->name }}"
                                                style="color:black;margin-right: 10px;">  
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a data-toggle="modal" href="#modaldemo9"
                                                data-id="{{ $Book->id }}"
                                                data-name="{{ $Book->name }}"
                                                style="color:black;margin-right: 10px;">  
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
                <div style="position:absolute;right:100px">{{$Borrowed->links()}}</div>
            </div>
        </div>

        <!-- Modal Add -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" style="max-width: 75%;max-height:100%;margin-left:300px;margin-top:60px">
            <div class="modal-content" style="background-color: transparent; backdrop-filter: blur(10px); min-height: 90vh;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-left:0;">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/Books/store" method="post" autocomplete="off" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div style="position: relative;">
                                <div style="position: absolute; top: 20px; left: 40px;">
                                    <label for="book" style="padding: 10px 20px; background-color: #5e60ce; color: #fff; cursor: pointer; border-radius: 4px;">
                                        Upload Book Image
                                    </label>
                                    <input type="file" id="book" name="book" style="display: none;">
                                    <br>
                                    <img id="previewImage" src="" alt="Preview" style="display: none; max-width: 200px; max-height: 200px; margin-top: 60px;">
                                </div>

                                <div style="position: absolute; top: 80px; left: 40px;">
                                    <label for="author_img" style="padding: 10px 20px; background-color: #5e60ce; color: #fff; cursor: pointer; border-radius: 4px;">
                                        Upload Author Image
                                    </label>
                                    <input type="file" id="author_img" name="author_img" style="display: none;">
                                    <br>
                                    <img id="previewImage2" src="" alt="Preview" style="display: none; max-width: 200px; max-height: 200px; margin-top: 180px;">
                                </div>
                            </div>
                            <div style="width:600px;margin-left:280px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name" style="color: black; font-weight: 600;">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="descr" style="color: black; font-weight: 600;">Description</label>
                                        <Textarea type="text" class="form-control" id="descr" name="descr"></textarea>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="author" style="color: black; font-weight: 600;">Author</label>
                                        <input type="text" class="form-control" id="author" name="author">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="publication_date" style="color: black; font-weight: 600;">Publication Date</label>
                                        <input type="date" class="form-control" id="publication_date" name="publication_date">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="publisher" style="color: black; font-weight: 600;">Publisher</label>
                                        <input type="text" class="form-control" id="publisher" name="publisher">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="language" style="color: black; font-weight: 600;">Language</label>
                                        <input type="text" class="form-control" id="language" name="language">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="category" style="color: black; font-weight: 600;">Category</label>
                                        <select class="form-control" id="category" name="category">
                                            @foreach($Categories as $Category)
                                                <option value="{{$Category->id}}">{{$Category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #5e60ce;margin-left:760px">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Update -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" style="max-width: 75%;max-height:100%;margin-left:300px;margin-top:60px">
            <div class="modal-content" style="background-color: transparent; backdrop-filter: blur(10px); min-height: 90vh;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-left:0;">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/Books/update" method="post" autocomplete="off" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{ method_field('patch') }}
                           <!-- Book Image Preview -->
                           @isset($Book)
                                <div style="position: relative;">
                                    <div style="position: absolute; top: 20px; left: 40px;">
                                        <label for="book_img" style="padding: 10px 20px; background-color: #a3cef1; color: #fff; cursor: pointer; border-radius: 4px;">
                                            Upload Book Image
                                        </label>
                                        <input type="file" id="book_img" name="book_img" style="display: none;">
                                        <br>
                                        <img id="previewImage3" src="{{ asset('assets/Uploads/Books/' . $Book->image) }}" alt="Preview" style="max-width: 200px; max-height: 200px; margin-top: 60px;">
                                    </div>
                                </div>
                            @endisset

                            @isset($Book)
                                <!-- Author Image Preview -->
                                <div style="position: relative;">
                                    <div style="position: absolute; top: 80px; left: 40px;">
                                        <label for="author_img2" style="padding: 10px 20px; background-color: #a3cef1; color: #fff; cursor: pointer; border-radius: 4px;">
                                            Upload Author Image
                                        </label>
                                        <input type="file" id="author_img2" name="author_img2" style="display: none;">
                                        <br>
                                        <img id="previewImage4" src="{{ asset('assets/Uploads/Authors/' . $Book->author_image) }}" alt="Preview" style="max-width: 200px; max-height: 200px; margin-top: 180px;">
                                    </div>
                                </div>
                            @endisset

                            <div style="width:600px;margin-left:280px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name" style="color: black; font-weight: 600;">Name</label>
                                        <input type="hidden" class="form-control" id="id" name="id">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="descr" style="color: black; font-weight: 600;">Description</label>
                                        <Textarea type="text" class="form-control" id="descr" name="descr"></textarea>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="author" style="color: black; font-weight: 600;">Author</label>
                                        <input type="text" class="form-control" id="author" name="author">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="publication_date" style="color: black; font-weight: 600;">Publication Date</label>
                                        <input type="date" class="form-control" id="publication_date" name="publication_date">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="publisher" style="color: black; font-weight: 600;">Publisher</label>
                                        <input type="text" class="form-control" id="publisher" name="publisher">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="language" style="color: black; font-weight: 600;">Language</label>
                                        <input type="text" class="form-control" id="language" name="language">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="category" style="color: black; font-weight: 600;">Category</label>
                                        <select class="form-control" id="category" name="category">
                                            @foreach($Categories as $Category)
                                                <option value="{{$Category->id}}">{{$Category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #a3cef1;margin-left:760px;box-shadow: none;">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Delete-->
        <div class="modal fade" id="modaldemo9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document" style="max-width: 50%;max-height:100%;margin-left:300px;margin-top:60px">
                        <div class="modal-content" style="background-color: transparent;backdrop-filter: blur(10px);">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-left:0;">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="/Books/destroy" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <div class="modal-body">
                                <p style="color:white">Are you sure you want to delete this book?</p><br>
                                    <input type="hidden" name="id" id="id" value="">
                                    <input class="form-control" name="name" id="name" type="text"
                                           readonly>
                                </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" style="background-color: #a3cef1;box-shadow: none;">Delete</button>

                                </div>
                            </form>
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
        function handleImageUpload(inputId, previewId) {
            document.getElementById(inputId).addEventListener('change', function(event) {
                var input = event.target;
                var reader = new FileReader();

                reader.onload = function() {
                    var imgElement = document.getElementById(previewId);
                    imgElement.src = reader.result;
                    imgElement.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            });
        }

        handleImageUpload('book', 'previewImage');
        handleImageUpload('author_img', 'previewImage2');
    </script>

     <!--Edit JS-->
     <script>
        $('#modal1').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var descr = button.data('descr')
            var author = button.data('author')
            var publication_date = button.data('publication_date')
            var publisher = button.data('publisher')
            var language = button.data('language')
            var category = button.data('category')
            var image = button.data('image')
            var author_image = button.data('author_image')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #descr').val(descr);
            modal.find('.modal-body #author').val(author);
            modal.find('.modal-body #publication_date').val(publication_date);
            modal.find('.modal-body #publisher').val(publisher);
            modal.find('.modal-body #language').val(language);
            modal.find('.modal-body #category').val(category);
            modal.find('.modal-body #image').val(image);
            modal.find('.modal-body #author_image').val(author_image);
        })
    </script>

    <script>
        function handleImageUpload(inputId, previewId) {
            document.getElementById(inputId).addEventListener('change', function(event) {
                var input = event.target;
                var reader = new FileReader();

                reader.onload = function() {
                    var imgElement = document.getElementById(previewId);
                    imgElement.src = reader.result;
                    imgElement.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            });
        }

        handleImageUpload('book', 'previewImage');
        handleImageUpload('author_img', 'previewImage2');
        handleImageUpload('book_img', 'previewImage3'); // Handle the new book image input
        handleImageUpload('author_img2', 'previewImage4'); // Handle the new author image input
    </script>

    <!--Delete JS-->
    <script>
        $('#modaldemo9').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
        })
    </script>
@endsection