<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="index.php" 
       style="font-size: 1.25rem; color: #0d6efd; letter-spacing: 0.3px; transition: opacity 0.3s ease;"
       onmouseover="this.style.opacity='0.75'" onmouseout="this.style.opacity='1'">
      <img src="asset/imagenavbar.svg" alt="header-icon" 
           style="width: 32px; height: 32px; object-fit: contain; filter: drop-shadow(0 1px 2px rgba(0,0,0,0.1));">
      <span>Users Management</span>
    </a>
    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <!-- Added missing dropdown menu to fix HTML structure -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      
      <!-- Improved Search Form -->
      <form class="d-flex mx-lg-3 my-2 my-lg-0" role="search" style="width: 100%; max-width: 450px;">
        <input class="form-control me-2 rounded-pill px-4  border-primary fw-medium shadow-sm" type="search" placeholder="Search..." aria-label="Search">
        <button class="btn bs-secondary-bg-subtle rounded-pill border-primary px-4 fw-bold shadow-sm" type="submit">Search</button>
      </form>
      <div class="ms-auto">
        <a href="ajouter_user.php" class="text-dark" title="Ajouter User">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg>
        </a>
      </div>

    </div>
  </div>
</nav>