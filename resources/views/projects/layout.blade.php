<!DOCTYPE html>
<html>
    <head>
        <title>L5todo</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        {!! HTML::style('/css/app.css') !!}
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container_comment   {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
         <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                  <li>
                    <a href="/projects">Project</a>
                </li>
               
        </ul>

        @if (Session::has('message'))       
            <div class="flash alert-info">          
                <p>{{ Session::get('message') }}</p>        
            </div>  
        @endif

        @if ($errors->any())        
        <div class='flash alert-danger'>            
            @foreach ( $errors->all() as $error )               
                <p>{{ $error }}</p>         
            @endforeach     
        </div>  
        @endif
        
        @yield('content')  
    </body>
</html>
