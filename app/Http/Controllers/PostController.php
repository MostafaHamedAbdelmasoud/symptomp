<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;
use Carbon\Carbon;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::get();
        
        //  $subdesc = (string) $posts->postdescription;
        //  $postsubdesc = Str::substr($posts->postdescription, 0,2);
        // //dd($posts);
        return view('posts.index',compact('posts','postsubdesc'));

    }
    public function index2()
    {
        //
        $posts=Post::get();
        
        //  $subdesc = (string) $posts->postdescription;
        //  $postsubdesc = Str::substr($posts->postdescription, 0,2);
        // //dd($posts);
        return view('welcome2',compact('posts'));

    }
    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator=\Validator::make($request->all(),
        [
'title'=>'required|max:191|min:3',
'postdescription'=>'required|max:1000000|min:100',
'posttag'=>'required|max:100|min:3',

'image'=>'required|image|max:10240|mimes:png,jpg,jpeg'
     
         ]);



if ($validator->fails()) {
return redirect('post/create')
->withErrors($validator)
->withInput();
}

// if i want use this code, i must out the image required| upward.
$image=$request->file('image');
$imageName = time().$image->getClientOriginalName();
$img = \Image::make($image->getRealPath());
$img->resize(350, 350);
$img->save(public_path().'/assets/images/posts/'.$imageName);
// $newpost->img=$imageName;




//
$post=new post();
$post->title=$request->title;
$post->postdescription=$request->postdescription;
$post->posttag=$request->posttag;

$post->image=$imageName;
$post->save();



return view('posts.show',compact('post'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
        //
        public function show($id)
    {
        //
        $post=Post::find($id);
        //  $current_time = $post->created_at->toDateTimeString();
        //   $postCreated = Str::substr($current_time, 0,10);

        
        return view('posts.show',compact('post'));

    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post=Post::find($id);
        
        return view('posts.edit',compact('post'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post=post::find($id);
        $post->title=$request->title;
        $post->postdescription=$request->postdescription;
        $post->posttag=$request->posttag;
		
		 $image=$request->file('image');
            $imageName = time().$image->getClientOriginalName();
            $img = \Image::make($image->getRealPath());
            $img->resize(250, 250);
            $img->save(public_path().'/assets/images/posts/'.$imageName);
		$post->image = $imageName;
		
        $post->save();
        
        return redirect('/post/show/'.$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        Post::destroy($id);
        
        return redirect('/posts');
        
        //
    }
    public function search(Request $request)
    {
        
        $keyword=$request->keyword;
        

		$posts=Post::where('title','like','%'.$keyword.'%' , 'or','postdescription' ,'like','%'.$keyword.'%' , 'or','posttag' ,'like','%'.$keyword.'%')->get();
        
        return view('posts.search',compact('posts','keyword'));
        
    }

}
