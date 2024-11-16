@foreach ($catatan as $item)
    <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"
                        style="
                        background-color: #02293b; /* Warna latar belakang biru */
                        color: white; /* Warna teks putih */
                        padding: 10px 20px; /* Padding di sekitar teks (atas/bawah, kiri/kanan) */
                        border-radius: 5px; /* Membuat sudut membulat */
                        text-align: center; /* Menyelaraskan teks ke tengah */
                        margin: 0; /* Menghapus margin default */
                        width: 100%; /* Membuat lebar h1 menyesuaikan lebar kontainer */
                    ">
                        Edit Data Pengajuan
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="modalForm" action="editcatatan/{{ $item->id }}" method="POST">
                        @csrf

                        <div>
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $item->name }}" required>
                        </div>
                        <div>
                            <label for="nomor_ktp" class="form-label">Nomor KTP</label>
                            <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp"
                                value="{{ $item->nomor_ktp }}" required>
                        </div>
                        <div>
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                value="{{ $item->tempat_lahir }}" required>
                        </div>
                        <div>
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                value="{{ $item->tanggal_lahir }}" required>
                        </div>
                        <div>
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="{{ $item->jenis_kelamin }}">{{ $item->jenis_kelamin }}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label for="golongan_darah" class="form-label">Golongan Darah</label>
                            <select class="form-select" id="golongan_darah" name="golongan_darah" required>
                                <option value="{{ $item->golongan_darah }}">
                                    {{ $item->golongan_darah }}</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                        <div>
                            <label for="pendidikan" class="form-label">Pendidikan</label>
                            <select class="form-select" id="pendidikan" name="pendidikan" required>
                                <option value="{{ $item->pendidikan }}">{{ $item->pendidikan }}</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D1">D1</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div>
                            <label for="jenis_sim" class="form-label">Jenis SIM</label>
                            <select class="form-select" id="jenis_sim" name="jenis_sim" required>
                                <option value="{{ $item->jenis_sim }}">{{ $item->jenis_sim }}</option>
                                <option value="SIM A">SIM A</option>
                                <option value="SIM B1">SIM B1</option>
                                <option value="SIM B2">SIM B2</option>
                                <option value="SIM C">SIM C</option>
                                <option value="SIM D">SIM D</option>
                            </select>
                        </div>
                        <div>
                            <label for="tanggal_pengajuan" class="form-label">Tanggal Pengajuan</label>
                            <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan"
                                value="{{ $item->tanggal_pengajuan }}" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="summit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- modal lihat foto --}}
    <div class="modal fade" id="foto{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">file pengajuan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-row justify-content-between">
                    <img src="{{ asset('fileCatatan/' . $item->ktp) }}" class="img-fluid" style="max-width: 33.33%; max-height: 400px;" alt="KTP">
                    <img src="{{ asset('fileCatatan/' . $item->kk) }}" class="img-fluid " style="max-width: 33.33%; max-height: 400px;" alt="KK">
                    <img src="{{ asset('fileCatatan/' . $item->pas_foto) }}" class="img-fluid" style="max-width: 33.33%; max-height: 400px;" alt="Pas Foto">
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
