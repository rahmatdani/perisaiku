@extends('mainadmin')

@section('container')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-5">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <img src="/storage/blogs/{{ $biodata->foto; }}" alt="" width="300" class="mb-2 rounded-circle img-thumbnail d-block m-auto">
    <h1 class="text-center mb-5">{{ $biodata->name; }}</h1>

    <div class="profil mb-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="border rounded-3 p-4 tabel">
            <table>
              <h1 class="fs-3 fw-bold mb-3">Data Diri Peserta</h1>
              <tr>
                <th>NISN</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->nisn; }}</td>
              </tr>
              <tr>
                <th>Nama Lengkap </th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->name; }}</td>
              </tr>
              <tr>
                <th>Tempat, Tanggal Lahir </th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->tempat_lahir; }}, {{ $biodata->tanggal_lahir; }}</td>
              </tr>
              <tr>
                <th>No. HP Siswa</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->no_hp; }}</td>
              </tr>
              <tr>
                <th>No. HP Orang Tua</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->hp_ortu; }}</td>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->jenis_kelamin; }}</td>
              </tr>
              <tr>
                <th>Agama</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->agama; }}</td>
              </tr>
              <tr>
                <th>Alamat</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->alamat; }}</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="border rounded-3 p-4 tabel sekul">
            <table>
              <h1 class="fs-3 fw-bold mb-3">Biodata Asal Sekolah</h1>
              <tr>
                <th>Asal Sekolah</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->asal_sekolah; }}</td>
              </tr>
              <tr>
                <th>Alamat Sekolah</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->alamat_sekolah; }}</td>
              </tr>
              <tr>
                <th>Provinsi Sekolah</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->provinsi; }}</td>
              </tr>
              <tr>
                <th>Kabupaten Sekolah</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->kabupaten; }}</td>
              </tr>
              <tr>
                <th>Kecamatan Sekolah</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->kecamatan; }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="border rounded-3 p-4 tabel">
            <table>
              <h1 class="fs-3 fw-bold mb-3">Nilai Raport</h1>
              <tr>
                <th>Matematika Semester 3</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->mtk; }}</td>
              </tr>
              <tr>
                <th>Matematika Semester 4</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->mtk1; }}</td>
              </tr>
              <tr>
                <th>IPA Semester 3</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->ipa; }}</td>
              </tr>
              <tr>
                <th>IPA Semester 4</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->ipa1; }}</td>
              </tr>
              <tr>
                <th>Bahasa Inggris Semester 3</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->b_ing; }}</td>
              </tr>
              <tr>
                <th>Bahasa Inggris Semester 4</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->b_ing1; }}</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="border rounded-3 p-4 tabel sekul2">
            <table>
              <h1 class="fs-3 fw-bold mb-3">Jalur Pendaftaran</h1>
              <tr>
                <th>Jalur Pendaftaran</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->jalur; }}</td>
              </tr>
              <tr>
                <th>Jurusan 1</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->jurusan1; }}</td>
              </tr>
              <tr>
                <th>Jurusan 2</th>
                <th class="samaDengan">:</th>
                <td>{{ $biodata->jurusan2; }}</td>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
