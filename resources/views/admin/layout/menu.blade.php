

  <!-- =============================================== -->

  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="admin_asset/assets/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          @if(Auth::check())
          <p>{{Auth::user()->full_name}}</p>
          @endif
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><a href="admin/layout/trangchu"><i class="fa fa-home"></i>Trang chủ</a></li>
        <!-- Optionally, you can add icons to the links -->
      <!--   <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li> -->
          <li class="treeview">
          <a><i class="fa fa-file-image-o"></i> <span>Thống kê doanh thu</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/bill/thong-ke-bao-cao"><i class="fa fa-reorder"></i>Doanh thu</a></li>
              <li><a href="admin/bill/thong-ke-doanh-thu"><i class="fa fa-reorder"></i>Tổng doanh thu </a></li>
              <!-- <li><a href="admin/slide/danhsach"><i class="fa fa-reorder"></i>Theo năm</a></li> -->
          </ul>
        </li>
        <li class="treeview">
          <a><i class="fa fa-cubes"></i> <span>Đơn đặt hàng</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/bill/donhang"><i class="fa fa-reorder"></i>Danh Sách Chờ</a></li>
            <li><a href="admin/bill/search"><i class="fa fa-reorder"></i>Danh sách đơn hàng </a></li>
          
          </ul>
        </li>
          <!--  -->
          <li class="treeview">
          <a ><i class="fa fa-shopping-bag"></i> <span>Sản Phẩm</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="admin/sanpham/danhsach"><i class="fa fa-reorder"></i>Danh Sách</a></li>
            <li> <a href="admin/sanpham/huy"><i class="fa fa-remove"></i>Sản phẩm đã xóa</a></li>
            <li> <a href="admin/sanpham/add"><i class="fa fa-plus"></i>Thêm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a><i class="fa fa-shopping-basket"></i> <span>Danh Mục Sản Phẩm</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/danhmuc/danhsach"><i class="fa fa-reorder"></i>Danh Sách</a></li>
            <li><a href="admin/danhmuc/add"><i class="fa fa-plus"></i>Thêm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a><i class="fa fa-cubes"></i> <span>Loại Sản Phẩm</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/loaisp/danhsach"><i class="fa fa-reorder"></i>Danh Sách</a></li>
            <li><a href="admin/loaisp/add"><i class="fa fa-plus"></i>Thêm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a><i class="fa fa-file-image-o"></i> <span>Slide</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/slide/danhsach"><i class="fa fa-reorder"></i>Danh Sách</a></li>
            <li><a href="admin/slide/add"><i class="fa fa-plus"></i>Thêm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a><i class="fa fa-truck"></i> <span>Nhà cung cấp</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/nhacungcap/danhsach"><i class="fa fa-reorder"></i>Danh Sách</a></li>
            <li><a href="admin/nhacungcap/add"><i class="fa fa-plus"></i>Thêm</a></li>
          </ul>
        </li>
           <li class="treeview">
          <a><i class="fa fa-truck"></i> <span>Hãng sản xuất</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/hangsanxuat/danhsach"><i class="fa fa-reorder"></i>Danh Sách</a></li>
            <li><a href="admin/hangsanxuat/add"><i class="fa fa-plus"></i>Thêm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a><i class="fa fa-users"></i> <span>Khách hàng</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/khachhang/danhsach"><i class="fa fa-reorder"></i>Danh Sách</a></li>
            <li><a href="admin/khachhang/add"><i class="fa fa-plus"></i>Thêm</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a><i class="fa fa-user-o"></i> <span>Nhân viên</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/nhanvien/danhsach"><i class="fa fa-reorder"></i>Danh Sách</a></li>
            <li><a href="admin/nhanvien/add"><i class="fa fa-plus"></i>Thêm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a><i class="fa fa-newspaper-o"></i> <span>Tin Tức</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/tintuc/danhsach"><i class="fa fa-reorder"></i>Danh Sách</a></li>
            <li><a href="admin/tintuc/add"><i class="fa fa-plus"></i>Thêm</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a><i class="fa fa-user"></i> <span>Người dùng</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/user/danhsach"><i class="fa fa-reorder"></i>Danh Sách</a></li>
            <li><a href="admin/user/add"><i class="fa fa-plus"></i>Thêm</a></li>
          </ul>
        </li>
            <li class="treeview">
          <a><i class="fa fa-user"></i> <span>Liên hệ</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/lienhe/danhsach"><i class="fa fa-reorder"></i>Danh Sách</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  

  