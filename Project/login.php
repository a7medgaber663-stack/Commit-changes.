<?php
$correct_username = "admin";
$correct_password = "1234";

$username = $_POST['username'];
$password = $_POST['password'];

echo "<link rel='stylesheet' href='style.css'>";
echo "<body><header><h1>����� ����� ������</h1></header><section>";

if ($username === $correct_username && $password === $correct_password) {
    echo "<p style='color:green;'>������ �� $username ���� ��� �� ����</p>";
    echo "<p><a href='index.html'>������ ��� ������ ��������</a></p>";
} else {
    echo "<p style='color:red;'>���: ��� �������� �� ���� ������ ��� �����.</p>";
    echo "<p><a href='login.html'>���� ��� ����</a></p>";
}

echo "</section><footer><p>���� ������ ������ &copy; 2025</p></footer></body>";
?>
