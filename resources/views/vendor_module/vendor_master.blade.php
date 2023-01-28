@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Vendor Master</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Vendor Master</a></li>
                <li class="breadcrumb-item"><span> Vendor Master</span></li>
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
                                   <h3>Vendor Master</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Vendor Code*</label>
                                   <input type="text" class="form-control" placeholder="Enter Vendor Code">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Pin Code*</label>
                                   <input type="text" class="form-control" placeholder="Enter Pin Code">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Email ID*</label>
                                   <input type="email" class="form-control" placeholder="Enter Email ID">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Vendor Name*</label>
                                   <input type="text" class="form-control" placeholder="Enter Vendor Name">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>City*</label>
                                   <input type="text" class="form-control" placeholder="Enter City Name">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Mobile No*</label>
                                   <input type="text" class="form-control" placeholder="Enter Mobile No">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>Address1*</label>
                                   <input type="text" class="form-control" placeholder="Enter Address1">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                   <label>State*</label>
                                   <input type="text" class="form-control" placeholder="Enter State">
                                </div>
                                <div class="form-group col-md-2 col-12">
                                   <label>GSTIN*</label>
                                   <input type="text" class="form-control" placeholder="Enter GSTIN">
                                </div>
                                <div class="form-group col-md-2 col-12">
                                   <label>Address2*</label>
                                   <input type="text" class="form-control" placeholder="Enter Address2">
                                </div>
                                <div class="form-group col-md-2 col-12">
                                   <label>Country*</label>
                                   <input type="text" class="form-control" placeholder="Enter Country">
                                </div>
                                <div class="form-group col-md-1 col-12 pr-0">
                                     <div class="all-chk">
                                         <label><input type="checkbox" checked=""> Active</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-2 col-12 pr-0">
                                     <div class="all-chk">
                                         <label><input type="checkbox"> Self Vendor</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox"> Third Party Tracking</label>
                                     </div>
                                </div>

                           </div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Vendor Service Type</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-2 col-12">
                                 <label>Forwarder*</label>
                                 <select class="form-control select">
                                    <option>--Select--</option>
                                    <option value="ARAMEX">ARAMEX</option>
                                    <option value="BLUEDART">BLUEDART</option>
                                    <option value="CRITICAL LOG">CRITICAL LOG</option>
                                    <option value="DELHIVERY">DELHIVERY</option>
                                    <option value="DELHIVERYB2B">DELHIVERYB2B</option>
                                    <option value="DHL">DHL</option>
                                    <option value="DPD">DPD</option>
                                    <option value="DTDC">DTDC</option>
                                    <option value="EKART">EKART</option>
                                    <option value="FEDEX">FEDEX</option>
                                    <option value="LINEX">LINEX</option>
                                    <option value="NIMBUSPOST">NIMBUSPOST</option>
                                    <option value="PROFESSIONAL">PROFESSIONAL</option>
                                    <option value="SELF">SELF</option>
                                    <option value="SKYNET">SKYNET</option>
                                    <option value="SPOTON">SPOTON</option>
                                    <option value="TNT">TNT</option>
                                    <option value="TRACKON">TRACKON</option>
                                    <option value="UPS">UPS</option>
                                    <option value="USPS">USPS</option>
                                    <option value="XPRESSBEES">XPRESSBEES</option>
                                    <option value="YODEL">YODEL</option>
                                 </select>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                 <label>Service Name*</label>
                                   <input type="text" class="form-control" placeholder="Enter Service Name">
                                </div>
                                <div class="form-group col-md-2 col-12">
                                    <label>Packaging Group*</label>
                                    <select class="form-control select">
                                          <option>--Select--</option>
                                          <option value="FEDEX">FEDEX</option>
                                          <option value="UPS">UPS</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-2 col-12">
                                    <label>Mode*</label>
                                    <select class="form-control select">
                                          <option>--Select--</option>
                                          <option value="FEDEX">FEDEX</option>
                                          <option value="UPS">UPS</option>
                                    </select>
                                 </div>
                                <div class="form-group col-md-3 col-12 pl-0">
                                     <div class="all-chk" style="display:inline-block; margin-right: 10px;">
                                         <label><input type="checkbox" checked=""> Active</label>
                                     </div>
                                     <div class="plusing-btn" style="display:inline-block;">
                                         <button class="btn btn-primary  btn-xs" tabindex="1" id="btnAddClientChargesDetails" type="button" title="Add Head">Add <i class="fa fa-plus-circle"></i>
                                         </button>
                                         <button class="btn btn-default btn-xs" tabindex="1" id="btnResetClientChargesDetails" type="button" title="Reset Head">Reset <i class="fa fa-spinner"></i>
                                         </button>
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
                                                             <th>Vendor Code</th>
                                                             <th>Vendor Name</th>
                                                             <th>Address1</th>
                                                             <th>Address2</th>
                                                             <th>Pin Code</th>
                                                             <th>City</th>
                                                             <th>State</th>
                                                             <th>Country</th>
                                                             <th>Email ID</th>
                                                             <th>Mobile No</th>
                                                             <th>GSTIN</th>
                                                             <th>SelfVendor</th>
                                                             <th>Active</th>
                                                             <th>ThirdPartyTracking</th>
                                                             <th>ThirdPartyVendor</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                     <tr>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                         <td>FEDEX</td>
                                                         <td>FEDEX</td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td>NO</td>
                                                         <td>YES</td>
                                                         <td>NO</td>
                                                         <td></td>
                                                     </tr>
                                                     <tr>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                         <td>FEDEX</td>
                                                         <td>FEDEX</td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td>NO</td>
                                                         <td>YES</td>
                                                         <td>NO</td>
                                                         <td></td>
                                                     </tr>
                                                     <tr>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                         <td>FEDEX</td>
                                                         <td>FEDEX</td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td>NO</td>
                                                         <td>YES</td>
                                                         <td>NO</td>
                                                         <td></td>
                                                     </tr>
                                                     <tr>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                         <td>FEDEX</td>
                                                         <td>FEDEX</td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td>NO</td>
                                                         <td>YES</td>
                                                         <td>NO</td>
                                                         <td></td>
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