@extends('layouts.app')

@section('title')
Modefy Plat
@endsection

@section('content')
        <div class="d-flex justify-content-center align-item-center">
            <div class="card w-75">
                <form action="{{ route('plats.update', $plat) }}" method="POST" id="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h5 class="card-title">Edit Plat</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">name</label>
                            <input  type="text" class="form-control" name="name" id="name" value="{{ old('name', $plat->name) }}"/>
                        </div>            
                        <div class="mb-3">
                            <label class="form-label" >Price</label>
                            <div class="input-group">
                                <div class="input-group-text">MAD</div>
                                <input type="number" name="price" class="form-control" id="price" value="{{ old('price', $plat->price) }}">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">image</label> 
                            <input type="file" class="form-control" id="inputGroupFile04" name="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="5" name="description" id="description" value="{{ old('description', $plat->description) }}"></textarea>
                        </div>                    
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-white">Cancel</a>
                        <button type="submit" name="update"   class="btn btn-warning" id="save-btn">Update</button>
                    </div>
                </form>
            </div> 
        </div>    
@endsection  