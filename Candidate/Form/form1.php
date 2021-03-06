<?php include "connection.php"; ?>
<?php require "get_district.php"; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <script>
        function getDistrict(val) {
            $.ajax({
                type: "POST",
                url: "get_district.php",
                data:'state_id='+val,
                success: function(data){
                    $("#district-list").html(data);
                }
            });
        }
        function selectCountry(val) {
            $("#search-box").val(val);
            $("#suggesstion-box").hide();
        }
    </script>
    <style>  body{
            -webkit-user-select: none;  /* Chrome all / Safari all */
            -moz-user-select: none;     /* Firefox all */
            -ms-user-select: none;      /* IE 10+ */
            user-select: none;          /* Likely future */
        }</style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("select").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".box").hide();
                    }
                });
            }).change();
        });
    </script>
</head>
<?php include "connection.php"; ?>
<?php
$query = "select * from candidate_t order by cad_regist_id desc limit 1";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);

$cad_regist_id =$row['cad_regist_id'];

if($cad_regist_id == " "){
    $cad_id = "NDA20210201";
}else{
    $cad_id = substr($cad_regist_id,9);
    $cad_id = intval($cad_id);
    $cad_id = "NDA2021020" . ($cad_id + 1);
}

?>
<div class="col-xl-12 col-lg-12 col-md-12 " style="padding: 10px; height: 200px;border-bottom: 0.5px solid #F4F6F6;padding-left: 0px; margin-left: 0px;">
    <div class="col-xl-12 col-lg-12 col-md-12 d-inline-flex">
        <div class=" col-lg-2 float-child">
            <div class="container" style=""><img style="height: 200px;padding-bottom: 10px;padding-left: 0px;" src="img/logo1.png"> </div>
        </div>
        <div class="col-xl-8 col-lg-12 col-md-8" style="text-align: center;">
            <div class="container" style="padding-top: 20px;">
                <p style="font-size: 60px;color: #5499C7;font-family: Times New Roman;margin-bottom: 0px;">National Defence Academy</p>
                <p style="font-size: 30px;font-family: Times New Roman;color: #2d4373;"> Union Public Service Commission </p>
            </div>
        </div>
        <div class="col-lg-2 float-child">
            <div class="container" style="200px;"><img style="height: 200px;padding-bottom: 10px;padding-left: 0px;" src="img/img3.png"> </div>
        </div>
    </div>
</div>

