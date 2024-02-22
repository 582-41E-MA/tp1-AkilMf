@extends('layouts.app')
@section('title', 'product')
@section('content')


<section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                        src="{{asset('img').'/'.$velo->path}}" alt="{{ $velo->name }}" /></div>
                <div class="col-md-6">
                    <div class="small mb-1">Réf : 8544956</div>
                    <h1 class="display-5 fw-bolder">{{ $velo->name }}</h1>
                    <div class="fs-5 mb-5">
                        @if($velo->sale == 1)
                            <span class="text-muted text-decoration-line-through">${{ $velo->price }}</span>
                            ${{ $velo->salePrice }}
                            @else 
                            ${{ $velo->price }}
                        @endif
                    </div>
                    <!-- <p class="lead">Nous avons conçu ce vélo spécialement pour les débutants : des pneus rassurants, des
                        changements de vitesse simplifiés, un monoplateau et un guidon courbé. Son monoplateau qui
                        facilite les changements de vitesse. Pneus de 32 mm assurant votre confort sur les routes.</p> -->
                    <p class="lead">{{ $velo->description }}</p>
                    <div class="d-flex">
                        <input disabled class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                            style="max-width: 3rem" />
                        <a class="btn btn-outline-dark flex-shrink-0" type="button" href="{{route('velo.checkout', $velo->id)}}">
                            <i class="bi-cart-fill me-1"></i>
                            Buy
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top"
                            src="https://contents.mediadecathlon.com/p2232289/3ee7e91ea441ae21cc00f97b09f56a5a6dd84bfaf3ca05c110ada224607064a5/velo-hybride-riverside700-gris-orange.jpg?format=auto"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Vélo hybride avec freins à disque - HYTR 500</h5>
                                <!-- Product price-->
                                $490.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top"
                            src="https://contents.mediadecathlon.com/p2249496/ad2e88becf2d7aa4336d2a07ec6c7bb6b278513419961c0e8572c5caa0af79ed/velo-de-montagne-explore520-gris-rouge.jpg?format=auto"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top"
                            src="https://contents.mediadecathlon.com/p1956473/a04d14247a5efef98d19833776ddb1cc0f1be0510b93318fb759b7bc4ac54195/velo-de-gravelle-homme-grvl-520-subcompact.jpg?format=auto"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top"
                            src="https://contents.mediadecathlon.com/p2391890/548e6503a85881c179d6c687df16a04ac421f0ea4a34ca906c4748e6a5be0c72/velo-de-gravier-en-carbone-riverside-gcr.jpg?format=auto"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Vélo hybride – Riverside 120</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $380.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection