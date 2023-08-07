<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Science PH" />
    <link rel="stylesheet" href="./style.css" />
    <title>Science PH | Admin Dashboard</title>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
  </head>
  <body>
    <div class="grid-container">
      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="logo"><img src="./assets/images/scienceph-logo.png" alt="" /></div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="admin-dashboard.html" target=""> <span class="material-icons-outlined">dashboard</span> Dashboard </a>
          </li>
          <li class="sidebar-list-item">
            <a href="admin-articles.html" target=""> <span class="material-icons-outlined">inventory_2</span> Manage Articles </a>
          </li>
          <!-- <li class="sidebar-list-item">
            <a href="#" target="_blank"> <span class="material-icons-outlined">fact_check</span> Inventory </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank"> <span class="material-icons-outlined">add_shopping_cart</span> Purchase Orders </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank"> <span class="material-icons-outlined">shopping_cart</span> Sales Orders </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank"> <span class="material-icons-outlined">poll</span> Reports </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank"> <span class="material-icons-outlined">settings</span> Settings </a>
          </li> -->
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
        </div>

        <div class="main-cards">
          <div class="card">
            <div class="card-inner">
              <p class="text-primary">ARTICLES</p>
              <span class="material-icons-outlined text-blue">library_books</span>
            </div>
            <span class="text-primary font-weight-bold">0</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">VIDEOS</p>
              <span class="material-icons-outlined text-orange">smart_display</span>
            </div>
            <span class="text-primary font-weight-bold">0</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">VIEWS</p>
              <span class="material-icons-outlined text-green">ads_click</span>
            </div>
            <span class="text-primary font-weight-bold">0</span>
          </div>

          <!-- <div class="card">
            <div class="card-inner">
              <p class="text-primary">INVENTORY ALERTS</p>
              <span class="material-icons-outlined text-red">notification_important</span>
            </div>
            <span class="text-primary font-weight-bold">0</span>
          </div> -->
        </div>

        <div class="charts">
          <div class="charts-card">
            <p class="chart-title">Articles Uploaded</p>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Videos Statistics</p>
            <div id="area-chart"></div>
          </div>
        </div>
      </main>
      <!-- End Main -->
    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="./scripts.js"></script>
  </body>
</html>
