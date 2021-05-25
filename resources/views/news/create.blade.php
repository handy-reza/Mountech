@extends('layouts.backmaster')
@section('title', 'Create News')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">news</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('news.index') }}">news</a></li>
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
            <form action="{{ route('news.store') }}" method="POST">
                @CSRF
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="title"><Title></Title></label>
                                <input type="text" name="title" class="form-control @error('title')
is-invalid @enderror" placeholder="news Name">
                                <small class="text-danger">@error('title') {{$message}}
                                    @enderror</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" name="content" class="form-control @error('content')
is-invalid @enderror" placeholder="content">
                                <small class="text-danger">@error('content') {{$message}}
                                    @enderror</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="text" name="content" class="form-control @error('picture')
is-invalid @enderror" placeholder="picture">
                                <small class="text-danger">@error('picture') {{$message}}
                                    @enderror</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="publish">Publish</label>
                                <input type="text" name="content" class="form-control @error('is_published')
is-invalid @enderror" placeholder="picture">
                                <small class="text-danger">@error('is_published') {{$message}}
                                    @enderror</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('news.index') }}" class="m-1 btn btn-outlinedanger">Back</a>
                        <button type="submit" class="m-1 btn btn-success">Create</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection