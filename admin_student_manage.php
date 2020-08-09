<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/head.php"; ?>
        <!-- 스케줄 및 예약 관리 - 관리자 -->
        <div class="content">
            <div class="sub_title">
                <div class="top_semester">
                    <p class="tit">유학생 관리</p>
                    <select name="catgo" class="dropdown">
                        <option>2020학년도 1학기</option>
                        <option>2020학년도 여름학기</option>
                        <option>2020학년도 2학기</option>
                        <option>2020학년도 겨울학기</option>
                    </select>
                </div>

                <div class="top_search">
                    <select name="catgo" class="dropdown">
                        <option>이름</option>
                        <option>학번</option>
                        <option>연락처</option>
                    </select>
                    <input type="text" />
                    <input type="submit" value="검색" />
                </div>
            </div>
            <!-- // -->
            <div class="wrap">
                <div class="scroll_area">
                    <table class="student_manage_table">
                        <colgroup>
                            <col width="5%" />
                            <col width="7%" span="3" />
                            <col width="7%"/>
                            <col width="13%"/>
                            <col width="7%"/>
                            <col width="7%" span="6"/>
                        </colgroup>
                        <thead>
                            <tr>
                                <th rowspan="2">
                                    <div class="table_check">
                                        <input type="checkbox" id="a1" name="" />
                                        <label for="a1"></label>
                                    </div>
                                </th>
                                <th rowspan="2" class="align">언어 <img src="/global/img/table_align_arrow.gif" alt="언어 기준 정렬" /></th>
                                <th rowspan="2" class="align">국가명 <img src="/global/img/table_align_arrow.gif" alt="국가명 기준 정렬" /></th>
                                <th rowspan="2" class="align">즐겨찾기 <img src="/global/img/table_align_arrow.gif" alt="즐겨찾기 기준 정렬" /></th>
                                <th colspan="3">유학생 정보</th>
                                <th colspan="4">활동시간</th>
                                <th rowspan="2" class="align">예약 미승인<br />횟수<img src="/global/img/table_align_arrow.gif" alt="국가명 기준 정렬" /></th>
                                <th rowspan="2" class="align">결과 지연<br />입력 횟수<img src="/global/img/table_align_arrow.gif" alt="국가명 기준 정렬" /></th>
                            </tr>
                            <tr>
                                <th>학번</th>
                                <th>이름</th>
                                <th rowspan="2" class="align">계열학과<img src="/global/img/table_align_arrow.gif" alt="국가명 기준 정렬" /></th>
                                <th rowspan="2" class="align">합계<img src="/global/img/table_align_arrow.gif" alt="국가명 기준 정렬" /></th>
                                <th rowspan="2" class="align">6월<img src="/global/img/table_align_arrow.gif" alt="국가명 기준 정렬" /></th>
                                <th rowspan="2" class="align">7월<img src="/global/img/table_align_arrow.gif" alt="국가명 기준 정렬" /></th>
                                <th rowspan="2" class="align">8월<img src="/global/img/table_align_arrow.gif" alt="국가명 기준 정렬" /></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="eng">
                                <td>
                                    <div class="table_check">
                                        <input type="checkbox" id="a2" name="" />
                                        <label for="a2"></label>
                                    </div>
                                </td>
                                <td>영어</td>
                                <td>미국</td>
                                <td><div class="favor"><img src="/global/img/favor_on.png" alt="즐겨찾기 on"></div><!-- favor_on.png, favor_off.png --></td> 
                                <td>1901192</td>
                                <td>알무카메토바 아니사</td>
                                <td>건축</td>
                                <td>3시간 30분</td>
                                <td>2시간</td>
                                <td>1시간</td>
                                <td>1시간</td>
                                <td>1회</td>
                                <td>-</td>
                            </tr>
                            <tr class="jp">
                                <td>
                                    <div class="table_check">
                                        <input type="checkbox" id="a3" name="" />
                                        <label for="a3"></label>
                                    </div>
                                </td>
                                <td>영어</td>
                                <td>미국</td>
                                <td><div class="favor"><img src="/global/img/favor_off.png" alt="즐겨찾기 off"></div>
                                <td>1901192</td>
                                <td>알무카메토바 아니사</td>
                                <td>건축</td>
                                <td>3시간 30분</td>
                                <td>2시간</td>
                                <td>1시간</td>
                                <td>1시간</td>
                                <td>1회</td>
                                <td>-</td>
                            </tr>
                            <tr class="ch">
                                <td>
                                    <div class="table_check">
                                        <input type="checkbox" id="row_check" name="" />
                                        <label for="row_check"></label>
                                    </div>
                                </td>
                                <td>영어</td>
                                <td>미국</td>
                                <td><div class="favor"><img src="/global/img/favor_off.png" alt="즐겨찾기 off"></div>
                                <td>1901192</td>
                                <td>알무카메토바 아니사</td>
                                <td>건축</td>
                                <td>3시간 30분</td>
                                <td>2시간</td>
                                <td>1시간</td>
                                <td>1시간</td>
                                <td>1회</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table_btn">
                    <a href="#">연락처 정보</a>
                    <a href="#">등록</a>
                    <a href="#">CSV 다운</a>
                </div>
            </div>
        </div>
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/footer.php"; ?>