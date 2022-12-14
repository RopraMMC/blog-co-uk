<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./index.css">
    <title>Ropra • Blog</title>
    <link rel="icon" type="image/x-icon" href="Studio-Project.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- ====== Fontawesome CDN Link ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Adsense-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5528148247928148"
     crossorigin="anonymous"></script>
</head>
<body>
<?php include 'header.php'; ?>
<br>
            <div class="home-content">
                <div class="webpage-info">
                    <h3>Welcome to Ropra • Blog</h3>
                    <p>Ropra • Blog is here to help you<br>with your <span class="tr2">life</span><span class="tr1">style</span></p>
                    <div class="btns">
                        <button class="btn-1">Start Reading</button>
                        <a href="#contact"><button class="btn-2">Contact Us</button></a>
                    </div>
                </div>
                <div class="webp-img">
                    <img src="undraw_blogging_re_kl0d.svg" alt="Blogging image">
                </div>
            </div>
        </div>
        <div class="webp-abt">
            <div class="abt-page">
                <div class="head-title">
                    <a href="">#about</a>
                    <h1>about us</h1>
                    <p>Ropra • Blog is here to change your view;
                    <br>Helping you with everything</p>
                </div>
                <div class="about-content">
                    <div class="abt-img">
                        <img src="undraw_profile_re_4a55.svg" alt="About us image">
                    </div>
                </div>
                <div class="abt-details">

                    <div class="abt-info">

                        <p>
                        At Ropra • Blog, we value your time and post blogs with that in mind.<br>
                        We take our time to ensure we get truthful facts about the blogs we create.<br>
                        We do this to ensure you have peace of mind whilst reading our blogs.
                        </p>

                    </div>

                    <div class="c-info">

                        <div class="left">

                            <h4><span>e-mail</span> <br>support@ropra.co.uk</h4><button class="btnc" id="cpybtn" onclick="copy('text1')">Copy</button>
                          
                        </div>

                        <div class="right">

                            <h4><span>phone</span> <br>+44 7553617478</h4><button class="btnc" id="cpybtn2" onclick="copy('text2')">Copy</button>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="contact-page" id="contact">
            <div class="head-title">
                <a href="">#contact</a>
                <h1>Contact me</h1>
                <p>Feel free to contact us at anytime.<br>
                We are always here to help out!</p>
            </div>
            <div class="contact-content">
                <div class="side-left">
                    <div class="phone details">
                        <i class="fa-solid fa-phone"></i>
                        <h4 class="topic">Phone</h4>
                        <h4 class="txt1">+44 7553617478</h4>
                    </div>

                    <div class="email details">
                        <i class="fa-solid fa-envelope"></i>
                        <h2 class="topic">E-mail</h2>
                        <h4 class="txt1">support@ropra.co.uk</h4>
                        <h4 class="txt2">contact@ropra.co.uk</h4>
                    </div>
                </div>
                <div class="side-right">
                    <h1 class="topic-text">Send me a message</h1>
                    <p>Feel free to contact us at anytime.<br>
                    We are always here to help out!</p>
                    <form action="https://formsubmit.co/765b24381879276ad12dce4437b897aa" method="POST">
                        <div class="input-box">
                            <input type="text" name="Name" placeholder="Enter your name">
                        </div>
                        <div class="input-box">
                            <input type="text" name="Email" placeholder="Enter your email">
                        </div>
                        <div class="input-box message-box">
                            <textarea name="Message"></textarea>
                        </div>
                        <div class="button">
                            <input type="submit" value="Send Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php include 'footer.php'; ?>

        <!-- TO COPY THE EMAIL AND PHONE NUMBER-->
        <p class="invis" id="text1">support@ropra.co.uk</p>
        <p class="invis" id="text2">+44 7553617478</p>

        <div class="notif">
            Successfully copied text!
        </div>
    
    </div>
    <script>

        function copy(copyId){
            let inputElement = document.createElement("input");
            inputElement.type = "text";
            let copyText = document.getElementById(copyId).innerHTML;
            inputElement.value = copyText;
            document.body.appendChild(inputElement);
            inputElement.select();
            document.execCommand('copy');
            document.body.removeChild(inputElement);
            

        }
        
        const Notif = {
            init() {
                this.hideTimeout = null;

                this.el = document.createElement('div');
                this.el.className = 'notif';
                document.body.appendChild(this.el);
            },

            show(message, state) {
                clearTimeout(this.hideTimeout);

                this.el.textContent = message;
                this.el.className = 'notif notif--visible';

                if (state) { 
                }

                this.hideTimeout = setTimeout(() => {
                this.el.classList.remove('notif--visible');
                }, 3000);
            }
            };

            document.addEventListener('DOMContentLoaded', () => Notif.init());
        
            /* NOTIF

            document.getElementById("cpybtn").onclick = () => {
                Notif.show("Copied successfully", "success");
            }

            document.getElementById("cpybtn2").onclick = () => {
                Notif.show("Copied successfully", "success");
            }
            */

    </script>

    
    <!-- Ropra -->
        <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-5528148247928148"
        data-ad-slot="8394768560"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</body>
</html>
