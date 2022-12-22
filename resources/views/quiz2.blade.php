@extends('layouts.app')
@section('content')


<div class="container">

    <div class="row justify-content-center">
        <div class="card w-75 ">

             <h3 class="card-header">{{$quiz->title}}</h3> 

        <div class="card-body">


        <h4>Q.{{$number+1}}</h4>

        <h5 class="mt-3">  以下の画像から考えられる危険な行為を選びなさい</h4>

        <div class="picture">
        <img class="rounded mx-auto d-block mt-2"height="300" width="350"
                         src="{{asset('storage/images/'.$quiz->quizzes[$number]->pictures)}}">
        </div>

        <div class="form-check">
            <div class="row">
                <div class="col-6">
                    <input type="radio" class="btn-check" name="options-outlined" id="choices-1" autocomplete="off">

                    <label class="btn btn-outline-primary w-100 p-3 mt-4" for="choices-1">1.{{$quiz->quizzes[$number]->answer1}}</label>

                </div>
                <div class="col-6">
                    <input type="radio" class="btn-check" name="options-outlined" id="choices-2" autocomplete="off">

                    <label class="btn btn-outline-primary w-100 p-3 mt-4" for="choices-2">2.{{$quiz->quizzes[$number]->answer2}}</label>

                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="radio" class="btn-check" name="options-outlined" id="choices-3" autocomplete="off">

                    <label class="btn btn-outline-primary w-100 p-3 mt-3" for="choices-3">3.{{$quiz->quizzes[$number]->answer3}}</label>

                </div>
                <div class="col-6">
                    <input type="radio" class="btn-check" name="options-outlined" id="choices-4" autocomplete="off">
 
                    <label class="btn btn-outline-primary w-100 p-3 mt-3" for="choices-4">4.{{$quiz->quizzes[$number]->answer4}}</label>

                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-4">
                <button type="button" class="btn btn-primary btn-lg w-100 p-3 mt-4"data-bs-toggle="modal"data-bs-target="#staticBackdrop">回答</button>
            </div>
        </div>


        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">解説</h5>
                    </div>

                    <div class="modal-body">
                        <h3 class="text-center text-danger font-weight-bold">✖不正解<h3>

                        <h4 class="text-center text-dark font-weight-bold">正解は{{$quiz->quizzes[$number]->answer}}です。<h4>

                        <div class="row justify-content-center mt-4">
                            <div class="card border-success w-80 ">
                                <h5 class="text-center font-weight-bold mt-4">
                                {{$quiz->quizzes[$number]->description}}
                                <h5>
                            </div>
                        </div>
                    </div>
                    <form action=" {{route('quiz2',$title->id)}} "  
                        enctype="multipart/form-data"  method="PUT">
                            
                        @method('post')
                        @csrf

                    <div class="modal-footer">


                    <input id="quiz" type="hidden" class="form-control @error('quiz') is-invalid @enderror" 
                        name="quiz" value="{{ old('quiz',$quiz->quizzes[$number]->id) }}" required autocomplete="quiz">

                    <input id="number" type="hidden" class="form-control @error('number') is-invalid @enderror" 
                        name="number" value="{{ old('number',$number) }}" required autocomplete="number">
                    
                    <input id="title" type="hidden" class="form-control @error('title') is-invalid @enderror" 
                        name="title" value="{{ old('title',$title->id) }}" required autocomplete="title">

                        <button  type="submit" class="btn btn-primary">次の問題</button></a>
                        
                    </div>
                    
                    </from>
                </div>
            </div>
        </div>
    </div>

</div>   

@endsection