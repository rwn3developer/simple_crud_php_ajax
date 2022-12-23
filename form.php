<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Valiodation form</h2>
  <form action="">
  <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="email">
      <span style="color:red" id="nameerr"></span>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      <span style="color:red" id="emailerr"></span>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="pwd">
      <span style="color:red" id="passworderr"></span>
    </div>

    <div class="form-group">
      <label for="pwd">Phone:</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="pwd">
      <span style="color:red" id="phoneerr"></span>
    </div>
    
    <button type="button" onclick="save()" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>


<script type="text/javascript">

function save()
{
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var phone = document.getElementById('phone').value;

    if(name == "")
    {
        document.getElementById('nameerr').innerHTML = "Name fill required";
       

    }
    else{
        document.getElementById('name').style.border = "1px solid green";
    }

    if(email == "")
    {
        document.getElementById('emailerr').innerHTML = "Email fill required";
    }

    if(password == "")
    {
        document.getElementById('passworderr').innerHTML = "Password fill required";
    }

    if(phone == "")
    {
        document.getElementById('phoneerr').innerHTML = "Phone fill required";
    }
    
}
    

</script>