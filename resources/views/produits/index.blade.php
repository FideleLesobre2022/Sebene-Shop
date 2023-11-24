@extends('layouts.default')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">PRODUITS</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">PRODUITS</li>
                    </ol>
                </nav>
            </div>

            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('produits.create') }}" type="button" class="btn btn-primary">NOUVEAU</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        {{-- CARD VIEW --}}
        <div class="row row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
        @foreach ($produits as $produit)
            <div class="col">
                <div class="card">
                    <img src={!! asset('assets/images/products/01.png')!!} class="card-img-top" alt="...">
                    <div class="">
                        <div class="position-absolute top-0 end-0 m-3 product-discount fw-bold">
                            <span> {{"$"}} </span>
                            <span> {{ $produit->prix }}</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title cursor-pointer"> {{ $produit->nom_produit }} </h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start">Fabrication : <strong> {{ $produit->date_fabrication_produit }} </strong></p>
                        </div>
                        <div class="clearfix">
                            <p class="mb-0 float-start">Expiration : <strong> {{ $produit->date_fabrication_produit }} </strong></p>
                        </div>
                        <a href="{{ route('produits.show',$produit->id) }}" type="button" class="btn btn-primary">AFFICHER LE DETAIL</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--end row-->

    </div>
@endsection
