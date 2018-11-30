<!-- start of header -->
<div class="wrapper">
  <div class="header-top cf">
    <h1>
      <a href="index.php" title="United Health Care">
        <img src=assets/images/logo.png alt="United Health Care">
        United Health Care
      </a>
    </h1>
    <div class="header-generator">
      <span class="capitalize">value story generator</span>
    </div><!-- end of header-generator -->
  </div><!-- end of header-top -->
  <div class="header-bottom cf">
    <nav>
      <ul>
        <!-- menu for non-login users (starts)-->
        <?php
        session_start();
        if(!isset($_SESSION['user_id'])) {
        ?>
        <li>
          <a class="capitalize" href="login.php" title="Login">login</a>
        </li>
        <li>
          <a class="capitalize" href="signup.php" title="Sign Up">Sign Up</a>
        </li>
        <?php
        } else {
          // function __autoload($classname)
          // {
          //     include "classes/$classname.php";
          // }
          $user = new Users();
          $user_id = $_SESSION['user_id'];
          $name = $user->getNameById($user_id);
        ?>
        <!-- menu for non-login users (end)-->
        <!-- menu for login users (starts) -->
        <li>
          <span class="uppercase" title="#FIXME"><?php echo $name; ?></span>
        </li>
        <li>
          <a class="capitalize" href="includes/logout.php">log out</a>
        </li>
        <?php
        }
        ?>
        <!-- menu for login users (ends) -->
        <!-- menu for all types of users (starts)-->
        <li>
          <a class="capitalize" href="#FIXME" title="Help">Help +</a>
        </li>
        <!-- menu for all types of users (ends)-->
      </ul>
    </nav>
  </div><!-- end of header-bottom -->
</div><!-- end of header wrapper -->
<!-- end of header -->
