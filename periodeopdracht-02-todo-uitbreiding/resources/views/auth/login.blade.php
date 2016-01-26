@extends('layouts.app')

  @section('content')
        <div class="container">
                <div> Login </div>
                <div>

                    @if (count($errors) > 0)
                    <div>
                        <strong>Whoops!</strong> There were some problems with your input.
                        <br>
                        <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form role="form" method="POST" action="{{ url('/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div>
                            <label>E-Mail Address</label>
                            <div>
                                <input type="email"  name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div>
                            <label>Password</label>
                            <div >
                                <input type="password"  name="password">
                            </div>
                        </div>



                        <div >
                           
                                <button type="submit"  >
                                    Login
                                </button>

                               
                     </div>
                    </form>
                </div>
 
</div>
@endsection