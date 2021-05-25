@extends('layouts.backmaster')
@section('title', 'Create Author')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Author</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('authors.index') }}">Authors</a></li>
                    <li class="breadcrumb-item active">Create</li>
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
                <h3 class="card-title">Create Data</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('authors.store') }}" method="POST">
                @CSRF
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control @error('name')
is-invalid @enderror" placeholder="authors Name">
                                <small class="text-danger">@error('name') {{$message}}
                                    @enderror</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="telp">Telp</label>
                                <input type="text" name="telp" class="form-control @error('telp')
is-invalid @enderror" placeholder="authors Number">
                                <small class="text-danger">@error('telp') {{$message}}
                                    @enderror</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('authors.index') }}" class="m-1 btn btn-outlinedanger">Back</a>
                        <button type="submit" class="m-1 btn btn-success">Create</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection