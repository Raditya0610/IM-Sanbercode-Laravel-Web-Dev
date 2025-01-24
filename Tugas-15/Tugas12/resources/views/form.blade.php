@extends('layouts.master')
@section('title')
    Halaman Form
@endsection
@section('content')
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="{{ route('welcome') }}" method="POST">
        @csrf
        <label>First Name:</label><br>
        <input type="text" name="name"><br><br>
        <label>Last Name:</label><br>
        <input type="text" name="lastName"><br><br>
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male">Male<br>
        <input type="radio" name="gender" value="Female">Female<br>
        <input type="radio" name="gender" value="Other">Other<br><br>
        <label>Nationality:</label><br>
        <select name="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="french">French</option>
        </select><br><br>
        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language[]" value="Bahasa Indonesia">Bahasa Indonesia<br>
        <input type="checkbox" name="language[]" value="English">English<br>
        <input type="checkbox" name="language[]" value="Other">Other<br><br>
        <label>Bio:</label><br>
        <textarea name="bio" rows="10" cols="30"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
    @endsection
