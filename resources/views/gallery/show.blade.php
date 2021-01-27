@extends('gallery.layout')

@section('content')
<div class="row">
        <div class="col-md-8 offset-md-2 mt-5">            
            <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">                    
                </div>                
                <div class="ms-auto p-2 bd-highlight">
                    <a class="btn btn-success" href="{{ route('gallery.index') }}"> Back to Gallery </a>
                </div>
            </div>
            <div class="mt-5">                                
                    <div class="row mb-3 mt-5">
                        <label for="inputName" class="col-sm-2 col-form-label"><strong>Name</strong></label>
                        <div class="col-sm-10">
                        <p>{{ $data->name }}</p>
                        </div>
                    </div>
                    <div class="row mb-3 mt-3">
                        <label for="inputDescription" class="col-sm-2 col-form-label"><strong>Description</strong></label>
                        <div class="col-sm-10">
                        <p> {{ $data->description }}</p>
                        </div>
                    </div>
                    <div class="row">           
                        <div class="col-6 offset-2">
                            <div class="input-group mb-3">                           
                                <img src="{{ URL::to($data->photo) }}" height="270px" width="320px" alt="" />                                
                            </div>
                        </div>
                    </div>               
            </div>            
        </div>
    </div>
@endsection