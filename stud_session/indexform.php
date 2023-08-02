<!-- SECTION 1 -->
<div class="col-lg-10 p-3" style="overflow-y: auto; height: 610px; position: relative; display: none;" id="section1">
    <!-- STUDENT DETAILS COL -->
    <p class="fs-3">
        1. Student Details
    </p>
    <div class="col-12 d-flex">
        <div class="col-lg-3 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="lrn" value="<?php echo isset($_SESSION['stud_lrn']) ? $_SESSION['stud_lrn'] : 'Not logged in'; ?>" readonly></button>
                <p class="valvname">LRN</p>
            </div>
        </div>
        <div class="col-lg-4 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="fname" value="" ></button>
                <p class="valvname">First Name</p>
            </div>
        </div>
        <div class="col-lg-1 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="mname" value="" ></button>
                <p class="valvname">Middle</p>
            </div>
        </div>
        <div class="col-lg-4 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="lname" value="" ></button>
                <p class="valvname">Last Name</p>
            </div>
        </div>  
    </div>
    <div class="col-12 d-flex">
        <div class="col-lg-4 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="nickname" value="" ></button>
                <p class="valvname">Nickname</p>
            </div>
        </div>
        <div class="col-lg-2 ">
            <div class="row gy-0 mx-1">
                <input type="date" class="valv" id="" name="bdate" value="" ></button>
                <p class="valvname">Birthdate</p>
            </div>
        </div>
        <div class="col-lg-2 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="age" value="" ></input>
                <p class="valvname">Age</p>
            </div>
        </div>
        <div class="col-lg-2 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="gender" value="" ></input> 
                <p class="valvname">Gender</p>
            </div>
        </div>  
        <div class="col-lg-2 ">
            <div class="row gy-0 mx-1">
                <input type="text" class="valv" id="" name="glevel" value="" ></button>
                <p class="valvname">Grade Level</p>
            </div>
        </div>
    </div>
    <!-- NEXT, PREV, SAVE -->
    <div class="row">
        <div class="col-lg-12 d-flex py-4">
            <div class="col-6 text-start justify-content-end align-content-end">
                <button style="visibility: hidden;" type="button" class="btn btn-outline-success" data-mdb-ripple-color="light" onclick="showSection('section1')"><i class="fas fa-angles-left"></i> Prev</button>
            </div>
            <div class="col-6 text-end justify-content-end align-content-end">
                <button type="button" class="btn btn-success" data-mdb-ripple-color="light" onclick="showSection('section2')">Next <i class="fas fa-angles-right"></i></button>
            </div>
        </div>
    </div>
</div>




