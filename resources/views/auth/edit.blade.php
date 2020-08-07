@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Usuario: '. $user->name) }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => ['update', $user->id], 'method' => 'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('username', 'Usuario') !!}
                            {!! Form::text('username', $user->username, ['class' => 'form-control', 'placeholder' => 'Nombre Usuario', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Correo Electronico') !!}
                            {!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                
                    <!-- <form method="PUT" action="{{ route('update2', $user) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="<?php echo $user->name; ?>" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="<?php echo $user->username; ?>" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="<?php echo $user->email; ?>" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" onclick="return confirm('¿Seguro que deseas editarlo?')">
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <div class="col-md-6">
                        <a class="btn btn-link" href="{{ route('home') }}">
                            {{ __('Volver') }}
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

