@extends('layout.master')

@section('content')

<div class="pageheader">
    <h1>Add New Item</h1>
</div>

<div class="glass">
    <div class="itemform">
        <form method='POST' action="{{ action('ItemController@update', $item->id) }}">
        <input type="hidden" name="id" value="{{ $item->id }}">

            <label for="itemname">Item Name: </label>
            <div class="form-group"><input type='text' value="{{ $item->item_name }}" class="form-control" id='item_name' name='item_name' required='required'></div>
            <label for="type">Type: </label>
            <div class="form-group"><input type='text' value="{{ $item->type }}" class="form-control" id='type' name='type' required='required'></div>
            <label for="supplier">Supplier: </label>
            <div class="form-group"><input type='text' value="{{ $item->supplier_name }}" class="form-control" id='supplier_name' name='supplier_name' required='required'></div>
            <label for="item-image">Image: </label>
            <div class="form-group"><input type='file' class="form-control" id='item_image' name='item_image' required='required'></div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="item">Item on Hand: </label>
                    <div class="form-group"><input type='number' value="{{ $item->item_onhand }}" class="form-control" id='item_onhand' name='item_onhand' required='required'></div>
                </div>
                <div class="col-sm-6">
                    <input type='submit' class="btn btn-primary form-control" value='Edit Item'>
                </div>
            </div>
        </form>
    </div>





@stop