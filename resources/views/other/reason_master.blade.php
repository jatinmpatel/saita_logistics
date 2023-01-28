@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Reason Master</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Reason Master</a></li>
                <li class="breadcrumb-item"><span> Reason Master</span></li>
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
                                   <h3> Reason Master</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-5 col-12">
                                   <label>Reason Code*</label>
                                   <input type="text" class="form-control" placeholder="Enter Reason Code">
                                </div>
                                <div class="form-group col-md-5 col-12">
                                   <label>Reason*</label>
                                   <input type="text" class="form-control" placeholder="Enter Reason">
                                </div>
                                <div class="form-group col-md-2 col-12 pr-0">
                                     <div class="all-chk">
                                         <label><input type="checkbox" checked=""> Active</label>
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
                                           <h3>No Record(s) Found: 2</h3>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="searching-fld">
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-1-db87" tabindex="-1" aria-hidden="true">
                                              <option value="20" data-select2-id="select2-data-3-kfel">20</option>
                                              <option value="50">50</option>
                                              <option value="100">100</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-ocwm" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-tub7-container" aria-controls="select2-tub7-container"><span class="select2-selection__rendered" id="select2-tub7-container" role="textbox" aria-readonly="true" title="20">20</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="searching-fld">
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-4-47gm" tabindex="-1" aria-hidden="true">
                                              <option value="Reason Code" data-select2-id="select2-data-6-096x">Reason Code</option>
                                              <option value="RM.Reason">Reason</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-u804" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-s4e2-container" aria-controls="select2-s4e2-container"><span class="select2-selection__rendered" id="select2-s4e2-container" role="textbox" aria-readonly="true" title="Reason Code">Reason Code</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="searching-fld">
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-7-iuff" tabindex="-1" aria-hidden="true">
                                              <option value="1" data-select2-id="select2-data-9-lt4q">Exactly</option>
                                              <option value="2">Contains</option>
                                              <option value="3">Start with</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-jlig" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kl6t-container" aria-controls="select2-kl6t-container"><span class="select2-selection__rendered" id="select2-kl6t-container" role="textbox" aria-readonly="true" title="Exactly">Exactly</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                             <th>Reason Code</th>
                                                             <th>Reason</th>
                                                             <th>Active</th>
                                                             <th>Created By</th>
                                                             <th>Created Date</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <tr>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                             <td>RCA123</td>
                                                             <td>Transit</td>
                                                             <td>YES</td>
                                                             <td>1962: Sunil</td>
                                                             <td>11-JAN-2023 1-:56:34 PM</td>
                                                         </tr>
                                                         <tr>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                             <td>RCA123</td>
                                                             <td>Delivered</td>
                                                             <td>YES</td>
                                                             <td>1962: Kamal</td>
                                                             <td>11-JAN-2023 1-:56:34 PM</td>
                                                         </tr>
                                                         <tr>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                             <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                             <td>RCA123</td>
                                                             <td>Pending</td>
                                                             <td>YES</td>
                                                             <td>1962: Kuldeep</td>
                                                             <td>11-JAN-2023 1-:56:34 PM</td>
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