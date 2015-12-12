<html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css\materialize.css" rel="stylesheet" type="text/css"  >
    <link href="css\custom.css" rel="stylesheet" type="text/css" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js\jquery-1.11.3.min.js"></script>
    <script src="js\materialize.js"></script>
 </head>
 <body class="bg login">
      <div class="container">
      <div class="row">
          <div class="col m8">
              <div class="container">
              <div class="row">
                  <form class="col m12">
                    <div class="row">
                        <h1 class ="flow-text"> Sign up </h1>
                      <div class="input-field col s6">
                        <input  id="Name" type="text" class="validate">
                        <label for="Name">Name</label>
                  </div></div>
                  <div class="row">
                      <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="email">email</label>
                      </div>
                        <div class="input-field col s6">
                          <input id="password" type="password" class="validate">
                          <label for="email">Password</label>
                          </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s4">
                        <input id="date" type="date" class="validate">
                        <label for="Date of birth">Date of birth</label>
                    </div>
                        <div class="input-field col s4">
                          <input  id="mobile" type="text" class="validate" >
                          <label for="mobile no">Mobile no</label>
                      </div>

                    </div>
                    <div class="row">
                      <div class="input-field col s2">
                        <input id="uid1" type="text" class="validate" placeholder="XXXX">
                        <label for="uid1">Aadhar id UID</label>
                        </div>


                      <div class="input-field col s2">
                        <input id="uid2" type="text" class="validate" placeholder="XXXX">
                        <label for="uid2 "> </label>
                    </div>
                      <div class="input-field col s2">
                        <input id="uid3" type="text" class="validate" placeholder="XXXX">
                        <label for="uid3"></label>
                        </div>
                      <div class="input-field col s2">
                        <input id="uid4" type="text" class="validate" placeholder="XXXX">
                        <label for="uid4"></label>
                        </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input  id="address" type="text" class="validate" placeholder="line1">
                        <label for="Name">Address </label>
                      </div>
                      <div class="input-field col s6">
                        <input  id="address" type="text" class="validate" placeholder="line2">
                        <label for="Name">Address</label>
                      </div>
                      <div class="input-field col s6">
                        <input  id="city" type="text" class="validate" >
                        <label for="city "> City</label>
                      </div>
                      <div class="input-field col s6">
                        <input  id="state" type="text" class="validate" >
                        <label for="state ">State</label>
                        <button class="btn waves-effect waves-light blue" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
                      </div>
                  </div>
              </div>
                  </form>
                </div>
          </div>
          <div class="col m4">
<form action="">
    <br> <br> <br> <br> <br> <br>
    <h1 class ="flow-text"> Sign in</h1>
              <div class="rstack">
                <i class="material-icons">perm_identity</i>
               <input type="text" name="name" placeholder="User Name">
              </div>
              <div class="rstack">
                 <i class="material-icons">lock_open</i>
                 <input type="password" name="pass" Placeholder="password"></div>
                 <a class="waves-effect waves-teal btn btn1 orange lighten-2" href="signup.php">SIGN UP</a>
              <a class="waves-effect waves-light btn  btn2 orange lighten-2">SIGN IN</a>
              <br><br>
    </form>
</div>

</div>
</div>
 </body>
</html>
