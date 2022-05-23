<!DOCTYPE html>
<html>

<head>
  <title>Online Shoppig site in India: Shop Online for Mobile, Books,....</title>
    <link rel="stylesheet" type="text/css" href="css files/electricity_bill.css">
    <link rel="stylesheet" type="text/css" href="css files/Header_final.css">
    
  <link rel="shortcut icon" href="favicon2.ico" type="image/x-icon">  
</head>

<body>
    <!-- !!!!!!!!!!!!!! Header !!!!!!!!!!!!!!!!!!! -->
   
    <?php include 'header.php'; ?>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!! Header Finished !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1 -->

    <div class='container'>

        <img src='Images/Home/amazon_pay.jpg' id="logo" width="100%">

        <div class="login_container">
            <p id='sign-in'>Electricity Bill</p>

            <form>
                <label for="state" class='label_for'>State</label>
                <select class="input_type" name="state">
                    <option value="Select">--Select--</option>
                    <option value="Andhra Pardersh">Andhra Pardersh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Punjab">Punjab</option>
                    <option value="West Bengal">West Bengal</option>
                </select>

                <label for="Electricity_board" class='label_for'>Select your Electricity Board</label>
                <select class="input_type" name="Electricity_board">
                    <option value="Select">--Select--</option>
                    <option value="Dakshin Haryana Bijli Vitran Nigam Limited">Dakshin Haryana Bijli Vitran Nigam
                        Limited</option>
                    <option value="Uttar Haryana Bijli Vitran Nigam Limited">Uttar Haryana Bijli Vitran Nigam
                        Limited</option>
                    <option value="Central Power Distribution Company Ltd. of Andhra Pradesh (APCPDCL)">Central
                        Power Distribution Company Ltd. of Andhra Pradesh (APCPDCL)</option>
                    <option value="Eastern Power Distribution Co Ltd (APEPDCL)">Eastern Power Distribution Co Ltd
                        (APEPDCL)</option>
                    <option value="Southern Power Distribution Co Ltd (APSPDCL)">Southern Power Distribution Co Ltd
                        (APSPDCL)</option>
                </select>

                <label for="Account Number" class='label_for'>Account Number</label>
                <input type="number" class='input_type' name="acc">

                <label for="contact" class='label_for'>Contact Number</label>
                <input type="number" class='input_type' name="contact">

                <button class="Sign_in_button">Fetch Bill</button>
            </form>

            <p>The payment will reflect at biller's end after 2-3 working days.
            </p>
        </div>


        <div class='save'>
            <p id="offers"><img src="Images/one_plus/offers.jpg"><span>Offers</span></p>
            <p><span> Extra ₹30 back</span> On recharge/bill payment of min value ₹200 on Alexa Device using Amazon Pay
                UPI/Amazon Pay Balance</p>
            <p><span>Win Scratch Cards Daily</span> Pay bills and Earn Cashback or Offers as Rewards Daily</p>
        </div>


        <div class='footer'>

            <a>Conditions of Use</a>
            <a>Privacy Notice</a>
            <a>Help</a>

            <p>©1996-2022 Amazon.com, Inc, or its affliates</p>

        </div>
    </div>

</body>

</html>