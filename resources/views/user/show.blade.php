@extends('layouts.app')

@section('content')
    <div class="list-container">
        <div class="list-wrapper user-wrapper">
            <h1 class="user-title">{{__('user.myAcc')}}</h1>
            <ul class="stat">
                <li>
                    <div class="note">{{__('user.userNote')}}</div>
                </li>
                <li><span>{{__('auth.name')}}: </span>{{$user->name}}</li>
                <li><span>{{__('auth.email')}}: </span>{{$user->email}}</li>
                <li><span>{{__('user.regDate')}}: </span>{{$user->created_at}}</li>
                <li><span>{{__('user.createdTests')}}: </span>{{$testCount}}</li>
                <li><span>{{__('user.solvedTests')}}: </span>{{$solutionCount}}</li>
                <li><span>{{__('user.language')}}: </span>
                    <change-language-user-component
                        language="{{$settings->language}}"
                        language-route= {{route('language.setLanguage')}}>
                    </change-language-user-component>
                </li>
                <li><span>{{__('user.testAttempts')}}:</span>
                    <settings-form-component
                        lang-json="{{json_encode(trans('user'))}}"
                        :range="[1,10]"
                        :default-number="{{$settings->test_attempts}}"
                        store-route="{{route('setting.store',['parameter' => 'test_attempts'])}}"
                    >
                    </settings-form-component>
                </li>
                <li><span>{{__('user.defaultQuestions')}}: </span>
                    <settings-form-component
                        lang-json="{{json_encode(trans('user'))}}"
                        :range="[2,8]"
                        :default-number="{{$settings->default_questions}}"
                        store-route="{{route('setting.store',['parameter' => 'default_questions'])}}"
                    >
                    </settings-form-component>
                </li>
            </ul>
        </div>
    </div>
@endsection
