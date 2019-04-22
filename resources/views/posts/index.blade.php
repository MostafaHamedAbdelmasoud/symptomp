



@extends('layouts.app')

@section('content2')







    



<div class="blog_area">
        <div class="container">
            <div class="row  text-center">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">


                    @foreach($posts as $post)


                    <a style="color:black;" href="{{url('/post/show'.'/'.$post->id)}}">


                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a class="" style="coloe:black; font-size:18px;" href="#">قسم: {{$post->posttag}}
</a>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                <a style="color:black;" href="{{url('/post/show'.'/'.$post->id)}}">

                                    <img class="w-100 h-75" style="max-width:100%;" src="{{asset('/assets/images/posts'.'/'.$post->image)}}">

                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>
                                            {{$post->title}}
                                                                                    </h2>
                                        </a>
                                        <p>
                                        ......{{  substr($post->postdescription, 0,100)}}

                                        
                                        </p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </article>
</a>
                        @endforeach
                    </div>
                    </div>
                    </div>
                    </div>
                   <div>










@endsection












