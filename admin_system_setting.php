<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/menu.php"; ?>
    <div class="content">
        <div class="sub_title">
            <p class="tit">시스템 환경설정</p>
        </div>

        <div class="set_wrap">
            <div class="setting">
                <div class="set_box">
                    <p class="tit ico01">예약관리 설정</p>
                    <div class="input">
                        <div class="select_tit">한국인 학생 <span class="bold">하루 예약</span></div>
                        <div class="select_input">
                            <select name="catgo1" class="dropdown">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <span>번</span>
                        </div>
                    </div>
                    <!-- -->
                    <div class="input">
                        <div class="select_tit">한 타임 <span class="bold">최대 예약</span></div>
                        <div class="select_input">
                            <select name="catgo1" class="dropdown">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <span>번</span>
                        </div>
                    </div>
                    <!-- -->
                    <div class="input">
                        <div class="select_tit line2">예약 <span class="bold">승인 및 취소</span>는 <span class="ex">현재 기준 08.20 00:00까지 완료</span></div>
                        <div class="select_input">
                            <select name="catgo1" class="dropdown">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <span>일 전까지</span>
                        </div>
                    </div>
                    <!-- -->
                    <div class="input">
                        <div class="select_tit line2">예약 <span class="bold">신청 가능</span>한 기준일<span class="ex">현재 기준 08.19 00:00부터 가능</span></div>
                        <div class="select_input">
                            <select name="catgo1" class="dropdown">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <span>일 전까지</span>
                        </div>
                    </div>
                </div>

                <!-- -->

                <div class="sch_box">
                    <p class="tit ico02">스케줄관리 설정</p>
                    <p class="info">스케줄 한 타임의 기준시간은<br /><span>40분</span>으로 자동계산됩니다.</p>
                    <div class="input_area">
                        <!-- -->
                        <div class="input">
                            <div class="select_tit"><span class="bold">미팅 시간</span></div>
                            <div class="select_input">
                                <input type="text">
                                <span>분</span>
                            </div>
                        </div>
                        <!-- -->
                        <div class="input">
                            <div class="select_tit"><span class="bold">쉬는 시간</span></div>
                            <div class="select_input">
                                <select name="catgo1" class="dropdown">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <span>분</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- -->

            <div class="regulation">
                <p class="tit ico03">규정관리</p>
                <!-- -->
                <div class="input">
                    <div class="select_tit"><span class="bold">노쇼 최대</span></div>
                    <div class="select_input">
                        <select name="catgo1" class="dropdown">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        <span>까지</span>
                    </div>
                </div>
                <!-- -->
                <div class="input">
                    <div class="select_tit"><span class="bold">패널티 부여</span></div>
                    <div class="select_input">
                        <select name="catgo1" class="dropdown">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        <span>번 부터</span>
                    </div>
                </div>
                <!-- -->
                <div class="input">
                    <div class="select_tit"><span class="bold">패널티 기간</span></div>
                    <div class="select_input">
                        <select name="catgo1" class="dropdown">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        <span>일 동안</span>
                    </div>
                </div>
                <!-- -->
                <div class="setting_ex">
                    <p>[설정 예시]</p>
                    <span>3회</span> 부터 패널티가 부여되며, <span>3회</span> 이상 노쇼를 할 경우 <span>3일간</span> 이용이 제한됩니다. (해당 학기 동안만 유효)
                </div>
                
                <!-- -->

                <div class="input">
                    <div class="select_tit"><span class="bold">유학생 결과입력</span></div>
                    <div class="select_input">
                        <select name="catgo1" class="dropdown">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        <span>일 이내</span>
                    </div>
                </div>

                <!-- -->

                <div class="btn_area right">
                    <div class="bbtn darkGray">학기 기간 설정</div>
                    <div class="bbtn darkGray">학기 기간 조회</div>
                </div>
            </div>

        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/copy.php"; ?>