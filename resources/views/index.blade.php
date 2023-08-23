@extends('layouts.master')

@section('title')
   E-Book
@endsection

@section('css')
@endsection

@section('content')
<main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class=""style="width:100%;" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a  class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Library3.JPG');background-size: cover;">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a  class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Library5.GIF');background-size: cover;">
                                </a>
                            </div>
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        @foreach($Books as $Book)
                <div style="display: flex; flex-direction: column; margin: 80px; padding: 20px; background-color: #f8f9fa;margin-top: 0">
                    <div style="display: flex; align-items: center;">
                        <div style="flex: 1;"><img src="{{asset('assets/Uploads/Books/' . $Book->image)}}" alt="hh" style="width: 350px; height: 350px;"></div>
                        <div style="flex: 2; margin-left: 20px;">
                            <div style="display: flex; flex-direction: column;">
                                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                                    <h3 style="max-width: 800px; !important;  word-wrap: break-word ; top: 10px!important;">{{$Book->name}} </h3>
                                </div>
                                <div style="max-width: 800px; !important;  word-wrap: break-word ;">{{implode(' ', array_slice(explode(' ', $Book->descr), 0, 50))}}
                                </div>
                            </div>
                            <div  style="margin-top:30px">
                                <a href="{{ url('Books/Show') }}/{{ $Book->id }}" class="modal-effect btn btn-sm btn-primary" style="color:white;"><i
                                        class="fas fa-plus"></i>&nbsp; Read More
                                </a>
                                @auth
                                    <form method="POST" action="{{ url('Books/Show/Borrow') }}/{{$Book->id}}">
                                        @csrf
                                        @method('PUT')
                                        @if($Book->borrowed==0)
                                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                            <button type="submit" class="btn btn-primary" style="color:white;border-radius:5px;margin-top: 10px;background-color:#a3cef1;border:#a3cef1">Borrow!</button>
                                        @else
                                            <span style="background-color:red;color:white;margin-left:600px">Not available to borrow </span>
                                        @endif
                                    </form>
                                @endauth
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



</main><!-- End #main -->
@endsection

@section('js')
@endsection