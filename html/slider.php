<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./nav_slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./gallary.css">
    <link rel="stylesheet" href="./some_thoughts.css">
    <link rel="stylesheet" href="./why_choose_us.css">
    <link rel="stylesheet" href="./guides.css">
    <link rel="stylesheet" href="./contact_us.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Salsa">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arial">

    <style type="text/css">
        
        .social{
            position:absolute;
            bottom:-55%;
            left:1%;
        }
        .social ul{
            display:flex;
            gap:20px;
            list-style-type:none;

        }
        .contact_info_slider{
            position:absolute;
            color:white; 
            top:-15%;
            Left:-5%;
            
        }
        .contact_info_slider ul{
            list-style-type: none;
            display: flex;
            flex-direction:Row ;
            gap:30px;
            
        }
        .revealr{
            transform:translateX(300px);
            opacity:0;
            transition: all 1s ease;
        }
        .reveall{
            transform:translateX(-300px);
            opacity:0;
            transition: all 1s ease;
        }
        .revealy{
            transform:translateY(100px);
            opacity:0;
            transition: all 2s ease;
        }

        .active{
            transform:translateX(0px);
            opacity:1;
        }

    </style>
</head>
<body>
   
    <div class="slider_container">
        <nav>
            <div class="nav_upper">
             <div class="logo"></div>
            </div>
            <div class="nav_bar">
             <ul class="link">
                 <li><a href="#"><i class="fa-solid fa-user-plus"></i></a></li>
                 <li><a href="#"><i class="fa-solid fa-route"></i></a></li>
                 <li><a href="#"><i class="fa-solid fa-image"></i></a></li>
                 <li><a href="#"><i class="fa-solid fa-house"></i></a></li>
                 <li><a href="#"><i class="fa-solid fa-book-open-reader"></i></a></li>
                 <li><a href="./about_us.html"><i class="fa-solid fa-circle-info"></i></a></li>
                 <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
             </ul>
             <div class="toggle_but">
                 <i class="fa-solid fa-bars"></i>
             </div>
            </div>
            <div class="dropdown">
             <li><a href="#"><i class="fa-solid fa-user-plus"></i><span>Sign Up</span></a></li>
                 <li><a href="#"><i class="fa-solid fa-route"></i><span>Package</span></a></li>
                 <li><a href="#"><i class="fa-solid fa-image"></i><span>Gallery</span></a></li>
                 <li><a href="#"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
                 <li><a href="#"><i class="fa-solid fa-book-open-reader"></i><span>Books</span></a></li>
                 <li><a href="#"><i class="fa-solid fa-circle-info"></i><span>About us</span></a></li>
                 <li><a href="#"><i class="fa-solid fa-user"></i><span>Log In</span></a></li>
            </div>
         </nav>
   <div class="container">
    
        <div id="slide">
            <div class="item" style="background-image: url(../img/IMG_4555.JPG);">
                <div class="grayscale"></div>
                <div class="content">
                    <div class="social">
                        <ul>
                            <li><i class="fa-brands fa-facebook"></i></li>
                            <li><i class="fa-brands fa-whatsapp"></i></li>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-twitter"></i></li>
                        </ul>
                    </div>
                    <div class="contact_info_slider">
                        <ul>
                            <li><i class="fa-solid fa-square-phone-flip"></i></li>
                            <li><i class="fa-solid fa-location-dot"></i></li>
                            <li><i class="fa-solid fa-envelope"></i></li>
                        </ul>
                    </div>
                    <p>Explore <br>Spiritual<br> Landscapes</p>
                    <div class="des">travel package booking system Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestias expedita explicabo </div>
                    
                </div>
            </div>
            <div class="item" style="background-image: url(../img/IMG_4567.JPG);">
                <div class="grayscale"></div>
                <div class="content">
                    <div class="social">
                        <ul>
                            <li><i class="fa-brands fa-facebook"></i></li>
                            <li><i class="fa-brands fa-whatsapp"></i></li>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-twitter"></i></li>
                        </ul>
                    </div>
                    <div class="contact_info_slider">
                        <ul>
                            <li><i class="fa-solid fa-square-phone-flip"></i></li>
                            <li><i class="fa-solid fa-location-dot"></i></li>
                            <li><i class="fa-solid fa-envelope"></i></li>
                        </ul>
                    </div>
                    <p>Wander <br>Spiritual<br> Kingdoms</p>
                    <div class="des">travel package booking system Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestias expedita explicabo</div>
                    
                </div>
            </div>
            <div class="item" style="background-image: url(../img/IMG_4560.JPG);">
                <div class="grayscale"></div>
                <div class="content">
                    <div class="social">
                        <ul>
                            <li><i class="fa-brands fa-facebook"></i></li>
                            <li><i class="fa-brands fa-whatsapp"></i></li>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-twitter"></i></li>
                        </ul>
                    </div>
                    <div class="contact_info_slider">
                        <ul>
                            <li><i class="fa-solid fa-square-phone-flip"></i></li>
                            <li><i class="fa-solid fa-location-dot"></i></li>
                            <li><i class="fa-solid fa-envelope"></i></li>
                        </ul>
                    </div>
                    <p>Roam,<br> Discover, <br>Transform</p>
                    <div class="des">travel package booking syslorem travel package booking syslorem travel package booking syslorem travel package booking syslorem
                    </div>
                    
                </div>
            </div>
            <div class="item" style="background-image: url(../img/IMG_4554.WEBP);">
                <div class="grayscale"></div>
                <div class="content">
                    <div class="social">
                        <ul>
                            <li><i class="fa-brands fa-facebook"></i></li>
                            <li><i class="fa-brands fa-whatsapp"></i></li>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-twitter"></i></li>
                        </ul>
                    </div>
                    <div class="contact_info_slider">
                        <ul>
                            <li><i class="fa-solid fa-square-phone-flip"></i></li>
                            <li><i class="fa-solid fa-location-dot"></i></li>
                            <li><i class="fa-solid fa-envelope"></i></li>
                        </ul>
                    </div>
                    <p>Wander,<br> Awaken, <Br>Transcend.</p>
                    <div class="des">travel package booking system Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laudantium eos omnis sed quod </div>
                    
                </div>
            </div>
            <div class="item" style="background-image: url(../img/IMG_4568.JPG);">
                <div class="grayscale"></div>
                <div class="content">
                    <div class="social">
                        <ul>
                            <li><i class="fa-brands fa-facebook"></i></li>
                            <li><i class="fa-brands fa-whatsapp"></i></li>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-twitter"></i></li>
                        </ul>
                    </div>
                    <div class="contact_info_slider">
                        <ul>
                            <li><i class="fa-solid fa-square-phone-flip"></i></li>
                            <li><i class="fa-solid fa-location-dot"></i></li>
                            <li><i class="fa-solid fa-envelope"></i></li>
                        </ul>
                    </div>
                    <p>Seek <br>Salvation <br>With In Self</p>
                    <div class="des">travel package booking system Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore libero provident porro odit qua</div>
                    
                </div>
            </div>
            <div class="item" style="background-image: url(../img/IMG_4569.jpg);">
                <div class="grayscale"></div>
                <div class="content">
                    <div class="social">
                        <ul>
                            <li><i class="fa-brands fa-facebook"></i></li>
                            <li><i class="fa-brands fa-whatsapp"></i></li>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-twitter"></i></li>
                        </ul>
                    </div>
                    <div class="contact_info_slider">
                        <ul>
                            <li><i class="fa-solid fa-square-phone-flip"></i></li>
                            <li><i class="fa-solid fa-location-dot"></i></li>
                            <li><i class="fa-solid fa-envelope"></i></li>
                        </ul>
                    </div>
                    <p>Spritual <br>Journey <br>To Salvation</p>
                    <div class="des">travel package booking system Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quis doloremque ipsam sequi perspici</div>
                    
                </div>
            </div>
        </div>
        
        <div class="buttons">
            <button id="next" class="nex"><i class="fa-solid fa-angle-left"></i></button>
            <button id="prev" class="pre"><i class="fa-solid fa-angle-right"></i></button>
        </div>
        
    </div>
    
    </div>
    <div class="Gallarys revealy">
        <div class="grays"></div>
        <p class="glip">GLIMPSE</p>
        <h2 >Gallery</h2>
    <div class="ab-pro" style="padding-bottom: -20px";>
    <div class="grid-container" >
        <div class="left"><p>Every picture tells a story, capturing moments that become memories and memories that become treasures.</p></div>
        
        <div class="gallary">
            <div class="item1 revealy">1</div>
            <div class="item2 revealy">2</div>
            <div class="item3 revealy">3</div>
            <div class="item4 revealy">4</div>
            <div class="item5 revealy">5</div>
            <div class="item6 revealy">6</div>
            <div class="item7 revealy">7</div>

            
        </div>
        
    </div>
