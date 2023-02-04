@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Client Master</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Client Master</a></li>
                <li class="breadcrumb-item"><span> Client Master</span></li>
             </ul>
          </div>
       </div>
    </div>
    <div class="page-content">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
               <form action="{{route('client.master.save')}}" method="post" name="client_frm" id="client_frm">
                  @csrf
                   <div class="card-body">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="row">
                              <div class="form-group col-md-3 col-12">
                                 <label>Client Code*</label>
                                 <input type="text" name="client_code" required id="client_code" class="form-control" placeholder="Enter Client Code">
                              </div>
                              <div class="form-group col-md-3 col-12">
                                 <label>Client Name*</label>
                                 <input type="text" name="client_name" id="client_name" required class="form-control" placeholder="Enter Client Name">
                              </div>
                              <div class="form-group col-md-3 col-12">
                                 <label>Sales Person*</label>
                                 <input type="text" name="sales_person" id="sales_person" required class="form-control" placeholder="Enter Sales Person">
                              </div>
                              <div class="form-group col-md-3 col-12">
                                 <label>Client*</label>
                                 <input type="text" name="client" id="client" required class="form-control" placeholder="Enter Client">
                              </div>
                        </div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Client Address Details</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Address 1*</label>
                                   <input type="text" required name="address1" id="address1" class="form-control" placeholder="Enter Address1">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>State*</label>
                                   <input type="text" required name="state_id" id="state_id  " class="form-control" placeholder="Enter State">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Email ID*</label>
                                   <input type="email" required name="email_id" id="email_id" class="form-control" placeholder="Enter Email ID">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Address2*</label>
                                   <input type="text" required name="address2" id="address2" class="form-control" placeholder="Enter Address2">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Country*</label>
                                   <select class="form-control select" required name="country_id">
                                      <option value="" disabled readonly selecyed>--Select Country--</option>
                                      @foreach($country as $rowc)
                                       <option value="{{$rowc->id}}">{{$rowc->country_name}}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>PAN*</label>
                                   <input type="text" required name="pan" id="pan" class="form-control" placeholder="Enter PAN">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Pin Code*</label>
                                   <input type="text" required name="pincode" id="pincode" class="form-control" placeholder="Enter Pin Code">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Mobile No*</label>
                                   <input type="text" required name="mobile_no" id="mobile_no" class="form-control" placeholder="Enter Mobile No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>GSTIN*</label>
                                   <input type="text" required name="gstin" id="gstin" class="form-control" placeholder="Enter GSTIN">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>City*</label>
                                   <input type="text" required name="city_id" id="city_id" class="form-control" placeholder="Enter City">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Office Phone No*</label>
                                   <input type="text" required name="office_phone_no" id="office_phone_no" class="form-control" placeholder="Enter Office Phone No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>IEC*</label>
                                   <input type="text" required name="iec" id="iec" class="form-control" placeholder="Enter IEC">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Aadhaar No*</label>
                                   <input type="text" required name="aadhaar_no" id="aadhaar_no " class="form-control" placeholder="Enter Aadhaar No">
                                </div>

                           </div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Client Billing Details</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-4 col-12">
                                   <label>Payment Type*</label>
                                   <select class="form-control select" name="bill_payment_type" id="bill_payment_type">
                                       <option value="">--Select Payment Type--</option>
                                       <option value="CASH">CASH</option>
                                       <option value="COD">COD</option>
                                       <option value="CREDIT">CREDIT</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                   <label>Credit Amount*</label>
                                   <input type="text" name="bill_credit_amount" id="bill_credit_amount" class="form-control" placeholder="Enter Credit Limit">
                                </div>
                                <div class="form-group col-md-2 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox" name="bill_isActive" id="bill_isActive" value="1" checked=""> Active</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-2 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox" name="bill_tax_applicable" id="bill_tax_applicable" value="1"> Tax Applicable</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                   <div class="smalling-wdh" id="client-selectign">
                                     <label>Vol. Div.*</label>
                                     <select class="form-control select" name="bill_vol" id="bill_vol">
                                       <option value="">--Select Divisor--</option>
                                       <option value="5000">5000</option>
                                       <option value="6000">6000</option>
                                       <option value="4500">4500</option>
                                    </select>
                                     <b style="margin: 0 4px;">Currency</b>
                                     <select class="form-control select" name="bill_currency" id="bill_currency">
                                       <option value="INR">INR</option>
                                       <option value="AED">AED</option>
                                       <option value="AUD">AUD</option>
                                       <option value="CAD">CAD</option>
                                       <option value="CHF">CHF</option>
                                       <option value="CNY">CNY</option>
                                       <option value="EUR">EUR</option>
                                       <option value="GBP">GBP</option>
                                       <option value="HKD">HKD</option>
                                       <option value="INR">INR</option>
                                       <option value="JPY">JPY</option>
                                       <option value="RUB">RUB</option>
                                       <option value="SAR">SAR</option>
                                       <option value="SGD">SGD</option>
                                       <option value="USD">USD</option>
                                    </select>
                                   </div>
                                </div>
                                <div class="form-group col-md-2 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox" name="bill_self_service" id="bill_self_service" value="1"> Self Service</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-2 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox" name="bill_mail_notification" id="bill_mail_notification" value="1"> Mail Notification</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-2 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox" name="bill_fuel_applicable" id="bill_fuel_applicable" value="1"> Fuel Applicable</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-2 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox" name="bill_enable_fedex_tpc" id="bill_enable_fedex_tpc" value="1"> Enable FedEx TPC</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <div class="all-chk" style="margin-top:0;">
                                         <label><input type="checkbox" name="bill_generate_label" id="bill_generate_label" value="1"> Allow To Generate Label</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                     <div class="all-chk" style="margin-top:0;">
                                         <label><input type="checkbox" name="bill_no_invoice_amount" id="bill_no_invoice_amount" value="1"> No Invoice Amount on FedEx Label</label>
                                     </div>
                                </div>
                           </div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Client Other Charge Details</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-3 col-12">
                                 <label>Charge Type*</label>
                                    <select class="form-control select" name="Other[0][charge_type]" required>
                                       <option value="">--Select Charge Type--</option>
                                       <option value="Loading Charge">Loading Charge</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                 <label>Type*</label>
                                 <select class="form-control select" name="Other[0][type]" required>
                                    <option value="">--Select Calculation Type--</option>
                                    <option value="% OF FREIGHT AMOUNT">% OF FREIGHT AMOUNT</option>
                                    <option value="% OF INVOICE AMOUNT">% OF INVOICE AMOUNT</option>
                                    <option value="PER INVOICE">PER INVOICE</option>
                                    <option value="PER KG">PER KG</option>
                                    <option value="PER SHIPMENT">PER SHIPMENT</option>
                                 </select>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Amount/Per*</label>
                                   <input type="text" required class="form-control" name="Other[0][amount_per]" placeholder="Enter Amount/Per">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                    <div class="plusing-btn">
                                       <button class="btn btn-primary  btn-xs" tabindex="1" id="btnAddClientChargesDetails1" type="button" title="Add Head">Add <i class="fa fa-plus-circle"></i>
                                       </button>
                                       <button class="btn btn-default btn-xs" tabindex="1" id="btnResetClientChargesDetails" type="button" title="Reset Head">Reset <i class="fa fa-spinner"></i>
                                       </button>
                                    </div>
                                </div>
                           <!--  -->
                           </div>
                           <div id="dynamicAddFiled"></div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Client Contact Person Details</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-3 col-12">
                                 <label>Name*</label>
                                   <input type="text" required name="contact[0][contact_person_name]" class="form-control" placeholder="Enter Contact Person">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                 <label>Mobile No*</label>
                                   <input type="text" required name="contact[0][mobile_no]" class="form-control" placeholder="Enter Mobile No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                 <label>Email ID*</label>
                                   <input type="text" required name="contact[0][email_id]" class="form-control" placeholder="Email ID">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <div class="plusing-btn">
                                         <button class="btn btn-primary  btn-xs" tabindex="1" id="btnAddClientChargesDetails2" type="button" title="Add Head">Add <i class="fa fa-plus-circle"></i>
                                         </button>
                                         <button class="btn btn-default btn-xs" tabindex="1" id="btnResetClientChargesDetails" type="button" title="Reset Head">Reset <i class="fa fa-spinner"></i>
                                         </button>
                                     </div>
                                </div>
                           </div>
                           <div id="dynamicAddFiledContact"></div>
                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Generate Client Booking API Token</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-3 col-12">
                                    <div class="plusing-btn">
                                       <button class="btn btn-primary  btn-xs" tabindex="1" id="btnAddClientChargesDetails" type="button" title="Add Head"><i class="fa fa-retweet"></i> Generate Booking API Token 
                                       </button>
                                    </div>
                                </div>
                                <div class="form-group col-md-9 col-12">
                                     <label>Booking API Token*</label>
                                       <input type="text" name="booking_API_token" class="form-control" placeholder="Booking API Token" disabled="">
                                     </div>
                                </div>
                           </div>

                         </div>
                         <hr>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="page-btns">
                              <div class="form-group text-center custom-mt-form-group">
                                 <button class="btn btn-primary mr-2" type="submit"><i class="fa fa-check"></i> Save</button>
                                 <button class="btn btn-primary mr-2" type="button"><i class="fa fa-expand"></i> Export</button>
                                 <button class="btn btn-secondary orng-btn" type="reset"><i class="fa fa-dot-circle"></i> Reset</button>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="bg-clr">
                     <div class="row">
                           <div class="col-md-3">
                              <div class="frm-heading">
                                 <h3>Total Record(s) Found: 9</h3>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="searching-fld">
                              <select class="form-control select">
                                 <option value="20">20</option>
                                 <option value="50">50</option>
                                 <option value="100">100</option>
                              </select>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="searching-fld">
                              <select class="form-control select">
                                 <option value="CM.CCode">Client Code</option>
                                 <option value="CM.CName">Client Name</option>
                                 <option value="CM.SalesPerson">Sales Person</option>
                                 <option value="CM.Address1">Address</option>
                                 <option value="CM.CityName">City Name</option>
                                 <option value="CM.ZipCode">Pin Code</option>
                                 <option value="CM.MobileNo">Mobile No</option>
                                 <option value="CM.GSTIN">GSTIN</option>
                              </select>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="searching-fld">
                                 <select class="form-control select">
                                    <option value="1">Exactly</option>
                                    <option value="2">Contains</option>
                                    <option value="3">Start with</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-3">                
                              <div class="search-container">
                                    <input type="text" placeholder="Search Here.." name="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                              </div>
                           </div>

                           

                     </div>
                  </div>

                  <div class="col-md-12">    
                        <div class="x_content">
                           <div class="table-responsive">
                                 <table>
                                    <thead>
                                       <tr>
                                          <th>Edit</th>
                                          <th>Del</th>
                                          <th>Client Code</th>
                                          <th>Client Name</th>
                                          <th>Sales Person</th>
                                          <th>Client</th>
                                          <th>Address1</th>
                                          <th>Address2</th>
                                          <th>Pin Code</th>
                                          <th>City</th>
                                          <th>State</th>
                                          <th>Country</th>
                                          <th>Email ID</th>
                                          <th>Mobile No</th>
                                          <th>GSTIN</th>
                                          <th>IEC</th>
                                          <th>Active</th>
                                          <th>Aadhaar No</th>
                                          <th>Payment Type</th>
                                          <th>Type</th>
                                          <th>Amount/Per</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clientMaster as $row)
                                    <tr>
                                       <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                       <td><a class="btn btn-primary" href="{{route('client.master.delete',$row->id)}}" onclick="return confirm('Are you sure you want to delete this record?')"> <i class="fa fa-trash-alt"></i></a></td>
                                       <td>{{$row->client_code}}</td>
                                       <td>{{$row->client_name}}</td>
                                       <td>{{$row->sales_person}}</td>
                                       <td>{{$row->client}}</td>
                                       <td>{{nl2br($row->address1)}}</td>
                                       <td>{{$row->address2}}</td>
                                       <td>{{$row->pincode}}</td>
                                       <td>{{$row->city_id}}</td>
                                       <td>{{$row->state_id}}</td>
                                       <td>{{$row->country_name}}</td>
                                       <td>{{$row->email_id}}</td>
                                       <td>{{$row->mobile_no}}</td>
                                       <td>{{$row->gstin}}</td>
                                       <td>{{$row->iec}}</td>
                                       <td>{{$row->bill_isActive}}</td>
                                       <td>{{$row->aadhaar_no}}</td>
                                       <td>-</td>
                                       <td>-</td>
                                       <td>-</td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                                 </table>
                           </div>
                        </div>
                     </div>

                        </div>

                     </form></div>
                   </div>
               
             </div>
          </div>
       </div>
@endsection
@section('script')
<script>
   $( document ).ready(function() {
    var i = 1;
    $("#btnAddClientChargesDetails1").on("click",function(){
      var addHml = GenrateHtml(i);
      $("#dynamicAddFiled").append(addHml);
      i++;
   });

   $("body").on("click",".deleteAdd",function(){
      var id = $(this).data('id');
      $("#dynamic_"+id).remove();
   });
});
function GenrateHtml(addval) { 
   return '<div class="row" id="dynamic_'+addval+'"><div class="form-group col-md-3 col-12">'+
            '<label>Charge Type*</label>'+
               '<select class="form-control select" required name="Other['+addval+'][charge_type]">'+
                  '<option value="">--Select Charge Type--</option>'+
                  '<option value="Loading Charge">Loading Charge</option>'+
               '</select>'+
            '</div>'+
            '<div class="form-group col-md-3 col-12">'+
            '<label>Type*</label>'+
            '<select class="form-control select" required name="Other['+addval+'][type]">'+
               '<option value="">--Select Calculation Type--</option><option value="% OF FREIGHT AMOUNT">% OF FREIGHT AMOUNT</option>'+
               '<option value="% OF INVOICE AMOUNT">% OF INVOICE AMOUNT</option>'+
               '<option value="PER INVOICE">PER INVOICE</option>'+
               '<option value="PER KG">PER KG</option>'+
               '<option value="PER SHIPMENT">PER SHIPMENT</option></select></div>'+
            '<div class="form-group col-md-3 col-12"><label>Amount/Per*</label>'+
            '<input type="text" required class="form-control" name="Other['+addval+'][amount_per]" placeholder="Enter Amount/Per"></div>'+
            '<div class="form-group col-md-3 col-12 pl-0">'+
            '<label>&nbsp;</label><button class="btn btn-danger deleteAdd btn-xs" tabindex="1" data-id="'+addval+'" type="button" title="Delete Head">Delete <i class="fa fa-trash"></i>'+
            '</button></div>';
}
$( document ).ready(function() {
    var i = 1;
    $("#btnAddClientChargesDetails2").on("click",function(){
      var addHml = GenrateHtmlClient(i);
      $("#dynamicAddFiledContact").append(addHml);
      i++;
   });

   $("body").on("click",".deleteAddContact",function(){
      var id = $(this).data('id');
      $("#dynamic_contact_"+id).remove();
   });
});
function GenrateHtmlClient(addval){
return '<div class="row"  id="dynamic_contact_'+addval+'"><div class="form-group col-md-3 col-12">'+
      '<label>Name*</label><input type="text" required name="contact['+addval+'][contact_person_name]" class="form-control" placeholder="Enter Contact Person"></div>'+
      '<div class="form-group col-md-3 col-12">'+
      '<label>Mobile No*</label><input type="text" required name="contact['+addval+'][mobile_no]" class="form-control" placeholder="Enter Mobile No"></div>'+
      '<div class="form-group col-md-3 col-12">'+
      '<label>Email ID*</label><input type="text" required name="contact['+addval+'][email_id]" class="form-control" placeholder="Email ID"></div>'+
      '<div class="form-group col-md-3 col-12">'+
      '<label>&nbsp;</label><button class="btn btn-danger deleteAddContact btn-xs" tabindex="1" data-id="'+addval+'" type="button" title="Delete Head">Delete <i class="fa fa-trash"></i>'+
      '</div>'+
      '</div>';
}
</script>
@endsection