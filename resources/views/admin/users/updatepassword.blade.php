<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
<style>
    body {
        margin-bottom: 0px;
        padding-bottom: 0px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #4CAF50;
        color: white;
    }

    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    #button1 {
        background-color: #4CAF50;
    }

    /* Green */
    #button2 {
        background-color: #008CBA;
    }

    /* Blue */
    #button3 {
        background-color: #f44336;
    }

    /* Red */



    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
    .error
  {
      background-color:#f2DEDE;
      color: #A94442;
      padding:10px;
      width: 95%;
      border-radius:5px ;
      margin:  20x auto;
  }
  .secuess
  {
    background-color: #32c353b3;
    color: #fff;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
  }
    </style>
</head>

<body>
@include('admin.layout.menu')
    <div class="container-login100">
@include('admin.layout.messages')
        <div style="background-color:#FFF; width:80%;
       padding:10%;
      height:50%">
            <form action="{{ route('update-password.update',$users) }}" method="POST" class="login100-form validate-form">
                @csrf
                @method('PATCH')
                <span class="login100-form-title p-b-59">
                   Update Password Admin
                </span>




                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Current Password </span>
                    <input class="input100" type="password"  name="oldpassword" placeholder="Current Password...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">New Password</span>
                    <input class="input100" type="password"  name="password" placeholder="New Password...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <span class="label-input100">Confirm Password</span>
                    <input class="input100" type="password"  name="password_confirmation" placeholder="Confirm Password...">
                    <span class="focus-input100"></span>
                </div>



                <button   name="change" class="login100-form-btn">
								Change Password
							</button>


                </div>



                </div>
            </form>
        </div>
    </div>
    </div>
@include('admin.layout.footer')
</body>

</html>
