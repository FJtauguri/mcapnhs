<div class="col-lg-10 p-3" style="overflow-y: auto; height: 600px; position: relative;" id="indexformshow">
    <!-- STUDENT DETAILS COL -->
    <p class="fs-3">
        1. Student Details
    </p>
    <div class="col-12 d-flex">
        <div class="col-lg-3 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="lrn" value="<?php echo isset($_SESSION['stud_lrn']) ? $_SESSION['stud_lrn'] : 'Not logged in'; ?>" disabled></button>
                <p class="valvname">LRN</p>
            </div>
        </div>
        <div class="col-lg-4 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="fname" value="<?php echo $studentInfo['fname'] ?? ''; ?>" disabled></button>
                <p class="valvname">First Name</p>
            </div>
        </div>
        <div class="col-lg-1 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="mname" value="<?php echo $studentInfo['mname'] ?? ''; ?>" disabled></button>
                <p class="valvname">Middle</p>
            </div>
        </div>
        <div class="col-lg-4 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="lname" value="<?php echo $studentInfo['lname'] ?? ''; ?>" disabled></button>
                <p class="valvname">Last Name</p>
            </div>
        </div>  
    </div>
    <div class="col-12 d-flex">
        <div class="col-lg-4 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="nickname" value="<?php echo $studentInfo['nickname'] ?? ''; ?>" disabled></button>
                <p class="valvname">Nickname</p>
            </div>
        </div>
        <div class="col-lg-2 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="bdate" value="<?php echo $studentInfo['bdate'] ?? ''; ?>" disabled></button>
                <p class="valvname">Birthdate</p>
            </div>
        </div>
        <div class="col-lg-2 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="age" value="<?php echo $studentInfo['age'] ?? ''; ?>" disabled></input>
                <p class="valvname">Age</p>
            </div>
        </div>
        <div class="col-lg-2 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="gender" value="<?php echo $studentInfo['gender'] ?? ''; ?>" disabled></input> 
                <p class="valvname">Gender</p>
            </div>
        </div>  
        <div class="col-lg-2 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="glevel" value="<?php echo $studentInfo['glevel'] ?? ''; ?>" disabled></button>
                <p class="valvname">Grade Level</p>
            </div>
        </div>
    </div>

    <!-- PARENTS AND GUARDIAN COL -->
    <p class="fs-3">
        2. Parents & Guardian Details
    </p>
    <div class="col-lg-12 d-flex">
        <div class="col-lg-6 col-md-6 d-block">
            <div class="col-lg-12 text-center">
                <p class="fw-4 h5 py-3">
                    Mother    
                </p>
            </div>
            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="text" id="" name="moname" value="<?php echo $studentInfo['moname'] ?? ''; ?>" disabled></input>
                    <p class="valvname">Mother's Name Name</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="text" id="" name="mooccupation" value="<?php echo $studentInfo['mooccupatin'] ?? ''; ?>" disabled></input>
                    <p class="valvname">Occupation</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="tel" id="" name="mophone" value="<?php echo $studentInfo['mophone'] ?? ''; ?>" disabled></input>
                    <p class="valvname">Phone Number</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="text" id="" name="moaddress" value="<?php echo $studentInfo['moaddress'] ?? ''; ?>" disabled></input>
                    <p class="valvname">Address</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 d-block">
            <div class="col-lg-12 text-center">
                <p class="fw-4 h5 py-3">
                    Father    
                </p>
            </div>
            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="text" id="" name="paname" value="<?php echo $studentInfo['paname'] ?? ''; ?>" disabled></input>
                    <p class="valvname">Father's Name</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="text" id="" name="paoccupation" value="<?php echo $studentInfo['paoccupation'] ?? ''; ?>" disabled></input>
                    <p class="valvname">Occupation</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="tel" id="" name="paphone" value="<?php echo $studentInfo['paphone'] ?? ''; ?>" disabled></input>
                    <p class="valvname">Phone Number</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="text" id="" name="paaddress" value="<?php echo $studentInfo['paaddress'] ?? ''; ?>" disabled></input>
                    <p class="valvname">Address</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col-lg-12 text-center">
        <p class="fw-4 h5 py-0">
            <i>For Legal Guardian</i>
        </p>
    </div>
    <div class="col-12 d-flex">
        <div class="col-lg-6 ">
            <div class="row gy-0 mx-1">
                <input class="valv"  type="text" id="" name="lename" value="<?php echo $studentInfo['lename'] ?? ''; ?>" disabled></input>
                <p class="valvname">Full Name</p>
            </div>
        </div>
        <div class="col-lg-6 ">
            <div class="row gy-0 mx-1">
                <input class="valv"  type="text" id="" name="leoccupation" value="<?php echo $studentInfo['leoccupation'] ?? ''; ?>" disabled></input>
                <p class="valvname">Occupation</p>
            </div>
        </div>  
    </div>
    <div class="col-12 d-flex">
        <div class="col-lg-6 ">
            <div class="row gy-0 mx-1">
                <input class="valv"  type="text" id="" name="lerelation" value="<?php echo $studentInfo['lerelation'] ?? ''; ?>" disabled></input>
                <p class="valvname">Relation</p>
            </div>
        </div>
        <div class="col-lg-6 ">
            <div class="row gy-0 mx-1">
            <input class="valv"  type="tel" id="" name="lephone" value="<?php echo $studentInfo['lephone'] ?? ''; ?>" disabled></input>
                <!-- DON'T MIND THIS COMMENT -->
                <!-- <input class="valv"  type="date" id="" name="" value=""></input> -->
                <!-- <select name="gender" class="form-select py-1" id="gender" aria-label="Select Gender" style="">
                    <option disabled selected></option>
                    <option value="female">F</option>
                    <option value="male">M</option>
                </select> -->
                <p class="valvname">Contact Number</p>
            </div>
        </div>  
    </div>

    <!-- ACADEMIC COL -->
    <p class="fs-3">
        3. Academic History
    </p>
    <div class="col-12 d-flex">
        <div class="col-lg-3">
            <div class="row gy-0 mx-1 ">
                <p class="valvname text-start">Grade 7 Section</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="tex  t" id="" name="section7" value="<?php echo $studentInfo['section7'] ?? ''; ?>" disabled></input>
                <p class="valvname">Section</p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="text" id="" name="adv7" value="<?php echo $studentInfo['adv7'] ?? ''; ?>" disabled></input>
                <p class="valvname">Adviser</p>
            </div>
        </div>  
    </div>
    <div class="col-12 d-flex">
        <div class="col-lg-3">
            <div class="row gy-0 mx-1 ">
                <p class="valvname text-start">Grade 8 Section</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="text" id="" name="section8" value="<?php echo $studentInfo['section8'] ?? ''; ?>" disabled></input>
                <p class="valvname">Section</p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="text" id="" name="adv8" value="<?php echo $studentInfo['adv8'] ?? ''; ?>" disabled></input>
                <p class="valvname">Adviser</p>
            </div>
        </div>  
    </div>
    <div class="col-12 d-flex">
        <div class="col-lg-3">
            <div class="row gy-0 mx-1 ">
                <p class="valvname text-start">Grade 9 Section</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="text" id="" name="section9" value="<?php echo $studentInfo['section9'] ?? ''; ?>" disabled></input>
                <p class="valvname">Section</p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="text" id="" name="adv9" value="<?php echo $studentInfo['adv9'] ?? ''; ?>" disabled></input>
                <p class="valvname">Adviser</p>
            </div>
        </div>  
    </div>
    <div class="col-12 d-flex">
        <div class="col-lg-3">
            <div class="row gy-0 mx-1 ">
                <p class="valvname text-start">Grade 10 Section</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="text" id="" name="section10" value="<?php echo $studentInfo['section10'] ?? ''; ?>" disabled></input>
                <p class="valvname">Section</p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="text" id="" name="adv10" value="<?php echo $studentInfo['adv10'] ?? ''; ?>" disabled></input>
                <p class="valvname">Adviser</p>
            </div>
        </div>  
    </div>

    <!-- MEDICAL COL -->
    <p class="fs-3">
        4. Medical History
    </p>
    <div class="col-12 d-flex">
        <div class="row gy-0 mx-1 ">
            <p class="valvname text-start"><i>(If applicable, write it down)</i></p>
        </div>
    </div>
    <div class="col-12 d-flex">
        <div class="col-lg-12">
            <div class="row gy-0 mx-1 ">
                <textarea name="medical" rows="4" class="valv text-start text-align-left"  type="textarea" id="" name="medical" value="" ><?php echo $studentInfo['medical'] ?? ''; ?></textarea>
            </div>
        </div>
    </div>
</div>