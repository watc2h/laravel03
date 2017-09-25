@extends('layouts.app')
@section('content')
    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new User
        </div>
        
        <div class="panel-body">
            <form action="{{route('user.store')}}" method="post" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">User</label>
                    <input type="text" name="name" class="form-control"/>
                </div>
                 <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" class="form-control"/>
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                        Add user
                    </button>
                    </div>
                    
                </div>
               
            </form>
        </div>
    </div>
@stop
@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
@stop
@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
@stop


