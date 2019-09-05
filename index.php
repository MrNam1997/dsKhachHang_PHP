<?php
$customerlist = [
    ["ten" => "Mai Văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Hà Nội",
        "anh" => "img/img1.jpg"],
    ["ten" => "Nguyễn Văn Nam",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Bắc Giang",
        "anh" => "img/img1.jpg"],
    ["ten" => "Nguyễn Thái Hòa",
        "ngaysinh" => "1983-08-21",
        "diachi" => "Nam Định",
        "anh" => "img/img1.jpg"],
    ["ten" => "Trần Đăng Khoa",
        "ngaysinh" => "1983-08-22",
        "diachi" => "Hà Tây",
        "anh" => "img/img1.jpg"],
    ["ten" => "Nguyễn Đình Thi",
        "ngaysinh" => "1983-08-17",
        "diachi" => "Hà Nội",
        "anh" => "img/img1.jpg"]
];
?>

<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    foreach ($customerlist as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value['ten'] . "</td>";
        echo "<td>" . $value['ngaysinh'] . "</td>";
        echo "<td>" . $value['diachi'] . "</td>";
        echo "<td><image src ='" . $value['anh'] . "' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>



