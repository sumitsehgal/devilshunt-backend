@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><span>Post Talent</span><a href="{{route('posts.index')}}" class="btn btn-primary">Talents</a></div>

                <div class="card-body">

                    <form action="{{ route('posts.store') }}" method="post" class="post-form">
                    <div class="form-group">
                        @csrf
                        <label for="name">Title:</label>
                        <input type="text" class="form-control required" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Description:</label>
                        <textarea name="description" class="form-control required"></textarea> 
                    </div>
                    <div class="form-group upload-media">
                        <label for="name">Upload Your Media:</label>
                        <button class="UppyModalOpenerBtn" style="display:none;">Upload Button</button>
                        <div class="DashboardContainer">Test</div>
                        <input type="hidden" name="file" value="" />
                    </div>

                    <button type="submit" class="btn btn-primary" id="post">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection