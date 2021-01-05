<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class AccountPDFController extends Controller
{
    function index()
    {
     $account_data = $this->get_account_data();
     return view('account_pdf')->with('account_data', $account_data);
    }

    function get_account_data()
    {
     $account_data = DB::table('accounts')
         ->limit(10)
         ->get();
     return $account_data;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_account_data_to_html());
     return $pdf->stream();
    }

    function convert_account_data_to_html()
    {
     $account_data = $this->get_account_data();
     $output = '
     <h3 align="center">account Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">ID</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Details</th>
   </tr>
     ';  
     foreach($account_data as $account)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$account->id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$account->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$account->detail.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
