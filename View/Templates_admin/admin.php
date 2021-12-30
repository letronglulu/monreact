
<!-- wrapper start -->
<div class="wrapper">
    <!-- header start -->
    <header>
        <!-- row_left start -->
        <div class="row top_left">
            <div class="row">
                <a href="#">
                    <img src="IMG/tách nền 190.png" alt="">
                    <h4 >Fpt Travels<span> ADMIN</span></h4>
                </a>
            </div>
        </div>
        <!-- row_left end -->
        <!-- row_right start -->
        <div class="row top_right">
            <div class="row">
                <!-- container start -->
                <div class="boxcenter">
                    <div class="search_sp">
                        <input type="text" name="" id="" placeholder="Tìm kiếm....">
                        <button><i class="fa fa-search " aria-hidden="true"></i></button>
                    </div>
                    <!-- option start -->
                    <div class="option ">
                        <ul>
                            <li><a href="#" class="hover_color"><i class="fas fa-comment-dots"></i></a></li>
                            <li><a href="#" class="hover_color"><i class="fas fa-envelope"></i></a></li>
                            <li><a href="#" class="hover_color"><i class="fas fa-bell"></i></a></li>
                            <li><a href="#" class="info_user">
                                    <!-- account start -->
                                    <div class="account">
                                        <img src="IMG/104181896_623514438265620_818277614829868397_o.jpg" alt="">
                                        <span>Lê Trọng Lư <i class="fas fa-chevron-down"></i></span>
                                    </div>
                                    <!-- account end -->
                                    <!-- option_user start -->
                                    <div class="row option_user">
                                        <div class="row acc_user">
                                            <img src="IMG/104181896_623514438265620_818277614829868397_o.jpg"
                                                alt="">
                                            <h5>Email: <span>letronglu01@gmail.com</span></h5>
                                        </div>
                                        <div class="row setting_user">
                                            <h5>
                                                <i class="fas fa-cogs"></i>
                                                <span>Setting</span>
                                            </h5>
                                        </div>
                                        <div class="row logout">
                                            <h5>
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Logout</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <!-- option_user end -->
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- option end -->
                </div>
                <!-- container end -->
            </div>
        </div>
        <!-- row_right end -->
    </header>
    <!-- header end -->

    <div class="row">
        <!-- aside start -->
        <aside>
            <div class="row">
                <!-- nav_left start -->
                <div class="nav_left">
                    <div class="row">
                        <div class="dashboard">
                            <a href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="Catalog">
                            <a href="#">
                                <i class="fas fa-box-open"></i>
                                <span>Danh sách tour</span>
                            </a>
                        </div>
                        <div class="menu_catalog">

                        </div>
                    </div>
                    <div class="row">
                        <div class="Product">
                            <a href="#">
                                <i class="fas fa-tshirt"></i>
                                <span>Lịch trình</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="Customer">
                            <a href="#">
                                <i class="fas fa-users"></i>
                                <span>Quản lý vé</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="Comment">
                            <a href="#">
                                <i class="fas fa-comments"></i>
                                <span>Comment</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="Page">
                            <a href="#">
                                <i class="fab fa-facebook-square"></i>
                                <span>Pages</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="Statistical">
                            <a href="#">
                                <i class="fas fa-chart-line"></i>
                                <span>Statistical</span>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="Database">
                            <a href="index.php?Controller=login&Action=logout">
                            <i class="fas fa-sign-out-alt"></i>
                                <span>Log-out</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- nav_left end -->
            </div>

        </aside>
        <!-- aside end -->
        <!-- article start -->
        <article>
            <?php
                $getback="";
                if (isset($_GET[''])) {
                    # code...
                }
            ?>
            <div class="row">
                <!-- directional start -->
                <!-- <div class="directional">
                    <a href="#">Dashboard</a>
                    <span>&rsaquo;</span>
                    <a href="#">Product</a>
                    <span>&rsaquo;</span>
                    <a href="#">Add Product</a>
                </div> -->
                <!-- directional end -->
            </div>
            <!-- từ đây tạo các bảng để nhập thông tin
                trong  mục list tour tạo Textarea để nhập thong tin tour
                . tên tour
                .địa điểm tham quan
                .giá
                .nhập vé
                .lịch trình từng ngày (Textarea)
                .số ngày tham quan
                . thêm các nút xóa sửa cho từng tour
                . các thẻ mặc định đã có css,chỉ cần gọi là có đúng kích thước acticle
            -->
            <div class="row">
                <div class="row">
                    <div class="tile_thongke">
                        <h3>Thống kê hệ thống
                        </h3>
                    </div>
                </div>
                <!-- table_thongke start -->
                <div class="table_thongke">
                    <!--members_online start -->
                    <div class="from_table members_online">
                        <div class="row box_icon_and_tile">
                            <div class="icon">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="tile">
                                <h5>10368</h5>
                                <span>Khách hàng đã tham gia</span>
                            </div>
                        </div>
                    </div>
                    <!--members_online end -->
                    <!--count_catalog start  -->
                    <div class="from_table count_catalog">
                        <div class="row box_icon_and_tile">
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="tile">
                                <h5>388,688</h5>
                                <span>Vé đã được đặt</span>
                            </div>
                        </div>
                    </div>
                    <!--count_catalog end  -->
                    <!--doanhthu start  -->
                    <div class="from_table doanhthu">
                        <div class="row box_icon_and_tile">
                            <div class="icon">
                                <i class="far fa-calendar-alt"></i>
                            </div>
                            <div class="tile">
                                <h5>1,086</h5>
                                <span>Tổng số tour đã hoàn thành</span>
                            </div>
                        </div>
                    </div>
                    <!--doanhthu end  -->
                    <!--loinhuan start  -->
                    <div class="from_table loinhuan">
                        <div class="row box_icon_and_tile">
                            <div class="icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="tile">
                                <h5>&#36;1,060,386</h5>
                                <span>Tổng doanh thu</span>
                            </div>
                        </div>
                    </div>
                    <!--loinhuan end  -->
                </div>
                <!-- table_thongke end -->
                <!-- table_bieudo start -->
                <div class="table_bieudo">
                    <div class="table_left">
                        <div class="row">
                            <div class="tile_left">
                                <h5></h5>
                                <!-- tạo bảng g -->
                            </div>
                        </div>
                        <div class="row">
            
                        </div>
                    </div>
                    <div class="table_right">
                        <div class="row">
                            <div class="tile_left">
                                <h5>Char By &#37;</h5>
                            </div>
                        </div>
                        <div class="row">
            
                        </div>
                    </div>
                </div>
                <!-- table_bieudo end -->
            </div>
            <!-- row_1 end -->
            <!-- row_2 start -->
            <div class="row">
                <div class="row">
                    <div class="tile_thongke">
                        <h3>Danh sách tour trên hệ thống
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="table_bangthongke">
                        <div class="row">
                            <div class="tile_bangthongke_left">
                                <h5>Các tour đã thêm</h5>
                            </div>
                            <div class="tile_bangthongke_right">
                                <h5>Các tour đã hoàn thành</h5>
                            </div>
                        </div>
                        <div class="row">
                            <!--form_showproduct start  -->
                            <div class="form_showproduct">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Mã tour</th>
                                            <th scope="col">Tên Chương trình</th>
                                            <th scope="col">Điểm đến</th>
                                            <th scope="col">Ảnh tour</th>
                                            <th scope="col">Lần sửa cuối cùng</th>
                                            <th scope="col">Quản trị viên</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
            
                                            <td>1</td>
                                            <td>ass</td>
                                            <td>name</td>
                                            <td><img src="#" alt="" width="50px" height="80px"></td>
                                            <td>date</td>
                                            <td>user</td>
                                        </tr>
            
                                    </tbody>
                                </table>
                            </div>
                            <!--form_showproduct end -->
                            <div class="from_tablecatalog">
                                <!-- ngay đây tạo 1 bảng gồm các cột
                                    để xem vài thôgn tin tour đã hoàn thành
                                    chú ý tên class
                                .Mã tour
                                .tên tour
                                .nút xem thêm
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            <!-- row_2 end -->
        </article>
        <!-- article end -->

    </div>

</div>
<!-- wrapper end -->



                