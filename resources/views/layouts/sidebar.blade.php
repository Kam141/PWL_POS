<div class="sidebar">
    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ url('/')}}" class="nav-link {{ ($activeMenu == 'dashboard') ? 'active' : ''}} ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-header">Data Pengguna</li>
        <li class="nav-item">
          <a href="{{ url('/level')}}" class="nav-link {{ ($activeMenu == 'level') ? 'active' : ''}}">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>
              Level User
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/user') }}" class="nav-link {{ ($activeMenu == 'user') ? 'active' : ''}}">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Data User
            </p>
          </a>
        </li>
        <li class="nav-header">Data Barang</li>
        <li class="nav-item">
          <a href="{{ url('/kategori')}}" class="nav-link {{ ($activeMenu == 'kategori') ? 'active' : ''}}">
            <i class="nav-icon far fa-bookmark"></i>
            <p>
              Kategori Barang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/barang')}}" class="nav-link {{ ($activeMenu == 'barang') ? 'active' : ''}}">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Barang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/suplier')}}" class="nav-link {{ ($activeMenu == 'suplier') ? 'active' : ''}}">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Suplier
            </p>
          </a>
        </li>
        <li class="nav-header">Data Transaksi</li>
        <li class="nav-item">
          <a href="{{ url('/stok') }}" class="nav-link {{ ($activeMenu == 'stok') ? 'active' : ''}}">
            <i class="nav-icon fas fa-cubes"></i>
            <p>
              Stok Barang
            </p>
          </a>
        </li>
        <li class="nav-item">
              <a href="{{ url('/barang')}}" class="nav-link {{ ($activeMenu == 'penjualan') ? 'active' : ''}}">
                <i class="nav-icon fas fa-cash-register"></i>
                <p>Transaksi Penjualan</p>
              </a>
        </li>
        </ul>
    </nav>
</div>
            {{-- <li class="nav-item">
              <a href="../UI/timeline.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Timeline</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../UI/ribbons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ribbons</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Forms
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../forms/general.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>General Elements</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../forms/advanced.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Advanced Elements</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../forms/editors.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editors</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../forms/validation.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Validation</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Tables
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../tables/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Tables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../tables/data.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DataTables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../tables/jsgrid.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
          <a href="../calendar.html" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Calendar
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../gallery.html" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Gallery
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../kanban.html" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Kanban Board
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Mailbox
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../mailbox/mailbox.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inbox</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../mailbox/compose.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Compose</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../mailbox/read-mail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Read</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pages
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../examples/invoice.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Invoice</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/profile.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/e-commerce.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>E-commerce</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/projects.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Projects</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/project-add.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Add</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/project-edit.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Edit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/project-detail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Detail</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/contacts.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/faq.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>FAQ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/contact-us.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contact us</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Extras
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Login & Register v1
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../examples/login.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Login v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/register.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Register v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/forgot-password.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Forgot Password v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/recover-password.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Recover Password v1</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Login & Register v2
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../examples/login-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Login v2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/register-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Register v2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/forgot-password-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Forgot Password v2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/recover-password-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Recover Password v2</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="../examples/lockscreen.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lockscreen</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/legacy-user-menu.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Legacy User Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/language-menu.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Language Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/404.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 404</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/500.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 500</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/pace.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pace</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/blank.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Blank Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../../starter.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Starter Page</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-search"></i>
            <p>
              Search
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../search/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Search</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../search/enhanced.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Enhanced</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">MISCELLANEOUS</li>
        <li class="nav-item">
          <a href="../../iframe.html" class="nav-link">
            <i class="nav-icon fas fa-ellipsis-h"></i>
            <p>Tabbed IFrame Plugin</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://adminlte.io/docs/3.1/" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Documentation</p>
          </a>
        </li>
        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Level 1</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Level 1
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Level 2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Level 2
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Level 2</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Level 1</p>
          </a>
        </li>
        <li class="nav-header">LABELS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div> --}}