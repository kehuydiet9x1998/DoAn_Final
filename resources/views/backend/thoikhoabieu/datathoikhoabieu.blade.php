@extends('backend.layout.index')
@section('content')

<div class="page-header card">
  <div class="row align-items-end">
    <div class="col-lg-8">
      <div class="page-header-title">
        <i class="feather icon-calendar bg-c-blue"></i>
        <div class="d-inline">
          <h5>Full Calendar</h5>
          <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="page-header-breadcrumb">
        <ul class=" breadcrumb breadcrumb-title">
          <li class="breadcrumb-item">
            <a href="index.html"><i class="feather icon-home"></i></a>
          </li>
          <li class="breadcrumb-item"><a href="#!">Event Calendar</a>
          </li>
          <li class="breadcrumb-item"><a href="#!">Full Calendar</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="pcoded-inner-content full-calender">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="card">
          <div class="card-header">
            <h5>Full Calendar</h5>
          </div>
          <div class="card-block">
            <div class="row">
              <div class="col-xl-2 col-md-12">
                <div id="external-events">
                  <h6 class="m-b-30 m-t-20">Events</h6>
                  <div class="fc-event ui-draggable ui-draggable-handle">My Event 1</div>
                  <div class="fc-event ui-draggable ui-draggable-handle">My Event 2</div>
                  <div class="fc-event ui-draggable ui-draggable-handle">My Event 3</div>
                  <div class="fc-event ui-draggable ui-draggable-handle">My Event 4</div>
                  <div class="fc-event ui-draggable ui-draggable-handle">My Event 5</div>
                  <div class="checkbox-fade fade-in-primary m-t-10">
                    <label>
                      <input type="checkbox" value="">
                      <span class="cr">
                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                      </span>
                      <span>Remove After Drop</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-xl-10 col-md-12">
                <div id="calendar" class="fc fc-unthemed fc-ltr">
                  <div class="fc-toolbar fc-header-toolbar">
                    <div class="fc-left">
                      <div class="fc-button-group"><button type="button"
                          class="fc-prev-button fc-button fc-state-default fc-corner-left"><span
                            class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button"
                          class="fc-next-button fc-button fc-state-default fc-corner-right"><span
                            class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button"
                        class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right">today</button>
                    </div>
                    <div class="fc-right">
                      <div class="fc-button-group"><button type="button"
                          class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button
                          type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button
                          type="button" class="fc-agendaDay-button fc-button fc-state-default">day</button><button
                          type="button"
                          class="fc-listMonth-button fc-button fc-state-default fc-corner-right">list</button></div>
                    </div>
                    <div class="fc-center">
                      <h2>September 2018</h2>
                    </div>
                    <div class="fc-clear"></div>
                  </div>
                  <div class="fc-view-container" style="">
                    <div class="fc-view fc-month-view fc-basic-view" style="">
                      <table>
                        <thead class="fc-head">
                          <tr>
                            <td class="fc-head-container fc-widget-header">
                              <div class="fc-row fc-widget-header">
                                <table>
                                  <thead>
                                    <tr>
                                      <th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
                                      <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
                                      <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
                                      <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
                                      <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
                                      <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
                                      <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </thead>
                        <tbody class="fc-body">
                          <tr>
                            <td class="fc-widget-content">
                              <div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 479px;">
                                <div class="fc-day-grid fc-unselectable">
                                  <div class="fc-row fc-week fc-widget-content" style="height: 79px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past"
                                              data-date="2018-08-26"></td>
                                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past"
                                              data-date="2018-08-27"></td>
                                            <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past"
                                              data-date="2018-08-28"></td>
                                            <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past"
                                              data-date="2018-08-29"></td>
                                            <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past"
                                              data-date="2018-08-30"></td>
                                            <td class="fc-day fc-widget-content fc-fri fc-other-month fc-past"
                                              data-date="2018-08-31"></td>
                                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-09-01">
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2018-08-26">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-08-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a>
                                            </td>
                                            <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2018-08-27">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-08-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a>
                                            </td>
                                            <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2018-08-28">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-08-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a>
                                            </td>
                                            <td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2018-08-29">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-08-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a>
                                            </td>
                                            <td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2018-08-30">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-08-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a>
                                            </td>
                                            <td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2018-08-31">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-08-31&quot;,&quot;type&quot;:&quot;day&quot;}">31</a>
                                            </td>
                                            <td class="fc-day-top fc-sat fc-past" data-date="2018-09-01"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a>
                                            </td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                            <td colspan="6"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td colspan="6"></td>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="fc-row fc-week fc-widget-content" style="height: 79px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-09-02">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-09-03">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-09-04">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-09-05">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-09-06">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-09-07">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-09-08">
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-top fc-sun fc-past" data-date="2018-09-02"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a>
                                            </td>
                                            <td class="fc-day-top fc-mon fc-past" data-date="2018-09-03"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a>
                                            </td>
                                            <td class="fc-day-top fc-tue fc-past" data-date="2018-09-04"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a>
                                            </td>
                                            <td class="fc-day-top fc-wed fc-past" data-date="2018-09-05"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a>
                                            </td>
                                            <td class="fc-day-top fc-thu fc-past" data-date="2018-09-06"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a>
                                            </td>
                                            <td class="fc-day-top fc-fri fc-past" data-date="2018-09-07"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a>
                                            </td>
                                            <td class="fc-day-top fc-sat fc-past" data-date="2018-09-08"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a>
                                            </td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td></td>
                                            <td class="fc-event-container"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                style="background-color:#ff5252;border-color:#ff5252;color:#fff">
                                                <div class="fc-content"><span class="fc-time">1p</span> <span
                                                    class="fc-title">Business Lunch</span></div>
                                              </a></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                            <td colspan="6"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td colspan="6"></td>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td colspan="4"></td>
                                            <td class="fc-bgevent" style="background-color:#ab7967" colspan="2"></td>
                                            <td colspan="1"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="fc-row fc-week fc-widget-content" style="height: 79px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-09-09">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-09-10">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-09-11">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-09-12">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-09-13">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-09-14">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-09-15">
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-top fc-sun fc-past" data-date="2018-09-09"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a>
                                            </td>
                                            <td class="fc-day-top fc-mon fc-past" data-date="2018-09-10"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-10&quot;,&quot;type&quot;:&quot;day&quot;}">10</a>
                                            </td>
                                            <td class="fc-day-top fc-tue fc-past" data-date="2018-09-11"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-11&quot;,&quot;type&quot;:&quot;day&quot;}">11</a>
                                            </td>
                                            <td class="fc-day-top fc-wed fc-past" data-date="2018-09-12"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-12&quot;,&quot;type&quot;:&quot;day&quot;}">12</a>
                                            </td>
                                            <td class="fc-day-top fc-thu fc-past" data-date="2018-09-13"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-13&quot;,&quot;type&quot;:&quot;day&quot;}">13</a>
                                            </td>
                                            <td class="fc-day-top fc-fri fc-past" data-date="2018-09-14"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-14&quot;,&quot;type&quot;:&quot;day&quot;}">14</a>
                                            </td>
                                            <td class="fc-day-top fc-sat fc-past" data-date="2018-09-15"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-15&quot;,&quot;type&quot;:&quot;day&quot;}">15</a>
                                            </td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="fc-event-container"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                style="background-color:#448aff;border-color:#448aff;color:#fff">
                                                <div class="fc-content"><span class="fc-time">11a</span> <span
                                                    class="fc-title">Meeting</span></div>
                                              </a></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                            <td colspan="6"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td colspan="6"></td>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="fc-row fc-week fc-widget-content" style="height: 79px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-09-16">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-09-17">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-09-18">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-09-19">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-09-20">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-09-21">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-09-22">
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-top fc-sun fc-past" data-date="2018-09-16"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-16&quot;,&quot;type&quot;:&quot;day&quot;}">16</a>
                                            </td>
                                            <td class="fc-day-top fc-mon fc-past" data-date="2018-09-17"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-17&quot;,&quot;type&quot;:&quot;day&quot;}">17</a>
                                            </td>
                                            <td class="fc-day-top fc-tue fc-past" data-date="2018-09-18"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-18&quot;,&quot;type&quot;:&quot;day&quot;}">18</a>
                                            </td>
                                            <td class="fc-day-top fc-wed fc-past" data-date="2018-09-19"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-19&quot;,&quot;type&quot;:&quot;day&quot;}">19</a>
                                            </td>
                                            <td class="fc-day-top fc-thu fc-past" data-date="2018-09-20"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-20&quot;,&quot;type&quot;:&quot;day&quot;}">20</a>
                                            </td>
                                            <td class="fc-day-top fc-fri fc-past" data-date="2018-09-21"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-21&quot;,&quot;type&quot;:&quot;day&quot;}">21</a>
                                            </td>
                                            <td class="fc-day-top fc-sat fc-past" data-date="2018-09-22"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-22&quot;,&quot;type&quot;:&quot;day&quot;}">22</a>
                                            </td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="fc-event-container" colspan="2"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"
                                                style="background-color:#9ccc65;border-color:#9ccc65;color:#fff">
                                                <div class="fc-content"> <span class="fc-title">Conference</span></div>
                                                <div class="fc-resizer fc-end-resizer"></div>
                                              </a></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                            <td colspan="6"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td colspan="6"></td>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="fc-row fc-week fc-widget-content" style="height: 79px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-09-23">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-09-24">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-09-25">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-09-26">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-09-27">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-09-28">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-09-29">
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-top fc-sun fc-past" data-date="2018-09-23"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-23&quot;,&quot;type&quot;:&quot;day&quot;}">23</a>
                                            </td>
                                            <td class="fc-day-top fc-mon fc-past" data-date="2018-09-24"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-24&quot;,&quot;type&quot;:&quot;day&quot;}">24</a>
                                            </td>
                                            <td class="fc-day-top fc-tue fc-past" data-date="2018-09-25"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-25&quot;,&quot;type&quot;:&quot;day&quot;}">25</a>
                                            </td>
                                            <td class="fc-day-top fc-wed fc-past" data-date="2018-09-26"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a>
                                            </td>
                                            <td class="fc-day-top fc-thu fc-past" data-date="2018-09-27"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a>
                                            </td>
                                            <td class="fc-day-top fc-fri fc-past" data-date="2018-09-28"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a>
                                            </td>
                                            <td class="fc-day-top fc-sat fc-past" data-date="2018-09-29"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a>
                                            </td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="fc-event-container"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                style="background-color:#FFB64D;border-color:#FFB64D;color:#fff">
                                                <div class="fc-content"><span class="fc-time">8p</span> <span
                                                    class="fc-title">Party</span></div>
                                              </a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                            <td colspan="6"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td colspan="6"></td>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td colspan="1"></td>
                                            <td class="fc-bgevent" style="background-color:#FFB64D" colspan="4"></td>
                                            <td colspan="2"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="fc-row fc-week fc-widget-content" style="height: 84px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-09-30">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past"
                                              data-date="2018-10-01"></td>
                                            <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past"
                                              data-date="2018-10-02"></td>
                                            <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past"
                                              data-date="2018-10-03"></td>
                                            <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past"
                                              data-date="2018-10-04"></td>
                                            <td class="fc-day fc-widget-content fc-fri fc-other-month fc-past"
                                              data-date="2018-10-05"></td>
                                            <td class="fc-day fc-widget-content fc-sat fc-other-month fc-past"
                                              data-date="2018-10-06"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-top fc-sun fc-past" data-date="2018-09-30"><a
                                                class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-09-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a>
                                            </td>
                                            <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2018-10-01">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-10-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a>
                                            </td>
                                            <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2018-10-02">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-10-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a>
                                            </td>
                                            <td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2018-10-03">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-10-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a>
                                            </td>
                                            <td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2018-10-04">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-10-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a>
                                            </td>
                                            <td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2018-10-05">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-10-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a>
                                            </td>
                                            <td class="fc-day-top fc-sat fc-other-month fc-past" data-date="2018-10-06">
                                              <a class="fc-day-number"
                                                data-goto="{&quot;date&quot;:&quot;2018-10-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a>
                                            </td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                            <td colspan="6"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bgevent-skeleton">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td colspan="6"></td>
                                            <td class="fc-nonbusiness fc-bgevent" colspan="1"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
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
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
