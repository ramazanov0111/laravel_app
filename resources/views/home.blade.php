@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Личный кабинет</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы вошли в систему! {{Auth::user()->name}}
                </div>
                <div class="card-body">
                    <a href="{{route('products.index')}}" class="btn btn-primary">Перейти к товарам</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
