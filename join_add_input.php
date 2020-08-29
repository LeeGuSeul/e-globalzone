<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/menu.php"; ?>
    <div class="content">
        <div class="join_add_wrap">
            <div class="sub_title">
                <p class="tit">회원정보 추가입력</p>
            </div>
            <div class="input_area">
                <div class="box">
                    <label for="">학번</label>
                    <input type="text" placeholder="학번 입력" />
                </div>
                <div class="box">
                    <label for="">계열학과</label>
                    <select name="catgo" class="dropdown">
                        <option value="">컴퓨터 정보계열</option>
                    </select>
                </div>
                <div class="box">
                    <label for="">이름</label>
                    <input type="text" placeholder="이름 입력" />
                </div>
                <div class="box">
                    <label for="">휴대전화</label>
                    <input type="text" placeholder="휴대전화 입력" />
                </div>
                <div class="box">
                    <label for="">이메일</label>
                    <input type="text" value="rntmf1247@gmail.net" readonly />
                </div>

                <button>입력 완료</button>
            </div>

        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/copy.php"; ?>