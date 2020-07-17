<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::where(['user_id'=>Auth()->user()->id, 'isDeleted'=>0])
                ->get();
        return view('blog.view_blog', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.add_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            if ($request->hasFile('blog_img') && $request->blog_img->isvalid()) {
                $file = $request->blog_img->getClientOriginalName(); //Get Image Name
                $file_name = time(). '_' .$file;
                $request->blog_img->move(public_path('/assets/images/blogs/'), $file_name);


            } else {
                $file_name = "no-image.png";

            }

        $Blog = new Blog;
        $Blog->user_id = Auth()->user()->id;
        $Blog->title = $request->title;
        $Blog->description = $request->description;
        $Blog->image = $file_name;
        $Blog->save();
            return redirect('/Blog/Add')->with('info', 'Blog Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = base64_decode($id);

        $blog = Blog::where(['id'=>$id, 'isDeleted'=>0])
                    ->get();

        return view('blog.update_blog', ['blog'=>$blog]);

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
        if (DB::table('blogs')
             ->where('title',$request->title)->where('isDeleted','0')->first()) {
            return redirect('/Blog/View')->with('info', 'Blog Category Already Added.');
        }else{
            if ($request->hasFile('blog_img') && $request->blog_img->isvalid()) {
                $file = $request->blog_img->getClientOriginalName(); //Get Image Name
                $file_name = time(). '_' .$file;
                $request->blog_img->move(public_path('/assets/images/blogs/'), $file_name);


            } else {
                $blog_img = Blog::where(['id'=>$id, 'isDeleted'=>0])
                        ->get();

                $file_name = $blog_img[0]->image;
                

            }
            $data = array('title' => $request->title, 'description'=>$request->description , 'image' => $file_name);
                    Blog::where('id', $id)
                    ->update($data);
        
        return redirect('/Blog/View')->with('info', 'Blog Updated Successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = base64_decode($id);
        $data = array('isDeleted' => '1');
        Blog::where('id', $id)
        ->update($data);
        return redirect('/Blog/View')->with('info', 'Blog Delete Successfully.');
    }
}
