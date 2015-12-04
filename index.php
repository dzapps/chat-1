<!--
   Developments:
      * Voice command to reactivate Google Speech Recognition when it times out and says "Can't reach Google at the moment. Try again."
      * Use Voice Recorder at the same time as Google Speech Recognition
-->
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="mobile-web-app-capable" content="yes">
      <title>Lolly Island Chat</title>
      <link id="favicon" rel="icon" type="image/png" href="images/favicon4.png"/>
      <link href="//fonts.googleapis.com/css?family=Roboto:400,300,200,100&subset=latin,cyrillic" rel="stylesheet">
      <script src="../js/jquery-2.0.3.min.js"></script>
      <style>
         html
         {
            background: rgb(25, 25, 25);
         }
         body
         {
            margin: auto;
            padding: 0;
            background: rgb(50, 50, 50);
            width: 360px;
            -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
         }
/* Distracting...
@media screen and (min-width: 600px)
{
   html
   {
      background: url(../meeting/images/duplication/beach03.jpg) no-repeat fixed;
   }
   body
   {
      background: rgba(50, 50, 50, 0.4);
   }
}
*/
#divCover
{
   position: absolute;
   width: 360px;
   height: 100%;
   text-align: center;
   background: rgb(50, 50, 50);
   z-index: 100;
}
#divCover table
{
   width: 100%;
   height: 100%;
  color: white;
  font-family: Roboto, sans-serif;
}
#divCover img
{
   vertical-align: middle;
}
#headline {
  padding: 0.8em;
  color: white;
  font-family: Roboto, sans-serif;
  /*background: url(images/background.jpg) right bottom;
  background-size: cover;*/
}
#headline h1 {
        font-weight: 200;
        font-size: 45px;
        line-height: 1em;
        margin-bottom: 0;
      }
        
      #headline h2 {
        font-weight: 200;
        font-size: 30px;
        margin-top: 5px;
      }

      #headline #blurb {
        font-weight: 200;
        font-size: 18px;
      }

      #headline #blurb img {
        width: 30px;
        vertical-align: top;
      }

      #headline #blurb span, #headline #blurb img {
         -webkit-filter: drop-shadow(1px 1px 2px #000000);
      }

      #headline #blurb table {
         color: inherit; 
         font-size: inherit; 
         font-family: inherit; 
         padding-left: 0px;
      }

      #headline #blurb td {
         text-align: left;
      }

      /*#headline */#register {
        background-color: #FF0040;/*#39b1a4;*/
        /*background-color: rgba(57,177, 164, 0.7);*/
        padding: 0.5em;
      }

      /*#headline*/ #register h2 {
        font-weight: 100;
        padding: 0;
        margin: 0;
      }

      /*#headline*/ #register label {
        font-size: 1.2em;
        font-weight: 200;
        padding-top: 12px;
        display: block;
      }

      /*#headline*/ #register input {
        width: 85%;
        font-size: 18px;
        font-weight: 200;
        padding: 10px;
        box-sizing: border-box;
      }

      /*#headline*/ #register input[type=submit] {
        background-color: hsl(8, 70%, 54%);
        color: white;
        margin-top: 20px;
        padding: 10px;
        border: none;
        box-sizing: border-box;
        font-size: 18px;
      }

      #section1, #section2, #section3 {
        box-sizing: border-box;
        padding: 20px;
      }

      #section1 h2, #section2 h2, #section3 h2  {
        margin-top: 0;
        font-size: 24px
      }

      #section1 {
        background-color: white;
        font-family: Roboto, sans-serif;
        font-weight: 100;
        font-size: 18px;
      }

      #section1 h2 {
        font-weight: 300;
        text-align: center;
        margin-bottom: 0px;
        margin-top: 20px;
      }

      #section1 h2 + p {
      }

      #section1 video {
        width: 100%;
      }

      #section2 {
        background-color: #e9e9e9;
        font-family: Roboto, sans-serif;
        font-weight: 100;
        font-size: 18px;
      }

      #section2 h2 {
        font-weight: 300;
        text-align: center;
        margin-bottom: 0px;
        margin-top: 20px;
      }

      #section2 h2 + p {
      }

      #section2 div {
      }

      #section2 div img {
        width: 100%
      }

      #section3 {
        background-color: #f5f5f5;
        font-family: Roboto, sans-serif;
        font-weight: 100;
        text-align: center;
        margin: auto;
      }

      #section3 h2 {
        font-weight: 300;
        text-align: center;
        margin-bottom: 0px;
        margin-top: 20px;
      }

      #section3 h2 + p {
        text-align: center;
      }

      footer {
        font-family: Roboto, sans-serif;
        font-weight: 300;
        text-align: center;
        background-color: #FF0040/*hsl(8, 70%, 54%)*/;
        color: white;
        padding-bottom: 20px;
        padding-top: 20px;
        width: 100%;
        height: 60px;
      }

      thead {
        font-weight: bold;
      }

      tbody {
        text-align: center;
      }

