    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Periksa</h3>
              </div>

              <form action="{{ route('periksaCreate') }}" method="POST">
                @csrf
                <div class="card-body">
                    <input type="hidden" class="form-control" id="id_pasien" name="id_pasien" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <label for="exampleInputDokter">Pilih Dokter</label>
                        <select class="form-control" id="id_dokter" name="id_dokter">
                            <option value="">-- Pilih Dokter --</option>
                            @foreach ($showDokter as $dokter)
                                <option value="{{ $dokter->id }}"> dr. {{ $dokter->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-signature"></i> Buat Janji
                  </button>
                </div>
                
                </form>
        </div>

              <div class="row">
              <div class="col-12">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Riwayat Periksa</h3>
              </div>
              <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Dokter</th>
                    <th>Tanggal Periksa</th>
                    <th>Biaya Periksa</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($showPeriksa as $periksas)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>dr. {{ $periksas->dokter->nama }}</td>
                    <td>{{ $periksas->tgl_periksa ? $periksas->tgl_periksa: '-' }}</td>
                    <td>{{ $periksas->biaya_periksa ? 'Rp. '.number_format($periksas->biaya_periksa, 2): '-' }}</td>
                    <td>
                      <span class="badge {{ $periksas->biaya_periksa ? 'badge-success' : 'badge-warning' }}">
                        {{ $periksas->biaya_periksa ? 'Sudah Ditangani' : 'Menunggu Pemeriksaan' }}
                      </span>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
    </section>
