<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">

        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
            <a href="{{route('admin.addProduct')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Робота з товаром
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('user.registration')}}" class="nav-link">
                <i class="nav-icon fas fa-marker"></i>
                <p>
                    Реєстрація
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.mainProduct')}}" class="nav-link">
                <i class="nav-icon far fa-file-alt"></i>
                <p>
                    Головні продукти
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.getOrder')}}" class="nav-link">
                <i class="nav-icon fas fa-align-justify" ></i>
                <p>
                    Замовлення
                </p>
            </a>
        </li>
    </ul>
</nav>
