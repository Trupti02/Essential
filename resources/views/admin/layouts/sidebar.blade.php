<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('dashboard')}}"><i class="menu-icon fa fa-dashboard"></i><b>Dashboard</b> </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="{{route('blog.index')}}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pagelines"></i><b>Blog</b></a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-id-badge"></i><a href="{{route('blog.create')}}">Add Blog</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{route('blog.index')}}">Blogs</a></li>

                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-dedent"></i><b>Category</b></a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Add Category</a></li>

                    </ul>
                </li>





            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
