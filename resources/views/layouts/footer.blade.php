<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">

            <div class="row g-5">
                <div class="col-lg-4">
                    <h3 class="footer-heading">About E-Library</h3>
                    <p>Welcome to Our Library</p>
                    <p><a href="https://github.com/saraahmedhassan6/E-Book_Laravel" class="footer-link-more">Learn More</a></p>
                </div>
                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Navigation</h3>
                    <ul class="footer-links list-unstyled">
                        <li><a href="{{url('/')}}"><i class="bi bi-chevron-right"></i> Home</a></li>
                        <li><a href="{{url('/Books/ShowAll')}}"><i class="bi bi-chevron-right"></i> Books</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4">
                    <h3 class="footer-heading">Recent Posts</h3>
                    @foreach($Books as $Book)
                        <ul class="footer-links footer-blog-entry list-unstyled">

                            <li>
                                <a href="{{ url('Books/Show') }}/{{ $Book->id }}" class="d-flex align-items-center">
                                    <img src="{{asset('assets/Uploads/Books/' . $Book->image)}}" alt="" class="img-fluid me-3">
                                    <div>
                                        <div style="margin-top: 20px;"><span style="color: darkgray">  <span>&bullet;</span>
                                {{\Carbon\Carbon::parse($Book->created_at)->format('d-m-y')}} </span></div>

                                        <span>{{$Book->name}}</span>

                                    </div>
                                </a>
                            </li>

                        </ul>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="footer-legal">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <div class="copyright">
                        © Copyright <strong><span>SaraBlog</span></strong>. All Rights Reserved
                    </div>

                    <div class="credits">
                        
                        Designed by <a href="https://github.com/saraahmedhassan6">Sara Ahmed</a>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                        <a href="https://twitter.com/Saraahmedhassn" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100026431260579" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/sara.ahmed93/" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/sara-ahmed-76386420a/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>

            </div>

        </div>
    </div>

</footer>

