<?php
header('Server: not nginx lol', true);
header('Bis: 90', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adi Bity</title>
  <link href="sources/favicon.ico" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="sources/i_hate_css.css">>
</head>
<!--
Yeah you pressed F12, so what? think you're all 1337 and shit, he're a dickbutt just for you:


                                      כלמקוםכלפ                                         
                                  ינהמבוקשתשםאנחנופ                                     
                              ורשיםאתהרשתכלמבצעמסובךוע                                  
                      דיןשםאנחנואנשימ           ודיעיןשם                                
                   אנחנוהרחקלמול                  ושלאויב                               
                 שםאנחנועינייםאז                   נייםול                               
                 במלחמהאושלוםבכלע                   תבכלז                               
                 מןשםאנחנוחמ "ן,שםא    נחנוחמ"ן.כא  שרהחז                               
                 יתשובשותקתעודיוצאים אנשינובשקטכלפיר ורשל                               
                 מידעאזנשלוףמודיעי  ןזהוקרבללאסוףשםאנחנוה                               
                רחקלמ  ולושלאויבשם  אנחנועינייםאזנייםולבמ                               
               לחמהאושלוםבכלעתבכלזמ ןשםאנחנוחמ" ן,שםאנחנו                               
              חמ"ן.ממידעשלוקטבמחת   רתכלתמונתהחזיתמתבהרתו                               
             עלכןבעיתותסכנהחרבצה"לתמידמוכנהשםאנחנ  והרחק                                
            למולו          שלאויבשםאנחנועיניי     םאזניי                                
           םולבמ                      לחמהאוש     לוםבכל                                
          עתבכלז                                 מןשםאנ                                 
         חנוחמ"                                 ן,שםאנ                                  
        חנוחמ"                                  ן.שםאנ                                  
        חנוחמ                      "ן,ש        םאנחנו                                   
        ....                      ..חמ" ן.כ   למקוםכ                                    
        לפינ                      המבוקשתשםא  נחנופ                         ורשיםאתהר   
       שתכלמ                      בצעמסובךו  עדיןש                        םאנחנואנשימו  
       דיעין                     שםאנחנוהרח קלמול                       ושלאוי    בשםא  
       נחנוע                     ינייםאזני  יםולב                     מלחמהאו    שלוםב  
       כלעתב                    כלזמןשםאנ  חנוחמ"                   ן,שםאנח     נוחמ"   
       ן.כאש                    רהחזיתשו   בשותקתעודיוצאיםאנשינ   ובשקטכל     פירור     
        שלמי                   דעאזנשלו    ףמודיעיןזהוקרבללאסוףשםאנחנוה      רחקלמ      
        ולוש                   לאויבשם     אנחנו   עיניי   םאזנייםולב      מלחמהא       
        ושלו                  םבכלעתבכ      לזמ   ןשםאנחנוחמ"ן,שםאנ      חנוחמ"         
        ן.ממי               דעשלו קטבמח         תרתכלתמונתהחזיתמתב     הרתועלכ          
         ןבעי             תותסכ  נהחרבצה         "לתמידמוכנהשםאנחנוה   רחקלמולו         
         שלאוי            בשםאנחנועיניים                     אזנייםול    במלחמהאוש      
          לוםבכ            לעתבכלזמןשםא              נחנו       חמ"ן,ש  םאנח נוחמ"      
          ן.שםאנ              חנוח                   מ"ן,        שםאנחנ  ו......ח       
           מ"ן.כל                                מקו              םכלפי    נהמב         
            וקשתשםאנ                            חנופ              ורשים     אתהר        
               שתכלמבצ                          עמסו              בךועדיןשםאנחנו        
     אנש        ימודיעיןשם                       אנחנ           והרחקלמולושלאוי         
    בשםאנחנ    ועינייםאזנייםולבמ                  לחמ         האושלום    ב              
    כלעתבכלזמןשםאנ חנוחמ"ן,שםאנחנוחמ"ן.כ           אשרה    חזיתשוב                      
    שותק תעודיוצאיםאנשי    נובשקטכלפירורשל מידעאזנשלוףמודיעיןזהו                        
     קרבל  לאסוףשםאנח         נוהרחקלמולו שלאויבשםאנחנועיניים                           
      אזני   יםולבמ         לחמהאושלוםבכ לעתבכ לזמןשםאנחנו                              
       חמ"ן,שםאנח           נוחמ"ן.ממיד  עשלו                                           
        קטבמחתר              תכלתמונת   החזי                                            
          תמת                בהרתוע    לכןב                                             
                              עיתותס  כנהח                                              
                               רבצה"לתמיד                                               
                                 מוכנהשם                                                
                                   אנח                                                  
                                                                                      
-->
<body style="background-color:white">
<?php
if (isset($_GET["xss"])) {
	echo '<script type="text/javascript">alert(1337)</script>';
}
?>
<div id="clockdiv">
	<img src="sources/namer_hakesef.jpg" class="center"/>
	<br/>
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
</head>

<script src="sources/countdown.js""></script>
</div>
</body>
</html>