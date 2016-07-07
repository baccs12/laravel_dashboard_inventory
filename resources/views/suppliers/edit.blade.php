@extends('layout.master')

@section('content')

<div class="pageheader">
    <h1>Add New Supplier</h1>
</div>

<div class="glass">
    <div class="addform">
        <form method='POST' action="{{ action('SupplierController@update', $supplier->id) }}">
        <input type="hidden" name="id" value="{{ $supplier->id }}">

            <label for="itemname">Supplier Name: </label>
            <div class="form-group"><input type='text' value="{{ $supplier->supplier_name }}" class="form-control" id='supplier_name' name='supplier_name' required='required'></div>

                <div class="col-sm-6">
                    <input type='submit' class="btn btn-primary form-control" value='Edit Supplier'>
                </div>
            </div>
        </form>
    </div>
</div>




@stop