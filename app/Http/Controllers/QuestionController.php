<?php

namespace App\Http\Controllers;

use App\Model\Question;
use App\Http\Resources\QuestionResource ;
use Illuminate\Http\Request;
use Response ;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=Question::latest()->get();
        return  QuestionResource::collection($questions) ;
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = Question::create($request->all());
        return 'created'  ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        
          return new QuestionResource($question) ;
          
    }

 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //return $request->title;
        $question->update($request->all());
       // $query=Question::find($question->id);
      //  $query->title= $request->title;
      //  $query->update();
        return 'update'  ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return response('Deleted success',201);
    }
}
