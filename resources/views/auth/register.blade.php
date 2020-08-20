
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>




    body {
    background-color: #eeeeee;
    font-family: 'Ubuntu', sans-serif;
}

.main {
    background-color: #FFFFFF;
    padding: 20px;
    width: 450px;
    margin: 7em auto;
    border-radius: 1.5em;
    box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
}

.sign {
    padding-top: 40px;
    color: #0779e4;
    font-family: 'Ubuntu', sans-serif;
    font-weight: bold;
    font-size: 23px;
}
.margin{
    margin-bottom: 27px;

}
.un {
width: 76%;
color: rgb(38, 50, 56);
font-weight: 700;
font-size: 14px;
letter-spacing: 1px;
background: rgba(136, 126, 126, 0.04);
padding: 10px 20px;
border: none;
border-radius: 20px;
outline: none;
box-sizing: border-box;
border: 2px solid rgba(0, 0, 0, 0.02);
margin-left: 46px;
text-align: center;
font-family: 'Ubuntu', sans-serif;
}

form.form1 {
    padding-top: 40px;
}

.pass {
        width: 76%;
color: rgb(38, 50, 56);
font-weight: 700;
font-size: 14px;
letter-spacing: 1px;
background: rgba(136, 126, 126, 0.04);
padding: 10px 20px;
border: none;
border-radius: 20px;
outline: none;
box-sizing: border-box;
border: 2px solid rgba(0, 0, 0, 0.02);
margin-left: 46px;
text-align: center;
font-family: 'Ubuntu', sans-serif;
}


.un:focus, .pass:focus {
    border: 2px solid rgba(0, 0, 0, 0.18) !important;
    
}

.submit {
  cursor: pointer;
    border-radius: 5em;
    color: #fff;
    background: linear-gradient(to right, #0779e4, #0779e4);
    border: 0;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 15px;
    padding-top: 15px;
    font-family: 'Ubuntu', sans-serif;
    font-size: 13px;
    box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    width: 60%;
    margin-left:20%;
    text-align: center;
}

.forgot {
    text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
    color: #0779e4;
    text-decoration: none;
}
    




    


    </style>
</head>
<body>

    <div class="container m-auto text-center">
        <h3 class="mt-5">Royal Monarch</h3>
    </div>
   <div class="main">
    <p class="sign" align="center">Sign up</p>
   
<form class="form1" method="POST" action="{{ route('register') }}">
    @csrf

  

    <div class="margin">
        <input class="un @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="text" align="center" placeholder="E-mail"  type="email"  required autocomplete="email" autofocus>
        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>

    <div class="margin">
        <input class="pass  @error('password') is-invalid @enderror" type="password" align="center" placeholder="Password" name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="margin">

       
            <input id="password-confirm" type="password" class="pass form-control" name="password_confirmation" required autocomplete="new-password" align="center" placeholder="confirm Password">
        
    </div>

    <div>
        <button class="submit" type="submit" role="btn" align="center"> {{ __('Register') }}</button>

    
    </div>
</form>

</div> 
</body>
</html>








