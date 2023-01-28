@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Vendor API Configuration</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Website Setting</a></li>
                <li class="breadcrumb-item"><span>Website Setting</span></li>
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
                                   <h3>Vendor Service Configuration</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-6 col-12">
                                   <label>Vendor*</label>
                                     <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-1-22xs" tabindex="-1" aria-hidden="true">
                                         <option data-select2-id="select2-data-3-kuzk">--Select Vendor--</option>
                                         <option value="ARAMEX">ARAMEX</option>
                                         <option value="BLUEDART">BLUEDART</option>
                                         <option value="Deep Blue Xpress">Deep Blue Xpress</option>
                                         <option value="DELHIVERY">DELHIVERY</option>
                                         <option value="DHL">DHL</option>
                                         <option value="DTDC">DTDC</option>
                                         <option value="FEDEX">FEDEX</option>
                                         <option value="PROFESSIONAL">PROFESSIONAL</option>
                                         <option value="UPS">UPS</option>
                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-vaue" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-1rb4-container" aria-controls="select2-1rb4-container"><span class="select2-selection__rendered" id="select2-1rb4-container" role="textbox" aria-readonly="true" title="--Select Vendor--">--Select Vendor--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                           </div>

                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3>Tracking Field Setting</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-4 col-12">
                                     <div class="bodring-design">
                                         <label><input type="checkbox" id="select-all"> Available Service [3]</label>
                                         <label><input type="checkbox">Bluedart : Domestic Priority</label>
                                         <label><input type="checkbox">Bluedart : Domestic TDD 1030</label>
                                         <label><input type="checkbox">Bluedart : Domestic TDD 1200</label>
                                         <label><input type="checkbox">Bluedart : Surfare</label>
                                     </div>
                                </div>

                                <div class="form-group col-md-1 col-12">
                                     <div class="plusing-btn">
                                         <button class="btn btn-primary  btn-xs" tabindex="1" id="btnAddClientChargesDetails" type="button" title="Add Head"> &gt;&gt;
                                         </button>
                                         <br>
                                         <br>
                                         <button class="btn btn-primary  btn-xs" tabindex="1" id="btnAddClientChargesDetails" type="button" title="Add Head"> &lt;&lt;
                                         </button>
                                     </div>
                                </div>

                                <div class="form-group col-md-4 col-12">
                                     <div class="bodring-design">
                                         <label><input type="checkbox" id="select-all">Assigned Service [3]</label>
                                         <label><input type="checkbox">Bluedart : Apex</label>
                                         <label><input type="checkbox">Bluedart : Apex TDD</label>
                                         <label><input type="checkbox">Bluedart : Domestic Critical</label>
                                     </div>
                                </div>
                                
                           </div>

                           </div>

                           <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                             <div class="bg-clr">
                                 <div class="row">
                                     <div class="col-md-3">
                                         <div class="frm-heading">
                                           <h3>Total Record(s) Found: 13</h3>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="searching-fld">
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-4-gsoq" tabindex="-1" aria-hidden="true">
                                              <option value="20" data-select2-id="select2-data-6-1iwi">20</option>
                                              <option value="50">50</option>
                                              <option value="100">100</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-c1tj" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-1u29-container" aria-controls="select2-1u29-container"><span class="select2-selection__rendered" id="select2-1u29-container" role="textbox" aria-readonly="true" title="20">20</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="searching-fld">
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-7-7ngf" tabindex="-1" aria-hidden="true">
                                              <option value="Vendor Code" data-select2-id="select2-data-9-cwoe">Vendor Code</option>
                                              <option value="Vendor Name">Vendor Name</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-l2cu" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-9zut-container" aria-controls="select2-9zut-container"><span class="select2-selection__rendered" id="select2-9zut-container" role="textbox" aria-readonly="true" title="Vendor Code">Vendor Code</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="searching-fld">
                                           <select class="form-control select select2-hidden-accessible" data-select2-id="select2-data-10-1eb8" tabindex="-1" aria-hidden="true">
                                              <option value="1" data-select2-id="select2-data-12-9u6c">Exactly</option>
                                              <option value="2">Contains</option>
                                              <option value="3">Start with</option>
                                           </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-cp9a" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-1p2n-container" aria-controls="select2-1p2n-container"><span class="select2-selection__rendered" id="select2-1p2n-container" role="textbox" aria-readonly="true" title="Exactly">Exactly</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                         <th>Vendor</th>
                                                         <th>Service Type</th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                     <tr>
                                                         <td>ARAMEX : ARAMEX</td>
                                                         <td>DPX</td>
                                                     </tr>
                                                     <tr>
                                                         <td>ARAMEX : ARAMEX</td>
                                                         <td>DPX</td>
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