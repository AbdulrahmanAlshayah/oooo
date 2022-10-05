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
                <h3 class="box-title">Category List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <th>Category Icon</th>
                            <th>Category En</th>
                            <th>Category Ar</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                @foreach ( $category as $item )
                <tr>
                    <td><span><i class="{{$item->category_icon}}"></i></span></td>
                    <td>{{$item->category_name_en}}</td>
                    <td>{{$item->category_name_ar}}<td>
                        <a href="{{ route('brand.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('brand.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
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
          {{-- /col end --}}


{{-- -------------------- Add Category Page ------------------ --}}



          <div class="col-4">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Add Category</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">
                     
                    {{-- coped this form from admin_change_password.blade.php --}}

                    <form method="post" action="{{ route('brand.store') }}"> {{--  منضيف هي اخر خاصية اذا في صور --}}
                        @csrf
                         
                                    <div class="form-group">
                                        <h5>Category Name English <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="category_name_en	" class="form-control"> </div>
                                            @error('category_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
    
                                    <div class="form-group">
                                        <h5>Category Name Arabic <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="category_name_ar" class="form-control"> </div>
                                            @error('category_name_ar')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
    
                                    <div class="form-group">
                                        <h5>Category Icon <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="category_icon" class="form-control"> </div>
                                            @error('category_icon')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
                               
                              
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">
                           </div>
                       </form>



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