</div>
    </div>

    
    <div class="thoughts">
        <div class="th_text_head  revealy">
            <h1>Word Of Appreciation</h1>
        </div>
        <div class="th_image  revealy">
            <div class="img"></div>
            <div class="text_lef" >
            <div class="th_text">
                <p class="test">TESTIMONIAL</p>
                <h2> Jane Dhungel</h2>
                <p>Traveling with the Yog Yatri is not just a trip; it's a spiritual odyssey that nourishes the heart and uplifts the spirit.It's more than a physical exploration; it's a soulful experience that transcends the ordinary, leaving me with a profound sense of gratitude and inner peace.  </p>
                <div class="signature"><img src="../img/signature.png" alt=""></div>
            </div>
            </div>
        </div>
    </div>

    <div class="choose_us ">
        <div class="text revealy">
            <h2>WHY CHOOSE US</h2>
        </div>
        <div class="choose_boxes">
            <div class="best_packages  revealy">
                <div class="circle">
                    <p><i class="fa-solid fa-truck-fast"></i></p>
                </div>
                <div class="texts">
                    <h3>Best Packages</h3>
                    <p>Covers all the places along the way from origin to the destination.</p>
                </div>
            </div>
            <div class="service revealy">
                <div class="circle">
                    <i class="fa-solid fa-star-of-david"></i>
                </div>
                <div class="texts">
                    <h3>World Class Services</h3>
                    <p>Includes the accomodation aling with the emergency health service.</p>
                </div>
            </div>
            <div class="price revealy">
                <div class="circle">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                </div>
                <div class="texts">
                    <h3>Best Price Guarantee</h3>
                    <p>Travel with minimum expenses and No extra charges.</p>
                </div>
            </div>
            <div class="price revealy">
                <div class="circle">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                </div>
                <div class="texts">
                    <h3>Great Guides</h3>
                    <p> You travel with the best guides with years of experiences.</p>
                </div>
            </div>
        </div>
    </div>
  
    <div class="guides">
        <div class="text revealy">
            <h2>OUR GUIDES</h2>
        </div>
    <div class="container_guides">
        
        <div class="container1 revealy">
            
            <div class="front">
                <div class="img">
                <img src="../img/386836902_1567974057293915_5280385216020674624_n.jpg">
                 </div>
                <h2>Mr . Aashik Thapa</h2>
            </div>
            <div class="back">
                <h2>Mr . Aashik Thapa</h2>
                <p>Been here serving you for 10 year. </p>
            </div>
        
    </div>
    
        <div class="container1 revealy">
            <div class="front">
                <div class="img">
                    <img src="../img/403732253_1096907471328898_94656660809817829_n (1).jpg">
                </div>
                <h2>Ms . Jane Dhungel</h2>
            </div>
            <div class="back">
                <h2>Ms. Jane Dhungel</h2>
                <p>Been here serving you for 12 year.</p>
            </div>
        </div>
    
    
        <div class="container1 revealy">
            <div class="front">
                <div class="img">
                    <img src="../img/368418098_1651322542064269_1488156885185211952_n.jpg">
                     </div>
                <h2>Ms . Cheeja Sharma</h2>
            </div>
            <div class="back">
                <h2>Ms . Cheeja Sharma</h2>
                <p>Been here serving you for 15 year.</p>
            </div>
       
        </div>
       
        
        </div>

    </div>

    

 
