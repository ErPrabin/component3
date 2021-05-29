@extends('frontend.layout.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="product-type">Book</div>

                @foreach ($bookdata as $data)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body ">
                            {{-- <h5 class="card-title">Card title</h5> --}}
                            <h3 class="card-subtitle mb-2 title">{{ $data['title'] }}</h3>
                            <p class="card-text">{{ $data['firstname'] }}</p>
                            <p class="card-text-1">{{ $data['surname'] }}</p>

                            <p class="card-text-2">${{ $data['price'] }}</p>
                            <p class="card-text-3">Number of Pages:{{ $data['pages'] }}</p>
                            <button class="btn btn-dark"><a href="{{route('shop.show',$data['id'])}}"
                                    class="button-class">Select</a></button>
                        </div>
                    </div>
                @endforeach


            </div>

            <div class="col-md-4">
                <div class="product-type">CD</div>

                @foreach ($cddata as $data)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-subtitle mb-2 title">{{ $data['title'] }}</h3>
                            <p class="card-text">{{ $data['firstname'] }}</p>
                            <p class="card-text-1">{{ $data['surname'] }}</p>
                            <p class="card-text-2">${{ $data['price'] }}</p>
                            <p class="card-text-3">Play Length:{{ $data['pages'] }}</p>
                            <button class="btn btn-dark"><a href="{{route('shop.show',$data['id'])}}" class="button-class">Select</a></button>
                        </div>
                    </div>

                @endforeach

            </div>
            <div class="col-md-4">
                <h2>Fill The Form...</h2>
                <form action="{{ route('shop.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="producttype">product type</label>
                            <select id="producttype" name="producttype" class="form-control">
                                <option>book</option>
                                <option>cd</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="title">title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                placeholder="enter your title" value="{{ old('producttype') }}">
                            <div class="text-danger">{{ $errors->first('title') }}</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="firstname">first name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname"
                                placeholder="first name" value="{{ old('firstname') }}">
                            <div class="text-danger">{{ $errors->first('firstname') }}</div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="surname">surname/brand</label>
                        <input type="text" class="form-control" name="surname" id="surname"
                            value="{{ old('surname') }}" placeholder="surname/brand">
                        <div class="text-danger">{{ $errors->first('surname') }}</div>

                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}"
                            placeholder="$price">
                        <div class="text-danger">{{ $errors->first('price') }}</div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="pages">pages/playlength</label>
                            <input type="text" name="pages" class="form-control" value="{{ old('pages') }}"
                                id="pages">
                            <div class="text-danger">{{ $errors->first('pages') }}</div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">create</button>
                </form>
            </div>



        </div>
    </div>
@endsection

