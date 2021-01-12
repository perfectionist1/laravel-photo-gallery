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
                <form class="form-control" action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf 
                    <div class="row mb-3 mt-5">
                        <label for="inputName" class="col-sm-2 col-form-label"><strong>Name</strong></label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="photo_name" id="inputName" placeholder="Enter name"/>
                        </div>
                    </div>
                    <div class="row mb-3 mt-3">
                        <label for="inputDescription" class="col-sm-2 col-form-label"><strong>Description</strong></label>
                        <div class="col-sm-10">
                        <textarea class="form-control text-muted" name="photo_description" id="inputDescription"  rows="8"> Your Description</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 offset-2">
                            <div class="input-group mb-3">                           
                                <input type="file" name="photo_gallery" class="form-control" id="inputFile">                                
                            </div>
                        </div>
                    </div>
                    <div class="col-10 offset-2">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
@endsection