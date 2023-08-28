<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="themify-icons/themify-icons.css">

</head>
<body>
    <nav id="header">
        <div class="nav-container center-container">
            <div class="brand">
                <img src="images/comic-text-effect-background_92086-501.png" alt="">
            </div>
            <div class="search-input">
                <input type="text" placeholder="Tìm truyện">
                <div class="ti-search"></div>
            </div>
            <div class="nav-icon">
                <button onclick="openSlideshowForm()">Bộ sưu tập truyện</button>
            </div>
            <div class="gift-btn">
                <button  onclick="openDonateForm()">Quà tặng</button>
            </div>
            <div class="sign">
                <a  onclick="openLoginForm()">Đăng Nhập
                </a>
                <span style="color: black;">/</span>
                <a href="./register.php">Đăng Ký</a>
            </div>
        </div>
    </nav>
    <nav class="nav-selection">
        <li class="selection-item">
            <a href="">HOT</a>
        </li>
        <li class="selection-item selection-rank">
            <a href="">XẾP HẠNG</a>
            <div class="rank-menu">
                <div class="rank"><a href="">Top Tuần</a></div>
                <div class="rank"><a href="">Top Follow</a></div>
                <div class="rank"><a href="">Top Ngày</a></div>
                <div class="rank"><a href="">Top Tháng</a></div>
            </div>
        </li>

        <li class="selection-item selection-type">
            <a href="">THỂ LOẠI</a>
            <div class="type-menu">
                <div class="type"><a href="">Tất cả</a></div>
                <div class="type"><a href="">Action</a></div>
                <div class="type"><a href="">Fantasy</a></div>
                <div class="type"><a href="">Mecha</a></div>
                <div class="type"><a href="">Chuyển sinh</a></div>
                <div class="type"><a href="">Kỳ Ảo</a></div>
                <div class="type"><a href="">Đô Thị</a></div>
                <div class="type"><a href="">Đồng Nhân</a></div>
                <div class="type"><a href="">Võng Du</a></div>
                <div class="type"><a href="">Cổ đại</a></div>
                <div class="type"><a href="">Huyền Huyễn</a></div>
                <div class="type"><a href="">Tiên Hiệp</a></div>
                <div class="type"><a href="">Điềm Đạm</a></div>
                <div class="type"><a href="">Học Đường</a></div>
                <div class="type"><a href="">Nhiệt Huyết</a></div>
                <div class="type"><a href="">Lãnh Khốc</a></div>
                <div class="type"><a href="">Xuyên Không</a></div>
                <div class="type"><a href="">Lịch sử</a></div>
            </div>
        </li>
        <li class="selection-item">
            <a href="">THEO DÕI</a>
        </li>
        <li class="selection-item">
            <a href="">LỊCH SỬ</a>
        </li>
        <li class="selection-item">
            <a href="">LỌC</a>
        </li>
    </nav>
    <!-- Popup slideshow -->

    <!-- Phần Nội Dung -->
    <div id="content" class="container">
        <div id="form-slideShow" class="popup_img_collection">
            <img id="image" src="./images/slideshow0.jpg" alt="Anime Wallpaper">
            <button class="btn_prev" onclick="prev()">&lt;</button>
            <button class="btn_next" onclick="next()">&gt;</button>
            <p id="image-info">Image <span id="image-index">1</span> of <span id="total-images">10</span></p>
        </div>
        <div id="list-novel">
            <div class="leftcolumn col70 mtop20">
                <h3 class="title">TRUYỆN ĐỀ CỬ </h3>
                <div class="card-news">
                    <a class="col30"><img src="images/img-w0.jpg" alt=""></a>
                    <p class=" novel-name col70 ">Nguyên Tôn</p>
                    <p class="novel-describe col70 ">Trì Dao Nữ Hoàng —— thống ngự thiên hạ, uy lâm bát phương; thanh xuân mãi mãi, bất tử bất diệt. Trương Nhược Trần đứng ở Chư Hoàng Từ Đường ở ngoài, nhìn Trì Dao Nữ Hoàng tượng thần, trong lòng bốc cháy lên hừng hực cừu hận liệt diễm, "Đợi ta trùng tu mười ba năm, dám gọi Nữ Hoàng dưới Hoàng Tuyền" .</p>
                    <p class="novel-creator col70 "> <i class="ti-user"></i>Thiên Tàm Thổ Đậu</p>
                </div>
                <div class="card-news">
                    <a class="col30"><img src="images/img-w1.jpg" alt=""></a>
                    <p class=" novel-name col70 ">Tiên Ngịch</p>
                    <p class="novel-describe col70 ">800 năm trước, Minh Đế chi tử Trương Nhược Trần, bị vị hôn thê của hắn Trì Dao công chúa giết chết, thiên kiêu một đời, liền như vậy ngã xuống. Tám trăm năm sau, Trương Nhược Trần một lần nữa sống lại, lại phát hiện vị hôn thê đã từng giết chết hắn, đã thống nhất Côn Lôn Giới, mở ra Đệ Nhất Trung Ương đế quốc, được xưng "Trì Dao Nữ Hoàng" .</p>
                    <p class="novel-creator col70 "> <i class="ti-user"></i>Vong Ngữ</p>
                </div>
                <div class="card-news">
                    <a class="col30"><img src="images/img-w2.jpg" alt=""></a>
                    <p class=" novel-name col70 ">Đại Càn Trường Sinh</p>
                    <p class="novel-describe col70 ">【 ngự thú + máy mô phỏng + nhẹ nhõm + học viện + tiến hóa + tạm thời chưa có nữ chính 
                        Toàn dân ngự thú thời đại, người người đều có chuyên môn thiên phú.
                        Tiền thân là tân thủ phế nhất thiên phú "Viễn cổ ký ức" .
                        </p>
                    <p class="novel-creator col70 "> <i class="ti-user"></i>Nhất Định Yếu Gia Du</p>
                </div>
                <div class="card-news">
                    <a class="col30"><img src="images/img-w3.jpg" alt=""></a>
                    <p class=" novel-name col70 ">Khấu Vấn Tiên Đạo</p>
                    <p class="novel-describe col70 ">Sau khi xuyên việt lại thức tỉnh kim thủ chỉ "Ngự thú máy mô phỏng" .
                        Giờ khắc này lên! Mô phỏng Thượng Cổ thời đại, kích hoạt nguyên sơ huyết mạch.
                        Sủng thú kĩ năng thiên phú tiến hóa lộ tuyến, ta toàn diện đều muốn!
                        Tiểu Hải Báo bắt đầu, cũng có thể nuôi ra Thủy tổ Long Côn.</p>
                    <p class="novel-creator col70 "> <i class="ti-user"></i>Quân Khinh Ngữ</p>
                </div>
                <div class="card-news">
                    <a class="col30"><img src="images/img-w4.jpg" alt=""></a>
                    <p class=" novel-name col70 ">Thanh Liên Chi Đỉnh</p>
                    <p class="novel-describe col70 ">Ngàn năm sau, Vân Thần chuyển thế trùng sinh Huyền Thiên giới, một khi trọng sinh, thiên phú có một không hai thiên hạ, đến vô thượng đạo thống, tu nghịch thiên thần thông, trảm cường giả, diệt Vương giả, tru Thánh giả, thành tựu Vạn Cổ Thánh Vương.</p>
                    <p class="novel-creator col70 "> <i class="ti-user"></i>A Trư Bội Kỳ</p>
                </div>
                <div class="card-news">
                    <a class="col30"><img src="images/img-w5.jpg" alt=""></a>
                    <p class=" novel-name col70 ">Yêu Long Cổ Đế</p>
                    <p class="novel-describe col70 ">Tiểu Linh Hầu bắt đầu, cũng có thể nuôi ra Tề Thiên Đại Thánh
                        Tiểu Tế Cẩu bắt đầu, cũng có thể nuôi ra Côn Luân Khuyển Thần.
                        Tiểu Sắc Cáp bắt đầu, cũng có thể nuôi ra Tinh Không Vực Chủ.
                        </p>
                    <p class="novel-creator col70 "> <i class="ti-user"></i>Diêu Vọng Nam Sơn</p>
                </div>
                <div class="card-news">
                    <a class="col30"><img src="images/img-w6.jpg" alt=""></a>
                    <p class=" novel-name col70 ">Ta Có Nhất Kiếm</p>
                    <p class="novel-describe col70 ">Tiểu Thảo Thỏ bắt đầu, cũng có thể nuôi ra Nguyệt Thần Thỏ Tiên.
                        Toàn viên Cổ Thần thú cấp! Không có nghịch thiên nhất, chỉ có càng nghịch thiên! 
                        PS: Ban đầu sủng thú là một con Tiểu Hải Báo _(:3 ⌒ﾞ)_</p>
                    <p class="novel-creator col70 "> <i class="ti-user"></i>Hiểu Bình Quả</p>
                </div>
                <div class="card-news">
                    <a class="col30"><img src="images/img-w7.jpg" alt=""></a>
                    <p class=" novel-name col70 ">Thần Bí Phần Cuối</p>
                    <p class="novel-describe col70 ">Huyền Thiên giới, vạn tộc san sát, thiên kiêu như mây.
                        Võ giả giận dữ sơn hà phá, Vương giả giận dữ thiên địa biến, Thánh giả giận dữ thương sinh diệt.
                        Ngàn năm trước, cửu trọng thiên Đại thế giới tuyệt thế thiên tài Vân Thần thần bí vẫn lạc.</p>
                    <p class="novel-creator col70 "> <i class="ti-user"></i>
                        Tất Hoả</p>
                </div>
            </div>

            <div class="rightcolumn col30 mtop20">
                <h3 class="title">ĐANG ĐỌC</h3>
                <div class="card-read">
                    <a class="col25"><img src="images/img-w8.jpg" alt=""></a>
                    <p class=" novel-name">Vạn Cổ Thần Đế</p>
                    <p class="chapter-readed">Đã đọc: 123/1006</p>
                </div>
                <div class="card-read">
                    <a class="col25"><img src="images/img-w9.jpg" alt=""></a>
                    <p class="novel-name">Đế Bá</p>
                    <p class="chapter-readed">Đã đọc: 245/946</p>
                </div>
                <div class="card-read">
                    <a class="col25"><img src="images/img-w10.jpg" alt=""></a>
                    <p class=" novel-name">Linh Hồn Quan Miện</p>
                    <p class="chapter-readed">Đã đọc: 211/557</p>
                </div>
                <div class="card-read">
                    <a class="col25"><img src="images/img-w11.jpg" alt=""></a>
                    <p class=" novel-name">Nguyên Tôn</p>
                    <p class="chapter-readed">Đã đọc: 289/1423</p>
                </div>
                <div class="card-read">
                    <a class="col25"><img src="images/img-w12.jpg" alt=""></a>
                    <p class=" novel-name">Vô Thượng Thần Đế</p>
                    <p class="chapter-readed">Đã đọc: 1003/1456</p>
                </div>
                <div class="card-read">
                    <a class="col25"><img src="images/img-w13.jpg" alt=""></a>
                    <p class=" novel-name">Phàm Nhân Tu Tiên</p>
                    <p class="chapter-readed">Đã đọc: 555/872</p>
                </div>

            </div>
            <div class="main-content mtop50">
                <h3 class="title">MỚI CẬP NHẬT</h3>
                <div class="list-main-content">
                    <div class="list-novel-type pright10 col10">
                        <p class="novel-type">Đô Thị</p>
                        <p class="novel-type">Võng Du</p>
                        <p class="novel-type">Tiên Hiệp</p>
                        <p class="novel-type">Tiên Hiệp</p>
                        <p class="novel-type">Kỳ Ảo</p>
                        <p class="novel-type">Đồng Nhân</p>
                        <p class="novel-type">Tiên Hiệp</p>
                        <p class="novel-type">Huyền Huyễn</p>
                        <p class="novel-type">Tiên Hiệp</p>
                        <p class="novel-type">Tiên Hiệp</p>
                    </div>
                    <div class="list-novel-name pright30 col30">
                        <p class="novel-name">Ta Tại Trấn Yêu Ti Bên Trong Ăn Yêu Quái</p>
                        <p class="novel-name">Ta Ở Huyền Vũ Trên Lưng Xây Gia Viên</p>
                        <p class="novel-name">Ta Mô Phỏng Trường Sinh Lộ</p>
                        <p class="novel-name">Cẩu Tại Yêu Võ Loạn Thế Tu Tiên</p>
                        <p class="novel-name">Người Ở Tu Tiên Giới, Gia Nhập Vào Võ Hiệp Group Chat</p>
                        <p class="novel-name">Hảo Hữu Tử Vong: Ta Tu Vi Lại Tăng Lên</p>
                        <p class="novel-name">Tu Tiên Từ Tổ Tiên Hiển Linh Bắt Đầu</p>
                        <p class="novel-name">Bị Ma Nữ Phụ Thể Sau Đó, Ta Trở Thành Ngoài Vòng Pháp Luật Cuồng Đồ</p>
                        <p class="novel-name">Thừa Long Tiên Tế</p>
                        <p class="novel-name">Thiên Đạo Hôm Nay Không Đi Làm</p>

                    </div>
                    <div class="list-novel-chapter pright30 col30">
                        <p class="novel-chapter">Chương 448: Tiềm lực bóp chết</p>
                        <p class="novel-chapter">Chương 465: Tiềm hành cứu viện</p>
                        <p class="novel-chapter">Chương 935: Tuyệt cảnh cường giả ra</p>
                        <p class="novel-chapter">Chương 1784: Màu xám Kiếp Lôi</p>
                        <p class="novel-chapter">Chương 836: Bồng Lai nơi quy tụ? 【 hai hợp một 】</p>
                        <p class="novel-chapter">Chương 352: Triều đình binh quyền</p>
                        <p class="novel-chapter">Chương 615: Năm năm! Ngươi biết năm năm này ta là thế nào qua sao!</p>
                        <p class="novel-chapter">Chương 1008: Giằng co</p>
                        <p class="novel-chapter">Chương 335: Biết chuột đạt lễ</p>
                        <p class="novel-chapter">Chương 31: Dưỡng thương</p>
                    </div>
                    <div class=" list-novel-creator .pright10 col15">
                        <p class="novel-creator">Di Thiên Đại Hạ</p>
                        <p class="novel-creator">Cật Qua Tử Quần Chúng</p>
                        <p class="novel-creator">Vũ Tam Mao</p>
                        <p class="novel-creator">Bạch Long Phi Long</p>
                        <p class="novel-creator">Kim Sắc Mạt Lỵ Hoa</p>
                        <p class="novel-creator">Nam Phong Vị Tẫn</p>
                        <p class="novel-creator">Tịch Mịch Ngã Độc Tẩu</p>
                        <p class="novel-creator">Đệ Cửu Thiên Mệnh</p>
                        <p class="novel-creator">Ngã Thị Hạt Hỗn</p>
                        <p class="novel-creator">Thỏ Tử</p>
                    </div>
                    <div class="time-update col15">
                        <p class="time-item">5 phút trước</p>
                        <p class="time-item">5 phút trước</p>
                        <p class="time-item">5 phút trước</p>
                        <p class="time-item">5 phút trước</p>
                        <p class="time-item">5 phút trước</p>
                        <p class="time-item">5 phút trước</p>
                        <p class="time-item">5 phút trước</p>
                        <p class="time-item">5 phút trước</p>
                        <p class="time-item">5 phút trước</p>
                        <p class="time-item">5 phút trước</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="reading-rank col30 mtop10 bshadow mtop50 mbottom50">
            <h3 class="title">ĐỌC NHIỀU TUẦN</h3>
            <div class="reading-rank-item rank1  ">
                <div class="col10"><img src="/images/1.png" alt=""></div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Phàm Nhân Tu Tiên</p>
                    <p class="view mleft5"><span class="ti-eye"></span>1232,131</p>
                    <p class="novel-creator mleft5"><span class="ti-user"></span>Vong Ngữ</p>
                    <p class="type mleft5">Huyền Huyễn</p>
                </div>
                <div class="col30">
                    <a href="" class="top-rank-img"><img src="images/img-w14.jpg" alt=""></a>
                </div>
            </div>
            <div class="reading-rank-item other-rank">
                <div class="col10"><img src="/images/2.png" alt=""></div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Yêu Long Cổ Đế</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">112,533</p></a>
                </div>
            </div>
            <div class="reading-rank-item other-rank">
                <div class="col10"><img src="/images/3.png" alt=""></div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Đế Bá</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">100,443</p></a>
                </div>
            </div>
            <div class="reading-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">4</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Tiên Giả</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">90,113</p></a>
                </div>
            </div>
            <div class="reading-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">5</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Thỉnh Công Tử Trảm Yêu</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">87,443</p></a>
                </div>
            </div>
            <div class="reading-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">6</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Ác Mộng Kinh Tập</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">80,322</p></a>
                </div>
            </div>
            <div class="reading-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">7</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Hoang Đường Suy Diễn Trò Chơi</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">70,322</p></a>
                </div>
            </div>
            <div class="reading-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">8</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Hung Linh Bí Văn Lục</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">69,241</p></a>
                </div>
            </div>
            <div class="reading-rank-item other-rank ">
                <div class="col10">
                    <p class="level mleft5">9</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Đây Không Phải Là Quái Đàm</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">60,322</p></a>
                </div>
            </div>
            <div class="reading-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">10</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Khủng Bố Sống Lại</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">55,232</p></a>
                </div>
            </div>
        </div>
        <div class="popularity-rank col30 bshadow mauto mtop50 mbottom50">
            <h3 class="title">THỊNH HÀNH TUẦN</h3>
            <div class="popularity-rank-item rank1 ">
                <div class="col10"><img src="/images/1.png" alt=""></div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Phàm Nhân Tu Tiên</p>
                    <p class="view mleft5"><span class="ti-eye"></span>150,532</p>
                    <p class="novel-creator mleft5"><span class="ti-user"></span>Vong Ngữ</p>
                    <p class="type mleft5">Huyền Huyễn</p>
                </div>
                <div class="col30">
                    <a href="" class="top-rank-img"><img src="images/img-w15.jpg" alt=""></a>
                </div>
            </div>
            <div class="popularity-rank-item other-rank">
                <div class="col10"><img src="/images/2.png" alt=""></div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Nguyên Tôn</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">123,45</p></a>
                </div>
            </div>
            <div class="popularity-rank-item other-rank">
                <div class="col10"><img src="/images/3.png" alt=""></div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Kinh Dị Cầu Sinh: Lệ Quỷ Đều Là Ta Hàng Xóm</p></div>
                <div class="col30 prelative">
                    <p class="view">110,233</p></a>
                </div>
            </div>
            <div class="popularity-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">4</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Tục Chủ</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">100,421</p></a>
                </div>
            </div>
            <div class="popularity-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">5</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Phổ Cập Khoa Học Quỷ Dị: Ngươi Quản Cái Này Gọi Học Tập Dẫn Chương Trình? !</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">95,864</p></a>
                </div>
            </div>
            <div class="popularity-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">6</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Loạn Thế Thư</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">90,214</p></a>
                </div>
            </div>
            <div class="popularity-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">7</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Thần Đạo Đế Tôn</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">86,873</p></a>
                </div>
            </div>
            <div class="popularity-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">8</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Hắn Đều Vô Địch, Vẫn Còn Giả Bộ Thể Hư?</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">80,428</p></a>
                </div>
            </div>
            <div class="popularity-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">9</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Vạn Lần Tăng Cường, Ta Có Vô Số Thần Vật!</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">77,720</p></a>
                </div>
            </div>
            <div class="popularity-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">10</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Để Ngươi Cướp Cơ Duyên Không Có Để Ngươi Cướp Hồng Nhan!</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">69,209</p></a>
                </div>
            </div>
        </div>

        <div class="nominating-rank col30 bshadow mtop50 mbottom50">
            <h3 class="title">ĐỀ CỬ TUẦN</h3>
            <div class="nominating-rank-item rank1 ">
                <div class="col10"><img src="/images/1.png" alt=""></div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Vạn Cổ Thần Đế</p>
                    <p class="view mleft5"><span class="ti-eye"></span>123,2131</p>
                    <p class="novel-creator mleft5"><span class="ti-user"></span>Phi Thiên Ngư</p>
                    <p class="type mleft5">Huyền Huyễn</p>
                </div>
                <div class="col30">
                    <a href="" class="top-rank-img"><img src="images/img-w16.jpg" alt=""></a>
                </div>
            </div>
            <div class="nominating-rank-item other-rank">
                <div class="col10"><img src="/images/2.png" alt=""></div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Phàm Nhân Tu Tiên</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">120,511</p></a>
                </div>
            </div>
            <div class="nominating-rank-item other-rank">
                <div class="col10"><img src="/images/3.png" alt=""></div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Nguyên Tôn</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">110,549</p></a>
                </div>
            </div>
            <div class="nominating-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">4</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Kinh Thiên Kiếm Đế</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">100,419</p></a>
                </div>
            </div>
            <div class="nominating-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">5</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Triệu Hoán Chi Võ Hiệp Vô Song</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">98,406</p></a>
                </div>
            </div>
            <div class="nominating-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">6</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Chạy Mau! Ma Đầu Kia Tới</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">97,214</p></a>
                </div>
            </div>
            <div class="nominating-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">7</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Bắt Đầu Nữ Đế Ban Cho Cái Chết, 10 Vạn Long Kỵ Nhiễu Trường An</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">90,223</p></a>
                </div>
            </div>
            <div class="nominating-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">8</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Ta Chính Đạo Thánh Tử, Ma Tôn Hệ Thống Cái Quỷ Gì?</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">88,298</p></a>
                </div>
            </div>
            <div class="nominating-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">9</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Thiên Mệnh Phản Phái: Ta, Cự Tuyệt Từ Hôn!</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">70,242</p></a>
                </div>
            </div>
            <div class="nominating-rank-item other-rank">
                <div class="col10">
                    <p class="level mleft5">10</p>
                </div>
                <div class=" content-rank col60">
                    <p class="novel-name mleft5 ">Bắt Đầu Thanh Vân Tông Chủ, Triệu Hoán Đại Đế Cảnh Lão Tổ</p>
                </div>
                <div class="col30 prelative">
                    <p class="view">60,117</p></a>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="logo"> <img src="images/comic-text-effect-background_92086-501.png" alt=""></div>
        <p class="text-content">Thư Viện Comic là nền tảng mở trực tuyến, miễn phí đọc truyện chữ được convert hoặc dịch kỹ lưỡng, do các converter và dịch giả đóng góp, rất nhiều truyện hay và nổi bật được cập nhật nhanh nhất với đủ các thể loại tiên hiệp, kiếm hiệp, huyền ảo ...</p>
        <div class="app">
            <img src="images/google-play.png" alt="">
            <img src="images/app-store.png" alt="">
        </div>
        <ul class="footer-nav">
                <li class="footer-nav-item col25"><a href="">Điều khoản dịch vụ</a></li>
                <li class="footer-nav-item col25"><a href="">Chính sách bảo mật</a></li>
                <li class="footer-nav-item col25"><a href="">Về bản quyền </a></li>
                <li class="footer-nav-item col25"><a href="">Hướng dẫn sử dụng</a></li>
        </ul>
    </div>
    <!-- Popup Login -->
    <div id="form-login">
        <div class="form-container">
            <div class="ti-close" onclick="closeLoginForm()"></div>
            <h3 class="form-title">Đăng nhập</h3>
            <div class="title">
                <p class="content">Email</p>
                <p class="sub-content">Gửi lại email kích hoạt</p>
            </div>
            <input type="text" class="user">
            <div class="title">
                <p class="content">Mật khẩu</p>
                <p class="sub-content">Quên mật khẩu?   </p>
            </div>
            <input type="password" class="password">
            <div class="btn-login"><a href="">Đăng nhập</a></div>
            <div class="form-footer title">
                <p class="content">Bạn chưa có tài khoản?</p>
                <p class="sub-content"><a href="">Đăng ký ngay</a></p>       
            </div>
        </div>
    </div>
    <!-- Popup Register -->
    <div id="form-register">
        <form class="form-register-container" onsubmit="return validateForm()" id="registrationForm">
          <div class="ti-close" onclick="closeRegisterForm()"></div>
          <h1>ĐĂNG KÝ</h1>
          <label for="hoTen">Họ tên:</label>
          <input type="text" id="username" name="username"><br>
    
          <label for="useraccount">Tài Khoản: </label>
          <input type="text" id="useraccount" name="useraccount"><br>
    
          <label for="userpassword">Mật Khẩu: </label>
          <input type="password" id="userpassword" name="userpassword"><br>
    
          <label for="useremail">Email:</label>
          <input type="email" class="form-control" id="useremail" name="useremail">
    
          <div class="form-group">    
            <label>Giới tính: </label>
            <input type="radio" name="usersex" id="nam" value="Nam"> <label for="male">Nam</label> 
            <input type="radio" name="usersex" id="nu" value="Nữ"> <label for="female">Nữ</label> 
          </div>
    
          <label for="userjob">Nghề Nghiệp:</label>
          <select class="form-control" id="userjob" name="userjob">
            <option disabled selected>--Bạn làm nghề gì--</option>
            <option value="Sinh viên">Sinh viên</option>
            <option value="Học sinh">Học sinh</option>
            <option value="Giáo viên">Giáo viên</option>
            <option value="Khác">Khác</option>
          </select><br>
    
          <label for="usernationality">Quốc Tịch:</label>
          <select class="form-control" id="usernationality" name="usernationality">
            <option disabled selected>--Chọn quốc tịch--</option>
            <option value="Việt Nam">Việt Nam</option>
            <option value="Ấn Độ">Ấn Độ</option>
            <option value="Đức">Đức</option>
            <option value="Khác">Khác</option>
          </select><br>
    
          <label for="usernote">Ghi chú</label>
          <textarea class="form-control" id="usernote" name="usernote" rows="4"></textarea><br>
    
          <input type="submit" value="Đăng ký">
        </form>
    
      </div>
