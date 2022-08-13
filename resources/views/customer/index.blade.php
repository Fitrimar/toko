@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Data Customer
          </h3>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="row">
              <div class="col">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="ketik keyword disini">
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">
                  Cari
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No Tlp</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Amin</td>
                  <td>amin@gmail.com</td>
                  <td>085852527575</td>
                  <td>
                    Jln. Jend A. Yani. Pontianak
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 1) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Budi</td>
                  <td>budi@gmail.com</td>
                  <td>085852527576</td>
                  <td>
                    Jln. Jend Imam Bonjol, Pontianak
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 2) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Ani</td>
                  <td>Ani@gmail.com</td>
                  <td>085852527577</td>
                  <td>
                    Jln. Kom Yos Sudarso, Pontianak
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 3) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Lala</td>
                  <td>lala@gmail.com</td>
                  <td>085852527578</td>
                  <td>
                    Jln. Pedalaman , Mempawah
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 4) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Dina</td>
                  <td>dina@gmail.com</td>
                  <td>085852527579</td>
                  <td>
                    Jln. Alianya, Singkawang
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 5) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection