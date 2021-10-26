<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
          @foreach ($menus as $menuItem)
            <li class="nav-link">
              @if ($menuItem->position_menu == 'TITLE')
                <li class="menu-header">{{ $menuItem->name_menu }}</li>
              @elseif ($menuItem->position_menu == 'SIDE')
                <li><a class="nav-link" href="{{ $menuItem->controller_menu }}"><i class="fas {{ $menuItem->icon_menu }}"></i> <span>{{ $menuItem->name_menu }}</span></a></li>
              @elseif ($menuItem->position_menu == 'SIDEPARENT')
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas {{ $menuItem->icon_menu }}"></i> <span>{{ $menuItem->name_menu }}</span></a>
                  <ul class="dropdown-menu">
                    @foreach ($menuItem->child as $menuChildItem)
                      <li><a class="nav-link" href="layout-default.html">{{ $menuChildItem->name_menu }}</a></li>
                    @endforeach
                  </ul>
                </li>
              @endif
            </li>
          @endforeach
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div>
    </aside>
  </div>