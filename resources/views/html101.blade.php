<!-- resources/views/html101.blade.php-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Workshop HTML</title>
        <link rel="stylesheet" href="http://camp-67160292-g1.test/css/bootstrap.css" />
        <<style>
             body {
                font-family: "Saraban", sans-srif;
            }
        </style>
</head>
<body>
    <div class="container pt-5">
        <h1>Workshop #HTML - FORM<h/1>
        <form>
            <div class="row mt-3">
                 <div class="col-4">
                    <label for="fname">ชื่อ</label>
                 </div>
                    <div class="col-6">
                      <input type="text" id="fname" class="form-control" >
                     </div>
</div>
 <div class="row mt-3">
                 <div class="col-4">
                    <label for="mname">นามสกุล</label>
                 </div>
                    <div class="col-6">
                      <input type="text" id="mname" class="form-control" >
                     </div>
</div>
 <div class="row mt-3">
                 <div class="col-4">
                    <label for="ddate" >
                        วัน/เดือน/ปี</label>
                 </div>
                    <div class="col-6">
                      <input type="date" id="ddate" class="form-control" >
                     </div>
</div>
 <div class="row mt-3">
                 <div class="col-4">
                    <label for="oole">
                        อายุ</label>
                 </div>
                    <div class="col-6">
                      <input type="text" id="oole" class="form-control" >
                     </div>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">ชาย</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">หญิง</label>
</div>
</body>
</html>
