<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" data-comment="Specifies the character encoding"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" data-comment="For IE compatibility"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" data-comment="Configures viewpoint for responsive design"/>
    <meta name="apple-mobile-web-app-capable" content="yes" data-comment="Behave more like a native iOS app when added to the home screen"/>
    <meta name="theme-color" content="#ccccc7" data-comment="Used by Chrome, Firefox OS, and opera to change the browser address bar"/>
    <meta name="msapplication-TileColor" content="#00aba9" data-comment="Used by windows 8, 8.1, and 10 for the start menu tiles"/>
    <meta http-equiv="refresh" content="30" data-comment="Meta tag to refresh the page every 30 seconds"/>
    <meta name="language" content="en-Us" data-comment="Same as lang attribute in html tag (lang attribute is more preffered)"/>
    <title>Login Form</title>
    
    <!-- Custom CSS & JS files-->
    <!-- <link rel="stylesheet" href="style.css" data-comment="Custom Stylesheets"/> -->
    <!-- <script src="app.js" defer data-comment=" Custom JavaScript"></script> -->
    
    <!-- Favicon -->
    <link rel="icon" href="image.png" data-comment="Favicon to target older browsers like IE 10 and lower"/>
    <link rel="apple-touch-icon" href="image.png" data-comment="Favicon for Apple users"/>
    <link rel="mask-icon" href="image.png" color="#193860" data-comment="Favicon for Safari pinned tabs"/>
    
    <!-- SEO Meta Tags -->
    <meta name="author" content="Piyush Anand" data-comment="Author of Web Page"/>
    <meta name="description" content="write description here" data-comment="Description of web page for SEO"/>
    <meta name="keywords" content="keyword1, keyword2, keyword x " data-comment="Keywords of web page for SEO"/>
    <meta http-equiv="Content-Security-Policy" content="frame-ancestors 'self';" data-comment="Prevents from being embedded in an iframe to avoid clickjacking attacks"/>
    <meta name="robots" content="noindex, nofollow" data-comment="To tell crawlers not to crawl in this page"/>
    <link rel="manifest" href="manifest.json" data-comment="For SEO and Progressive Web Apps"/>
    <link rel="canonical" href="main link of site" data-comment="tells the main link of site avoiding multiple ranking of sublinks"/>
    <!-- <meta name="google-site-verification" content="verification_code" data-comment="For Google Search Console"/> -->
    <!-- <meta name="msvalidate.01" content="verification_code" data-comment="For Bing Webmaster Tools"/> -->
    <!-- <meta name="yandex-verification" content="verification_code" data-comment="For Yandex Webmaster Tools"/> -->
    <!-- <meta name="alexaVerifyID" content="verification_code" data-comment="For Alexa Webmaster Tools"/> -->
    <!-- <meta name="p:domain_verify" content="verification_code" data-comment="For Pinterest Webmaster Tools"/> -->
    <!-- <meta name="norton-safeweb-site-verification" content="verification_code" data-comment="For Norton Safe Web"/> -->
    <!-- <meta name="wot-verification" content="verification_code" data-comment="For Web of Trust"/> -->
    <!-- <meta name="pinterest" content="nopin" data-comment="For Pinterest to avoid pinning"/> -->
    <!-- <meta name="pinterest" content="nohover" data-comment="For Pinterest to avoid hover"/> -->
    
    <!-- OpenGraph Meta Tags - For Social Media Previews -->
    <!-- 
    <meta property="og:title" content="title of your webpage"/>
    <meta property="og:description" content="A short description of your page"/>
    <meta property="og:url" content="site_url"/>
    <meta property="og:type" content="website_content_type"/>
    <meta property="og:site_name" content="site_name"/>
    <meta property="og:image" content="preview_image_link - visble when shared"/>
    <meta property="og:image:alt" content="Alternate text if preview isn't displayed"/>
    <meta property="og:image:width" content="1200" data-comment="width of preview image 1200px recommended"/>
    <meta property="og:image:height" content="630" data-comment="height of preview image 630px recommended"/>
    <meta property="og:locale" content="en_US" data-comment="language and region: here English(United States)"/>
    <meta property="og:locale" content="en_GB" data-comment="here English(Great Britain/United Kingdom)"/>
    <meta property="og:locale:alternate" content="fr_FR" data-comment="here French(France)"/>
    <meta property="og:locale:alternate" content="fr_CA" data-comment="here French(Canada)"/>
    <meta property="og:locale:alternate" content="de_DE" data-comment="here German(Germany)"/>
    <meta property="og:locale:alternate" content="it_IT" data-comment="here Italian(Italy)"/>
    <meta property="og:locale:alternate" content="pl_PL" data-comment="here Polish(Poland)"/>
    <meta property="og:locale:alternate" content="nl_NL" data-comment="here Dutch(Netherlands)"/>
    <meta property="og:locale:alternate" content="hu_HU" data-comment="here Hungarian(Hungary)"/>
    <meta property="og:locale:alternate" content="cs_CZ" data-comment="here Czech(Czechia)"/>
    <meta property="og:locale:alternate" content="ro_RO" data-comment="here Romanian(Romania)"/>
    <meta property="og:locale:alternate" content="es_ES" data-comment="here Spanish(Spain)"/>
    <meta property="og:locale:alternate" content="es_MX" data-comment="here Spanish(Mexico)"/>
    <meta property="og:locale:alternate" content="pt_PT" data-comment="here Portuguese(Portugal)"/>
    <meta property="og:locale:alternate" content="pt_BR" data-comment="here Portuguese(Brazil)"/>
    <meta property="og:locale:alternate" content="sv_SE" data-comment="here Swedish(Sweden)"/>
    <meta property="og:locale:alternate" content="da_DK" data-comment="here Danish(Denmark)"/>
    <meta property="og:locale:alternate" content="fi_FI" data-comment="here Finnish(Finland)"/>
    <meta property="og:locale:alternate" content="no_NO" data-comment="here Norwegian(Norway)"/>
    <meta property="og:locale:alternate" content="el_GR" data-comment="here Greek(Greece)"/>
    <meta property="og:locale:alternate" content="ru_RU" data-comment="here Russian(Russia)"/>
    <meta property="og:locale:alternate" content="uk_UA" data-comment="here Ukrainian(Ukraine)"/>
    <meta property="og:locale:alternate" content="hi_IN" data-comment="here Hindi(India)"/>
    <meta property="og:locale:alternate" content="bn_BD" data-comment="here Bengali(Bangladesh)"/>
    <meta property="og:locale:alternate" content="ja_JP" data-comment="here Japanese(Japan)"/>
    <meta property="og:locale:alternate" content="zh_CN" data-comment="here Chinese/Mandarin/Putonghua(China)"/>
    <meta property="og:locale:alternate" content="zh_TW" data-comment="here Chinese/Mandarin/Putonghua(Taiwan)"/>
    <meta property="og:locale:alternate" content="hr_IL" data-comment="here Hebrew(Israel)"/>
    <meta property="og:locale:alternate" content="ar_SA" data-comment="here Arabic(Saudi Arabia)"/>
    <meta property="og:locale:alternate" content="ar_AE" data-comment="here Arabic(United Arab Emirates)"/>
    <meta property="og:locale:alternate" content="ar_EG" data-comment="here Arabic(Egypt)"/>
    <meta property="og:locale:alternate" content="ar_OM" data-comment="here Arabic(Oman)"/>
    <meta property="og:locale:alternate" content="ar_QA" data-comment="here Arabic(Qatar)"/>
    <meta property="og:locale:alternate" content="ar_YE" data-comment="here Arabic(Yemen)"/>
    <meta property="og:locale:alternate" content="ar_SY" data-comment="here Arabic(Syria)"/>
    <meta property="og:locale:alternate" content="ar_IQ" data-comment="here Arabic(Iraq)"/>
    <meta property="og:locale:alternate" content="ar_LB" data-comment="here Arabic(Lebanon)"/>
    <meta property="og:locale:alternate" content="ar_JO" data-comment="here Arabic(Jordan)"/>
    <meta property="og:locale:alternate" content="ar_BH" data-comment="here Arabic(Bahrain)"/>
    <meta property="og:locale:alternate" content="ar_KW" data-comment="here Arabic(Kuwait)"/>
    <meta property="og:locale:alternate" content="ar_SD" data-comment="here Arabic(Sudan)"/>
    <meta property="og:locale:alternate" content="ar_LY" data-comment="here Arabic(Libya)"/>
    <meta property="og:locale:alternate" content="ar_MA" data-comment="here Arabic(Morocco)"/>
    <meta property="og:locale:alternate" content="ar_DZ" data-comment="here Arabic(Algeria)"/>
    <meta property="og:locale:alternate" content="ar_TN" data-comment="here Arabic(Tunisia)"/>
    <meta property="og:locale:alternate" content="tr_TR" data-comment="here Turkish(Turkey)"/>
    <meta property="og:locale:alternate" content="ko_KR" data-comment="here Korean(South Korea)"/>
    <meta property="og:locale:alternate" content="my_MM" data-comment="here Burmese(Myanmar)"/>
    <meta property="og:locale:alternate" content="vi_VN" data-comment="here Vietnamese(Vietnam)"/>
    <meta property="og:locale:alternate" content="th_TH" data-comment="here Thai(Thailand)"/>
    <meta property="og:locale:alternate" content="id_ID" data-comment="here Indonesian(Indonesia)"/>
    <meta property="og:locale:alternate" content="ms_MY" data-comment="here Malay(Malaysia)"/>
    <meta property="og:locale:alternate" content="fil_PH" data-comment="here Filipino(Philippines)"/>
    <meta property="og:locale:alternate" content="tl_PH" data-comment="here Tagalog(Philippines)"/>
    <meta property="og:locale:alternate" content="af_ZA" data-comment="here Afrikaans(South Africa)"/>
    <meta property="og:locale:alternate" content="xh_ZA" data-comment="here Xhosa(South Africa)"/>
    <meta property="og:locale:alternate" content="zu_ZA" data-comment="here Zulu(South Africa)"/>
    <meta property="og:locale:alternate" content="st_ZA" data-comment="here Southern Sotho(South Africa)"/>
    <meta property="og:locale:alternate" content="tn_ZA" data-comment="here Tswana(South Africa)"/>
    <meta property="og:locale:alternate" content="ss_ZA" data-comment="here Swati(South Africa)"/>
    <meta property="og:locale:alternate" content="nr_ZA" data-comment="here Ndebele(South Africa)"/>
    <meta property="og:locale:alternate" content="en_ZA" data-comment="here English(South Africa)"/>
    <meta property="og:locale:alternate" content="en_AU" data-comment="here English(Australia)"/>
    <meta property="og:locale:alternate" content="en_NZ" data-comment="here English(New Zealand)"/>
    <meta property="og:locale:alternate" content="en_CA" data-comment="here English(Canada)"/>
    <meta property="og:locale:alternate" content="en_IE" data-comment="here English(Ireland)"/>
    --> 
    
    <!-- Twitter Meta Tags - For Twitter Previews -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Website Title"/>
    <meta name="twitter:description" content="Short description of web page"/>
    <meta name="twitter:image" content="preview image url"/>
    
    <!-- CDNs -->
    <!-- Tailwind CSS via CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.13/base.min.css" rel="stylesheet"/> -->
    <!-- Tailwind JS via CDN -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.13/lib/index.min.js" defer></script> -->
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer>//Bootstrap Js</script>
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous"/>
    <!-- jQuery CDN -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous" defer></script> -->
    <!-- Google API Icons via CDN -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=home"/> -->
    <!-- CDN font-awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" data-comment="pakage: npm install @fortawesome/fontawesome-free,module:import '@fortawesome/fontawesome-free/css/all.min.css';"/> -->
</head>
<body>
    <style>
        form{
            width:30%;
            border:solid;
            padding:10px;
        }
        input{
            width:100%;
            height:30px;
            border-radius: 10rem;
            border: none;
        }
    </style>
    <form action="">
        <ul>
            @foreach($error->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <h1> Login </h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="name"/><br/><br/>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="example@gmail.com"/><br/><br/>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" placeholder="Age"/><br/><br/>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Address..."/><br/><br/>
        <button class="btn btn-primary">Submit</button>
    </form>
    
    <script></script>
</body>
</html>