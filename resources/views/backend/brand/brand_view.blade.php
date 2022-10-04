{{-- from theme table-data -> Data Table With Full Features --}}
@extends('admin.admin_master')
@section('admin')


<!-- Content Wrapper. Contains page content -->
    <div class="container-full">
      <!-- Content Header (Page header) -->
      

      <!-- Main content -->
      <section class="content">
        <div class="row">
            
          
 

          <div class="col-8">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Brand List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Brand En</th>
                              <th>Brand Ar</th>
                              <th>Image</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                @foreach ( $brands as $item )
                <tr>
                    <td>{{$item->brnad_name_en}}</td>
                    <td>{{$item->brnad_name_ar}}</td>
                    <td><img src="{{asset($item->brand_image)}}" style="width: 70px; height: 40px"></td>
                    <td>
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-info">Danger</a>
                    </td>
                </tr>
                @endforeach
                          
                          
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

                     
          </div>





          <div class="col-4">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Add Brand</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">
                     
                   </div>
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
 
                      
           </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>

<!-- /.content-wrapper -->






@endsection