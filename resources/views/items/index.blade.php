@extends('layout.master')
@section('content')

<div class="wrapper">
    <div class="pageheader">
        <h1>List of items</h1>
    </div>

   <a href="/item/create" class="btn btn-primary btn-lg active" role="button">Create New Item</a>

        <table class="table table-bordered table-hover">
            <thead>
                <th>Name</th>
                <th>Type</th>
                <th>Supplier</th>
                <th>Stock</th>
                <th>Image</th>
                <th colspan="2">Action</th>
            </thead>

            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->item_name }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->supplier_name }}</td>
                    <td>{{ $item->item_onhand }}</td>
                    <td class="item-image"><img src="{{ asset('pics/' . $item->item_image) }}"></td>
                    <td><a class="action btn btn-primary" href="/item/{{ $item->id }}/edit">Edit</a></td>
                    <td>
                        <form action="{{ route('item.destroy', $item->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type='submit' class="btn btn-primary form-control" value='Delete Item'>
                        </form>
                    </td>

                </tr>
                @endforeach
                <!-- display next prev button -->
                {{ $items->render() }}
            </tbody>

        </table>
</div>
@stop