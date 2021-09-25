<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Projects
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('projects') }}">Projects List</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('projects/create') }}">Add Project</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('categories') }}">Categories List</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('categories/create') }}">Add Category</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('products') }}">Products List</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('products/create') }}">Add Product</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

