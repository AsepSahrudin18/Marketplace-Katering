 <!-- Sidebar scroll-->
 <div>
     <div class="brand-logo d-flex align-items-center justify-content-between">
         <h5 class="text-center"><span class="fw-lighter">Marketplace</span>.<span
                 class="text-secondary fw-bolder">Katering</span>
         </h5>
         <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
             <i class="ti ti-x fs-8"></i>
         </div>
     </div>
     <!-- Sidebar navigation-->
     <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
         <ul id="sidebarnav">
             <li class="nav-small-cap">
                 <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                 <span class="hide-menu">Home</span>
             </li>
             <li class="sidebar-item">
                 <a class="sidebar-link" href="./index.html" aria-expanded="false">
                     <span>
                         <i class="ti ti-layout-dashboard"></i>
                     </span>
                     <span class="hide-menu">Dashboard</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="{{ route('menus.index') }}" aria-expanded="false">
                     <span>
                         <i class="ti ti-article"></i>
                     </span>
                     <span class="hide-menu">Menu</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="{{ route('orders.index') }}" aria-expanded="false">
                     <span>
                         <i class="ti ti-cards"></i>
                     </span>
                     <span class="hide-menu">Orders</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="{{ route('my-account') }}" aria-expanded="false">
                     <span>
                         <i class="ti ti-mail fs-6"></i>
                     </span>
                     <span class="hide-menu">My Account</span>
                 </a>
             </li>
         </ul>
     </nav>
     <!-- End Sidebar navigation -->
 </div>
 <!-- End Sidebar scroll-->
