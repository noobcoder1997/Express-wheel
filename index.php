<!DOCTYPE html>
<HTML> 
<head> 
<TITLE>Express Wheel</TITLE>  
<link rel="icon" href="assets/image/eMove.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="lib/font-awesome-5/css/all.css">
<script src="lib/jquery/jquery-1.11.3.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<?php
    include "components/comp-conn.php"; 
    // session_start();
    
    if(isset($_SESSION['user_status'])){
        header('location: pages-user/index.php');
    }
    else if(isset($_SESSION['admin_status'])){
        header('location: pages-admin/index.php');
    }
    else if(isset($_SESSION['sup_admin_status'])){
        header('location: pages-sup-admin/index.php');
    }
?>
</head>
 <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
    font-family: 'century gothic';
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #414c50;
    color: #192428;
    padding: 40px 25px;
    padding-top:70px;
    font-family: Montserrat, sans-serif; 
    
  }
  .container-fluid {
    padding: 40px 50px;
  }
  .bg-grey {
    background-color: #414c50;
    color: #39ace7;
  }
  .logo-small {
    color: #192428;
    font-size: 50px;
  }
  .logo {
    color: darkgreen;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .prod:hover{
     border:2px solid grey;
      cursor: pointer;
      transition-duration: .5s;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: darkgreen;
  }
  .carousel-indicators li {
    border-color: darkgreen;
  }
  .carousel-indicators li.active {
    background-color: darkgreen;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid darkgreen; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid darkgreen;
    background-color: #fff !important;
    color: darkgreen;
  }
  .panel-heading {
    color: #fff !important;
    background-color:darkgreen !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color:darkgreen;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #192428;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #192428 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 10px;
    color: #192428;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  } 
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  
 .cat-btn{
     background-color: white;
 }
.cat-btn:hover{ 
    border:1px solid black;
    background-color: lightgreen;
    cursor: pointer;
    transition-duration: 1s;
    
} 
.btn-block{
    width: 100%;
}
.btn:hover, .btn:active{
    transform: scale(1.03);
}
.btn{
    font-weight: bold;
}
#inv-div{
  display: none;
}
.btn-c-pass{
  display: none;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">
          <table>
              <tr>
                  <td> 
                    <img src='assets/image/eMove.png' style=' height:25px; border-radius:50%;' /> 
                     
                  </td>
                  <td style='color:white;font-weight:bold;'>&nbsp;Express Wheel</td>
              </tr>
          </table>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class='fa fa-sign-in-alt fa-fw' ></span> SIGN IN</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal1"><span class='fa fa-edit fa-fw fa-fw' ></span> REGISTER</a></li>  
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
    <br />
    <br />
    <div class='row'>
        <div class='col-sm-6' >   
        <img src='assets/image/eMove.png' style='height:100px; border-radius:50%;margin-top:-30px;' />
        <strong style='font-size:45px;color:#39ace7'>Express&nbsp;Wheel</strong> 
        </div>
        <div class='col-sm-6'> 
            <div class='row' style='font-size:2em; font-family: "Comic Sans MS"; color: white '>
                <div class='col-sm-12'> 
                Connecting communities, delivering convenience
                </div> 
            </div>
        </div>
    </div> 
</div>   
<!-- forgot password modal -->
<div id="forgot-pass" class="modal fade" role="dialog" style='z-index:999999'>
    <div class="modal-dialog  modal-md"  >  
        <!-- <form onsubmit='return createPass();'> -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style='font-weight:bold; color:#192428'>
                        <img src='assets/image/eMove.png' style='height:40px; border-radius:50%;' />
                        Express wheel | Forgot Password
                    </h4>
                </div>
                <div class="modal-body">  
                    <div class='row'>
                        <div class='col-sm-3' > 
                            <center>
                                <br />
                                <img src='assets/image/user.png' style='height:100px; border-radius:50%;' />
                            </center>
                        </div>
                        <div class='col-sm-9' style="display: flex; flex-direction: column; justify-content: center; height: 100%;">
                          <div id="inv-user">
                            <strong>Username</strong>
                            <br />
                            <div class='input-group'>
                              <span class='input-group-addon'><i class='fa fa-user'></i></span>
                              <input type='tex' id='_user' class='form-control input-md' placeholder='Username' required />
                            </div>
                          </div> 
                          
                          <div id="inv-div" style="margin-top: 15px;">
                            <strong>New Password</strong>
                            <br />
                            <div class='input-group'>
                              <span class='input-group-addon'><i class='fa fa-lock'></i></span>
                              <input type='password' id='npass' class='form-control input-md pass0' placeholder='New Password' required />
                            </div>
                            <strong>Confirm Password</strong>
                            <br />
                            <div class='input-group'>
                              <span class='input-group-addon'><i class='fa fa-lock'></i></span>
                              <input type='password' id='cpass' class='form-control input-md pass0' placeholder='Confirm Password' required />
                            </div>
                            <input type='checkbox' onclick='showPassword(2)'>&nbsp;Show password
                          </div>
 
                          <span id='createPass' style="padding-top:10px"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-block btn-submit" onclick="check_user()">Submit</button>
                    <button type="button" class="btn btn-success btn-block btn-c-pass">Change Password</button>
                    <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                </div>
            </div>
        <!-- </form> -->
    </div>
</div>

<script>
  $('#forgot-pass').on('hidden.bs.modal', ()=>{
    $('#createPass').html('');
    $('#_user').val('');
    $('#inv-div').css('display', 'none');
    $('#inv-user').css('display', 'block');
  });

  function hideElements(){

    $('#inv-div').css('display', 'block');
    $('#inv-user').css('display', 'none');
    $('.btn-submit').css('display', 'none')
    $('.btn-c-pass').css('display', 'block');
    $('#npass').val('').attr('placeholder', 'Enter your new password');
    $('#cpass').attr('placeholder', 'Confirm your new password');
  }

  function check_user(){

    $.ajax(
      {
        data:{'usernim': $('#_user').val()},
        url: "query/check-unim.php",
        method: 'post',
      }
    ).done( (data) => {

      if(data != 1){

         $('#createPass').html(data);
      }
      else{
        hideElements();
      }
    });
  }
</script>


<!-- Sign in modal -->
<div id="myModal" class="modal fade" role="dialog" style='z-index:999999'>
    <div class="modal-dialog  modal-md"  >  
        <form onsubmit='return login();'>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style='font-weight:bold; color:#192428'>
                        <img src='assets/image/eMove.png' style='height:40px; border-radius:50%;' />
                        Express wheel | Sign In
                    </h4>
                </div>
                <div class="modal-body">  
                    <div class='row'>
                        <div class='col-sm-3' > 
                            <center>
                                <br />
                                <img src='assets/image/user.png' style='height:100px; border-radius:50%;' />
                            </center>
                        </div>
                        <div class='col-sm-9'> 
                            <strong>Username</strong>
                            <br />
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-user'></i></span>
                                <input type='tex' id='user' class='form-control input-md' placeholder='Username' required />
                            </div>
                            <strong>Password</strong>
                            <br />
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-lock'></i></span>
                                <input type='password' id='pass' class='form-control input-md pass0' placeholder='Password' required />
                            </div>
                            <input type='checkbox' onclick='showPassword(0)'>&nbsp;Show password
                            <br /> 
                            Create  <a href='#' data-dismiss="modal" data-toggle="modal" data-target="#myModal1"><strong>new account.</strong></a>
                            Forgot <a href='#forgot-pass' data-toggle="modal" onclick="$('#myModal').modal('toggle');"><strong>Password?</strong></a>
                            <span id='resLogin'></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-block"  >Sign in</button>
                    <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function login(){
        form_data = new  FormData(); 
        form_data.append("user",$("#user").val());
        form_data.append("pass",$("#pass").val()); 
        $.ajax({
                url: "query/login-validation.php",
                method: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function(){
                },
                success: function(data){ 
                    $("#resLogin").html(data);
                }
            });
        return false;
    }
</script>

<!-- Register modal -->
<div id="myModal1" class="modal fade" role="dialog" style='z-index:999999'>
    <div class="modal-dialog  modal-lg"  >  
        <form onsubmit='return userRegistration();'>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style='font-weight:bold; color:#192428'>
                        <img src='assets/image/eMove.png' style='height:40px; border-radius:50%;' />
                        Express wheel | Registration 
                    </h4>
                </div>
                <div class="modal-body" >  
                    <div class='row'>
                        <div class='col-sm-4' style='text-align:left'>
                            <strong>Last Name</strong>
                            <input type='text' id='ln' class='form-control input-md' placeholder='Last name' required /> 
                        </div>
                        <div class='col-sm-4' style='text-align:left'>
                            <strong>First Name</strong>
                            <input type='text' id='fn' class='form-control input-md' placeholder='First name' required /> 
                        </div>
                        <div class='col-sm-4'>
                            <strong>Middle Name</strong>
                            <input type='text' id='mn' class='form-control input-md' placeholder='Middle name' /> 
                        </div>
                    </div>
                    <div class='row'> 
                        <div class='col-sm-2' style='text-align:left'>
                            <strong>Sex</strong>
                            <select  id='sex' class='form-control input-md' > 
                                <option value='Male'>Male</option>
                                <option value='Female'>Female</option> 
                            </select>
                        </div>
                        <div class='col-sm-3'>
                            <strong>Date of Birth</strong>
                            <input type='date' id='bday' class='form-control input-md'  required /> 
                        </div>
                        <div class='col-sm-3'>
                            <strong>Cellphone No.</strong>
                            <input type='text' id='cpNo' class='form-control input-md'placeholder='Cellphone Number' required /> 
                        </div>
                        <div class='col-sm-4'>
                            <strong>Email Address</strong>
                            <input type='email' id='email' class='form-control input-md'placeholder='Email Address' required /> 
                        </div>
                    </div>
                    <div class='row'> 
                        <div class='col-sm-4' style='text-align:left'>
                            <strong>Municipality</strong>
                            <select  id='muni' class='form-control input-md' onchange='loadBarangay();' required > 
                                <option value=''>Select</option>
                            </select>
                        </div>
                        <div class='col-sm-4' style='text-align:left'>
                            <strong>Barangay</strong>
                            <select  id='brgy' class='form-control input-md' required > 
                                <option></option>
                            </select>
                        </div>
                        <div class='col-sm-4' style='text-align:left'>
                            <strong>Houshold No.</strong>
                            <input type='text' id='hh' class='form-control input-md' placeholder='Household' required /> 
                        </div>
                        <div class='col-sm-4' style='text-align:left'>
                            <strong>Purok</strong>
                            <input type='text' id='prk' class='form-control input-md' placeholder='Purok' required/> 
                        </div>
                        <div class='col-sm-2' style='text-align:left'>
                            <strong>Zip Code</strong>
                            <input type='text' id='zip' class='form-control input-md' placeholder='Zip Code' required /> 
                        </div>
                        <div class='col-sm-6' style='text-align:left'>
                            <strong>Landmark</strong>
                            <input type='text' id='lndMrk' class='form-control input-md' placeholder='Landmark or signage that will help us to locate your address.' /> 
                        </div> 
                    </div>
                    <div class='row'>
                        <div class='col-sm-4'>
                            <strong>Username</strong>
                            <br />
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-user'></i></span>
                                <input type='text' id='reguser' class='form-control input-md' placeholder='Username' required />
                            </div>
                        </div>
                        <div class='col-sm-4'> 
                            <strong>Password</strong>
                            <br />
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-lock'></i></span>
                                <input type='password' id='regpass' class='form-control input-md pass1' placeholder='Password' required onkeyup='checkPasswordMatch();' />
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <strong>Retype Password</strong>
                            <br />
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-lock'></i></span>
                                <input type='password' id='repass' class='form-control input-md' placeholder='Retype Password'  onkeyup='checkPasswordMatch();'  />
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-8 col-sm-offset-4' ><input type='checkbox' onclick='showPassword(1)'>&nbsp;Show password</div>
                    </div> 
                    <div class='row'>
                        <div class='col-sm-8 col-sm-offset-4' style='display:none; color:red' id='passwordMatch' >Please make sure your password is correctly type.</div>
                    </div> 
                    <div class='row'>
                        <div class='col-sm-12' id='' >
                            <input type='checkbox' onclick='checkAgree();' /> By clicking this you are agreeing to the <a href='#term'  onclick="$('#myModal1').modal('toggle')">Terms and Conditions of Use for Express wheel. </a>
                            <span id='agree' style='color:red; display:none'>Please make sure to check this to proceed.</span>
                        </div>
                    </div> 
                   
                    <span id='resReg'></span>
                </div>
                <div class="modal-footer"> 
                    <button type="submit" class="btn btn-success btn-block" id="submit-registration-btn" >Submit Registration</button>
                    <button type="button" class="btn btn-default btn-block" id="close-registration-btn" data-dismiss="modal">Close</button>
                    <p style="text-align:center">Already have an account?  <a href='#' data-dismiss="modal" data-toggle="modal" data-target="#myModal" ><strong>Sign in</strong></a></p>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    var MUNICIPALITY = [ "Anahawan", "Bontoc", "Hinunangan", "Hinundayan", "Libagon", "Liloan", "Limasawa", "Maasin", "Macrohon", "Malitbog", "Padre Burgos", "Pintuyan", "Saint Bernard", "San Francisco", "San Juan", "San Ricardo", "Silago", "Sogod", "Tomas Oppus"];
    var BARANGAY = [['Amagusan', 'Calintaan', 'Canlabian', 'Capacuhan', 'Cogon', 'Kagingkingan', 'Lewing', 'Lo-ok', 'Mahalo', 'Mainit', 'Manigawong', 'Poblacion', 'San Vicente', 'Tagup-on'], ['Anahao', 'Banahao', 'Baugo', 'Beniton', 'Buenavista', 'Bunga', 'Casao', 'Catmon', 'Catoogan', 'Cawayanan', 'Dao', 'Divisoria', 'Esperanza', 'Guinsangaan', 'Hibagwan', 'Hilaan', 'Himakilo', 'Hitawos', 'Lanao', 'Lawgawan', 'Mahayahay', 'Malbago', 'Mauylab', 'Olisihan', 'Paku', 'Pamahawan', 'Pamigsian', 'Pangi', 'Poblacion', 'Pong-on', 'Sampongon', 'San Ramon', 'San Vicente', 'Santa Cruz', 'Santo Niño', 'Taa', 'Talisay', 'Taytagan', 'Tuburan', 'Union'], ['Ambacon', 'Badiangon', 'Bangcas A', 'Bangcas B', 'Biasong', 'Bugho', 'Calag-itan', 'Calayugan', 'Calinao', 'Canipaan', 'Catublian', 'Ilaya', 'Ingan', 'Labrador', 'Libas', 'Lumbog', 'Manalog', 'Manlico', 'Matin-ao', 'Nava', 'Nueva Esperanza', 'Otama', 'Palongpong', 'Panalaron', 'Patong', 'Poblacion', 'Pondol', 'Salog', 'Salvacion', 'San Pablo Island', 'San Pedro Island', 'Santo Niño I', 'Santo Niño II', 'Tahusan', 'Talisay', 'Tawog', 'Toptop', 'Tuburan', 'Union', 'Upper Bantawon'], ['Amaga', 'Ambao', 'An-an', 'Baculod', 'Biasong', 'Bugho', 'Cabulisan', 'Cat-iwing', 'District I', 'District II', 'District III', 'Hubasan', 'Lungsodaan', 'Navalita', 'Plaridel', 'Sabang', 'Sagbok'], ['Biasong', 'Bogasong', 'Cawayan', 'Gakat', 'Jubas', 'Magkasag', 'Mayuga', 'Nahaong', 'Nahulid', 'Otikon', 'Pangi', 'Punta', 'Talisay', 'Tigbao'], ['Amaga', 'Anilao', 'Bahay', 'Cagbungalon', 'Calian', 'Caligangan', 'Candayuman', 'Catig', 'Estela', 'Fatima', 'Gud-an', 'Guintoylan', 'Himayangan', 'Ilag', 'Magaupas', 'Malangsa', 'Molopolo', 'Pandan', 'Poblacion', 'Pres. Quezon', 'President Roxas', 'San Isidro', 'San Roque', 'Tabugon'], ['Cabulihan', 'Lugsongan', 'Magallanes', 'San Agustin', 'San Bernardo', 'Triana',], ['Abgao', 'Acasia', 'Asuncion', 'Bactul I', 'Bactul II', 'Badiang', 'Bagtican', 'Basak', 'Bato I', 'Bato II', 'Batuan', 'Baugo', 'Bilibol', 'Bogo', 'Cabadiangan', 'Cabulihan', 'Cagnituan', 'Cambooc', 'Cansirong', 'Canturing', 'Canyuom', 'Combado', 'Dongon', 'Gawisan', 'Guadalupe', 'Hanginan', 'Hantag', 'Hinapu Daku', 'Hinapu Gamay', 'Ibarra', 'Isagani', 'Laboon', 'Lanao', 'Lib-og', 'Libertad', 'Libhu', 'Lonoy', 'Lunas', 'Mahayahay', 'Malapoc Norte', 'Malapoc Sur', 'Mambajao', 'Manhilo', 'Mantahan', 'Maria Clara', 'Matin-ao', 'Nasaug', 'Nati', 'Nonok Norte', 'Nonok Sur', 'Panan-awan', 'Pansaan', 'Pasay', 'Pinascohan', 'Rizal', 'San Agustin', 'San Isidro', 'San Jose', 'San Rafael', 'Santa Cruz', 'Santa Rosa', 'Santo Niño', 'Santo Rosario', 'Soro-soro', 'Tagnipa', 'Tam-is', 'Tawid', 'Tigbawan', 'Tomoy-tomoy', 'Tunga-tunga'], ['Aguinaldo', 'Amparo', 'Asuncion', 'Bagong Silang', 'Buscayan', 'Cambaro', 'Canlusay', 'Danao', 'Flordeliz', 'Guadalupe', 'Ichon', 'Ilihan', 'Laray', 'Lower Villa Jacinta', 'Mabini', 'Mohon', 'Molopolo', 'Rizal', 'Salvador', 'San Isidro', 'San Joaquin', 'San Roque', 'San Vicente', 'San Vicente Poblacion', 'Santa Cruz', 'Santo Niño', 'Santo Rosario', 'Sindangan', 'Upper Ichon', 'Upper Villa Jacinta'], ['Abgao', 'Asuncion', 'Aurora', 'Benit', 'Caaga', 'Cabul-anonan', 'Cadaruhan', 'Cadaruhan Sur', 'Candatag', 'Cantamuac', 'Caraatan', 'Concepcion', 'Fatima', 'Guinabonan', 'Iba', 'Juangon', 'Kauswagan', 'Lambonao', 'Mahayahay', 'Maningning', 'Maujo', 'New Katipunan', 'Pancil', 'Pasil', 'Sabang', 'San Antonio', 'San Isidro', 'San Jose', 'San Roque', 'San Vicente', 'Sangahon', 'Santa Cruz', 'Santo Niño', 'Taliwa', 'Tigbawan I', 'Tigbawan II', 'Timba'], ['Buenavista', 'Bunga', 'Cantutang', 'Dinahugan', 'Laca', 'Lungsodaan', 'Poblacion', 'San Juan', 'Santa Sofia', 'Santo Rosario', 'Tangkaan'], ['Badiang', 'Balongbalong', 'Buenavista', 'Bulawan', 'Canlawis', 'Catbawan', 'Caubang', 'Cogon', 'Dan-an', 'Lobo', 'Mainit', 'Manglit', 'Nueva Estrella Norte', 'Nueva Estrella Sur', 'Poblacion Ibabao', 'Poblacion Ubos', 'Pociano D. Equipilag', 'Ponod', 'San Roque', 'Santa Cruz', 'Son-ok I', 'Son-ok II', 'Tautag'], ['Atuyan', 'Ayahag', 'Bantawon', 'Bolodbolod', 'Cabagawan', 'Carnaga', 'Catmon', 'Guinsaugon', 'Himatagon', 'Himbangan', 'Himos-onan', 'Hinabian', 'Hindag-an', 'Kauswagan', 'Libas', 'Lipanto', 'Magatas', 'Magbagacay', 'Mahayag', 'Mahayahay', 'Malibago', 'Malinao', 'Nueva Esperanza', 'Panian', 'San Isidro', 'Santa Cruz', 'Sug-angon', 'Tabontabon', 'Tambis I', 'Tambis II',], ['Anislagon', 'Bongawisan', 'Bongbong', 'Cahayag', 'Causi', 'Central', 'Dakit', 'Gabi', 'Habay', 'Malico', 'Marayag', 'Napantao', 'Pasanon', 'Pinamudlan', 'Punta', 'Santa Cruz', 'Santa Paz Norte', 'Santa Paz Sur', 'Sudmon', 'Tinaan', 'Tuno', 'Ubos'], ['Agay-ay', 'Basak', 'Bobon A', 'Bobon B', 'Dayanog', 'Garrido', 'Minoyho', 'Osao', 'Pong-oy', 'San Jose', 'San Roque', 'San Vicente', 'Santa Cruz', 'Santa Filomena', 'Santo Niño', 'Somoje', 'Sua', 'Timba'], ['Benit', 'Bitoon', 'Cabutan', 'Camang', 'Esperanza', 'Esperanza Dos', 'Inolinan', 'Kinachawa', 'Looc', 'Pinut-an', 'Poblacion', 'San Antonio', 'San Ramon', 'Saub', 'Timba'], ['Balagawan', 'Catmon', 'Hingatungan', 'Imelda', 'Katipunan', 'Laguma', 'Mercedes', 'Poblacion District I', 'Poblacion District II', 'Puntana', 'Salvacion', 'Sap-ang', 'Sudmon', 'Tuba-on', 'Tubod'], ['Benit', 'Buac Daku', 'Buac Gamay', 'Cabadbaran', 'Concepcion', 'Consolacion', 'Dagsa', 'Hibod-hibod', 'Hindangan', 'Hipantag', 'Javier', 'Kahupian', 'Kanangkaan', 'Kauswagan', 'La Purisima Concepcion', 'Libas', 'Lum-an', 'Mabicay', 'Mac', 'Magatas', 'Mahayahay', 'Malinao', 'Maria Plana', 'Milagroso', 'Olisihan', 'Pancho Villa', 'Pandan', 'Rizal', 'Salvacion', 'San Francisco Mabuhay', 'San Isidro', 'San Jose', 'San Juan', 'San Miguel', 'San Pedro', 'San Roque', 'San Vicente', 'Santa Maria', 'Suba', 'Tampoong', 'Zone I', 'Zone II', 'Zone III', 'Zone IV', 'Zone V'], ['Anahawan', 'Banday', 'Biasong', 'Bogo', 'Cabascan', 'Camansi', 'Cambite', 'Canlupao', 'Carnaga', 'Cawayan', 'Higosoan', 'Hinagtikan', 'Hinapo', 'Hugpa', 'Iniguihan Poblacion', 'Looc', 'Luan', 'Maanyag', 'Mag-ata', 'Mapgap', 'Maslog', 'Ponong', 'Rizal', 'San Agustin', 'San Antonio', 'San Isidro', 'San Miguel', 'San Roque', 'Tinago'] ];
</script>
<script>

  var agreeToTerms    = false;
  var passwordMatched = false;

  function userRegistration(){ 
      $("#agree").hide();
      if(!passwordMatched){
          alert("Please make sure your password are matched.");
      }else if(!agreeToTerms){ 
          $("#agree").show();
      }else{
          form_data = new  FormData(); 
          form_data.append("ln",$("#ln").val());
          form_data.append("fn",$("#fn").val()); 
          form_data.append("mn",$("#mn").val()); 
          form_data.append("sex",$("#sex").val()); 
          form_data.append("bday",$("#bday").val()); 
          form_data.append("cpNo",$("#cpNo").val()); 
          form_data.append("email",$("#email").val()); 
          form_data.append("muni",$("#muni").val()); 
          form_data.append("brgy",$("#brgy").val()); 
          form_data.append("prk",$("#prk").val()); 
          form_data.append("hh",$("#hh").val()); 
          form_data.append("zip",$("#zip").val()); 
          form_data.append("lndMrk",$("#lndMrk").val());  
          form_data.append("user",$("#reguser").val()); 
          form_data.append("pass",$("#regpass").val()); 
          ajax=$.ajax({
              url: "query/user-registration.php",
              method: "POST",
              data: form_data,
              contentType: false,
              cache: false,
              processData: false,
              beforeSend: function(){
              },
              success: function(data){ 
                  $("#resReg").html(data)
              }
          });
      }
      return false;
  }

  function checkAgree(){
      agreeToTerms = agreeToTerms?false: true;
  }
  function showPassword(n){
      if(n==0){ 
          var x = document.getElementById("pass");
          if (x.type === "password") {
              x.type = "text"; 
          } else {
              x.type = "password"; 
          }
      }
      else if(n==1){
        var x = document.getElementById("repass");
        var y = document.getElementById("regpass");
        if (x.type === "password") {
            x.type = "text"; 
            y.type = "text"; 
        } else {
            x.type = "password"; 
            y.type = "password"; 
        }
      }
      else{
          var x = document.getElementById("npass");
          var y = document.getElementById("cpass");
          if (x.type === "password") {
              x.type = "text"; 
              y.type = "text"; 
          } else {
              x.type = "password"; 
              y.type = "password"; 
          }
      }
      
    
  }
  for(var m in MUNICIPALITY){ 
      $('#muni')
      .append('<option value="'+MUNICIPALITY[m]+'" >'+MUNICIPALITY[m]+'</option>')  
  }
  function loadBarangay(){
      var muni = $("#muni").val();
      var indexMuni = MUNICIPALITY.indexOf(muni);
      if(indexMuni>=0){
          $('#brgy')
              .find('option')
              .remove()
              .end()
          for(var b in BARANGAY[indexMuni]){ 
              $('#brgy').append('<option value="'+BARANGAY[indexMuni][b]+'" >'+BARANGAY[indexMuni][b]+'</option>')  
          }
      }
  }
  function checkPasswordMatch(){
      var pass = $("#regpass").val();
      var repass = $("#repass").val();
      if(pass != ""  && repass != ""){
          if(pass==repass){
              passwordMatched = true;
              $("#passwordMatch").slideUp();
          }else{
              passwordMatched = false;
              $("#passwordMatch").slideDown(); 
          }
      }else{
          passwordMatched = false;
      }
      console.log(passwordMatched)
  }
</script>
   

<!--TERMS AND CONDITION -->

<div id="term" class="container-fluid">
  <h4>TERMS AND CONDITION</h4>
  <h4>Welcome to <strong>Express wheel</strong>, your trusted platform for seamless delivery and ride-hailing services. Before you proceed, please take a moment to read the following terms and conditions carefully. By accessing or using <strong>Express wheel</strong>, you agree to be bound by these terms and conditions.</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4" style='text-align:justify'>
        <center> 
            <span class="fa fa-user logo-small"></span>
            <br />
            <span style='font-size:25px;font-weight:bold'>Account Registration and Use</span>
        </center>
      <ul>
          <li>
              You must create an account to use certain features of <strong>Express wheel</strong>. You agree to provide accurate, current, and complete information during the registration process and to update such information to keep it accurate, current, and complete.
          </li>
          <li>
              You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. Notify us immediately of any unauthorized use of your account.
          </li>
      </ul>
    </div> 
    <div class="col-sm-4" style='text-align:justify'>
        <center> 
            <span class="fas fa-dolly-flatbed logo-small"></span>
            <br />
            <span style='font-size:25px;font-weight:bold'>Delivery and Hailing Services</span>
        </center>
      <ul>
          <li>
              <strong>Express wheel</strong> facilitates transactions between users for delivery and ride-hailing services. We do not directly participate in the transactions between users and do not own or operate the vehicles or goods involved.
          </li>
          <li>
              As a rider or sender, you agree to pay for services booked through the platform in accordance with the terms agreed upon with the service provider.
          </li>
          <li>
              As a driver or courier, you agree to provide accurate information about your services, honor bookings, and promptly fulfill requests once accepted.
          </li>
      </ul>
    </div> 
    <div class="col-sm-4" style='text-align:justify'>
        <center> 
            <span class="far fa-comments logo-small"></span>
            <br />
            <span style='font-size:25px;font-weight:bold'>Communication</span>
        </center>
      <ul>
          <li>
                <strong>Express wheel</strong> may provide communication tools (e.g., messaging) to facilitate interactions between buyers and sellers. You agree to use these tools responsibly and in accordance with applicable laws and regulations.
          </li>
          <li>
                We reserve the right to monitor communications for compliance with our policies.
          </li> 
      </ul>
    </div>
     
    </div>
    <div class='row slideanim'>
    
    <div class="col-sm-4" style='text-align:justify'>
        <center> 
            <span class="fas fa-book logo-small"></span>
            <br />
            <span style='font-size:25px;font-weight:bold'>Privacy and Data Security</span>
        </center>
      <ul>
          <li>
                Your privacy is important to us. Please review our Privacy Policy to understand how we collect, use, and disclose information about you.
          </li>
          <li>
               We implement reasonable security measures to protect your information; however, we cannot guarantee the security of your data.
          </li> 
      </ul>
    </div>
    
    <div class="col-sm-4" style='text-align:justify'>
        <center> 
            <span class="fas fa-ban logo-small"></span>
            <br />
            <span style='font-size:25px;font-weight:bold'>Termination and Suspension</span>
        </center>
      <ul>
          <li>
                We reserve the right to terminate or suspend your account and access to <strong>Express wheel</strong> at our discretion, without prior notice, for any reason, including but not limited to violation of these terms and conditions..
          </li>
          <li>
               Upon termination, you must cease all use of the platform and may lose access to any data associated with your account.
          </li> 
      </ul>
    </div> 
    <div class="col-sm-4" style='text-align:justify'>
        <center> 
            <span class="fas fa-file-signature logo-small"></span>
            <br />
            <span style='font-size:25px;font-weight:bold'>Changes to Terms</span>
        </center>
      <ul>
          <li>
                <strong>Express wheel</strong> may revise these terms and conditions at any time by updating this page. It is your responsibility to review these terms periodically for changes.
          </li>
          <li>
                Your continued use of e-Baligya following the posting of changes constitutes acceptance of those changes.
          </li> 
      </ul>
    </div>
    
  </div>
  
    <div class='row slideanim'>
    
    <div class="col-sm-4" style='text-align:justify'>
        <center> 
            <span class="fas fa-user-shield logo-small"></span>
            <br />
            <span style='font-size:25px;font-weight:bold'>Governing Law and Dispute Resolutiony</span>
        </center>
      <ul>
          <li>
                These terms and conditions are governed by the laws of Philippines. Any dispute arising out of or relating to these terms shall be resolved exclusively in the courts of Philippines.
          </li> 
      </ul>
    </div>
    
    <div class="col-sm-4" style='text-align:justify'>
        <center> 
            <span class="fa fa-phone logo-small"></span>
            <br />
            <span style='font-size:25px;font-weight:bold'>Termination and Suspension</span>
        </center>
      <ul>
          <li>
                If you have any questions about these terms and conditions, please <a href='#contact'>contact us.</a>
          </li> 
      </ul>
    </div> 
    
  </div>
  
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center" style='color:#0784b5'>COSTUMER SERVICES</h2>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <p><strong>Please contact us</strong></p>
        <p><span class="fa fa-home fa-fw"></span>&nbsp;Business and Management Department</p>
        <p><span class="fa fa-university fa-fw"></span>&nbsp;Southern Leyte State University-San Juan Campus</p>
        <p><span class="fa fa-map-marker-alt fa-fw"></span>&nbsp;San Jose, San Juan, Southern Leyte</p> 
        <p><span class="fa fa-envelope fa-fw"></span>&nbsp;<a type="button" style="color:#39ace7;" href="mailto:dbma_sj@southernleytestateu.com">dbma_sj@southernleytestateu.com</a></p>
        <p><span class="fab fa-facebook-f fa-fw"></span>&nbsp;<a type="button" style="color:#39ace7;" href="https://www.facebook.com/share/1A6MopfwGS">Express Wheel</a></p>
    </div> 
  </div>
</div> 

<footer class="container-fluid text-center" style='background-color:#0784b5'>
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a> 
</footer>

<script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
    
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
  })
</script>

</body>
</html>