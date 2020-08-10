@extends('layoutes.master')

@section('content')
    <div class="ml-2 mt-2">
        <form action="/pertanyaan" method="post">
            @csrf
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Proyek</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" value="{{ old('title', '') }}" id="title"
                            placeholder="Enter Title" name="title">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="content" class="form-control" value="{{ old('content', '') }}" id="content"
                            placeholder="Enter Content" name="content">
                        @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
