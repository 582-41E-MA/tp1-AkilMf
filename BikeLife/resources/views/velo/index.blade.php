@extends('layouts.app')
@section('title', 'Home')
@section('content')

<section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @forelse($velos as $velo)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <!-- <img class="card-img-top"
                            src="https://contents.mediadecathlon.com/p2249496/ad2e88becf2d7aa4336d2a07ec6c7bb6b278513419961c0e8572c5caa0af79ed/velo-de-montagne-explore520-gris-rouge.jpg?format=auto"
                            alt="..." /> -->
                            <!-- <p>{{asset('img').'/'.$velo->path}}</p> -->
                        <img class="card-img-top"
                            src="{{asset('img').'/'.$velo->path}}" alt="{{ $velo->name }}"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $velo->name }}</h5>
                                <!-- Product price-->
                                ${{ $velo->price }}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="velo/{{ $velo->id }}">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert alert-danger">There are no bikes to display!</div>
                @endforelse  
            </div>
        </div>
    </section>

@endsection