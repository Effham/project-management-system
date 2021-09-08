<nav class="navbar navbar-expand-lg">
    <div class="search-panel">
      <div class="search-inner d-flex align-items-center justify-content-center">
        <div class="close-btn">Close <i class="fa fa-close"></i></div>
        <form id="searchForm" action="#">
          <div class="form-group">
            <input type="search" name="search" placeholder="What are you searching for...">
            <button type="submit" class="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <div class="navbar-header">
        <!-- Navbar Header--><a href="/home" class="navbar-brand">
          <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Web</strong><strong>Invaderz</strong></div>
          <div class="brand-text brand-sm"><strong class="text-primary">W</strong><strong>I</strong></div></a>
        <!-- Sidebar Toggle Btn-->
        <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
      </div>

        <!-- Tasks-->

        <!-- Tasks end-->
        <!-- Megamenu-->

        <!-- Megamenu end     -->
        <!-- Languages dropdown    -->

        <!-- Log out               -->
        <div class="list-inline-item logout">
            <a id="logout"  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
              <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
      </div>
    </div>
  </nav>
