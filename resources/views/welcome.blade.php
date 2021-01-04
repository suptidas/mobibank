<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: MediumSpringGreen;
  color: FireBrick;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Online Banking System</h1>
  <p>A trusted syetem for money transitions</p>
</div>

<div class="navbar">
  <a href="#">About</a>
  <a href="login">Login</a>
  <a href="registration">Register</a>
 
</div>

<div class="row">
  <div class="side">
    <h2>About Us</h2>
    <h5>More of Us:</h5>
    <div class="fakeimg" style="height:200px;">Regularly check your Bank, Credit Card and Debit Card Statement, Report if suspicious transactions are found..
</div>
    <p>Our online management system is a trusted system for money transitions..</p>
    <h3>More..</h3>
    <p>Some features we offer:</p>
    <div class="fakeimg" style="height:60px;">Money Deposit</div><br>
    <div class="fakeimg" style="height:60px;">Remitance</div><br>
    <div class="fakeimg" style="height:60px;">Credit/Debit</div>
  </div>
  <div class="main">
    <h2>E-Banking</h2>
    <h5>A trusted syetem for money transitions</h5>
    <div class="fakeimg" style="height:200px;">Our Bank provides various of Alternate Delivery Channels like ATM, Debit Card, Mobile Banking, Internet Banking and Cash Management services and many new customer centric employees. These employees help customers in banking without actually walking into the branch. All the Digital Employees will make your banking experience smooth and save time as well as money.</div>
    <p>Our Bank..</p>
    <p>A bank is a financial institution licensed to receive deposits and make loans. Banks may also provide financial services such as wealth management, currency exchange, and safe deposit boxes.</p>
    <br>
    <h2>Other Facilities</h2>
    
    <div class="fakeimg" style="height:200px;">Our Bank brings you Instant Money Transfer service, P@yNow. Transfer money within seconds to other partner bank(s) from BRAC Bank Internet Banking service 24/7 . This service is powered by NPSB (National Payment Switch Bangladesh).</div>
    <p>Our system provides..</p>
    <p> There are several different kinds of banks including retail banks, commercial or corporate banks, and investment banks.</p>
  </div>
</div>

<div class="footer">
  <h2>Online Banking</h2>
</div>

</body>
</html>
