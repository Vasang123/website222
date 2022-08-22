@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="d-flex flex-row-reverse" >
        <button class="btn btn-primary my-4" type="submit">
          <a href="/todolist/angkatan" class="text-decoration-none text-white">
          Create To Do List</a>
        </button>
    </div>
    @if(count($todolists) > 0 )
        @foreach ($todolists as $list)
            @if ($list->status == 'unfinished')
                <div class="card  mb-5">
                    <div class="card-header">
                        <h4>{{ $list->title }}</h4>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">{{ $list->description }}</p>
                        <strong class="text-red"><p>Deadline : {{ $list->deadline }}</p></strong>

                    </div>
                    <div class="card-footer">
                        <a href="/todolist/{{ $list->id }}" class="btn btn-primary">Details</a>
                        <a href="/finish/todolist/{{ $list->id }}" class="btn btn-success">Finish</a>
                    </div>
                </div>
            @endif
        @endforeach
    @else
        <div class="card">
            <div class="card-header">
                <h4>No Todolist</h4>
            </div>
        </div>
    @endif
    <div class="d-flex justify-content-center">

        {{ $todolists->appends(request()->all())->links() }}
    </div>
</div>
@endsection