<!-- Popup Donate Table -->
<div id="form-donate">
    <div class="form-container">
        <div class="ti-close" onclick="closeDonateForm()"></div>
        <label for="priceFilter">Chọn mức giá:</label>
        <select id="priceFilter" onchange="filterByPrice()">
            <option value="all">Tất cả</option>
            <option value="1000000">Dưới 1,000,000</option>
            <option value="1000000-1500000">1,000,000 - 1,500,000</option>
        </select>
        <table id="productTable">
            <caption>CÁC QUÀ TẶNG</caption>
            <thead>
                <tr>
                    <th><input type="checkbox" id="chonhet"></th>
                    <th>Tên quà tặng</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" class="chon" onchange="daott(this)"></td>
                    <td>Máy bay</td>
                    <td>900000</td>
                    <td><input type="number" class="quantity" value="1" onchange="updateTotal(this)" disabled></td>
                    <td>900000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="chon" onchange="daott(this)"></td>
                    <td>Tàu lửa</td>
                    <td>50000</td>
                    <td><input type="number" class="quantity" value="1" onchange="updateTotal(this)" disabled></td>
                    <td>50000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="chon" onchange="daott(this)"></td>
                    <td>Pháo hoa</td>
                    <td>30000</td>
                    <td><input type="number" class="quantity" value="1" onchange="updateTotal(this)" disabled></td>
                    <td>30000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="chon" onchange="daott(this)"></td>
                    <td>Đậu thần</td>
                    <td>100000</td>
                    <td><input type="number" class="quantity" value="1" onchange="updateTotal(this)" disabled></td>
                    <td>10000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="chon" onchange="daott(this)"></td>
                    <td>Sư tử</td>
                    <td>1700000</td>
                    <td><input type="number" class="quantity" value="1" onchange="updateTotal(this)" disabled></td>
                    <td>1700000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="chon" onchange="daott(this)"></td>
                    <td>Ô tô</td>
                    <td>1200000</td>
                    <td><input type="number" class="quantity" value="1" onchange="updateTotal(this)" disabled></td>
                    <td>1200000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" style="text-align: right;"><strong>Tổng cộng:</strong></td>
                    <td><strong><span id="grandTotal">0</span></strong></td>
                </tr>
            </tfoot>
        </table>
        <hr style="margin: 20px 0;" />

    </div>
</div>
    
    <script src="./js/script.js">
    </script>
    <script src="./js/img_collection.js">
    </script>
    <script src="./js/register.js">
    </script>
    <script src="./js/donate_table.js">
    </script>
</body>
</html>