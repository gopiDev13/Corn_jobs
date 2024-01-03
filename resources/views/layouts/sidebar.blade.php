<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   
      
      <!-- SidebarSearch Form -->
  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
           
            <ul class="nav nav-treeview">
            @if(auth()->user()->role_id === 1)
              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sub-category.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub-Category Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('item.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('employee.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Employees</p>
                </a>
              </li>
             @elseif(auth()->user()->role_id === 2)
              <li class="nav-item">
                <a href="{{ route('orders.list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Item list</p>
                </a>
              </li>
             @endif 
            </ul>
          </li>
       
      </nav>
         
              
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
