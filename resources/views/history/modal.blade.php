{{-- add ptoduk --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" id="modalForm"> <!--begin::Body-->
                @csrf
                <div class="card-body">
                    <div class="row mb-3"> <label for="nik" class="col-sm-2 col-form-label">Nik</label>
                        <div class="col-sm-10"> <input type="number" name="nik" class="form-control" id="nik"> </div>
                    </div>
                    <div class="row mb-3"> <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10"> <input type="date" name="tanggal" class="form-control" id="tanggal"> </div>
                    </div>
                    <div class="row mb-3"> <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                        <div class="col-sm-10"> <input type="time" name="jam" class="form-control" id="jam"> </div>
                    </div>
                    <div class="row mb-3"> <label for="lokasi" class="col-sm-2 col-form-label">Lokasi Dituju</label>
                        <div class="col-sm-10"> <input type="text" name="lokasi_dituju" class="form-control" id="lokasi"> </div>
                    </div>
                    <div class="row mb-3"> <label for="suhu" class="col-sm-2 col-form-label">Suhu</label>
                        <div class="col-sm-10"> <input type="number" name="suhu" class="form-control" id="suhu"> </div>
                    </div>
                </div> <!--end::Body--> <!--begin::Footer-->
                <div class="card-footer"> <button type="submit" class="btn btn-float">Save Data</button> 
                    <button type="button" class="btn float-end" onclick="window.history.back();">Cancel</button>
            </form>
        </div>
      </div>
    </div>
  </div>