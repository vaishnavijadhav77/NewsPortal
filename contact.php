<?php
include('header.php');
?>

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <h2>Contact Us</h2>
            <form action="send_mail.php" method="post" class="contact_form">
              <input class="form-control" type="text" name="name" placeholder="Name*">
              <textarea class="form-control" cols="30"  name="mail_msg" rows="10" placeholder="Feedback*"></textarea>
              <input type="submit" name="submit" value="Send Message">
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  <?php
  include('footer.php');
  ?>
  
 