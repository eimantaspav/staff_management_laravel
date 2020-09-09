@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Naujas projektas:</div>
               <div class="card-body">
                   <form action="{{ route('projects.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Pavadinimas: </label>
                           <input type="text" name="title" class="form-control">
                       </div>
                      
                       <button type="submit" class="btn btn-primary">Sukurti</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection