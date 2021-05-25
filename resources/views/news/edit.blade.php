@extends('layouts.backmaster')
@section('title', 'Edit News')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">News</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('news.index') }}">news</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('news.update', [$news->id]) }}" method="POST">
                @CSRF
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control @error('name')
is-invalid @enderror" placeholder="news Name" value="{{$news->name}}">
                                <small class="text-danger">@error('name') {{$message}}
                                    @enderror</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="text" name="picture" class="form-control @error('picture')
is-invalid @enderror" placeholder="news Picture" value="{{$news->picture}}">
                                <small class="text-danger">@error('picture') {{$message}}
                                    @enderror</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control @error('address')
is-invalid @enderror" placeholder="news Number" value="{{$news->address}}">
                                <small class="text-danger">@error('address') {{$message}}
                                    @enderror</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('news.index') }}" class="m-1 btn btn-outlinedanger">Back</a>
                        <button type="submit" class="m-1 btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection