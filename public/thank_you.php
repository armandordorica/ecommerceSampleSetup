<?php require_once("../resources/config.php"); ?>
<?php require_once("cart.php"); ?>

<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>

<?php 

if(isset($_GET['tx'])){
     $amount = $_GET['amt'];
   $currency = $_GET['cc'];
$transaction = $_GET['tx'];
     $status = $_GET['st'];


$query = query("INSERT INTO Orders (order_amount, order_currency, order_transaction, order_status) VALUES ('{$amount}', '{$currency}', '{$transaction}', '{$status}')");
confirm($query);
session_destroy();

} else {

    redirect("index.php");
}
?> 





    <!-- Page Content -->
    <div class="container">
        <h1 class="text-center">THANK YOU</h1>
    </div>


        <!-- Footer -->
<?php include(TEMPLATE_FRONT .  "/footer.php");?>
