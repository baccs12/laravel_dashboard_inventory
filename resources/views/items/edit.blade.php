@extends('layout.master')

@section('content')

<div class="pageheader">
    <h1>Edit Item</h1>
</div>

<div class="glass">
    <div class="itemform">
        <form method='POST' action="{{ route('item.update', $item->id) }}">
        <input type="hidden" name="_method" value="PUT">

            <label for="itemname">Item Name: </label>
            <div class="form-group"><input type='text' value="{{ $item->item_name }}" class="form-control" id='item_name' name='item_name' required='required'></div>
            <label for="type">Type: </label>
            <div class="form-group"><input type='text' value="{{ $item->type }}" class="form-control" id='type' name='type' required='required'></div>
            <label for="supplier">Supplier: </label>
            <div class="form-group"><input type='text' value="{{ $item->supplier_name }}" class="form-control" id='supplier_name' name='supplier_name' required='required'></div>
            <label for="item-image">Image: </label>
            <div class="form-group"><input type='file' value="{{ $item->item_image }}" class="form-control" id='item_image' name='item_image'></div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="item">Item on Hand: </label>
                    <div class="form-group"><label>{{ $item->item_onhand }}</label><class="form-control" id='item_onhand' name='item_onhand' required='required'></div>
                </div>
                <div class="col-sm-6">
                    <input type='submit' class="btn btn-primary form-control" value='Update Item'>
                </div>
            </div>
        </form>
    </div>





@stop