<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                       
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-bell"></span></a>
                        <div class="informer informer-danger">New</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span>Notifications</h3>                                
                                <div class="pull-right">
                                    <!--span class="label label-danger">5 new</span-->
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <?php
                                $uid = $_SESSION['user']['id'];
                                include '../conn.php';
                                if($_SESSION['user']['userType']=='client' OR $_SESSION['user']['userType']=='User')
                                 $qn = mysqli_query($con, "SELECT * FROM `notifications` WHERE uid='$uid'");
                             else if($_SESSION['user']['userType']=='Admin')
                                $qn = mysqli_query($con, "SELECT * FROM `notifications` WHERE type='admin'");
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
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    
                </ul>