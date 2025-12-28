@extends('template.default')

@section('title', 'Workshop FORM')
@section('header' , 'Worksshop #HTML - FORM')
@section('content')
<h1></h1>
<form method="POST" action="{{ route('html101.store') }}" enctype="multipart/form-data">
                @csrf
                <!-- ชื่อ -->
                <div class="form-section">
                    <div class="label-col"><label>ชื่อ</label></div>
                    <div class="input-col">
                        <input id="fname" name="fname" class="form-control" value="{{ old('fname') }}">
                        @error('fname') <div class="text-danger">{{ $message }}</div> @enderror
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
                        <input id="lname" name="lname" class="form-control" value="{{ old('lname') }}">
                        @error('lname') <div class="text-danger">{{ $message }}</div> @enderror
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
                        <input type="date" id="date" name="date" class="form-control" value="{{ old('date') }}">
                        @error('date') <div class="text-danger">{{ $message }}</div> @enderror
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุ วัน/เดือน/ปีเกิด
                        </div>
                    </div>
                </div>

                <!-- อายุ -->
                <div class="form-section">
                    <div class="label-col"><label>อายุ</label></div>
                    <div class="input-col">
                        <input id="age" name="age" class="form-control" value="{{ old('age') }}">
                        @error('age') <div class="text-danger">{{ $message }}</div> @enderror
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
                                <input type="radio" id="male" name="gender" value="ชาย" {{ old('gender') == 'ชาย' ? 'checked' : '' }}>
                                <label for="male">ชาย</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="female" name="gender" value="หญิง" {{ old('gender') == 'หญิง' ? 'checked' : '' }}>
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
                        <input type="file" class="form-control" id="photo" name="photo">
                        @error('photo') <div class="text-danger">{{ $message }}</div> @enderror
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
                        <textarea id="address" name="address" class="form-control">{{ old('address') }}</textarea>
                        @error('address') <div class="text-danger">{{ $message }}</div> @enderror
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
                        <select id="color" name="color" class="form-control">
                            <option value=""> เลือกสี </option>
                            <option value="สีแดง" {{ old('color') == 'สีแดง' ? 'selected' : '' }}>สีแดง</option>
                            <option value="สีเขียว" {{ old('color') == 'สีเขียว' ? 'selected' : '' }}>สีเขียว</option>
                            <option value="สีน้ำเงิน" {{ old('color') == 'สีน้ำเงิน' ? 'selected' : '' }}>สีน้ำเงิน</option>
                            <option value="สีเหลือง" {{ old('color') == 'สีเหลือง' ? 'selected' : '' }}>สีเหลือง</option>
                            <option value="สีดำ" {{ old('color') == 'สีดำ' ? 'selected' : '' }}>สีดำ</option>
                            <option value="สีขาว" {{ old('color') == 'สีขาว' ? 'selected' : '' }}>สีขาว</option>
                        </select>
                        @error('color') <div class="text-danger">{{ $message }}</div> @enderror
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
                                <input type="radio" id="pref1" name="preference" value="เพื่อชีวิต" {{ old('preference') == 'เพื่อชีวิต' ? 'checked' : '' }}>
                                <label for="pref1">เพื่อชีวิต</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="pref2" name="preference" value="ลูกทุ่ง" {{ old('preference') == 'ลูกทุ่ง' ? 'checked' : '' }}>
                                <label for="pref2">ลูกทุ่ง</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="pref3" name="preference" value="อื่นๆ" {{ old('preference') == 'อื่นๆ' ? 'checked' : '' }}>
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
                            <input type="checkbox" id="consent" name="consent" value="1" {{ old('consent') ? 'checked' : '' }}>
                            <label for="consent">ยินยอมให้เก็บข้อมูลผล</label>
                        </div>
                        @error('consent') <div class="text-danger">{{ $message }}</div> @enderror
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
                            <button type="submit" class="btn-success">Submit</button>
                        </div>
                    </div>
                </div>

</form>
@endsection

