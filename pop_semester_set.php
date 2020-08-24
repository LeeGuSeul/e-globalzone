<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/head.php"; ?>
    <div class="popup semester">
        <p class="tit">학기 기간 설정</p>
        <div class="top_select">
            <select name="catgo1" class="dropdown">
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
            </select>
            <span>학년도</span>
            <select name="catgo1" class="dropdown">
                <option>1</option>
                <option>여름</option>
                <option>2</option>
                <option>겨울</option>
            </select>
            <span>학기</span>
        </div>
        <!-- -->
        <div class="date_select">
            <div class="start_date">
                <p class="tit">학기 시작일</p>
                <div class="date">2020-07-13</div>
            </div>
            <span>-</span>
            <div class="start_date">
                <p class="tit">학기 종료 일</p>
                <div class="date">2020-08-24</div>
            </div>
        </div>
        <!-- -->
        <div class="search_box">
            <input type="text" />
            <button>검색</button>
        </div>
        <!-- -->
        <div class="scroll_area mt20">
            <table class="pop_table">
                <colgroup>
                    <col width="5%" span="3" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">순번</th>
                        <th scope="col">언어</th>
                        <th scope="col">국가</th>
                        <th scope="col">학번</th>
                        <th scope="col">이름</th>
                        <th scope="col">계열학과</th>
                        <th scope="col">연락처</th>
                        <th scope="col">이메일</th>
                        <th scope="col">ZoomID</th>
                        <th scope="col">ZoomPW</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="table_check">
                                <input type="checkbox" id="a0" name="" />
                                <label for="a0"></label>
                            </div>
                        </td>
                        <td>영어</td>
                        <td>미국</td>
                        <td>1901192</td>
                        <td>바라트벡 울잔</td>
                        <td>컴정</td>
                        <td>010-0000-0000</td>
                        <td>zxc1234@naver.com</td>
                        <td>211 233 1564</td>
                        <td>7589</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table_check">
                                <input type="checkbox" id="a1" name="" />
                                <label for="a1"></label>
                            </div>
                        </td>
                        <td>영어</td>
                        <td>미국</td>
                        <td>1901192</td>
                        <td>바라트벡 울잔</td>
                        <td>컴정</td>
                        <td>010-0000-0000</td>
                        <td>zxc1234@naver.com</td>
                        <td>211 233 1564</td>
                        <td>7589</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table_check">
                                <input type="checkbox" id="a2" name="" />
                                <label for="a2"></label>
                            </div>
                        </td>
                        <td>영어</td>
                        <td>미국</td>
                        <td>1901192</td>
                        <td>바라트벡 울잔</td>
                        <td>컴정</td>
                        <td>010-0000-0000</td>
                        <td>zxc1234@naver.com</td>
                        <td>211 233 1564</td>
                        <td>7589</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table_check">
                                <input type="checkbox" id="a3" name="" />
                                <label for="a3"></label>
                            </div>
                        </td>
                        <td>영어</td>
                        <td>미국</td>
                        <td>1901192</td>
                        <td>바라트벡 울잔</td>
                        <td>컴정</td>
                        <td>010-0000-0000</td>
                        <td>zxc1234@naver.com</td>
                        <td>211 233 1564</td>
                        <td>7589</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table_check">
                                <input type="checkbox" id="a4" name="" />
                                <label for="a4"></label>
                            </div>
                        </td>
                        <td>영어</td>
                        <td>미국</td>
                        <td>1901192</td>
                        <td>바라트벡 울잔</td>
                        <td>컴정</td>
                        <td>010-0000-0000</td>
                        <td>zxc1234@naver.com</td>
                        <td>211 233 1564</td>
                        <td>7589</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table_check">
                                <input type="checkbox" id="a5" name="" />
                                <label for="a5"></label>
                            </div>
                        </td>
                        <td>영어</td>
                        <td>미국</td>
                        <td>1901192</td>
                        <td>바라트벡 울잔</td>
                        <td>컴정</td>
                        <td>010-0000-0000</td>
                        <td>zxc1234@naver.com</td>
                        <td>211 233 1564</td>
                        <td>7589</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="btn_area right">
            <div class="bbtn darkGray">저장</div>
        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/footer.php"; ?>