@extends('layouts.master')

@section('content')
    <div class="mt-3 ml-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a class="btn btn-primary mb-2" href="pertanyaan/create">Create New Post</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($proyeks as $key => $proyek)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $proyek->title }}</td>
                                <td>{{ $proyek->content }}</td>
                                <td style="display:flex">
                                    <a href="/pertanyaan/{{ $proyek->id }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="/pertanyaan/{{ $proyek->id }}/edit" class="btn btn-default btn-sm">Edit</a>
                                    <form action="/pertanyaan/{{ $proyek->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" align="center">No proyek</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('scripts')

        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: 'Memasangkan script sweet alert',
                icon: 'success',
                confirmButtonText: 'Cool'
            })

        </script>
    @endpush
@endsection
