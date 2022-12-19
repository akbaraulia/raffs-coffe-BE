@extends('layouts.admin')

@section('content')
    <div id="main">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Tampilan Website</h3>
                        <p class="text-subtitle text-muted">For Profile Website to check they list</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <div class="buttons">
                                    <a href="{{ route('profile.create') }}" class="btn btn-primary">Create</a>
                                </div>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Data Account
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>IMG</th>
                                    <th>Title</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($profile as $item)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/produks/'.$item->gambar) }}" width="90px" height="90px" alt="image">
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>
                                        <form action="{{ route('profile.destroy',$item->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{ route('profile.edit',$item->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
    
            </section>
        </div>
    </div>
@endsection