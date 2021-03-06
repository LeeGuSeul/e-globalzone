<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/menu.php"; ?>
        <!-- 스케줄 및 예약 관리 - 관리자 -->
        <div class="content">
            <div class="sub_title">
                <p class="tit">2020년 7월 15일</p>
                <div class="select_date"><img src="/global/img/select_date_ico.gif" alt="날짜 선택"></div>
                <div class="check_box_area">
                    <div class="check_box">
                        <div class="check_box_input all">
                            <input type="checkbox" id="allCheck" name="" />
                            <label for="allCheck"><!-- 전체 체크 --></label>
                        </div>
                    </div>
                    <!-- // -->
                    <div class="check_box">
                        <div class="check_box_input">
                            <input type="checkbox" id="no_app_reservation" name="" />
                            <label for="no_app_reservation"><span>예약 미승인 <span class="blue">10</span>건</span></label>
                        </div>
                    </div>
                    <!-- // -->
                    <div class="check_box">
                        <div class="check_box_input">
                            <input type="checkbox" id="not_result" name="" />
                            <label for="not_result"><span>결과 미입력 <span class="mint">2</span>건</span></label>
                        </div>
                    </div>
                    <!-- // -->
                    <div class="check_box">
                        <div class="check_box_input">
                            <input type="checkbox" id="no_app_result" name="" />
                            <label for="no_app_result"><span>결과 미승인 <span class="yellow">3</span>건</span></label>
                        </div>
                    </div>
                    <!-- // -->
                    <div class="check_box">
                        <div class="check_box_input">
                            <input type="checkbox" id="ok_result" name="" />
                            <label for="ok_result"><span>결과 입력완료 <span class="puple">2</span>건</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // -->
            <div class="wrap">
                <ul class="sch_time">
                    <li>9AM</li>
                    <li>10AM</li>
                    <li>11AM</li>
                    <li>12PM</li>
                    <li>1PM</li>
                    <li>2PM</li>
                    <li>3PM</li>
                    <li>4PM</li>
                    <li>5PM</li>
                    <li>6PM</li>
                </ul>
                <div class="scroll_area">
                    <table class="sch_table">
                        <colgroup>
                            <col width="5%"/>
                            <col width="14%"/>
                            <col width="9%" span="9"/>
                        </colgroup>
                        <tbody>
                            <tr>
                                <th scope="row" rowspan="5">영어</th>
                                <td>쉬라이 알리오트 시나</td>
                                <td>
                                    <div class="status">
                                        <p class="blue">신청한 학생 : 8명<br />
                                        예약 미승인 : 6명</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status">
                                        <p class="blue">신청한 학생 : 8명<br />
                                        예약 미승인 : 6명</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status">
                                        <p class="blue">신청한 학생 : 8명<br />
                                        예약 미승인 : 6명</p>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <!-- // -->
                            <tr>
                                <td>드로즈드 캣시아 리나</td>
                                <td></td>
                                <td>
                                    <div class="status">
                                        <p class="mint oneline">8명 예약완료</p>
                                    </div>
                                </td>
                                <td>
                                <div class="status">
                                    <p class="mint oneline">3명 예약완료</p>
                                </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <!-- // -->
                            <tr>
                                <td>마르친</td>
                                <td></td>
                                <td>
                                    <div class="status ">
                                        <p class="gray oneline">예약 없음</p>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="status ">
                                        <p class="blue oneline">예약 미승인 :  10명</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status ">
                                        <p class="mint oneline">10명 예약 완료</p>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <!-- // -->
                            <tr>
                                <td>케루젤 타티아나</td>
                                <td></td>
                                <td>
                                    <div class="status ">
                                        <p class="gray oneline">예약 없음</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status ">
                                        <p class="gray oneline">예약 없음</p>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="status ">
                                        <p class="mint oneline">10명 예약 완료</p>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <!-- // -->
                            <tr>
                                <td>볼디레바 엘레나</td>
                                <td>
                                    <div class="status">
                                        <p class="blue">신청한 학생 : 8명<br />
                                        예약 미승인 : 6명</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status">
                                        <p class="blue">신청한 학생 : 8명<br />
                                        예약 미승인 : 6명</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status ">
                                        <p class="gray oneline">예약 없음</p>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="status ">
                                        <p class="gray oneline">예약 없음</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status ">
                                        <p class="gray oneline">예약 없음</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status ">
                                        <p class="gray oneline">예약 없음</p>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <!-- // -->
                            <tr>
                                <th scope="row" rowspan="4">일본어</th>
                                <td>오카 우라라</td>
                                <td>
                                    <div class="status">
                                        <p class="blue">신청한 학생 : 8명<br />
                                        예약 미승인 : 6명</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status">
                                        <p class="blue">신청한 학생 : 8명<br />
                                        예약 미승인 : 6명</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status">
                                        <p class="yellow">참가 학생 : 5명<br />
                                        [결과 미승인]</p>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <!-- // -->
                            <tr>
                                <td>미즈시마 나나미</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="status">
                                        <p class="puple oneline">결과 입력완료</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status">
                                        <p class="puple oneline">결과 입력완료</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status">
                                        <p class="gray oneline">예약 없음</p>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <!-- // -->
                            <tr>
                                <td>카와이 하나코</td>
                                <td></td>
                                <td>
                                    <div class="status">
                                        <p class="yellow">참가 학생 : 5명<br />
                                        [결과 미승인]</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status">
                                        <p class="yellow">참가 학생 : 10명<br />
                                        [결과 미승인]</p>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <!-- // -->
                            <tr>
                                <td>카와이 하나코</td>
                                <td></td>
                                <td>
                                    <div class="status">
                                        <p class="yellow">참가 학생 : 5명<br />
                                        [결과 미승인]</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status">
                                        <p class="yellow">참가 학생 : 10명<br />
                                        [결과 미승인]</p>
                                    </div>
                                </td>
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

                <div class="table_btn">
                    <div>개별 입력</div>
                    <div>CSV 입력</div>
                </div>
            </div>
        </div>
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/copy.php"; ?>