@push('scripts')
   <script>
    // ฟังก์ชันตรวจสอบความถูกต้องของฟอร์ม
    function validateForm() {
        let isValid = true;

        // ชื่อ
        let fname = document.getElementById('fname');
        if (fname.value.trim() === "") {
            fname.classList.remove('is-valid');
            fname.classList.add('is-invalid');
            isValid = false;
        } else {
            fname.classList.remove('is-invalid');
            fname.classList.add('is-valid');
        }

        // สกุล
        let lname = document.getElementById('lname');
        if (lname.value.trim() === "") {
            lname.classList.remove('is-valid');
            lname.classList.add('is-invalid');
            isValid = false;
        } else {
            lname.classList.remove('is-invalid');
            lname.classList.add('is-valid');
        }

        // วัน/เดือน/ปีเกิด
        let date = document.getElementById('date');
        if (date.value === "") {
            date.classList.remove('is-valid');
            date.classList.add('is-invalid');
            isValid = false;
        } else {
            date.classList.remove('is-invalid');
            date.classList.add('is-valid');
        }

        // อายุ
        let age = document.getElementById('age');
        if (age.value.trim() === "") {
            age.classList.remove('is-valid');
            age.classList.add('is-invalid');
            isValid = false;
        } else {
            age.classList.remove('is-invalid');
            age.classList.add('is-valid');
        }

        // เพศ
        const male = document.getElementById('male');
        const female = document.getElementById('female');
        const isGenderSelected = male.checked || female.checked;
        const genderValid = document.getElementById('gender-valid');
        const genderInvalid = document.getElementById('gender-invalid');

        if (isGenderSelected) {
            genderValid.classList.add('d-block');
            genderInvalid.classList.remove('d-block');
        } else {
            genderValid.classList.remove('d-block');
            genderInvalid.classList.add('d-block');
            isValid = false;
        }

        // รูป
        let photo = document.getElementById('photo');
        if (photo.files.length === 0) {
            photo.classList.remove('is-valid');
            photo.classList.add('is-invalid');
            isValid = false;
        } else {
            photo.classList.remove('is-invalid');
            photo.classList.add('is-valid');
        }

        // ที่อยู่
        let address = document.getElementById('address');
        if (address.value.trim() === "") {
            address.classList.remove('is-valid');
            address.classList.add('is-invalid');
            isValid = false;
        } else {
            address.classList.remove('is-invalid');
            address.classList.add('is-valid');
        }

        // สีที่ชอบ
        let color = document.getElementById('color');
        if (color.value === "") {
            color.classList.remove('is-valid');
            color.classList.add('is-invalid');
            isValid = false;
        } else {
            color.classList.remove('is-invalid');
            color.classList.add('is-valid');
        }

        // แนวเพลงที่ชอบ
        const pref1 = document.getElementById('pref1');
        const pref2 = document.getElementById('pref2');
        const pref3 = document.getElementById('pref3');
        const isMusicSelected = pref1.checked || pref2.checked || pref3.checked;
        const musicValid = document.getElementById('music-valid');
        const musicInvalid = document.getElementById('music-invalid');

        if (isMusicSelected) {
            musicValid.classList.add('d-block');
            musicInvalid.classList.remove('d-block');
        } else {
            musicValid.classList.remove('d-block');
            musicInvalid.classList.add('d-block');
            isValid = false;
        }

        // ยินยอม
        let consent = document.getElementById('consent');
        const consentValid = document.getElementById('consent-valid');
        const consentInvalid = document.getElementById('consent-invalid');

        if (consent.checked) {
            consentValid.classList.add('d-block');
            consentInvalid.classList.remove('d-block');
        } else {
            consentValid.classList.remove('d-block');
            consentInvalid.classList.add('d-block');
            isValid = false;
        }

        return isValid;
    }

    // เรียกใช้เมื่อ submit form
    document.querySelector('form').addEventListener('submit', function(e) {
        if (!validateForm()) {
            e.preventDefault(); // หยุดการ submit ถ้าข้อมูลไม่ครบ
        }
    });

    // เพิ่ม real-time validation (ถ้าต้องการ)
    document.getElementById('fname').addEventListener('blur', validateForm);
    document.getElementById('lname').addEventListener('blur', validateForm);
    document.getElementById('date').addEventListener('change', validateForm);
    document.getElementById('age').addEventListener('blur', validateForm);
</script>
@endpush
