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
  <h2>Ajax</h2>
  <form action="/action_page.php">
    <input type="hidden" id="editid" />
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password">
    </div>
    <button type="button" onclick="save()" class="btn btn-default">Submit</button>
  </form><br><br>

  <table class="table" border="1" id="show">

 </table>

</div>




</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">

    viewdata();

    function viewdata(){
        $.ajax({
            type : "GET",
            url : 'view.php',
            success:function(res){
                document.getElementById('show').innerHTML = res;
            }
        })
    }
    function save() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        $.ajax({
                    type: "POST",
                    url: "insert.php",
                    data: {
                        name : name,
                        email : email,
                        password : password
                    },
                    success: function(data) {
                       alert("Record successfully add");
                       document.getElementById('name').value = "";
                       document.getElementById('email').value = "";
                       document.getElementById('password').value = "";
                       viewdata();
                    }
                });
    }
    function deletedata($id)
    {
        $.ajax({
            type : "POST",
            url : "delete.php",
            data : {
                id : $id
            },
            success:function(res){
              alert("record successfully delete");
              viewdata();
            }
        });
    }

    function editdata($id)
    {
        $.ajax({
          type : "POST",
          dataType: 'json',
          url : "edit.php",
          data : {
              id : $id
          },
          success:function(res){
            
            document.getElementById('editid').value = res.id;
            document.getElementById('name').value = res.name;
            document.getElementById('email').value = res.email;
            document.getElementById('password').value = res.password;
          }
        })
    }

</script>
