@extends('template.default')

@section('title' , 'Worksshop FORM')
@section('content')
<h1>Workshop #HTML - FORM</h1>
<form>
                <!-- ชื่อ -->
                <div class="form-section">
                    <div class="label-col"><label>ชื่อ</label></div>
                    <div class="input-col">
                        <input id ="fname"  class="form-control">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุชื่อ
                        </div>
                    </div>
                </div>

                <!-- สกุล -->
                <div class="form-section">
                    <div class="label-col"><label>สกุล</label></div>
                    <div class="input-col">
                        <input id="lname" class="form-control">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุนามสกุล
                        </div>
                    </div>
                </div>

                <!-- วัน/เดือน/ปีเกิด -->
                <div class="form-section">
                    <div class="label-col"><label>วัน/เดือน/ปีเกิด</label></div>
                    <div class="input-col">
                        <input type="date" id="date" class="form-control">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุวัน/เดือน/ปีเกิด
                        </div>
                    </div>
                </div>

                <!-- อายุ -->
                <div class="form-section">
                    <div class="label-col"><label>อายุ</label></div>
                    <div class="input-col">
                        <input id="age" class="form-control">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุอายุ
                        </div>
                    </div>
                </div>

                <!-- เพศ -->
                <div class="form-section">
                    <div class="label-col"><label>เพศ</label></div>
                    <div class="input-col">
                        <div class="radio-group">
                            <div class="radio-item">
                                <input type="radio" id="male" name="gender" value="ชาย">
                                <label for="male">ชาย</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="female" name="gender" value="หญิง">
                                <label for="female">หญิง</label>
                            </div>
                        </div>
                        <div class="valid-feedback" id="gender-valid">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback"id="gender-invalid">
                            โปรดระบุเพศ
                        </div>
                    </div>
                </div>

                <!-- รูป -->
                <div class="form-section">
                    <div class="label-col"><label>รูป</label></div>
                    <div class="input-col">
                        <input type="file" class="form-control" id="photo">
                            <div class="valid-feedback">
                                ถูกต้อง
                            </div>
                            <div class="invalid-feedback">
                                 โปรดเลือกรูปภาพ
                            </div>
                    </div>
                </div>

                <!-- ที่อยู่ -->
                <div class="form-section">
                    <div class="label-col"><label>ที่อยู่</label></div>
                    <div class="input-col">
                        <textarea id="address" class="form-control"></textarea>
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุที่อยู่
                        </div>
                    </div>
                </div>

                <!-- สีที่ชอบ -->
                <div class="form-section">
                    <div class="label-col"><label>สีที่ชอบ</label></div>
                    <div class="input-col">
                        <select id="color" class="form-control">
                            <option value=""> เลือกสี </option>
                            <option>สีแดง</option>
                            <option>สีเขียว</option>
                            <option>สีน้ำเงิน</option>
                            <option>สีเหลือง</option>
                            <option>สีดำ</option>
                            <option>สีขาว</option>
                        </select>
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดเลือกสีที่ชอบ
                        </div>
                    </div>
                </div>

                <!-- แนวเพลงที่ชอบ -->
                <div class="form-section">
                    <div class="label-col"><label>แนวเพลงที่ชอบ</label></div>
                    <div class="input-col">
                        <div class="radio-group">
                            <div class="radio-item">
                                <input type="radio" id="pref1" name="preference" value="1">
                                <label for="pref1">เพื่อชีวิต</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="pref2" name="preference" value="2">
                                <label for="pref2">ลูกทุ่ง</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="pref3" name="preference" value="3">
                                <label for="pref3">อื่นๆ</label>
                            </div>
                        </div>
                        <div class="valid-feedback" id="music-valid">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback" id="music-invalid">
                            โปรดเลือกแนวเพลงที่ชอบ
                        </div>
                    </div>
                </div>

                <!-- ยินยอม -->
                <div class="form-section">
                    <div class="label-col"></div>
                    <div class="input-col">
                        <div class="checkbox-item">
                            <input type="checkbox" id="consent">
                            <label for="consent">ยินยอมให้เก็บข้อมูลผล</label>
                        </div>
                        <div class="valid-feedback" id="consent-valid">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback" id="consent-invalid">
                            โปรดยินยอมให้เก็บข้อมูล
                        </div>
                    </div>
                </div>

                <!-- ปุ่ม -->
                <div class="form-section">
                    <div class="label-col"></div>
                    <div class="input-col">
                        <div class="button-group">
                            <button type="reset" class="btn-light">Reset</button>
                            <button type="button" class="btn-success" onclick="clickMe()" >Submit</button>
                        </div>
                    </div>
                </div>

