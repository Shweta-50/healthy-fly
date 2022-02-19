<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;

class DoctorSideBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Frontend.doctor.doctor_side_blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'blog_title' => 'required',
            'blog' => 'required'


        ], [
            'blog_title.required' => 'You have to fill it.',
            'blog' => 'Must fill this Field.'

        ]);

        $blog = new Blogs;
        $blog->doc_id = $request->doc_id;
        $blog->profile_photo = $request->profile_photo;
        $blog->doc_name = $request->doc_name;
        $blog->doc_email = $request->doc_email;
        $blog->doc_specilist = $request->doc_specilist;
        $blog->blog_title = $request->blog_title;
        $blog->blog = $request->blog;


        $blog->save();
        return redirect()->back()->with('status', 'Thank you for giving your valueable blog 👍');
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
