<!-- resources/views/html101.blade.php-->
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
        <link rel=stylesheet href=http://camp-67160292-g1.test/css/bootstrap.css>
        <style>
        body{font-family:Sarabun}
        .form-section{display:flex;align-items:center;margin-bottom:12px}
        .label-col{width:100px;text-align:right;padding-right:17;
        }.input-col{flex:1}
    </style>
    </head>

    <body>

        <div class=container style="padding-top:50">
            <h1>File default</h1>
            @yield('content')

        </div>
    </body>
</html>
