<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/head.php"; ?>
     <!-- // -->
    <div class="popup enrol">
        <div class="top">
            <div class="left">
                <p class="tit">신청 학생 명단보기</p>
                <p class="txt">7월 13일(월) <span>AM09:00 ~ PM12:00</span></p>
            </div>
            <p class="name">바라트벡 울잔</p>
        </div>

        <div class="area">
            <ul>
                <li>
                    <div class="student">
                        <div class="del_btn"><img src="/global/img/enrol_del_btn.gif" alt="신청 학생 삭제"></div>
                        <p class="name">이구슬</p>
                        <select name="catgo" class="dropdown">
                            <option value="approval">승인</option>
                            <option value="non_approval">미승인</option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="student">
                        <div class="del_btn"><img src="/global/img/enrol_del_btn.gif" alt="신청 학생 삭제"></div>
                        <p class="name">이구슬</p>
                        <select name="catgo" class="dropdown">
                            <option value="approval">승인</option>
                            <option value="non_approval">미승인</option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="student">
                        <div class="del_btn"><img src="/global/img/enrol_del_btn.gif" alt="신청 학생 삭제"></div>
                        <p class="name">이구슬</p>
                        <select name="catgo" class="dropdown">
                            <option value="approval">승인</option>
                            <option value="non_approval">미승인</option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="add_student">학생 추가 <img src="/global/img/add_student_ico.gif" alt="학생 추가 아이콘" /></div>
                </li>
            </ul>
        </div>

        <script src = "/global/js/easydropdown.js"></script>
        <script>
            easydropdown.all();
        </script>

        <div class="btn_area right">
            <a href="" class="bbtn white left">일괄승인</a>
            <a href="" class="bbtn mint">저장</a>
            <a href="" class="bbtn">닫기</a>
        </div>
    </div>
    <!-- // -->
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/footer.php"; ?>
