@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Dashboard</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row p-t-10 p-b-10">
                            <!-- Column -->
                            <div class="col p-r-0">
                                <h1 class="font-light">86</h1>
                                <h6 class="text-muted">New Clients</h6></div>
                            <!-- Column -->
                            <div class="col text-right align-self-center">
                                <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20">
                                    <i class="mdi mdi-account-circle" style="font-size: 48px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row p-t-10 p-b-10">
                            <!-- Column -->
                            <div class="col p-r-0">
                                <h1 class="font-light">248</h1>
                                <h6 class="text-muted">All Projects</h6></div>
                            <!-- Column -->
                            <div class="col text-right align-self-center">
                                <div data-label="30%" class="css-bar m-b-0 css-bar-danger css-bar-20">
                                    <i class="mdi mdi-briefcase-check" style="font-size: 48px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row p-t-10 p-b-10">
                            <!-- Column -->
                            <div class="col p-r-0">
                                <h1 class="font-light">352</h1>
                                <h6 class="text-muted">New Items</h6></div>
                            <!-- Column -->
                            <div class="col text-right align-self-center">
                                <div data-label="40%" class="css-bar m-b-0 css-bar-warning css-bar-40">
                                    <i class="mdi mdi-star-circle" style="font-size: 48px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row p-t-10 p-b-10">
                            <!-- Column -->
                            <div class="col p-r-0">
                                <h1 class="font-light">159</h1>
                                <h6 class="text-muted">Invoices</h6></div>
                            <!-- Column -->
                            <div class="col text-right align-self-center">
                                <div data-label="60%" class="css-bar m-b-0 css-bar-info css-bar-60">
                                    <i class="mdi mdi-receipt" style="font-size: 48px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Diseases</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Deshmukh</td>
                                        <td>Prohaska</td>
                                        <td>@Genelia</td>
                                        <td><span class="label label-danger">Fever</span> </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Deshmukh</td>
                                        <td>Gaylord</td>
                                        <td>@Ritesh</td>
                                        <td><span class="label label-info">Cancer</span> </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sanghani</td>
                                        <td>Gusikowski</td>
                                        <td>@Govinda</td>
                                        <td><span class="label label-warning">Lakva</span> </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Roshan</td>
                                        <td>Rogahn</td>
                                        <td>@Hritik</td>
                                        <td><span class="label label-success">Dental</span> </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Joshi</td>
                                        <td>Hickle</td>
                                        <td>@Maruti</td>
                                        <td><span class="label label-info">Cancer</span> </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Nigam</td>
                                        <td>Eichmann</td>
                                        <td>@Sonu</td>
                                        <td><span class="label label-success">Dental</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>March 2019</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 455px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 75px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2019-02-24"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2019-02-25"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2019-02-26"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2019-02-27"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2019-02-28"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-03-01"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-03-02"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2019-02-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2019-02-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2019-02-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2019-02-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2019-02-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-fri fc-past" data-date="2019-03-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-03-02"><span class="fc-day-number">2</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-purple fc-draggable"><div class="fc-content"><span class="fc-time">12:08a</span> <span class="fc-title">your meeting with john</span></div></a></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-warning fc-draggable"><div class="fc-content"><span class="fc-time">3:54a</span> <span class="fc-title">your meeting with john</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 75px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-03-03"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-03-04"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-03-05"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-03-06"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-03-07"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-03-08"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-03-09"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2019-03-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-mon fc-past" data-date="2019-03-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-tue fc-past" data-date="2019-03-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-wed fc-past" data-date="2019-03-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-thu fc-past" data-date="2019-03-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-fri fc-past" data-date="2019-03-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-03-09"><span class="fc-day-number">9</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable"><div class="fc-content"><span class="fc-time">6:21a</span> <span class="fc-title">your meeting with john</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 75px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-03-10"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-03-11"></td><td class="fc-day fc-widget-content fc-tue fc-today fc-state-highlight" data-date="2019-03-12"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-03-13"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-03-14"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-03-15"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-03-16"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2019-03-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-mon fc-past" data-date="2019-03-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-tue fc-today fc-state-highlight" data-date="2019-03-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-03-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-03-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-03-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-03-16"><span class="fc-day-number">16</span></td></tr></thead><tbody><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable"><div class="fc-content"><span class="fc-time">9:11p</span> <span class="fc-title">This is today check date</span></div></a></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-success fc-draggable"><div class="fc-content"><span class="fc-time">9:51p</span> <span class="fc-title">Like it?</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 75px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-03-17"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-03-18"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-03-19"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-03-20"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-03-21"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-03-22"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-03-23"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-03-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-03-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-03-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-03-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-03-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-03-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-03-23"><span class="fc-day-number">23</span></td></tr></thead><tbody><tr><td rowspan="2"></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable"><div class="fc-content"><span class="fc-time">5:58p</span> <span class="fc-title">Released Ample Admin!</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container fc-limited"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable"><div class="fc-content"><span class="fc-time">4:44p</span> <span class="fc-title">This is your birthday</span></div></a></td><td class="fc-more-cell" rowspan="1"><div><a class="fc-more">+2 more</a></div></td><td rowspan="2"></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable"><div class="fc-content"><span class="fc-time">10:18p</span> <span class="fc-title">Hanns birthday</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 75px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-03-24"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-03-25"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-03-26"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-03-27"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-03-28"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-03-29"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-03-30"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-03-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-03-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-03-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-03-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-03-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-03-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-03-30"><span class="fc-day-number">30</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 80px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-03-31"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2019-04-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2019-04-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-04-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-04-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-04-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-04-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-03-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2019-04-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2019-04-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2019-04-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2019-04-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2019-04-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2019-04-06"><span class="fc-day-number">6</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