</form>
@endsection

@push('scripts')
    <script>
        let clickMe = function() {
            let fname = document.getElementById('fname');
            let lname = document.getElementById('lname');
            let date = document.getElementById('date');
            let age = document.getElementById('age');

            // เพศ
            const isGenderSelected = male.checked || female.checked;
            const genderValid = document.getElementById('gender-valid');
            const genderInvalid = document.getElementById('gender-invalid');

            let photo = document.getElementById('photo');
            let address = document.getElementById('address');
            let color = document.getElementById('color');

            // แนวเพลงที่ชอบ
            const pref1 = document.getElementById('pref1');
            const pref2 = document.getElementById('pref2');
            const pref3 = document.getElementById('pref3');
            const isMusicSelected = pref1.checked || pref2.checked || pref3.checked;
            const musicValid = document.getElementById('music-valid');
            const musicInvalid = document.getElementById('music-invalid');

            let consent = document.getElementById('consent');
            const consentValid = document.getElementById('consent-valid');
            const consentInvalid = document.getElementById('consent-invalid');

            // fname.value = "from clickMe";
            // console.log(fname.value);;

            if (fname.value === "") {
                fname.classList.remove('is-valid');
                fname.classList.add('is-invalid');
            }else{
                fname.classList.remove('is-invalid');
                fname.classList.add('is-valid');

            }
            if (lname.value === "") {
                lname.classList.remove('is-valid');
                lname.classList.add('is-invalid');
            }else{
                lname.classList.remove('is-invalid');
                lname.classList.add('is-valid');

            }

            if (date.value === "") {
                date.classList.remove('is-valid');
                date.classList.add('is-invalid');
            }else{
                date.classList.remove('is-invalid');
                date.classList.add('is-valid');

            }

            if (age.value === "") {
                age.classList.remove('is-valid');
                age.classList.add('is-invalid');
            }else{
                age.classList.remove('is-invalid');
                age.classList.add('is-valid');

            }

            if (isGenderSelected) {
                genderValid.classList.add('d-block');
                genderInvalid.classList.remove('d-block');
            } else {
                genderValid.classList.remove('d-block');
                genderInvalid.classList.add('d-block');
            }

            if (photo.files.length === 0) {
                photo.classList.remove('is-valid');
                photo.classList.add('is-invalid');
            } else {
                photo.classList.remove('is-invalid');
                photo.classList.add('is-valid');
            }

            if (address.value === "") {
                address.classList.remove('is-valid');
                address.classList.add('is-invalid');
            } else {
                address.classList.remove('is-invalid');
                address.classList.add('is-valid');
            }

            if (color.value === "") {
                color.classList.remove('is-valid');
                color.classList.add('is-invalid');
             } else {
                color.classList.remove('is-invalid');
                color.classList.add('is-valid');
            }

            if (isMusicSelected) {
                musicValid.classList.add('d-block');
                musicInvalid.classList.remove('d-block');
            } else {
                musicValid.classList.remove('d-block');
                musicInvalid.classList.add('d-block');
            }

            if (consent.checked) {
                consentValid.classList.add('d-block');
                consentInvalid.classList.remove('d-block');
            } else {
                consentValid.classList.remove('d-block');
                consentInvalid.classList.add('d-block');
            }

        }
        let myfunc =  (callback) =>{
            callback("in callback");
        }

        callMe = (param) => {
            console.log(param);
        }

        myfunc(callMe);

    </script>
@endpush
