<?php 
	include 'gpa_function.php';
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$classs = $_POST['class'];
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$admin_id = $ses['id'];
		$department = "General";
		$student_id = $_POST['student_id'];
		$semester_id = $_POST['semester_id'];
		//Quran Mazid 
		$quran_mcq = $_POST['quran_mcq'];
		$quran_wr = $_POST['quran_wr'];
		$quran_incourse = $_POST['quran_incourse'];
		//Hadith Sharif
		$hadith = $_POST['hadith'];
		$hadith_incourse = $_POST['hadith_incourse'];
		//Arabic 1st paper
		$arabic1st = $_POST['arabic1st'];
		$arabic1st_incourse = $_POST['arabic1st_incourse'];
		//Arabic 2nd
		$arabic2nd = $_POST['arabic2nd'];
		$arabic2nd_incourse = $_POST['arabic2nd_incourse'];
		//Fiqh & U.Fiqh 
		$fiqh = $_POST['fiqh'];
		$fiqh_incourse = $_POST['fiqh_incourse'];
		//Bangla 1st Paper
		$bangla1_mcq = $_POST['bangla1_mcq'];
		$bangla1_wr = $_POST['bangla1_wr'];
		$bangla1_incourse = $_POST['bangla1_incourse'];
		//Bangla 2nd Paper
		$bangla2_mcq = $_POST['bangla2_mcq'];
		$bangla2_wr = $_POST['bangla2_wr'];
		$bangla2_incourse = $_POST['bangla2_incourse'];
		//English 1st
		$english1st = $_POST['english1st'];
		$english1st_incourse = $_POST['english1st_incourse'];
		// English 2nd
		$english2nd = $_POST['english2nd'];
		$english2nd_incourse = $_POST['english2nd_incourse'];
		//General MathMatic 
		$math_mcq = $_POST['math_mcq'];
		$math_wr = $_POST['math_wr'];
		$math_incourse = $_POST['math_incourse'];
		//Islamic History
		$ih_mcq = $_POST['ih_mcq'];
		$ih_wr = $_POST['ih_wr'];
		$ih_incourse = $_POST['ih_incourse'];
		//Information Technology 
		$ict_mcq = $_POST['ict_mcq'];
		$ict_pt = $_POST['ict_pt'];
		$ict_incourse = $_POST['ict_incourse'];
		//Agricultural Studies (Optional) 
		$agri_mcq = $_POST['agri_mcq'];
		$agri_wr = $_POST['agri_wr'];
		$agri_pt = $_POST['agri_pt'];
		$agri_incourse = $_POST['agri_incourse'];
		//Carrer Education 
		$carrer_mcq = $_POST['carrer_mcq'];
		$carrer_pt = $_POST['carrer_pt'];
		$carrer_incourse = $_POST['carrer_incourse'];
		// Physical Education
		$physical = $_POST['physical'];
		$physical_incourse = $_POST['physical_incourse'];
		//$bgs_wr = $_POST['bgs_wr'];
		// Last UPDATE
		date_default_timezone_set("Asia/Dhaka");
		$last_update = date("d-m-y h:i:s A");
		//End Asssign
	
		if(!empty($name)&& !empty($roll)){
			if($quran_mcq <= 30 && $quran_wr <= 70 && $quran_incourse <= 20){
				if($hadith <= 100 && $hadith_incourse <= 20){
					if($arabic1st <= 100 && $arabic1st_incourse <= 20 && $arabic2nd <= 100 && $arabic2nd_incourse <= 20){
						if($fiqh <= 100 && $fiqh_incourse <= 20){
							if($bangla1_mcq <= 30 && $bangla1_wr <= 70 && $bangla1_incourse <= 20){
								if($bangla2_mcq <= 30 && $bangla2_wr <= 70 && $bangla2_incourse <= 20){
									if($english1st <= 100 && $english1st_incourse <= 20 && $english2nd <= 100 && $english2nd_incourse <= 20){
										if($math_mcq <= 30 && $math_wr <= 70 && $math_incourse <= 20){
											if($ih_mcq <= 30 && $ih_wr <= 70 && $math_incourse <= 20){
												if($physical <= 100 && $physical_incourse <= 20){
													if($ict_mcq <= 25 && $ict_pt <= 25 && $ict_incourse <= 10){
														if($carrer_mcq <= 25 && $carrer_pt <= 25 && $carrer_incourse <= 10){
															if($agri_mcq <= 25 && $agri_wr <= 50 && $agri_pt <= 25 && $agri_incourse <= 20){
																//Quran Mazi processing
																$quran_mcq_wr = ($quran_mcq + $quran_wr);
																$quran_total_t = check2($quran_mcq, $quran_wr);//form use
																$quran_parcent = $quran_mcq_wr * 0.8;
																$quran_parcent_t = $quran_total_t * 0.8;//form use
																$quran_total =  $quran_parcent + $quran_incourse;
																$quran_total_tt = $quran_parcent_t + $quran_incourse;
																$quran_gpa = gpacal($quran_total_tt);
																$quran_gread = greadcal($quran_total_tt);
																$quran_status = status($quran_gpa);
																
																//Hadith Sharif
																$hadith_check = Check1($hadith);//just use form 
																$hadith_parcent = $hadith * 0.8;
																$hadith_parcent_t = $hadith_check * 0.8;//form use 
																$hadith_total = $hadith_parcent + $hadith_incourse;
																$hadith_total_t = $hadith_parcent_t + $hadith_incourse; //form use 
																$hadith_gpa = gpacal($hadith_total);
																$hadith_gread  = greadcal($hadith_total);
																$hadith_status = status($hadith_gpa);
																	
																//Quran + Hadith 
																$quran_hadith = $quran_total + $hadith_total;
																if($quran_total_tt >= 33 && $hadith_total_t >= 33){	
																	$quran_hadith_total = ($quran_total + $hadith_total) / 2;
																}else{
																	$quran_hadith_total = 0;
																}
																$quran_hadith_gpa = gpacal($quran_hadith_total);
																$quran_hadith_gread = greadcal($quran_hadith_total);
																$quran_hadith_status = status($quran_hadith_gpa);
																
																//Arabic 1st Paper
																$arabic1st_check = Check1($arabic1st);//use form
																$arabic1st_parcent = $arabic1st * 0.8;
																$arabic1st_parcent_t = $arabic1st_check * 0.8;//use form
																$arabic1st_total = $arabic1st_parcent + $arabic1st_incourse;
																$arabic1st_total_t = $arabic1st_parcent_t + $arabic1st_incourse;//use form
																$arabic1st_gpa = gpacal($arabic1st_total_t);
																$arabic1st_gread = greadcal($arabic1st_total_t);
																$arabic1st_status = status($arabic1st_gpa);
																
																//Arabic 2nd Paper
																$arabic2nd_check = Check1($arabic2nd);//use form
																$arabic2nd_parcent = $arabic2nd * 0.8;
																$arabic2nd_parcent_t = $arabic2nd_check * 0.8;//use form
																$arabic2nd_total = $arabic2nd_parcent + $arabic2nd_incourse;
																$arabic2nd_total_t = $arabic2nd_parcent_t + $arabic2nd_incourse;//use form
																$arabic2nd_gpa = gpacal($arabic2nd_total_t);
																$arabic2nd_gread = greadcal($arabic2nd_total_t);
																$arabic2nd_status = status($arabic2nd_gpa);
																
																//Arabic 1st + 2nd
																$arabic = $arabic1st_total + $arabic2nd_total;
																if($arabic1st_total_t >= 33 && $arabic2nd_total_t >= 33){
																	$arabic_total = ($arabic1st_total_t + $arabic2nd_total_t) / 2;
																}else{
																	$arabic_total = 0;
																}
																$arabic_gpa = gpacal($arabic_total);
																$arabic_gread = greadcal($arabic_total);
																$arabic_status = status($arabic_gpa);
																
																
																$fiqh_check = Check1($fiqh);//use form
																$fiqh_parcent = $fiqh * 0.8;
																$fiqh_parcent_t = $fiqh_check * 0.8; //use form
																$fiqh_total = $fiqh_parcent + $fiqh_incourse;
																$fiqh_total_t = $fiqh_parcent_t + $fiqh_incourse;//use form
																$fiqh_gpa = gpacal($fiqh_total_t);
																$fiqh_gread = greadcal($fiqh_total_t);
																$fiqh_status = status($fiqh_gpa);
																
																//Bangla 1st Paper
																$bangla1_mcq_wr = ($bangla1_mcq + $bangla1_wr);
																$bangla1_total_t = check2($bangla1_mcq, $bangla1_wr);//form use
																$bangla1_parcent = $bangla1_mcq_wr * 0.8;
																$bangla1_parcent_t = $bangla1_total_t * 0.8;//form use
																$bangla1_total =  $bangla1_parcent + $bangla1_incourse;
																$bangla1_total_tt = $bangla1_parcent_t + $bangla1_incourse;
																$bangla1_gpa = gpacal($bangla1_total_tt);
																$bangla1_gread = greadcal($bangla1_total_tt);
																$bangla1_status = status($bangla1_gpa);
																
																// Bangla 2nd Paper
																$bangla2_mcq_wr = ($bangla2_mcq + $bangla2_wr);
																$bangla2_total_t = check2($bangla2_mcq, $bangla2_wr);//form use
																$bangla2_parcent = $bangla2_mcq_wr * 0.8;
																$bangla2_parcent_t = $bangla2_total_t * 0.8;//form use
																$bangla2_total =  $bangla2_parcent + $bangla2_incourse;
																$bangla2_total_tt = $bangla2_parcent_t + $bangla2_incourse;
																$bangla2_gpa = gpacal($bangla2_total_tt);
																$bangla2_gread = greadcal($bangla2_total_tt);
																$bangla2_status = status($bangla2_gpa);
																
																// Bangla 1st + 2nd
																$bangla_total = $bangla1_total  + $bangla2_total;
																if($bangla1_total_tt >= 33 && $bangla2_total_tt >= 33){
																	$bangla_total_t = ($bangla1_total  + $bangla2_total) / 2;
																}else{
																	$bangla_total_t = 0;
																}
																$bangla_gpa = gpacal($bangla_total_t);
																$bangla_gread = greadcal($bangla_total_t);
																$bangla_status = status($bangla_gpa);
																
																$english1st_check = Check1($english1st);// use form
																$english1st_parcent = $english1st * 0.8;
																$english1st_parcent_t = $english1st_check * 0.8;//use form
																$english1st_total = $english1st_parcent + $english1st_incourse;
																$english1st_total_t = $english1st_parcent_t + $english1st_incourse;//use form
																$english1st_gpa =  gpacal($english1st_total_t);
																$english1st_gread = greadcal($english1st_total_t);
																$english1st_status = status($english1st_gpa);
																
																// English 2nd Paper
																$english2nd_check = Check1($english2nd);// use form
																$english2nd_parcent = $english2nd * 0.8;
																$english2nd_parcent_t = $english2nd_check * 0.8;//use form
																$english2nd_total = $english2nd_parcent + $english2nd_incourse;
																$english2nd_total_t = $english2nd_parcent_t + $english2nd_incourse;//use form
																$english2nd_gpa =  gpacal($english2nd_total_t);
																$english2nd_gread = greadcal($english2nd_total_t);
																$english2nd_status = status($english2nd_gpa);
																
																//English 1st + 2nd
																$english_total = $english1st_total + $english2nd_total;
																if($english1st_total_t >= 33 && $english2nd_total_t >= 33){
																	$english_total_t = ($english1st_total + $english2nd_total) / 2;
																}else{
																	$english_total_t = 0;
																}
																$english_gpa = gpacal($english_total_t);
																$english_gread = greadcal($english_total_t);
																$english_status = status($english_gpa);
																
																//General Mathmatic
																$math_mcq_wr = $math_mcq + $math_wr;
																$math_total_t = check2($math_mcq, $math_wr);
																$math_parcent = $math_mcq_wr * 0.8;
																$math_parcent_t = $math_total_t * 0.8;//use form
																$math_total = $math_parcent + $math_incourse;
																$math_total_tt = $math_parcent_t + $math_incourse;//use form
																$math_gpa = gpacal($math_total_tt);
																$math_gread = greadcal($math_total_tt);
																$math_status = status($math_gpa);
																
																// Islamic History
																$ih_mcq_wr = $ih_mcq + $ih_wr;
																$ih_total_t = check2($ih_mcq, $ih_wr);
																$ih_parcent = $ih_mcq_wr * 0.8;
																$ih_parcent_t = $ih_total_t * 0.8;//use form
																$ih_total = $ih_parcent + $ih_incourse;
																$ih_total_tt = $ih_parcent_t + $ih_incourse;//use form
																$ih_gpa = gpacal($ih_total_tt);
																$ih_gread = greadcal($ih_total_tt);
																$ih_status = status($ih_gpa);
																
																//Information and Communication Technology
																$ict_mcq_pt = $ict_mcq + $ict_pt;
																$ict_parcent = $ict_mcq_pt * 0.8;
																$ict_total = $ict_parcent + $ict_incourse;
																
																if($ict_mcq >= 9 && $ict_pt >= 9){
																
																	$ict_total_t = $ict_mcq + $ict_pt;
																	$ict_parcent_t = $ict_total_t * 0.8;
																	$ict_total_tt = ($ict_parcent_t + $ict_incourse) * 2;
																	//$ict_total_tt = $ict_parcent_t + $ict_incourse;
																}else{
																	$ict_total_tt = 0;
																}
																$ict_gpa = gpacal($ict_total_tt);
																$ict_gread = greadcal($ict_total_tt);
																$ict_status = status($ict_gpa);
																
																//Agricultural Studies
																$agri_mcq_wr_pt = $agri_mcq + $agri_wr + $agri_pt;
																$agri_total_t = check3($agri_mcq, $agri_wr, $agri_pt);
																$agri_parcent = $agri_mcq_wr_pt * 0.8;
																$agri_parcent_t = $agri_total_t * 0.8;//use form 
																$agri_total = $agri_parcent + $agri_incourse;
																$agri_total_tt = $agri_parcent_t + $agri_incourse;//use form 
																$agri_gpa = gpacal($agri_total_tt);
																$agri_gread = greadcal($agri_total_tt);
																$agri_status = status($agri_gpa);
																if($agri_gpa >= 2){
																	$agri_gpa_t = $agri_gpa - 2;
																}else{
																	$agri_gpa_t = 0;
																}
																
																$carrer_mcq_pt = $carrer_mcq + $carrer_pt;
																$carrer_parcent = $carrer_mcq_pt * 0.8;
																$carrer_total = $carrer_parcent + $carrer_incourse;
																
																if($carrer_mcq >= 9 && $carrer_pt >= 9){
																
																	$carrer_total_t = $carrer_mcq + $carrer_pt;
																	$carrer_parcent_t = $carrer_total_t * 0.8;
																	$carrer_total_tt = ($carrer_parcent_t + $carrer_incourse) * 2;
																	//$carrer_total_tt = $carrer_parcent_t + $carrer_incourse;
																}else{
																	$carrer_total_tt = 0;
																}
																$carrer_gpa = gpacal($carrer_total_tt);
																$carrer_gread = greadcal($carrer_total_tt);
																$carrer_status = status($carrer_gpa);
																
																// Physical Education
																$physical_parcent = $physical * 0.8;
																$physical_total = $physical_parcent + $physical_incourse;
																$physical_gpa = gpacal($physical_total);
																$physical_gread = greadcal($physical_total);
																$physical_status = status($physical_gpa);
																
																include 'failcount.php';
																
																$total_mark = $quran_hadith + $arabic + $fiqh_total + $bangla_total + $english_total + $math_total + $ih_total + $ict_total + $agri_total;
																
																//GPA Calculation 
																$humanity_out_opt = 0;
																if($quran_hadith_gpa > 0 && $arabic_gpa > 0 && $fiqh_gpa > 0 && $bangla_gpa > 0 && $english_gpa > 0 && $math_gpa > 0 && $ih_gpa > 0 && $ict_gpa > 0 && $agri_gpa_t >= 0){	
																$humanity = ($quran_hadith_gpa + $arabic_gpa + $fiqh_gpa + $bangla_gpa + $english_gpa + $math_gpa + $ih_gpa + $ict_gpa + $agri_gpa_t) / 8;
																$humanity_out_opt = ($quran_hadith_gpa + $arabic_gpa + $fiqh_gpa + $bangla_gpa + $english_gpa + $math_gpa + $ih_gpa + $ict_gpa) / 8;
																}else{
																	$humanity = 0.00;
																}
																//echo var_dump(round($humanity,2));
																$gpa_without_opt = round($humanity_out_opt,2);
																$hum = round($humanity,2);
																$gpa = gpa_total($hum);
																// Gread Calculation
																$gread = total_gread($gpa);
																$status = status($gpa);
																// Sql code
																//$sql = "INSERT INTO $table(admin_id, name, roll, classs, semester, year, department, quran_mcq, quran_wr, quran_mcq_wr, quran_parcent, quran_incourse, quran_total, quran_gpa, quran_gread, quran_status, hadith, hadith_parcent, hadith_incourse, hadith_total, hadith_gpa, hadith_gread, hadith_status, quran_hadith, quran_hadith_gpa, quran_hadith_gread, quran_hadith_status, arabic1st, arabic1st_parcent, arabic1st_incourse, arabic1st_total, arabic1st_gpa, arabic1st_gread, arabic1st_status, arabic2nd, arabic2nd_parcent, arabic2nd_incourse, arabic2nd_total, arabic2nd_gpa, arabic2nd_gread, arabic2nd_status, arabic, arabic_gpa, arabic_gread, arabic_status, fiqh, fiqh_parcent, fiqh_incourse, fiqh_total, fiqh_gpa, fiqh_gread, fiqh_status, bangla1_mcq, bangla1_wr, bangla1_mcq_wr, bangla1_parcent, bangla1_incourse, bangla1_total, bangla1_gpa, bangla1_gread, bangla1_status, bangla2_mcq, bangla2_wr, bangla2_mcq_wr, bangla2_parcent, bangla2_incourse, bangla2_total, bangla2_gpa, bangla2_gread, bangla2_status, bangla_total, bangla_gpa, bangla_gread, bangla_status, english1st, english1st_parcent, english1st_incourse, english1st_total, english1st_gpa, english1st_gread, english1st_status, english2nd, english2nd_parcent, english2nd_incourse, english2nd_total, english2nd_gpa, english2nd_gread, english2nd_status, english_total, english_gpa, english_gread, english_status, math_mcq, math_wr, math_mcq_wr, math_parcent, math_incourse, math_total, math_gpa, math_gread, math_status, ih_mcq, ih_wr, ih_mcq_wr, ih_parcent, ih_incourse, ih_total, ih_gpa, ih_gread, ih_status, ict_mcq, ict_pt, ict_mcq_pt, ict_parcent, ict_incourse, ict_total, ict_gpa, ict_gread, ict_status, carrer_mcq, carrer_pt, carrer_mcq_pt, carrer_parcent, carrer_incourse, carrer_total, carrer_gpa, carrer_gread, carrer_status, physical, physical_parcent, physical_incourse, physical_total, physical_gpa, physical_gread, physical_status, agri_mcq, agri_wr, agri_pt, agri_mcq_wr_pt, agri_parcent, agri_incourse, agri_total, agri_gpa, agri_gpa_t, agri_gread, agri_status, gpa_without_opt, gpa, gread, status) VALUES('$admin_id', '$name', '$roll', '$classs', '$semester', '$year', '$department', '$quran_mcq', '$quran_wr', '$quran_mcq_wr', '$quran_parcent', '$quran_incourse', '$quran_total', '$quran_gpa', '$quran_gread', '$quran_status', '$hadith', '$hadith_parcent', '$hadith_incourse', '$hadith_total', '$hadith_gpa', '$hadith_gread', '$hadith_status', '$quran_hadith', '$quran_hadith_gpa', '$quran_hadith_gread', '$quran_hadith_status', '$arabic1st', '$arabic1st_parcent', '$arabic1st_incourse', '$arabic1st_total', '$arabic1st_gpa', '$arabic1st_gread', '$arabic1st_status', '$arabic2nd', '$arabic2nd_parcent', '$arabic2nd_incourse', '$arabic2nd_total', '$arabic2nd_gpa', '$arabic2nd_gread', '$arabic2nd_status', '$arabic', '$arabic_gpa', '$arabic_gread', '$arabic_status', '$fiqh', '$fiqh_parcent', '$fiqh_incourse', '$fiqh_total', '$fiqh_gpa', '$fiqh_gread', '$fiqh_status', '$bangla1_mcq', '$bangla1_wr', '$bangla1_mcq_wr', '$bangla1_parcent', '$bangla1_incourse', '$bangla1_total', '$bangla1_gpa', '$bangla1_gread', '$bangla1_status', '$bangla2_mcq', '$bangla2_wr', '$bangla2_mcq_wr', '$bangla2_parcent', '$bangla2_incourse', '$bangla2_total', '$bangla2_gpa', '$bangla2_gread', '$bangla2_status', '$bangla_total', '$bangla_gpa', '$bangla_gread', '$bangla_status', '$english1st', '$english1st_parcent', '$english1st_incourse', '$english1st_total', '$english1st_gpa', '$english1st_gread', '$english1st_status', '$english2nd', '$english2nd_parcent', '$english2nd_incourse', '$english2nd_total', '$english2nd_gpa', '$english2nd_gread', '$english2nd_status', '$english_total', '$english_gpa', '$english_gread', '$english_status', '$math_mcq', '$math_wr', '$math_mcq_wr', '$math_parcent', '$math_incourse', '$math_total', '$math_gpa', '$math_gread', '$math_status', '$ih_mcq', '$ih_wr', '$ih_mcq_wr', '$ih_parcent', '$ih_incourse', '$ih_total', '$ih_gpa', '$ih_gread', '$ih_status', '$ict_mcq', '$ict_pt', '$ict_mcq_pt', '$ict_parcent', '$ict_incourse', '$ict_total', '$ict_gpa', '$ict_gread', '$ict_status', '$carrer_mcq', '$carrer_pt', '$carrer_mcq_pt', '$carrer_parcent', '$carrer_incourse', '$carrer_total', '$carrer_gpa', '$carrer_gread', '$carrer_status', '$physical', '$physical_parcent', '$physical_incourse', '$physical_total', '$physical_gpa', '$physical_gread', '$physical_status', '$agri_mcq', '$agri_wr', '$agri_pt', '$agri_mcq_wr_pt', '$agri_parcent', '$agri_incourse', '$agri_total', '$agri_gpa', '$agri_gpa_t', '$agri_gread', '$agri_status', '$gpa_without_opt', '$gpa', '$gread', '$status')";
																$sql = "UPDATE $table SET name = '$name', roll = '$roll', student_id = '$student_id', classs = '$classs', semester = '$semester', year = '$year', quran_mcq = '$quran_mcq', quran_wr = '$quran_wr', quran_mcq_wr = '$quran_mcq_wr', quran_parcent = '$quran_parcent', quran_incourse = '$quran_incourse', quran_total = '$quran_total', quran_gpa = '$quran_gpa', quran_gread = '$quran_gread', quran_status = '$quran_status', hadith = '$hadith', hadith_parcent = '$hadith_parcent', hadith_incourse = '$hadith_incourse', hadith_total = '$hadith_total', hadith_gpa = '$hadith_gpa', hadith_gread = '$hadith_gread', hadith_status = '$hadith_status', quran_hadith = '$quran_hadith', quran_hadith_gpa = '$quran_hadith_gpa', quran_hadith_gread = '$quran_hadith_gread', quran_hadith_status = '$quran_hadith_status', arabic1st = '$arabic1st', arabic1st_parcent = '$arabic1st_parcent', arabic1st_incourse = '$arabic1st_incourse', arabic1st_total = '$arabic1st_total', arabic1st_gpa = '$arabic1st_gpa', arabic1st_gread = '$arabic1st_gread', arabic1st_status = '$arabic1st_status', arabic2nd = '$arabic2nd', arabic2nd_parcent = '$arabic2nd_parcent', arabic2nd_incourse = '$arabic2nd_incourse', arabic2nd_total = '$arabic2nd_total', arabic2nd_gpa = '$arabic2nd_gpa', arabic2nd_gread = '$arabic2nd_gread', arabic2nd_status = '$arabic2nd_status', arabic = '$arabic', arabic_gpa = '$arabic_gpa', arabic_gread = '$arabic_gread', arabic_status = '$arabic_status', fiqh = '$fiqh', fiqh_parcent = '$fiqh_parcent', fiqh_incourse = '$fiqh_incourse', fiqh_total = '$fiqh_total', fiqh_gpa = '$fiqh_gpa', fiqh_gread = '$fiqh_gread', fiqh_status = '$fiqh_status', bangla1_mcq = '$bangla1_mcq', bangla1_wr = '$bangla1_wr', bangla1_mcq_wr = '$bangla1_mcq_wr', bangla1_parcent = '$bangla1_parcent', bangla1_incourse = '$bangla1_incourse', bangla1_total = '$bangla1_total', bangla1_gpa = '$bangla1_gpa', bangla1_gread = '$bangla1_gread', bangla1_status = '$bangla1_status', bangla2_mcq = '$bangla2_mcq', bangla2_wr = '$bangla2_wr', bangla2_mcq_wr = '$bangla2_mcq_wr', bangla2_parcent = '$bangla2_parcent', bangla2_incourse = '$bangla2_incourse', bangla2_total = '$bangla2_total', bangla2_gpa = '$bangla2_gpa', bangla2_gread = '$bangla2_gread', bangla2_status = '$bangla2_status', bangla_total = '$bangla_total', bangla_gpa = '$bangla_gpa', bangla_gread = '$bangla_gread', bangla_status = '$bangla_status', english1st = '$english1st', english1st_parcent = '$english1st_parcent', english1st_incourse = '$english1st_incourse', english1st_total = '$english1st_total', english1st_gpa = '$english1st_gpa', english1st_gread = '$english1st_gread', english1st_status = '$english1st_status', english2nd = '$english2nd', english2nd_parcent = '$english2nd_parcent', english2nd_incourse = '$english2nd_incourse', english2nd_total = '$english2nd_total', english2nd_gpa = '$english2nd_gpa', english2nd_gread = '$english2nd_gread', english2nd_status = '$english2nd_status', english_total = '$english_total', english_gpa = '$english_gpa', english_gread = '$english_gread', english_status =  '$english_status', math_mcq = '$math_mcq', math_wr = '$math_wr', math_mcq_wr = '$math_mcq_wr', math_parcent = '$math_parcent', math_incourse = '$math_incourse', math_total = '$math_total', math_gpa = '$math_gpa', math_gread = '$math_gread', math_status = '$math_status', ih_mcq = '$ih_mcq', ih_wr = '$ih_wr', ih_mcq_wr = '$ih_mcq_wr', ih_parcent = '$ih_parcent', ih_incourse = '$ih_incourse', ih_total = '$ih_total', ih_gpa = '$ih_gpa', ih_gread = '$ih_gread', ih_status = '$ih_status', ict_mcq = '$ict_mcq', ict_pt = '$ict_pt', ict_mcq_pt = '$ict_mcq_pt', ict_parcent = '$ict_parcent', ict_incourse = '$ict_incourse', ict_total = '$ict_total', ict_gpa = '$ict_gpa', ict_gread = '$ict_gread', ict_status = '$ict_status', carrer_mcq = '$carrer_mcq', carrer_pt = '$carrer_pt', carrer_mcq_pt = '$carrer_mcq_pt', carrer_parcent = '$carrer_parcent', carrer_incourse = '$carrer_incourse', carrer_total = '$carrer_total', carrer_gpa = '$carrer_gpa', carrer_gread = '$carrer_gread', carrer_status = '$carrer_status', physical = '$physical', physical_parcent = '$physical_parcent', physical_incourse = '$physical_incourse', physical_total = '$physical_total', physical_gpa = '$physical_gpa', physical_gread = '$physical_gread', physical_status = '$physical_status', agri_mcq = '$agri_mcq', agri_wr = '$agri_wr', agri_pt = '$agri_pt', agri_mcq_wr_pt = '$agri_mcq_wr_pt', agri_parcent = '$agri_parcent', agri_incourse = '$agri_incourse', agri_total = '$agri_total', agri_gpa = '$agri_gpa', agri_gpa_t = '$agri_gpa_t', agri_gread = '$agri_gread', agri_status = '$agri_status', total_mark = '$total_mark', gpa_without_opt = '$gpa_without_opt', gpa = '$gpa', gread = '$gread', status = '$status', total_fail = '$total_fail', last_update = '$last_update' WHERE id = '$semester_id'";
																$result = mysqli_query($con, $sql);
																//echo var_dump($result);
																if($result){
																	$msg['success'] = "UPDATE Successfully GPA = <b>".$gpa."</b> Grade Point = <b>" .$gread."</b> Status = <b>".$status."</b> <a class='btn btn-success' href='../nine-ten-madrasah/search_update.php'>Next</a> ";
																}else{
																	$msg['error'] = "Database or Something Problem";
																}
															}else{
																$msg['error'] = "(Agricultural Studies) Your Current Input MCQ = (".$agri_mcq."), CQ = (".$agri_wr.")"." PT = (".$agri_pt.") Incourse = (".$agri_incourse.") You Must Entered  MCQ <= 25 AND CQ <= 50 AND PT <= 25 and Incourse <= 20";
															}
														}else{
															$msg['error'] = "(carrer Studies) Your Current Input MCQ = (".$carrer_mcq."), CQ = (".$carrer_pt.") and Incourse = (".$carrer_incourse.") You Must Entered  MCQ <= 25, PT <= 25 and Incourse <= 10";
														}
													}else{
														$msg['error'] = "(Information and Communication Technology) Your Current Input MCQ = (".$ict_mcq."), PT = (".$ict_pt.") and Incourse = (".$ict_incourse.") You Must Entered  MCQ <= 25, PT <= 25 and Incourse <= 10";
													}
												}else{
													$msg['error'] = "(Physical Education) Your Current Input Physical = (".$physical.") and Incourse = (".$physical_incourse.") You Must Entered Physical <= 100 and Incourse <= 20 ";
												}
											}else{
												$msg['error'] = "(Islamic History) Your Current Input MCQ = (".$ih_mcq."), CQ = (".$ih_wr.") and Incourse = (".$ih_incourse.") You Must Entered Math MCQ <= 30, CQ <= 70 and Incourse <= 20";
											}
										}else{
											$msg['error'] = "(Mathmatic) Your Current Input MCQ = (".$math_mcq."), CQ = (".$math_wr.") and Incourse = (".$math_incourse.") You Must Entered Math MCQ <= 30, CQ <= 70 and Incourse <= 20";
										}
									}
									else{
										$msg['error'] = "(English) Your Current Input English1st = (".$english1st."), Eng1. Incourse = (".$english1st_incourse.") and English2nd = (".$english2nd."), Eng2. Incourse = (".$english2nd_incourse.") You Must Entered English1st <= 100, Incourse <= 20 AND English2nd <= 100, Incourse <= 20";
									}
								}else{
									$msg['error'] = "(Bangla 2nd) Your Current Input MCQ = (".$bangla2_mcq."), CQ = (".$bangla2_wr.") and Incourse = (".$bangla2_incourse.") You Must Entered MCQ <= 30, CQ <= 70 and Incourse <= 20";
								}
							}else{
								$msg['error'] = "(Bangla 1st) Your Current Input MCQ = (".$bangla1_mcq."), CQ = (".$bangla1_wr.") and (".$bangla1_incourse.") You Must Entered MCQ <= 30, CQ <= 70 and Incourse <= 20";
							}
						}else{
							$msg['error'] = "(Fiqh and U.Fiqh) Your Current Input Fiqh = (".$fiqh.") and Incourse = (".$fiqh_incourse.") You Must Entered Fiqh <= 100 and Incourse <= 20";
						}
					}else{
						$msg['error'] = "(Arabic) Your Current Input Arabic1st = (".$arabic1st."), Incourse = (".$arabic1st_incourse.") and Arabic 2nd = (".$arabic2nd."), Incourse = (".$arabic2nd_incourse.") You Must Entered A1 <= 100, Incourse <= 20 and A2 <= 100, Incourse <= 20";
					}
				}else{
					$msg['error'] = "(Hadith Sharif)"." Your Current Input Mark = (".$hadith.") and Incourse = (".$hadith_incourse.") You Must Entered Hadith <= 100 and Incourse <= 20";
				}
			}else{
				$msg['error'] = "(Quran Mazid) ". "Your Current Input MCQ = (".$quran_mcq.") CQ = (".$quran_wr.") and Incourse = (".$quran_incourse.") Your Must Entered Quran MCQ <= 30, CQ <= 70 and Incourse <= 20";
			}
		}else{
			$msg['error'] = "Name and Roll Are Required";
		}
	}
?>