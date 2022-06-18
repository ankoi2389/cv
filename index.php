<?php
    $conn = mysqli_connect('localhost','root','','cv');
    if(!$conn)
        die("Kết nối thất bại");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <header class="header">
		<div class="header__container">
			<a class="navbar-brand" style="font-size:20px;" href="index.php">An</a>
            <div class="navbar-brand">
                <a class="btn" target="_self" href="#vt">VỀ TÔI</a>
                <a class="btn" target="_self" href="#kn">KINH NGHIỆM</a>
                <a class="btn" target="_self" href="#tn">TRẢI NGHIỆM</a>    
                <a class="btn" target="_self" href="#ll">LIÊN LẠC</a>
                <a href="login.php" class="btn btn-login ms-lg-3">Đăng nhập</a>
		</div>
	</header>
    <!-- <nav class="navbar navbar-expand-lg bg-white mt-3">
        <div class="container">
            <a class="navbar-brand" href="index.php">An</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" target="_self" href="#vt">VỀ TÔI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_self" href="#kn">KINH NGHIỆM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_self" href="#tn">TRẢI NGHIỆM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_self" href="#ll">LIÊN LẠC</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-login ms-lg-3">Đăng nhập</a>
            </div>
        </div>        
    </nav>     -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col">
                <h1><span>Hi, I am An, a student</h1></span><br><br>
                <button class="btn-email">Email me</button><br><br><br>
                <p><a href="https://www.facebook.com/ankoi2k1/" target="_blank">Facebook</a> / <a href="https://twitter.com/An46152671" target="_blank">Twitter</a></p>
            </div>
            <div class="col mt-5"><img src="Image/avatar.png" alt=""></div>
        </div>
    </div>
    <div class="container mt-5" id="vt" headerheight="400px" style="height:450px;">
        <div class="row">
            <div class="col-8 mt-5">
                <h6><strong>-NỀN TẢNG CỦA TÔI</strong></h6>
                <?php
                    $sql = "SELECT * FROM mbg";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<p>'.$row['content_mbg'].'</p><br>'; 
                    }
                    } else {
                    echo "0 results";
                    }
                ?>
            </div>
            <div class="col-4 mt-5">
                <h6><strong>-KỸ NĂNG</strong></h6>
                <?php
                    $sql = "SELECT * FROM skills";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<p>'.$row['content_skill'].'</p>'; 
                    }
                    } else {
                    echo "0 results";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col text-center">
            <img src="Image/avatar.png" alt="">
        </div>
        <div class="col text-center">
            <img src="Image/avatar.png" alt="">
        </div>
        <div class="col text-center">
            <img src="Image/avatar.png" alt="">
        </div>
    </div>
    <div class="container mt-5" id="kn">
        <div class="row">
            <div class="col-5">
                <h6><strong>-KINH NGHIỆM LÀM VIỆC</strong></h6>
            </div>
            <div class="col-7">
                <?php
                    $sql = "SELECT * FROM work";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<h5>'.$row['project'].'</h5>'.
                    '<p>'.$row['time'].'</p>'.
                    '<p>'.$row['content_work'].'</p>'; 
                    }
                    } else {
                    echo "0 results";
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <h6><strong>-HỌC VẤN</strong></h6>
            </div>
            <div class="col-7">
                <?php
                    $sql = "SELECT * FROM education";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<h5>'.$row['name'].'</h5>'.
                    '<p>'.$row['time'].'</p>'.
                    '<p>'.$row['content'].'</p>'; 
                    }
                    } else {
                    echo "0 results";
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <h6><strong>-CÁC KHOÁ HỌC</strong></h6>
            </div>
            <div class="col-7">
                <?php
                    $sql = "SELECT * FROM courses";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<h5>'.$row['name'].'</h5>'.
                    '<p>'.$row['time'].'</p>'.
                    '<p>'.$row['content'].'</p>'; 
                    }
                    } else {
                    echo "0 results";
                    }
                ?>
            </div>
        </div>
    </div>
    <div style="height:300px;background-color:#47467A;color:white"><br><br><br>
        <h4>“Bất cứ khi nào tôi ở trong một tình huống khó khăn dường như không có lối thoát, tôi nghĩ về tất cả những lần tôi đã ở trong những tình huống như vậy và tự nói với bản thân: Tôi đã làm điều đó trước đây, vì vậy tôi có thể làm lại.”</h4><br>
        <p style="margin-left: 290px;margin-right: 750px;">- Idowu Koyenikan</p>
    </div>
    <div class="container mt-5" id="tn">
        <div class="row mt-5"><h2>Họ nói gì:</h2></div>
        <div class="row">
                <?php
                    $sql = "SELECT * FROM say";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo '<div class="col-4">'.'<br>'.'<img src="Image/'.$row['image'].'>'.'</div>'.'<div class="col-8"><h6>'.$row['name'].'</h6>'.
                    '<p>'.$row['content'].'</p></div>'; 
                    }
                    } else {
                    echo "0 results";
                    }
                ?>
            <!-- <div class="col-4">
                <br><img src="Image/tn1.png" alt="">
            </div>
            <div class="col-8">
            </div> -->
        </div>
        <!-- <div class="row">
            <div class="col-4">
                <br><img src="Image/tn2.png" alt="">
            </div>
            <div class="col-8">
                <br><h6>-JEREMY WATSON</h6>
                <p>Chúng tôi đã làm việc trong nhiều dự án cùng với Brooke tại Stilltech và cô ấy là một tài sản đích thực đối với bất kỳ nhóm nào. Cô ấy là một cầu thủ của đội, nhưng hãy suy nghĩ trên đôi chân của mình và không bao giờ quyết định cho một không. Tham vọng và niềm đam mê của cô ấy đối với những gì cô ấy làm là thật kỳ lạ, và thật vui khi thấy cô ấy tiến bộ và ngày càng tự tin hơn trong vai trò chuyên môn của mình theo thời gian. Tôi hoàn toàn đề xuất cô ấy cho bất kỳ vai trò lãnh đạo hoặc quản lý dự án nào.</p>
            </div>
        </div> -->
    </div>
    <div class="container mt-5" id="ll">
        <div class="row align-items-center">
            <div class="col">
                <h2>Liên lạc</h2>
                <label for="">Tên</label><br>
                <input type="text" class="form-control" placeholder="Nhập tên" tabindex="0" aria-describedby="inputGroup-sizing-lg">
                <label for="">Email</label><br>
                <input type="email" class="form-control" placeholder="Nhập email" tabindex="1" aria-describedby="inputGroup-sizing-lg">
                <label for="">Tin nhắn</label><br>
                <input type="text" class="form-control" placeholder="Nhập nội dung" tabindex="0" aria-describedby="inputGroup-sizing-sm"><br>
                <button class="btn-submit">Gửi</button>
            </div>
            <div class="col">
                <img src="Image/avatar.png" alt="">
            </div>
        </div>
    </div>
    <div style="height:300px;background-color:#47467A;color:white"><br><br><br>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h2>An</h2>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                        <h6>-Xã hội</h6>
                        <a href="" style="color:white">facebook</a><br>
                        <a href="" style="color:white">twitter</a>
                        </div>
                        <div class="col">
                            <h6>-Liên lạc</h6>
                            <a href="" style="color:white">an123@gmail.com</a><br>
                            <a href="" style="color:white">0123456789</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>