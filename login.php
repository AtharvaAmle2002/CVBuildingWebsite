<html>
<head>
    <title>User Login and Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
      <div class="login-box">
      <div class="row">
      <div class="col-md-6 Login-left">
          <h2>Login here</h2>
          <form action="validation.php" method="post">
              <div class="form-group">
                  <lable>Username</lable>
                  <input type="text" name="user" class="form-control" required>
               </div>
               <div class="form-group">
                   <lable>Password</lable>
                   <input type="password" name="password" class="form-control" required>
               </div>
               <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
<div class="col-md-6 Login-right">
          <h2>Register here</h2>
          <form action="registration.php" method="post">
              <div class="form-group">
                  <lable>Username</lable>
                  <input type="text" name="user" class="form-control" required>
               </div>
               <div class="form-group">
                   <lable>Password</lable>
                   <input type="password" name="password" class="form-control" required>
               </div>
               <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div> 
</div>
</div>        
</body>
</html>