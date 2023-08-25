@extends('layouts.app', [
    'namePage' => 'Input',
    'class' => 'sidebar-mini',
    'activePage' => 'input',
])

@section('content')
<div class="panel-header panel-header-sm"></div>
<div class="form-container">
    <!-- Elemen-elemen formulir Anda -->
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary btn-round text-white pull-right" href="#">Add user</a>
                    <h4 class="card-title">Form input</h4>
                </div>
                <form method="post" action="/store_dokter">
                    @csrf
                    <div class="mb-3">
                        <label for="no_dokter">Code</label>
                            <input type="number" name="no_dokter" id="no_dokter" required class="form-control" value="{{ old('no_dokter') }}">
                    </div>
                 
                    <style>
                            .custom-container {
                                margin-left: 20px;
                            }
                    </style>
                   
                <div class="container-fluid mg-t-20">
                    <!-- Isi konten lainnya -->
                    <div class="row row-sm">
                        <div class="col-xl-12">
                            <!-- Isi konten Anda di sini -->
                            <div class="mb-3 custom-container">
                  <label for="asal_project">Asal project</label>
                  <select class="form-control" name="asal_project" required id="asal_project">
                      <option value="1">Divisi</option>
                      <option value="2">Group</option>
                      <option value="3">Sub Group</option>
                      <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                  </select>
              </div>
             
                <div class="mb-3">
                    <label for="spesialis">Description</label>
                    <input type="text" name="spesialis" required class="form-control" id="spesialis" value="{{ old('spesialis') }}">
                </div>

                <style>
                            .custom-container {
                                margin-left: 0px;
                            }
                    </style>
                   
                 <div class="mb-3 custom-container">
                  <label for="asal_project">Type</label>
                  <select class="form-control" name="asal_project" required id="asal_project">
                      <option value="1">Pengedaan</option>
                      <option value="2">Pengembangan</option>
                      <option value="3">Product Setup</option>
                      <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                  </select>
              </div>

              <style>
                            .custom-container {
                                margin-left: 0px;
                            }
                    </style>
                   
                 <div class="mb-3 custom-container">
                  <label for="asal_project">Lead subgroup</label>
                  <select class="form-control" name="asal_project" required id="asal_project">
                      <option value="1">Subgroup 1</option>
                      <option value="2">Subgroup 2</option>
                      <option value="3">Subgroup 3</option>
                      <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                  </select>
              </div>

              <div class="mb-3 custom-container">
                  <label for="asal_project">Secondary subgroup</label>
                  <p2>* opsional<p2>
                  <select class="form-control" name="asal_project" required id="asal_project">
                      <option value="1">Sec group 1</option>
                      <option value="2">Sec group 2</option>
                      <option value="3">Sec group 3</option>
                      <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                  </select>
              </div>

              <div class="mb-3 custom-container">
                  <label for="asal_project">Priority</label>
                  <select class="form-control" name="asal_project" required id="asal_project">
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>  
                      <option value="3"> 3</option>
                      <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                  </select>
              </div>

              <div class="mb-3">
                    <label for="spesialis">Nama Pic Project</label>
                    <input type="text" name="spesialis" required class="form-control" id="spesialis" value="{{ old('spesialis') }}">
                </div>

                <div class="mb-3 custom-container">
                  <label for="asal_project">Secondary PIC</label>
                  <p2>* opsional<p2>
                  <select class="form-control" name="asal_project" required id="asal_project">
                      <option value="1"> PIC 1 </option>
                      <option value="2"> PIC 2 </option>  
                      <option value="3"> PIC 3</option>
                      <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                  </select>
              </div>
              
                <div class="mb-3">
                    <label for="diterima">Target Date</label>
                    <input type="date" name="diterima" required class="form-control" id="diterima" value="{{ old('spesialis') }}">
                </div>
                <div class="mb-3">
                  <label for="bulan_target">Bulan Target</label>
                  <input type="month" name="bulan_target" required class="form-control" id="bulan_target" value="{{ old('bulan_target') }}">
                 </div>

                 <div class="mb-3 custom-container">
                <label for="triwulan">Triwulan</label>
                <select class="form-control" name="triwulan" required id="triwulan">
                    <option value="Q1">Q1</option>
                    <option value="Q2">Q2</option>
                    <option value="Q3">Q3</option>
                    <option value="Q4">Q4</option>
                </select>
            </div>              
            <div class="mb-3 custom-container">
              <label for="tanggal_target">Tanggal Target (Remaining Days)</label>
              <input type="date" name="tanggal_target" required class="form-control" id="tanggal_target">
            </div>
          </head>
