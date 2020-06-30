@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Translator</div>
                <div class="card-body">
                    <form method="POST" action="{{route('translate')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">Enter your text here</label>
                            <div class="col-md-12">
                                <textarea class="form-control @error('inputText') is-invalid @enderror" id="inputText" rows="8" name="inputText" autocomplete="inputText" autofocus>{{ old('inputText') }}</textarea>
                                @error('inputText')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">Translate to</label>
                            <div class="col-md-12">
                                <select class="form-control @error('translateTo') is-invalid @enderror" id="translateTo" name="translateTo" autocomplete="translateTo">
                                    <option value="" selected="">Select a language</option>
                                    @foreach($languages as $code => $language)
                                    @if(old('translateTo') == $code)
                                    <option value="{{$code}}" selected="">{{$language}}</option>
                                    @else
                                    <option value="{{$code}}">{{$language}}</option> 
                                    @endif
                                    @endforeach
                                </select>
                                @error('translateTo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-md-center">
                                <button type="submit" class="btn btn-primary">
                                    Click to Translate
                                </button>
                            </div>
                        </div>
                        @if (Session::has('outputText'))
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">Translated Text</label>
                            <div class="col-md-12">
                                <textarea class="form-control" id="outputText" rows="8">{{Session::get('outputText')}}</textarea>
                            </div>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
