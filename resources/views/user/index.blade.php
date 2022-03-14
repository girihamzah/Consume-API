@extends('layouts.app', ['titlePage' => 'Index User'])

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data API</h3>

                        <div class="card-tools">
                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">Create</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-uppercase">No</th>
                                    <th class="text-center">Picture</th>
                                    <th class="text-center">firstName</th>
                                    <th class="text-center">lastName</th>
                                    <th class="text-center">Detail</th>
                                    <th class="text-center" colspan="3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tbody>
                                    @php $number = 1; @endphp
                            
                                    @forelse ($users['data'] as $user)
                                    <tr class="align-middle">
                                        <td>{{ $number++ }}</td>
                                        <td class="text-center">
                                        @isset($user['picture'])
                                            <img src="{{ $user['picture'] }}" style="width: 100px; height: 100px" alt="Picture">
                                        @else
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" style="width: 100px; height: 100px" alt="Picture">
                                        @endisset
                                        </td>
                                        <td>{{ $user['firstName'] }}</td>
                                        <td>{{ $user['lastName'] }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-info" href="{{ route('users.show', $user['id']) }}">
                                            <span class="material-icons">Show</span>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-warning" href="{{ route('users.edit', $user['id']) }}">
                                            <span class="material-icons">Edit</span> 
                                            </a>
                                        </td>
                                        <td class="text-center">
                                        <form action="{{ route('users.destroy', $user['id']) }}" method="post">
                                            @method('delete')
                                            @csrf
                            
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure to delete this user?')">
                                                <span class="material-icons">Delete</span> 
                                            </button>
                                        </form>
                                        </td>
                                    </tr>
                                    @empty
                                        <td colspan="7" class="text-center">No Records Found!</td>
                                    @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
