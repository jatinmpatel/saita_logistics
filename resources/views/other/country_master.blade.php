@extends('layouts.admin')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <h5 class="text-uppercase mb-0 mt-0 page-title">Country Master</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
             <ul class="breadcrumb float-right p-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Country Master</a></li>
                <li class="breadcrumb-item"><span> Country Master</span></li>
             </ul>
          </div>
       </div>
    </div>
    <div class="page-content">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
               
                   <div class="card-body">
                     <form action="{{ route('country.save')}}" method="post" name="country_frm" id="country_frm">
                        @csrf
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="frm-heading">
                                   <h3> Country Master</h3>
                                 </div>
                               </div>
                                <div class="form-group col-md-6 col-12">
                                   <label>Country Code*</label>
                                   <input type="text" required class="form-control" name="country_name" id="country_name" placeholder="Enter Country Code">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                   <label>Country Name*</label>
                                   <input type="text" required class="form-control" name="country_code" id="country_code" placeholder="Enter Country Name">
                                </div>

                           </div>
                         </div>
                         <hr>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="page-btns">
                              <div class="form-group text-center custom-mt-form-group">
                                 <button class="btn btn-primary mr-2" type="submit"><i class="fa fa-paper-plane"></i> Submit</button>
                                 <button class="btn btn-primary mr-2" type="button"><i class="fa fa-search"></i> Search</button>
                                 <button class="btn btn-primary mr-2" type="button"><i class="fa fa-expand"></i> Export</button>
                                 <button class="btn btn-secondary orng-btn" type="reset"><i class="fa fa-dot-circle"></i> Reset</button>
                              </div>
                            </div>
                        </div>
                     </form>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="bg-clr">
                              <div class="row">
                                 <div class="col-md-10">
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
                              </div>
                           </div>
                             <div class="col-md-12">    
                                 <div class="x_content">
                                    <div class="table-responsive">
                                       <table id="t1">
                                             <thead>
                                                <tr>
                                                   <th>Edit</th>
                                                   <th>Delete</th>
                                                   <th>Country Code</th>
                                                   <th>Country Name</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                             <tr>
                                                <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                <td>33</td>
                                                <td>France</td>
                                             </tr>
                                             <tr>
                                                <td><a class="btn btn-primary" href="#"> <i class="fa fa-pencil-alt"></i></a></td>
                                                <td><a class="btn btn-primary" href="#"> <i class="fa fa-trash-alt"></i></a></td>
                                                <td>44</td>
                                                <td>United Kingdom</td>
                                             </tr>
                                       </tbody>
                                       </table>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
             </div>
          </div>
       </div>
    </div>
    <script>
$(function () {
    var table = $('#t1').DataTable({
        processing: true,
        serverSide: true,
        searching: false,
        ajax: "{{ route('country.list') }}",
        "order": [[5, "desc" ]],
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            
            {data: 'custom_date', name: 'custom_date'},
            {data: 'action', name: 'action',orderable: false,searchable: false},
            // /orderable: false, searchable: false
        ]
    });
  });
</script>
@endsection