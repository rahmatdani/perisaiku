@extends('mainadmin')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- form -->
       @if($biodata)
        <form action="/biodata" method="post" class="form" enctype="multipart/form-data">
            <h2 class="text-center">Daftar Sekarang</h2>
            @csrf
            <!-- Progress Bar  -->
            <div class="progressbar">
                <div class="progress" id="progress"></div>
                <div class="progress-step progress-step-active" data-title="Data Diri Peserta"></div>
                <div class="progress-step" data-title="Biodata Asal Sekolah"></div>
                <div class="progress-step" data-title="Nilai Raport"></div>
                <div class="progress-step" data-title="Jalur Pendaftaran"></div>
            </div>

            <div class="form-step form-step-active">
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="nisn">NISN</label>
                        <input class="form-control" type="number" name="nisn" id="nisn"
                            placeholder="Masukkan NISN anda" />
                    </div>
                    <div class="col-lg-6">
                        <label for="nama">Nama Lengkap</label>
                        <input class="form-control" type="text" name="name" id="name"
                            placeholder="Masukkan Nama Lengkap Anda" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir"
                            placeholder="Masukkan Tempat Lahir Anda" />
                    </div>
                    <div class="col-lg-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="no_hp">No. HP Siswa</label>
                        <input class="form-control" type="number" name="no_hp" id="no_hp"
                            placeholder="Masukkan No. HP Siswa" />
                    </div>
                    <div class="col-lg-6">
                        <label for="hp_ortu">No. HP Orang Tua</label>
                        <input class="form-control" type="number" name="hp_ortu" id="hp_ortu"
                            placeholder="Masukkan No. HP Orang Tua Anda" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option>--</option>
                            <option value="laki laki">Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="agama">Agama</label>
                        <select class="form-control" name="agama" id="agama">
                            <option>--</option>
                            <option value="islam">Islam</option>
                            <option>Kristen</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat"
                                placeholder="Masukkan Alamat Anda" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto Diri</label>
                            <input type="file" class="form-control" class="form-control" name="foto">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <a href="#" class="btn btn-next ml-auto rounded-3" style="width: 450px;">Next</a>
                </div>
            </div>

            <div class="form-step">
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control"
                            placeholder="Masukkan Asal Sekolah Anda" />
                    </div>
                    <div class="col-lg-6">
                        <label for="alamat_sekolah">Alamat Sekolah</label>
                        <input type="text" name="alamat_sekolah" id="alamat_sekolah" class="form-control"
                            placeholder="Masukkan Alamat Sekolah Asal Anda" />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="provinsi">Provinsi Sekolah</label>
                    <select class="form-control" name="provinsi" id="provinsi">
                        <option>Pilih Provinsi</option>
                        <option value="Sulawesi Selatan">Sulawei Selatan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kabupaten">Kabupaten Sekolah</label>
                    <select class="form-control" name="kabupaten" id="kabupaten">
                        <option>Pilih Kabupaten/Kota Sekolah</option>
                        <option value="Sulawesi Selatan">Sulawei Selatan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kecamatan">Kecamatan Sekolah</label>
                    <select class="form-control" name="kecamatan" id="kecamatan">
                        <option>Pilih Kecamatan Sekolah</option>
                        <option value="Sulawesi Selatan">Sulawei Selatan</option>
                    </select>
                </div>
                <div class="btns-group">
                    <a href="#" class="btn btn-prev">Back</a>
                    <a href="#" class="btn btn-next">Next</a>
                </div>
            </div>

            <div class="form-step">
                <div class="row mb-3">
                    <label for="">Skala Nilai: 1 - 100</label>
                    <div class="col-lg-6">
                        <label for="mtk">Matematika Semester 3</label>
                        <input class="form-control" type="text" name="mtk" id="mtk" />
                    </div>
                    <div class="col-lg-6">
                        <label for="mtk1">Matematika Semester 4</label>
                        <input class="form-control" type="text" name="mtk1" id="mtk1" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="ipa">IPA Semester 3</label>
                        <input class="form-control" type="text" name="ipa" id="ipa" />
                    </div>
                    <div class="col-lg-6">
                        <label for="ipa1">IPA Semester 4</label>
                        <input class="form-control" type="text" name="ipa1" id="ipa1" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="b_ing">Bahasa Inggris Semester 3</label>
                        <input class="form-control" type="text" name="b_ing" id="b_ing" />
                    </div>
                    <div class="col-lg-6">
                        <label for="b_ing1">Bahasa Inggris Semester 4</label>
                        <input class="form-control" type="text" name="b_ing1" id="b_ing1" />
                    </div>
                </div>
                <div class="btns-group">
                    <a href="#" class="btn btn-prev">Back</a>
                    <a href="#" class="btn btn-next">Next</a>
                </div>
            </div>

            <div class="form-step">
                <div class="mb-3">
                    <h2>Jalur Pendaftaran</h2>
                    <select class="form-control" name="jalur" id="jalur">
                        <option>Jalur Pendaftaran</option>
                        <option value="Sulawesi Selatan">Sulawei Selatan</option>
                    </select>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <select class="form-control" name="jurusan1" id="jurusan1">
                            <option>Pilihan Jurusan 1</option>
                            <option value="Sulawesi Selatan">Sulawei Selatan</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <select class="form-control" name="jurusan2" id="jurusan2">
                            <option>Pilihan Jurusan 2</option>
                            <option value="Sulawesi Selatan">Sulawei Selatan</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <h2>Kode Referral:</h2>
                    <input class="form-control" type="text" name="kodeReferral" id="kodeReferral"
                        placeholder="Masukkan Kode Referral Anda" />
                </div>
                <div class="btns-group">
                    <a href="#" class="btn btn-prev">Back</a>
                    <input type="submit" value="Daftar" class="btn" />
                </div>
            </div>
        </form>

    </main>
@endsection
