@extends('layouts.app', ['titlePage' => 'Edit User'])

@section('content')
<form method="POST" action="{{ route('users.update', $user['id']) }}">
    @method('PUT')
    @csrf

    <h4>Edit User</h4>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">First Name</label>
        <input type="text" name="nama_depan" class="form-control" id="exampleInputPassword1" value="{{ $user['firstName'] }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user['lastName'] }}">
    </div>
    
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </div>
</form>
@endsection