@extends('layouts.about')

@section('title')
    Contact | Osbondgym
@endsection

@section('content')

    <section class="section db p120 top-section-image hidden-xs" style="margin-top: 120px;"> 
                <div class="overlay-bakground-clubs"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tagline-message page-title text-center">
                                <h3>CONTACT US</h3>
                                <ul class="breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section gb nopadtop section-career hidden-xs">
                <div class="container">
                    <div class="boxed boxedp4" style="border-radius: 10px;">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center">
                                    <h4><span class="text-color">KIRIM</span> PESAN</h4>
                                    <p class="subitle-bottom-logo-about-us">
                                        Hubungi Kami, Kami dengan senang hati akan mendengarkan anda. Dan akan segera menjawab pertanyaan Anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-box-page-contact-us">
                            
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="col-box-form-contact-us">
                                        <form class="form-free-trial" id="" action="action-contact.php" method="POST">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fieldtopic">Perihal</label>
                                                        <select name="regrading" class="form-control" size="1" id="seeAnotherFieldGroup" style="border-radius: 5px;" required>
                                                            <option value="" selected hidden></option>
                                                            <option value="Promo Ladies Membership">Promo Ladies Membership</option>
                                                            <option value="Rise & Shine PT Promotion">Rise & Shine PT Promotion</option>
                                                            <option value="Promo Tangcity Mall">Promo Tangcity Mall</option>
                                                            <option value="Promo #VaccineAction Get Free Up to 3 Months Membership">Promo #VaccineAction Get Free Up to 3 Months Membership</option>
                                                            <option value="Promo Recomendation StayFit 2021">Promo Recomendation StayFit 2021</option>
                                                            <option value="Pertanyaan">Pertanyaan</option>
                                                            <option value="Saran">Saran</option>
                                                            <option value="Franschise">Franschise</option>
                                                            <option value="Partnership">Partnership</option>
                                                            <option value="Karir / Lowongan Kerja">Karir / Lowongan Kerja</option>
                                                            <option value="Layanan Pelanggan">Layanan Pelanggan</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label for="">Nama Lengkap</label>
                                                        <input type="text" class="form-control" id="" placeholder="Nama" name="name" required="" style="border-radius: 5px;"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="email" class="form-control" id="" placeholder="Email" name="email" required="" style="border-radius: 5px;"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="fieldphone">
                                                        <label for="">No. Telepon</label>
                                                        <input type="text" class="form-control" id="" placeholder="No. Telephon" name="phone" required="" style="border-radius: 5px;"/>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-6">
                                                    <div class="form-group" id="fieldalamat">
                                                        <label for="">Alamat</label>
                                                        <input type="text" class="form-control" id="" placeholder="Alamat" name="address" required="" style="border-radius: 5px;"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Pesan</label>
                                                        <textarea class="form-control" id="" placeholder="Pesan" name="message" required="" rows="3" style="min-height: 100px; min-width:100%; max-width:100%; border-radius: 5px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-default btn-kirim-free-trial" value="Send" style="border-radius: 5px;">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" id="otherFieldGroupDiv2">
                                                        <div class="row contactv2">
                                                            <div class="col-md-12">
                                                                <div class="small-box" style="text-align: left; border-radius: 10px;">
                                                                    <div style="text-align: center;">
                                                                        <h4><span class="text-color">SYARAT &</span> KETENTUAN</h4>
                                                                        <h4><span class="text-color">Recommend Stay</span> Fit 2021</h4>
                                                                    </div>
                                                                    <br>
                                                                    <p>1. Ketentuan Umum</p>
                                                                    <small>1.1 Syarat dan ketentuan di bawah ini akan menjadi dasar aturan 
                                                                            untuk promosi “recommend STAY FIT 2021” (setelah ini disebut 
                                                                            Promosi)<br>
                                                                            1.2 Promosi ini dibuat oleh Manajemen Osbond Gym.<br>
                                                                            1.3 Periode promo ini dimulai pada tanggal 1 Oktober 2021 dan 
                                                                            berakhir pada 31 Desember 2021.<br>
                                                                    </small>
                                                                    <br>
                                                                    <p>2. Definisi</p>
                                                                    <small>2.1 “Anggota” – pihak yang memiliki hak untuk menggunakan promosi 
                                                                            ini sebagaimana dijelaskan pada peraturan keanggotaan tentang 
                                                                            penggunaan klub Osbond Gym yang setelah ini disebut “Perjanjian 
                                                                            Keanggotaan”<br>
                                                                            2.2	“Anggota referral” – pihak yang direkomendasikan oleh Anggota 
                                                                            untuk bergabung di Osbond Gym dan telah memenuhi syarat sebagai 
                                                                            Anggota.<br>
                                                                            2.3	“Konsultan Fitness” – pihak karyawan dari Osbond Gym yang 
                                                                            akan membantu Anggota mendaftarkan Anggota referral nya kedalam 
                                                                            sistem, serta menjelaskan dan melakukan seluruh proses penjualan 
                                                                            kepada Anggota referral sesuai ketentuan yang berlaku.<br>
                                                                    </small>
                                                                    <br>
                                                                    <p>3. Syarat dan Ketentuan Promosi</p>
                                                                    <small>3.1	Promosi berlaku untuk member aktif di Osbond Gym. Promo ini 
                                                                            dibuat untuk anggota yang aktif yang telah bergabung dan 
                                                                            merekomendasikan teman atau keluarga nya untuk bergabung di 
                                                                            Osbond Gym dan akan mendapatkan keuntungan yang akan disebutkan 
                                                                            di poin 4.5 dan 4.6.<br>
                                                                    </small>
                                                                    <br>
                                                                    <p>4. Pendaftaran Anggota Referral</p>
                                                                    <small>4.1	Untuk merekomendasikan teman untuk bergabung (“anggota 
                                                                            referral”), setiap anggota harus : <br>

                                                                            (i)	Mengisi formulir referral <br>
                                                                            (ii) Mendaftarkan formulir referral ke Osbond Gym dengan 
                                                                            menyediakan data anggota referral seperti; nama, nomor telepon 
                                                                            dan alamat email <br>
                                                                            <br>
                                                                            Atau bisa juga:<br>
                                                                            (iii) Langsung datang ke klub Osbond Gym tempat anggota terdaftar <br>
                                                                            (iv) Bertemu dengan konsultan fitness dengan perjanjian terlebih 
                                                                            dahulu dengan membawa teman yang ingin direkomendasikan.<br>
                                                                            <br>
                                                                            4.2	Osbond Gym akan menghubungi anggota referral anda dan 
                                                                            mengundang mereka untuk datang ke klub dan diberikan penawaran.
                                                                            4.3	Anggota referral harus berumur lebih dari 18 tahun (atau 16 
                                                                            tahun dengan disertakan surat izin orang tua) dan harus memiliki 
                                                                            identitas yang sah.<br>
                                                                            4.4	Anggota referral yang telah bergabung harus melakukan posting 
                                                                            di feed IG dengan menandai teman yang membawa dan akun resmi 
                                                                            osbond gym.<br>
                                                                            4.5	Anggota yang merekomendasikan teman nya akan mendapatkan 
                                                                            gratis satu bulan biaya keanggotaan untuk setiap satu orang 
                                                                            anggota referral yang bergabung sesuai ketentuan yang berlaku dan 
                                                                            diharuskan membayar seluruh biaya-biaya yang ditimbulkan pada 
                                                                            keanggotaan anggota referral. Anggota yang merekomendasikan bisa 
                                                                            mendapatkan gratis biaya keanggotaan hingga maksimal 12 bulan. 
                                                                            Setiap anggota juga bisa merekomendasikan berapapun jumlah teman 
                                                                            nya.<br>
                                                                            4.6	Bulanan gratis akan langsung di masukan ke akun anggota dan 
                                                                            tidak dapat ditukar ataupun diuangkan. Tidak ada biaya yang harus 
                                                                            dibayarkan untuk keanggotaan gratis ini.<br>
                                                                            4.6	Bulanan gratis akan langsung di masukan ke akun anggota dan 
                                                                            tidak dapat ditukar ataupun diuangkan. Tidak ada biaya yang harus 
                                                                            dibayarkan untuk keanggotaan gratis ini.<br>
                                                                            4.8	Bulanan gratis tidak dapat di pindahkan ke anggota manapun dan 
                                                                            hanya dapat dugunakan oleh anggota yang merekomendasikan.<br>
                                                                            4.9	Anggota yang merekomendasikan tidak berhak menerima keanggotaan 
                                                                            gratis apabila anggota referral yang direkomendasikan ditolak 
                                                                            keanggotaan nya dengan alasan apapun, termasuk apabila anggota 
                                                                            referral tidak memenuhi aturan pada ketentuan promosi ini, atau 
                                                                            apabila anggota refferal tidak memenuhi syarat dari promosi ini.<br>
                                                                            4.10 Apabila ada 13 anggota referral yang direkomendasikan 
                                                                            bergabung di Osbond Gym, setelah anggota ke 13 bergabung, anggota 
                                                                            yang merekomendasikan akan mendapatkan 5 sesi latihan bersama 
                                                                            personal trainer di Osbond Gym.<br>
                                                                            4.11 Bulanan gratis akan ditambahkan sebagai bulan terakhir ekstra 
                                                                            pada keanggotaan (perpanjangan dari kotrak keanggotaan). Bulan 
                                                                            ini akan ditambahkan secara otomatis pada akun anggota, setelah 
                                                                            memenuhi syarat dan ketentuan yang berlaku.<br>


                                                                    </small>
                                                                    <br>
                                                                    <p>5. Klausa Mengenai Data Pribadi</p>
                                                                    <small>5.1	Dengan mengikuti promosi ini anggota yang merekomendasikan 
                                                                            menerima sluruh syarat dan ketentuan yang diberikan tentang 
                                                                            promosi “Recommend STAY FIT 2021” dan menerima bahwa data pribadi 
                                                                            nya akan digunakan untuk tujuan infromasi mengenai promosi sesuai 
                                                                            dengan hukum yang berlaku.<br>
                                                                            5.2	Data pribadi anggota yang merekomendasikan diberikan secara 
                                                                            sukarela. Anggota memiliki hak atas data pribadi mereka, untuk 
                                                                            merubah, dan mengawasi sesuai dengan ketentuan hukum yang berlaku.<br>
                                                                            5.3	Anggota memberikan kepercayaan kepada Osbond Gym untuk 
                                                                            mengelola data pribadi anggota seperti : nama lengkap, nomor 
                                                                            telepon, email untuk tujuan informasi mengenai promosi dan 
                                                                            marketing.<br>
                                                                            5.4	Anggota menyatakan bahwa data pribadi telah diberikan kepada 
                                                                            Osbond Gym untuk dikelola dengan sebenar-benarnya sesuai dengan 
                                                                            aturan mengenai perlindungan data pribadi.<br>
                                                                            5.5	Anggota menyatakan bahwa yang bersangkutan telah diberikan 
                                                                            informasi oleh Osbond Gym tentang pengelolaan data pribadi 
                                                                            mengenai tujuan dan ruang lingkup penggunaan nya.<br>
                                                                            5.6	Anggota yang merekomendasikan tidak diperbolehkan memberikan 
                                                                            data yang tidak dikenalnya dan tidak setuju data pribadinya 
                                                                            diberikan kepada Osbond Gym.<br>
                                                                            5.7	Anggota tidak dapat menuntut Osbond Gym untuk segala keluhan 
                                                                            yang ditimbulkan dalam pengelolaan data pribadi yang berhubungan 
                                                                            dengan promosi ini.<br>

                                                                    </small>
                                                                    <br>
                                                                    <p>6. Ketentuan Akhir</p>
                                                                    <small>6.1	Setiap informasi mengenai promosi termasuk pada selebaran, 
                                                                            pada poster dan material marketing lain nya memiliki karakter 
                                                                            informatif saja.<br>
                                                                            6.2	Partisipasi dalam promosi ini berarti telah menyetujui 
                                                                            seluruh syarat dan ketentuan mengenai promosi.<br>
                                                                    </small>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="form-group" id="otherFieldGroupDiv3">
                                                        <div class="row contactv2">
                                                            <div class="col-md-12">
                                                                <div class="small-box" style="text-align: left; border-radius: 10px;">
                                                                    <div style="text-align: center;">
                                                                        <h4><span class="text-color">SYARAT &</span> KETENTUAN</h4>
                                                                        <h4><span class="text-color">Promo #VaccineAction Get Free </span>Up to 3 Months Membership</h4>
                                                                    </div>
                                                                    <br>
                                                                    <p>1. Ketentuan Umum</p>
                                                                    <small>Promosi ini dibuat oleh Manajemen Osbond Gym.<br>
                                                                            • Periode promosi dimulai pada tanggal 1 Oktober 2021 dan berakhir pada 31 Desember 2021.<br>
                                                                            • Promosi berlaku untuk single Club dan All Club di seluruh cabang Osbond Gym Jakarta dan Bekasi.<br>
                                                                            • Promosi ini tidak dapat digabungkan dengan promosi membership lainnya.
                                                                    </small>
                                                                    <br>
                                                                    <p>2. Syarat dan Ketentuan Promosi</p>
                                                                    <small> • Pembelian membership minimum 12 bulan dengan PT POS akan mendapatkan ekstra 3 bulan membership. <br>
                                                                            • Pembelian membership minimum 12 bulan tanpa PT POS akan mendapatkan ekstra 1 bulan membership.<br>
                                                                            • Calon member wajib menunjukkan sertifikat vaksinasi Covid-19 dosis lengkap (fisik maupun digital) kepada perwakilan Club in charge, yaitu Business Manager (sertifikat tidak perlu di photocopy).<br>
                                                                            • Promosi #VaccineAction hanya berlaku untuk member baru atau re-join di Osbond Gym. Tidak berlaku untuk member renewal.
                                                                    </small>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="row contactv2 text-center">
                                <div class="col-md-4">
                                    <div class="small-box" style="border-radius: 10px;">
                                        <i class="fa fa-envelope-o wow fadeIn"></i>
                                        <h4><span class="text-color">Hubungi</span> Kami</h4>
                                        <small>Phone : (021) 645-6282 / (021) 645-3817</small>
                                        <small>Whatsapp:<a href="https://wa.me/62817817058" target="blank">+62817817058</a></small>
                                        <!--<small><a href="mailto:info@osbondgym.com" target="blank">info@osbondgym.com</a></small>-->
                                    </div>
                                </div>
                                <div class="col-md-4 sbcenter">
                                    <div class="small-box" style="border-radius: 10px;">
                                        <i class="fa fa-map-o wow fadeIn"></i>
                                        <h4><span class="text-color">Alamat</span> Klub</h4>
                                        <small>
                                            Ruko Permata Ancol Blok L No. 1-2, Jl RE Martadinata, RT/RW 11/11, Pademangan, Jakarta Utara - 14410
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="small-box" style="border-radius: 10px;">
                                        <i class="fa fa-hourglass-1 wow fadeIn"></i>
                                        <h4><span class="text-color">Jam Buka</span> Klub</h4>
                                        <small>Senin - Jumat : 09:00 - 17:30 WIB</small>
                                        <small>Sabtu : 09:00 - 15:00 WIB</small>
                                        <small>Minggu : Libur</small>
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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center">
                                    <h4><span class="text-color">KIRIM</span> PESAN</h4>
                                    <p class="subitle-bottom-logo-about-us">
                                        Hubungi Kami, Kami dengan senang hati akan mendengarkan anda. Dan akan segera menjawab pertanyaan Anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-box-page-contact-us">
                            
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="col-box-form-contact-us">
                                        <form class="form-free-trial" id="" action="action-contact.php" method="POST">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fieldtopic">Perihal</label>
                                                        <select name="regrading" class="form-control" size="1" id="seeAnotherFieldGroup1" style="border-radius: 5px;">
                                                            <option value="" selected hidden></option>
                                                            <option value="Promo #VaccineAction Get Free Up to 3 Months Membership">Promo #VaccineAction Get Free Up to 3 Months Membership</option>
                                                            <option value="Promo Recomendation StayFit 2021">Promo Recomendation StayFit 2021</option>
                                                            <option value="Pertanyaan">Pertanyaan</option>
                                                            <option value="Saran">Saran</option>
                                                            <option value="Franschise">Franschise</option>
                                                            <option value="Partnership">Partnership</option>
                                                            <option value="Karir / Lowongan Kerja">Karir / Lowongan Kerja</option>
                                                            <option value="Layanan Pelanggan">Layanan Pelanggan</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label for="">Nama Lengkap</label>
                                                        <input type="text" class="form-control" id="" placeholder="Nama" name="name" required="" style="border-radius: 5px;"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="email" class="form-control" id="" placeholder="Email" name="email" required="" style="border-radius: 5px;"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="fieldphone">
                                                        <label for="">No. Telepon</label>
                                                        <input type="text" class="form-control" id="" placeholder="No. Telephon" name="phone" required="" style="border-radius: 5px;"/>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-6">
                                                    <div class="form-group" id="fieldalamat">
                                                        <label for="">Alamat</label>
                                                        <input type="text" class="form-control" id="" placeholder="Alamat" name="address" required="" style="border-radius: 5px;"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Pesan</label>
                                                        <textarea class="form-control" id="" placeholder="Pesan" name="message" required="" rows="3" style="min-height: 100px; min-width:100%; max-width:100%; border-radius: 5px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-default btn-kirim-free-trial" value="Send" style="border-radius: 5px;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="row contactv2 text-center">
                                <div class="col-md-4 sbcenter">
                                    <div class="small-box" style="border-radius: 10px;">
                                        <i class="fa fa-envelope-o wow fadeIn"></i>
                                        <h4><span class="text-color">Hubungi</span> Kami</h4>
                                        <small>Phone : (021) 645-6282 / (021) 645-3817</small>
                                        <small>Whatsapp:<a href="https://wa.me/62817817058" target="blank">+62817817058</a></small>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-4 sbcenter">
                                    <div class="small-box" style="border-radius: 10px;">
                                        <i class="fa fa-map-o wow fadeIn"></i>
                                        <h4><span class="text-color">Alamat</span> Klub</h4>
                                        <small>
                                            Ruko Permata Ancol Blok L No. 1-2, Jl RE Martadinata, RT/RW 11/11, Pademangan, Jakarta Utara - 14410
                                        </small>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-4 sbcenter">
                                    <div class="small-box" style="border-radius: 10px;">
                                        <i class="fa fa-hourglass-1 wow fadeIn"></i>
                                        <h4><span class="text-color">Jam Buka</span> Klub</h4>
                                        <small>Senin - Jumat : 09:00 - 17:30 WIB</small>
                                        <small>Sabtu : 09:00 - 15:00 WIB</small>
                                        <small>Minggu : Libur</small>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>

@endsection