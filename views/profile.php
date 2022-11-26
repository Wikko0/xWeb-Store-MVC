<?php
/** @var $this \app\core\View */

$this->title = 'Account | XWEB';
$this->subtitle = 'Account';
?>
<link rel="stylesheet" href="css/style-shop.css">
<main>
    <!-- Start DEMO HTML (Use the following code into your project)-->
    <div class="app">
        <div class="closewindow">
            <span>x</span>
        </div>
        <h2>Cart Details</h2>
        <i class="fa fa-shopping-basket fa-3x" aria-hidden="true"></i>
        <p>You have choose the following items.</p>
        <div class="tooltipshop">Не вписан артикул</div>
        <div class="tooltipshop2">Выберите товар</div>
        <div class="app-body">
            <ul class="list">
            </ul>
        </div>
        <div class="openpopup">
            Check out
        </div>
        <div class="openpopup2">
            Clear Cart
        </div>
    </div>
    <div class="b-popup" id="popup1">
        <div id="smart-button-container">
            <div style="text-align: center;">
                <div id="paypal-button-container"></div>
            </div>
        </div>
        <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
        <script>
            function initPayPalButton() {
                paypal.Buttons({
                    style: {
                        shape: 'rect',
                        color: 'gold',
                        layout: 'vertical',
                        label: 'buynow',

                    },

                    createOrder: function(data, actions) {
                        return actions.order.create({
                            purchase_units: [{"description":"XWeb CMS","amount":{"currency_code":"USD","value":50}}]
                        });
                    },

                    onApprove: function(data, actions) {
                        return actions.order.capture().then(function(orderData) {

                            // Full available details
                            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                            // Show a success message within this page, e.g.
                            const element = document.getElementById('paypal-button-container');
                            element.innerHTML = '';
                            element.innerHTML = '<h3>Thank you for your payment!</h3>';

                            // Or go to another URL:  actions.redirect('thank_you.html');

                        });
                    },

                    onError: function(err) {
                        console.log(err);
                    }
                }).render('#paypal-button-container');
            }
            initPayPalButton();
        </script>
    </div>
    <div id="tray">
        <div class="count">

        </div>
        <i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i>
    </div>

    <h2> Buy website when choose products to add in your cart.</h2>

    <div id="market">

        <div class="items product">
            <img src="img/buy.png">
        </div>
    </div>

    <!-- END EDMO HTML (Happy Coding!)-->
</main>
