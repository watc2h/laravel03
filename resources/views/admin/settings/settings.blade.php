@extends('layouts.app')
@section('content')
    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit blog settings
        </div>
        
        <div class="panel-body">
            <form action="{{route('settings.update')}}" method="post" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Site name</label>
                    <input type="text" name="site_name" value="{{$setting->site_name}}" class="form-control"/>
                </div>
                 <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" name="address" value="{{$setting->address}}" class="form-control"/>
                </div>
                
                <div class="form-group">
                    <label for="name">Contact phone</label>
                    <input type="text" name="contact_number" value="{{$setting->contact_number}}" class="form-control"/>
                </div>
                
                <div class="form-group">
                    <label for="name">Contact email</label>
                    <input type="text" name="contact_email" value="{{$setting->contact_email}}" class="form-control"/>
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                        Update site settings
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


