@extends('layouts.app')

@section('title')
Restaurant | YouCode
@endsection

@section('content')

<div class="container">
    <div class="d-flex justify-content-between mt-5">
        <div class='h3'>
            <u>List of Plats :</u> 
        </div>
        <div class=" mb-5">
            <a href="#modal" data-bs-toggle="modal"  class="btn btn-success btn-rounded px-4 rounded-pill">Add Plats</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name </th>
                    <th scope="col">Price</th>
                    <th scope="col">description</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php
              $donner = $postData;
              foreach($donner as $ligne)
              {
            ?>
            
                <tr>
                    <th scope="row"> 1 </th>
                    <td>image here</td>
                    <td>Tacos</td>  
                    <td>30 DH</td>
                    <td title="">frite + dande + souce </td>
                    <td class="d-flex">
                        <div class="me-3">
                         <button type="button" onclick="getdataArticl()"
                          data-bs-target="#modal-edit-post" data-bs-toggle="modal"
                          class="btn btn-outline-info">Edit</button>    
                        </div>  
    
                        <div class="">
                         <a href="#"><button type="button" onclick="deleteArticl()"  class="btn btn-outline-danger">Delete</button></a>
                        </div>  
                    </td>
                </tr>
            <?php
              }
            ?>
            </tbody>
        </table>
    </div>
    </div>
    
    
    {{-- ========================================== modal =========================================--}}
    
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('plats.store') }}" method="POST" id="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add Articl</h5>
                        <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">name</label>
                            <input  type="text" class="form-control" name="name" id="name"/>
                        </div>            
                        <div class="mb-3">
                            <label class="form-label" >Price</label>
                            <div class="input-group">
                                <div class="input-group-text">MAD</div>
                                <input type="number" name="price" class="form-control" id="autoSizingInputGroup">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">image</label> 
                            <input type="file" class="form-control" id="inputGroupFile04" name="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="5" name="description" id="description"></textarea>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" name="save"   class="btn btn-primary" id="save-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection 