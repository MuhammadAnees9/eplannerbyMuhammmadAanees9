<?php include 'header.php'; ?>
<style type="text/css">
    .fa {
        line-height: 2;
    }
    .tab-pane{
        margin: 3%;
    }
</style>
        <div class="page-container">
            
            <?php include 'sidebar.php'; ?>

            <div class="page-content">
                
                <?php include 'navbar.php'; ?>
                  
                <ul class="breadcrumb">
                    <?php 
    // gathering data about recipt
        include '../conn.php';
        @$plan = $_SESSION['user']['regPlan'];
        $fee = 0;
        if($plan=='monthly')
          $fee= 5000;
        else if($plan='yearly')
          $fee = 45000;
        else if($plan=='premium')
          $fee = 60000;
        else if($plan=='basic')
          $fee = 2500;
        else
          die("Invalid Input");
        $uid = $_SESSION['user']['id'];
                     ?>
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                
                <div class="page-content-wrap">
                   
<div class="row">
<div style="margin: 5%" class="col-md-12 col-sm-12 col-xs-12">
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Paypal</a></li>
  
  <li><a data-toggle="tab" href="#menu2">Easy Paisa</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Pay Via Paypal</h3>
   <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<div class="form-group col-sm-6">
    <input class="form-control" type="text" name="money" readonly="" value="Rs.<?php echo $fee; ?>">
</div>
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="herschelgomez@xyzzyu.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Hot Sauce-12oz. Bottle">
  <input type="hidden" name="amount" value="<?php echo $info['bookingFee'] ?>">
  <input type="hidden" name="currency_code" value="PKR">

  <!-- Display the payment button. -->
  <input class="" type="image" name="submit" border="0"
  src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png"
  alt="Pay Now">
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
  </div>
  
  <div id="menu2" class="tab-pane fade">
    <h3>Pay Via EasyPaisa</h3>
    <?php 
    if(isset($_POST['easypaisa'])){
      $cnic = $_POST['cnic'];
      $account = $_POST['account'];
      $amount = $_POST['amount'];
      $easy = mysqli_query($con, "INSERT INTO `payments`(cardNumber, amount, method, uid) VALUES('$account', '$amount', 'EasyPaisa', '$uid')");
      if($easy)
      {
        $up = mysqli_query($con, "UPDATE `business` SET Paid='Yes' WHERE ownerId='$uid'");
        if($up){
          $fullName = $_SESSION['user']['fullName'];
          $noti = $fullName.' Made payment for his Business';
          $qn = mysqli_query($con, "INSERT INTO `notifications`(type, description) VALUES('Admin', '$noti', '$uid')");
          echo "Thanks for Your Payments";
        }
      }
    }

     ?>
    <form method="post" action="">
      <div class="form-group col-sm-12 col-md-12">
        <label>Your CNIC:</label>
        <input type="text" name="cnic" class="form-control">
      </div>
      <div class="form-group col-sm-12 col-md-12">
        <label>Your Mobile#(Easy Pasia Account):</label>
        <input type="text" name="account" class="form-control">
      </div>
      <div class="form-group col-sm-12 col-md-12">
        <label>Amount:</label>
        <input type="text" name="amount" class="form-control" value="<?php echo $fee ?>" readonly="">
      </div>
      <button class="btn btn-primary" name="easypaisa">PAY</button>
    </form>
    

  </div>
</div>
</div>
</div>

                </div>                                
            </div>            
        </div>

<?php include 'footer.php'; ?>
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("select").addClass("form-control");
            });
        </script>
