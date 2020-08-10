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
                        @forelse ($karyawans as $key => $karyawan)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $karyawan->nama }}</td>
                                <td>{{ $karyawan->jabatan }}</td>
                                <td style="display:flex">
                                    <a href="/karyawam/{{ $karyawan->id }}/daftar-proyek" class="btn btn-info btn-sm">Show</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" align="center">No karyawan</td>
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
