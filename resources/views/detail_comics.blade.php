@extends('layouts.app')
@section('title', 'Details | Comics')

@section('content')

{{-- IMG COMIC --}}

<div class="bg-blue">
    <div class="container">
        <div class="row p-5">
            <div class="col">
                <div class="card-img">
                    <img src="{{$comics['thumb']}}" alt="">
                    <p class="type">{{$comics['type']}}</p>
                    <a href="#null">
                        <p>View Gallery</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- SCHEDA COMIC --}}

<div class="container">
    <div class="row d-flex justify-content-between align-items-center p-5">

        {{-- SX PART --}}

        <div class="col-60">
            <div class="pb-3">
                <h2>{{($comics['title'])}}</h2>
            </div>
            <div class="container-info pb-4">
                <div class="row d-flex align-items-center">
                    <div class="col-70">
                        <div class="row-mini d-flex">
                            <div class="col d-flex">
                                <p>U.S. Price:</p><span class="text-white fw-semibold">{{($comics['price'])}}</span>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <p>AVAILABLE</p>
                            </div>
                        </div>                 
                    </div>
                    <div class="col-30 d-flex justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle  fw-semibold" href="#null" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Check Availability
                              </a>
                              <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item border-0 p-2" href="#null">Prova 1</a></li>
                                <li><a class="dropdown-item border-0 p-2" href="#null">Prova 2</a></li>
                                <li><a class="dropdown-item border-0 p-2" href="#null">Prova 3</a></li>
                              </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <p>{{$comics['description']}}</p>
            </div>
        </div>

         {{-- DX PART --}}

        <div class="col-40 d-flex justify-content-end">
            <div class="content">
                <div class="d-flex justify-content-end">
                    <h5>advertisement</h5>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/img/adv.jpg')}}" alt="adv">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- INFO COMIC --}}

<div class="container-gray">
    <div class="container">
        <div class="row p-5">
            <div class="col">
                <div>
                    <h4>Talent</h4>
                </div>
                <div class="first-line d-flex justify-content-between align-self-baseline">
                    <div class="col-30">
                        <p>Art by:</p> 
                    </div>
                    <div class="col-70">
                        <a href="#null"> {{$comics['artists']}} </a>
                    </div>
                </div>
                <div class="second-line d-flex justify-content-between align-self-baseline">
                    <div class="col-30">
                        <p>Written by:</p> 
                    </div>
                    <div class="col-70">
                        <a href="#null"> {{$comics['writers']}} </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h4>Specs</h4>
                </div>
                <div class="first-line d-flex justify-content-between align-self-baseline">
                    <div class="col-30">
                        <p>Series:</p> 
                    </div>
                    <div class="col-70">
                        <a href="#null"> {{$comics['series']}} </a>
                    </div>
                </div>
                <div class="second-line d-flex justify-content-between align-self-baseline">
                    <div class="col-30">
                        <p>U.S. Price:</p> 
                    </div>
                    <div class="col-70">
                        <p>{{($comics['price'])}}</p>
                    </div>
                </div>
                <div class="second-line d-flex justify-content-between align-self-baseline">
                    <div class="col-30">
                        <p>On Sale Date:</p> 
                    </div>
                    <div class="col-70">
                        <p>{{($comics['sale_date'])}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

