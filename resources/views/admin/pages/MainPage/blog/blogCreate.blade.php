 @extends("admin.leyauts.app")
 @section("_content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog Create Form</h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('main') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('userlist') }}">All Sliders</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              <form role="form" action="{{ route('blogCreate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter title" name="title"  value="old('title')">
                    @error('title')
                        <span class="text-danger" style="font-size: 14x">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="exampleInputPassword1" placeholder="Enter description" name="description" value="old('description')">
                     @error('description')
                         <span class="text-danger" style="font-size: 14x">{{ $message }}</span>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Author Name</label>
                    <input type="text" class="form-control @error('authorName') is-invalid @enderror" id="exampleInputPassword1" placeholder="Enter Author Name" name="authorName" value="old('authorName')">
                   @error('authorName')
                          <span class="text-danger" style="font-size: 14x">{{ $message }}</span>
                    @enderror
                </div>
                    <div class="form-group">
                        <label>Categories</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                            @foreach ($categories as $key=>$data )
                                 <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Blog image input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imgUrl">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputFile">Author image input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="authorimgUrl">
                         @error('authorimgUrl')
                         {{ $message }}
                    @enderror
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 @endsection


