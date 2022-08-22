@extends('layouts.app')

@section('title', 'Create To Do List')


@section('content')
{{-- Create Form --}}
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create To Do List</div>
                <div class="card-body" >
                    <form method="POST" action="{{ route('create.todolist.angkatan') }}">
                        @csrf
                        <div class="form-group row mb-5">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Agenda</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autofocus></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <label for="deadline" class="col-md-3 col-form-label text-md-right">Deadline</label>
                            <div class="col-md-6">
                                <input id="deadline" type="date" class="form-control mx-4" name="deadline" autofocus>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