/*      @media screen and (min-width: 600px) {

          
.container {
            margin: auto;
            max-width: 800px;
          }
          

#headline {
            padding: 20px 5%;
          }
          

#headline #blurb {
            float: left; 
            font-weight: 200;
            width: 50%;
            font-size: 18px;
            box-sizing: border-box;
            padding-right: 10px;
          }

           #register {
            float:right;
            padding: 20px;
            width: 50%;
            box-sizing: border-box;
            font-weight: 300;
          }

          #headline br {
            clear: both;
          }
          
#section1 #section2, #section3 {
            box-sizing: border-box;
            padding: 10px 20% 80px 20%;
          }
          
          #section1 h2, #section2 h2, #section3 h2  {
            margin-top: 0;
            font-size: 60px
          }
          
          
#section1 ul {
            box-sizing: border-box;
            float: left;
            width: 50%;
            padding-right: 1em;
          }
          
          #section1 video {
            width: 50%;
            float: right;
          }
          
#section1 video {
            box-sizing: border-box;
            width: 50%;
            float: right;
          }

          #section1 br {
            clear: both;
          }
          
          
#section2 div img {
            width: 30%;
            margin: 1%;
            box-sizing: border-box;
            border-radius: 25% 25%;
            box-shadow: black 0px 0px 5px;
          }
          
}*/
         .special::-webkit-scrollbar
         {
            width: 4px;
         }
         .special::-webkit-scrollbar-track-piece
         {
            background: rgba(128, 128, 128, 1.5);
         }
         .special::-webkit-scrollbar-thumb
         {
            background: rgba(255, 0, 64, 0.5);
            border-radius: 4px;
            opacity: 0.5;
         }
         .member, #imgMember0, #imgMember1, #imgMember2, #imgMember3, #imgMember4, #imgMember5, #imgMember6, #imgMember7, #imgMember8, #imgMember9, #imgMember10, #imgMember11, #imgMember12, #imgMember13/*, #imgMember14, #imgMember15*/
         {
            cursor: pointer;
         }
      </style>
      <script>
         var _idMember = [
            "Johnny",
            "Natasha",
            "Jimmy",
            "Holly",
            "Bruce",
            "Olivia",
            "Peter",
            "Natalie",
            "Desmond",
            "Mandy",
            "Ethan",
            "Amy",
            "Fred",
            "Rachel",
            "Tony",
            "Lara"
            ];
         var _hidden = [false, false, false, false, false, false, false, false, false, false, false, false, false, false, true, true];
         var _indexMember = 0;
         var _filename;
         var _timeLastSentence = 0;//new Date();
         var _timeStampPeriod = 1000 * 60 * 2;
         var _shiftImage =
         {
            "morning": "day2palm",
            "afternoon": "day2palm",
            "evening": "night2palm",
            "night": "night2palm"
         }
         var _displayOn = false;
         var _coverVisible = true;

         String.prototype.capitalize = function() 
         {
            return this.charAt(0).toUpperCase() + this.slice(1);
         }

         function doLoad()
         {
            var innerHTML = "<p style='line-height: 75px'>";
            for (var index = 0; index < _idMember.length; index++)
            {
               innerHTML += '<img class="member" id="imgMember' + index + '" onclick="toggleHidden(' + index + ')" src="images/team/' + _idMember[index] + '.png" alt="' + _idMember[index] + '">';
               if ((index % 2) == 1)
               {
                  innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;";
               }
            }
            innerHTML += "</p>";
            $("#blurb")[0].innerHTML += innerHTML;

            for (var index = 0; index < _idMember.length; index++)
            {
               updateMemberImage(index);
            }

            var d = new Date();
            var curr_date = d.getDate();
            var curr_month = d.getMonth();
            var curr_year = d.getFullYear();
            _filename = curr_year + "" + ((((curr_month + 1) + "").length == 1) ? "0" : "") + (curr_month + 1) + "" + (((curr_date + "").length == 1) ? "0" : "") + curr_date + ".html";

            loadChat();
         }

         function doSubmit()
         {
            // Prevent Google speech recognition from doubling up on the same thing said quickly
            var now = new Date();
            if ((now - _timeLastSentence) < 1000)
            {
               updateSpeak(); // Need to clear text box since Google speech can be repetitive
               return;
            }

            $("#blurb")[0].innerHTML += timeStamp() + '<p><table><tr><td><img src="images/team/' + _idMember[_indexMember] + '.png" alt="' + _idMember[_indexMember] + 
               '"></td><td><span>' + formatSpeech() + '</span></td></tr></table></p>';
            //$("#spanDebug")[0].innerHTML = [$("#speak")[0].value, $("#speak")[0].value.capitalize(), $("#speak")[0].value.capitalize().replace(/(roger|raja|rodja|radja)/gi, "")].join("|");
            do
            {
               _indexMember = (_indexMember + 1) % _idMember.length;
            }
            while (_hidden[_indexMember]);
            saveChat();
            updateSpeak();
            $('body').scrollTop($('body')[0].scrollHeight);
            _timeLastSentence = new Date();
            return false;
         }

         function formatSpeech()
         {
            var speech = $("#speak")[0].value.trim().capitalize().replace(/(roger|raja|rodja|radja|rodger)/gi, "").replace(/(lonely island|lolly island)/gi, "Lolly Island");
            speech = speech.replace(/%u2661/g, "&#9825;");
            for (var index = 0; index < _idMember.length; index++)
            {
               var r = new RegExp(_idMember[index], "i");
               speech = speech.replace(r, _idMember[index]);
            }
            return speech;
         }

         function timeStamp()
         {
            var curr_hour;
            var shift;
            var d = new Date();
            var a_p = "";
            curr_hour = d.getHours();
            if (curr_hour < 12)
            {
               a_p = "AM";
               shift = ((curr_hour < 6) ? "night" : "morning");
            }
            else
            {
               a_p = "PM";
               shift = ((curr_hour < 18) ? "afternoon" : "evening");
            }
            if (curr_hour == 0)
            {
               curr_hour = 12;
            }
            if (curr_hour > 12)
            {
               curr_hour = curr_hour - 12;
            }
            var curr_min = d.getMinutes();
            curr_min = curr_min + "";
            if (curr_min.length == 1)
            {
               curr_min = "0" + curr_min;
            }

            var curr_time = curr_hour + ":" + curr_min + " " + a_p;
            label = curr_time;
            var timeHTML = "";
            if ((d - _timeLastSentence) > _timeStampPeriod) 
            {
               timeHTML = "<p style='height: 1px; background: -webkit-linear-gradient(left, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.5) 100%); text-align: center; margin-bottom: 18px'><span style='background-color: black; color: white; opacity: 0.5; position: relative; top: -9px; border-radius: 4px;'>&nbsp;" + label + 
               "&nbsp;</span>" + /*getShiftImage(shift) +*/ "</p>";
            }
            return timeHTML;
         }

         function getShiftImage(shift)
         {
            return ((shift === undefined) ? "" : ("<img src='images/shift/" + _shiftImage[shift] + ".png' height='40px' style='vertical-align: middle; margin-top: -20px;'/>"));
         }

         var _ignoreValueChange = false;

         function updateSpeak()
         {
            _ignoreValueChange = true;
            $("#speak")[0].value = "";
            _ignoreValueChange = false;
            $("#speak")[0].placeholder = _idMember[_indexMember];
            $("#imgChatMember")[0].src = "images/team/" + _idMember[_indexMember] + ".png";
         }

         function toggleHidden(indexMember)
         {
            _hidden[indexMember] = !_hidden[indexMember];
            updateMemberImage(indexMember);
         }

         function updateMemberImage(indexMember)
         {
            var img = $("#imgMember" + indexMember)[0];
            if (img)
            {
               img.style.opacity = (_hidden[indexMember] ? "0.40" : "");
               img.style.webkitFilter = (_hidden[indexMember] ? "grayscale(100%)" : "drop-shadow(1px 1px 2px #000000)");
            }
         }

         function loadChat()
         {
            var ajax = getRequest();
            ajax.onreadystatechange = 
               function()
               {
                  if (ajax.readyState == 4)
                  {
                     var responseText = ajax.responseText;
                     if (responseText != "")
                     {
                        _indexMember = parseInt(responseText.substr(0, 2));
                        updateSpeak();
                        var hidden = responseText.substr(2, _idMember.length);
                        for (var index = 0; index < _hidden.length; index++)
                        {
                           _hidden[index] = (hidden.substr(index, 1) == "1");
                           if (_hidden[index])
                           {
                              updateMemberImage(index);
                           }
                        }
                        $("#blurb")[0].innerHTML = responseText.substr(6 + _idMember.length).replace(/%u2661/g, "&#9825;");
                     }
                  }
               }
            ajax.open("POST", "load.php", true);
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send("filename=" + _filename);
         }

         function saveChat()
         {
            $("#imgSaveStatus")[0].style.visibility = "";
            $("#imgChatMember")[0].style.display = "none";
            var ajax = getRequest();
            ajax.onreadystatechange = 
               function()
               {
                  if (ajax.readyState == 4)
                  {
                     $("#imgSaveStatus")[0].style.visibility = "hidden";
                     $("#imgChatMember")[0].style.display = "";
                  }
               }
            ajax.open("POST", "save.php", true);
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            var hidden = "";
            for (var index = 0; index < _hidden.length; index++)
            {
               hidden = hidden + (_hidden[index] ? "1" : "0");
            }
            var chat = escape($("#blurb")[0].innerHTML.replace(/\+/g, "&#43;").replace(/%u2661/g, "&#9825;"));
            ajax.send("filename=" + _filename + "&index=" + (((_indexMember + "").length == 1) ? "0" : "") + _indexMember + "&hidden=" + hidden + 
               "&chat=" + chat);
         }

         function getRequest()
         {
            var req = false;
            try
            {
               // most browsers
               req = new XMLHttpRequest();
            } 
            catch (e)
            {
               // IE
               try
               {
                  req = new ActiveXObject("Msxml2.XMLHTTP");
               } 
               catch (e) 
               {
                  // try an older version
                  try
                  {
                     req = new ActiveXObject("Microsoft.XMLHTTP");
                  } 
                  catch (e)
                  {
                     return false;
                  }
               }
            }
            return req;
         }

         function processSpeech(inputElement)
         {
            if (_ignoreValueChange)
            {
               return;
            }
            //$("#spanDebug")[0].innerHTML = inputElement.value;
            //if (inputElement.value.charAt(0) != inputElement.value.charAt(0).toUpperCase())
            //{
            //   inputElement.value = inputElement.value.capitalize();
            //}
            var a = inputElement.value.match(/(roger|raja|rodja|radja|rodger)/i);
            if (a && (a.length > 0))
            {
               //inputElement.value = inputElement.value.replace(/(roger|raja|rodja|radja)/gi, "");
               doSubmit();
            }
         }

         function hideCover()
         {
            if (_coverVisible)
            {
               toggleDisplay();
               $("#tdTouchToContinue")[0].innerHTML = "";
               _coverVisible = false;
            }
         }

         function doKeydown(e)
         {
            if (_coverVisible)
            {
               hideCover();
            }
            else
            {
               var keyCode  = (window.event) ? event.keyCode : e.data.keyCode;
               if (keyCode == 27)
               {
                  toggleDisplay();
               }
            }
         }

         function toggleDisplay()
         {
            _displayOn = !_displayOn;
            $("#blurb")[0].style.display = (_displayOn ? "" : "none");
            $("footer")[0].style.display = (_displayOn ? "" : "none");
            $("#divCover")[0].style.display = (_displayOn ? "none" : "");
         }
      </script>
   </head>
   <body onload="doLoad()" onkeydown="doKeydown(event)" class="special">
      <div id="divCover" onclick="hideCover()">
         <table><tr><td><img src="images/logo.png" style="width: 80%"/></td></tr><tr style="height: 10%"><td id="tdTouchToContinue">Touch To Continue</td></tr></table>
      </div>
      <div id="headline">
         <div class="container">
            <div id="blurb" style="display: none"></div>
            <!--<form method="post" id="register" onsubmit="doSubmit(); return false;">
               <img src="images/favicon.png" width="32px" style="vertical-align: middle"/> <input name="speak" id="speak" placeholder="Johnny">
            </form>-->
         </div>
      </div>
      <footer style="display: none">
         <div class="container"><span id="spanDebug"></span>
            <form method="post" id="register" onsubmit="doSubmit(); return false;">
               <img id="imgChatMember" src="images/team/Johnny.png" height="45px" style="position: absolute; vertical-align: middle; -webkit-filter: drop-shadow(1px 1px 2px #000000);"/><img id="imgSaveStatus" src="images/favicon.png" width="32px" style="vertical-align: middle; visibility: hidden;"/> <input name="speak" id="speak" placeholder="Johnny" oninput="processSpeech(this)" autocomplete="off">
            </form>
         </div>
      </footer>
   </body>
</html>
