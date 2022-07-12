<?php
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['message'];

    $email_array = explode('@', $email);

    if ($email_array[1]=='student.uni-pr.edu')
    {
        $to='andi.hasanaj@student.uni-pr.edu';
    }else
    {
        $to='altin.musliu@student.uni-pr.edu';
    }
    $subject='Form Submission';
    $email_implode=implode('@',$email_array);
    $message="Name: ".$name."\n"."Phone :".$phone."\n"."Wrote the following: "."\n\n".$msg."From: ".$email_implode;
    $headers="From: ".$email;

    if(mail($to,$subject,$message,$headers)){
        echo "<h1>Sent successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
    }
    else{
        echo "Something went wrong";
    }
}
?>

