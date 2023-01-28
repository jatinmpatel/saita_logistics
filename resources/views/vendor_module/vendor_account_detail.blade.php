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
               <form>
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
                                   <input type="text" class="form-control" placeholder="Enter Vendor">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Token*</label>
                                   <input type="text" class="form-control" placeholder="Enter Token">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Meter No*</label>
                                   <input type="email" class="form-control" placeholder="Enter Meter No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Account No*</label>
                                   <input type="text" class="form-control" placeholder="Enter Account No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Password*</label>
                                   <input type="password" class="form-control" placeholder="Enter Password">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Account No 1*</label>
                                   <input type="text" class="form-control" placeholder="Enter Account No 1">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Environment*</label>
                                   <select class="form-control select">
                                       <option>--Select--</option>
                                       <option value="TEST">TEST</option>
                                       <option value="LIVE">LIVE</option>
                                 </select>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox" checked=""> Active</label>
                                     </div>
                                </div>

                                <div class="form-group col-md-6 col-12">
                                     <div class="question">
                                        <label><input class="coupon_question" type="checkbox" name="coupon_question" value="1" onchange="valueChanged()"> Pickup Address is not Consignor Address</label>
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
                                       <input type="text" class="form-control" placeholder="Enter Company Name">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>GST No*</label>
                                       <input type="text" class="form-control" placeholder="Enter GST No">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Pin Code*</label>
                                       <input type="text" class="form-control" placeholder="Enter Pin Code">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Contact Person*</label>
                                       <input type="text" class="form-control" placeholder="Enter Contact Person">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Address 1*</label>
                                       <input type="text" class="form-control" placeholder="Enter Address 1">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>City*</label>
                                       <input type="text" class="form-control" placeholder="Enter City">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Email ID*</label>
                                       <input type="text" class="form-control" placeholder="Enter Email ID">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Address 2*</label>
                                       <input type="text" class="form-control" placeholder="Enter Address 2">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>State*</label>
                                       <input type="text" class="form-control" placeholder="Enter State">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Phone*</label>
                                       <input type="text" class="form-control" placeholder="Enter Phone">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Address 3*</label>
                                       <input type="text" class="form-control" placeholder="Enter Address 3">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                     <label>Country*</label>
                                       <input type="text" class="form-control" placeholder="Enter Country">
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
                                                     <tr>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                         <td>Sunil</td>
                                                         <td>123ECFD</td>
                                                         <td>234DS</td>
                                                         <td>2233454567</td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td>Done</td>
                                                     </tr>
                                                     <tr>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                         <td>Sunil</td>
                                                         <td>123ECFD</td>
                                                         <td>234DS</td>
                                                         <td>2233454567</td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td>Done</td>
                                                     </tr>
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