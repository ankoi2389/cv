<?php
    $conn = mysqli_connect('localhost','root','','cv');
    if(!$conn)
        die("Kết nối thất bại");
?>

<!DOCTYPE html>
<html>
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
<script>
    
    $(document).ready(function(){
        $("#tb1").hide();
        $("#tb2").hide();
        $("#tb3").hide();
        $("#tb4").hide();
        $("#tb5").hide();
        $("#tb6").hide();
        $("#tb7").hide();
        $("button[value='value1']").click(function(){
            $("#tb1").show();
            $("#tb2").hide();
            $("#tb3").hide();
            $("#tb4").hide();
            $("#tb5").hide();
            $("#tb6").hide();
            $("#tb7").hide();
        })
        $("button[value='value2']").click(function(){
            $("#tb1").hide();
            $("#tb2").show();
            $("#tb3").hide();
            $("#tb4").hide();
            $("#tb5").hide();
            $("#tb6").hide();
            $("#tb7").hide();
        })
        $("button[value='value3']").click(function(){
            $("#tb1").hide();
            $("#tb2").hide();
            $("#tb3").show();
            $("#tb4").hide();
            $("#tb5").hide();
            $("#tb6").hide();
            $("#tb7").hide();
        })
        $("button[value='value4']").click(function(){
            $("#tb1").hide();
            $("#tb2").hide();
            $("#tb3").hide();
            $("#tb4").show();
            $("#tb5").hide();
            $("#tb6").hide();
            $("#tb7").hide();
        })
        $("button[value='value5']").click(function(){
            $("#tb1").hide();
            $("#tb2").hide();
            $("#tb3").hide();
            $("#tb4").hide();
            $("#tb5").show();
            $("#tb6").hide();
            $("#tb7").hide();
        })
        $("button[value='value6']").click(function(){
            $("#tb1").hide();
            $("#tb2").hide();
            $("#tb3").hide();
            $("#tb4").hide();
            $("#tb5").hide();
            $("#tb6").show();
            $("#tb7").hide();
        })
        $("button[value='value7']").click(function(){
            $("#tb1").hide();
            $("#tb2").hide();
            $("#tb3").hide();
            $("#tb4").hide();
            $("#tb5").hide();
            $("#tb6").hide();
            $("#tb7").show();
        })

    })
</script>
<style type="text/css">
    div{height:100px;margin-bottom:30px;}
    body{
        margin-top:50px;
        text-align:center;
    }
</style>
</head>
<body>
    <div>
        <button value="value1">Nền tảng</button>
        <button value="value2">Kỹ năng</button>
        <button value="value3">Kinh nghiệm</button>
        <button value="value4">Học vấn</button>
        <button value="value5">Khoá học</button>
        <button value="value6">Họ nói gì</button>
        <button value="value7">Liên lạc</button>
    </div>
    <table class="table" id="tb1">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nội dung</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
                    $sql = "SELECT * FROM mbg";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<th scope="row">'.$row['id_mbg'].'</th>'.
                    '<td>'.$row['content_mbg'].'</td>'; 
                    }
                    } 
                ?>
            </tr>
        </tbody>
    </table>
    <table class="table" id="tb2">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Kỹ năng</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                    $sql = "SELECT * FROM skills";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<tr><th scope="row">'.$row['id_skill'].'</th>'.
                    '<td>'.$row['content_skill'].'</td></tr>'; 
                    }
                    } 
                ?>
        </tbody>
    </table>
    <table class="table" id="tb3">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Dự án</th>
            <th scope="col">Thời gian</th>
            <th scope="col">Nội dung</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                    $sql = "SELECT * FROM work";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<tr><th scope="row">'.$row['id_work'].'</th>'.
                    '<td>'.$row['project'].'</td>'.
                    '<td>'.$row['time'].'</td>'.
                    '<td>'.$row['content_work'].'</td>'.'</tr>'; 
                    }
                    }
                ?>
        </tbody>
    </table>
    <table class="table" id="tb4">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tên trường</th>
            <th scope="col">Thời gian</th>
            <th scope="col">Nội dung</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                    $sql = "SELECT * FROM education";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<tr><th scope="row">'.$row['id_education'].'</th>'.
                    '<td>'.$row['name'].'</td>'.
                    '<td>'.$row['time'].'</td>'.
                    '<td>'.$row['content'].'</td>'.'</tr>'; 
                    }
                    } 
                ?>
        </tbody>
    </table>
    <table class="table" id="tb5">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tên khoá học</th>
            <th scope="col">Thời gian</th>
            <th scope="col">Nội dung</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                    $sql = "SELECT * FROM courses";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<tr><th scope="row">'.$row['id_courses'].'</th>'.
                    '<td>'.$row['name'].'</td>'.
                    '<td>'.$row['time'].'</td>'.
                    '<td>'.$row['content'].'</td>'.'</tr>'; 
                    }
                    }
                ?>
        </tbody>
    </table>
    <table class="table" id="tb6">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tên</th>
            <th scope="col">Nội dung</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                    $sql = "SELECT * FROM say";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<tr><th scope="row">'.$row['id_say'].'</th>'.
                    '<td>'.$row['name'].'</td>'.
                    '<td>'.$row['content'].'</td>'.'</tr>'; 
                    }
                    } 
                ?>
        </tbody>
    </table>
    <table class="table" id="tb7">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">Nội dung</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                    $sql = "SELECT * FROM talk";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<tr><th scope="row">'.$row['id_talk'].'</th>'.
                    '<td>'.$row['name'].'</td>'.
                    '<td>'.$row['your_email'].'</td>'.
                    '<td>'.$row['message'].'</td>'.'</tr>'; 
                    }
                    } 
                ?>
        </tbody>
    </table>
</body>
</html>