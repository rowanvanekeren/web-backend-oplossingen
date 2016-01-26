@extends('layouts.app')

@section('content')
<div class="container">
                <div >Register</div>
               
                    <div >
                    <form  role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                       
                            <label >Name</label>

                            <div >
                                <input type="text" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                   
                               <p> {{ $errors->first('name') }}</p>
                                   
                                @endif
                            </div>
                        </div>

                        <div>
                            <label>E-mail Adres</label>

                            <div >
                                <input type="email" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                 
                                        <p>{{ $errors->first('email') }}</p>
                                
                                @endif
                            </div>
                        </div>

                        <div >
                            <label >Password</label>

                            <div>
                                <input type="password" name="password">

                                @if ($errors->has('password'))
                                  
                                        <p>{{ $errors->first('password') }}</p>
                                  
                                @endif
                            </div>
                        </div>

                        <div>
                            <label>Confirm Password</label>

                            <div >
                                <input type="password" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                 
                                        <p>{{ $errors->first('password_confirmation') }}</p>
                                    
                                @endif
                            </div>
                        </div>

                     
                                <button type="submit">
                                   Register
                                </button>
</div>
@endsection
