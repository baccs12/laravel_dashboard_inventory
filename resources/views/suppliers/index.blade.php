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
                    <td><a class="action btn btn-primary" href="/supplier/{{ $supplier->id }}/edit">Edit</a></td>
                    <td>
                        <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type='submit' class="btn btn-primary form-control" value='Delete Supplier'>
                        </form>
                    </td>

                </tr>
                @endforeach
                <!-- display next prev button -->
                {{ $suppliers->render() }}
            </tbody>

        </table>
</div>
@stop