<?php
include 'includes/overall/header.php';
?>
<!--    Put your code here  -->
<br/>
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="contactForm" name="sentMessage" class="contact-form" name="sentMessage" novalidate>
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group control-group"><i class="glyphicon glyphicon-user"></i>
                            <label>Name *</label>
                             <div class="controls">
                                <input type="text" class="form-control" placeholder="Full Name" id="name" required data-validation-required-message="Please enter your name" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="form-group control-group"><i class="glyphicon glyphicon-envelope"></i>
                            <label>Email *</label>
                            <div class="controls">
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email" />
                            </div>
                        </div>                  
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group control-group"><i class="glyphicon glyphicon-pencil"></i>
                            <label>Message *</label>
                            <div class="controls">
                                 <textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" 
                                maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"> </div> <!-- For success/fail messages -->                   
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg" >Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
<?php include 'includes/overall/footer.php'; ?>
