@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Shipment Movement</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Shipment Movement</a></li>
                <li class="breadcrumb-item"><span> Shipment Movement</span></li>
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
                                   <h3>Shipment Movement:</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-6 col-12">
                                      <label>AwbNo*</label>
                                     <input class="form-control" type="text" placeholder="Enter AwbNo">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                      <label>Date*</label>
                                     <input class="form-control datetimepicker-input datetimepicker" type="text" data-toggle="datetimepicker">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                      <label>Time*</label>
                                     <input class="form-control" type="text" placeholder="eg.23:59">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                     <label>Status*</label>
                                     <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-1-hzgj" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-3-rty7">--Select Status--</option>
                                        <option value="DELIVERED">DELIVERED</option>
                                        <option value="INTRANSIT">INTRANSIT</option>
                                        <option value="PICKED UP">PICKED UP</option>
                                        <option value="RTO">RTO</option>
                                        <option value="UN-DELIVERED">UN-DELIVERED</option>
                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-x7i7" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-7hrh-container" aria-controls="select2-7hrh-container"><span class="select2-selection__rendered" id="select2-7hrh-container" role="textbox" aria-readonly="true" title="--Select Status--">--Select Status--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                     <label>Location*</label>
                                     <input class="form-control" type="text" placeholder="Enter Location">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                     <label>Status Details*</label>
                                     <input class="form-control" type="text" placeholder="Enter Status Details">
                                </div>
                           </div>
                         </div>

                         <hr>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="page-btns">
                              <div class="form-group text-center custom-mt-form-group">
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
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-4-0efa" tabindex="-1" aria-hidden="true">
                                              <option value="20" data-select2-id="select2-data-6-4evr">20</option>
                                              <option value="50">50</option>
                                              <option value="100">100</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-jpkb" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-89ra-container" aria-controls="select2-89ra-container"><span class="select2-selection__rendered" id="select2-89ra-container" role="textbox" aria-readonly="true" title="20">20</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                     <td>Pickup</td>
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
                                                     <td>Deliverd</td>
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
                                                     <td>Un-Deliverd</td>
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