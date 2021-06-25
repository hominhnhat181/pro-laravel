@extends('admin/layouts/adMaster')
@section('title', 'Home')

@section('content')

<div class="grid_10">
  <div class="box round first grid">
    <h2> Dashbord</h2>
    <div class="block">
      @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
      @endif
    </div>
   
    <!-- Pills navs -->
    <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab"
          aria-controls="ex1-pills-1" aria-selected="true">OverView</a>

      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab"
          aria-controls="ex1-pills-2" aria-selected="false"> New Upload</a>
      </li>
    </ul>
    <!-- Pills navs -->

    <!-- Pills content -->
    <div class="tab-content" id="ex1-content">
      <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
        <section>
          <div class="row" style="max-width: 88%; margin:0 auto">
            <div style="text-align: center">
              <h1>{{ app\Helpers\Helper::hiADmin() }}</h1>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between px-md-1">
                    <div>
                      <h3 class="text-warning">{{ $admin }}</h3>
                      <p class="mb-0">Admins</p>
                    </div>
                    <div class="align-self-center">
                  
                     <a href="{{ url('list-admin') }}"> <i class="fas fa-user-shield text-warning fa-3x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between px-md-1">
                    <div>
                      <h3 class="text-info">{{ $category }}</h3>
                      <p class="mb-0">Categories</p>
                    </div>
                    <div class="align-self-center">
                      <a href="{{ url('list-category') }}"><i class="fas fa-book-open text-info fa-3x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between px-md-1">
                    <div>
                      <h3 class="text-warning">{{ $type }}</h3>
                      <p class="mb-0">Types</p>
                    </div>
                    <div class="align-self-center">
                      <a href="{{ url('list-type') }}"> <i class="fas fa-chart-pie text-warning fa-3x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between px-md-1">
                    <div>
                      <h3 class="text-success">{{ $user }}</h3>
                      <p class="mb-0">Total User</p>
                    </div>
                    <div class="align-self-center">
                      <a href="{{ url('list-admin') }}"><i class="far fa-user text-success fa-3x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between px-md-1">
                    <div>
                      <h3 class="text-danger">{{ $game }}</h3>
                      <p class="mb-0">Total Game</p>
                    </div>
                    <div class="align-self-center">
                      <a href="{{ url('list-games') }}"><i class="fas fa-rocket text-danger fa-3x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between px-md-1">
                    <div>
                      <h3 class="text-info">{{ $app }}</h3>
                      <p class="mb-0">Total App</p>
                    </div>
                    <div class="align-self-center">
                      <a href="{{ url('list-apps') }}"><i class="far fa-life-ring text-info fa-3x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
      <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
        <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link lv2" id="ex2-tab-1" data-mdb-toggle="pill" href="#ex2-pills-1" role="tab"
              aria-controls="ex2-pills-1" aria-selected="true">Users</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link lv2" id="ex2-tab-2" data-mdb-toggle="pill" href="#ex2-pills-2" role="tab"
              aria-controls="ex2-pills-2" aria-selected="false">Games</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link lv2" id="ex2-tab-3" data-mdb-toggle="pill" href="#ex2-pills-3" role="tab"
              aria-controls="ex2-pills-3" aria-selected="false">Apps</a>
          </li>
        </ul>
        <div class="tab-content" id="ex2-content">
          <div class="tab-pane fade" id="ex2-pills-1" role="tabpanel" aria-labelledby="ex2-tab-1">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Regency</th>
                  <th scope="col">Created At</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($newUser as $user)
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  @if($user->lever < 1)
                  <td>Admin</td>
                  @else
                  <td>Menber</td>
                  @endif
                  <td>{{ $user->created_at }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="ex2-pills-2" role="tabpanel" aria-labelledby="ex2-tab-2">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Type</th>
                  <th scope="col">Category</th>
                  <th scope="col">Created At</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($newGame as $game)
                <tr>
                  <th scope="row">{{ $game->id }}</th>
                  <td>{{ $game->name }}</td>
                  <td>{{ $game->typeName }}</td>
                  <td>{{ $game->catName }}</td>
                  <td>{{ $game->created_at }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="ex2-pills-3" role="tabpanel" aria-labelledby="ex2-tab-3">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Type</th>
                  <th scope="col">Category</th>
                  <th scope="col">Created At</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($newApp as $app)
                <tr>
                  <th scope="row">{{ $app->id }}</th>
                  <td>{{ $app->name }}</td>
                  <td>{{ $app->typeName }}</td>
                  <td>{{ $app->catName }}</td>
                  <td>{{ $app->created_at }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Pills content -->
  </div>
</div>

<style>
  #ex1 {
    justify-content: center;
  }
  .nav-item a{
    min-width: 180px;
  }
  .nav-item .lv2{
    min-width: 110px;
    background: #d9d9f5
  }

</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
@endsection

