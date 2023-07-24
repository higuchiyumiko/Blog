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
        <div class='students'>

    {{-- 生徒の数だけ繰り返す --}}
    @foreach($students as $student)
    
        名前:
        <h3 class='name'>{{ $student->name }}</h3>  
        学籍番号:
        <h5 class="id">{{$student->id}}</h5>
        学年:
        <h5 class='grade'>{{ $student->grade }}</h5>
        年齢:
        <h5 class='age'>{{ $student->age }}</h5>
        
        
        好きな教科:
        <h5 class='subject'>
        
        {{-- ある生徒に関連する教科の数だけ繰り返す --}}
        @foreach($student->subjects as $subject)   
            {{ $subject->subject_name }}
        @endforeach
        
        </h5>
                
    @endforeach
    
</div>
    </body>
</html>