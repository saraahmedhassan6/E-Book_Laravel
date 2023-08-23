@extends('layouts.master')

@section('title')
    Show Book
@endsection

@section('css')

@endsection

@section('content')
    <section id="posts" class="posts" style="margin-top:100px">

        @foreach($Books as $Book)
            <div style="display: flex; flex-direction: column; margin: 80px; padding: 20px; background-color: #f8f9fa;margin-top: 0">
                <div style="display: flex; align-items: center;">
                    <div style="flex: 1;"><img src="{{asset('assets/Uploads/Books/' . $Book->image)}}" alt="Book Image" style="width: 350px; height: 500px;"></div>
                        <div style="flex: 2; margin-left: 20px;">
                            <div style="display: flex; flex-direction: column;">
                                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                                    <h3 style="max-width: 800px; !important;  word-wrap: break-word ; top: 10px!important;">{{$Book->name}} </h3>
                                </div>
                                <div style="max-width: 800px; !important;  word-wrap: break-word ;">{{$Book->descr}}</div>
                            </div>
                            <div style="margin-top:30px">
                                <pre><span style="color:#c9184a;font-weight:600;font-size:18px">Published Date:</span> <span style="color:#1a759f;font-size:17px">{{$Book->publication_date}}</span> 

<span style="color:#c9184a;font-weight:600;font-size:18px">Language:</span> <span style="color:#1a759f;font-size:17px">{{$Book->language}}</span>
                                </pre>
                                

                                

                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 20px;"><span style="color: darkgray">  <span>&bullet;</span>
                    {{$Book->Category->name}}</span></div>
                    <div class="d-flex align-items-center author" style="margin-top: 20px;">
                        <div class="photo">

                            <img src="{{asset('assets/Uploads/Authors/' . $Book->author_image)}}" alt="" class="img-fluid" style="width: 40px;height:50px;">
                        </div>
                        <span style="color: darkgray">{{$Book->author}}</span>
                    </div>

                </div>
                <pre></pre>
            @endforeach

    </section>

@endsection

@section('js')





@endsection