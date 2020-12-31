@extends('layouts.admin.master')
@section('title','Home')
@section('content')


<section>
    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="header text-black-50 text-center">
                <h1 style="color:red">DASHBORD ADMIN</h1>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card alert-dark justify-content-center">
                        <div class="card-title">
                            <h3 class="text-center">
                                DASHBORD ADMIN
                            </h3>
                        </div>
                        <div class="card-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1"
                                        aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <h1>full</h1>
                </div>
            </div>
        </div>
        <footer>footer</footer>

    </div>

</section>

@endsection