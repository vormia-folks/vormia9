<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-item active ">
            <a href="{{url('vma-admin/dashboard')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <hr />

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-word-fill vma-color-dark-green"></i>
                <span>Blogs</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/blogs')}}">Posts</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/blogs?p=tags')}}">Tags</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/blogs?p=categories')}}">Categories</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/blogs?p=comments')}}">Comments</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item ">
            <a href="{{url('vma-admin/pages')}}" class='sidebar-link'>
                <i class="bi bi-file-earmark-text-fill vma-color-dark-green"></i>
                <span>Pages</span>
            </a>
        </li>

        <hr />

        <!-- <li class="sidebar-title">Controls</li> -->
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-sliders vma-color-dark-orange"></i>
                <span>Tools</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/inheritances')}}">Inheritances</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/section')}}">Shortcode</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/widgets')}}">Widgets</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/helpers')}}">Helpers</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/fields')}}">Fields</a>
                </li>

            </ul>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-chevron-expand vma-color-black"></i>
                <span>Extensions</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/extensions?p=list')}}">Installed</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/extensions?p=add')}}">Add New</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/extensions')}}">Marketplace</a>
                </li>
            </ul>
        </li>

        <hr />

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-person-lines-fill vma-color-brown"></i>
                <span>Users</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/users')}}">All</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/users?p=add')}}">Add New</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/users?p=profile')}}">Profile</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-gear-fill vma-color-dark-pink"></i>
                <span>Controls</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/access')}}">Access</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/themes')}}">Themes</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/controls?p=modules')}}">Set Modules</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/controls?p=inheritance')}}">Set Inheritances</a>
                </li>
            </ul>
        </li>

        <hr />

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-wrench vma-color-dark-red-2"></i>
                <span>Settings</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/settings?p=viewing')}}">Viewing</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/settings?p=system')}}">System</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/settings?p=mail')}}">Mailing</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/settings?p=media')}}">Media</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('vma-admin/settings?p=tweaks')}}">Tweaks</a>
                </li>
            </ul>
        </li>


        <li class="sidebar-item ">
            <a href="{{url('vma-admin/logout')}}" class='sidebar-link'>
                <i class="bi bi-box-arrow-left"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>
</div>