@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-5 offset-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Acceso a la aplicacion</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('login')}}" class="form-group">
                        {{csrf_field()}}
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <input type="text" placeholder="Nombre usuario" value="{{ old('name') }}" class="form-control" name="name">
                            
                            {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <input type="password" class="form-control" placeholder="password" name="password">
                            {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                        </div>
                        <button class="btn btn-primary btn-block"> Acceder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection