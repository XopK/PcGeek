 <div class="row flex-nowrap">


     <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: rgb(14, 19, 54)">
         <nav class="navbar" style="background-color: rgb(14, 19, 54)">
             <div class="container-fluid">
                 <a class="navbar-brand" href="admin">PcGeek</a>
             </div>
         </nav>
         <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
             <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                 id="menu">
                 <li class="nav-item">
                     <a href="/admin" class="nav-link d-flex align-items-center px-0">
                         <span class="material-symbols-outlined">
                             forum
                         </span> <span class="ms-1 d-none d-sm-inline px-2">Посты</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/admin/components" class="nav-link d-flex align-items-center px-0">
                         <span class="material-symbols-outlined">
                             settings
                         </span> <span class="ms-1 d-none d-sm-inline px-2">Компоненты</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link d-flex align-items-center px-0">
                         <span class="material-symbols-outlined">
                             warning
                         </span> <span class="ms-1 d-none d-sm-inline px-2">Жалобы</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link d-flex align-items-center px-0">
                         <span class="material-symbols-outlined">
                             shield
                         </span> <span class="ms-1 d-none d-sm-inline px-2">Модераторы</span>
                     </a>
                 </li>
             </ul>
             <hr>
             <div class="dropdown pb-4">
                 <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                     id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="/images/profile.svg" alt="hugenerd" width="30" height="30" class="rounded-circle">
                     <span class="d-none d-sm-inline mx-1">admin</span>
                 </a>
                 <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                     <li><a class="dropdown-item" href="#">Настройки</a></li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>
                     <li><a class="dropdown-item" href="/logout">Выйти</a></li>
                 </ul>
             </div>
         </div>
     </div>
