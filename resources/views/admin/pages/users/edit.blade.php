
@extends('admin.layout.layout')

@section('content')


    <div id="page-wrapper" style="margin-top: 30px">
        <div class="container-fluid">
            <h2>Form control: input</h2>
            <p>The form below contains two input elements; one of type text and one of type password:</p>

            <form method="post" action="/admin/users/update/{{ $user->id }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" value="{{ $user->name }}" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">telephone</label>
                    <input type="tel" value="{{ $user->telephone }}" name="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" value="{{ $user->email }}" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

{{--                <div class="form-check">--}}
{{--                    <input type="checkbox" {{ $user->status ? 'checked' : ''}} name="status" class="form-check-input" id="exampleCheck1">--}}
{{--                    <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

@endsection
