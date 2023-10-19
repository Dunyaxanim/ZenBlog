
@extends("admin.leyauts.app")
@section('_content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Table</h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('main') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('slidercreate') }}">Create Slider</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Slider data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>img</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($sliders as $key => $data)
                    <tr>
                      <td><img style="height: 100px; width:100px; margin:auto;" src="{{ asset("projects/admin/img/slider/$data->imgUrl")}}" alt=""></td>
                      <td>{{$data->title}}</td>
                      <td>{{$data->content}}</td>
                       <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{ route('detail', $data->id) }}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('edititem', $data->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('deleteitem', $data->id) }}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection