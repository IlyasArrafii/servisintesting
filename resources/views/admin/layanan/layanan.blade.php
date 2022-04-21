@include('admin.layout.header')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Layanan</h1>
    </div>
  </section>
  <a href="{{url('/layanan/tambah')}}" class="btn btn-success mb-3">Add Layanan</a>

  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
  @endif

  @if ($message = Session::get('warning'))
  <div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
  @endif

  @if ($message = Session::get('danger'))
  <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
  @endif

  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kode Layanan</th>
        <th scope="col">Nama Layanan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($layanan as $item)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$item->kode_layanan}}</td>
        <td>{{$item->nama_layanan}}</td>
        <td><a href="{{url('/layanan/'.$item->id.'')}}" class="btn btn-warning">Edit</a>
          <form action="{{url('/layanan/'.$item->id.'')}}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@include('admin.layout.footer')