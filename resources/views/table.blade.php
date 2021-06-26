@extends('app')

@section('table')
<div class="container mt-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Country</th>
                <th scope="col">Phone</th>
                <th scope="col">Company</th>
            </tr>
        </thead>
        <tbody class="table-hover">
            @foreach ($data as $value)
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->surname }}</td>
                    <td>{{ $value->country }}</td>
                    <td>{{ $value->phone }}</td>
                    <td>{{ $value->company }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
