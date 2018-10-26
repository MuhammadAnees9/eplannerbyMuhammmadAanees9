<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="fa fa-comments"></span>Notifications</h3>
    <div class="pull-right">
    <!--span class="label label-danger">5 new</span-->
    </div>
  </div>
    <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
      <?php
      include 'conn.php';
        $uid = $_SESSION['user']['id'];
        if($_SESSION['user']['userType']=='User' OR $_SESSION['user']['userType']=='Business')
        $qn = mysqli_query($conn, "SELECT * FROM `notifications` WHERE uid='$uid'");
        else if($_SESSION['user']['userType']=='Admin')
        $qn = mysqli_query($conn, "SELECT * FROM `notifications` WHERE type='Admin'");
        while($resn = mysqli_fetch_assoc($qn)){ ?>
        <a href="#" class="list-group-item">
          <div class="list-group-status status-online"></div>
            <img src="../images/notify.png" class="pull-left" alt="John Doe"/>
              <span class="contacts-title">
              <?php 
              echo date("d-m-Y", strtotime($resn['createdAt'])).' at '.date("h:i A", strtotime($resn['createdAt']));
              ?>
              </span>
            <p><?php echo $resn['description']; ?></p>
          </a>
        <?php } ?>
      </div>   
    <div class="panel-footer text-center">
      <a href="Dashboard/pages-messages.html">Show all messages</a>
  </div>
</div>