<?php include $_SERVER['DOCUMENT_ROOT']."/global/mobile/file/head.php"; ?>
	
		<div class="wrap">
			<ul class="tab no3">
				<li><a href="student_reservation.php" class="on">예약 조회</a></li>
				<li><a href="student_schedule.php">스케줄 조회</a></li>
				<li><a href="student_result.php">결과 관리</a></li>
			</ul>
			<!-- // -->
			<div class="calandar"><a href="/global/mobile/student_apply.php"><img src="/global/mobile/img/calendar_ex.png" alt="캘린더 예시" /></a></div>
			<!-- // -->
			<div class="reservation_boxs">
				<div class="box puple">
					<ul>
						<li>[영어] 쉬라이 알리오트시나</li>
						<li class="eng">AM 09:00 ~ PM 01:00 </li>
					</ul>
					<span>출석인증 완료</span>
				</div>
				<div class="box puple">
					<ul>
						<li>[영어] 쉬라이 알리오트시나</li>
						<li class="eng">AM 09:00 ~ PM 01:00 </li>
					</ul>
					<span>출석인증 대기</span>
				</div>
				<div class="box blue">
					<ul>
						<li>[영어] 쉬라이 알리오트시나</li>
						<li class="eng">AM 09:00 ~ PM 01:00 </li> 
					</ul>
					<a href="#"><img src="/global/mobile/img/cancel_btn.png" alt="삭제 버튼" /></a>
					<span>예약 대기</span>
				</div>
				<div class="box pink">
					<ul>
						<li>[영어] 쉬라이 알리오트시나</li>
						<li class="eng">AM 09:00 ~ PM 01:00 </li>
					</ul>
					<a href="#"><img src="/global/mobile/img/cancel_btn.png" alt="삭제 버튼" /></a>
					<span>예약 완료</span>
				</div>
				<div class="box pink">
					<ul>
						<li>[영어] 쉬라이 알리오트시나</li>
						<li class="eng">AM 09:00 ~ PM 01:00 </li>
					</ul>
					<a href="#"><img src="/global/mobile/img/cancel_btn.png" alt="삭제 버튼" /></a>
					<span>미참석</span>
				</div>
			</div>
		</div>


<?php include $_SERVER['DOCUMENT_ROOT']."/global/mobile/file/footer.php"; ?>