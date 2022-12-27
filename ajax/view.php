<?php 

    $con = mysqli_connect("localhost","root","","adminpanel8am");

    $se = mysqli_query($con,"SELECT * FROM `ajax`");

    $data = "";

    // $data .= "
    //             <input type='text' id='serchname' onkeyup='searchname()'/>
    //         ";

    $data .= "<tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Action</td>

              </tr>";

    while($row = mysqli_fetch_array($se))
    {
            $data .= "<tr>
                         <td>".$row['name']."</td>
                         <td>".$row['email']."</td>
                         <td>".$row['password']."</td>
                         <td>
                            <a href='javascript:deletedata(".$row['id'].")'>Delete</a> ||
                            <a href='javascript:editdata(".$row['id'].")'>Edit</a
                        <td>
                     </tr>";
    }

    echo $data;
?>