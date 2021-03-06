@extends('layout.master')

@section('content')

<div class="pageheader">
    <h1>Add New Supplier</h1>
</div>

<div class="glass">
    <div class="supplierform">

        <form method='POST' action="{{ route('supplier.update', $supplier->id) }}">
        <input type="hidden" name="_method" value="PUT">


        <div class="row">
            <div class="col-sm-6">
            <label for="itemname">Supplier Name: </label>
            <div class="form-group"><input type='text' value="{{ $supplier->supplier_name }}" class="form-control" id='supplier_name' name='supplier_name' required='required'></div>
            </div>
                    <div class="col-sm-6">
                        <input type='submit' class="btn btn-primary form-control" value='Edit Supplier'>
                    </div>
        </div>
        </form>
    </div>
</div>



@stop