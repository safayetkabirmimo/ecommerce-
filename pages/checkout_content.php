<?php
if (isset($_POST['signup'])) {
    $obj_app->save_customer_info($_POST);
}
?>
<script>
    var xmlHttp = new XMLHttpRequest();
    function ajax_email_check(given_email, objID) {
        //alert(objID);
        var server_page = 'ajax_email_check.php?email=' + given_email;
        xmlHttp.open('$_GET', server_page);
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                document.getElementById(objID).innerHTML = xmlHttp.responseText;
                if (xmlHttp.responseText == 'Email Already Exists') {
                    document.getElementById('signup').disabled = true;
                } else {
                    document.getElementById('signup').disabled = false;
                }
            }
        }
        xmlHttp.send(null);
    }
</script>


<body>

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>You have to <a href="login.php"> <h2><strong>Login</strong></h2></a> to complete your valuable order. If you are not registered then please register first.</h2>
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    

                    <div class="single-sidebar">
                        <div class="thubmnail-recent">
                                                       
                        </div>
                        
                        <div class="thubmnail-recent">
                                                        
                        </div>
                        <div class="thubmnail-recent">
                                                        
                        </div>
                    </div>

                    <div class="single-sidebar">
                        
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        

                            <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">

                                <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Billing Details</h3>


                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">First Name <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input id="name" name="first_name" type="text" placeholder="Enter your name" class="form-control input-md" required="">
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Last Name <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input id="name" name="last_name" type="text" placeholder="Enter your name" class="form-control input-md" required="">
                                            </p>
                                            <div class="clear"></div>

                                            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                <label class="" for="billing_email">Email Address <abbr title="required" class="required" onblur="ajax_email_check(this.value, 'res');">*</abbr>
                                                    <span id="res"></span>
                                                </label></abbr>
                                                <input id="email" name="email_address" type="email" placeholder="Enter your email id" class="form-control input-md" required="" onblur="ajax_email_check(this.value, 'res');">
                                            </p>
                                            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                <label class="" for="billing_email">Password <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="">
                                            </p>
                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input id="contact" name="phone_number" type="number" placeholder="Enter your contact no." class="form-control input-md" required="">
                                            </p>
                                            <div class="clear"></div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="blood_group">Blood Group</label>
                                                <div class="col-md-8">
                                                    <select id="blood_group" name="blood_group" class="form-control">
                                                        <option value="-1" >Select</option>
                                                        <option value="1">A+</option>
                                                        <option value="2">B+</option>
                                                        <option value="3">AB+</option>
                                                        <option value="4">O+</option>
                                                        <option value="5">A-</option>
                                                        <option value="6">B-</option>
                                                        <option value="7">AB-</option>
                                                        <option value="8">O-</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="street">Address</label>  
                                                <div class="col-md-8">
                                                    <textarea class="form-control" name="address" required=""></textarea>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="city">City</label>  
                                                <div class="col-md-8">
                                                    <input id="city" name="city" type="text" placeholder="Enter your city" class="form-control input-md" required="">
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="dist">District</label>  
                                                <div class="col-md-8">
                                                    <input id="dist" name="district" type="text" placeholder="Enter your district" class="form-control input-md" required="">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="signup"></label>
                                                <div class="col-md-8">
                                                    <button type="submit" id="signup" name="signup" class="btn btn-success btn-block">Sign Up</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                </div>


                            </form>

                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>

</body>