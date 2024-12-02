<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form for donor</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>


    <div class="regform">
        <h1>Registration-Donor</h1>
    </div>

    <div class="main">

        <form action="connect.php" method="POST">
            <div class="form-group">
                <div class="row ">
                    <div class="col">
                        <label for="fname">First Name<span class="required-mark"> *</span></label>
                        <input class="form-control" type="text" id="fname" name="firstname" placeholder="First Name" required>
                    </div>
                    <div class="col">
                        <label for="fname">Last Name <span class="required-mark"> *</span></label>
                        <input class="form-control" type="text" id="lname" name="lastname" placeholder="last Name" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="Age">Age <span class="required-mark"> *</span></label><br>
                            <input class="form-control form-rounded " type="text" name="Age" placeholder="Age" required>
                        </div>
                        <div class="col">
                            <label for="start">Date of Birth:<span class="required-mark">*</span></label><br>

                            <input type="date" class="form-control form-rounded" id="dob" name="dob" value="dd-mm-yy" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label class="col3" id="gender" style="margin-left: 40px;">Gender <span class="required-mark">*</span></label>
                            <br>

                            <div class="form-check form-check-inline" style="margin-left: 30px;">
                                <input class="form-check-input" type="radio" id="male" name="gender" value="Male" required>
                                <label class="form-check-label" for="inlineCheckbox1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="female" name="gender" value="Female" required>
                                <label class="form-check-label" for="inlineCheckbox2">Female</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="other" name="gender" value="Other" required>
                                <label class="form-check-label" for="inlineCheckbox3">Other</label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="bloodgroup"> Blood Group <span class="required-mark">*</span></label>
                            <select class="form-select " id="bloodgroup" name="bloodgroup">
                                <option selected>Choose...</option>
                                <option value="A">A</option>
                                <option value="A+">A+</option>
                                <option value="AB">AB</option>

                                <option value="AB+">AB+</option>
                                <option value="B-">B-</option>
                                <option value="B+">B+</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>

                            </select>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="username">Email</label><br>
                            <input type="Email" class="form-control" id="Email" name="Email" placeholder="Email" required>
                        </div>
                        <div class="col">
                            <label for="mob">Mobile Number<span class="required-mark">*</span></label><br>
                            <input type="text" class="form-control form-rounded" id="mobile" name="Mobile" required="" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword4" class="form-label">Password<span class="required-mark">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="col">
                            <label for="inputPassword4" class="form-label">Confirm Passsword<span class="required-mark">*</span></label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder=" Confirm Password" required>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>

                </div>




                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="start">Last Date of Blood Donation:<span class="required-mark">*</span></label><br>

                            <input type="date" class="form-control form-rounded" id="blooddonation" name="blooddate" value="dd-mm-yy" required>
                        </div>
                        <div class="col">
                            <label for="start"> Covid Vaccine Date:</label><br>
                            <input type="date" class="form-control form-rounded" id="vaccinedate" name="vaccinedate" value="dd-mm-yy" required>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <div class="row">
                        <div class="col">
                            <label for="donateblood"> Choose Preference <span class="required-mark">*</span></label>
                            <select class="form-select" name="donateblood" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="Emergency Donate">Emergency Donate</option>
                                <option value="General Donate">General Donate</option>

                            </select>

                        </div>
                        <div class="col">

                            <label for="covidnegative">Covid Negative Report</label>
                            <select class="form-select" name="covidnegative" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>

                            </select>

                        </div>
                    </div>
                </div>


                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary" style="width: 400px;">Submit</button>

                </div>
            </div>


        </form>
    </div>

</body>

</html>