<!DOCTYPE html>
<html>
<head>
    <title>Google Translate - Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="shadow p-3 mb-5 bg-white rounded">Google Translate - Laravel</a></div>
    <main role="main" class="container">
        <div class="jumbotron">
            <form method="POST" action="{{route('translate')}}">
                @csrf
                <div class="form-group">
                    <label for="inputText">Enter your text here</label>
                    <textarea class="form-control @error('inputText') is-invalid @enderror" id="inputText" rows="8" name="inputText" autocomplete="inputText" required="" autofocus>{{ old('inputText') }}</textarea>
                    @error('inputText')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="translateTo">Translate to</label>
                    <select class="form-control @error('translateTo') is-invalid @enderror" id="translateTo" name="translateTo" autocomplete="translateTo" required="">
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
                <button type="submit" class="btn btn-primary btn-lg btn-block">Click to Translate</button>
                <br>
                @if (Session::has('outputText'))
                <div class="form-group">
                    <label for="outputText">Translated Text</label>
                    <textarea class="form-control" id="outputText" rows="8">{{Session::get('outputText')}}</textarea>
                </div>
                @endif
            </form>
        </div>
    </main>
</body>
</html>