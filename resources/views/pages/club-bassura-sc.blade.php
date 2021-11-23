@extends('layouts.club-sc')

@section('title')
    Club Bassura Mall Schedule | Osbondgym
@endsection

@section('content')

    <section class="section db p120 top-section-image hidden-xs" style="margin-top: 120px;"> 
                <div class="overlay-bakground-clubs"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tagline-message page-title text-center">
                                <h3>SCHEDULE OSBOND GYM</h3>
                                <ul class="breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">Schedule Club Bassura Mall</li>
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

                        <div class="box-tabs-jadwal-kelas">
                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="colbox-right-tabs-jadwal-kelas">
                                        <div class="tab-content">

                                            <div class="tab-pane fade in active">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-top: 20px;">
                                                        <div class="tagline-message page-title text-center">
                                                            <h3>SCHEDULE CLUB BASSURA MALL</h3>
                                                            <h4>NOVEMBER 2021</h4>
                                                        </div>
                                                    </div>
                                                    <section class="class-schedule-area pt-100 pb-100 p-relative">
                                                        <div class="section-overlay">
                                                            <div class="col-sm-12">
                                                                <div class="class-schedule-tab-area">
                                                                    <h5 style="text-align: center; color: gray;">Pilih Hari :</h5>
                                                                    <nav style="text-align: center;">
                                                                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" style="border-radius: 10px;">
                                                                            <a class="nav-item" id="monday" data-toggle="tab" href="#nav-monday" role="tab" aria-selected="true" style="padding-left: 15px; padding-right: 15px;">Senin</a>
                                                                            <a class="nav-item " id="tuesday" data-toggle="tab" href="#nav-tuesday" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Selasa</a>
                                                                            <a class="nav-item " id="wednesday" data-toggle="tab" href="#nav-wednesday" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Rabu</a>
                                                                            <a class="nav-item " id="thursday" data-toggle="tab" href="#nav-thursday" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Kamis</a>
                                                                            <a class="nav-item " id="friday" data-toggle="tab" href="#nav-friday" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Jum'at</a>
                                                                            <a class="nav-item " id="saturday" data-toggle="tab" href="#nav-saturday" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Sabtu</a>
                                                                            <a class="nav-item " id="sunday" data-toggle="tab" href="#nav-sunday" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Minggu</a>
                                                                        </div>
                                                                    </nav>
                                                                    <div class="tab-content" id="nav-tabContent">
                                                                        <div class="tab-pane fade in active" id="nav-monday" role="tabpanel" aria-labelledby="monday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box" >
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/fun-step.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Fun Step</h4>
                                                                                                <p style="text-align: center;">Mul</p>
                                                                                                <span>17.30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box" >
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/zumba.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Zumba</h4>
                                                                                                <p style="text-align: center;">Syara</p>
                                                                                                <span>18.30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/x-ride.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>X-Ride</h4>
                                                                                                <p style="text-align: center;">Panca</p>
                                                                                                <span>18.30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bodypump.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bodypump</h4>
                                                                                                <p style="text-align: center;">Panca</p>
                                                                                                <span>19.30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-tuesday" role="tabpanel" aria-labelledby="tuesday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/cardio-dance.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Cardio Dance</h4>
                                                                                                <p style="text-align: center;">Shand</p>
                                                                                                <span>17:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/art-core.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Art Core</h4>
                                                                                                <p style="text-align: center;">Alex</p>
                                                                                                <span>18:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/energy.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Energy</h4>
                                                                                                <p style="text-align: center;">Winda</p>
                                                                                                <span>19:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-wednesday" role="tabpanel" aria-labelledby="wednesday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/zumba.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Zumba</h4>
                                                                                                <p style="text-align: center;">Vera</p>
                                                                                                <span>17:30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bodycombat.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bodycombat</h4>
                                                                                                <p style="text-align: center;">Inca</p>
                                                                                                <span>18:30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bodypump.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bodypump</h4>
                                                                                                <p style="text-align: center;">Inca</p>
                                                                                                <span>19:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-thursday" role="tabpanel" aria-labelledby="thursday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/allure.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Allure</h4>
                                                                                                <p style="text-align: center;">Nindi</p>
                                                                                                <span>17:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/hatha-yoga.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Hatha Yoga</h4>
                                                                                                <p style="text-align: center;">Yuli</p>
                                                                                                <span>18:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/x-ride.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>X-Ride</h4>
                                                                                                <p style="text-align: center;">Vina</p>
                                                                                                <span>18:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bodycombat.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bodycombat</h4>
                                                                                                <p style="text-align: center;">Rere</p>
                                                                                                <span>19:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-friday" role="tabpanel" aria-labelledby="friday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/cardio-dance.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Cardio Dance</h4>
                                                                                                <p style="text-align: center;">Dade</p>
                                                                                                <span>17:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/aerobic.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Aerobic</h4>
                                                                                                <p style="text-align: center;">Dade</p>
                                                                                                <span>18:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/vinyasa-yoga.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Vinyasa Yoga</h4>
                                                                                                <p style="text-align: center;">Ribka</p>
                                                                                                <span>19:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-saturday" role="tabpanel" aria-labelledby="saturday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bodypump.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bodypump</h4>
                                                                                                <p style="text-align: center;">Andreas</p>
                                                                                                <span>09:00 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-sunday" role="tabpanel" aria-labelledby="sunday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bolly.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bolly'd</h4>
                                                                                                <p style="text-align: center;">Mameth</p>
                                                                                                <span>16:00 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
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
            <section class="section gb nopadtop section-career hidden-lg hidden-md hidden-sm" style="margin-top: -50px;">
                <div class="container">
                    <div class="boxed boxedp4" style="border-radius: 10px;">

                        <div class="box-tabs-jadwal-kelas">
                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="colbox-right-tabs-jadwal-kelas">
                                        <div class="tab-content">

                                            <div class="tab-pane fade in active">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-top: 20px;">
                                                        <div class="tagline-message page-title text-center">
                                                            <h3>SCHEDULE CLUB BASSURA MALL</h3>
                                                            <h4>NOVEMBER 2021</h4>
                                                        </div>
                                                    </div>
                                                    <section class="class-schedule-area pt-10 pb-100 p-relative">
                                                        <div class="section-overlay">
                                                            <div class="col-sm-12">
                                                                <div class="class-schedule-tab-area">
                                                                    <h5 style="text-align: center; color: gray;">Pilih Hari :</h5>
                                                                    <nav style="text-align: center;">
                                                                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" style="border-radius: 10px;">
                                                                            <a class="nav-item" id="monday" data-toggle="tab" href="#nav-monday1" role="tab" aria-selected="true" style="padding-left: 15px; padding-right: 15px;">Senin</a>
                                                                            <a class="nav-item " id="tuesday" data-toggle="tab" href="#nav-tuesday1" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Selasa</a>
                                                                            <a class="nav-item " id="wednesday" data-toggle="tab" href="#nav-wednesday1" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Rabu</a>
                                                                            <a class="nav-item " id="thursday" data-toggle="tab" href="#nav-thursday1" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Kamis</a>
                                                                            <a class="nav-item " id="friday" data-toggle="tab" href="#nav-friday1" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Jum'at</a>
                                                                            <a class="nav-item " id="saturday" data-toggle="tab" href="#nav-saturday1" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Sabtu</a>
                                                                            <a class="nav-item " id="sunday" data-toggle="tab" href="#nav-sunday1" role="tab" aria-selected="false" style="padding-left: 15px; padding-right: 15px;">Minggu</a>
                                                                        </div>
                                                                    </nav>
                                                                    <div class="tab-content" id="nav-tabContent">
                                                                        <div class="tab-pane fade in active" id="nav-monday1" role="tabpanel" aria-labelledby="monday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box" >
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/fun-step.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Fun Step</h4>
                                                                                                <p style="text-align: center;">Mul</p>
                                                                                                <span>17.30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box" >
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/zumba.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Zumba</h4>
                                                                                                <p style="text-align: center;">Syara</p>
                                                                                                <span>18.30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/x-ride.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>X-Ride</h4>
                                                                                                <p style="text-align: center;">Panca</p>
                                                                                                <span>18.30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bodypump.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bodypump</h4>
                                                                                                <p style="text-align: center;">Panca</p>
                                                                                                <span>19.30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-tuesday1" role="tabpanel" aria-labelledby="tuesday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/cardio-dance.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Cardio Dance</h4>
                                                                                                <p style="text-align: center;">Shand</p>
                                                                                                <span>17:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/art-core.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Art Core</h4>
                                                                                                <p style="text-align: center;">Alex</p>
                                                                                                <span>18:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/energy.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Energy</h4>
                                                                                                <p style="text-align: center;">Winda</p>
                                                                                                <span>19:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-wednesday1" role="tabpanel" aria-labelledby="wednesday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/zumba.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Zumba</h4>
                                                                                                <p style="text-align: center;">Vera</p>
                                                                                                <span>17:30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bodycombat.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bodycombat</h4>
                                                                                                <p style="text-align: center;">Inca</p>
                                                                                                <span>18:30 WIB</span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bodypump.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bodypump</h4>
                                                                                                <p style="text-align: center;">Inca</p>
                                                                                                <span>19:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-thursday1" role="tabpanel" aria-labelledby="thursday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/allure.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Allure</h4>
                                                                                                <p style="text-align: center;">Nindi</p>
                                                                                                <span>17:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/hatha-yoga.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Hatha Yoga</h4>
                                                                                                <p style="text-align: center;">Yuli</p>
                                                                                                <span>18:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/x-ride.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>X-Ride</h4>
                                                                                                <p style="text-align: center;">Vina</p>
                                                                                                <span>18:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bodycombat.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bodycombat</h4>
                                                                                                <p style="text-align: center;">Rere</p>
                                                                                                <span>19:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-friday1" role="tabpanel" aria-labelledby="friday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/cardio-dance.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Cardio Dance</h4>
                                                                                                <p style="text-align: center;">Dade</p>
                                                                                                <span>17:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/aerobic.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Aerobic</h4>
                                                                                                <p style="text-align: center;">Dade</p>
                                                                                                <span>18:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/vinyasa-yoga.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Vinyasa Yoga</h4>
                                                                                                <p style="text-align: center;">Ribka</p>
                                                                                                <span>19:30 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-saturday1" role="tabpanel" aria-labelledby="saturday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bodypump.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bodypump</h4>
                                                                                                <p style="text-align: center;">Andreas</p>
                                                                                                <span>09:00 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-sunday1" role="tabpanel" aria-labelledby="sunday">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="box">
                                                                                                <div class="icon">
                                                                                                    <img src="images/schedule/bolly.png" style="width: 80px;">
                                                                                                </div>
                                                                                                <h4>Bolly'd</h4>
                                                                                                <p style="text-align: center;">Mameth</p>
                                                                                                <span>16:00 WIB</span>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
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