<footer class="revealy">
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
                    <input type="text" name="Name" placeholder="Name" value="">
                    
                    <br>
                    <input type="email" name="Email" placeholder="Email">
                    <br>
                    <input type="text" name="subject" placeholder="Subject" value="">
                    <br>
                    <input type="text" name="feedback" placeholder="Message" value="">
                    <br>
                    <!-- <button type="submit">Send Message</button> -->
                    <input type="submit" name=submit value="Send Message">
                </form>
                
            </div>
        </div>
    </footer>


    <script>
        // slider
    document.getElementById('next').onclick = function(){
    let lists = document.querySelectorAll('.item'); 
     document.getElementById('slide').appendChild(lists[0]);    
    }
    document.getElementById('prev').onclick = function(){
    let lists = document.querySelectorAll('.item');
    document.getElementById('slide').prepend(lists[lists.length - 1]);
    };
    </script>
    <script>
         //navbar responsive
    const togglebut=document.querySelector('.toggle_but');
    const togglebuticon=document.querySelector('.toggle_but i');
    const dropdown=document.querySelector('.dropdown');
    togglebut.onclick=function(){
        dropdown.classList.toggle('open');
        const isOpen=dropdown.classList.contains('open');
        togglebuticon.classList=isOpen?'fa-solid fa-xmark':'fa-solid fa-bars';
    }
    </script>
    <!-- reveal script -->
    <script type="text/javascript">
        window.addEventListener('scroll',reveall);
        function reveall(){
            var reveals=document.querySelectorAll('.reveall');
            for(var i=0;i<reveals.length;i++){
                var windowheight=window.innerHeight;
                var revealtop=reveals[i].getBoundingClientRect().top;
                var revealpoint=150;
                if(revealtop < windowheight - revealpoint){
                    reveals[i].classList.add('active');
                }else{
                    reveals[i].classList.remove('active');
                }
            }
        }
        window.addEventListener('scroll',revealr);
        function revealr(){
            var reveals=document.querySelectorAll('.revealr');
            for(var i=0;i<reveals.length;i++){
                var windowheight=window.innerHeight;
                var revealtop=reveals[i].getBoundingClientRect().top;
                var revealpoint=150;
                if(revealtop < windowheight - revealpoint){
                    reveals[i].classList.add('active');
                }else{
                    reveals[i].classList.remove('active');
                }
            }
        }
        window.addEventListener('scroll',revealy);
        function revealy(){
            var reveals=document.querySelectorAll('.revealy');
            for(var i=0;i<reveals.length;i++){
                var windowheight=window.innerHeight;
                var revealtop=reveals[i].getBoundingClientRect().top;
                var revealpoint=100;
                if(revealtop < windowheight - revealpoint){
                    reveals[i].classList.add('active');
                }else{
                    reveals[i].classList.remove('active');
                }
            }
        }
    </script>


</body>
</html>
  