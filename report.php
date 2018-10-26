<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Punjab Traffic Police</title>
    <link rel="stylesheet" type="text/css" href="buttonBS.css">
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    a{
        text-decoration: none;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>
<?php 
include 'conn.php';
$uid = $_GET['uid'];
$bid = $_GET['bid'];
$query = "SELECT `bookings`.*, `business`.bname, `business`.blocation, `business`.bcity, `users`.* FROM `bookings` LEFT JOIN `users` ON `bookings`.uid=`users`.id LEFT JOIN `business` ON `bookings`.bid=`business`.id WHERE `bookings`.id='$bid' AND `bookings`.bstatus='Approved'";

$allData = mysqli_query($conn, $query);

while($data = mysqli_fetch_assoc($allData)){
    
 ?>

<body>
    <div class="invoice-box" style="margin-top: 5%">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="images/logo2.png" style="width:100%; max-width:300px;">

                            </td>
                            
                            <td>
                                <h2>Event Management System</h2>
                            <?php 
                            echo '
                                Invoice #: '.$data['id'].'<br>
                                Order Date: <b>'.Date("F d, Y",strtotime($data['createdAt'])).'</b>';
                            ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <?php echo $data['bname'] ?><br>
                                <?php echo $data['contact'] ?>
                            </td>
                            
                            <td>
                                Event Location:
                                <b><?php echo $data['blocation'].', '.$data['bcity'] ?></b>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    <?php echo $data['bname'] ?>
                </td>
                
                <td>
                    
                </td>
            </tr>
            
            <tr class="details">
                <th style="text-align: left;">
                    Event Type
                </th>
                
                <th style="text-align: left;">
                    Charges
                </th>
            </tr>
            <tr class="details">
                <td style="text-align: left;">
                    <?php echo $data['eventType'] ?>
                </td>
                <td style="text-align: left;">
                    Rs.35000/-
                </td>
            </tr>
            
            
            
            
            
        </table>
    </div>
    <div class="bdiv">
    <button class="btn btn-primary" onclick="prt()">Print</button>
    <br> <br> <br>
    <a class="btn btn-success" href="index.php">Back</a>
    </div>
</body>
<?php } ?>
</html>
<script type="text/javascript">
    function prt()
    {
        window.print();
    }
</script>