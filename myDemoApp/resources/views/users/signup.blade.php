<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
            .zero-raduis{
        border-radius: 0px !important;
    }

    a {
    color: #92badd;
    display:inline-block;
    text-decoration: none;
    font-weight: 400;
    }

    h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 500;
    text-transform: uppercase;
    display:inline-block;
    color: #56baed;
    }



    /* STRUCTURE */

    .wrapper {
    display: flex;
    align-items: center;
    flex-direction: column; 
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
    }

    #formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 90%;
    max-width: 450px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.3);
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.3);
    text-align: center;
    }

    #formFooter {
    padding: 2px ;
    text-align: right;
    width: 90%;
    }



    /* TABS */

    h2.inactive {
    color: #cccccc;
    }

    h2.active {
    color: #0d0d0d;
    border-bottom: 2px solid #5fbae9;
    }



    /* FORM TYPOGRAPHY*/

    input[type=button], input[type=submit], input[type=reset]  {
    background-color: #56baed;
    border: none;
    color: white;
    width: 85%;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 16px;
    cursor: pointer;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
    background-color: #39ace7;
    }

    input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
    }

    input[type=text], input[type=email],input[type=password] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    }

    input[type=text]:focus, input[type=email]:focus,input:[type=password]{
    background-color: #fff;
    border-bottom: 2px solid #5fbae9;
    }

    input[type=text]:placeholder, input[type=email]:placeholder ,input[type=password]{
    color: #cccccc;
    }



    /* ANIMATIONS */

    /* Simple CSS3 Fade-in-down Animation */
    .fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
    }

    @keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
    }

    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

    .fadeIn {
    opacity:0;
    -webkit-animation:fadeIn ease-in 1;
    -moz-animation:fadeIn ease-in 1;
    animation:fadeIn ease-in 1;

    -webkit-animation-fill-mode:forwards;
    -moz-animation-fill-mode:forwards;
    animation-fill-mode:forwards;

    -webkit-animation-duration:1s;
    -moz-animation-duration:1s;
    animation-duration:1s;
    }

    .fadeIn.first {
    -webkit-animation-delay: 0.4s;
    -moz-animation-delay: 0.4s;
    animation-delay: 0.4s;
    }

    .fadeIn.second {
    -webkit-animation-delay: 0.6s;
    -moz-animation-delay: 0.6s;
    animation-delay: 0.6s;
    }

    .fadeIn.third {
    -webkit-animation-delay: 0.8s;
    -moz-animation-delay: 0.8s;
    animation-delay: 0.8s;
    }

    .fadeIn.fourth {
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    animation-delay: 1s;
    }

    /* Simple CSS3 Fade-in Animation */
    .underlineHover:after {
    display: block;
    width: 0;
    height: 2px;
    background-color: #56baed;
    content: "";
    transition: width 0.2s;
    }

    .underlineHover:hover {
    color: #0d0d0d;
    }

    .underlineHover:hover:after{
    width: 100%;
    }



    /* OTHERS */

    *:focus {
        outline: none;
    } 

    #icon {
    width:30%;
    }

</style>
    <title>Document</title>
</head>
<body>
        <div class="wrapper fadeInDown zero-raduis">
                <div id="formContent">
                  <div class="fadeIn first">
                    <h2 class="my-5">Sign Up</h2>
                  </div>
                <div>
                    @if (count($errors)>0)
                        @foreach ($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    @endif
                </div>
                  <form action="/signup/store" method="post">
                {{ csrf_field() }}
                <div class="form-group {{$errors->has('name') ? 'has-error':''"></div>
                  <input type="text" id="name" class="fadeIn second zero-raduis" name="name" placeholder="username">
                    <input type="email" id="email" class="fadeIn second zero-raduis" name="email" placeholder="email">
                    <input type="password" id="password" class="fadeIn third zero-raduis" name="password" placeholder="password">
                    <input type="password" id="password_confirmation" class="fadeIn third zero-raduis" name="password_confirmation" placeholder="Confirm password">
                    <input type="submit" class="fadeIn fourth zero-raduis" value="Sign Up">
                  </form>
                @csrf
                </div>
          </div>
</body>
</html>
