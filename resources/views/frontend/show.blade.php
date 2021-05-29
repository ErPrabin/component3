@extends('frontend.layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- @foreach ($dataata as $d) --}}
                <div class="col-md-4">
                    <form action="{{ route('shop.update', $data->id) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="producttype">product type</label>
                                <select id="producttype" name="producttype" class="form-control">
                                    @if ($data['producttype'] == 'book')
                                        <option>book</option>
                                        <option>cd</option>

                                    @elseif($data['producttype']=='cd')
                                        <option>cd</option>
                                        <option>book</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">title</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    placeholder="{{ $data['title'] }}" value="{{ $data['title'] }}">
                                <div class="text-danger">{{ $errors->first('title') }}</div>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="firstname">first name</label>
                                <input type="text" class="form-control" name="firstname" id="firstname"
                                    placeholder="{{ $data['firstname'] }}" value="{{ $data['firstname'] }}">
                                <div class="text-danger">{{ $errors->first('firstname') }}</div>

                            </div>

                        </div>
                        <div class="form-group">
                            <label for="surname">surname/brand</label>
                            <input type="text" class="form-control" name="surname" id="surname"
                                placeholder="{{ $data['surname'] }}" value="{{ $data['surname'] }}">
                            <div class="text-danger">{{ $errors->first('surname') }}</div>

                        </div>
                        <div class="form-group">
                            <label for="price">price</label>
                            <input type="text" class="form-control" name="price" id="price"
                                placeholder="{{ $data['price'] }}" value="{{ $data['price'] }}">
                            <div class="text-danger">{{ $errors->first('price') }}</div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="pages">pages/playlength</label>
                                <input type="text" name="pages" class="form-control" id="pages"
                                    placeholder="{{ $data['pages'] }}" value="{{ $data['pages'] }}">
                                <div class="text-danger">{{ $errors->first('pages') }}</div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>
                    <form action="{{route('shop.destroy',$data->id)}}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}

                        {{-- @method('delete') --}}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>

                {{-- @endforeach --}}
            </div>
        </div>
    </div>
@endsection
