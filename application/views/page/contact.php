<title><?php echo $page_title;?></title> 
<!-- Wrapper -->
    <div class="wrapper">

      <!-- Fullscreen Picture -->
    <div class="fullscreen5">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-6">
            <h1 class="animated slideInDown"><strong>Let's Connect.</strong></h1>
            <hr class="animated slideInDown delay-1">
			<br>
			<br>
			<br>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </div> <!-- / .fullscreen -->    

      <div class="container about_pg">
        <div class="row">
          <div class="col-sm-8">
            <h3 class="headline first-child"><span style="color:#006091;">Contact US</span></h3>
            <p>Drop us an email or give us a shout. We're here to help you with all your questions and development needs.</p>
            <?php echo $this->session->flashdata('msg_email_sent');?>
            <form role="form" action="<?php echo site_url('contact_process')?>" method="post">
              <div class="form-group">
                <label for="email"><span style="color:#006091;">Your email address</span></label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email'); ?>
              </div>
              <div class="form-group">
                <label for="name"><span style="color:#006091;">Your name</span></label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo set_value('name'); ?>">
                       <?php echo form_error('name'); ?>
              </div>
              <div class="form-group">
                <label for="message"><span style="color:#006091;">Your message</span></label>
                <textarea class="form-control" rows="3" id="message" placeholder="Enter message" name="message"><?php echo set_value('message'); ?></textarea>
                <?php echo form_error('message'); ?>
              </div>
              <div class="form-group">
                <?php echo $recaptcha_html;
                if($this->input->post() && !$this->recaptcha->getIsValid()){
                  echo 'incorrect captcha';
                }
                ?>
              </div>
                
              <button type="submit" class="btn btn-lg btn-red">Send Request</button>
            </form>
          </div>
          <div class="col-sm-4">
            <h3 class="headline second-child"><span style="color:#006091;">Our Address</span></h3>
            <p>
             300 Perimeter Center North,<br />
              Atlanta GA,30346<br />
              <i class="fa fa-phone-square"></i>&nbsp;&nbsp;Phone: + 404 337 6994<br />
              <i class="fa fa-fax"></i>&nbsp;&nbsp;Fax: + 470 375 7691<br />
             <i class="fa fa-envelope-o"></i> &nbsp;&nbsp; Email: <a href="#">service@novatross.com</a>
            </p>
            <h3 class="headline"><span style="color:#006091;">Map Us</span></h3>
            <div class="google-maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1655.1821265433973!2d-84.3349036!3d33.9317584!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5095de1b2d43d%3A0xfdca0da5f0e7ba99!2s303+Perimeter+Center+N!5e0!3m2!1sen!2sus!4v1401421558849" width="400" height="300" frameborder="0" style="border:0"></iframe>
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->