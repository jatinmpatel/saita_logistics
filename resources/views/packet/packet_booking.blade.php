@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Packet Booking</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Packet Booking</a></li>
                <li class="breadcrumb-item"><span> Packet Booking</span></li>
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
                                <div class="form-group col-md-3 col-12">
                                   <label>AWB No*</label>
                                   <input type="text" class="form-control" placeholder="Enter AWB No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Ref No*</label>
                                   <input type="text" class="form-control" placeholder="Enter Ref No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Booking Date*</label>
                                   <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Client*</label>
                                   <input type="text" class="form-control" placeholder="Enter Client">
                                </div>
                           </div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Consignor Details</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Consignor*</label>
                                   <input type="text" class="form-control" placeholder="Enter Consignor">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>CPerson*</label>
                                   <input type="text" class="form-control" placeholder="Enter Contact Person">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Address1*</label>
                                   <input type="text" class="form-control" placeholder="Enter Address1">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Address2*</label>
                                   <input type="text" class="form-control" placeholder="Enter Address2">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Address3*</label>
                                   <input type="text" class="form-control" placeholder="Enter Address3">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Pin Code*</label>
                                   <input type="text" class="form-control" placeholder="Enter Pin Code">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Country*</label>
                                   <input type="text" class="form-control" placeholder="Enter Country">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>State*</label>
                                   <input type="text" class="form-control" placeholder="Enter State">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>City*</label>
                                   <input type="text" class="form-control" placeholder="Enter City">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Mobile No*</label>
                                   <input type="text" class="form-control" placeholder="Enter Mobile No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Email ID*</label>
                                   <input type="text" class="form-control" placeholder="Enter Email ID">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>PAN*</label>
                                   <input type="text" class="form-control" placeholder="Enter PAN">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>GSTIN*</label>
                                   <input type="text" class="form-control" placeholder="Enter GSTIN">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>IEC*</label>
                                   <input type="text" class="form-control" placeholder="Enter IEC">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>AadhaarNo*</label>
                                   <input type="text" class="form-control" placeholder="Enter AadhaarNo">
                                </div>
                           </div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Consignee Details</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Consignor*</label>
                                   <input type="text" class="form-control" placeholder="Enter Consignor">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>CPerson*</label>
                                   <input type="text" class="form-control" placeholder="Enter Contact Person">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Address1*</label>
                                   <input type="text" class="form-control" placeholder="Enter Address1">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Address2*</label>
                                   <input type="text" class="form-control" placeholder="Enter Address2">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Address3*</label>
                                   <input type="text" class="form-control" placeholder="Enter Address3">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Pin Code*</label>
                                   <input type="text" class="form-control" placeholder="Enter Pin Code">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Country*</label>
                                   <input type="text" class="form-control" placeholder="Enter Country">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>State*</label>
                                   <input type="text" class="form-control" placeholder="Enter State">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>City*</label>
                                   <input type="text" class="form-control" placeholder="Enter City">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Mobile No*</label>
                                   <input type="text" class="form-control" placeholder="Enter Mobile No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Email ID*</label>
                                   <input type="text" class="form-control" placeholder="Enter Email ID">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>PAN*</label>
                                   <input type="text" class="form-control" placeholder="Enter PAN">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>GSTIN*</label>
                                   <input type="text" class="form-control" placeholder="Enter GSTIN">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>IEC*</label>
                                   <input type="text" class="form-control" placeholder="Enter IEC">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>AadhaarNo*</label>
                                   <input type="text" class="form-control" placeholder="Enter AadhaarNo">
                                </div>
                           </div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Packet Details</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-3 col-12">
                                 <label>Packet Type*</label>
                                   <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-1-bhvt" tabindex="-1" aria-hidden="true">
                                      <option data-select2-id="select2-data-3-o2s1">--Select Packet Type--</option>
                                      <option>DOX</option>
                                      <option>SPX</option>
                                   </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-vhcb" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-rj9g-container" aria-controls="select2-rj9g-container"><span class="select2-selection__rendered" id="select2-rj9g-container" role="textbox" aria-readonly="true" title="--Select Packet Type--">--Select Packet Type--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                 <label>Payment Type*</label>
                                   <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-4-9uyk" tabindex="-1" aria-hidden="true">
                                      <option data-select2-id="select2-data-6-ari3">--Select Payment Type--</option>
                                      <option value="CASH">CASH</option>
                                      <option value="COD">COD</option>
                                      <option value="CREDIT">CREDIT</option>
                                   </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-2mhf" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-l0y8-container" aria-controls="select2-l0y8-container"><span class="select2-selection__rendered" id="select2-l0y8-container" role="textbox" aria-readonly="true" title="--Select Payment Type--">--Select Payment Type--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Invoice No*</label>
                                   <input type="text" class="form-control" placeholder="Enter Invoice No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Packet Description*</label>
                                   <input type="text" class="form-control" placeholder="Enter Packet Description">
                                </div>
                           </div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Weight Details</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>PCS*</label>
                                   <input type="text" class="form-control" placeholder="Enter Pieces">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Actual Weight*</label>
                                   <input type="text" class="form-control" placeholder="Enter Actual Weight">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <div class="smalling-wdh">
                                     <label>Vendor Weight*</label>
                                     <input type="text" class="form-control" placeholder="Enter Vendor Weight">
                                     <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-7-y3j0" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-9-eitp">--Select Packet Type--</option>
                                        <option>DOX</option>
                                        <option>SPX</option>
                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-cazz" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-hyin-container" aria-controls="select2-hyin-container"><span class="select2-selection__rendered" id="select2-hyin-container" role="textbox" aria-readonly="true" title="--Select Packet Type--">--Select Packet Type--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                   </div>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <div class="smalling-wdh">
                                     <label>Total Value*</label>
                                     <input type="text" class="form-control" placeholder="Total Value">
                                   </div>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Divisor*</label>
                                     <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-10-0x9x" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-12-xjqu">Select</option>
                                        <option value="5000">5000</option>
                                        <option value="6000">6000</option>
                                        <option value="4500">4500</option>
                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-qj1l" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-9sz2-container" aria-controls="select2-9sz2-container"><span class="select2-selection__rendered" id="select2-9sz2-container" role="textbox" aria-readonly="true" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                           </div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Remarks</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-6 col-12">
                                   <label>Operation Remarks*</label>
                                   <textarea type="text" class="form-control" placeholder="Enter Operation Remarks"></textarea>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                   <label>Accounting Remarks*</label>
                                   <textarea type="text" class="form-control" placeholder="Enter Accounting Remarks"></textarea>
                                </div>
                           </div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Upload Invoice Document</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-6 col-12">
                                   <label>Choose File*</label>
                                   <input type="file" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                   <div class="formet-clr">
                                     <p>1. File Format should be PDF</p>
                                     <p>2. File Size should be less than 1024 KB.</p>
                                   </div>
                                </div>
                           </div>
                         </div>
                         <hr>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="page-btns">
                              <div class="form-group text-center custom-mt-form-group">
                                 <button class="btn btn-primary mr-2" type="submit"><i class="fa fa-check"></i> Submit</button>
                                 <button class="btn btn-primary mr-2" type="button"><i class="fa fa-print"></i> Invoice Print</button>
                                 <button class="btn btn-primary mr-2" type="button"><i class="fa fa-print"></i> Label Print</button>
                                 <button class="btn btn-secondary orng-btn" type="reset"><i class="fa fa-dot-circle"></i> Reset</button>
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