@extends('layouts.master')
@section('title')
    Halaman Tambah Cast
@endsection
@section('content')
<form method="POST" action="/cast">
  @csrf
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
    <div class="form-group">
      <label for="name">Cast Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="age" name="age">
    </div>
    <div class="form-group">
      <label for="bio">Bio</label>
      <textarea name="bio" id="bio" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection