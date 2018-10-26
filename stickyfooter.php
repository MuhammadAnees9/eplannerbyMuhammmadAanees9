 <!-- Sticky Footer -->
  	<footer class="page-footer" style="background-color: #424342">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">EMS</h5>
                <p class="grey-text text-lighten-4">You can Book or advertise any Event.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="">Delas</a></li>
                  <li><a class="grey-text text-lighten-3" href="Project/category.php">Category</a></li>
                  <li><a class="grey-text text-lighten-3" href="Project/faqs.php">FAQ's</a></li>
                  <li><a class="grey-text text-lighten-3" href="Project/about.php">About US</a></li>
                  <li><a class="grey-text text-lighten-3" href="Project/ontact.php">Contact US</a></li>

                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Event Management
            <a class="grey-text text-lighten-4 right" href="dashboard.php">Dashboard</a>
            </div>
          </div>
        </footer>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    </body>
    <script type="text/javascript">
      $(document).ready(function(){
         $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){  } //Function for after opening timepicker
  });
           $('.datepicker').pickadate({
    selectMonths: false, // Creates a dropdown to control month
    selectYears: false, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: true // Close upon selecting a date,
  });
     
      });
    </script>
  </html>

        <!-- <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright ©  assort tech Your Website 2018</span>
            </div>
          </div>
        </footer> -->