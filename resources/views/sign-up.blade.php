<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sign Up</h5>
          <form action="/signup" method="post" id="form">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label for="VerifyPassword">Verify Password</label>
              <input type="password" class="form-control" id="VerifyPassword" name="VerifyPassword" placeholder="Verify Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    document.getElementById('form').addEventListener('submit',(a)=>{
        a.preventDefault();
        let password = document.getElementById('password').value;
        let verify =document.getElementById('VerifyPassword').value;
        if (password===verify){
          document.getElementById('form').submit();
        }else {
            alert("password doesn't match");
            false;
        }
    })
</script>

</body>
</html>
