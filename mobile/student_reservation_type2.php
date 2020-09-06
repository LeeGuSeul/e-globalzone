<?php include $_SERVER['DOCUMENT_ROOT']."/global/mobile/file/head.php"; ?>
    <div class="mtab">
        <ul class="no3">
            <li><a href="student_reservation_type2.php" class="on">예약 조회</a></li>
            <li><a href="student_schedule.php">스케줄 조회</a></li>
            <li><a href="student_result.php">결과 관리</a></li>
        </ul>
    </div>

        <div class="wrap bg">
            <div class="reserv_status">
                <p class="tit">실시간 예약 현황</p>
                <ul>
                    <li class="yellow"><span>3</span>예약 대기</li>
                    <li><span>7</span>예약 완료</li>
                    <li><span>4</span>결과 대기</li>
                </ul>
            </div>
            <!-- -->
            <div class="reserv_list">
                <p class="tit">예약 관리</p>
                <!-- id 중복 안되게 주의 -->
                <ui class="mainMenu">
                    <li class="item status01" id="wait_reservation">
                        <a href="#wait_reservation" class="btn"><span>예약 대기</span></a>
                        <div class="subMenu">
                            <div>
                                <p class="left">[영어]T구글구글리<span>12:30:00 ~ 12:50:00</span></p>
                                <p class="right">예약대기</p>
                            </div>
                            <div>
                                <p class="left">[영어]T구글구글리<span>12:30:00 ~ 12:50:00</span></p>
                                <p class="right">예약대기</p>
                            </div>
                        </div>
                    </li>
                    <li class="item status02" id="reservation_complete">
                        <a href="#reservation_complete" class="btn"><span>예약 완료</span></a>
                        <div class="subMenu">
                            <div>
                                <p class="left">[영어]T구글구글리<span>12:30:00 ~ 12:50:00</span></p>
                                <p class="right zoom_info">접속정보</p>
                            </div>
                            <div>
                                <p class="left">[영어]T구글구글리<span>12:30:00 ~ 12:50:00</span></p>
                                <p class="right zoom_info">접속정보</p>
                            </div>
                        </div>
                    </li>
                    <li class="item status03" id="progress_complete">
                        <a href="#progress_complete" class="btn"><span>결과 대기</span></a>
                        <div class="subMenu">
                            <div>
                                <p class="left">[영어]T구글구글리<span>12:30:00 ~ 12:50:00</span></p>
                                <p class="right">예약대기</p>
                            </div>
                            <div>
                                <p class="left">[영어]T구글구글리<span>12:30:00 ~ 12:50:00</span></p>
                                <p class="right">예약대기</p>
                            </div>
                        </div>
                    </li>
                </ui>
            </div>
        </div>
<?php include $_SERVER['DOCUMENT_ROOT']."/global/mobile/file/footer.php"; ?>