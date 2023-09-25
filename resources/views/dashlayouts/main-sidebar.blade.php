<aside class="main-sidebar elevation-4" style="background-color:#59886b; color:black">
    <!-- Brand Logo -->
      <div class="logo">
      <img src="{{ asset('assets/img/furnishareyellow.png') }}" alt="Logo"  style="margin: 3% 30%  ; width:100px">
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <ul class="nav nav-treeview">
            <li class="nav-item" style="margin-bottom: 30px">
              <a href="{{ asset('/count') }}" class="nav-link active" style="background-color:white;color:#59886b;text-align:center">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('/admin') }}" class="nav-link">
                <p style="color:white;text-align:center">Admins</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('/user') }}" class="nav-link">
                <p style="color:white;text-align:center">Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('/category') }}" class="nav-link">
                <p style="color:white;text-align:center">Categories</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ asset('/donatione') }}" class="nav-link">
            <p style="color:white;text-align:center">Donations</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ asset('/donateditems') }}" class="nav-link">
            <p style="color:white;text-align:center">Items Donations</p>
          </a>
        </li>
        <li class="nav-item" style="margin-bottom: 30px">
          <a href="{{ asset('/donatedservives') }}" class="nav-link">
            <p style="color:white;text-align:center">Services Donations</p>
          </a>
        </li>
        <li class="nav-item has-treeview menu-open">
          <ul class="nav nav-treeview">
            <li class="nav-item" style="margin-bottom: 30px">
              <a href="#" class="nav-link active" style="background-color:white;color:#59886b;text-align:center">
                Forms
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('/donationform') }}" class="nav-link">
                <p style="color:white;text-align:center">Financial Donation Form </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ asset('/donationitemform') }}" class="nav-link">
            <p style="color:white;text-align:center">Donated Items Form</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ asset('/donatedservicesform') }}" class="nav-link">
            <p style="color:white;text-align:center">Donated Services Form</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </aside>
