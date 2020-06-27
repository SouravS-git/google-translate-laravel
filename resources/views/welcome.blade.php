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
                    <textarea class="form-control @error('inputText') is-invalid @enderror" id="inputText" rows="8" name="inputText" value="{{ old('inputText') }}" autocomplete="inputText" required="" autofocus></textarea>
                    @error('inputText')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="translateTo">Translate to</label>
                    <select class="form-control @error('translateTo') is-invalid @enderror" id="translateTo" name="translateTo" value="{{ old('translateTo') }}" autocomplete="translateTo" required="">
                        <option value="" selected="">Select a language</option>
                        <option value = "af">Afrikaans</option>
                        <option value = "sq">Albanian</option>
                        <option value = "am">Amharic</option>
                        <option value = "ar">Arabic</option>
                        <option value = "hy">Armenian</option>
                        <option value = "az">Azerbaijani</option>
                        <option value = "eu">Basque</option>
                        <option value = "be">Belarusian</option>
                        <option value = "bn">Bengali</option>
                        <option value = "bs">Bosnian</option>
                        <option value = "bg">Bulgarian</option>
                        <option value = "ca">Catalan</option>
                        <option value = "ceb">Cebuano</option>
                        <option value = "zh-CN">Chinese (Simplified)</option>
                        <option value = "zh-TW">Chinese (Traditional)</option>
                        <option value = "co">Corsican</option>
                        <option value = "hr">Croatian</option>
                        <option value = "cs">Czech</option>
                        <option value = "da">Danish</option>
                        <option value = "nl">Dutch</option>
                        <option value = "en">English</option>
                        <option value = "eo">Esperanto</option>
                        <option value = "et">Estonian</option>
                        <option value = "fi">Finnish</option>
                        <option value = "fr">French</option>
                        <option value = "fy">Frisian</option>
                        <option value = "gl">Galician</option>
                        <option value = "ka">Georgian</option>
                        <option value = "de">German</option>
                        <option value = "el">Greek</option>
                        <option value = "gu">Gujarati</option>
                        <option value = "ht">Haitian Creole</option>
                        <option value = "ha">Hausa</option>
                        <option value = "haw">Hawaiian</option>
                        <option value = "he">Hebrew</option>
                        <option value = "hi">Hindi</option>
                        <option value = "hmn">Hmong</option>
                        <option value = "hu">Hungarian</option>
                        <option value = "is">Icelandic</option>
                        <option value = "ig">Igbo</option>
                        <option value = "id">Indonesian</option>
                        <option value = "ga">Irish</option>
                        <option value = "it">Italian</option>
                        <option value = "ja">Japanese</option>
                        <option value = "jv">Javanese</option>
                        <option value = "kn">Kannada</option>
                        <option value = "kk">Kazakh</option>
                        <option value = "km">Khmer</option>
                        <option value = "rw">Kinyarwanda</option>
                        <option value = "ko">Korean</option>
                        <option value = "ku">Kurdish</option>
                        <option value = "ky">Kyrgyz</option>
                        <option value = "lo">Lao</option>
                        <option value = "la">Latin</option>
                        <option value = "lv">Latvian</option>
                        <option value = "lt">Lithuanian</option>
                        <option value = "lb">Luxembourgish</option>
                        <option value = "mk">Macedonian</option>
                        <option value = "mg">Malagasy</option>
                        <option value = "ms">Malay</option>
                        <option value = "ml">Malayalam</option>
                        <option value = "mt">Maltese</option>
                        <option value = "mi">Maori</option>
                        <option value = "mr">Marathi</option>
                        <option value = "mn">Mongolian</option>
                        <option value = "my">Myanmar (Burmese)</option>
                        <option value = "ne">Nepali</option>
                        <option value = "no">Norwegian</option>
                        <option value = "ny">Nyanja (Chichewa)</option>
                        <option value = "or">Odia (Oriya)</option>
                        <option value = "ps">Pashto</option>
                        <option value = "fa">Persian</option>
                        <option value = "pl">Polish</option>
                        <option value = "pt">Portuguese (Portugal, Brazil)</option>
                        <option value = "pa">Punjabi</option>
                        <option value = "ro">Romanian</option>
                        <option value = "ru">Russian</option>
                        <option value = "sm">Samoan</option>
                        <option value = "gd">Scots Gaelic</option>
                        <option value = "sr">Serbian</option>
                        <option value = "st">Sesotho</option>
                        <option value = "sn">Shona</option>
                        <option value = "sd">Sindhi</option>
                        <option value = "si">Sinhala (Sinhalese)</option>
                        <option value = "sk">Slovak</option>
                        <option value = "sl">Slovenian</option>
                        <option value = "so">Somali</option>
                        <option value = "es">Spanish</option>
                        <option value = "su">Sundanese</option>
                        <option value = "sw">Swahili</option>
                        <option value = "sv">Swedish</option>
                        <option value = "tl">Tagalog (Filipino)</option>
                        <option value = "tg">Tajik</option>
                        <option value = "ta">Tamil</option>
                        <option value = "tt">Tatar</option>
                        <option value = "te">Telugu</option>
                        <option value = "th">Thai</option>
                        <option value = "tr">Turkish</option>
                        <option value = "tk">Turkmen</option>
                        <option value = "uk">Ukrainian</option>
                        <option value = "ur">Urdu</option>
                        <option value = "ug">Uyghur</option>
                        <option value = "uz">Uzbek</option>
                        <option value = "vi">Vietnamese</option>
                        <option value = "cy">Welsh</option>
                        <option value = "xh">Xhosa</option>
                        <option value = "yi">Yiddish</option>
                        <option value = "yo">Yoruba</option>
                        <option value = "zu">Zulu</option>
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