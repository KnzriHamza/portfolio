<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
          
        </span>
        <span class="app-brand-text menu-text fw-bolder ms-2">Portfolio</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="{{route('dashboard')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <!-- Layouts -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-cube-alt"></i>
          <div data-i18n="Misc">Misc</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="pages-misc-error.html" class="menu-link">
              <div data-i18n="Error">Error</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-misc-under-maintenance.html" class="menu-link">
              <div data-i18n="Under Maintenance">Under Maintenance</div>
            </a>
          </li>
        </ul>
      </li>


      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-cube-alt"></i>
          <div data-i18n="Misc">Manage Projects</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{route('list.projects')}}" class="menu-link">
              <div data-i18n="Error">Projects</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('list.links')}}" class="menu-link">
              <div data-i18n="Under Maintenance">Links</div>
            </a>
          </li>
        </ul>
      </li>
      <!-- Misc -->
      <li class="menu-item">
        <a
          href="{{route('list.socials')}}"
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-support"></i>
          <div data-i18n="Support">Socials</div>
        </a>
      </li>
      
        
        <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-cube-alt"></i>
          <div data-i18n="Misc">Experience</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{route('list.experience')}}" class="menu-link">
              <div>Experience</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('list.tools')}}" class="menu-link">
              <div>Tech and Tools</div>
            </a>
          </li>
        </ul>
      </li>
        <li class="menu-item">
          <a
            href="{{route('list.hobbies')}}"
            class="menu-link"
          >
            <i class="menu-icon tf-icons bx bx-support"></i>
            <div data-i18n="Support">Hobbys</div>
          </a>
        </li>
        <li class="menu-item">
          <a
            href="{{route('list.gallery')}}"
            class="menu-link"
          >
            <i class="menu-icon tf-icons bx bx-support"></i>
            <div data-i18n="Support">Gallery</div>
          </a>
        </li>
      <li class="menu-item">
        <a
          href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
          target="_blank"
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-file"></i>
          <div data-i18n="Documentation">Documentation</div>
        </a>
      </li>
    </ul>
  </aside>




