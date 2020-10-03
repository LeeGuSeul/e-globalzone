<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/head.php"; ?>
    <div class="popup board">
        <p class="tit mb20">글쓰기</p>
        <div class="board_form_row">
            <p>제목</p>
            <input type="text" placeholder="제목을 입력해주세요." />
        </div>
        <div class="board_form_row">
            <p>내용</p>
            <textarea name="" id="" placeholder="제목을 입력해주세요."></textarea>
        </div>
        <div class="board_file_row">
            <div class="tit">첨부파일</div>
            <div class="file_area">
                <div class="filebox">
                    <label for="ex_file">사진 업로드</label>
                    <input type="file" id="ex_file" />
                </div>
                <ul>
                    <li><span>1.png</span> <div class="del_btn"><img src="/global/img/file_del_btn.gif" alt="파일 삭제"></div></li>
                    <li><span>1.png</span> <div class="del_btn"><img src="/global/img/file_del_btn.gif" alt="파일 삭제"></div></li>
                    <li><span>1.png</span> <div class="del_btn"><img src="/global/img/file_del_btn.gif" alt="파일 삭제"></div></li>
                    <li><span>1.png</span> <div class="del_btn"><img src="/global/img/file_del_btn.gif" alt="파일 삭제"></div></li>
                    <li><span>1.png</span> <div class="del_btn"><img src="/global/img/file_del_btn.gif" alt="파일 삭제"></div></li>
                </ul>
            </div>
        </div>

        <div class="btn_area">
            <div class="darkGray">글 저장</div>
        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']."/global/file/footer.php"; ?>