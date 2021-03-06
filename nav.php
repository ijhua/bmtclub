<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
    <i class="fa fa-bars"></i>
  </a>
    <a href="index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="index.php#announcements" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-bullhorn"></i> ANNOUNCEMENTS</a>
    <a href="index.php#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-question-circle"></i> ABOUT</a>
    <a href="index.php#join" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-users"></i> JOIN</a>
    <a href="index.php#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-address-card"></i> CONTACT</a>
    <div class="dropdown w3-hide-small">
      <button class="dropbtn">MORE <i class="fas fa-caret-down"></i>
    </button>
      <div class="dropdown-content">
        <a href="officers.php">Meet The Officers</a>
      </div>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="index.php#announcements" class="w3-bar-item w3-button" onclick="toggleFunction()">ANNOUNCEMENTS</a>
    <a href="index.php#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="index.php#join" class="w3-bar-item w3-button" onclick="toggleFunction()">JOIN</a>
    <a href="index.php#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="officers.php" class="w3-bar-item w3-button" onclick="toggleFunction()">MEET THE OFFICERS</a>
  </div>
</div>