@extends('layouts.default')


@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">PRODUITS</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('produits.index') }}"><i class="bx bx-grid-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Nouveau Produit</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Modifier les informations du produit</h5>
                <div class="form-body mt-4">
                    <hr />
                    <div class="row">
                        {{-- Pour mieux faire, ajouter une méthode blade et mettre csrf pour la sécurité du formulaire --}}
                        <form class="row g-3" method="POST" action="{{ route('produits.update', $produits->id) }}">
                            @method('PATCH')
                            @csrf
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="inputProductTitle"
                                            placeholder="Entrez un nom du produit" name="nom_produit"
                                            value="{{ $produits->nom_produit }}">
                                        @error('nom_produit')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="inputProductDescription" name="description_produit" rows="3">{{ $produits->description_produit }}</textarea>
                                        @error('description_produit')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="fabrication" class="form-label">Date de fabrication</label>
                                        <input type="date" class="form-control" name="date_fabrication_produit"
                                            id="fabrication" value="{{ $produits->date_fabrication_produit }}">
                                        @error('date_fabrication_produit')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="expiry" class="form-label">Date d'expiration</label>
                                        <input type="date" class="form-control" name="date_expiration_produit"
                                            id="expiry" value="{{ $produits->date_expiration_produit }}">
                                        @error('date_expiration_produit')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="disponibilite" class="form-label mb-3 mt-3">Disponibilité</label>
                                        <select name="disponibilite" class="select-group" id="disponibilite">
                                            <option value="0" {{ $produits->disponibilite === 0 ? "selected" : "" }} >Non disponible</option>
                                            <option value="1" {{ $produits->disponibilite === 1 ? "selected" : "" }} >Disponible</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPrice" class="form-label">Price</label>
                                        <input type="text" class="form-control" name="prix" id="inputPrice"
                                            placeholder="00.00" value="{{ $produits->prix }}">
                                        @error('prix')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mt-3">
                                        <label for="image-uploadify" class="form-label">Image du produit</label>
                                        <div class="card">
                                            <div class="card-body" style="border-style: dashed; border-color:blue">
                                                <div class="ff_fileupload_wrap">
                                                    <div class="ff_fileupload_dropzone_wrap">
                                                        <button class="ff_fileupload_dropzone" type="button"
                                                            aria-label="Browse, drag-and-drop, or paste files to upload">
                                                            <input id="fancy-file-upload" type="file" name="files"
                                                                accept=".jpg, .png, image/jpeg, image/png" multiple=""
                                                                class="ff_fileupload_hidden">
                                                        </button>
                                                        <div class="ff_fileupload_dropzone_tools">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="col-md-6 mt-3 mb-4">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--end row-->
                </div>
            </div>
        </div>
    @endsection
