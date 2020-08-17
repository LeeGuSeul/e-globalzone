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

        <!-- -->

        <ul class="img_file">
            <li>
                <p class="file_no">파일 첨부 1</p>
                <p class="file_name">0713_zoom_승인 이미지 파일_1.jpg</p>
                <div class="del"><img src="/global/img/img_list_del.gif" alt="첨부 이미지 파일 삭제" /></div>
            </li>
            <li>
                <p class="file_no">파일 첨부 2</p>
                <p class="file_name">0713_zoom_승인 이미지 파일_2.jpg</p>
                <div class="del"><img src="/global/img/img_list_del.gif" alt="첨부 이미지 파일 삭제" /></div>
            </li>
        </ul>

        <p class="attend_rate">출석율 : <span>60%</span></p>

        <div class="btn_area right">
            <div class="bbtn gray">사진 업로드</div>
            <div class="bbtn mint">저장</div>
            <div class="bbtn darkGray">닫기</div>
        </div>
    </div>
    <!-- // -->
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/footer.php"; ?>
