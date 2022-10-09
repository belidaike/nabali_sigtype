<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <select class="form-select text-center" wire:model.lazy="title">
                    <option value="all">All</option>
                    <option value="WorldWar I">WorldWar I</option>
                    <option value="WorldWar II">WorldWar II</option>
                    <option value="WorldWar III">WorldWar III</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select text-center" wire:model.lazy="content">
                    <option value="all">All</option>
                    <option value="desc1">desc1</option>
                    <option value="desc2">desc2</option>
                    <option value="desc3">desc3</option>
                </select>
            </div>
            <input type="text" class="form-control mt-5 text-center" style="background-color:#D8D9CF;" placeholder="Search" wire:model="search">
        </div>
    </div>
    <div>
        <div class="d-flex justify-content-between flex-wrap mt-5">
        @foreach ($posts as $post)
        <div class="card align-self-stretch m-1" style="width: 49%">
            <div class="card-body">
                <div class="card-title text-center">
                    <h1><b>{{ $post->title }}</b></h1><hr>
                    <p>{{ $post->content }}</p>
                    <br><br>
                    <p id="timestamp">{{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                </div>
            </div>
            <div class="card-footer">
                {{-- <a href="{{ url('/posts/edit/' . $post->id) }}" ><i id="pen" class="fa-solid fa-user-pen"></i></a> --}}
                <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-end mt-3">{{ $posts->links() }}</div>
    </div>


    <style scoped>
        #post-box{
            background-color: #F6FBF4;
            color: dark;
        }

        .card-footer{
            background-color: #790252;
            color: white;
        }
        a{
            color: #F6FBF4;
            margin-right: 8px;
        }
        i:hover{
            color: #E80F88;
        }

    
    </style>
</div>


