 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style type="text/css">
        footer{
            /* border: 2px solid black; */
            padding-top:5px;
        }
        /* .footer_container{
           
        } */
        /* .text{
            border: 2px solid black;
        } */
        .footer_container .text h2{
            text-align: center;
            font-family:'Pacifico';
            src:url('C:\Users\AASHIK\AppData\Local\Microsoft\Windows\Fonts') format('truetype');
            font-weight: normal;
            font-size:30px;
            letter-spacing: 1px;

        }
        .representation{
            /* border: 2px solid black; */
            display:grid;
            width:max-content;
            grid-template-columns: repeat(3,1fr);
            grid-gap: 30px;
            box-sizing: border-box;
            text-align: center;
            padding: 20px;
            padding-bottom: 0;
            margin: auto;
        }
       
        .representation>div{
            width:200px;
            height:150px;
            padding-top: 20px;
            box-sizing: border-box;
        }
        .representation h3{
            margin-top: 10px;
            font-family:'Agency FB'; 
            font-weight:bolder;
            font-size: 23px;
            
        }
        .representation p{
           font-family:Arial, Helvetica, sans-serif;
           font-size: 13px;
           font-weight: normal;
           
        }
        .representation i{
            font-size: 21px;
        }
        .mobile{
            border-right: 3px solid black;
        }
        .address{
            border-left: 3px solid black;
            border-right: 3px solid black;
        }
        .mail{
            border-left: 3px solid black;
            padding-bottom: 5px;
        }
        .mail a{
            font-family:Arial, Helvetica, sans-serif;
            font-size: 13px;
           text-decoration: none;
           color:black;
           box-sizing: border-box;
           padding-top: 10px;
        }
        .Contact_us{
            /* border: 2px solid black; */
            text-align: center;
            font-family:'Pacifico';
            src:url('C:\Users\AASHIK\AppData\Local\Microsoft\Windows\Fonts') format('truetype');
            font-weight: normal;
            letter-spacing: 1.5px;
        }
        .Contact_us p{
            margin-top: 25px;
            margin-bottom: 30px;
            font-size:15px;
        }

        input{
            width: 300px;
            height: 40px;
            margin-bottom: 20px;
            border:none;
            font-family:Arial, Helvetica, sans-serif;
            box-shadow: 0 50px 100px rgb(230, 116, 44);
            padding-left:10px;
        }
        @media(max-width:810px){
            .representation{
                grid-template-columns: repeat(2,1fr) ;
                align-items: center;
                grid-gap:20px;
            }
            .representation .mail{
               margin-left: 56%; 
            }
            .address{
                border-right: 0px;
            }
            .mail{
                
                border-left: 0px;
            }
            .Contact_us p{
            margin-top: 20px;
            margin-bottom: 40px;
        }
           
        }
        @media(max-width:600px){
            .representation{
                grid-template-columns: repeat(1,1fr);
                gap:10px;
            }
            .representation .mail{
               margin-left: 0; 
            }
            .address{
            border-right: 3px solid black;
        }
        .mail{
            border-left: 3px solid black;
            
        }
        }
        @media(max-width:500px){
            input{
            width: 200px;
            }
        }
        .Contact_us input[type=submit]{
            width:150px;
            height:40px;
            border: none;
            background-color:rgb(245, 133, 13) ;
            color:white;
            font-size: 15px;
            letter-spacing: 0.5px;
        }
        .Contact_us input[type=submit]:hover{
            background-color: #FE1818;
            transition: 1s ease;
        }
        .Contact_us span{
            color:red;
            font-size: small;
        }
      

    </style>
</head>
<body>
    <?php 
    $na=$sub=$msg="";
    $errname=$err=$err1=$err2=$errsub=$errmsg="";
    if(isset($_POST['submit'])){
    $na=$_POST['Name'];
    $sub=$_POST['subject'];
    $msg=$_POST['feedback'];

    if(empty($na)){
        $err="*empty";
    }else{
    if(preg_match("/^[a-zA-Z ]*$/",$na)){
        //  $fname=$na;
    }else{
        $errname="*String only ";
    }}

//subject vaidation
    if(empty($sub)){
        $err1="*empty";
    }else{
    if(preg_match("/^[a-zA-Z ]*$/",$sub)){
        //  $fname=$na;
    }else{
        $errsub="*String only ";
    }}
//msg validation
if(empty($msg)){
    $err2="*empty";
}else{
if(preg_match("/^[a-zA-Z ]*$/",$msg)){
    //  $fname=$na;
}else{
    $errmsg="*String only ";
}}
}
    ?>

    <footer>
        <div class="footer_container">
            <div class="text">
                <h2>Get in touch with us!</h2>
            </div>
            
            <div class="representation">
                <div class="mobile">
                    <i class="fa-solid fa-mobile-screen"></i>
                    <h3>Phone</h3>
                    <p>Phone +977 985366771<br>Tele +01 655552</p>
                </div>
                <div class="address"> 
                    <i class="fa-solid fa-location-dot"></i>
                    <h3>Address</h3>
                    <p>Ota Ku omorinishi<br>nana nu gono-201
                    </p>
                </div>
                <div class="mail">
                    <i class="fa-regular fa-envelope"></i>
                    <h3>Email</h3>
                    <a href="mailto:Aashikthapa606@gmail.com">
                    Aashikthapa606@gmail.com
                </a>
                </div>
            </div>
            <div class="Contact_us">
                <p>IF YOU GOT ANY QUESTIONS <br> PLEASE DO NOT HESITATE TO SEND US A MESSAGE</p>
                <form method="Post"> 
                    <input type="text" name="Name" placeholder="Name" value="<?php echo $na ?>">
                    <span><?php echo $err ?></span><span><?php echo $errname ?></span>
                    <br>
                    <input type="email" name="Email" placeholder="Email">
                    <br>
                    <input type="text" name="subject" placeholder="Subject" value="<?php echo $sub ?>">
                    <span><?php echo $err1 ?></span><span><?php echo $errsub ?></span><br>
                    <input type="text" name="feedback" placeholder="Message" value="<?php echo $msg ?>">
                    <span><?php echo $err2 ?></span><span><?php echo $errmsg ?></span><br>
                    <!-- <button type="submit">Send Message</button> -->
                    <input type="submit" name=submit value="Send Message">
                </form>
                
            </div>
        </div>
    </footer>
 
    
</body>
</html>