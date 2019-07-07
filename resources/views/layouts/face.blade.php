<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devilshunt</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUIyJ" crossorigin="anonymous">
    <link href="{{ asset('css/face.css') }}" rel="stylesheet">

</head>
<body class="face">
    <div class="face-wrapper">
        <header class="face-header">
            <div class="container">
                <div class="header-section">
                    <div class="logo">
                        <a href="#">
                            <img src="/img/logo.png" alt="Devilshunt">
                        </a>
                    </div>
                    <nav class="header-navigation">
                        <div class="main-nav">
                            <ul class="top-nav">
                                <li class="menu-item">
                                    <a href="/" class="menu-link active">Home</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link">About</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link">Contact</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link">Login</a>
                                </li>
                                
                                <li class="menu-item">
                                    <a href="javascript:void(0);" class="menu-link join-us">Join Us</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
       @yield('content')

    </div>
    
    <div class="face-model" id="face-model">
        <div class="wrap-model">
            <div class="head-model">
                <span>Take a Part</span>
                <span class="close">x</span>
            </div>
            <div class="body-model">
                <div class="model-content">
                    <form action="/join-us" method="post">
                        @csrf
                        <div class="part-6">
                            <div class="frm-group">
                                <label>Name</label>
                                <input type="text" class="frm-control" name="name" required/>
                            </div>

                            <div class="frm-group">
                                <label>Email</label>
                                <input type="email" class="frm-control" name="email"  required/>
                            </div>

                            <div class="frm-group">
                                <label>Language</label>
                                <input type="text" class="frm-control" name="language" />
                            </div>

                            <div class="frm-group">
                                <label>DOB</label>
                                <input type="text" class="frm-control" name="dob" placeholder="YYYY-MM-DD" />
                            </div>

                            <div class="frm-group">
                                <label>Qualification</label>
                                <input type="text" class="frm-control" name="qualification" />
                            </div>

                            <div class="frm-group">
                                <label>Martial Status</label>
                                <select class="frm-control" name="martial">
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="frm-group">
                                <label>Dance Category</label>
                                <input type="radio" name="dance_category" value="classical" />
                                <span>Classical</span>
                                <input type="radio" name="dance_category" value="western" />
                                <span>Western Bollywood</span>
                                <br/>
                                <input type="radio" name="dance_category" value="folk" />
                                <span>Folk</span>
                            </div>

                            <div class="frm-group">
                                <label>Song on which you are performing</label>
                                <textarea class="frm-control" name="song_performing"></textarea>
                            </div>

                        </div>

                        <div class="part-6">

                            <div class="frm-group">
                                <label>Gender</label>
                                <select class="frm-control" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="frm-group">
                                <label>WhatsApp</label>
                                <input type="text" required class="frm-control" name="wpnumber" />
                            </div>

                            <div class="frm-group">
                                <label>Height</label>
                                <input type="text" class="frm-control" name="height" />
                            </div>

                            <div class="frm-group">
                                <label>Age Group</label>
                                <input type="radio" name="age_group" value="0-5" />
                                <span>0-5 Years</span>
                                <input type="radio" name="age_group" value="6-10" />
                                <span>6-10 Years</span>
                                <br/>
                                <input type="radio" name="age_group" value="11-15" />
                                <span>11-15 Years</span>
                                <input type="radio" name="age_group" value="16+" />
                                <span>16+ Years</span>
                            </div>

                            <div class="frm-group">
                                <label>Address</label>
                                <textarea class="frm-control" name="address"></textarea>
                            </div>

                            <div class="frm-group">
                                <label>How you know about us?</label>
                                <textarea class="frm-control" name="how_you_know"></textarea>
                            </div>

                            <div class="frm-group">
                                <button type="submit" class="submit-btn" >Submit</button>
                            </div>


                        </div>
                    
                    </form>
                
                </div>
            </div>
        </div>
    
    </div>


    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>



<script>
$(document).ready(function(){

$('.close').on('click', function(){

    $('#face-model').hide();

});


$('.join-us').on('click', function(){

    $('#face-model').show();

})


})

</script>
    
</body>
</html>