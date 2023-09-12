<?php
    session_start();
    $_SESSION['token'] = "no";
    require_once 'dbh.php';
    require_once 'functions.php';
    include 'verify.php'; 
    if ($_SESSION['token'] != 'yes') {
        header("location: https://yahanimetk.ga");
    }
    $_SESSION['token'] = "no";
    $_SESSION['name'] = $_COOKIE['name'];

    
?>  
<!DOCTYPE html>
<html>
<head>

                   

				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Page title</title>
                <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet">
                <script>
                    
                    function getCookie(cname) {
                        //var safe = document.cookie.split(';');
                        let name = cname + "=";
                        //let decodedCookie = decodeURIComponent(document.cookie);
                        //let ca = decodedCookie.split(';');
                        let cookies = document.cookie.split(';');
                        for(let i = 0; i <cookies.length; i++) {
                            let cookie = cookies[i];
                            while (cookie.charAt(0) == ' ') {
                            cookie = cookie.substring(1);
                            }
                            if (cookie.indexOf(name) == 0) {
                            return cookie.substring(name.length, cookie.length);
                            }
                        }
                        return "";
 
                    }

                    function safe() {
                        var temp_img = document.getElementById("temp_bg");
                        let user = getCookie("Mum_Is_Watching");
                        temp_img.classList.add("safe", "h");
                        if (user != "H_Certified") {
                            //temp_img.classList.remove("h");
                            temp_img.classList.toggle("safe");
                        }
                        else {
                            temp_img.classList.add("h");
                            temp_img.classList.toggle("h");
                        }
                    }


                    function toggle() {
                        var now_class = document.getElementById("temp_bg").className;
                        if (now_class == "h") {
                            document.getElementById("temp_bg").className = "safe";
                        }
                        else {
                            document.getElementById("temp_bg").className = "h";
                        }

                    }
                </script>
                <style>
                  
 
                    /*ul.b {

                        list-style-type: none;
                        text-align: center;
                        background-image: url("https://img.wallpapersafari.com/desktop/728/410/12/86/GXVsMh.png");
                      	height:80px;
                    
                    }

                    li.b {

                        display: inline-flex;
                        padding-right: 10px;
                        

                    }

                    li.b:hover {

                              background: green;
                              border-radius: 3px;

                    }

                    h2.b {

                        color: #fff;
                        width: 120px;
                      	height: 20px;
                        margin: 15px;
                        padding: 15px;

                    }

                    a.b {

                        text-decoration: none;
                        color: #fff;

                    }*/
                  
                  
                  
                  
                  
                  
                    ul.a {

                        list-style-type: none;
                        /*margin: 0;*/
                        /*padding-right: 10px;*/
                        padding-inline-start: 0;
                        text-align: center;

                    }

                    li.a {
                        /*padding: 6%;*/
                        width: 170px;
                        height:auto;
                        /*margin: 1rem;*/
                        /*justify-content: center;*/
                        position: relative;
                        
                    }

                    img {
                        display: inline-flex;
                        width: 170px;
                        height:265px;
                        justify-content: space-around;
                        position: relative;
                        /*vertical-align: left;*/
                    }

                    p {
                        text-align: center;
                        font-size: 16px;
                        
                    }

                    div {
                        display: inline-flex;
                        padding: 1rem;
                        position: relative;
                        width: auto;
                        justify-content: space-around;
                        text-align: center;
                    }
                  
                  	a.link {
                        text-decoration: none;	
                        color: black;
                      
                      
                  	}

                    * {
                        box-sizing: border-box;
                    }

    

                    .h {
                        margin: 0;
                        padding: 0;
                        background-image: url('https://www.ps4wallpapers.com/wp-content/uploads/2021/01/2021-01-04_5ff3756f355ee_1541662149879.jpg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-size: 100% 100%;
                        position: initial;
                    }

                    .safe {
                        margin: 0;
                        padding: 0;
                        background-image: url('https://www.greatamericancookies.com/wp-content/uploads/2020/09/GAC_ltrnmbr_webslider-bg-alt.jpg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-size: 100% 100%;
                        position: absolute;
                    }
                    nav {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        background-color: rgb(27, 27, 27);
                        color: whitesmoke;
                    }

                    div.title {
                        font-size: 2rem;
                        margin: .5rem;
                        color:Blue;
                        font-weight:bolder;
                        background: #121FCF;
                        background: linear-gradient(to right, #121FCF 0%, #CF1512 100%);
                        background-clip: text;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        font-family: Impact, Charcoal, sans-serif;
                        letter-spacing: .1rem;
                    }
                    
                    div.navbar ul {
                        margin: 0;
                        padding: 0;
                        display: flex;
                    }

                    div.navbar ul li {
                        list-style-type: none;
                    }

                    div.navbar ul li a {
                        font-size: 1.5rem;
                        text-decoration: none;
                        color: whitesmoke;
                        display: block;
                        padding: 1rem;
                    }

                    div.navbar ul li:hover {
                        background-color: grey;
                    }

                    a.toggle-button {
                        position: absolute;
                        top: .75rem;
                        right: 1rem;
                        display: none;
                        flex-direction: column;
                        justify-content: space-between;
                        width: 30px;
                        height: 21px; 
                    }

                    a.toggle-button span.bar{
                        height: 3px;
                        width: 100%;
                        background-color: whitesmoke;
                        border-radius: 10px;
                    }

                    header {

                        text-align: center;
                        color: #6600cc;   
                        font-size: 3rem;
                        font-family: 'Knewave';
                        
                    }

                    iframe {

                        text-align: center;
                    }

                    header img {
                        width: 200px;
                        height: 200px;
                        display: inline-block;
                        text-align: center;
                    }

                    div.stupid {
                        display: none;
                        position: fixed;
                        width: 100%;
                        height: 100%;
                        z-index: 1000000;
                        
                    }

                    div.stupid img {
                        width: 100%;
                        height: 100%;
                        
                    }

                    @keyframes fade-in {
                        0% { opacity: 0;
                        }

                        100% { opacity: 1; 
                        }
                    }

                    @keyframes fade-out {
                        0% { opacity: 1;
                        }
                        
                        100% { opacity: 0; 
                        }
                    }
                        

                    @media (max-width: 600px) {
                        a.toggle-button {
                            display: flex;
                        }

                        div.navbar {
                            display: none;
                            width: 100%;
                        }

                        nav {
                            flex-direction: column;
                            align-items: flex-start;
                        }

                        div.navbar ul {
                            width: 100%;
                            flex-direction: column;
                        }

                        div.navbar ul li {
                            text-align: center;
                        }

                        div.navbar ul li a {
                            padding: .5rem 1rem;
                        }

                        div.navbar.active {
                            display: flex;
                        }

                        .h {
                            margin: 0;
                            padding: 0;
                            background-image: url('https://c4.wallpaperflare.com/wallpaper/230/559/816/anime-girls-anime-open-mouth-yellow-eyes-tongue-out-hd-wallpaper-preview.jpg');
                            background-repeat: no-repeat;
                            background-attachment: fixed;
                            background-size: 100% 100%;
                        }
                    }
                    @media (max-width: 1000px) and (min-width: 600px) {
                        .h {
                            margin: 0;
                            padding: 0;
                            background-image: url('https://steamuserimages-a.akamaihd.net/ugc/795363200134567403/B6D2B1A0BEA23C1AE3CA2EE0C0D9FDEF33AF874E/?imw=1200&impolicy=Letterbox');
                            background-repeat: no-repeat;
                            background-attachment: fixed;
                            background-size: 100% 100%;
                        }

                    }


                </style>
                <script>
                    
                    
                    function temp_safe() {
                        var safe = document.cookie.split(';');
                        var variable = safe[3];
                        if (variable != "Mum_Is_Watching=H_Certified") {
                                const element = document.getElementById("temp_bg");
                                window.alert(variable);
                                window.alert(element);
                                if (element.className == "safe") {
                                    element.className = "h";
                                    window.alert("Was safe, now h");
                                } 
                                else {
                                    element.className = "safe";
                                    window.alert("Now safe");
                                }
                            
                        }
                    }



                    function changelittlemai() {
                        if (document.getElementById('littlemai').src == 'https://i3.wangmingguan.com/981576b4300221cd37da386c/df4c/df42/8b4b38b36a5427d066826c3c9a20df57339b6a28354270c62372559bf91222391177e23f575161.jpg') {
                            document.getElementById('littlemai').src =  'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2aiKP7ayYrF11kkgQt3mdQ7CD0r1WkyPaZA&usqp=CAU%22%3E';
                        }
                        else if (document.getElementById('littlemai').src == 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2aiKP7ayYrF11kkgQt3mdQ7CD0r1WkyPaZA&usqp=CAU%22%3E') {
                            document.getElementById('littlemai').src =  'https://i1.sndcdn.com/artworks-000131518678-hwy0i6-t200x200.jpg';
                        }

                    }

                    function changeanya() {
                        if (document.getElementById('anya').src == 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5jKQ5DEVAwpoNdHH0iiHgOTLCgXisuARhnO7lmTUdCET1dDlLIlUWjOOn2-_G1iDqFqA&usqp=CAU') {
                            document.getElementById('anya').src =  'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJLVZFSKlQlxTS66JVH1gWBiAHu26xM13EnLV-FEdMbtefmI5WukdMCHaWNezGuc2nXvc&usqp=CAU%22%3E';
                        }
                        else if (document.getElementById('anya').src == 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJLVZFSKlQlxTS66JVH1gWBiAHu26xM13EnLV-FEdMbtefmI5WukdMCHaWNezGuc2nXvc&usqp=CAU%22%3E') {
                            document.getElementById('anya').src =  'https://ih1.redbubble.net/image.3644071915.1027/st,small,507x507-pad,600x600,f8f8f8.jpg';                        
                            alert    
                        }

                    }

                    var numberofclicks = -1;
                    var audio = new Audio('https://soundboardguy.com/wp-content/uploads/2021/07/you-stupid-vine.mp3');
                    var name = document.getElementById('name');
                    var pw = document.getElementById('pw');
                    function stupid() {
                        document.getElementById('stupid').style.display = 'none';
                    }

                    function sound() {
                        audio.play();
                    }

                    function hswitch() {
                        if (document.getElementById('littlemai').src == 'https://i1.sndcdn.com/artworks-000131518678-hwy0i6-t200x200.jpg' && document.getElementById('anya').src ==  'https://ih1.redbubble.net/image.3644071915.1027/st,small,507x507-pad,600x600,f8f8f8.jpg') {
                            document.getElementById("Username").submit();
                            window.location.href = "https://hhh.yahanimetk.ga/index.php?Username="+token;
                        }
                        else {  
                            numberofclicks = numberofclicks+1;
                            if (numberofclicks == 0) {
                                window.alert('Nothing in here');
                            }
                            else if (numberofclicks == 1) {
                                window.alert('Really, there is nothing here');
                            }
                            else if (numberofclicks ==2) {
                                window.alert('Fine, there is something you can be discover');
                            }
                            else {
                                document.getElementById('stupid').style.display = 'block';
                                setTimeout(sound, 700);
                                setTimeout(stupid, 2000);
                                
                            }
                            
                        }
                        

                    
                    }

                    function test() {
                        alert(name);
                        alert(pw);
                    }
                    
                    //function postCrossDomainMessage(msg) {
                    //var win = document.getElementById('ifr').contentWindow;
                    //win.postMessage(msg, "http://example.com/");
                    //}
                    //var postMsg = {"login": "user"}; // this is just example
                    //postCrossDomainMessage(postMsg);

                </script>
				
</head>
<body id="temp_bg" onload="safe()">
        
        <div id='stupid' class="stupid">
            <img src='https://c.tenor.com/z-OQfg2dCLkAAAAC/man-you-stupid-doughboy.gif'></img>
        </div>
        <nav>
                <div class="title" onclick='hswitch()'>
                    <form id="Username" method='post'>
                        <input type='hidden' id='YourName' name='YourName' value="<?php echo $_SESSION['name'];?>"></input>
                        YAHHHHANIMETK
                    </form>
                </div>
                
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <div class="navbar">
                    <ul>
                        <li><a href="finalhome.php" target="_self">Home</a></li>
                        <li><a href="home.php" target="_self">List</a></li>
                        <li><a href="#" target="_blank">About Us</a></li>
                        <li><a onclick="toggle()">Toggle</a></li>
                    </ul>
                </div>
        </nav>
        <script>
                const toggleButton = document.getElementsByClassName('toggle-button')[0]
                const navbarlink = document.getElementsByClassName('navbar')[0]

                toggleButton.addEventListener('click', () => {
                  navbarlink.classList.toggle('active')
            })
        </script>    
        <br>
        <header>
            <img src='https://i3.wangmingguan.com/981576b4300221cd37da386c/df4c/df42/8b4b38b36a5427d066826c3c9a20df57339b6a28354270c62372559bf91222391177e23f575161.jpg' id='littlemai' onclick='changelittlemai()'></img>Welcome, <?php echo $_SESSION['name'];?>!<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5jKQ5DEVAwpoNdHH0iiHgOTLCgXisuARhnO7lmTUdCET1dDlLIlUWjOOn2-_G1iDqFqA&usqp=CAU" id='anya' onclick='changeanya()'></img>
        </header>
       
        <ul class="a">
            <div><li class="a"><a href="konosuba1.php"><img src="https://p2.bahamut.com.tw/B/2KU/05/0001501805.JPG"></a><p><a class="link" href="konosuba1.php">美好世界 第一季</a></p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/ACG/c/26/0000082626.JPG"><p>美好世界 第二季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/ACG/c/51/0000090551.JPG"><p>美好世界 紅傳説 (戲場版)</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/ACG/c/35/0000089735.JPG"><p>盾之勇者成名錄 第一季</p></li></div>
            <div><li class="a"><img src="https://www.sbdm.net/pic/uploadimg/2022-5/20225514544397714.jpg"><p>盾之勇者成名錄 第二季</p></li></div>
            <div><li class="a"><a href="NonNonBiyoriS1.php"><img src="https://d28s5ztqvkii64.cloudfront.net/images/anime/894/894_141421.webp"></a><p><a class="link" href="NonNonBiyoriS1.php">悠悠哉哉少女日和 第一季</a></p></li></div>
            <div><li class="a"><a href="NonNonBiyoriS1.php"><img src="https://d28s5ztqvkii64.cloudfront.net/images/anime/896/896_141421.webp"></a><p><a class="link" href="NonNonBiyoriS1.php">悠悠哉哉少女日和 第二季</a></p></li></div>
            <div><li class="a"><a href="angelbesideme.php"><img src="https://honeysanime.com/wp-content/uploads/2019/01/Crunchyroll-WATATEN_-an-Angel-Flew-Down-to-Me-300x450.png"></a><p>天使降臨到我身邊！ 第一季</a></p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/ACG/c/63/0000074763.JPG"><p>夏洛特 第一季</p></li></div>
            <div><li class="a"><img src="https://miro.medium.com/max/480/1*VI5eJujKJUHn5VqDymu77A.png"><p>鬼滅之刃 第一季</p></li></div>
            <div><li class="a"><img src="https://tvax3.sinaimg.cn/large/008kBpBlgy1gx3e527ai2j305i07nglz.jpg"><p>鬼滅之刃 第二季</p></li></div>
            <div><li class="a"><img src="https://img.juduo.tv/vod/20220218-1/a8acce11e2828b7917534e9353223f5d.jpg"><p>咒術迴戰 第一季</p></li></div>
            <div><li class="a"><img src="https://m.media-amazon.com/images/M/MV5BZTI1MjY3N2YtODczMy00MGQwLWI2NWMtODQwZTE3NTY5OTExXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_FMjpg_UX1000_.jpg"><p>遊戲人生 第一季</p></li></div>
            <div><li class="a"><img src="https://upload.wikimedia.org/wikipedia/zh/7/72/NGNL0_film_poster.jpg"><p>遊戲人生 0 (劇場版</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/ACG/c/46/0000117246.JPG"><p>月光下的異世界之旅 第一季</p></li></div>
            <div><li class="a"><img src="https://s3-ap-northeast-1.amazonaws.com/upload.potatomedia.co/articles/potato_49a0a2ae-ae81-4a6c-9634-838bb0ec91db_09fd9183c9811971561c1312d501ca63d9ef4704.png"><p>關於我轉生變成屎萊姆這檔事 第一季</p></li></div>
            <div><li class="a"><img src="https://imgur.com/KrACCjY.jpg"><p>關於我轉生變成屎萊姆這檔事 第二季</p></li></div>
            <div><li class="a"><img src="https://img.linetv.tw/large/drama/11411-p.jpg"><p>魔王學院的不適任者 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/57/ee4043ad17faa269db8da836d21c3r95.JPG"><p>GATE 奇幻自衛隊 第一季</p></li></div>
            <div><li class="a"><img src="https://yhdm.xyz/poster/201648413.jpg"><p>GATE 奇幻自衛隊 第二季</p></li></div>
            <div><li class="a"><a href="IsekaiQuartetS1.php"><img src="https://pbs.twimg.com/media/D1IAztnVsAIlJBJ.jpg"></a><p><a class="link" href="IsekaiQuartetS1.php">異世界四重奏 第一季</a></p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/201507/07/2307127wwlc97lcpzgpv5v.jpg"><p>OVERLORD 第一季</p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/201712/31/1307472jimnq8hr2mh5i2n.jpg"><p>OVERLORD 第二季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/55/641df24e4f297d61637386a30a156g75.JPG"><p>OVERLORD 第三季</p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/202207/05/224156if8zv828ej5felbl.jpg"><p>OVERLORD 第四季</p></li></div>
            <div><li class="a"><img src="https://image.pttnews.cc/2020/08/27/d552963fe7/b8546cf1cd6d4dcd6ecc2248e1c3bbb6.jpg?redirect=true"><p>達爾文遊戲 第一季</p></li></div>
            <div><li class="a"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTq6mJieEeoX_HGX4H8EOEMbRfesAUGt9pedKtFIEfon3zOG5aJ"><p>勇者辭職不幹了 第一季</li></div>
            <div><li class="a"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-oUB6oi6d_q-Qfcs74m5u0UYFXt5RJgdWUzKwJuMZhE8HUlZKygFu-d46tJDNJHRsvMI&usqp=CAU"><p>戰鬥員派遺中！ 第一季</p></li></div>
            <div><li class="a"><img src="https://cdn.hk01.com/di/media/images/3442413/org/c395a7a0a9c01086b44f6ddbb728da3f.jpg/9uPF3ob4gCKjLnvWhxiq96rc_PXEolcaaqLhm2qi4Zs?v=w1920"><p>無職轉生 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/97/537e21facbd134f2d395f06bbf1ec9l5.JPG?v=1637036646471"><p>無職轉生 第二季</p></li></div>
            <div><li class="a"><img src="https://img.linetv.tw/large/drama/10842-p.jpg"><p>入間同學入魔了 第一季</p></li></div>
            <div><li class="a"><img src="https://obs.line-scdn.net/0hHKAajmm2F2R8GAE9ZupoM0VOFAtPdARnGC5GZz92SVNQKgQyRi5cV10QSwQBLlA6Ei1RAVhdSAFXeFJmSHo/w644"><p>入間同學入魔了 第二季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/ACG/c/46/0000110246.JPG"><p>總之就是非常可愛 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/90/e5c94733e043b98ee54c30fdd412ym65.JPG"><p>魔法科高中的劣等生 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/10/af799b72ff42814786df37f5311a2yi5.JPG"><p>魔法科高中的劣第生 第二季</p></li></div>
            <div><li class="a"><img src="https://i.imgur.com/p65QamW.jpg"><p>女神宿舍的宿管君 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/34/39a37a2b7bf1a49470d404dee7147xy5.JPG"><p>異世界魔王與召喚少女的奴隸魔術 第一季</p></li></div>
            <div><li class="a"><img src="https://apl-hamivideo.cdn.hinet.net/HamiVideo/getHamiVideoImg.php?imageId=sourceImages@2491102477_o_20210427174552.jpg"><p>異世界魔王與召喚少女的奴隸魔術 第二季</p></li></div>
            <div><li class="a"><img src="https://img.1777cdn.com/upload/vod/20200423-27/ca4c88971da4c17d1d9dc7f5d705c1d8.jpg"><p>賢者之孫 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/24/e91b09dba1b1e20a8f8c392a021er0w5.JPG?v=1640055621514"><p>吸血鬼馬上死 第一季</p></li></div>
            <div><li class="a"><img src="https://upload.wikimedia.org/wikipedia/zh/6/6c/Kyoko_Suiri_Key_Visual.png"><p>虛構推理 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/M/2KU/52/0001523952.JPG"><p>帶着手機闖蕩異世界 第一季</p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/201812/26/164832rcl739efrlrec3xn.jpg"><p>七大罪 第一季</p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/201801/06/121948m0sasa09y6zu8zx8.jpg"><p>七大罪 第二季</p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/201910/09/1844044uxn47nwpwk0pwuh.jpg"><p>七大罪 第三季</p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/202101/14/102627ocq4amm8ryom98yz.jpg"><p>七大罪 第四季</p></li></div>
            <div><li class="a"><img src="http://i.imgur.com/Nh0wCHG.jpg"><p>一拳超人 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/ACG/c/22/0000085322.JPG"><p>一拳超人 第二季</p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/201604/03/132406ou3gx3r3ztz99wc3.jpg"><p>我的英雄學院 第一季</p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/201703/25/1746566s44se4ct472g2it.jpg"><p>我的英雄學院 第二季</p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/201804/07/113637tsxogsarxz5or2oo.jpg"><p>我的英雄學院 第三季</p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/201910/12/181338dd7inc7gffdr9ru7.jpg"><p>我的英雄學院 第四季</p></li></div>
            <div><li class="a"><img src="https://myself-bbs.com/data/attachment/forum/202103/27/174302nwvbmgcvcvnenmgm.jpg"><p>我的英雄學院 第五季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/79/0001376979.JPG"><p>魔B爸B 第一季</p></li></div>
            <div><li class="a"><img src="https://tva4.sinaimg.cn/large/008kBpBlgy1gx4igdbekkj305i07nq33.jpg"><p>戀上換裝娃 第一季</p></li></div>
            <div><li class="a"><img src="https://gimy.one/poster/201704622.jpg"><p>小林家的龍女僕 第一季</p></li></div>
            <div><li class="a"><img src="https://i0.wp.com/wp-corp.qoo-app.com/wp-content/uploads/2021/06/21060705393299.jpg?resize=568%2C800&ssl=1"><p>小林家的龍女僕S 第二季</p></li></div>
            <div><li class="a"><img src="https://i.imgur.com/GGRC3ws.jpg"><p>調較咖啡廳 第一季</p></li></div>
            <div><li class="a"><img src="https://tva4.sinaimg.cn/large/008kBpBlgy1gv9kxmixl8j605i07naaa02.jpg"><p>關於前輩很煩人的事 第一季</p></li></div>
            <div><li class="a"><img src="https://img.avdb.me/eyny/upload/vod/20210602-6/ea612f8ade27af11bc126fc0c660714a.jpg"><p>騎士與魔法 第一季</p></li></div>
            <div><li class="a"><img src="https://i.imgur.com/RpteZD9.jpg"><p>爆肝工程師的異世界狂想曲 第一季</p></li></div>
            <div><li class="a"><img src="https://img.avdb.me/mapleco/upload/vod/20220112-1/7d0c0aaf1a887c76e15c2f70a85b6186.jpg"><p>自稱賢者弟子的賢者 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/56/f4c74f1edad21c5dcce5ed8cc71dz9s5.JPG?v=1634032872281"><p>世界頂尖的暗殺者轉生為異世界貴族 第一季</p></li></div>
            <div><li class="a"><img src="https://obs.line-scdn.net/0hPlAou7FqD0N8FiS48jZwFEZADCxPehxAGCBeQD94UXcELhocQnZGLV9EBXBZJ0gdFXNDLVkVFHIBc0FFEHdG/w644"><p>平凡職業造就世界最強 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/31/0d459b311c8666c0c7c74cc68b1eggj5.JPG"><p>平凡職業造就世界最強 第二季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/99/9c3c996edd31efb633e642bed916lvf5.JPG"><p>持續狩獵史萊姆三百年，不知不覺就練到LV MAX 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/ACG/c/36/0000058236.JPG"><p>打工吧！魔王大人 第一季</p></li></div>
            <div><li class="a"><img src="https://i.imgur.com/WCN45ib.jpg"><p>打工吧！魔王大人 第二季</p></li></div>
            <div><li class="a"><img src="https://kenshin.hk/blog/jdnews/202112/20211217-7.jpg"><p>天才王子的赤字國家重生術 第一季</p></li></div>
            <div><li class="a"><img src="https://p2.bahamut.com.tw/B/2KU/15/cdc74aebf7ba2655f45315637b1f3fv5.JPG"><p>骸骨騎士大人異世界冒險中 第一季</p></li></div>
        </ul>
        

</body>
</html>