<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8" />
    <title>Kho lưu trữ</title>
    <link rel="stylesheet" href="NewFolder/Find.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <header>
        <div class="heading">
            <div class="right">
                <div class="logo">
                    <img href="#" src="img/logo.png" alt="Logo"
                        class="img_logo" />
                </div>
            </div>
            <div class="map">
                <h1>Kho lưu trữ của bạn</h1>
            </div>
            <div class="center">
                <input class="find" type="text" name="find" placeholder="Nhập tên file muốn tìm..." formmethod="post"/>
                <input class="findbtn" type="submit" value="Tìm" />
            </div>
            <div class="left">
                <div class="avatar">
                    <img href="#" src="img/img_avatar.png" alt="Avatar"
                        class="avatar_user" />
                    <div class="dropdown-content">
                        <form action="Personal.php">
                            <button class="btn1">T.T Cá nhân</button>
                        </form>
                        <form action="HomePage.php">
                            <button class="btn1">Đăng xuất</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="left_main">
            <form action="AddFile.php">
                <button class="add" name="button" type="submit">
                    <i class="fa fa-upload"> Tải tệp lên</i>
                </button>
            </form>

            <form action="Storage.php">
                <button class="storage" name="button" type="submit">
                    <i class="fa fa-image"> Kho lưu trữ</i>
                </button>
            </form>
            <form action="Trash.php">
                <button class="trash" name="button" type="submit">
                    <i class="fa fa-trash"> Thùng rác</i>
                </button>
            </form>
            <button class="cloud" name="button" type="submit">
                <i class="fa fa-cloud"> Bộ nhớ</i>
            </button>
        </div>
        <hr />
        <div class="bang">
            <table border=1 cellspacing=0 cellpading=0 class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên file</th>
                        <th>Kích thước</th>
                        <th>Ngày tải lên</th>
                        <th>Lựa chọn</th>
                    </tr>
                </thead>
                <tbody class="table2">
                    <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "data";

                            // tạo kết nối
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // kiểm kết nối
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $FileName=var_dump($POST);
                            $sql = "SELECT ID, FileName, Size, DateUp FROM Storage WHERE $FileName=FileName";


                                echo "<table border=1 cellspacing=0 cellpading=0>
                                          <tr>
                                               <td class=a1>ID</td>
                                               <td>FileName</td>
                                               <td>Size</td>
                                               <td>DateUp</td>
                                               <td>
                                                   <a href=download/acme-doc-2.0.1.txt download=# class=link2>Tải về</a>
                                                   <form action=Storage.php>
                                                       <button class=btn9>
                                                            <b>Xóa</b>
                                                            $ID=$row;
                                                            $FileName=FileName;
                                                            $Size=Size;
                                                            $DateUp=DateUp;
                                                            $sql = INSERT INTO Trash (ID, FileName, Size, DateUp) VALUES ($ID, $FileName, $Size, $DateUp)
                                                            $sql2 = DELETE FROM Storage WHERE ID=$row;
                                                            if (mysqli_query($conn, $sql2)) {
                                                               echo Xóa thành công;
                                                            }
                                                       </button>
                                                   </form>
                                               </td>
                                          </tr>
                                      </table>";

                    ?>
                </tbody>
            </table>
        </div>

        <div class="pagination">
            <a href="#">«</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">»</a>
        </div>
    </main>
    <footer class="dark">
        <div class="div_middle">
            <div class="left">
                <p class="link">Liên hệ Email: 19T1021119@husc.edu.vn</p>
            </div>
            <div class="right">
                <p>
                    Mọi thông tin và hình ảnh trên website đều được sưu tầm trên Internet. Chúng tôi không sở hữu hay
                            chịu trách nhiệm bất kỳ thông tin nào trên web này. Nếu làm ảnh hưởng đến cá nhân hay tổ chức
                            nào, khi được yêu cầu, chúng tôi sẽ xem xét và gỡ bỏ ngay lập tức.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>