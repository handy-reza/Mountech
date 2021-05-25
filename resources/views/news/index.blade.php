@extends('layouts.backmaster')
@section('title', 'News')
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
                    <li class="breadcrumb-item active">News</li>
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
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Data table of News</h3>
                    <a href="{{route('authors.create')}}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Create</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="table-news" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Picture</th>
                            <th>Content</th>
                            <th>Published</th>
                            <th>Author</th>
                            <th>Dibuat pada</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $news)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $news->title }}</td>
                            <td>{{ $news->picture }}</td>
                            <td>{{ $news->content }}</td>
                            <td>{{ $news->is_published}}</td>
                            <td>admin</td>
                            <td>{{ $news->created_at}}</td>
                            <td>
                                <a href="{{ route('news.edit', [$news->id]) }}" class="btn btn-warning float-left m-1">Edit</a>
                                <form class="float-left m-1" action="{{ route('news.destroy', [$news->id]) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Picture</th>
                            <th>Content</th>
                            <th>Published</th>
                            <th>Author</th>
                            <th>Dibuat pada</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@push('script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatablesresponsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatablesresponsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(function() {
        $("#table-news").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>
@endpush
@push('css')
<link rel="stylesheet" href="{{ asset('plugins/datatablesbs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatablesresponsive/css/responsive.bootstrap4.min.css') }}">
@endpush