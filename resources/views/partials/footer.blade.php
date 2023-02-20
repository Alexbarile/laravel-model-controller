<footer>

    {{-- prima parte footer --}}

    <div class="bg-blu">
        <div class="container">
           <div class="row">
                <div class="col">
                    <ul>
                        @foreach ( $icon as $icone )
                        <li>
                            <a href="">
                                <img src="{{asset(Vite::asset($icone['label']))}}" alt="">
                                <span>{{$icone['description']}}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
           </div>
        </div>
    </div>

    {{-- seconda parte footer --}}

    <div class="jumbo-2">
        <div class="container">
            <div class="row">

                {{-- link --}}

                <div class="col">
                    <div class="d-flex">
                        <div>
                            <h3>Dc comics</h3>
                            <ul>
                                <li><a href="#">Characters</a></li>
                                <li><a href="#">Comics</a></li>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                            <h3>Shop</h3>
                            <ul>
                                <li><a href="#">Shop DC</a></li>
                                <li><a href="#">Shop DC Collectibles</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3>Dc</h3>
                            <ul>
                                <li><a href="#">Temos Of Use</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Ad Choices</a></li>
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Subscriptions</a></li>
                                <li><a href="#">Talent Workshops</a></li>
                                <li><a href="#">CPSC Cerrificates</a></li>
                                <li><a href="#">Ratings</a></li>
                                <li><a href="#">Shop Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3>Sites</h3>
                            <ul>
                                <li><a href="#">DC</a></li>
                                <li><a href="#">MAD Magazine</a></li>
                                <li><a href="#">DC Kids</a></li>
                                <li><a href="#">DC Universe</a></li>
                                <li><a href="#">DC Power Visa</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4" >
                        <span>All Site Content TM and &#169; 2020 DC Entertainment, unless otherwise <a href="#null">noted here.</a> All rights reserved. <a href="#null">Cookies Settings.</a>  </span>
                    </div>
                </div>

                {{-- logo grande --}}

                <div class="col">
                    <!-- img messa in bg-imgae -->
                </div>
            </div>
        </div>
    </div>

    {{-- terza parte footer --}}

    <div class="social">
        <div class="container">
            <div class="row">

                {{-- button --}}

                <div class="col">
                    <button><a href="#"> Sign-Up Now!</a></button>
                </div>

                {{-- loghi social --}}

                <div class="col d-flex justify-content-end">
                    <ul>
                        <li>
                            <h3>Follow Us</h3>
                        </li>
                        @foreach ( $social as $socials )
                        <li>
                            <a href="">
                                <img src="{{asset(Vite::asset($socials['logo']))}}" alt="">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>