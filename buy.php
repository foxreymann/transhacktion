<?php
    include('header.php');
?>

    <div class="row" style="margin-top:10px"  >
      <form action="/trans.php" method="POST" id="braintree-payment-form">
        <p>
          <label>Card Number</label>
          <input type="text" size="20" autocomplete="off" data-encrypted-name="number" />
        </p>
        <p>
          <label>CVV</label>
          <input type="text" size="4" autocomplete="off" data-encrypted-name="cvv" />
        </p>
        <p>
          <label>Expiration (MM/YYYY)</label>
          <input type="text" size="2" data-encrypted-name="month" /> / <input type="text" size="4" data-encrypted-name="year" />
        </p>
        <input type="submit" id="submit" />
      </form>
    </div>
    <script type="text/javascript" src="https://js.braintreegateway.com/v1/braintree.js"></script>
    <script type="text/javascript">
var braintree = Braintree.create("MIIBCgKCAQEAqnRjQ/xEadtr8pvIPRIDn21k2HN1NxWlqzsSd6QKsjRBMppOF4ZoVc/L8HROzaqL0DSSYcAAmvu+KyDs1wup43zUtYrsxybK/QsxgfK3tgAGO2dBVb+Rngeejh7JtbtLaqjbQW9/QISoIByQ9BR1JJ8V/DPByR9b9dem7aKapr+kbYA+nJcz2pWekmel6aAAQgwIGBmjUIudbgON/XqyVAEUROU4jhPG1jLwjpMZgioD+rRJrEtwC5YWp5Gj6sw+BOi96IttjiHrEQkCpOMz49r4muzPYPxEWJCJLqhotmgWHdwGlkKkU3w7RaHJxpnKU9fWc7kbT9lF9ikCc0W+iQIDAQAB");
      braintree.onSubmitEncryptForm('braintree-payment-form');
    </script>
</div>

<?php
    include('footer.php');
?>
