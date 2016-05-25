<?php

//define('DB_SERVER','76.162.254.151');
//define('DB_USER','A881420_jobp');
//define('DB_PASS' ,'Rahul007');
//define('DB_NAME', 'A881420_jobp');

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'zxcv');
define('DB_NAME', 'jobseeker');

class DB_con
{
 function __construct()
 {
  $conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die ('localhost connection problem'.mysql_error());
  mysql_select_db(DB_NAME, $conn);
 }
 
 public function insert($category_name,$category_details,$category_time,$category_date)
 {
  $res = mysql_query("INSERT INTO category VALUES('','$category_name','$category_details','$category_time','$category_date')");
  return $res;
 }
 
  public function insertsub($cat_id,$subcat_name,$subcat_details,$subcat_date,$subcat_time)
 {
  $res = mysql_query("INSERT INTO subcategory VALUES('','$cat_id','$subcat_name','$subcat_details','$subcat_date','$subcat_time')");
  return $res;
 }
 
 public function insertsubsub($cat_id,$subcat_name, $subsubcat_name, $subsubcat_details,$subsubcat_date,$subsubcat_time)
 {
  $res = mysql_query("INSERT INTO subsubcategory VALUES('','$cat_id','$subcat_name', '$subsubcat_name','$subsubcat_details','$subsubcat_date','$subsubcat_time')");
  return $res;
 }

  public function insertquestion($cat_id,$subcat_id,$subsubcat_id,$question,$ans1,$ans2,$ans3,$ans4,$correct_ans,$test_date,$test_time, $status, $difficulty_level)
 {
  $imploded_cat_id= implode("| ", $cat_id);
  $imploded_subcat_name= implode("| ", $subcat_id);
  $imploded_subsubcat_name= implode("| ", $subsubcat_id);
  $imploded_difficulty_level=implode("| ", $difficulty_level);
  $resquestion = mysql_query("INSERT INTO question VALUES('', '$imploded_cat_id','$imploded_subcat_name', '$imploded_subsubcat_name','$question','$ans1','$ans2','$ans3','$ans4','$correct_ans','$imploded_difficulty_level','$test_date','$test_time')");
//echo ("INSERT INTO question VALUES('', '$imploded_cat_id','$imploded_subcat_name', '$imploded_subsubcat_name','$question','$ans1','$ans2','$ans3','$ans4','$correct_ans','$difficulty_level''$test_date','$test_time')");

  return $resquestion;
 }
 
 
  public function insertcreatemaster($cat_id,$subcat_id,$start_date,$end_date,$test_duration)
 {
  $rescreatemaster = mysql_query("INSERT INTO create_qus_master VALUES('','$cat_id','$subcat_id','$start_date','$end_date','$test_duration')");
  return $rescreatemaster;
 }
 
public function insertcredentials( $numberques1, $numberques2,  $numberques3,  $test_duration1, $test_duration2, $test_duration3)
 {

  $rescredentials = mysql_query("UPDATE `testcredentials` SET `numberques1`='$numberques1',`numberques2`='$numberques2',`numberques3`='$numberques3',`test_duration1`='$test_duration1',`test_duration2`='$test_duration2',`test_duration3`='$test_duration3' WHERE 1");
  return $rescredentials;
  
 }
 
 
 public function select()
 {
  $res=mysql_query("SELECT * FROM admin_login");
  return $res;
 }
 
  public function select12()
 {
  $res1=mysql_query("SELECT * FROM category");
  return $res1;
 }
 
 public function selectsub()
 {
  $res2=mysql_query("SELECT * FROM subcategory");
  return $res2;
 }

 public function selectsubsub()
 {
  $res3=mysql_query("SELECT * FROM subsubcategory");
  return $res3;
 }
 

  public function selectquestion()
 {
  $resquestion=mysql_query("SELECT * FROM question");
  return $resquestion;
 }

public function selectperson($id)
 {
   $res=mysql_query("SELECT * FROM seeker where seeker_id='$id'");
  return $res;
 }

 public function editperson($id,$name,$email,$cont,$add,$loc,$exp,$edu,$relo,$look,$natjob,$question,$jobrdy,$stat)
 {
   $res=mysql_query("UPDATE seeker set seeker_name = '$name' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_email = '$email' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_cont = '$cont' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_add = '$add' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_loc = '$loc' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_exp = '$exp' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_edu = '$edu' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_relo = '$relo' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_look = '$look' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_natjob = '$natjob' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_test = '$test' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_jobrdy = '$jobrdy' where seeker_id='$id'");
   $res=mysql_query("UPDATE seeker set seeker_stat = '$stat' where seeker_id='$id'");
  return $res;
 }
 public function detail($id)
 {
   $res=mysql_query("SELECT * FROM seekerdoc where seeker_id='$id'");
  return $res;
 }
  public function editdoc($doc_id,$file)
 {
                            $getuploadfiles="";
                            $filename=$_FILES["file"]["file"];
                                            $newName = time() . '_' . $_FILES['file']['file'];
                                         $destination = 'assets/doc/' . $newName;
                                          if (move_uploaded_file($_FILES['file']['file'], $destination)) 
                                        {
                                                $getuploadfiles=$newName;
                                            }
   $res=mysql_query("UPDATE seekerdoc set doc_file = '$getuploadfiles' where seeker_id='$doc_id'");
  return $res;
 }

//Employer Table

 public function selectemployer()
 {
   $res=mysql_query("SELECT * FROM employer");
  return $res;
 }

public function selectcompany($id)
 {
   $res=mysql_query("SELECT * FROM employer where emp_id='$id'");
  return $res;
 }
 public function editcompany($id,$name,$email,$contp,$contn,$add,$indus,$stat)
 {
   $res=mysql_query("UPDATE employer set comp_name = '$name' where emp_id='$id'");
   $res=mysql_query("UPDATE employer set emp_email = '$email' where emp_id='$id'");
   $res=mysql_query("UPDATE employer set emp_contp = '$contp' where emp_id='$id'");
   $res=mysql_query("UPDATE employer set emp_contn = '$contn' where emp_id='$id'");
   $res=mysql_query("UPDATE employer set emp_add = '$add' where emp_id='$id'");
   $res=mysql_query("UPDATE employer set indus = '$indus' where emp_id='$id'");
   $res=mysql_query("UPDATE employer set stat = '$stat' where emp_id='$id'");
  return $res;
 }


// Dashboard

  public function countjobseeker()
 {
   $res1=mysql_query("SELECT count(seeker_id) FROM seeker");
  return $res1;
 }  
 public function countemployer()
 {
   $res=mysql_query("SELECT count(emp_id) FROM employer");
  return $res;
 }


public function setstatus($x)
 {
 $res=mysql_query("update question set set_stat='Available' where question_id ='$x'");
 return $res;
 }

 public function unsetstatus($x)
 {
 $res=mysql_query("update question set set_stat='Unavailable' where question_id ='$x'");
 return $res;
 }
}
?>