<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-10">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12" >
                            <div class="login-form">
                                <div class="text-center">
                                    <p class="text-center" style="color:#284EFF;font-size: 30px;font-family: Times New Roman;" >
                                        National Defence Academy  Examination - 2021<br>
                                        ??????????????????????????? ??????????????? ?????????????????? ?????????????????????  - 2021
                                    </p>
                                </div>
                                <div class="text-justify" style="border: 1px solid black;">
                                    <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 10px;"><br>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">PART-I REGISTRATION / ?????????-I ?????????????????????</h1>
                                </div>
                                    </div>
                                </div><br>
                                <form class="form-group" name="insert" action="addform1.php" method="post">
                                <div class="text-justify" style="border: 1px solid black;padding-left: 50px;padding-right: 50px;">
                                            <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 10px;">
                                        <div class="col-12"><br>
                                            <div class="text-center" style="border:padding-top: 2%;width: 35%;">
                                                <p style="font-size: 20px;">Personal Details / ??????????????????????????? ???????????????</p>
                                            </div><br>

                                    <div class="form-group">
                                        <input type="hidden" name="cad_regist_id" class="form-control" value="<?php echo $cad_id; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label >Full Name / ????????? <span style="color: red">*</span> </label>
                                        <input type="text" name="name" class="form-control" id="exampleInputtext"><br>
                                        <p style="color:#E74C3C"><b><u>Note 1</u>:</b> Name as recorded in the Matriculation/Secondary Examination Certificate.<br> <b>????????? 1 </b>: ?????????????????????/???????????????????????? ????????????????????? ??????????????????-???????????? ????????? ???????????? ????????? ?????? ?????????????????? <br><b><u>Note 2</u>:</b> Please do not use any prefix such as Mr. or Ms. etc unless it consists of <br>only 3 letters as 4 letters are mandatory for NAME field. <br>
                                            <b>????????? 2</b>: ??????????????? ????????? ?????? ????????? ???????????? (Mr.) ?????? ?????????????????? (Ms.) ????????? ??? ??????????????? ?????? ?????? ?????? ??????????????? ???????????? 3 ??????????????? ?????? ??????
                                            ????????????????????? ????????? ?????? ??????????????? ?????? 4 ??????????????? ???????????????????????? ????????????<br><b>Note 3:</b> If your name is exceeding 30 characters, please read the FAQ. <br> <b>????????? 3 :</b> ????????? ???????????? ????????? 30 ????????????????????? ?????? ???????????? ??????, ?????? ??????????????? ????????????????????? ?????????????????? ??????????????????</p>
                                    </div>


                                    <div class="form-group">
                                        <label >Gender / ???????????? <span style="color: red">*</span> </label>
                                        <select name="sex" id="sex"  class="form-control" style="visibility: visible;">
                                            <option value="0">Select Gender</option>
                                            <option value="male">Male / ???????????????  </option>
                                            <option value="female" disabled>Female / ??????????????? </option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label >Date Of Birth / ???????????? ????????????<span style="color: red">*</span> </label>
                                        <input type="date" class="form-control" name="birth_date" min="2003" maxlength="2008">
                                        <p style="color:#E74C3C"> Note : A candidate who is born between 2003 and 2006 should be apply only. <br> 2003 ?????? 2006 ?????? ????????? ???????????? ????????? ??????????????????????????? ?????? ?????? ??????????????? ???????????? ???????????????. </p>
                                    </div>
                                    <div class="form-group">
                                        <label > Father's Name / ???????????? ?????? ????????? <span style="color: red">*</span> </label>
                                        <input type="text" name="f_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Mother's Name / ???????????? ?????? ????????? <span style="color: red">*</span> </label>
                                        <input type="text" name="m_name" class="form-control">
                                    </div>
                                            <div class="form-group">
                                                <label >Aadhar Number / ???????????? ????????????<span style="color: red">*</span> </label>
                                                <input type="tel" name="aadhar_num"  class="form-control">
                                            </div>
                                    <div class="form-group">
                                        <label >Nationality / ????????????????????????????????? <span style="color: red">*</span> </label>
                                        <select name="nationality" id="nationality" class="form-control" >
                                            <option value="indian">Indian / ??????????????????</option>
                                            <option value="other">Others / ????????????</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Marital Status / ????????????????????? ?????????????????? <span style="color: red">*</span> </label>
                                        <select name="marital" id="marital" style="visibility: visible;" class="form-control">
                                            <option value="NULL">Select Married Status</option>
                                            <option value="unmarried">Unmarried / ???????????????????????????</option>
                                            <option value="married" disabled>married / ????????????????????????</option></select>
                                    </div>
                                    <div class="form-group">
                                        <label >Community / ?????????????????? <span style="color: red">*</span> </label>
                                        <select name="community" id="community" class="form-control" >
                                            <option value="NULL" class="selInstruct"> Select Community </option>
                                            <option value="general">General</option>
                                            <option value="obc">OBC</option>
                                            <option value="sc">SC</option>
                                            <option value="st">ST</option>
                                        </select><br>
                                    </div>


                                    <div class="obc box col-xl-10 col-lg-10 col-md-10" style="border-bottom: 2px solid #34495E;" >
                                        <p style="color:#0089FF;"> This option For OBCs Candidate / ??????????????? ??????????????????????????? ?????? ????????? ?????? ?????????????????? *</p>
                                        <p style="border-bottom: 2px solid #34495E;"></p>
                                    <div class="form-group" style="padding-left: 20px;">
                                        <label> Do you belong to Creamy Layer / ???????????? ?????? ?????????????????? ???????????? ?????? ??????????????? ???????????? ????????? <span style="color: red"></span> </label>
                                        <select name="creamy_code" style="visibility: visible;" class="form-control">
                                            <option value="NULL class="selInstruct">Select</option>
                                            <option value="yes">Yes / ?????????</option>
                                            <option value="no">No / ????????????</option>
                                        </select>
                                        <p style="color:#E74C3C;">Candidates belonging to OBCs but coming in the ' Creamy Layer ' and thus not being entitled to
                                            OBC reservation will be treated as General community. / ?????? ?????????????????????????????? ????????????  ?????????????????? ???????????? ?????? ??????????????? ???????????? ????????? ??????????????? ????????????????????? ??????????????? ?????? ????????????????????? ????????? ????????? ?????? ?????? ?????????????????? ??????????????? ?????????????????? ?????? ????????? ??????????????? ???????????? ?????????, ??????????????????  ?????????????????????  ?????????????????? ?????? ????????? ?????? ???????????? ??????????????????</p>
                                    </div></div>
                                    <div class="sc box col-xl-10 col-lg-10 col-md-10"  style="border-bottom: 2px solid #34495E;">
                                        <p style="color:#0089FF;"> This option For SC / ST Candidate / ??????????????? ??????????????????????????? ?????? ????????? ?????? ?????????????????? *</p>
                                        <p style="border-bottom: 2px solid #34495E;"></p>
                                        <div class="form-group" style="padding-left: 20px;">
                                            <label> Community Certificate Number / ??????????????????????????? ?????????????????? ???????????? ?????????????????? </label>
                                            <input type="tel" class="form-control" name="certificate_num"><br>
                                            <p style="color:#E74C3C">SC /ST Candidates claiming relaxation must uensure that all certificates should have been issued earlier than the closing date. <br> ???.??????./???.???.??????. ?????? ?????????????????? ?????? ???????????? ???????????? ???????????? ??????????????? ?????????????????? ?????? ?????? ??????????????????????????? ?????? ???????????? ??????????????? ?????? ????????? ?????????????????? ???????????? ??????????????? ???????????? ?????? ???????????? ???????????? ????????? ?????? ????????????</p>
                                        </div>
                                            <div class="form-group" style="padding-left: 20px;">
                                                <label>Community Certificate Issuing Authority Designation / ??????????????????????????? ?????????????????? ???????????? ???????????? ???????????? ???????????? ??????????????????????????? ???????????????  </label>
                                                <input type="text" name="certificate_issue" class="form-control">
                                        </div><br>
                                        <div class="form-group" style="padding-left: 20px;">
                                            <label>Community certificate date / ?????????????????? ?????????????????? ???????????? ?????? ??????????????? </label>
                                            <input type="date" name="certificate_date" class="form-control">
                                        </div>
                                    </div><br>
                                            <div class="st box col-xl-10 col-lg-10 col-md-10"  style="border-bottom: 2px solid #34495E;">
                                                <p style="color:#0089FF;"> This option For SC / ST Candidate / ??????????????? ??????????????????????????? ?????? ????????? ?????? ?????????????????? *</p>
                                                <p style="border-bottom: 2px solid #34495E;"></p>
                                                <div class="form-group" style="padding-left: 20px;">
                                                    <label> Community Certificate Number / ??????????????????????????? ?????????????????? ???????????? ?????????????????? </label>
                                                    <input type="tel" class="form-control" name="certificate_num"><br>
                                                    <p style="color:#E74C3C">SC /ST Candidates claiming relaxation must uensure that all certificates should have been issued earlier than the closing date. <br> ???.??????./???.???.??????. ?????? ?????????????????? ?????? ???????????? ???????????? ???????????? ??????????????? ?????????????????? ?????? ?????? ??????????????????????????? ?????? ???????????? ??????????????? ?????? ????????? ?????????????????? ???????????? ??????????????? ???????????? ?????? ???????????? ???????????? ????????? ?????? ????????????</p>
                                                </div>
                                                <div class="form-group" style="padding-left: 20px;">
                                                    <label>Community Certificate Issuing Authority Designation / ??????????????????????????? ?????????????????? ???????????? ???????????? ???????????? ???????????? ??????????????????????????? ???????????????  </label>
                                                    <input type="text" name="certificate_issue" class="form-control">
                                                </div><br>
                                                <div class="form-group" style="padding-left: 20px;">
                                                    <label>Community certificate date / ?????????????????? ?????????????????? ???????????? ?????? ??????????????? </label>
                                                    <input type="date" name="certificate_date" class="form-control">
                                                </div>
                                            </div><br>
                                            <div class="form-group">
                                                <label >Do you belong to Minority / ???????????? ?????? ?????????????????????????????? ????????? <span style="color: red"></span> </label>
                                                <select name="minority_status" class="form-control">
                                                    <option value="NULL">Select Minority</option>
                                                    <option value="no">No / ????????????</option>
                                                    <option value="yes-min">Yes / ?????????</option>
                                                </select>
                                            </div>

                                            <div class="yes-min box form-group">
                                                <label >If Yes Select the Religion / ????????? ????????? ?????? ??????????????? ???????????? ?????? ????????? ????????????<span style="color: red"></span> </label>
                                                <select name="religion" id="minority_code" style="visibility: visible;" class="form-control">
                                                    <option value="NULL" class="selInstruct">Select</option>
                                                    <option value="muslim">Muslim</option>
                                                    <option value="christian">Christian</option>
                                                    <option value="sikh">Sikh</option>
                                                    <option value="buddhist">Buddhist</option>
                                                    <option value="zoroastrian">Zoroastrian</option>
                                                    <option value="jain">Jain</option>
                                                </select>
                                            </div>
                                            <div class="col-12"><br>
                                                <div class="text-center" style="padding-top: 2%;width: 40%;">
                                                    <p style="font-size: 20px;">Educational Qualification / ????????????????????? ?????????????????????</p>
                                                </div><br>

                                                <div class="form-group">
                                                    <label >Select your educational qualifications / ???????????? ????????????????????? ????????????????????? ?????? ????????? ???????????? <span style="color: red">*</span> </label>
                                                    <select name="qualcode" id="qualcode" class="form-control">
                                                        <option value="NULL" class="selInstruct"> Select the Qualification </option>
                                                        <option value="1">Passed 12th class of 10 plus 2 pattern of school education or an equivalent examination but not having Physics, Chemistry and...</option>
                                                        <option value="2">Passed 12th class of 10 plus 2 pattern of school education or an equivalent examination with Physics, Chemistry and Maths amo...</option>
                                                        <option value="3">Appeared / Appearing at 12th class of 10 plus 2 pattern of school education or an equivalent exam but not having Physics, Che...</option>
                                                        <option value="4">Appeared/Appearing at 12th class of 10 plus 2 pattern of school education or an equivalent Exam with Physics, Chemistry and M...</option>
                                                    </select>
                                                </div>
                                                <br>

                                                <div class="col-14"><br>
                                                    <div class="text-left" style="padding-left: 3%;width: 40%;">
                                                        <p style="font-size: 20px;">Address / ?????????????????? ?????????</p>
                                                    </div><br>

                                                    <div class="form-group">
                                                        <label >Line 1 / ???????????? 1 <span style="color: red">*</span> </label>
                                                        <input type="text" name="addres1" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Line 2 / ???????????? 2 <span style="color: red">*</span> </label>
                                                        <input type="text" name="addres2" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Line 3 / ???????????? 3 <span style="color: red"></span> </label>
                                                        <input type="text" name="addres3" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label scope="row">State / UT ?????????????????? / ????????? ??????????????? ????????????????????? <span style="color: red">*</span> </label>
                                                        <select onChange="getDistrict(this.value);"  name="state" id="state" class="form-control" >
                                                            <option value="">Select</option>
                                                            <?php $query =mysqli_query($conn,"SELECT * FROM state");
                                                            while($row=mysqli_fetch_array($query))
                                                            { ?>
                                                                <option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label scope="row">District / City ???????????? / ?????????<span style="color: red">*</span> </label>
                                                        <select name="district" id="district-list" class="form-control">
                                                            <option value="">Select</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label > PIN Code / ????????? ????????? <span style="color: red">*</span> </label>
                                                        <input type="tel" class="form-control" name="pincode" maxlength="6">
                                                        <br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label > Phone No. with Area Code / ????????????????????? ????????? ?????? ????????? ????????? ??????.<span style="color: red">*</span> </label>
                                                        <input type="tel" class="form-control" name="phone" maxlength="12">
                                                        <br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label > Mobile No. / ?????????????????? ?????? <span style="color: red">*</span> </label>
                                                        <input type="tel" class="form-control" name="mobile" maxlength="10">
                                                        <br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label > e-mail / ???-????????? <span style="color: red">*</span> </label>
                                                        <input type="email" class="form-control" name="email" >
                                                        <br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label >  Confirm e-mail / ???-????????? ?????? ?????????????????? ???????????? <span style="color: red">*</span> </label>
                                                        <input type="email" class="form-control" name="c_email" >
                                                        <br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Alternative e-mail / ???????????????????????? ???-????????? <span style="color: red"></span> </label>
                                                        <input type="email" class="form-control" name="a_email" >
                                                        <br>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="text-center">
                                                    <button type="reset" class="btn btn-danger" style="width: 200px;">Reset / ?????????: ????????? ????????????</button>&nbsp;&nbsp;&nbsp;
                                                    <button  type="submit" name="submit" class="btn btn-info" style="width: 200px;">Login / ????????? ?????? ????????????</button>
                                                </div> <br><br>
                                </form></div>

                            <div class="text-center">
                                </div></div></div>
                            </div><p style="color: red;">(*) - Star marked fields are essentially to be filled by the candidate. / ??????????????????????????? (*) ??????????????? ??????????????? ???????????? ???????????????????????? ?????? ?????????????????? ??????????????? </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>