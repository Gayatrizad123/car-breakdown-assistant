<html>
<head>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<link rel="stylesheet" type="text/css" href="uregstyle.css">
</head>
<body style="background-image:url('wall6.jfif'); background-repeat :repeat;background-size:  100%">
<div class="body-content">
  <div class="module">
    <h1 style="color:   black">Create an Mechanic Account</h1>

    <form class="form" action="insertmech.php" method="post" autocomplete="off" onsubmit="" name="myform">

      <div class="alert alert-error"></div>

      <input type="text" placeholder="Licence ID" name="userid" required style="background-color:  black; text-decoration-color:   black" />

      <input type="text" placeholder="Enter UserName" name="username" required style="background-color:  black; text-decoration-color:   black" />

      <input type="text"  placeholder="Enter Mobile Number" name= "mobile" required style="background-color:  black; text-decoration-color:   black" />

      <input type="email" placeholder="Enter Email  ID" name="email" required style="background-color:  black; text-decoration-color:   black" />

      <select name="location" type="text" style="color: rgba(255, 255, 255, 0.7);">

        <option value="" style="color: rgba(255, 255, 255, 0.7);">select location</option>
        <option value="pune">Pune</option>
        <option value="Pimpri">Pimpri</option>
        <option value="chinchwad">Chinchwad
          </option> 
        </select>

      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required style="background-color:  black; text-decoration-color:   black" />

      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required style="background-color:  black; text-decoration-color:   black" />

      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</body>
</html>