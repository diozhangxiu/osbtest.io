@extends('layouts.about')

@section('title')
    Join | Osbondgym
@endsection

@section('content')

    <section class="section db p120 top-section-image hidden-xs" style="margin-top: 120px;"> 
                <div class="overlay-bakground-clubs"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tagline-message page-title text-center">
                                <h3>OSBOND GYM MEMBERSHIP</h3>
                                <ul class="breadcrumb">
                                    <li><a href="index">Home</a></li>
                                    <li class="active">Osbondgym Membership</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Desktop Version -->
            <section class="section gb nopadtop section-career hidden-xs">
                <div class="container">
                    <div class="boxed boxedp4" style="border-radius: 10px;">

                        <div class="col-box-why-to-join-us">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title text-center">
                                        <h4>CARA MUDAH <span class="text-color">BERGABUNG</span> BERSAMA KAMI</h4>
                                        <div class="row">   
                                            <div class="col-md-12">
                                                <div class="shop-extra">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a data-toggle="tab" href="#pergi_ke_klub" style="border-radius: 5px;">1. Datang ke Klub Osbond Gym Terdekat</a></li>
                                                        <li><a data-toggle="tab" href="#free_trial" style="border-radius: 5px;">2. Dapatkan Uji Coba Gratis</a></li>
                                                        <li><a data-toggle="tab" href="#pendaftaran_online" style="border-radius: 5px;">3. Daftar Online</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="pergi_ke_klub" class="tab-pane fade in active">
                                                            <p>
                                                                1. Datanglah ke Klub Osbond Gym terdekat dengan Anda.
                                                            </p>
                                                            <p>
                                                                2. Pergi ke Staff Layanan Pelanggan kami untuk bicarakan minat Anda untuk bergabung dengan Osbond Gym 
                                                            </p>
                                                            <p>
                                                                3. Staf Layanan Pelanggan kami akan mengarahkan Anda ke Fitness Konsultan untuk informasi lebih detail. 
                                                            </p>
                                                            <p>
                                                                4. Fitness Konsultan kami akan mengajak Anda tour club dan memberikan arahan serta informasi terkait program yang ingin Anda capai. 
                                                        </div>
                                                        <div id="free_trial" class="tab-pane fade">
                                                            <p>
                                                                1. Isi Formulir Pendaftaran ( Gratis 4 Hari ) untuk semua akses, sepanjang hari, semua jam di satu klub.
                                                            </p>
                                                            <p>
                                                                2. Dapatkan kupon di E-Mail Anda, dan bawa kembali kupon anda ke Klub Osbond Gym.
                                                            </p>
                                                            <p>
                                                                3. Tunjukan kepada Staff Layanan Pelanggan kami bersama KTP Anda yang masih berlaku. 
                                                            </p>
                                                            <p>
                                                                4. Nikmati Akses Gratis selama 4 hari Anda.
                                                            </p>
                                                        </div>
                                                        <div id="pendaftaran_online" class="tab-pane fade">
                                                            <p>
                                                                1. Atur jadwal yang sesuai dengan Anda untuk kami hubungi.
                                                            </p>
                                                            <p>
                                                                2. Dan Fitness Konsultan kami akan mengatur waktu yang tepat untuk jadwal pertama Anda.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-left">
                                    <h4 style="text-align: left"><span class="text-color">AYO GABUNG</span> BERSAMA KAMI</h4>
                                    <p class="subitle-bottom-logo-about-us" style="text-align: left">
                                        Jika Anda siap untuk memulai gaya hidup sehat dan mengubah hidup Anda, jadilah bagian dari <strong>OSBOND GYM</strong> dan mulailah berolahraga dengan pelatih, peralatan, fasilitas, dan program terbaik kami. Kami tidak hanya ingin membuat Anda bugar. Kami juga ingin Anda merasa sehat. Mulai tur keliling dengan klub-klub kami yang terdekat dengan daerah Anda, kunjungi klub-klub kami dan bergabunglah dengan tim.
                                    </p>
                                    <p class="subitle-bottom-logo-about-us" style="text-align: left">
                                        Ayo daftar dan mari mulai 4 Hari Uji Coba Gratis sekarang! &nbsp; <em>Isi formulir dan segera bergabung bersama kami.</em>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?php if(!empty($statusMsg)){ ?>
                                    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
                                <?php } ?>
                                <form class="form-free-trial" id="" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-user-o"></i> &nbsp; Nama Depan</label>
                                                <input type="text" class="form-control" id="" placeholder="Nama Depan" name="nama_depan" required="" style="border-radius: 5px;"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-user-o"></i> &nbsp; Nama Belakang</label>
                                                <input type="text" class="form-control" id="" placeholder="Nama Belakang" name="nama_belakang" required="" style="border-radius: 5px;"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-envelope-o"></i> &nbsp; Email</label>
                                                <input type="email" class="form-control" id="" placeholder="Email" name="email" required="" style="border-radius: 5px;"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-phone"></i> &nbsp; Nomor Ponsel</label>
                                                <input type="text" class="form-control" id="" placeholder="Nomor Ponsel" name="nomor_ponsel" required="" style="border-radius: 5px;"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Pilih Klub</label>
                                                <select name="get_club" size="1" style="border-radius: 5px;" required>
                                                    <option value="" selected hidden></option>
                                                    <option value="Osbond Cempaka Putih">Osbond Cempaka Putih</option>
                                                    <option value="Osbond Blok M Square">Osbond Blok M Square</option>
                                                    <option value="Osbond Mall Bassura">Osbond Mall Bassura</option>
                                                    <option value="Osbond Mangga Dua Square">Osbond Mangga Dua Square</option>
                                                    <option value="Osbond Mega Bekasi Hypermall">Osbond Mega Bekasi Hypermall</option>
                                                    <option value="Osbond One Bell Park">Osbond One Bell Park</option>
                                                    <option value="Osbond Season City">Osbond Season City</option>
                                                    <option value="Osbond Palembang">Osbond Palembang</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Saya telah membaca dan menyetujui <a href="#">Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> Data
                                        </label>
                                    </div> -->
                                    <button type="submit" class="btn btn-default btn-kirim-free-trial" name="submit" style="border-radius: 5px;"><i class="fa fa-paper-plane-o"></i> &nbsp; KIRIM</button>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-box-membership-types">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="section-title text-left">
                                                <h4 style="text-align: left"><span class="text-color">CORPORATE</span> MEMBERSHIP</h4>
                                                <p>
                                                    Bukan rahasia lagi bahwa menjalani gaya hidup sehat akan memengaruhi performa kerja Anda. Osbond Gym memahami kebutuhan banyak perusahaan untuk memiliki karyawan yang sehat yang mampu bersaing dalam persaingan bisnis global yang ketat. Menjadi sehat tidak hanya akan membuat karyawan Anda terlihat rapi, tetapi juga meningkatkan kinerja mereka sehari-hari dengan mengurangi waktu absensi dan ketidakmampuan, meningkatkan produktivitas dan meningkatkan kerja tim serta keterampilan manajemen waktu. Keanggotaan Perusahaan Osbond Gym menawarkan lebih dari sekadar program kesehatan untuk perusahaan Anda, antara lain:
                                                </p>
                                                <p>&nbsp;</p>
                                                <p>
                                                    1. Laporan akurat untuk memantau waktu check-in karyawan Anda ke klub kami.
                                                </p>
                                                <p>
                                                    2. Program pelatihan yang akan mendidik karyawan Anda tentang pentingnya kesehatan, olahraga, dan nutrisi yang tepat.
                                                </p>
                                                <p>
                                                    3. Acara perusahaan terintegrasi untuk pertemuan perusahaan yang lebih sehat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-box-membership-types-bottom">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="section-title text-left">
                                                <h4 style="text-align: left"><span class="text-color">ALL CLUBS</span> MEMBERSHIP</h4>
                                                <p>
                                                    Berlaku untuk semua akses kelas, peralatan, dan fasilitas di SEMUA Osbond Gym Club pilihan Anda
                                                </p>
                                                <img src="images/card-name-front-all.png" class="img-responsive image-card-membership">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="section-title text-left">
                                                <h4 style="text-align: left"><span class="text-color">SINGLE CLUBS</span> MEMBERSHIP</h4>
                                                <p>
                                                    Berlaku untuk semua akses kelas, peralatan, dan fasilitas di SATU Osbond Gym Club pilihan Anda
                                                </p>
                                                <img src="images/card-name-front-single.png" class="img-responsive image-card-membership">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Mobile Version -->
            <section class="section gb section-career hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="boxed boxedp4" style="border-radius: 10px;">

                        <div class="col-box-why-to-join-us">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title text-center">
                                        <h4 style="font-size: 20px;">CARA MUDAH <span class="text-color">BERGABUNG</span> BERSAMA KAMI</h4>
                                        <div class="row">   
                                            <div class="col-md-12">
                                                <div class="shop-extra">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a data-toggle="tab" href="#pergi_ke_klub1" style="border-radius: 5px;">1. Pergi ke Klub Osbond Gym Terdekat</a></li>
                                                        <li><a data-toggle="tab" href="#free_trial1" style="border-radius: 5px;">2. Dapatkan Uji Coba Gratis</a></li>
                                                        <li><a data-toggle="tab" href="#pendaftaran_online1" style="border-radius: 5px;">3. Pendaftaran Online</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="pergi_ke_klub1" class="tab-pane fade in active">
                                                            <p>
                                                                1. Kunjungi Klub Osbond Gym terdekat dengan Anda.
                                                            </p>
                                                            <p>
                                                                2. Bicara kepada Staff Layanan Pelanggan Kami, tentang minat anda bergabung dengan Osbond Gym.
                                                            </p>
                                                            <p>
                                                                3. Staf Layanan Pelanggan kami akan mengarahkan Anda ke Fitness Konsultan untuk informasi lebih detail.
                                                            </p>
                                                            <p>
                                                                4. Ikuti arahan Fitness Konsultan kami sambil melihat sekitar klub, dan rasakan getaran gaya hidup sehat yang dinamis.
                                                            </p>
                                                        </div>
                                                        <div id="free_trial1" class="tab-pane fade">
                                                            <p>
                                                                1. Isi Formulir Pendaftaran ( Gratis 4 Hari ) untuk semua akses, sepanjang hari, semua jam di satu klub.
                                                            </p>
                                                            <p>
                                                                2. Dapatkan kupon di E-Mail Anda, dan bawa kembali kupon anda ke Klub Osbond Gym.
                                                            </p>
                                                            <p>
                                                                3. Tunjukan kepada Staff Layanan Pelanggan kami bersama KTP Anda yang masih berlaku. 
                                                            </p>
                                                            <p>
                                                                4. Nikmati Akses Gratis selama 4 hari Anda.
                                                            </p>
                                                        </div>
                                                        <div id="pendaftaran_online1" class="tab-pane fade">
                                                            <p>
                                                                1. Atur jadwal yang sesuai dengan Anda untuk kami hubungi.
                                                            </p>
                                                            <p>
                                                                2. Dan Fitness Konsultan kami akan mengatur waktu yang tepat untuk jadwal pertama Anda.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center">
                                    <h4 style="font-size: 20px;"><span class="text-color">AYO GABUNG</span> BERSAMA KAMI</h4>
                                    <p class="subitle-bottom-logo-about-us">
                                        Jika Anda siap untuk memulai gaya hidup sehat dan mengubah hidup Anda, jadilah bagian dari <strong>OSBOND GYM</strong> dan mulailah berolahraga dengan pelatih, peralatan, fasilitas, dan program terbaik kami. Kami tidak hanya ingin membuat Anda bugar. Kami juga ingin Anda merasa sehat. Mulai tur keliling dengan klub-klub kami yang terdekat dengan daerah Anda, kunjungi klub-klub kami dan bergabunglah dengan tim.
                                    </p>
                                    <p class="subitle-bottom-logo-about-us">
                                        Ayo daftar dan mari mulai 4 Hari Uji Coba Gratis sekarang! &nbsp; <em>Isi formulir dan segera bergabung bersama kami.</em>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?php if(!empty($statusMsg)){ ?>
                                    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
                                <?php } ?>
                                <form class="form-free-trial" id="" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-user-o"></i> &nbsp; Nama Depan</label>
                                                <input type="text" class="form-control" id="" placeholder="Nama Depan" name="nama_depan" required="" style="border-radius: 5px;"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-user-o"></i> &nbsp; Nama Belakang</label>
                                                <input type="text" class="form-control" id="" placeholder="Nama Belakang" name="nama_belakang" required="" style="border-radius: 5px;"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-envelope-o"></i> &nbsp; Email</label>
                                                <input type="email" class="form-control" id="" placeholder="Email" name="email" required="" style="border-radius: 5px;"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-phone"></i> &nbsp; Nomor Ponsel</label>
                                                <input type="text" class="form-control" id="" placeholder="Nomor Ponsel" name="nomor_ponsel" required="" style="border-radius: 5px;"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Pilih Klub</label>
                                                <select name="get_club" size="1" style="border-radius: 5px;" required>
                                                    <option value="" selected hidden></option>
                                                    <option value="Osbond Cempaka Putih">Osbond Cempaka Putih</option>
                                                    <option value="Osbond Blok M Square">Osbond Blok M Square</option>
                                                    <option value="Osbond Mall Bassura">Osbond Mall Bassura</option>
                                                    <option value="Osbond Mangga Dua Square">Osbond Mangga Dua Square</option>
                                                    <option value="Osbond Mega Bekasi Hypermall">Osbond Mega Bekasi Hypermall</option>
                                                    <option value="Osbond One Bell Park">Osbond One Bell Park</option>
                                                    <option value="Osbond Season City">Osbond Season City</option>
                                                    <option value="Osbond Palembang">Osbond Palembang</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Saya telah membaca dan menyetujui <a href="#">Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> Data
                                        </label>
                                    </div> -->
                                    <button type="submit" class="btn btn-default btn-kirim-free-trial" name="submit" style="border-radius: 5px;"><i class="fa fa-paper-plane-o"></i> &nbsp; KIRIM</button>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-box-membership-types">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="section-title text-center">
                                                <h4 style="font-size: 20px;"><span class="text-color">CORPORATE</span> MEMBERSHIP</h4>
                                                <p>
                                                    Bukan rahasia lagi bahwa menjalani gaya hidup sehat akan memengaruhi performa kerja Anda. Osbond Gym memahami kebutuhan banyak perusahaan untuk memiliki karyawan yang sehat yang mampu bersaing dalam persaingan bisnis global yang ketat. Menjadi sehat tidak hanya akan membuat karyawan Anda terlihat rapi, tetapi juga meningkatkan kinerja mereka sehari-hari dengan mengurangi waktu absensi dan ketidakmampuan, meningkatkan produktivitas dan meningkatkan kerja tim serta keterampilan manajemen waktu. Keanggotaan Perusahaan Osbond Gym menawarkan lebih dari sekadar program kesehatan untuk perusahaan Anda, antara lain:
                                                </p>
                                                <p>&nbsp;</p>
                                                <p>
                                                    1. Laporan akurat untuk memantau waktu check-in karyawan Anda ke klub kami.
                                                </p>
                                                <p>
                                                    2. Program pelatihan yang akan mendidik karyawan Anda tentang pentingnya kesehatan, olahraga, dan nutrisi yang tepat.
                                                </p>
                                                <p>
                                                    3. Acara perusahaan terintegrasi untuk pertemuan perusahaan yang lebih sehat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-box-membership-types-bottom">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="section-title text-center">
                                                <h4 style="font-size: 20px;"><span class="text-color">ALL CLUBS</span> MEMBERSHIP</h4>
                                                <p>
                                                    Berlaku untuk semua akses kelas, peralatan, dan fasilitas di SEMUA Osbond Gym Club pilihan Anda
                                                </p>
                                                <img src="images/card-name-front-all.png" class="img-responsive image-card-membership">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-6">
                                            <div class="section-title text-center">
                                                <h4 style="font-size: 20px;"><span class="text-color">SINGLE CLUBS</span> MEMBERSHIP</h4>
                                                <p>
                                                    Berlaku untuk semua akses kelas, peralatan, dan fasilitas di SATU Osbond Gym Club pilihan Anda
                                                </p>
                                                <img src="images/card-name-front-single.png" class="img-responsive image-card-membership">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

@endsection