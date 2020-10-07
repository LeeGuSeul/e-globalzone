<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/head.php"; ?>
     <!-- // -->
    <div class="popup depart_regist">
        <p class="tit">계열/학과 관리</p>

        <div class="gray_bg">
            <label for="">학과명 <input type="text" placeholder="학과명 입력" /></label>
            <label for="">줄임말 <input type="text" placeholder="학과명 줄임말 입력" /></label>
        </div>

        <!-- 추가된 리스트 부분(수정, 삭제) -->
        <div class="depart_list_box">
            <div class="scroll_area">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">학과명</th>
                            <th scope="col">줄임말</th>
                            <th scope="col">수정</th>
                            <th scope="col">삭제</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>컴퓨터정보계열</td>
                            <td>컴정</td>
                            <td><div class="btn"><img src="/global/img/depart_modify.gif" alt="수정"></div></td>
                            <td><div class="btn"><img src="/global/img/depart_delete.gif" alt="삭제"></div></td>
                        </tr>
                        <tr>
                            <td>컴퓨터정보계열</td>
                            <td>컴정</td>
                            <td><div class="btn"><img src="/global/img/depart_modify.gif" alt="수정"></div></td>
                            <td><div class="btn"><img src="/global/img/depart_delete.gif" alt="삭제"></div></td>
                        </tr>
                        <tr>
                            <td>컴퓨터정보계열</td>
                            <td>컴정</td>
                            <td><div class="btn"><img src="/global/img/depart_modify.gif" alt="수정"></div></td>
                            <td><div class="btn"><img src="/global/img/depart_delete.gif" alt="삭제"></div></td>
                        </tr>
                        <tr>
                            <td>컴퓨터정보계열</td>
                            <td>컴정</td>
                            <td><div class="btn"><img src="/global/img/depart_modify.gif" alt="수정"></div></td>
                            <td><div class="btn"><img src="/global/img/depart_delete.gif" alt="삭제"></div></td>
                        </tr>
                        <tr>
                            <td>컴퓨터정보계열</td>
                            <td>컴정</td>
                            <td><div class="btn"><img src="/global/img/depart_modify.gif" alt="수정"></div></td>
                            <td><div class="btn"><img src="/global/img/depart_delete.gif" alt="삭제"></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="btn_area">
            <a href="" class="bbtn mint">저장</a>
            <a href="" class="bbtn darkGray">취소</a>
        </div>
    </div>
    <!-- // -->
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/footer.php"; ?>
