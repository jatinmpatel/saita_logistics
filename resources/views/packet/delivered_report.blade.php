@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Delivered Report</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Delivered Report</a></li>
                <li class="breadcrumb-item"><span> Delivered Report</span></li>
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
                                   <h3>Delivered Report:</h3>
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
                                     <label>AWB No*</label>
                                     <input class="form-control" type="text" placeholder="AWB No">
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
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-1-brnr" tabindex="-1" aria-hidden="true">
                                              <option value="20" data-select2-id="select2-data-3-ffu4">20</option>
                                              <option value="50">50</option>
                                              <option value="100">100</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-gpqu" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-1qv1-container" aria-controls="select2-1qv1-container"><span class="select2-selection__rendered" id="select2-1qv1-container" role="textbox" aria-readonly="true" title="20">20</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                             <th>Status</th>
                                                             <th>AWB No.</th>
                                                         </tr>
                                                     </thead>

                                                     <tbody>
                                                         <tr>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                             <td>12-1-2023 10:20 PM</td>
                                                             <td>Done</td>
                                                             <td>ABCD123</td>
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