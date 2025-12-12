<<<<<<< HEAD
<<<<<<< HEAD
@extends('template.default')

@section('content')

 <form style=max-width:600;margin-top:20px;>

=======
=======
>>>>>>> 699c30af4953ad1799cadd9f141093423115fb00
<!DOCTYPE html>
<html>
    <head>
        <title>Workshop HTML</title>
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
        <h1>Workshop #HTML - FORM</h1>

            <form style=max-width:600;margin-top:20px;>
<<<<<<< HEAD
>>>>>>> 699c30af4953ad1799cadd9f141093423115fb00
=======
>>>>>>> 699c30af4953ad1799cadd9f141093423115fb00

            <div class=form-section>
                <div class=label-col><labeL>ชื่อ</labeL></div>
                <div class=input-col>
                    <input type=text  class=form-control  >
                </div>
            </div>

            <div class=form-section>
                <div class=label-col><label>สกุล</label>
                </div>
            <div class=input-col>
            <input class=form-control ></div>
        </div>
        <div  class=form-section>
            <div class="label-col"><label>วัน/เดือน/ปีเกิด</label></div>
            <div class=input-col>
                <input type="date"  class="form-control"></div>
            </div>

        <div class=form-section>
            <div class=label-col><label>อายุ</label></div>
            <div class=input-col>
                <input type=txt class=form-contro>
            </div>
        </div>

        <div class=form-section>
            <div class=label-col><label>เพศ</label></div>
            <div class=input-col>
                <input type=radio value=ชาย name=gender><label>ชาย
                <input name=gender type=radio value=หญิง><label>หญิง</label>
            </div>
        </div>

        <div class=form-section>
            <div class=label-col><label>รูป</label></div>
            <div class="input-col">
                <input type="file" class=form-control>
            </div>
        </div>

        <div class=form-section style=align-items:flex-start;>
                <div class="label-col"><label>ที่อยู่</label></div>
                <div class=input-col><textarea rows=4 class=form-control></textarea>
            </div>
        </div>

        <div class=form-section>
            <div class="label-col"><label>สีที่ชอบ</label></div>
            <div class=input-col>
                <select class="form-control">
                    <option>สีแดง<option>
                    <option>สีเขียว<option>
                    <option>สีน้ำเงิน<option>
                    <option>สีเหลือง<option>

                    </select>
                </div>
            </div>
<<<<<<< HEAD
<<<<<<< HEAD

=======
                        
>>>>>>> 699c30af4953ad1799cadd9f141093423115fb00
=======
                        
>>>>>>> 699c30af4953ad1799cadd9f141093423115fb00
        <div class=form-section>
                <div class=label-col><label> แนวเพลงที่ชอบ</label></div>
                <div class=input-col>
                <input  type=radio name=ppp> เพื่อชวิต
                <input name=ppp type=radio> ลูกทุ่ง
                <input radio type name=ppp> อื่นๆ
            </div>
        </div>

        <div class=form-section style="margin-bottom: 40">
            <div class=label-col></div>
            <div class=input-col>
                <input type=checkbox> ยินยอมให้เก็บข้อมูลผล
            </div>
        </div>

        <div class="form-section">
            <div class="label-col">
            </div><div class="input-col">
<<<<<<< HEAD
<<<<<<< HEAD
                <button type=reset class="btn  btn-outline-secondary" type="reset" >Reset
                <button type=submut  class=btn-outline-secondary btn onclick="clickMe()" type="button">Submit
            </div>
        </div>

</form>

@endsection

@push('scripts')
    <script>
        let fname = function (){
            console.log.(document.getElementById('fname'))
        }
        let clickMe = function (){
            console.iog("Callback")
        }
        let myfunc = (callback)=>{
            callback("in callback")
        }
        callMe = (param) =>{
            console.log(param)
        }

    </script>
@endpush

=======
=======
>>>>>>> 699c30af4953ad1799cadd9f141093423115fb00
                <button type=reset class="btn  btn-outline-secondary" >Reset
                <button type=submut  class=btn-outline-secondary btn>Submit
            </div>
        </div>

        </form>
    </div>
</body>
</html>
>>>>>>> 699c30af4953ad1799cadd9f141093423115fb00
