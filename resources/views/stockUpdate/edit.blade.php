@extends('layout.master')

@section('content')

<div class="pageheader">
    <h1>Update Stocks</h1>
</div>

<div class="glass">
    <div class="stockform">
        <form method='POST' action="{{ action('ItemController@update', $item->id) }}">
        <input type="hidden" name="id" value="{{ $item->id }}">

            <label for="itemname">Item Name: </label>
            <div class="form-group"><label>{{ $item->item_name }}</label><br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="item">Item on Hand: </label>
                        <div class="form-group"><label>{{ $item->item_onhand }}</label>
                    </div>

                    <div class="col-sm-6">
                    <label for="item">Value to be added: </label>

                    <div class="form-group"><input type='number' class="form-control" id='item_onhand' name='item_onhand' required='required'></div>

                </div>


                <div class="col-sm-6">
                    <input type='submit' class="btn btn-primary form-control" value='Add Stock'>
                </div>
            </div>
        </form>
    </div>
</div>





@stop