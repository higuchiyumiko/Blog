<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>フォーム入力画面</h1>
        <form action="/student/store" method="POST">
            @csrf
            
            <div>
                <h2>名前</h2>
                <input type="text" name="student[name]" placeholder="名前" />
            </div>
        
            <div>
                <h2>学年</h2>
                <input type="text" name="student[grade]" placeholder="学年" />
            </div>
        
            <div>
                <h2>年齢</h2>
                <input type="text" name="student[age]" placeholder="年齢" />
            </div>
                    
            <div>
                <h2>好きな教科</h2>
                @foreach($subjects as $subject)
        
                    <label>
                        {{-- valueを'$subjectのid'に、nameを'配列名[]'に --}}
                        <input type="checkbox" value="{{ $subject->id }}" name="subjects_array[]">
                            {{$subject->subject_name}}
                        </input>
                    </label>
                    
                @endforeach         
            </div>
            <input type="submit" value="保存"/>
        </form>
    </body>
</html>