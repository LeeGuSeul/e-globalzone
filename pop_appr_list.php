<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/head.php"; ?>
     <!-- // -->
    <div class="popup list">
        <div class="top_tit">
            <div class="left">
                <p class="tit">신청 학생 명단보기</p>
                <p class="txt">7월 13일(월) <span>AM09:00 ~ PM12:00</span></p>
            </div>
            <p class="name">바라트벡 울잔</p>
        </div>

        <div class="student_list">
            <ul>
                <li>
                    <div class="student">
                        <p class="name">이구슬</p>
                        <select name="catgo" class="dropdown">
                            <option value="attendance">승인</option>
                            <option value="absent">미승인</option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="student">
                        <p class="name">이구슬</p>
                        <select name="catgo" class="dropdown">
                            <option value="attendance">승인</option>
                            <option value="absent">미승인</option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="student">
                        <p class="name">이구슬</p>
                        <select name="catgo" class="dropdown">
                            <option value="attendance">승인</option>
                            <option value="absent">미승인</option>
                        </select>
                    </div>
                </li>
            </ul>
        </div>

        <div class="btn_area">
            <div class="bbtn white left">일괄승인</div>
            <div class="right">
                <div class="bbtn mint">저장</div>
                <div class="bbtn darkGray">닫기</div>
            </div>

        </div>
    </div>
    <!-- // -->
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/footer.php"; ?>
