@extends('layouts.app')

@section('content')

<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Detail <b>{{$data->kode_transaksi}}</b></h4>
                        <div class="form-group{{ $errors->has('kode_transaksi') ? ' has-error' : '' }}">
                            <label for="kode_transaksi" class="col-md-4 control-label">Kode Transaksi</label>
                            <div class="col-md-6">
                                <input id="kode_transaksi" type="text" class="form-control" name="kode_transaksi" value="{{$data->kode_transaksi}}" required readonly="">
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('tgl_setor') ? ' has-error' : '' }}">
                            <label for="tgl_setor" class="col-md-4 control-label">Tanggal Setor</label>
                            <div class="col-md-3">
                                <input id="tgl_setor" type="date" class="form-control" name="tgl_setor" value="{{ date('Y-m-d', strtotime($data->tgl_setor)) }}" readonly="">
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('tgl_tarik') ? ' has-error' : '' }}">
                            <label for="tgl_tarik" class="col-md-4 control-label">Tanggal Tarik</label>
                            <div class="col-md-3">
                                <input id="tgl_tarik" type="date"  class="form-control" name="tgl_tarik" value="{{ date('Y-m-d', strtotime($data->tgl_tarik)) }}" readonly="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="anggota_id" class="col-md-4 control-label">Transaksi</label>
                            <div class="col-md-6">
                                <input id="transaksi" type="text" class="form-control" readonly="" value="{{$data->transaksi->status}}">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="anggota_id" class="col-md-4 control-label">Anggota</label>
                            <div class="col-md-6">
                                <input id="anggota_nama" type="text" class="form-control" readonly="" value="{{$data->anggota->nama}}">

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ket') ? ' has-error' : '' }}">
                            <label for="ket" class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                @if($data->status == 'setor')
                                  <label class="badge badge-warning">Setor</label>
                                @else
                                  <label class="badge badge-success">Tarik</label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ket') ? ' has-error' : '' }}">
                            <label for="ket" class="col-md-4 control-label">Keterangan</label>
                            <div class="col-md-6">
                                <input id="ket" type="text" class="form-control" name="ket" value="{{ $data->ket }}" readonly="">
                            </div>
                        </div>

                        <a href="{{route('transaksi.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>


@endsection