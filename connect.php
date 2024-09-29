<?php
$servername = "localhost"; // الخاص بالسيرفر ip إسم السيرفر أو 
$username = "username";    // إسم المستخدم الخاص بقاعدة البيانات
$password = "password";    // كلمة المرور الخاصة بقاعدة البيانات
// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password);
// $conn هذا المتغير الخاص بالاتصال سوف نحتاجه في اي عملية نرغب بإجرائها على قاعدة البيانات
// التأكد من عملية الاتصال بسيرفر قاعدة البيانات 
if ($conn->connect_error)
{
    echo "توجد مشكلة في الاتصال: " . $conn->connect_error;
}
else
{
    echo "تم الاتصال بنجاح";
}
?>