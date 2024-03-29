<nav class="sidebar bg-primary-subtle ">
    <div class="logo d-flex justify-content-between">
        <a href="{{ route('dashboard.home') }}"><img src="https://i.ibb.co/SKcF2x1/Screenshot-2024-02-04-003305.png"
                alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">

        <li class="">
            <a class="text-decoration-none" href="{{ route('dashboard.home') }}" aria-expanded="false">
                <i class="fa-solid fa-house fs-5"></i>
                <span>Dashboard</span>
            </a>
            {{-- <ul>
                <li><a class="active" href="{{ route('category.form') }}">Classic</a></li>
                <li><a href="index_2.html">Minimal</a></li>
            </ul> --}}
        </li>
        <li class>
            <a class="has-arrow text-decoration-none" href="#" aria-expanded="false">
                <i class="fa-solid fa-users fs-5"></i>
                <span>User</span>
            </a>
            <ul>
                <li><a class="text-decoration-none" href="{{ route('user.form') }}"><i
                            class="fa-solid fa-plus"></i>Add User</a></li>
                <li><a class="text-decoration-none" href="{{ route('user.list') }}"><i
                            class="fa-solid fa-list-ol"></i>User List</a></li>
            </ul>
        </li>

        <li class>
            <a class="has-arrow text-decoration-none" href="#" aria-expanded="false">
                <i class="fa-solid fa-list   fs-5"></i>
                <span>Category</span>
            </a>
            <ul>
                <li><a class="text-decoration-none" href="{{ route('category.form') }}"><i
                            class="fa-solid fa-plus"></i>Add Category</a></li>
                <li><a class="text-decoration-none" href="{{ route('category.list') }}"><i
                            class="fa-solid fa-list-ol"></i>Category List</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow text-decoration-none" href="#" aria-expanded="false">
                <i class="fa-solid fa-list   fs-5"></i>
                <span>Brand</span>
            </a>
            <ul>
                <li><a class="text-decoration-none" href="{{route('brand.form')}}"><i
                            class="fa-solid fa-plus"></i>Add Brand</a></li>
                <li><a class="text-decoration-none" href="{{route('brand.list')}}"><i
                            class="fa-solid fa-list-ol"></i>Brand List</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow text-decoration-none" href="#" aria-expanded="false">
                <i class="fa-solid fa-list   fs-5"></i>
                <span>Product</span>
            </a>
            <ul>
                <li><a class="text-decoration-none" href="{{route('product.form')}}"><i
                            class="fa-solid fa-plus"></i>Add Product</a></li>
                <li><a class="text-decoration-none" href="{{route('product.list')}}"><i
                            class="fa-solid fa-list-ol"></i>Product List</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="img/menu-icon/4.svg" alt>
                <span>UI Component</span>
            </a>
            <ul>
                <li><a href="#">Elements</a>
                    <ul>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="dropdown.html">Dropdowns</a></li>
                        <li><a href="Badges.html">Badges</a></li>
                        <li><a href="Loading_Indicators.html">Loading Indicators</a></li>
                    </ul>
                </li>
                <li><a href="#">Components</a>
                    <ul>
                        <li><a href="notification.html">Notifications</a></li>
                        <li><a href="progress.html">Progress Bar</a></li>
                        <li><a href="carousel.html">Carousel</a></li>
                        <li><a href="cards.html">cards</a></li>
                        <li><a href="Pagination.html">Pagination</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="img/menu-icon/5.svg" alt>
                <span>Widgets</span>
            </a>
            <ul>
                <li><a href="chart_box_1.html">Chart Boxes 1</a></li>
                <li><a href="profilebox.html">Profile Box</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="img/menu-icon/6.svg" alt>
                <span>Forms</span>
            </a>
            <ul>
                <li><a href="#">Elements</a>
                    <ul>
                        <li><a href="data_table.html">Data Tables</a></li>
                        <li><a href="bootstrap_table.html">Grid Tables</a></li>
                        <li><a href="datepicker.html">Date Picker</a></li>
                    </ul>
                </li>
                <li><a href="#">Widgets</a>
                    <ul>
                        <li><a href="Input_Selects.html">Input Selects</a></li>
                        <li><a href="Input_Mask.html">Input Mask</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="img/menu-icon/7.svg" alt>
                <span>Charts</span>
            </a>
            <ul>
                <li><a href="chartjs.html">ChartJS</a></li>
                <li><a href="apex_chart.html">Apex Charts</a></li>
                <li><a href="chart_sparkline.html">chart sparkline</a></li>
            </ul>
        </li>
    </ul>
</nav>