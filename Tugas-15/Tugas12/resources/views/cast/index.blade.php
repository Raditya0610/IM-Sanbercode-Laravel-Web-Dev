@extends('layouts.master')
@section('title')
    Halaman Utama
@endsection

@section('content')
<a href="/cast/create" class="btn btn-sm btn-info my-3">Create</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Age</th>
        <th scope="col">Bio</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @forelse($cast as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->bio}}</td>
            <td>
                <a href="/cast/{{ $item->id }}" class="btn btn-info btn-sm">Show</a>
                <a href="/cast/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                <form action="/cast/{{ $item->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
      @empty
        <p> No Cast </p>
      @endforelse
    </tbody>
  </table>
@endsection