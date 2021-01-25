@extends('gallery.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <h2>BMRC Gallery Photo List</h2>
                </div>                
                <div class="ms-auto p-2 bd-highlight">
                    <a class="btn btn-primary" href="{{ route('gallery.create') }}"> Create </a>
                </div>
            </div>

            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            
            <table class="table table-bordered table-hover">
                <tr class="text-center">
                    <th> Id</th>
                    <th>Photo Name</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>      
                @foreach($gallery as $galleryItem)         
                    <tr class="text-center">                
                        <td> {{ $galleryItem->id }}</td>
                            <?php 
                                // echo "<pre>";
                                // print_r($galleryItem);
                                // echo "</pre>";                        
                            ?>
                        <td> {{ $galleryItem->name }}</td>
                        <td> {{ $galleryItem->description }}</td>
                        <td> <img src="{{ URL::to($galleryItem->photo) }}" height="70px" alt="" /></td>
                        <td> 
                            <a class="btn btn-info" href="">Show</a>
                            <a class="btn btn-primary" href="{{ URL::to('/edit/product/'. $galleryItem->id) }}">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
                        </td>               
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection