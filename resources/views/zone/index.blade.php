@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Zone Master</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Zone Master</a></li>
                <li class="breadcrumb-item"><span> Zone Master</span></li>
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
                                   <h3>Zone Master</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-4 col-12">
                                   <label>Vendor*</label>
                                   <input type="text" class="form-control" placeholder="Enter Vendor">
                                </div>
                                <div class="form-group col-md-4 col-12">
                                   <label>Service*</label>
                                   <input type="text" class="form-control" placeholder="Enter Service">
                                </div>
                                <div class="form-group col-md-4 col-12">
                                   <label>Zone Name*</label>
                                   <input type="email" class="form-control" placeholder="Enter Zone Name">
                                </div>
                                <div class="form-group col-md-4 col-12">
                                   <label>Zone Type*</label>
                                     <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-1-d04n" tabindex="-1" aria-hidden="true">
                                         <option data-select2-id="select2-data-3-fa3x">--Select--</option>
                                         <option value="International">International</option>
                                         <option value="Domestic">Domestic</option>
                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-f8yt" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-4w4v-container" aria-controls="select2-4w4v-container"><span class="select2-selection__rendered" id="select2-4w4v-container" role="textbox" aria-readonly="true" title="--Select--">--Select--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                   <label>Effect From*</label>
                                     <input class="form-control datetimepicker-input datetimepicker" type="text" data-toggle="datetimepicker">
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
                                           <h3>Total Zone (s) Found: 9</h3>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="searching-fld">
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-4-b3uv" tabindex="-1" aria-hidden="true">
                                              <option value="20" data-select2-id="select2-data-6-hckx">20</option>
                                              <option value="50">50</option>
                                              <option value="100">100</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-jg27" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-tcu7-container" aria-controls="select2-tcu7-container"><span class="select2-selection__rendered" id="select2-tcu7-container" role="textbox" aria-readonly="true" title="20">20</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="searching-fld">
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-7-99gc" tabindex="-1" aria-hidden="true">
                                              <option value="CM.CCode" data-select2-id="select2-data-9-ou6x">Client Code</option>
                                              <option value="CM.CName">Client Name</option>
                                              <option value="CM.SalesPerson">Sales Person</option>
                                              <option value="CM.Address1">Address</option>
                                              <option value="CM.CityName">City Name</option>
                                              <option value="CM.ZipCode">Pin Code</option>
                                              <option value="CM.MobileNo">Mobile No</option>
                                              <option value="CM.GSTIN">GSTIN</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-ua7u" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-6a88-container" aria-controls="select2-6a88-container"><span class="select2-selection__rendered" id="select2-6a88-container" role="textbox" aria-readonly="true" title="Client Code">Client Code</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="searching-fld">
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-10-d3go" tabindex="-1" aria-hidden="true">
                                              <option value="1" data-select2-id="select2-data-12-3ffr">Exactly</option>
                                              <option value="2">Contains</option>
                                              <option value="3">Start with</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-wu8h" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ntqv-container" aria-controls="select2-ntqv-container"><span class="select2-selection__rendered" id="select2-ntqv-container" role="textbox" aria-readonly="true" title="Exactly">Exactly</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                             <th>Delete</th>
                                                             <th>Vendor</th>
                                                             <th>Service</th>
                                                             <th>Zone Name</th>
                                                             <th>Zone Type</th>
                                                             <th>Effect From</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <tr>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                             <td>Rohit</td>
                                                             <td>XYZ</td>
                                                             <td>Lorem Ipsum</td>
                                                             <td></td>
                                                             <td></td>
                                                         </tr>
                                                         <tr>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                             <td>Rohit</td>
                                                             <td>XYZ</td>
                                                             <td>Lorem Ipsum</td>
                                                             <td></td>
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