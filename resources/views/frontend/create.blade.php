@extends('frontend.layout.layout')
@section('content')
    <div class="container">
        <form action="{{ route('store') }}" method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="producttype">product type</label>
                    <select id="producttype" name="producttype" class="form-control">
                        <option selected>Choose...</option>
                        <option>book</option>
                        <option>cd</option>

                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="title">title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="enter your title">

                </div>
                <div class="form-group col-md-6">
                    <label for="firstname">first name</label>
                    <input type="text" class="form-control" name="firstname"  id="firstname" placeholder="first name">
                </div>
            </div>
            <div class="form-group">
                <label for="surname">surname/brand</label>
                <input type="text" class="form-control" name="surname"  id="surname" placeholder="surname/brand">
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="text" class="form-control" name="price"  id="price" placeholder="$price">
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="pages">pages/playlength</label>
                    <input type="text"  name="pages"  class="form-control" id="pages">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
@endsection

