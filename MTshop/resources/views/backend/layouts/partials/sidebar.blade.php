<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                Danh mục<span class="sr-only">(current)</span>
                </a>
            </li>
             
            
                
                <!-- Danh mục Sản phẩm -->
                <li class="treeview {{ Request::is('admin/danhsachsanpham*') ? 'menu-open' : '' }}">
                <a href="#"><i class="fa fa-link"></i> <span>Danh mục sản phẩm</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachsanpham*') ? 'block' : 'none' }};">
                    <li class="{{ Request::is('admin/danhsachsanpham') ? 'active' : '' }}"><a href="{{ route('danhsachsanpham.index') }}">Danh sách sản phẩm</a></li>
                    <li class="{{ Request::is('admin/danhsachsanpham/create') ? 'active' : '' }}"><a href="{{ route('danhsachsanpham.create') }}">Thêm mới sản phẩm</a></li>
                </ul>
                </li>

        </ul>
    </div>
</nav>
 