<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Manage Student Details</title>
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <span class="logo_name"
          >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Administrator</span
        >
      </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboards</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Over all Population</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-box"></i>
            <span class="links_name">Person with Disabilities</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Senior Citizen</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Solo Parent</span>
          </a>
        </li>
  <!--ADD PA NG IBANG NAVIGATION HINDI LANG ITO -->
        <li class="log_out">
          <a href="logout.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search..." />
          <i class="bx bx-search"></i>
        </div>
      </nav>

      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Population</div>

              <div class="number">
                <!--PHP CODE HERE WHERE YOU WILL GET THE NUMBER OF FACULTY USER IN THE SYSTEM -->
              </div>
              <div class="indicator"></div>
            </div>
            <i class="bx bxs-user-circle circle"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Senior Citizen</div>
              <div class="number">
                <!--PHP CODE HERE WHERE YOU WILL GET THE NUMBER OF FACULTY USER IN THE SYSTEM -->
              </div>
              <div class="indicator"></div>
            </div>
            <i class="bx bxs-user-circle circle"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Solo Parent</div>
              <div class="number">
                <!--PHP CODE HERE WHERE YOU WILL GET THE NUMBER OF FACULTY USER IN THE SYSTEM -->
              </div>
              <div class="indicator"></div>
            </div>
            <i class="bx bxs-user-circle circle"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Overseas Filipino Workers</div>
              <div class="number">
                <!--PHP CODE HERE WHERE YOU WILL GET THE NUMBER OF FACULTY USER IN THE SYSTEM -->
              </div>
              <div class="indicator"></div>
            </div>
            <i class="bx bxs-user-circle circle"></i>
          </div>
        </div>
    </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
  </body>
</html>
