  <!--==========================
    Footer
  ============================-->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">Virtual Voting System</a>
            <p>Rwanda, Officially The Republic Of Rwanda, Is A Landlocked Country In The Great Rift Valley, Where The African Great Lakes Region And East Africa Converge. Located A Few Degrees South Of The Equator, Rwanda Is Bordered By Uganda, Tanzania, Burundi, And The Democratic Republic Of The Congo.</p>

          </div>
        </div>
        <div class="col-md-12 col-lg-4" style="margin-left: 30%;">
              <div class="btns" style="margin-left: 50%;align-items: center;justify-content: center;margin-top: 2em">
                <a href="#" style="color: white;text-transform: none;text-decoration: none;margin-left: 5%;">
                    <i class="fa fa-instagram" style="font-size:2.2em; "></i>
                </a>
                <a href="#" style="color: white;text-transform: none;text-decoration: none;margin-left: 5%;">
                    <i class="fa fa-twitter" style="font-size:2.2em; "></i>
                </a>
                <a href="#" style="color: white;text-transform: none;text-decoration: none;margin-left: 5%;">
                    <i class="fa fa-linkedin" style="font-size:2.2em; "></i>
                </a>
              </div>
        </div>


        <!-- <div class="col-sm-6 col-md-3 col-lg-2" style="margin-left: 50%">
          <div class="list-menu">

            <h4>Links</h4>

            <ul class="list-unstyled">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div> -->
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights Virtual Voting System. All rights reserved.</p>
        <div class="credits">
          Designed by <a href="#">Depick LLC</a>
        </div>
      </div>
    </div>

  </footer>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <!-- <script src="lib/jquery/jquery-migrate.min.js"></script> -->
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/modal-video/js/modal-video.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="js/main.js"></script>

  <script type="text/javascript">
      function select_position() {
          let selected_position = document.getElementById('position_name').value;
          $.ajax({
            url: "controller.php",
            type: "post",
            async: false,
            data: {
              get_candidates : 'get_candidates',
              selected_position : selected_position,
            },
            success: function (data) {
              $("#candidateSection").html(data);
              // alert(data);
            }
          });
      }
  </script>

</body>
</html>