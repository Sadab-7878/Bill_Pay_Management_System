<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!-- START OF DASHBOARD SECTION  -->
    <section id="menu">
      <div class="logo">
        <img src="logo.png" alt="" />
        <!-- <h2>pay</h2> -->
      </div>

      <div class="items">
        <li><i class="fas fa-chart-pie"></i> <a href="#">Dashboard</a></li>
        <li>
          <i class="fad fa-hand-holding-water"></i> <a href="wdisplay.php">Water bill</a>
        </li>
        <li><i class="fal fa-burn"></i> <a href="gdisplay.php">Gas Bill</a></li>
        <li><i class="fas fa-wifi"></i><a href="itdisplay.php">Internet Bill</a></li>
        <li><i class="far fa-bolt"></i><a href="eldisplay.php">Electricity Bill</a></li>
        <li><i class="fas fa-sign-out-alt"></i><a href="Admin_login.php">Logout</a></li>
      </div>
    </section>

    <!-- END OF DASHBOARD SECTION  -->

    <!-- START OF INTERFACE SECTION  -->

    <!-- START OF NAVBAR FROM INTERFACE SECTION  -->
    <section id="interface">
      <div class="navigation">
        <div class="n1">
          <div class="search">
            <i class="far fa-search"></i
            ><!-- icon class -->
            <input type="text" placeholder="search" />
          </div>

          <div class="profile">
            <!-- <i class="far fa-bell"></i> -->
            <!-- <img src="1.jpg" alt="" /> -->
          </div>
        </div>
      </div>

      <!-- END OF NAVBAR FROM INTERFACE SECTION  -->

      <!-- START OF DASHBOARD FROM INTERFACE SECTION  -->
      <h3 class="i-name">Dashboard</h3>
      <div class="values">
        <div class="val-box">
          <i class="fas fa-users"></i>
          <div>

            <?php 

                require 'connection.php';

                $query = "SELECT count(*) as total from auth";
                $result = mysqli_query($conn,$query);
                $data=mysqli_fetch_assoc($result);
               


               

                

               

                  echo $data['total'];
                
            
            ?>
           
            <span><h3>New Users</h3></span>
          </div>
        </div>

        <div class="val-box">
          <i class="fas fa-money-bill-wave"></i>
          <div>

          <?php 

              require 'connection.php';

                $query = "SELECT count(*) as total from auth";
                $result = mysqli_query($conn,$query);
                $data=mysqli_fetch_assoc($result);









                echo $data['total'];


              ?>
            
            <span><h3>This Month</h3></span>
          </div>
        </div>

        <div class="val-box">
          <i class="fas fa-history"></i>
          <div>
          <?php 

            require 'connection.php';

        $query = "SELECT count(*) as total from auth";
        $result = mysqli_query($conn,$query);
        $data=mysqli_fetch_assoc($result);









      echo $data['total'];


?>
            <span><h3>Payment History</h3></span>
          </div>
        </div>

        <div class="val-box">
          <i class="fas fa-info-square"></i>
          <div>
            <h3>0</h3>
            <span>Order Details</span>
          </div>
        </div>
      </div>
      <!-- END OF DASHBOARD FROM INTERFACE SECTION  -->

      <!-- START OF ADMIN BOARD FROM INTERFACE SECTION  -->

      <div class="board">
        <table width="100%">
          <thead>
            <tr>
              <td>Name</td>
              <td>Title</td>
              <td>Status</td>
              <td>Role</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="people">
                <img src="1.jpg" alt="" />
                <div class="people-de">
                  <h5>Md.Yousuf</h5>
                  <p>myousuf193006@bscse.uiu.ac.bd</p>
                </div>
              </td>
              <td class="people-des">
                <h5>Software Engineer</h5>
                <p>web dev</p>
              </td>
              <td class="active"><p>Active</p></td>
              <td class="role">
                <p>Admin</p>
              </td>
              <td class="edit"><a href="#">Edit</a></td>
            </tr>

            <tr>
              <td class="people">
                <img src="2.jpg" alt="" />
                <div class="people-de">
                  <h5>Md.Al-Amin</h5>
                  <p>alaminhridoy2222@gmail.com</p>
                </div>
              </td>
              <td class="people-des">
                <h5>Software Engineer</h5>
                <p>web dev</p>
              </td>
              <td class="active"><p>Active</p></td>
              <td class="role">
                <p>Admin</p>
              </td>
              <td class="edit"><a href="#">Edit</a></td>
            </tr>

            <tr>
              <td class="people">
                <img src="3.jpg" alt="" />
                <div class="people-de">
                  <h5>Sadab-Uz-Zaman</h5>
                  <p>sadabuzzaman75@gmail.com</p>
                </div>
              </td>
              <td class="people-des">
                <h5>Software Engineer</h5>
                <p>web dev</p>
              </td>
              <td class="active"><p>Active</p></td>
              <td class="role">
                <p>Admin</p>
              </td>
              <td class="edit"><a href="#">Edit</a></td>
            </tr>
            <tr>
              <td class="people">
                <img src="4.jpg" alt="" />
                <div class="people-de">
                  <h5>Meherab Hossain</h5>
                  <p>meherab788@gmail.com</p>
                </div>
              </td>
              <td class="people-des">
                <h5>Software Engineer</h5>
                <p>web dev</p>
              </td>
              <td class="active"><p>Active</p></td>
              <td class="role">
                <p>Admin</p>
              </td>
              <td class="edit"><a href="#">Edit</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </body>
</html>
