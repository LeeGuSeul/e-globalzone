<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/head.php"; ?>
     <!-- // -->
    <div class="popup not_attend">
        <div class="left_wrap">
            <p class="tit">출석결과 미승인</p>
            <table class="pop_table3">
                <colgroup>
                    <col width="12%" span="2"/>
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="table_check">
                                <input type="checkbox" id="a0" name="" />
                                <label for="a0"></label>
                            </div>
                        </th>
                        <th scope="col">순번</th>
                        <th scope="col">일시</th>
                        <th scope="col">유학생 이름</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="table_check">
                                <input type="checkbox" id="a1" name="" />
                                <label for="a1"></label>
                            </div>
                        </td>
                        <td>1</td>
                        <td>2020-07-13 13:00~13:40</td>
                        <td>바라트벡 울잔</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table_check">
                                <input type="checkbox" id="a2" name="" />
                                <label for="a2"></label>
                            </div>
                        </td>
                        <td>2</td>
                        <td>2020-07-13 13:00~13:40</td>
                        <td>바라트벡 울잔</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table_check">
                                <input type="checkbox" id="a3" name="" />
                                <label for="a3"></label>
                            </div>
                        </td>
                        <td>3</td>
                        <td>2020-07-13 13:00~13:40</td>
                        <td>바라트벡 울잔</td>
                    </tr>
                </tbody>
            </table>
            <div class="btn_area right">
                <a href="" class="bbtn mint">일괄승인</a>
            </div>
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

            <div class="img_upload">
                <div>사진 1</div>
                <div>사진 2</div>
            </div>

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
