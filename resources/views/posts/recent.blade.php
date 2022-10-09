@extends('base')
@section('content')

<div class="wasap">
    <h1 id="top" class="text-center text-white">All posts</h1>
    <div class="d-flex justify-content-between flex-wrap">
        @foreach ($recentPost as $post)
            <div id="post-box" class="card align-self-stretch m-1" style="width: 31%">
                <div class="card-body">
                    <div class="card-title">
                        <h4 id="post-title">{{ $post->title }}</h4>
                        <p class="timestamp"><b>by: </b> {{ $post->user->lname }}, {{ $post->user->fname }} <br>
                    <b>created: </b>{{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    @if($post->isEditable())
                        <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square" style="color:#F6FBF4"></i></a>
                        <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash" style="color:#F6FBF4"></i></a>
                        @else 
                        <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-heart"></i></a>&nbsp;
                        <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-comment-dots"></i></i></a>&nbsp;
                        <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-solid fa-share-nodes"></i></a>
                        
                        
                        
                    @endif
                </div>
            </div>
        @endforeach

    </div>
</div>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap');
    
    #top{
        margin-top: 30px;
        margin-bottom: 30px;
        font-weight: bold;
        font-size: 50px;
    }


    #post-title{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }
    .wasap {
        height: 100%vh;
        margin: 100px;
        position: relative;
    }
    
    p{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }
    .timestamp{
        font-size: 12px;
    }

    .card-body{
        color: #1A1B41;
    }


    .buttons-for-non-user{
        color: white;
    }

    #post-box{
        color: white;
    }
    .card-body{
        color: dark;
        background-color: white;
    }

    .card-footer{
        background-color:  	#790252;
        color: dark;
        height: 50px;

    }

    a:hover{
        background-color: #E80F88;
    }
    

    ::-webkit-scrollbar {
        display: none;
    }
</style>
@endsection
