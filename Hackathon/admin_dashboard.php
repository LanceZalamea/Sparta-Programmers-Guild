<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="admin.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Administrator</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Demography</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Demography</a></li>
          <li><a href="#">POPULATION</a></li>
          <li><a href="#">AVERAGE HOUSEHOLDS SIZE </a></li>
          <li><a href="#">HEALTH AND NUTRITION</a></li>
          <li><a href="#">HOUSING</a></li>
          <li><a href="#">WATER AND SANITATION</a></li>
          <li><a href="#">BASIC EDUCATION</a></li>
          <li><a href="#">INCOME AND LIVELIHOOD</a></li>
          <li><a href="#">PEACE AND ORDER</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection'></i>
            <span class="link_name">Filipino Overseas & Workers</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Filipino Overseas & Workers</a></li>
          <li><a href="#">HOUSEHOLDS</a></li>
          <li><a href="#">TOTAL POPULATION</a></li>
          <li><a href="#">FILIPINO OVERSEAS</a></li>
          <li><a href="#">FILIPINO OVERSEAS</a></li>
            <li><a href="#">Employed Members of the Labor Office</a></li>
            <li><a href="#">Unemployed Members of the Labor Office</a></li>
            <li><a href="#">Under Employed Workers</a></li>
        </ul>
      </li>

      <li>
      <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">PWD, Senior Citizen, Solo Parent</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">PWD, Senior Citizen, Solo Parent</a></li>
          <li><a href="#">HOUSEHOLDS</a></li>
          <li><a href="#">TOTAL POPULATION</a></li>
          <li><a href="#">FILIPINO OVERSEAS</a></li>
          <li><a href="#">FILIPINO OVERSEAS</a></li>
            <li><a href="#">Employed Members of the Labor Office</a></li>
            <li><a href="#">Unemployed Members of the Labor Office</a></li>
            <li><a href="#">Under Employed Workers</a></li>
        </ul>
      </li>
    
      <li>
      <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Agriculture</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Agriculture</a></li>
          <li><a href="#">HOUSEHOLDS</a></li>
          <li><a href="#">TOTAL POPULATION</a></li>
          <li><a href="#">FILIPINO OVERSEAS</a></li>
          <li><a href="#">FILIPINO OVERSEAS</a></li>
            <li><a href="#">Employed Members of the Labor Office</a></li>
            <li><a href="#">Unemployed Members of the Labor Office</a></li>
            <li><a href="#">Under Employed Workers</a></li>
        </ul>
      </li>

      <li>
      <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Agriculture</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Agriculture</a></li>
          <li><a href="#">HOUSEHOLDS</a></li>
          <li><a href="#">TOTAL POPULATION</a></li>
          <li><a href="#">FILIPINO OVERSEAS</a></li>
          <li><a href="#">FILIPINO OVERSEAS</a></li>
            <li><a href="#">Employed Members of the Labor Office</a></li>
            <li><a href="#">Unemployed Members of the Labor Office</a></li>
            <li><a href="#">Under Employed Workers</a></li>
        </ul>
      </li>
     
     
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name"></div>
        <div class="job"></div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Dashboard</span>
    </div>
  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
