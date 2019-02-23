<?php
header('Server: not nginx lol', true);
header('Bis: 90', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adi Bity</title>
  <link href="sources/favicon.ico" rel="icon" type="image/x-icon" />
  <style type="text/css">
  	.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
  </style>
</head>
<!--

                                      בכלמקוםבכ                                         
                                  לפינהששםעוברתהחזי                                     
                              ת,בכלשעהבכלעונהשבהנימסרת                                  
                      תחזית.באפלוליתב           שבילמידב                                
                   רעלהמפותהחתומ                  ות,בווא                               
                 דיאובמרוםההרמפע                   נחיםאת                               
                 השמות.ומחפשיםכלר                   מז,מח                               
                 פשיםסימןרקח ייליהמ    ודיעין,אנשי  חמ"ן.                               
                 אךסיפורםהאמיתיבכלדר כםהארוכהחתוםהיט בבתו                               
                 ופרטיבתווהסודוהשת  יקה.אךסיפורםהאמיתיבכל                               
                דרכםה  ארוכהחתוםהי  טבבתוופרטיבתווהסודוהש                               
               תיקה.בשדההקרבבשדההאש רקמעטיםאולי יודעים,קצ                               
              יןקרביתמידשםישמחייל   יהמודיעין.ובנוסףלשירי                               
             וניםולטיסותולגיחותגםהפרטיםהקטנטניםהם  חשובי                                
            םאזלא          פחות.אותםפרטים,אות     ההאות,                                
           אותוס                      ימןשלחי     יליהמו                                
          דיעיןא                                 נשיחמ"                                 
         ן.אךסי                                 פורםהא                                  
        מיתי..                                  .ואםעו                                  
        דיוםא                      חדתח        דלהאשל                                   
        בעור                      פהמסב יב,   הריתמי                                    
        דיהי                      החיילאשרימ  שיךעו                         דלהקשיב.ה   
       ריתמי                      דיהיואותם  החייל                        יםשכברשניםהמ  
       וכרים                     בכינוים"הח יילים                       האלמונ    ים".  
       ומצרפ                     יםכלפרטלר  מזוסי                     מןהםחיי    ליהמו  
       דיעין                    אנשיחמ"ן.  אךסיפו                   רםהאמית     י...ב   
       כלמקו                    םבכלפינה   ששםעוברתהחזית,בכלשעה   בכלעונה     שבהני     
        מסרת                   תחזית.בא    פלוליתבשבילמידברעלהמפותהחתומ      ות,בו      
        ואדי                   אובמרום     ההרמפ   ענחים   אתהשמות.ומ      חפשיםכ       
        לרמז                  ,מחפשיםס      ימן   רקחייליהמודיעין,א      נשיחמ"         
        ן.אךס               יפורם האמית         יבכלדרכםהארוכהחתום     היטבבתו          
         ופרט             יבתוו  הסודוהש         תיקה.אךסיפורםהאמיתי   בכלדרכםה         
         ארוכה            חתוםהיטבבתוופר                     טיבתווהס    ודוהשתיקה      
          .בשדה            הקרבבשדההאשר              קמעט       יםאולי  יודע ים,קצ      
          יןקרבי              תמיד                   שםיש        מחיילי  המודיעין       
           .ובנוס                                ףלש              יריונ    יםול         
            טיסותולג                            יחות              גםהפר     טיםה        
               קטנטנים                          הםחש              וביםאזלאפחות.א        
     ותם        פרטים,אותה                       האות           ,אותוסימןשלחייל         
    יהמודיע    יןאנשיחמ"ן.אךסיפו                  רםה         אמיתי..    .              
    ואםעודיוםאחדתח דלהאשלבעורפהמסביב,הרי           תמיד    יהיהחיי                      
    לאשר ימשיךעודלהקשיב    .הריתמידיהיואות םהחייליםשכברשניםהמוכר                        
     יםבכ  ינוים"החיי         ליםהאלמונים ".ומצרפיםכלפרטלרמזו                           
      סימן   הםחייל         יהמודיעיןאנש יחמ"ן .אךסיפורםהא                              
       מיתי...בכל           מקוםבכלפינה  ששםע                                           
        וברתהחז              ית,בכלשע   הבכל                                            
          עונ                השבהני    מסרת                                             
                              תחזית.  באפל                                              
                               וליתבשבילמ                                               
                                 ידברעלה                                                
                                   מפו                                                  
-->
<body style="background-color:black">
<?php
if (isset($_GET["xss"])) {
	echo '<script type="text/javascript">alert(1337)</script>';
}
?>
<img src="sources/bois_kastel.png" class="center">
<style>
  body{
  text-align: center;
  font-family: sans-serif;
  font-weight: 100;
}

h1{
  color: #396;
  font-weight: 100;
  font-size: 40px;
  margin: 40px 0px 20px;
}

#clockdiv{
  font-family: sans-serif;
  color: #fff;
  display: inline-block;
  font-weight: 100;
  text-align: center;
  font-size: 30px;
}

#clockdiv > div{
  padding: 10px;
  border-radius: 3px;
  background: #e5c100;
  display: inline-block;
}

#clockdiv div > span{
  padding: 15px;
  border-radius: 3px;
  background: #a08700;
  display: inline-block;
}

.smalltext{
  padding-top: 5px;
  font-size: 16px;
}
</style>
</head>
<div id="clockdiv">
  <div>
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
<script type="text/javascript">
  function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date("March 17, 2019 13:37:00");
initializeClock('clockdiv', deadline);
</script>
</div>
</body>
</html>