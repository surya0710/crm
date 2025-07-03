<aside class="page-sidebar">
   <div class="left-arrow" id="left-arrow">
      <i data-feather="arrow-left"></i>
   </div>
   <div class="main-sidebar" id="main-sidebar">
      <ul class="sidebar-menu" id="simple-bar">
         <li class="sidebar-list">
            <i class="fa-solid fa-thumbtack"></i>
            <a class="sidebar-link" href="{{ route('dashboard') }}">
               <svg class="stroke-icon">
                  <use href="{{ asset('assets/css/iconly-sprite.svg#Home-dashboard') }}"></use>
               </svg>
               <h6>Dashboards</h6>
            </a>
         </li>
         <li class="sidebar-list">
            <i class="fa-solid fa-thumbtack"></i>
            <a class="sidebar-link" href="javascript:void(0)">
               <svg class="stroke-icon">
                  <use href="{{ asset('assets/css/iconly-sprite.svg#Calendar') }}"></use>
               </svg>
               <h6 class="f-w-600">Bookings</h6>
               <i class="iconly-Arrow-Right-2 icli"></i>
            </a>
            <ul class="sidebar-submenu">
               <li>
                  <a href="project-list.html">New Bookings</a>
               </li>
               <li>
                  <a href="projectcreate.html">Pending Bookings </a>
               </li>
               <li>
                  <a href="projectcreate.html">Cancelled Bookings </a>
               </li>
            </ul>
         </li>
         <li class="sidebar-list">
            <i class="fa-solid fa-thumbtack"></i>
            <a class="sidebar-link" href="file-manager.html">
               <svg class="stroke-icon">
                  <use href="{{ asset('assets/css/iconly-sprite.svg#Wallet') }}"></use>
               </svg>
               <h6 class="f-w-600">Refunds </h6>
            </a>
         </li>
         <li class="sidebar-list">
            <i class="fa-solid fa-thumbtack"></i>
            <a class="sidebar-link" href="kanban-board.html">
               <i class="fa-solid fa-arrow-right-arrow-left stroke-icon"></i>
               <h6 class="f-w-600">Exchange</h6>
            </a>
         </li>
         <li class="sidebar-list">
            <i class="fa-solid fa-thumbtack"></i>
            <a class="sidebar-link" href="letter-box.html">
               <svg class="stroke-icon">
                  <use href="{{ asset('assets/css/iconly-sprite.svg#Chart') }}"></use>
               </svg>
               <h6 class="f-w-600">Reports</h6>
            </a>
         </li>
      </ul>
   </div>
   <div class="right-arrow" id="right-arrow">
      <i data-feather="arrow-right"></i>
   </div>
</aside>