?php

$con = mysqli_connect('localhost','root','')

if(!$con)
{
    echo "Not connected to Server"
}

if(!mysqli_select_db('$con','sutharya_kerala'))
{
    echo "DB not selected"
}





$e_departmentx = $_POST['E_dept']
$e_districtx = $_POST['E_dist']
$e_usernamex = $_POST['username']
$e_passwordx = $_POST['pass']


$sql = insert into emp_login(e_username,e_password,e_department,e_district) values($e_usernamex,$e_passwordx,$e_departmentx,$e_districtx)

if(!mysqli_query*($con, sql))
{
    echo "Not inserted"

}
else
{
    echo "Inserted"
}

header("refresh:2; url=emp_login.html")


?>