@extends('template.main')

@section('article')
{{--    <article class="text-center">--}}
{{--        <p>There is no data...</p>--}}
{{--            <a href="/form-vaccine" class="btn btn-primary">Add Vaccine</a>--}}
{{--    </article>--}}

<h2 style="text-align: center">List Vaccine</h2>
<div class="container p-3">
    <a href="{{ route('form-vaccine') }}" class="btn btn-primary">Add Vaccine</a>
</div>
<div class="container p-0 bg-info shadow-lg">
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    @foreach($dataVaccine as $item)
    <tbody>
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>
                <a href="{{ url('edit-vaccine', $item->id)}}" class="btn btn-warning" style="width: 75px">Edit</a>

                <a href="{{ url('delete-data-vaccine', $item->id) }}" class="btn btn-danger" style="width: 75px">Delete</a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
</div>
@endsection
