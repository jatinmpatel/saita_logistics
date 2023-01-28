@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Manifest Report</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Manifest Report</a></li>
                <li class="breadcrumb-item"><span> Manifest Report</span></li>
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
                                   <h3>Manifest Report:</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-7 col-12">
                                   <div class="smalling-wdh">
                                      <label>Manifest Date*</label>
                                     <input class="form-control datetimepicker-input datetimepicker" type="text" data-toggle="datetimepicker">
                                     <input class="form-control datetimepicker-input datetimepicker" type="text" data-toggle="datetimepicker">
                                   </div>
                                </div>
                                <div class="form-group col-md-5 col-12">
                                     <label>Manifest No*</label>
                                     <input class="form-control" type="text" placeholder="Manifest No">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                     <label>Forwarder*</label>
                                     <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-1-lbrc" tabindex="-1" aria-hidden="true">
                                         <option data-select2-id="select2-data-3-o5tf">--Select Forwarder--</option>
                                         <option value="ARAMEX">ARAMEX</option>
                                         <option value="BLUEDART">BLUEDART</option>
                                         <option value="CRTCL">CRITICAL LOG</option>
                                         <option value="DELHIVERY">DELHIVERY</option>
                                         <option value="DELIVRYB2B">DELHIVERYB2B</option>
                                         <option value="DHL">DHL</option>
                                         <option value="DPD">DPD</option>
                                         <option value="DTDC">DTDC</option>
                                         <option value="ECSSPL">ECSSPL</option>
                                         <option value="EKART">EKART</option>
                                         <option value="FEDEX">FEDEX</option>
                                         <option value="LINEX">LINEX</option>
                                         <option value="NIMBUSPOST">NIMBUSPOST</option>
                                         <option value="PROF">PROFESSIONAL</option>
                                         <option value="SELF">SELF</option>
                                         <option value="SKYNET">SKYNET</option>
                                         <option value="SPOTON">SPOTON</option>
                                         <option value="TNT">TNT</option>
                                         <option value="TRACKON">TRACKON</option>
                                         <option value="UPS">UPS</option>
                                         <option value="USPS">USPS</option>
                                         <option value="XPRESSBEES">XPRESSBEES</option>
                                         <option value="YODEL">YODEL</option>
                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-s30f" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-60x6-container" aria-controls="select2-60x6-container"><span class="select2-selection__rendered" id="select2-60x6-container" role="textbox" aria-readonly="true" title="--Select Forwarder--">--Select Forwarder--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox"> Summarized</label>
                                     </div>
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <div class="all-chk">
                                         <label><input type="checkbox"> Detailed</label>
                                     </div>
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
                                     </div>
                                     <div class="col-md-2">
                                         <div class="searching-fld">
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-4-1r4p" tabindex="-1" aria-hidden="true">
                                              <option value="20" data-select2-id="select2-data-6-i1o5">20</option>
                                              <option value="50">50</option>
                                              <option value="100">100</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-vpkl" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-6s9x-container" aria-controls="select2-6s9x-container"><span class="select2-selection__rendered" id="select2-6s9x-container" role="textbox" aria-readonly="true" title="20">20</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                             <th>Manifest Date</th>
                                                             <th>Manifest No</th>
                                                             <th>Forwarder</th>
                                                             <th>Status</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                     <tr>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                         <td>12-1-2023 10:20 PM  </td>
                                                         <td>XYZ123S</td>
                                                         <td></td>
                                                         <td>Done</td>
                                                     </tr>
                                                     <tr>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                         <td>12-1-2023 10:20 PM  </td>
                                                         <td>XYZ123S</td>
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