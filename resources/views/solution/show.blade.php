@extends('layouts.app')

@section('content')
    <div class="list-container">
        <div class="list-wrapper">
                @php
                $final = 0;
                @endphp
                @foreach($test->questions as $question)
                    <h4 class="text-center">Nr.{{$loop->index + 1 .' '. $question->content}}</h4>
                    <ul class="list-group my-2">
                        @php
                            $guess = 0;
                            $check = 0;
                            $pass = true;
                        @endphp
                        @foreach($question->answers->all() as $answer)
                            <li class="list-group-item
                                 @foreach($solution->solutionAnswers as $solution_answer)
                                    @if($question->id === $solution_answer->question_id)
                                        @if($answer->number === $solution_answer->answer_number && $answer->correct)
                                            {{'list-group-item-success'}}
                                            @php
                                                $guess++;
                                            @endphp
                                            @break
                                        @elseif($answer->number === $solution_answer->answer_number && !$answer->correct )
                                            {{'list-group-item-danger'}}
                                            @php
                                                $pass = false;
                                            @endphp
                                            @break
                                        @endif
                                    @endif
                                @endforeach
                            ">
                                {{$answer->content}}
                                @if($answer->correct)
                                    @php $check++ @endphp
                                    <i class="fas fa-check"></i>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    @php
                        if($pass && $guess === $check){
                            $final++;
                            echo 'TEISINGAI';
                        } else {
                            echo 'NETEISINGAI';
                        }
                    @endphp
                @endforeach
            <h1 class="text-center">
                <div>Galutinis rezultatas:</div>
                <div>{{$final.'/'.$test->questions->count()}}</div>
            </h1>
        </div>
    </div>
@endsection
