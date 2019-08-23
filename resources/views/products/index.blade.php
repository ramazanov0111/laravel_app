@extends('products.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Товары</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('products.create')}}" class="btn btn-success">Добавить товар</a>
            </div>
        </div>
    </div>
    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>№</th>
                <th>Название</th>
                <th>Описание</th>
                <th width="280px">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)

                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->detail}}</td>
                    <td>
                        <form action="{{route('products.destroy',$product->id)}}" method="post" role="form">
                            <a href="{{route('products.show',$product->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>


                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection