<?php

include("connection.php");
$room = $_POST['room'];

if(strlen($room)>15 or strlen($room)<2)
{
$msg="please choose Room name between 2 to 15 characters";

echo '<script language="javascript">';
echo 'alert("'.$msg.'");';
echo 'window.location="http://localhost/chat%20system/";';
echo '</script>';
}


$query ="SELECT * FROM rooms WHERE roomname='$room'";
$result =mysqli_query($conn,$query);

if($result)

{
if(mysqli_num_rows($result)>0)
{

$msg="Room already in use!. please choose a different room name";


echo '<script language="javascript">';
echo 'alert("'.$msg.'");';
echo 'window.location="http://localhost/chat%20system/";';
echo '</script>';
}
else
{
$query ="INSERT INTO rooms(roomname,ctime) VALUES('$room', CURRENT_TIMESTAMP)";
if(mysqli_query($conn,$query))
{
$msg="Your Room is ready for Chat";


echo '<script language="javascript">';
echo 'alert("'.$msg.'");';
echo 'window.location="http://localhost/chat system/rooms.php?roomname='.$room.'";';
echo '</script>';
}
}

}
else
{
echo"ERROR!".mysqli_error($conn);

}

?>