<body>
    <div class="mb-3 custom-container">
        <label for="tanggal_target">Tanggal Sekarang</label>
        <input type="date" name="tanggal_target" required class="form-control" id="tanggal_target">
    </div>

    <div class="mb-3 custom-container">
        <button onclick="hitungSisaHari()">Hitung Sisa Hari</button>
        <p id="sisa_hari"></p>
    </div>

    <script>
        function hitungSisaHari() {
            var inputTanggal = new Date(document.getElementById("tanggal_target").value);
            var sekarang = new Date();

            var timeDiff = inputTanggal - sekarang;
            var sisaHari = Math.ceil(timeDiff / (1000 * 3600 * 24));

            document.getElementById("sisa_hari").innerHTML = "Sisa hari: " + sisaHari + " hari";
        }
    </script>
</body>
</html>

              <div class="mb-3 custom-container">
                  <label for="asal_project">Target Revisi</label>
                  <select class="form-control" name="asal_project" required id="asal_project">
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>  
                      <option value="3"> 3</option>
                      <option value="4"> 4</option>
                      <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                  </select>
              </div>

              <div class="mb-3 custom-container">
                  <label for="asal_project">Status</label>
                  <select class="form-control" name="asal_project" required id="asal_project">
                      <option value="1"> Todo </option>
                      <option value="2"> On Progress </option>  
                      <option value="3"> Testing</option>
                      <option value="4"> Waiting Deploy</option>
                      <option value="5"> Done</option>
                      <option value="6"> Cancel</option>
                      <option value="7"> Pending</option>
                      <option value="8"> inisiasi</option>
                      <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                  </select>
              </div>

              <div class="mb-3 custom-container">
                <label for="aktivitas">Aktivitas Pengerjaan</label>
                <input type="text" name="aktivitas" required class="form-control" id="aktivitas">
            </div>

            <div class="mb-3 custom-container">
                <label for="tanggal_pengerjaan">Tanggal Pengerjaan</label>
                <input type="date" name="tanggal_pengerjaan" required class="form-control" id="tanggal_pengerjaan">
            </div>

            <div class="mb-3 custom-container">
                <button onclick="simpanAktivitas()">Simpan Aktivitas</button>
            </div>

            <script>
                function simpanAktivitas() {
                    var aktivitas = document.getElementById("aktivitas").value;
                    var tanggalPengerjaan = document.getElementById("tanggal_pengerjaan").value;

                    // Di sini Anda bisa menambahkan kode untuk mengirim data ke server atau melakukan tindakan lainnya
                    console.log("Aktivitas:", aktivitas);
                    console.log("Tanggal Pengerjaan:", tanggalPengerjaan);
                }
            </script>

<div class="mb-3 custom-container">
        <label for="kegiatan">Kegiatan</label>
        <input type="text" name="kegiatan" required class="form-control" id="kegiatan">
    </div>

    <div class="mb-3 custom-container"> 
        <label for="tanggal">Tanggal Pelaksanaan</label>
        <input type="date" name="tanggal" required class="form-control" id="tanggal">
    </div>

    <div class="mb-3 custom-container">
        <button onclick="submitActionPlan()">Simpan Action Plan</button>
    </div>

    <script>
        function submitActionPlan() {
            var kegiatan = document.getElementById("kegiatan").value;
            var tanggal = document.getElementById("tanggal").value;

            // Di sini Anda bisa menambahkan kode untuk mengirim data ke server atau melakukan tindakan lainnya
            console.log("Kegiatan:", kegiatan);
            console.log("Tanggal Pelaksanaan:", tanggal);
        }
    </script>
@endsection
