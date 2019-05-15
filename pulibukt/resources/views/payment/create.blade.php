@extends('layouts.app1')

@section('css')
<style>
  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }

  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }

  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
  }

  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }

  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }

  .container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
  }

  input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  label {
    margin-bottom: 10px;
    display: block;
  }

  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }
  span.price {
    float: right;
    color: grey;
  }

  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }
  </style>
@endsection

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-75">
          <div class="container">
            <form action="{{ route('payment.store') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-50">
                  <h3>Billing Address</h3>
                  <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" placeholder="john@example.com" required>
                  <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                  <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
                  <label for="city"><i class="fa fa-institution"></i> City</label>
                  <input type="text" id="city" name="city" placeholder="New York" required>

                  <div class="row">
                    <div class="col-50">
                      <label for="state">State</label>
                      <input type="text" id="state" name="state" placeholder="NY" required>
                    </div>
                    <div class="col-50">
                      <label for="zip">Zip</label>
                      <input type="text" id="zip" name="zip" placeholder="10001" required>
                    </div>
                  </div>
                </div>

                <div class="col-50">
                  <h3>Payment</h3>
                  <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cname">Name on Card</label>
                  <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
                  <label for="ccnum">Credit card number</label>
                  <input type="text" id="ccnum" name="card_num" placeholder="1111-2222-3333-4444" required>
                  <label for="expmonth">Exp Month</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="September" required>

                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Exp Year</label>
                      <input type="text" id="expyear" name="expyear" placeholder="2018" required>
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352" required>
                    </div>
                  </div>
                </div>

              </div>
              <div style="text-align:center">
                <label for="">Total Bill</label>
                <input type="text" id="expyear" name="amount" placeholder="2018" value="{{ $total }}" readonly>
                <input type="hidden" name="order_id" value="{{ $order_id }}">
                <input type="submit" value="Continue to checkout" class="btn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection