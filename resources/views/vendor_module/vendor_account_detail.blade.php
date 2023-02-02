@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Vendor Account Detail</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Vendor Account Detail</a></li>
                <li class="breadcrumb-item"><span> Vendor Account Detail</span></li>
             </ul>
          </div>
       </div>
    </div>
    <div class="page-content">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
               <form action="{{route('vendor.acccount.save')}}" method="post" name="vendor_account_frm" id="vendor_account_frm">
                  @csrf
                   <div class="card-body">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Vendor Account Detail</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Vendor*</label>
                                   <select name="vendor_id" id="vendor_id" required class="form-control select">
                                       <option value=""  disabled selected>Select</option>
                                       @foreach($vendorMaster as $row)
                                          <option value="{{$row->id}}">{{$row->name}}</option>
                                       @endforeach
                                   </select>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Token*</label>
                                   <input name="token" id="token" required type="text" class="form-control" placeholder="Enter Token">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Meter No*</label>
                                   <input name="meter_no" id="meter_no" required type="text" class="form-control" placeholder="Enter Meter No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Account No*</label>
                                   <input name="account_no" id="account_no" required type="text" class="form-control" placeholder="Enter Account No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Password*</label>
                                   <input name="password" id="password" required type="password" class="form-control" placeholder="Enter Password">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Account No 1*</label>
                                   <input name="account_no1" id="account_no1" required type="text" class="form-control" placeholder="Enter Account No 1">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Environment*</label>
                                   <select name="environment" id="environment" required class="form-control select">
                                       <option>--Select--</option>
                                       <option value="TEST">TEST</option>
                                       <option value="LIVE">LIVE</option>
                                 </select>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <div class="all-chk">
                                         <label><input name="isActive" id="isActive" type="checkbox" checked=""> Active</label>
                                     </div>
                                </div>

                                <div class="form-group col-md-6 col-12">
                                     <div class="question">
                                        <label><input class="coupon_question" type="checkbox" name="pickup_address" id="pickup_address" required value="1" onchange="valueChanged()"> Pickup Address is not Consignor Address</label>
                                     </div>
                                </div>

                           </div>

                           <script>
                             function valueChanged() {
                               if($('.coupon_question').is(":checked"))   
                                 $(".answer").show();
                               else
                                 $(".answer").hide();
                             };
                           </script>

                           <div class="answer">
                               <div class="row">
                                   <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                     <div class="frm-heading">
                                       <h3>Pickup Address </h3>
                                     </div>
                                   </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Company Name*</label>
                                       <input name="company_name" id="company_name" required type="text" class="form-control" placeholder="Enter Company Name">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>GST No*</label>
                                       <input name="gst_no" id="gst_no" required type="text" class="form-control" placeholder="Enter GST No">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Pin Code*</label>
                                       <input name="pincode" id="pincode" required type="text" class="form-control" placeholder="Enter Pin Code">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Contact Person*</label>
                                       <input name="contact_person" id="contact_person" required type="text" class="form-control" placeholder="Enter Contact Person">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Address 1*</label>
                                       <input name="address_1" id="address_1" required type="text" class="form-control" placeholder="Enter Address 1">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>City*</label>
                                       <input name="city_id" id="city_id" required type="text" class="form-control" placeholder="Enter City">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Email ID*</label>
                                       <input name="email_id" id="email_id" required type="text" class="form-control" placeholder="Enter Email ID">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Address 2*</label>
                                       <input name="address_2" id="address_2" required type="text" class="form-control" placeholder="Enter Address 2">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>State*</label>
                                       <input name="state_id" id="state_id" required type="text" class="form-control" placeholder="Enter State">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Phone*</label>
                                       <input name="phone" id="phone" required type="text" class="form-control" placeholder="Enter Phone">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Address 3*</label>
                                       <input name="address_3" id="address_3" required type="text" class="form-control" placeholder="Enter Address 3">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Country*</label>
                                     <select name="country_id" id="country_id" required class="form-control select">
                                       <option value=""  disabled selected>Select</option>
                                       @foreach($country as $row)
                                          <option value="{{$row->id}}">{{$row->country_name}}</option>
                                       @endforeach
                                   </select>  
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

                             <div class="col-md-12">    
                              <div class="x_content">
                                 <div class="table-responsive">
                                       <table>
                                          <thead>
                                             <tr>
                                                   <th>Edit</th>
                                                   <th>Delete</th>
                                                   <th>Vendor</th>
                                                   <th>Token</th>
                                                   <th>Meter No</th>
                                                   <th>Account No</th>
                                                   <th>Password</th>
                                                   <th>Account No 1</th>
                                                   <th>Environment</th>
                                                   <th>Status</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                          @foreach($vendorAccount as $rowv)
                                          <tr>
                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                             <td>{{$rowv->vendor_name}}</td>
                                             <td>{{$rowv->token}}</td>
                                             <td>{{$rowv->meter_no}}</td>
                                             <td>{{$rowv->account_no}}</td>
                                             <td>{{$rowv->password}}</td>
                                             <td>{{$rowv->account_no1}}</td>
                                             <td>{{$rowv->environment}}</td>
                                             <td>Done</td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                       </table>
                                 </div>
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