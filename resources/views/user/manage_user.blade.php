@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">User Master</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">User Master</a></li>
                <li class="breadcrumb-item"><span> User Master</span></li>
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
                                   <h3>User Master:</h3>
                                 </div>
                               </div>
                                <!-- <div class="form-group col-md-12 col-12">
                                     <label>Consignee*</label>
                                     <input class="form-control" type="text" value="System Generated" disabled>
                                </div> -->
                                <!-- <div class="form-group col-md-12 col-12">
                                     <label>AWB No.*</label>
                                     <textarea type="text" class="form-control" placeholder="Accepts multiple AWB No. comma(,) seperated or enter seperated"></textarea>
                                </div> -->
                                <!-- <div class="form-group col-md-6 col-12">
                                     <div class="nw-cls">
                                         <div class="question">
                                            <label><input class="coupon_question" type="checkbox" name="coupon_question" value="1" onchange="valueChanged()"/> Client Login</label>
                                         </div>
                                         <div class="answer">
                                             <label>User Group*</label>
                                             <select class="form-control select">
                                                <option>--Select Status--</option>
                                                <option value="INTRANSIT">INTRANSIT</option>
                                                <option value="DELIVERED">DELIVERED</option>
                                                <option value="UN-DELIVERED">UN-DELIVERED</option>
                                                <option value="RTO">RTO</option>
                                                <option value="PICKED UP">PICKED UP</option>
                                             </select>
                                             <div class="all-chk">
                                                 <label><input type="checkbox"> IsMain</label>
                                             </div>
                                         </div>
                                     </div>
                                </div>-->
                                <div class="form-group col-md-3 col-12">
                                     <label>User Name*</label>
                                     <input class="form-control" type="text" placeholder="Enter User Name">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <label>Mobile No*</label>
                                     <input class="form-control" type="text" placeholder="Enter Mobile No">
                                </div>
                                <!-- <div class="form-group col-md-3 col-12">
                                     <label>User Group*</label>
                                     <select class="form-control select" disabled>
                                        <option>-- Select Group --</option>
                                        <option value="INTRANSIT">INTRANSIT</option>
                                        <option value="DELIVERED">DELIVERED</option>
                                        <option value="UN-DELIVERED">UN-DELIVERED</option>
                                        <option value="RTO">RTO</option>
                                        <option value="PICKED UP">PICKED UP</option>
                                     </select>
                                </div> -->
                                <div class="form-group col-md-3 col-12">
                                     <label>Password*</label>
                                     <input class="form-control" type="text" placeholder="Enter Password">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <label>DOJ*</label>
                                     <input class="form-control datetimepicker-input datetimepicker" type="text" data-toggle="datetimepicker">
                                </div>
                                <div class="form-group col-md-3 col-12">
                                     <label>Email ID*</label>
                                     <input class="form-control" type="text" placeholder="Enter Email ID">
                                </div>
                           </div>
                         </div>
                         <hr>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="page-btns">
                              <div class="form-group text-center custom-mt-form-group">
                                 <button class="btn btn-primary mr-2" type="button"><i class="fa fa-check"></i> Save</button>
                                 <button class="btn btn-primary mr-2" type="submit"><i class="fa fa-expand"></i> Export</button>
                                 <button class="btn btn-secondary orng-btn" type="reset"><i class="fa fa-dot-circle"></i> Reset</button>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                             <div class="bg-clr">
                             <div class="row">
                                <div class="col-md-3">
                                    <div class="frm-heading">
                                        <h3>Total Record(s) Found: 1</h3>
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
                                            <option value="User Code">User Code</option>
                                            <option value="User Name">User Name</option>
                                            <option value="Mobile Number">Mobile Number</option>
                                            <option value="Email ID">Email ID</option>
                                            <option value="User Group Name">User Group Name</option>
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
                                                             <th>Delete</th>
                                                             <th>User Name</th>
                                                             <th>DOJ</th>
                                                             <th>Mobile No</th>
                                                             <th>Email ID</th>
                                                             <th>Status</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                     <tr>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                         <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                         <td>Sunil</td>
                                                         <td>NO</td>
                                                         <td>9868404417</td>
                                                         <td>sunilgupta4417@gmail.com</td>
                                                         <td>YES</td>
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