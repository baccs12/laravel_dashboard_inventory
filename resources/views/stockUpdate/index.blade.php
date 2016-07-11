@extends('layout.master')
@section('content')

<div class="wrapper">
    <div class="pageheader">
        <h1>Update Stock</h1>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
            <th>Name</th>
            <th>Stock</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->item_name }}</td>
                <td>{{ $item->item_onhand }}</td>
                <td><a class="action" href="/stockUpdate/{{ $item->id }}/edit">Add</a></td>
            </tr>
            @endforeach
            {{ $items->render() }}
        </tbody>
    </table>
</div>


@stop