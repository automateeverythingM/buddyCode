@extends('layouts.app')

@section('content')
<img class="rounded-circle fluid border" src="/uploads/avatars/{{$user->avatar}}" alt="avatar">

<form enctype="multipart/form-data" action="/profile" method="POST">
    @csrf
    <label class="">Upload image</label>
    <input type="file" name="avatar" value="">
    <input type="submit" class="btn btn-primary" >
</form>
@endsection