<?php 
$firstName = $POST ['firstName'];
$lastName = $POST ['lastName'];
$mobileNo = $POST ['mobileNo'];
$gender = $POST ['gender'];
$dOb = $POST ['dOb'];
$email = $POST ['email'];
$district = $POST ['district'];
$exprnc = $POST ['exprnc'];
$educat = $POST ['educat'];

$conn = new mysqli ('localhost','root','3306','rassalk');
if(&conn->connect_error){
    die ('Connection Failed : ' .$conn->connect_error);

}else {
    $stmt = conn->prepare(insert into register ( firstName, lastName, mobileNo, gender, dOb, email, district, exprnc, educat) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?));
    $stmt->bind_param("ssisissis", $firstName, $lastName, $mobileNo, $gender, $dOb, $email, $district, $exprnc, $educat);
    $stmt->execute();
    echo "Registration Successfully..." ;
    $stmt-> close();
    $conn->close();
}
?>