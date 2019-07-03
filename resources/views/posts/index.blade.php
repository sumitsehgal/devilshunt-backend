@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row  justify-content-center">
        <div class="col-md-12">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><span>Talents</span> <a href="{{route('posts.create')}}" class="btn btn-primary pull-right">Add New</a></div>

                <div class="card-body">
                    <table class="table  table-hover table-striped">
                        <thead>
                            <th>Sr. No.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Media</th>
                        </thead>
                        <tbody>
                            @if($posts->isNotEmpty())
                                @foreach($posts as $post)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$post->name}}</td>
                                <td>{{$post->description}}</td>
                                <td>
                                    <?php $media = $post->getFirstMedia(); ?>
                                    <audio controls>
                                        <source src="{{$post->getFirstMediaUrl()}}" type="{{$media->mime_type}}">
                                    </audio>    
                                </td>
                            </tr>   

                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection