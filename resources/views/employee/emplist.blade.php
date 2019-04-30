@extends("layouts.master")
@section("content")
    <div class="container"> 
        <table class="table table-bordered"> 
            <thead> 
                <tr> 
                    <th>รหัส</th> 
                    <th>ชื่อ</th> 
                    <th>นามสกุล</th> 
                    <th>เพศ</th> 
                    <th>เงินเดือน</th> 
                    <th>แผนก</th> 
                </tr> 
            </thead> 
            <tbody> 
                @foreach($emp as $e) 
                <tr> 
                    <td>{{ $e->Empno }}</td> 
                    <td>{{ $e->Fname }}</td> 
                    <td>{{ $e->Lname }}</td> 
                    <td>{{ $e->Sex }}</td> 
                    <td>{{ $e->Salary }}</td> 
                    <td>{{ $e->Deptcode }}</td>
                </tr> 
                @endforeach 
            </tbody> 
        </table> 
    </div>
@endsection