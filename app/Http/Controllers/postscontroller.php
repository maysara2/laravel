<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postscontroller extends Controller
{
    public function index()
    {
        //هاي الطريقة لعرض بيانات محددة من قاعدة البيانات
        // $posts =Post::select('title','id')->get();
        // dd($posts);
        // return view('posts.index',compact('posts'));


        //هاي الطريقة لجلب جميع العناصر من قواعد البيانات
        // $posts =Post::all();
        // return view('posts.index',compact('posts'));
        // هاي لعمل شرط محدد من الجدول
        // $posts=Post::where('id',20)->first();
        // dd($posts);
        // return view ('posts.index',compact('posts'));

        // لعرض البيانات الجاية من قاعدة البيانات بشكل تنازلي
        // $posts=Post::orderByDesc('id')->get();
        // لترتيب البيانات بشكل تصاعدي
        // $posts=Post::orderBy('id')->get();
        //لعرض 20عنصر في الصفحة فقط
        // $posts=Post::paginate(20);
        // $posts=Post::orderByDesc('id')->paginate(20);

        // هاي فقط لعرض التالي والسابق م الصفحات بس انا بفضل الاولى
        // $posts=Post::simplePaginate(20);
        $count=3;
        if(request()->has('count')){
            $count=request()->count;
        }


        if(request()->search){
            $posts=Post::where('title','like','%'.request()->search.'%')
            ->paginate(20);
        }else{
            $posts=Post::paginate($count);

        }


        return view ('posts.index',compact('posts'));


    }
public function create()
{
    return view('posts.create');
}
public function store(Request $request)
{
$request->validate([
    'title'=>'required',
    'image'=>'required',
    'content'=>'required'
]);
$img_name=rand().time().$request->file('image')->getClientOriginalName();
$request->file('image')->move(public_path('uploads'),$img_name);

Post::create([
    'title'=>$request->title,
    'image'=>$img_name,
    'content'=>$request->content,
]);
return redirect()->route('posts.index');
}


}
