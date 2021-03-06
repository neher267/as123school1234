@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group>
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group>
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" required autofocus>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Mobile</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mobile" required>
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <select name="" class="form-control" required>
                                    <option value="">Select</option>
                                    @foreach($genders as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label class="col-md-4 control-label">Religion</label>
                            <div class="col-md-6">
                                <select name="religion_id" class="form-control" required>
                                    <option value="">Select</option>
                                    @foreach($religions as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label class="col-md-4 control-label">Role</label>
                            <div class="col-md-6">
                                <select name="" class="form-control" required>
                                    <option value="">Select</option>
                                    @foreach($roles as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <select name="" class="form-control" required>
                                    <option value="">Select</option>
                                    @foreach($genders as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>                        

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
