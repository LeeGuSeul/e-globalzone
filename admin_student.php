<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/menu.php"; ?>
        <!-- 한국인 학생 관리- 관리자 -->
        <div class="content">
            <div class="sub_title">
                <div class="top_semester">
                    <p class="tit">한국인 학생 관리</p>
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
                        <thead>
                            <tr>
                                <th scope="col" class="bg align">계열학과 <img src="/global/img/table_align_arrow.gif" alt="언어 기준 정렬" /></th>
                                <th scope="col" class="bg">학번</th>
                                <th scope="col" class="bg">이름</th>
                                <th scope="col" class="bg align">이용제한 <img src="/global/img/table_align_arrow.gif" alt="언어 기준 정렬" /></th>
                                <th scope="col" class="bg">연락처</th>
                                <th scope="col" class="bg">G Suite 계정</th>
                                <th scope="col" class="bg align">활동 횟수 <img src="/global/img/table_align_arrow.gif" alt="언어 기준 정렬" /></th>
                                <th scope="col" class="bg align">미참석 횟수 <img src="/global/img/table_align_arrow.gif" alt="언어 기준 정렬" /></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>컴정</td>
                                <td>1901192</td>
                                <td>이일영</td>
                                <td><div class="restriction"><img src="/global/img/restriction_off.png" alt="이용제한 해제" /></div></td>
                                <td>010-0000-0000</td>
                                <td>zxc1234@g.yju.ac.kr</td>
                                <td>1회</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>컴정</td>
                                <td>1901192</td>
                                <td>이일영</td>
                                <td><div class="restriction"><img src="/global/img/restriction_off.png" alt="이용제한 해제" /></div></td>
                                <td>010-0000-0000</td>
                                <td>zxc1234@g.yju.ac.kr</td>
                                <td>1회</td>
                                <td>-</td>
                            </tr>
                            <tr class="restriction_on">
                                <td>컴정</td>
                                <td>1901192</td>
                                <td>이일영</td>
                                <td><div class="restriction"><img src="/global/img/restriction_on.png" alt="이용제한 진행중" /></div></td>
                                <td>010-0000-0000</td>
                                <td>zxc1234@g.yju.ac.kr</td>
                                <td>1회</td>
                                <td>-</td>
                            </tr>
                            <tr class="restriction_on">
                                <td>컴정</td>
                                <td>1901192</td>
                                <td>이일영</td>
                                <td><div class="restriction"><img src="/global/img/restriction_on.png" alt="이용제한 진행중" /></div></td>
                                <td>010-0000-0000</td>
                                <td>zxc1234@g.yju.ac.kr</td>
                                <td>1회</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>컴정</td>
                                <td>1901192</td>
                                <td>이일영</td>
                                <td><div class="restriction"><img src="/global/img/restriction_off.png" alt="이용제한 해제" /></div></td>
                                <td>010-0000-0000</td>
                                <td>zxc1234@g.yju.ac.kr</td>
                                <td>1회</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table_btn">
                    <a href="#">신청 승인</a>
                    <a href="#">CSV 다운</a>
                </div>
            </div>
        </div>
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/copy.php"; ?>