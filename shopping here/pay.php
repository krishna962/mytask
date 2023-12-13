<?php
// include footer.php file
include ('header.php');
?>

<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Here</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- OwlCarousel2 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>
<body>


 <!-- <a href="paysuccess.php">
 <button type="button"  class="btn btn-primary m-4">pay.₹12499</button> 
  </a> -->

 <!-- <form>
<script src = "https://cdn.razorpay.com/static/widget/payment-button.js"
data-payment_button_id = "pl_LatgEd6cmU5N1L"
<a href="paysuccess.php">
    data-button_text = "Buy Now"
 </a>
// data-button_text = "Buy Now"
data-button_theme = "brand-color">
</script>
</form>
     -->

    


<!-- test mode somethink -->

<a href="paysuccess.php">
<button type="button" id="rzp-button1" class="btn btn-primary m-4">Place Your Order</button> 
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

</a>


<!-- end test mode somethink -->

<script>
var options = {
    "key": "rzp_test_0uX0I1gGhWLKLJ", 
    "amount": "1000", 
    "currency": "INR",
    "name": "Shopping Here PVT Limited",
    "description": "Test & Payment ",
    "image": "logo.png",
    "order_id": "order_IluGWxBm9U8zJ8",
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "Krishna Vishwakarma",
        "email": "krishnavi1811@gmail.com",
        "contact": "8429988148"
    },
    "notes": {
        "address": "Shopping Here store pvt Limited .."
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>





    
</body>
</html>

<?php
        endif;
        endforeach;
?>


<?php
// include footer.php file
include ('footer.php');
?>