<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('dashboard') }}">
  <span class="align-middle">PawPaw</span>
            </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main
            </li>

            <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
      <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
    </a>
            </li>
            <li class="sidebar-header">
                Master Artikel
            </li>

            <li class="sidebar-item  {{ request()->routeIs('artikels.table') ? 'active' : '' }}">
                <a class="sidebar-link " href="{{ route('artikels.table') }}">
                    <i class="align-middle me-2" data-feather="book-open"></i> <span class="align-middle">List Artikel</span>
                
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('artikels.create') ? 'active' : '' }}">
        
    <a href="{{ route('artikels.create') }}" class="sidebar-link">
        <i class="align-middle me-2" data-feather="plus"></i>  <span class="align-middle">Tambah Artikel</span>
    </a>
            </li>

            <li class="sidebar-header">
                Master Tags
            </li>

            <li class="sidebar-item {{ request()->routeIs('tags.table') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('tags.table') }}">
                    <i class="align-middle me-2" data-feather="tag"></i>  <span class="align-middle">List Tag</span>
    
    </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('tags.create') ? 'active' : '' }}">
    @can('admin')
        
    
    <a href="{{ route('tags.create') }}" class="sidebar-link">
        <i class="align-middle me-2" data-feather="plus"></i>  <span class="align-middle">Tambah Tag</span>
    </a>
    @endcan
            </li>
@can('admin')
    

            <li class="sidebar-header">
                Master penulis
            </li>

            <li class="sidebar-item {{ request()->routeIs('users.table') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('users.table') }}">
                    <i class="align-middle me-2" data-feather="users"></i> <span class="align-middle">List Penulis</span>
      

      
    </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('users.create') ? 'active' : '' }}">
    <a href="{{ route('users.create') }}" class="sidebar-link">
        <i class="align-middle me-2" data-feather="plus"></i><span class="align-middle">Tambah Penulis</span>
    </a>
            </li>
            @endcan
        </ul>

    </div>
</nav>
