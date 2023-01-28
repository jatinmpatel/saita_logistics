@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Booking Report</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Booking Report</a></li>
                <li class="breadcrumb-item"><span> Booking Report</span></li>
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
                                   <h3>Booking Report:</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-7 col-12">
                                   <div class="smalling-wdh">
                                      <label>Booking Date*</label>
                                     <input class="form-control datetimepicker-input datetimepicker" type="text" data-toggle="datetimepicker">
                                     <input class="form-control datetimepicker-input datetimepicker" type="text" data-toggle="datetimepicker">
                                   </div>
                                </div>
                                <div class="form-group col-md-5 col-12">
                                     <label>Consignee*</label>
                                     <input class="form-control" type="text" placeholder="Enter Consignee">
                                </div>
                                <div class="form-group col-md-12 col-12">
                                     <label>AWB No.*</label>
                                     <textarea type="text" class="form-control" placeholder="Accepts multiple AWB No. comma(,) seperated or enter seperated"></textarea>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                     <label>Client*</label>
                                     <input class="form-control" type="text" placeholder="Enter Client">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                     <label>Status*</label>
                                     <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-1-b3mf" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-3-f008">--Select Status--</option>
                                        <option value="INTRANSIT">INTRANSIT</option>
                                        <option value="DELIVERED">DELIVERED</option>
                                        <option value="UN-DELIVERED">UN-DELIVERED</option>
                                        <option value="RTO">RTO</option>
                                        <option value="PICKED UP">PICKED UP</option>
                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-l66z" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-d979-container" aria-controls="select2-d979-container"><span class="select2-selection__rendered" id="select2-d979-container" role="textbox" aria-readonly="true" title="--Select Status--">--Select Status--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <label>Vendor*</label>
                                     <input class="form-control" type="text" placeholder="Enter Vendor">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <label>Destination*</label>
                                     <input class="form-control" type="text" placeholder="Enter Destination">
                                </div>
                                <div class="form-group col-md-2 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox"> Is Cancel</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                     <label>Consignor*</label>
                                     <input class="form-control" type="text" placeholder="Enter Consignor">
                                </div>
                                <div class="form-group col-md-5 col-12">
                                     <label>Forwarding No.*</label>
                                     <input class="form-control" type="text" placeholder="Enter Forwarding No.">
                                </div>
                                <div class="form-group col-md-2 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox"> POD Upload</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-5 col-12">
                                     <label>Consignor Mobile*</label>
                                     <input class="form-control" type="text" placeholder="Enter Consignor Mobile">
                                </div>
                           </div>
                         </div>
                         <hr>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="page-btns">
                              <div class="form-group text-center custom-mt-form-group">
                                 <button class="btn btn-primary mr-2" type="button"><i class="fa fa-search"></i> Search</button>
                                 <button class="btn btn-primary mr-2" type="submit"><i class="fa fa-check"></i> Submit</button>
                                 <button class="btn btn-secondary orng-btn" type="reset"><i class="fa fa-dot-circle"></i> Reset</button>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                             <div class="bg-clr">
                                 <div class="row">
                                     <div class="col-md-10">
                                         <div class="frm-heading">
                                             <h3>Total Record(s) Found: 39</h3>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="searching-fld">
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-4-91z5" tabindex="-1" aria-hidden="true">
                                              <option value="20" data-select2-id="select2-data-6-58jz">20</option>
                                              <option value="50">50</option>
                                              <option value="100">100</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-kfjo" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-fty8-container" aria-controls="select2-fty8-container"><span class="select2-selection__rendered" id="select2-fty8-container" role="textbox" aria-readonly="true" title="20">20</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                     <th>Delete</th>
                                                     <th>Booking Date</th>
                                                     <th>Consignee</th>
                                                     <th>AWB No.</th>
                                                     <th>Client</th>
                                                     <th>Status</th>
                                                     <th>Vendor</th>
                                                     <th>Destination</th>
                                                     <th>Consignor</th>
                                                     <th>Forwarding No.</th>
                                                     <th>Consignor Mobile</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 <tr>
                                                     <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                     <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                     <td>12-1-2023 10:20 PM </td>
                                                     <td></td>
                                                     <td>ABCD123</td>
                                                     <td>Sunil</td>
                                                     <td>Pending</td>
                                                     <td></td>
                                                     <td></td>
                                                     <td></td>
                                                     <td>RC1232</td>
                                                     <td>0123456789</td>
                                                 </tr>
                                                 <tr>
                                                     <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                     <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                     <td>12-1-2023 10:20 PM </td>
                                                     <td></td>
                                                     <td>ABCD123</td>
                                                     <td>Sunil</td>
                                                     <td>Pending</td>
                                                     <td></td>
                                                     <td></td>
                                                     <td></td>
                                                     <td>RC1232</td>
                                                     <td>0123456789</td>
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