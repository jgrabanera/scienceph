<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;



class AdminArticleController extends Controller
{
    //
    public function index(){
        return view('administrator.admin-article');
    }

    public function getAllArticles(Request $req){
        $sort = explode('.', $req->sort_by);

        $data = Article::with(['category'])
            ->where('title', 'like', $req->title . '%')
            ->whereRaw("MATCH (title, introtext, tags) AGAINST ('database' IN BOOLEAN MODE)")
            ->orderBy($sort[0], $sort[1])
            ->paginate($req->perpage);

        return $data;
    }

    public function create(){
        return view('administrator.admin-article-create-update');
    }

    public function store(Request $req){


        $req->validate([
            'title' => ['required', 'unique:articles'],
            'introtext' => ['required'],
            'category_id' => ['required']
        ]);


        $user = Auth::user();

        $img_path = '';
        
        //insert data in table articles
        $data = Article::create([
            'title' => $req->title,
            'introtext' => $req->introtext,
            'section_id' => $req->section_id,
            'category_id' => $req->category_id,
            'created' => date('Y-m-d H:i:s'),
            'created_by' => $user->user_id,
            'created_by_alias' => $user->username,
            'ordering' => $req->ordering,
            'img_path' => $img_path,
            'url' => $req->url,
            'region' => $req->region,
            'tags' => $req->tags,
            'record_trail' => '1-'.$user->username,

            /** 1 for insert, 0 for delete and 2 for update */
        ]);

        
        return response()->json([
            'status' => 'saved'
        ], 200);
    }

    public function update(Request $req, $id){

        //validatation of data
        $req->validate([
            'title' => ['required', 'unique:articles'],
            'introtext' => ['required'],
            'category_id' => ['required']
        ]);


        //call user for record trail
        $user = Auth::user();

        //update data in table articles
        $data = Article::find($id);
        $data->title = $req->title;
        $data->introtext = $req->introtext;
        $data->section_id = $req->section_id;
        $data->category_id = $req->category_id;
        $data->created = $req->created;
        $data->created_by = $req->created_by;
        $data->created_by_alias = $req->created_by_alias;
        $data->ordering = $req->ordering;
        $data->img_path = $req->img_path;
        $data->url = $req->url;
        $data->region = $req->region;
        $data->tags = $req->tags;
        $data->tags = $data->record_trail . ';2-'.$user->username;

    }

    public function destroy($id){
        
        DocumentRoute::destroy($id);

        return response()->json([
            'status' => 'deleted'
        ], 200);
    }
}
