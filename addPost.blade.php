   @extends('layouts.frontendLayout')
   @section('title', "add post")
   @section('content')
         


    <section>
        <div class="container">
            <div class="card col-lg-5 mx-auto mt-5">
                <div class="card-header">
                      add post
                </div>
                   <div class="card-body">
                     <form action="{{route('store')}}" method="POST">
                            @csrf
                                <input name="title" type="text" placeholder="post title" class="form-control mb-2">
                                @error('title')
                                     <span class="text-danger">
                                        {{$message}}
                                     </span>
                                @enderror
                                <input name="detail" type="text" placeholder="post detail" class="form-control mb-2">
                                @error('detail')
                                <span class="text-danger">
                                   {{$message}}
                                </span>
                           @enderror
                                <input name="author" type="text" placeholder="author name" class="form-control mb-2">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                           </form>
                   </div>
            </div>
        </div>   
    </section>


    @endsection