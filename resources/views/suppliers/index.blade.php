@extends('layout.master')
@section('content')

<div class="wrapper">
    <div class="pageheader">
        <h1>List of supplier</h1>
    </div>

   <a href="/supplier/create" class="btn btn-primary btn-lg active" role="button">Create New Supplier</a>

        <table class="table table-bordered table-hover">
            <thead>
                <th>Supplier Name</th>
            </thead>

            <tbody>
                @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->supplier_name }}</td>
                    <td><a class="action" href="/supplier/{{ $supplier->id }}/edit">Edit</a></td>
                    <td><a class="action" href="/supplier/{{ $supplier->id }}/delete">Delete</a></td>

                </tr>
                @endforeach
                <!-- display next prev button -->
                {{ $suppliers->render() }}
            </tbody>

        </table>
</div>
@stop