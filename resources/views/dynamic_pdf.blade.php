<!DOCTYPE html>
<html>
 <head>
  <title>Generate PDF file details for all customers</title>
  </br>
  <input type="button" value="Go back!" onclick="history.back()">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
  <!-- Generate Dynamic PDF from HTML using DomPDF -->
   <h3 align="center">Generate PDF file details for all customers</h3><br />
   
   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Customer Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>Name</th>
       <th>Address</th>
       <th>City</th>
       <th>Postal Code</th>
       <th>Country</th>
      </tr>
     </thead>
     <tbody>
     @foreach($customer_data as $customer)
      <tr>
       <td>{{ $customer->CustomerName }}</td>
       <td>{{ $customer->Address }}</td>
       <td>{{ $customer->City }}</td>
       <td>{{ $customer->PostalCode }}</td>
       <td>{{ $customer->Country }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>
