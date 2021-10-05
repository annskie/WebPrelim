@extends('layouts.app')

<section>
    <img src="{{asset('images\lenovolegion2prophoneduel2.jpg')}}" height="255px" alt="lenovo">
    <img src="{{asset('images\nokiag502.jpg')}}" height="255px" width="265px" alt="nokia">
    <img src="{{asset('images\opporeno64g.jpg')}}" height="255px" width="265px" alt="oppo">
</section>

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('products.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('products.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