<!-- SECTION 2 -->
<div class="col-lg-10 p-3" style="overflow-y: auto; height: 610px; position: relative; display: none;" id="section2">
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
                    <input class="valv" type="text" id="" name="moname" value="" ></input>
                    <p class="valvname">Mother's Name Name</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="text" id="" name="mooccupation" value="" ></input>
                    <p class="valvname">Occupation</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="tel" id="" name="mophone" value="" ></input>
                    <p class="valvname">Phone Number</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="text" id="" name="moaddress" value="" ></input>
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
                    <input class="valv" type="text" id="" name="paname" value="" ></input>
                    <p class="valvname">Father's Name</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="text" id="" name="paoccupation" value="" ></input>
                    <p class="valvname">Occupation</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="tel" id="" name="paphone" value="" ></input>
                    <p class="valvname">Phone Number</p>
                </div>
            </div>

            <div class="col-lg-12 ">
                <div class="row gy-0 mx-1">
                    <input class="valv" type="text" id="" name="paaddress" value="" ></input>
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
                <input class="valv"  type="text" id="" name="lename" value="" ></input>
                <p class="valvname">Full Name</p>
            </div>
        </div>
        <div class="col-lg-6 ">
            <div class="row gy-0 mx-1">
                <input class="valv"  type="text" id="" name="leoccupation" value="" ></input>
                <p class="valvname">Occupation</p>
            </div>
        </div>  
    </div>
    <div class="col-12 d-flex">
        <div class="col-lg-6 ">
            <div class="row gy-0 mx-1">
                <input class="valv"  type="text" id="" name="lerelation" value="" ></input>
                <p class="valvname">Relation</p>
            </div>
        </div>
        <div class="col-lg-6 ">
            <div class="row gy-0 mx-1">
            <input class="valv"  type="tel" id="" name="lephone" value="" ></input>
                <!-- DON'T MIND THIS COMMENT -->
                <!-- <input class="valv"  type="date" id="" name="" value=""></input> -->
                <!-- <select name="gender" class="form-select py-1" id="gender" aria-label="Select Gender" style="">
                    <option  selected></option>
                    <option value="female">F</option>
                    <option value="male">M</option>
                </select> -->
                <p class="valvname">Contact Number</p>
            </div>
        </div>  
    </div>
    <!-- NEXT, PREV, SAVE -->
    <div class="row">
        <div class="col-lg-12 d-flex py-4">
            <div class="col-6 text-start justify-content-end align-content-end">
                <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="light" onclick="showSection('section1')"><i class="fas fa-angles-left"></i> Prev</button>
            </div>
            <div class="col-6 text-end justify-content-end align-content-end">
            <button type="button" class="btn btn-success" data-mdb-ripple-color="light" onclick="showSection('section3')">Next <i class="fas fa-angles-right"></i></button>
            </div>
        </div>
    </div>
</div>




<!-- SECTION 3 -->
<div class="col-lg-10 p-3" style="overflow-y: auto; height: 610px; position: relative; display: none;" id="section3">
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
                <input class="valv"  type="tex  t" id="" name="section7" value="" ></input>
                <p class="valvname">Section</p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="text" id="" name="adv7" value="" ></input>
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
                <input class="valv"  type="text" id="" name="section8" value="" ></input>
                <p class="valvname">Section</p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="text" id="" name="adv8" value="" ></input>
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
                <input class="valv"  type="text" id="" name="section9" value="" ></input>
                <p class="valvname">Section</p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="text" id="" name="adv9" value="" ></input>
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
                <input class="valv"  type="text" id="" name="section10" value="" ></input>
                <p class="valvname">Section</p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row gy-0 mx-1 ">
                <input class="valv"  type="text" id="" name="adv10" value="" ></input>
                <p class="valvname">Adviser</p>
            </div>
        </div>  
    </div>
    <!-- NEXT, PREV, SAVE -->
    <div class="row">
        <div class="col-lg-12 text-right d-flex justify-content-end align-content-end py-4">
            <div class="col-lg-12 d-flex py-4">
                <div class="col-6 text-start justify-content-end align-content-end">
                    <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="light" onclick="showSection('section2')"><i class="fas fa-angles-left"></i> Prev</button>
                </div>
                <div class="col-6 text-end justify-content-end align-content-end">
                    <button type="button" class="btn btn-success" data-mdb-ripple-color="light" onclick="showSection('section4')">Next <i class="fas fa-angles-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- SECTION 4 -->
<div class="col-lg-10 p-3" style="overflow-y: auto; height: 610px; position: relative; display: none;" id="section4">
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
                <textarea name="medical" rows="4" class="valv text-start text-align-left"  type="textarea" id="" name="medical" value=" v" ></textarea>
            </div>
        </div>
    </div>
    <!-- NEXT, PREV, SAVE -->
    <div class="row">
        <div class="col-lg-12 text-right d-flex justify-content-end align-content-end py-4">
            <div class="col-lg-12 d-flex py-4">
                <div class="col-6 text-start justify-content-end align-content-end">
                    <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="light" onclick="showSection('section3')"><i class="fas fa-angles-left"></i> Prev</button>
                </div>
                <div class="col-6 text-end justify-content-end align-content-end">
                    <button type="submit" class="btn btn-success" data-mdb-ripple-color="light">SAVE <i class="far fa-circle-check"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
