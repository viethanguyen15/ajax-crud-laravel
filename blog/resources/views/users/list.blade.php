@extends('layouts.master')
@push('css')

@endpush
@section('title', 'users')
@section('content')
    @include('users.add')
    <table class="table table-striped mt-4">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Course</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->course }}</td>
                    <td><button data-url="{{ route('users.show', $user->id) }}" type="button" class="btn btn-success btn-show" data-target="#show" data-toggle="modal">show</button></td>
                    <td><button ​data-id="{{ $user->id }}" class="btn btn-primary btn-edit" type="button" data-target="#edit" data-toggle="modal">edit</button></td>
                    <td><button data-url="{{ route('users.destroy', $user->id) }}" type="button" class="btn btn-danger btn-delete">delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('users.detail')
    @include('users.edit')
@endsection
@push('scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script charset="utf-8">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('js/user/deleteUser.js') }}"></script>

    <script>

    </script>
@endpush
