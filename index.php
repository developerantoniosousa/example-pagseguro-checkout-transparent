<?php
require('init.php');


try {
    $sessionCode = \PagSeguro\Services\Session::create(
        \PagSeguro\Configuration\Configure::getAccountCredentials()
    )->getResult();
} catch (Exception $e) {
    die($e->getMessage());
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout transparente - PagSeguro</title>

  </head>
  <body>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    <script>
      PagSeguroDirectPayment.setSessionId('<?php echo $sessionCode; ?>');

      PagSeguroDirectPayment.createCardToken({
            cardBrand: 'visa',
            cardNumber: '4111111111111111',
            expirationMonth: '12',
            expirationYear: '2030',
            cvv: '123',
            success: function(r) {
              $.ajax({
                 url: 'payment.php',
                 type: 'POST',
                 data: {
                     senderHash: PagSeguroDirectPayment.getSenderHash(),
                     cardToken: r.card.token
                 },
                 // dataType: 'html',
                 success: function(json){
                     document.write(json);
                 },
                 error: function(r){
                     document.write(r)
                 }
              });
          }
        }
    );

    </script>
  </body>
</html>
