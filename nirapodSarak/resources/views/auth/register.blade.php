<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nirapod Chalok Chai</title>
    <link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
    <link rel="manifest" href="image/favicon/site.webmanifest">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>


    <section class="registration">
        <div class="backtopage"><a href="{{ route('home') }}"><i class="fas fa-chevron-left"></i>Go to homepage</a></div>
        <div class="title">Registration Here</div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 .reg-box mx-auto">


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="user__details">
                            <h5 class="v-info">Personal Information</h5>
                            <div class="row">

                                <!-- phone -->
                                <div class="input__box col-md-6">
                                    <span class="details">Phone Number</span>
                                    <!-- <input id="phone" type="text" name="phone" pattern="[0-9]{11}" placeholder="01353456789" required> -->
                                    <input id="phone" type="text" name="phone"  required>
                                </div>

                                <!-- email -->
                                <div class="input__box col-md-6">
                                    <span class="details" >Email</span>
                                    <input id="email" type="email" name="email"  required>
                                </div>

                                <!-- name -->
                                <div class="input__box col-md-6">
                                    <span class="details">Full Name</span>
                                    <input id="name" type="text" name="name" placeholder="same as NID/License" required>
                                </div>

                                <!-- nid -->
                                <div class="input__box col-md-6">
                                    <span class="details">NID Number</span>
                                    <input id="nid" type="text" name="nid" >
                                </div>

                                <!-- Gender -->
                                <div class="input__box col-md-6">
                                    <span class="details">Gender</span>
                                    <select name="gender" id="gender">
                                        <option data-display="Select">Nothing</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <!-- birth date -->
                                <div class="input__box  col-md-6" >
                                    <span class="details">Date of Birth</span>
                                    <input id="birthDate" type="text" name="birthDate" placeholder="dd-mm-yyyy" required>
                                </div>

                                <!-- Password -->
                                <div class="input__box col-md-6">
                                    <span class="details" >Password</span>
                                    <input id="password" type="password" name="password" placeholder="********" required>
                                </div>
                                <div class="input__box col-md-6" >
                                    <span class="details" >Confirm Password</span>
                                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder="********" required>
                                </div>

                                <!-- Photo -->
                                <!-- <div class="input__box col-md-6">
                                    <span class="details">Upload your profile pic</span>
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            
                                            <input id="photo" type="text" name="photo">
                                            <label ></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9YhceWoUKbK2wMeimcB0NgVEqYlpd6ccl411nf7jlx4sV5e8y5b8CdsEjPFtmbHoKhb0&usqp=CAU');">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- blood group -->
                                <div class="input__box col-md-6">

                                    <span class="details">Blood Group</span>

                                    <select name="bloodGroup" id="bloodGroup">
                                        <option data-display="Select">Nothing</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                    
                                </div>
                            </div>


                            <h5 class="v-info">Vehicle Information</h5>
                            <div class="row">
                                <div class="input__box col-md-6">
                                    <span class="details">Select City</span>
                                    <!-- <select>
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Dhaka</option>
                                        <option value="2">Chittagong</option>
                                        <option value="3">Sylhet</option>
                                        <option value="4">Khulna</option>
                                    </select> -->
                                    <input id="city" type="text" name="city"  required>
                                </div>

                                <!-- Vehicle -->
                                <div class="input__box col-md-6" >
                                    <span class="details">Select Vehicle</span>
                                    <!-- <select>
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Car</option>
                                        <option value="2">Bike</option>
                                        <option value="3">CNG</option>
                                        <option value="4">Pickup</option>
                                        <option value="5">Truck</option>
                                    </select> -->
                                    <input id="vehicle" type="text" name="vehicle"  required>
                                </div>
                                <div class="input__box col-md-6">
                                    <span class="details">Driving License</span>
                                    <input id="drivingLicense" type="text" name="drivingLicense" required>
                                </div>
                                
                            </div>

                            <h5 class="v-info">Vehicle Registration</h5>
                            <div class="row">
                                <div class="input__box col-md-4" >
                                    <span class="details">City Name</span>
                                    <!-- <select>
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">DHK METRO</option>
                                        <option value="2">CTG METRO</option>
                                        <option value="3">SYL METRO</option>
                                        <option value="4">KHL METRO</option>
                                    </select> -->
                                    <input id="cityName" type="text" name="cityName" required>
                                </div>
                                <div class="input__box col-md-3">
                                    <span class="details">Vehicle Category</span>
                                    <!-- <select>
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Ka</option>
                                        <option value="2">Kha</option>
                                        <option value="3">Ga</option>
                                        <option value="4">Gha</option>
                                        <option value="5">Ch</option>
                                        <option value="6">Cha</option>
                                        <option value="7">Ja</option>
                                        <option value="8">Jha</option>
                                        <option value="9">Ta</option>
                                        <option value="10">Tha</option>
                                        <option value="11">Da</option>
                                        <option value="12">No</option>
                                        <option value="13">Po</option>
                                        <option value="14">Vo</option>
                                        <option value="15">Mo</option>
                                        <option value="16">Da</option>
                                        <option value="17">Th</option>
                                        <option value="18">Ha</option>
                                        <option value="19">La</option>
                                        <option value="20">E</option>
                                        <option value="21">Za</option>
                                    </select> -->
                                    <input id="category" type="text" name="category" required>
                                </div>
                                <div class="input__box col-md-5" >
                                    <span class="details">Vehicle Number</span>
                                    <input id="number" type="text" name="number" placeholder="00-0000" required>
                                </div>
                            </div>
                       

                        <h5 class="v-info"> User Ref Code</h5>
                        <div class="row text-center">
                            <div class="input__box col-md-12">
                                <span class="details">User Ref Code</span>
                                <input type="text"  maxlength="7" placeholder="00-0000" >
                            </div>
                            
                            
                        </div>

                        </div>


                        <div class="button text-center">
                            <input type="submit" class="fire mb-2" value="Register">
                            <div>Already have an account? <a href="{{ route('login') }}" style="color: #fbc72a;">Login</a></div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </section>


    <!------javascript-->
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/jquery.nice-select.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/6cc80f95ec.js" crossorigin="anonymous"></script>
    <script src="js/main.js" crossorigin="anonymous"></script>


    <script>
        (document).ready(function() {
            $('select').niceSelect();
        });
    </script>
</body>

</html>