@extends('layouts.app')


@section('title', 'To Do List Details')


@section('content')
@if (session()->has('success'))
<div class="alert alert-success " style="width: 100%;">
    {{ session()->get('success') }}
</div>
@endif
<div class="container mt-5" style="margin-top: 100px;">
    <h1>{{ $todolist->title }}</h1>
    <p> {{ $todolist->description}}  </p>
    <strong>Deadline:  {{ $todolist->deadline}} </strong>
    <form action="/todolist/{{ $todolist->id  }}" method="POST" class="mt-4">
        @csrf
        <label for="exampleInputEmail1" class="form-label">Update Progress</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="list_item">
    </form>
    <div class="card mb-5 mt-4">
        <div class="card-header">

            <div class="d-flex justify-content-between">
                <h4>Progress</h4>
                <p class="px-3">Updated By</p>
            </div>
        </div>
    <?php $i = 1; ?>
    @foreach ($progress as $list)
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <p class="mb-1"> <strong>{{$i++}}.</strong>  {{ $list->list_item }}</p>
                <p> <strong>{{ $list->updated_by  }}</strong></p>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
