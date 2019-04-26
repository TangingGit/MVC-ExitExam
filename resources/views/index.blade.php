@extends("layouts.master")
@section("content")
    <form action="{{ URL::to('/calculate') }}" method="POST">
        {{ csrf_field() }}
        <div class="container">
            <br>
            <div class="form-group row">
                <input class="form-control" type="text" placeholder="รับตัวเลข" name="a" value="{{ Input::get('a') }}">
            </div>
            <div class="form-group row">
                <input class="form-control" type="text" placeholder="รับตัวเลข" name="b" value="{{ Input::get('b') }}">
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-primary">บวก</button>
            </div>
        </div>
    </form>
@endsection
