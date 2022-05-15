@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<a href="/groups/create" class="card-link btn-primary">Tambah group</a>
@foreach ($groups as $group)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/groups/{{$group['id']}}" class="card-title">{{ $group['name'] }}</a>
    <p class="card-text">{{$group['description'] }}.</p>

    <a href="/groups/{{$group['id']}}/edit" class="card-link btn-warning">Edit group</a>

    <form action="/groups/{{ $group['id']}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="card-link btn-danger">Delete group</button>
    </form>
  </div>
</div>

   
@endforeach
<div>
  {{ $groups->links() }}
</div>
@endsection