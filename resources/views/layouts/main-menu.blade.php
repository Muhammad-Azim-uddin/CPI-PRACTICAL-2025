<ul id="side-menu">

    <li class="menu-title">Menu</li>

    <li>
        <a href="{{route('home')}}">
            <i data-feather="home"></i>
            <span> Dashboard </span>
        </a>
    </li>
    <li class="menu-title">Pages</li>
    <!-- <li>
        <a href="index.html#sidebarAuth" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span> Products </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarAuth">
            <ul class="nav-second-level">
                <li>
                    <a class='tp-link' href="#">All Products</a>
                </li>
                <li>
                    <a class='tp-link' href="#">Add New Product</a>
                </li>
                <li>
                    <a class='tp-link' href="#"> Categories</a>
                </li>
                <li>
                    <a class='tp-link' href="#">Brands</a>
                </li>
                <li>
                    <a class='tp-link' href="index.html#Attributes" data-bs-toggle="collapse">Attributes
                        <span class="menu-arrow"></span>
                    </a>
                </li>
                <div class="collapse" id="Attributes">
                    <ul class="nav-second-level">
                        <li>
                            <a class='tp-link' href="#">
                                <span class="plus"></span>
                                Add Size
                            </a>
                        </li>
                        <li>
                            <a class='tp-link' href="#">Add Color</a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </li> -->

    <!-- about  -->
    <li>
        <a href="#aboutMenu" data-bs-toggle="collapse">
            <i data-feather="info"></i>
            <span> About </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="aboutMenu">
            <ul class="nav-second-level">
                <li>
                    <a class='tp-link' href="{{ route('backend.about.index') }}">All About </a>
                </li>
                <li>
                    <a class='tp-link' href="{{ route('backend.about.create') }}">Add New</a>
                </li>
                <li>
                    <a class='tp-link' href="{{ route('backend.about.draft') }}">Draft</a>
                </li>
            </ul>
        </div>
    </li>

    <!-- Banners / Sliders -->
    <li>
        <a href="index.html#Banners" data-bs-toggle="collapse">
            <i data-feather="image"></i>
            <span> Banners / Sliders </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Banners">
            <ul class="nav-second-level">
                <li>
                    <a class='tp-link' href='pages-starter'>Homepage Banner</a>
                </li>
                <li>
                    <a class='tp-link' href='pages-profile'>Promotional Popups</a>
                </li>
            </ul>
        </div>
    </li>
    <!-- Department -->
    <li>
        <a href="{{ route('backend.department.index') }}">
        <i data-feather="briefcase"></i>
            <span> Departments </span>
        </a>
    </li>


    <!-- Settings -->
    <li>
        <a href="index.html#Settings" data-bs-toggle="collapse">
            <i data-feather="settings"></i>
            <span>Settings </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Settings">
            <ul class="nav-second-level">
                <li>
                    <a class='tp-link' href='#'>General Settings</a>
                </li>
                <li>
                    <a class='tp-link' href='#'>Currency / Language</a>
                </li>
                <li>
                    <a class='tp-link' href='#'>Email / SMS Settings</a>
                </li>
            </ul>
        </div>
    </li>
</ul>