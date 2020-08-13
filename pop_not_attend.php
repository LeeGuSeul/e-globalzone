<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/head.php"; ?>
     <!-- // -->
    <div class="popup not_attend">
        <div class="left_wrap">
            <p class="tit">출석결과 미입력</p>
            <table class="pop_table3">
                <colgroup>
                    <col width="15%" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">순번</th>
                        <th scope="col">일시</th>
                        <th scope="col">유학생 이름</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2020-07-13 13:00~13:40</td>
                        <td>바라트벡 울잔</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2020-07-13 13:00~13:40</td>
                        <td>바라트벡 울잔</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2020-07-13 13:00~13:40</td>
                        <td>바라트벡 울잔</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="right_wrap">
            <p class="tit">학생 목록</p>
            <!-- -->
            <div class="student_list">
                <ul>
                    <li>
                        <div class="student">
                            <p class="name">이구슬</p>
                            <select name="catgo" class="dropdown">
                                <option value="attendance">출석</option>
                                <option value="absent">결석</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="student">
                            <p class="name">이구슬</p>
                            <select name="catgo" class="dropdown">
                                <option value="attendance">출석</option>
                                <option value="absent">결석</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="student">
                            <p class="name">이구슬</p>
                            <select name="catgo" class="dropdown">
                                <option value="attendance">출석</option>
                                <option value="absent">결석</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- -->

            <ul class="img_file">
                <li>
                    <p class="file_no">파일 첨부 1</p>
                    <p class="file_name">0713_zoom_출석 이미지 파일_1.jpg</p>
                    <div class="del"><img src="/global/img/img_list_del.gif" alt="첨부 이미지 파일 삭제" /></div>
                </li>
                <li>
                    <p class="file_no">파일 첨부 2</p>
                    <p class="file_name">0713_zoom_출석 이미지 파일_2.jpg</p>
                    <div class="del"><img src="/global/img/img_list_del.gif" alt="첨부 이미지 파일 삭제" /></div>
                </li>
            </ul>

            <p class="attend_rate">출석율 : <span>60%</span></p>

            <div class="btn_area right">
                <a href="" class="bbtn gray">사진업로드</a>
                <a href="" class="bbtn mint">저장</a>
                <a href="" class="bbtn">닫기</a>
            </div>

            <script src = "/global/js/easydropdown.js"></script>
            <script>
                easydropdown.all();
            </script>
            
        </div>

    </div>
    <!-- // -->
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/footer.php"; ?>
