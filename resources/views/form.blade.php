@extends('layouts.app')

@section('content')
<h2>Form Validation</h2>
<span class="text-danger">{{ $errors->first('hash') }}</span>
<form method="POST" action="/form-validation" autocomplete="off">
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="row">
        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter First Name" value="{{ old('first_name') }}">
            <span class="text-danger">{{ $errors->first('first_name') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Last Name" value="{{ old('last_name') }}">
            <span class="text-danger">{{ $errors->first('last_name') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone" value="{{ old('phone') }}">
            <span class="text-danger">{{ $errors->first('phone') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Enter e-mail" value="{{ old('email') }}">
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('sum') ? 'has-error' : '' }}">
            <label for="sum">Sum:</label>
            <input type="text" id="sum" name="sum" class="form-control" placeholder="Enter sum" value="{{ old('sum') }}">
            <span class="text-danger">{{ $errors->first('sum') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('card_no') ? 'has-error' : '' }}">
            <label for="card_no">Card:</label>
            <input type="text" id="card_no" name="card_no" class="form-control" placeholder="Enter card no" value="{{ old('card_no') }}">
            <span class="text-danger">{{ $errors->first('card_no') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('card_month') ? 'has-error' : '' }}">
            <label for="card_month">Card month:</label>
            <input type="text" id="card_month" name="card_month" class="form-control" placeholder="Enter card month" value="{{ old('card_month') }}">
            <span class="text-danger">{{ $errors->first('card_month') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('card_year') ? 'has-error' : '' }}">
            <label for="card_year">Card year:</label>
            <input type="text" id="card_year" name="card_year" class="form-control" placeholder="Enter card year" value="{{ old('card_year') }}">
            <span class="text-danger">{{ $errors->first('card_year') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('cvv') ? 'has-error' : '' }}">
            <label for="cvv">CVV2:</label>
            <input type="text" id="cvv" name="cvv" class="form-control" placeholder="CVV2" value="{{ old('cvv') }}">
            <span class="text-danger">{{ $errors->first('cvv') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
            <label for="city">City:</label>
            <input type="text" id="city" name="city" class="form-control" placeholder="Enter city" value="{{ old('city') }}">
            <span class="text-danger">{{ $errors->first('city') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
            <label for="state">State:</label>
            <input type="text" id="state" name="state" class="form-control" placeholder="Enter state" value="{{ old('state') }}">
            <span class="text-danger">{{ $errors->first('state') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" class="form-control" placeholder="Enter address" value="{{ old('address') }}">
            <span class="text-danger">{{ $errors->first('address') }}</span>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group {{ $errors->has('zip_code') ? 'has-error' : '' }}">
            <label for="zip_code">Zip code:</label>
            <input type="text" id="zip_code" name="zip_code" class="form-control" placeholder="Enter zip code" value="{{ old('zip_code') }}">
            <span class="text-danger">{{ $errors->first('zip_code') }}</span>
        </div>
    </div>
    
    <div class="form-group">
        <button class="btn btn-success">Submit</button>
    </div>
</form>
@endsection