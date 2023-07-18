<x-guest-layout>
    <section class="pengaduan" id="pengaduan" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Pengaduan</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengaduan.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('POST')

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <!-- nama-->
                                <div class="form-group">
                                    <label for="nama"><span class="text-danger"><sup>*</sup></span>Nama</label>
                                    <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                        id="nama" name="nama" value="{{ old('nama') }}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- alamat -->
                                <div class="form-group mt-3">
                                    <label><span class="text-danger"><sup>*</sup></span>Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat">{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- email -->
                                <div class="form-group mt-3">
                                    <label for="email"><span class="text-danger"><sup>*</sup></span>Email</label>
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- no_hp -->
                                <div class="form-group mt-3">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" class="form-control  @error('no_hp') is-invalid @enderror"
                                        id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                                    @error('no_hp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- foto -->
                                <div class="form-group mt-3">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                        id="foto" name="foto" value="{{ old('foto') }}">
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <!--pengaduan-->
                                <div class="form-group">
                                    <label><span class="text-danger"><sup>*</sup></span>Pengaduan</label>
                                    <textarea class="form-control @error('pengaduan') is-invalid @enderror" name="pengaduan" id="pengaduan" rows="15">{{ old('pengaduan') }}</textarea>
                                    @error('pengaduan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-kirim">Ajukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
