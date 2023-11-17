@extends('layouts.default')


@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">CLIENTS</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('clients.create') }}"><i class="bx bx-grid-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Nouveau Client</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="col-12 col-xl-6">
            <h6 class="mb-0 text-uppercase">Ajouter nouveau client</h6>
            <hr />
            <div class="card border-top border-0 border-4 border-danger">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                        </div>
                        <h5 class="mb-0 text-danger">User Registration</h5>
                    </div>
                    <hr>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputLastName1" class="form-label">First Name</label>
                            <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                        class='bx bxs-user'></i></span>
                                <input type="text" class="form-control border-start-0" id="inputLastName1"
                                    placeholder="First Name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputLastName2" class="form-label">Last Name</label>
                            <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                        class='bx bxs-user'></i></span>
                                <input type="text" class="form-control border-start-0" id="inputLastName2"
                                    placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputPhoneNo" class="form-label">Phone No</label>
                            <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                        class='bx bxs-microphone'></i></span>
                                <input type="text" class="form-control border-start-0" id="inputPhoneNo"
                                    placeholder="Phone No" />
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                        class='bx bxs-message'></i></span>
                                <input type="text" class="form-control border-start-0" id="inputEmailAddress"
                                    placeholder="Email Address" />
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress3" class="form-label">Address</label>
                            <textarea class="form-control" id="inputAddress3" placeholder="Enter Address" rows="3" style="height: 17px;"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger px-5">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
