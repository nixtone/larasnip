<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- <li class="nav-header">EXAMPLES</li> -->
        <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Посты
                    <span class="badge badge-info right">{{ $posts->total() }}</span>
                </p>
            </a>
        </li>

    </ul>
</nav>
