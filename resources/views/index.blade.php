@extends("layouts.master")
@section("content")
    <form action="{{ URL::to('/emplist') }}" method="POST">
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group row">
                <label for="exampleFormControlInput1">รหัสพนักงาน</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="เช่น E01" name="empcode">
            </div>
            <div class="form-group row">
                <label for="exampleFormControlInput1">ชื่อ</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="เช่น E01" name="fname">
            </div>
            <div class="form-group row">
                <label for="exampleFormControlInput1">นามสกุล</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="เช่น E01" name="lname">
            </div>
            <div class="form-group row">
                <label for="exampleFormControlInput1">เพศ</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="เช่น E01" name="sex">
            </div>
            <div class="form-group row">
                <label for="exampleFormControlInput1">เงินเดือน</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="เช่น E01" name="salary">
            </div>
            <div class="form-group row">
                <label for="exampleFormControlInput1">รหัสแผนก</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="เช่น E01" name="deptcode">
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
            </div>
        </div>
    </form>
@endsection
