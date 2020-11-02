<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" prefix="dc: http://purl.org/dc/elements/1.1/">
<head><meta name="author" content="Created with Hot Potatoes by Half-Baked Software, registered to Esteban."/><meta name="keywords" content="Hot Potatoes, Hot Potatoes, Half-Baked Software, Windows, University of Victoria"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<meta name="dc:creator" content="Esteban" />
<meta name="dc:creator" content="Tatiana" />
<meta name="dc:title" content="Quiz de software seg&#x00FA;n su uso" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>

<script>
	function enviar()
	{
		    var v1= "Quiz software SO";
			$.post("archivo.php",{"Score":Score,"v1":v1},function(respuesta){
			alert(respuesta);
		});
	}
	</script>



<title>
Quiz de software seg&#x00FA;n su uso
</title>

<!-- Made with executable version 7.0 Release 3 Build 0 -->

<!-- The following insertion allows you to add your own code directly to this head tag from the configuration screen -->



<style>


/* This is the CSS stylesheet used in the exercise. */
/* Elements in square brackets are replaced by data based on configuration settings when the exercise is built. */

/* BeginCorePageCSS */

/* Made with executable version 7.0 Release 3 Build 0 */



/* CSS variables for colours. */
:root{
	--strFontFace:       Geneva,Arial,sans-serif;
	--strFontSize:       medium;
	--strTextColor:      #000000;
	--strTitleColor:     #000000;

	--strFuncLightColor: #ffffff;
	--strFuncShadeColor: #7f7f7f;
	--strLinkColor:      #0000FF;
	--strVLinkColor:     #0000CC;
	
	--strNavBarColor:    #000000;
	--strNavLightColor:  #7f7f7f;
	--strNavShadeColor:  #000000;
	--strNavTextColor:   #ffffff;
	
	--strPageBGColor:    #C0C0C0;
	--strExBGColor:      #FFFFFF;
}

body{
	font-family: var(--strFontFace);
	background-color: var(--strPageBGColor);
	color: var(--strTextColor);
 
	margin-right: 5%;
	margin-left: 5%;
	font-size: var(--strFontSize);
	padding-bottom: 0.5em;
}

p{
	text-align: left;
	margin: 0px;
	font-size: 1em;
}

table,div,span,td{
	font-size: 1em;
	color: var(--strTextColor);
}

div.Titles{
	padding: 0.5em;;
	text-align: center;
	color: var(--strTitleColor);
}

button{
	font-family: var(--strFontFace);
	font-size: 1em;
	display: inline;
}

.ExerciseTitle{
	font-size: 140%;
	color: var(--strTitleColor);
}

.ExerciseSubtitle{
	font-size: 120%;
	color: var(--strTitleColor);
}

div.StdDiv, div.ExerciseContainer, div.ReadingContainer{
	background-color: var(--strExBGColor);
	text-align: center;
	font-size: 1em;
	color: var(--strTextColor);
	padding: 0.5em;
	border-style: solid;
	border-width: 1px 1px 1px 1px;
	border-color: var(--strTextColor);
	margin-bottom: 1px;
}

div.ReadingContainer, div.ExerciseContainer{
	min-width: 15em;
	flex-grow: 1;
	flex-basis: 0;
	margin: 1px;
}

div#ContainerDiv{
	margin: -1px;
	padding: 0;
	border: none;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: space-between;
}

/* EndCorePageCSS */

.RTLText{
	text-align: right;
	font-size: 150%;
	direction: rtl;
	font-family: "Simplified Arabic", "Traditional Arabic", "Times New Roman", var(--strFontFace); 
}

.CentredRTLText{
	text-align: center;
	font-size: 150%;
	direction: rtl;
	font-family: "Simplified Arabic", "Traditional Arabic", "Times New Roman", var(--strFontFace); 
}

button p.RTLText{
	text-align: center;
}

.RTLGapBox{
	text-align: right;
	font-size: 150%;
	direction: rtl;
	font-family: "Times New Roman", var(--strFontFace);
}

.Guess{
	font-weight: bold;
}

.CorrectAnswer{
	font-weight: bold;
}

div#Timer{
	padding: 0.25em;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	color: var(--strTitleColor);
}

span#TimerText{
	padding: 0.25em;
	border-width: 1px;
	border-style: solid;
	font-weight: bold;
	display: none;
	color: var(--strTitleColor);
}

span.Instructions{

}

div.ExerciseText{

}

.FeedbackText, .FeedbackText span.CorrectAnswer, .FeedbackText span.Guess, .FeedbackText span.Answer{
	color: var(--strTitleColor);
}

.LeftItem{
	font-size: 1em;
	color: var(--strTextColor);
	text-align: left;
}

.RightItem{
	font-weight: bold;
	font-size: 1em;
	color: var(--strTextColor);
	text-align: left;
}

span.CorrectMark{

}

input, textarea{
	font-family: var(--strFontFace);
	font-size: 120%;
}

select{
	font-size: 1em;
}

div.Feedback {
	background-color: var(--strPageBGColor);
	left: 33%;
	width: 34%;
	top: 33%;
	z-index: 1;
	border-style: solid;
	border-width: 1px;
	padding: 5px;
	text-align: center;
	color: var(--strTitleColor);
	position: absolute;
	display: none;
	font-size: 1em;
}




div.ExerciseDiv{
	color: var(--strTextColor);
}

/* JMatch standard output table. */
table.MatchTable{
	margin: 2em auto; 
	border-width: 0;
}

/* JMatch flashcard styles */
table.FlashcardTable{
	background-color: transparent;
	color: var(--strTextColor);
	border-color: var(--strTextColor);
	margin-left: auto;
	margin-right: auto;
	margin-top: 2em;
	margin-bottom: 2em;
	/*width: 90%;*/
	position: relative;
	text-align: center;
	padding: 0px;
}

table.FlashcardTable tr{
	border-style: none;
	margin: 0px;
	padding: 0px;
	background-color: var(--strExBGColor);
}

table.FlashcardTable td.Showing{
	font-size: 140%;
	text-align: center;
	width: 50%;
	display: table-cell;
	padding: 2em;
	margin: 0px;
	border-style: solid;
	border-width: 1px;
	border-radius: 0.5em;
	color: var(--strTextColor);
	box-shadow: 0.2em 0.3em 0.2em var(--strNavShadeColor);
	background-color: var(--strPageBGColor);
}

table.FlashcardTable td.Hidden{
	display: none;
}

/* JMix styles */
div.JMixDrag, div.JMatchDrag{
	padding: 0;
	background-color: var(--strPageBGColor);
	border-style: none;
}

div#GuessDiv{
	padding: 0.5em;
	margin-bottom: 2em;
}

div#SegmentDiv{
	margin-top: 2em;
	margin-bottom: 2em;
	text-align: center;
}

a.ExSegment{
	font-size: 120%;
	font-weight: bold;
	text-decoration: none;
	color: var(--strTextColor);
	display: inline-block;
	padding: 0.5em;
	border: solid 1pt gray;
	margin-bottom: 0.5em;
}

span.RemainingWordList{
	font-style: italic;
}

div.DropLine {
	position: absolute;
	text-align: left;
	border-bottom-style: solid;
	border-bottom-width: 1px;
	border-bottom-color: var(--strTitleColor);
	width: 80%;
	left: 10%;
}

/* JCloze styles */

.ClozeWordList{
	text-align: center;
	font-weight: bold;
}

div.ClozeBody{
	text-align: left;
	margin-top: 2em;
	margin-bottom: 2em;
	line-height: 2.0
}

span.GapSpan{
	font-weight: bold;
}

/* JCross styles */

table.CrosswordGrid{
	margin: auto auto 1em auto;
	border-collapse: collapse;
	padding: 0px;
	background-color: #000000;
}

table.CrosswordGrid tbody tr td{
	width: 1.5em;
	height: 1.5em;
	text-align: center;
	vertical-align: middle;
	font-size: 140%;
	padding: 1px;
	margin: 0px;
	border-style: solid;
	border-width: 1px;
	border-color: #000000;
	color: #000000;
}

table.CrosswordGrid span{
	color: #000000;
}

table.CrosswordGrid td.BlankCell{
	background-color: #000000;
	color: #000000;
}

table.CrosswordGrid td.LetterOnlyCell{
	text-align: center;
	vertical-align: middle;
	background-color: #ffffff;
	color: #000000;
	font-weight: bold;
}

table.CrosswordGrid td.NumLetterCell{
	text-align: left;
	vertical-align: top;
	background-color: #ffffff;
	color: #000000;
	padding: 1px;
	font-weight: bold;
}

.NumLetterCellText{
	cursor: pointer;
	color: #000000;
}

.GridNum{
	vertical-align: super;
	font-size: 66%;
	font-weight: bold;
	text-decoration: none;
	color: #000000;
}

.GridNum:hover, .GridNum:visited{
	color: #000000;
}

table#Clues{
	margin: auto;
	vertical-align: top;
}

table#Clues td{
	vertical-align: top;
}

table.ClueList{
  margin: auto;
}

td.ClueNum{
	text-align: right;
	font-weight: bold;
	vertical-align: top;
}

td.Clue{
	text-align: left;
}

div#ClueEntry{
	text-align: left;
	margin-bottom: 1em;
}

/* Keypad styles */

div.Keypad{
	text-align: center;
	display: none; /* initially hidden, shown if needed */
	margin-bottom: 0.5em;
}

div.Keypad button{
	font-family: var(--strFontFace);
	font-size: 120%;
	background-color: #ffffff;
	color: #000000;
	width: 2em;
	border-style: solid;
	border-width: 1px;
	border-radius: 0.5em;
	color: var(--strTextColor);
	box-shadow: 0.2em 0.3em 0.2em var(--strTextColor);
}

/* JQuiz styles */

div.QuestionNavigation{
	text-align: center;
}

.QNum{
	margin: 0em 1em 0.5em 1em;
	font-weight: bold;
	vertical-align: middle;
}

textarea{
	font-family: var(--strFontFace);
}

.QuestionText{
	text-align: left;
	margin: 0px;
	font-size: 1em;
}

.Answer{
	font-size: 120%;
}

.PartialAnswer{
	font-size: 120%;
	letter-spacing: 0.1em;
	color: var(--strTitleColor);
}

.Highlight{
	color: #000000;
	background-color: #ffff00;
	font-weight: bold;
	font-size: 120%;
}

ol.QuizQuestions{
	text-align: left;
	list-style-type: none;
}

li.QuizQuestion{
	padding: 1em;
	border-style: solid;
	border-width: 0px 0px 1px 0px;
}

ol.MCAnswers{
	text-align: left;
	list-style-type: upper-alpha;
	padding: 1em;
}

ol.MCAnswers li{
	margin-bottom: 1em;
}

ol.MSelAnswers{
	text-align: left;
	list-style-type: lower-alpha;
	padding: 1em;
}

div.ShortAnswer{
	padding: 1em;
}

.FuncButton {
	border-style: solid;
	border-radius: 0.5em;
	padding: 0.5em;
	min-width: 3em;

	border-left-color: var(--strFuncLightColor);
	border-top-color: var(--strFuncLightColor);
	border-right-color: var(--strFuncShadeColor);
	border-bottom-color: var(--strFuncShadeColor);
	color: var(--strTextColor);
	background-color: var(--strExBGColor);

	border-width: 1pt;
	cursor: pointer;	
	box-shadow: 0.2em 0.3em 0.2em var(--strFuncShadeColor);
}

.FuncButton:active {
	box-shadow: none;
}

.FuncButton:hover{
	color: var(--strExBGColor);
	background-color: var(--strTextColor);
}

/*BeginNavBarStyle*/

div.NavButtonBar{
	background-color: var(--strNavBarColor);
	text-align: center;
	margin: 0.25rem 0;
	clear: both;
	font-size: 1em;
	padding: 0.2em;
	box-sizing: border-box;
}

.NavButton {
	border-style: solid;
	border-radius: 0.5em;
	padding: 0.5em;
	min-width: 3em;
	
	border-left-color: var(--strNavLightColor);
	border-top-color: var(--strNavLightColor);
	border-right-color: var(--strNavShadeColor);
	border-bottom-color: var(--strNavShadeColor); 
	background-color: var(--strNavBarColor);
	color: var(--strNavTextColor);

	border-width: 1pt;
	cursor: pointer;	
	box-shadow: 0.2em 0.3em 0.2em var(--strNavShadeColor);
}

.NavButton:active {
	box-shadow: none;
}

.NavButton:hover{
	color: var(--strNavBarColor);
	background-color: var(--strNavTextColor);
}

/*EndNavBarStyle*/

a{
	color: var(--strLinkColor);
}

a:visited{
	color: var(--strVLinkColor);
}

a:hover{
	color: var(--strLinkColor);
}

div.CardStyle {
	position: absolute;
	font-family: var(--strFontFace);
	font-size: 1em;
	border-style: solid;
	border-radius: 0.5em;
	padding: 0.5em;
	min-width: 2em;
	border-width: 1pt;
	color: var(--strTextColor);
	box-shadow: 0.2em 0.3em 0.2em var(--strTextColor);
	background-color: var(--strExBGColor);
	left: -50px;
	top: -50px;
	overflow: visible;
	touch-action: none;
	user-select: none;
	box-sizing: border-box;
}

div.CardStyleCentered{
	text-align: center;
}

.rtl{
	text-align: right;
	font-size: 140%;
}


</style>

<script>

//<![CDATA[

<!--




//CODE FOR HANDLING NAV BUTTONS AND FUNCTION BUTTONS

function FocusAButton(){
	if (document.getElementById('CheckButton1') != null){
		document.getElementById('CheckButton1').focus();
	}
	else{
		if (document.getElementById('CheckButton2') != null){
			document.getElementById('CheckButton2').focus();
		}
		else{
			document.getElementsByTagName('button')[0].focus();
		}
	}
}




//CODE FOR HANDLING DISPLAY OF POPUP FEEDBACK BOX

var topZ = 1000;

function ShowMessage(Feedback){
	var Output = Feedback + '<br /><br />';
	document.getElementById('FeedbackContent').innerHTML = Output;
	var FDiv = document.getElementById('FeedbackDiv');
	topZ++;
	FDiv.style.zIndex = topZ;
	FDiv.style.top = TopSettingWithScrollOffset(30) + 'px';

	FDiv.style.display = 'block';

	ShowElements(false, 'input');
	ShowElements(false, 'select');
	ShowElements(false, 'object');
	ShowElements(true, 'object', 'FeedbackContent');

//Focus the OK button
	setTimeout("document.getElementById('FeedbackOKButton').focus()", 50);
	
//
}

function ShowElements(Show, TagName, ContainerToReverse){
// added third argument to allow objects in the feedback box to appear
//IE bug -- hide all the form elements that will show through the popup
//FF on Mac bug : doesn't redisplay objects whose visibility is set to visible
//unless the object's display property is changed

	//get container object (by Id passed in, or use document otherwise)
	TopNode = document.getElementById(ContainerToReverse);
	var Els;
	if (TopNode != null) {
		Els = TopNode.getElementsByTagName(TagName);
	} else {
		Els = document.getElementsByTagName(TagName);
	}

	for (var i=0; i<Els.length; i++){
		if (TagName == "object") {
			//manipulate object elements in all browsers
			if (Show == true){
				Els[i].style.visibility = 'visible';
			}
			else{
				Els[i].style.visibility = 'hidden';
			}
		} 
	}
}



function HideFeedback(){
	document.getElementById('FeedbackDiv').style.display = 'none';
	ShowElements(true, 'input');
	ShowElements(true, 'select');
	ShowElements(true, 'object');
}


//GENERAL UTILITY FUNCTIONS AND VARIABLES

//PAGE DIMENSION FUNCTIONS
function PageDim(){
//Get the page width and height
	this.W = 600;
	this.H = 400;
	this.W = document.getElementsByTagName('body')[0].offsetWidth;
	this.H = document.getElementsByTagName('body')[0].offsetHeight;
}

var pg = null;

function GetPageXY(El) {
	var XY = {x: 0, y: 0};
	while(El){
		XY.x += El.offsetLeft;
		XY.y += El.offsetTop;
		El = El.offsetParent;
	}
	return XY;
}

function GetScrollTop(){
	if (typeof(window.pageYOffset) == 'number'){
		return window.pageYOffset;
	}
	else{
		if ((document.body)&&(document.body.scrollTop)){
			return document.body.scrollTop;
		}
		else{
			if ((document.documentElement)&&(document.documentElement.scrollTop)){
				return document.documentElement.scrollTop;
			}
			else{
				return 0;
			}
		}
	}
}

function GetViewportHeight(){
	if (typeof window.innerHeight != 'undefined'){
		return window.innerHeight;
	}
	else{
		if (((typeof document.documentElement != 'undefined')&&(typeof document.documentElement.clientHeight !=
     'undefined'))&&(document.documentElement.clientHeight != 0)){
			return document.documentElement.clientHeight;
		}
		else{
			return document.getElementsByTagName('body')[0].clientHeight;
		}
	}
}

function TopSettingWithScrollOffset(TopPercent){
	var T = Math.floor(GetViewportHeight() * (TopPercent/100));
	return GetScrollTop() + T; 
}

//CODE FOR AVOIDING LOSS OF DATA WHEN BACKSPACE KEY INVOKES history.back()
var InTextBox = false;

function SuppressBackspace(e){ 
	if (InTextBox == true){return;}
	thisKey = e.keyCode;

	var Suppress = false;

	if (thisKey == 8) {
		Suppress = true;
		e.preventDefault();
	}
}

window.addEventListener('keypress',SuppressBackspace,false);

function ReduceItems(InArray, ReduceToSize){
	var ItemToDump=0;
	var j=0;
	while (InArray.length > ReduceToSize){
		ItemToDump = Math.floor(InArray.length*Math.random());
		InArray.splice(ItemToDump, 1);
	}
}

function Shuffle(InArray){
	var Num;
	var Temp = new Array();
	var Len = InArray.length;

	var j = Len;

	for (var i=0; i<Len; i++){
		Temp[i] = InArray[i];
	}

	for (i=0; i<Len; i++){
		Num = Math.floor(j  *  Math.random());
		InArray[i] = Temp[Num];

		for (var k=Num; k < (j-1); k++) {
			Temp[k] = Temp[k+1];
		}
		j--;
	}
	return InArray;
}

function WriteToInstructions(Feedback) {
	document.getElementById('InstructionsDiv').innerHTML = Feedback;

}




function EscapeDoubleQuotes(InString){
	return InString.replace(/"/g, '&quot;')
}

function TrimString(InString){
        var x = 0;

        if (InString.length != 0) {
                while ((InString.charAt(InString.length - 1) == '\u0020') || (InString.charAt(InString.length - 1) == '\u000A') || (InString.charAt(InString.length - 1) == '\u000D')){
                        InString = InString.substring(0, InString.length - 1)
                }

                while ((InString.charAt(0) == '\u0020') || (InString.charAt(0) == '\u000A') || (InString.charAt(0) == '\u000D')){
                        InString = InString.substring(1, InString.length)
                }

                while (InString.indexOf('  ') != -1) {
                        x = InString.indexOf('  ')
                        InString = InString.substring(0, x) + InString.substring(x+1, InString.length)
                 }

                return InString;
        }

        else {
                return '';
        }
}

function FindLongest(InArray){
	if (InArray.length < 1){return -1;}

	var Longest = 0;
	for (var i=1; i<InArray.length; i++){
		if (InArray[i].length > InArray[Longest].length){
			Longest = i;
		}
	}
	return Longest;
}

//SELECTION OBJECT FOR TYPING WITH KEYPAD
var selObj = null;
            
SelObj = function(box){
	this.box = box;
	this.selStart = this.box.selectionStart;
	this.selEnd = this.box.selectionEnd;
	this.selText = this.box.value.substring(this.selStart, this.selEnd);
	return this;
}

function setSelText(newText){
	var caretPos = this.selStart + newText.length;
	var newValue = this.box.value.substring(0, this.selStart);
	newValue += newText;
	newValue += this.box.value.substring(this.selEnd, this.box.value.length);
	this.box.value = newValue;
	this.box.setSelectionRange(caretPos, caretPos);
	this.box.focus();
}
SelObj.prototype.setSelText = setSelText;

function setSelSelectionRange(start, end){
	this.box.setSelectionRange(start, end);
}
SelObj.prototype.setSelSelectionRange = setSelSelectionRange;

//UNICODE CHARACTER FUNCTIONS
function IsCombiningDiacritic(CharNum){
	var Result = (((CharNum >= 0x0300)&&(CharNum <= 0x370))||((CharNum >= 0x20d0)&&(CharNum <= 0x20ff)));
	Result = Result || (((CharNum >= 0x3099)&&(CharNum <= 0x309a))||((CharNum >= 0xfe20)&&(CharNum <= 0xfe23)));
	return Result;
}

function IsCJK(CharNum){
	return ((CharNum >= 0x3000)&&(CharNum < 0xd800));
}

//SETUP FUNCTIONS
//BROWSER WILL REFILL TEXT BOXES FROM CACHE IF NOT PREVENTED
function ClearTextBoxes(){
	var NList = document.getElementsByTagName('input');
	for (var i=0; i<NList.length; i++){
		if ((NList[i].id.indexOf('Guess') > -1)||(NList[i].id.indexOf('Gap') > -1)){
			NList[i].value = '';
		}
		if (NList[i].id.indexOf('Chk') > -1){
			NList[i].checked = '';
		}
	}
}







//JQUIZ CORE JAVASCRIPT CODE

var CurrQNum = 0;
var CorrectIndicator = '&#x2714;';
var IncorrectIndicator = '&#x2718;';
var YourScoreIs = 'Su puntaje es:';

//New for 6.2.2.0
var CompletedSoFar = 'Preguntas contestadas hasta este punto: ';
var ExerciseCompleted = 'Ejercicio completado.';
var ShowCompletedSoFar = true;

var ContinuousScoring = true;
var CorrectFirstTime = 'Respuestas correctas al primer intento: ';
var ShowCorrectFirstTime = true;
var ShuffleQs = false;
var ShuffleAs = false;
var DefaultRight = 'Correcto!';
var DefaultWrong = 'Incorrecto!';
var QsToShow = 1;
var Score = 0;
var Finished = false;
var Qs = null;
var QArray = new Array();
var ShowingAllQuestions = false;
var ShowAllQuestionsCaption = 'Mostrar todas las preguntas';
var ShowOneByOneCaption = 'Mostrar preguntas de una en una';
var State = new Array();
var Feedback = '';
var TimeOver = false;
var strInstructions = '';
var Locked = false;

//The following variable can be used to add a message explaining that
//the question is finished, so no further marking will take place.
var strQuestionFinished = '';

function CompleteEmptyFeedback(){
	var QNum, ANum;
	for (QNum=0; QNum<I.length; QNum++){
//Only do this if not multi-select
		if (I[QNum][2] != '3'){
  		for (ANum = 0; ANum<I[QNum][3].length; ANum++){
  			if (I[QNum][3][ANum][1].length < 1){
  				if (I[QNum][3][ANum][2] > 0){
  					I[QNum][3][ANum][1] = DefaultRight;
  				}
  				else{
  					I[QNum][3][ANum][1] = DefaultWrong;
  				}
  			}
  		}
		}
	}
}

function SetUpQuestions(){
	var AList = new Array(); 
	var QList = new Array();
	var i, j;
	Qs = document.getElementById('Questions');
	while (Qs.getElementsByTagName('li').length > 0){
		QList.push(Qs.removeChild(Qs.getElementsByTagName('li')[0]));
	}
	var DumpItem = 0;
	if (QsToShow > QList.length){
		QsToShow = QList.length;
	}
	while (QsToShow < QList.length){
		DumpItem = Math.floor(QList.length*Math.random());
		for (j=DumpItem; j<(QList.length-1); j++){
			QList[j] = QList[j+1];
		}
		QList.length = QList.length-1;
	}
	if (ShuffleQs == true){
		QList = Shuffle(QList);
	}
	if (ShuffleAs == true){
		var As;
		for (var i=0; i<QList.length; i++){
			As = QList[i].getElementsByTagName('ol')[0];
			if (As != null){
  			AList.length = 0;
				while (As.getElementsByTagName('li').length > 0){
					AList.push(As.removeChild(As.getElementsByTagName('li')[0]));
				}
				AList = Shuffle(AList);
				for (j=0; j<AList.length; j++){
					As.appendChild(AList[j]);
				}
			}
		}
	}
	
	for (i=0; i<QList.length; i++){
		Qs.appendChild(QList[i]);
		QArray[QArray.length] = QList[i];
	}

//Show the first item
	QArray[0].style.display = '';
	
//Now hide all except the first item
	for (i=1; i<QArray.length; i++){
		QArray[i].style.display = 'none';
	}		
	SetQNumReadout();
	
	SetFocusToTextbox();
}

function SetFocusToTextbox(){
//if there's a textbox, set the focus in it
	if (QArray[CurrQNum].getElementsByTagName('input')[0] != null){
		QArray[CurrQNum].getElementsByTagName('input')[0].focus();
//and show a keypad if there is one
		if (document.getElementById('CharacterKeypad') != null){
			document.getElementById('CharacterKeypad').style.display = 'block';
		}
	}
	else{
  	if (QArray[CurrQNum].getElementsByTagName('textarea')[0] != null){
  		QArray[CurrQNum].getElementsByTagName('textarea')[0].focus();	
//and show a keypad if there is one
			if (document.getElementById('CharacterKeypad') != null){
				document.getElementById('CharacterKeypad').style.display = 'block';
			}
		}
//This added for 6.0.4.11: hide accented character buttons if no textbox
		else{
			if (document.getElementById('CharacterKeypad') != null){
				document.getElementById('CharacterKeypad').style.display = 'none';
			}
		}
	}
}

function ChangeQ(ChangeBy){
//The following line prevents moving to another question until the current
//question is answered correctly. Uncomment it to enable this behaviour. 
//	if (State[CurrQNum][0] == -1){return;}
	if (((CurrQNum + ChangeBy) < 0)||((CurrQNum + ChangeBy) >= QArray.length)){return;}
	QArray[CurrQNum].style.display = 'none';
	CurrQNum += ChangeBy;
	QArray[CurrQNum].style.display = '';
//Undocumented function added 10/12/2004
	ShowSpecialReadingForQuestion();
	SetQNumReadout();
	SetFocusToTextbox();
}

var HiddenReadingShown = false;
function ShowSpecialReadingForQuestion(){
//Undocumented function for showing specific reading text elements which change with each question
//Added on 10/12/2004
	if (document.getElementById('ReadingDiv') != null){
		if (HiddenReadingShown == true){
			document.getElementById('ReadingDiv').innerHTML = '';
		}
		if (QArray[CurrQNum] != null){
//Fix for 6.0.4.25
			var Children = QArray[CurrQNum].getElementsByTagName('div');
			for (var i=0; i<Children.length; i++){
			if (Children[i].className=="HiddenReading"){
					document.getElementById('ReadingDiv').innerHTML = Children[i].innerHTML;
					HiddenReadingShown = true;
//Hide the ShowAllQuestions button to avoid confusion
					if (document.getElementById('ShowMethodButton') != null){
						document.getElementById('ShowMethodButton').style.display = 'none';
					}
				}
			}	
		}
	}
}

function SetQNumReadout(){
	document.getElementById('QNumReadout').innerHTML = (CurrQNum+1) + ' / ' + QArray.length;
	if ((CurrQNum+1) >= QArray.length){
		if (document.getElementById('NextQButton') != null){
			document.getElementById('NextQButton').style.visibility = 'hidden';
		}
	}
	else{
		if (document.getElementById('NextQButton') != null){
			document.getElementById('NextQButton').style.visibility = 'visible';
		}
	}
	if (CurrQNum <= 0){
		if (document.getElementById('PrevQButton') != null){
			document.getElementById('PrevQButton').style.visibility = 'hidden';
		}
	}
	else{
		if (document.getElementById('PrevQButton') != null){
			document.getElementById('PrevQButton').style.visibility = 'visible';
		}
	}
}

var I=new Array();
I[0]=new Array();I[0][0]=100;
I[0][1]='';
I[0][2]='0';
I[0][3]=new Array();
I[0][3][0]=new Array('Software de aplicaci\u00F3n, Software propietario y Software de demostraci\u00F3n.','',0,0,1);
I[0][3][1]=new Array('Software de demostraci\u00F3n, Software de evaluaci\u00F3n y Software de sistema.','',0,0,1);
I[0][3][2]=new Array('Software de sistema, software de programaci\u00F3n y software de aplicaci\u00F3n.','',1,100,1);


function StartUp(){

//If there's only one question, no need for question navigation controls
	if (QsToShow < 2){
		document.getElementById('QNav').style.display = 'none';
	}
	
//Stash the instructions so they can be redisplayed
	strInstructions = document.getElementById('InstructionsDiv').innerHTML;
	

	

	

	
	CompleteEmptyFeedback();

	SetUpQuestions();
	ClearTextBoxes();
	CreateStatusArray();
	

	
//Check search string for q parameter
	if (document.location.search.length > 0){
		if (ShuffleQs == false){
			var JumpTo = parseInt(document.location.search.substring(1,document.location.search.length))-1;
			if (JumpTo <= QsToShow){
				ChangeQ(JumpTo);
			}
		}
	}
//Undocumented function added 10/12/2004
	ShowSpecialReadingForQuestion();
}

function ShowHideQuestions(){
	document.getElementById('ShowMethodButton').style.display = 'none';
	if (ShowingAllQuestions == false){
		for (var i=0; i<QArray.length; i++){
				QArray[i].style.display = '';
			}
		document.getElementById('Questions').style.listStyleType = 'decimal';
		document.getElementById('OneByOneReadout').style.display = 'none';
		document.getElementById('ShowMethodButton').innerHTML = ShowOneByOneCaption;
		ShowingAllQuestions = true;
	}
	else{
		for (var i=0; i<QArray.length; i++){
				if (i != CurrQNum){
					QArray[i].style.display = 'none';
				}
			}
		document.getElementById('Questions').style.listStyleType = 'none';
		document.getElementById('OneByOneReadout').style.display = '';
		document.getElementById('ShowMethodButton').innerHTML = ShowAllQuestionsCaption;
		ShowingAllQuestions = false;	
	}
	document.getElementById('ShowMethodButton').style.display = 'inline';
}

function CreateStatusArray(){
	var QNum, ANum;
//For each item in the item array
	for (QNum=0; QNum<I.length; QNum++){
//Check if the question still exists (hasn't been nuked by showing a random selection)
		if (document.getElementById('Q_' + QNum) != null){
			State[QNum] = new Array();
			State[QNum][0] = -1; //Score for this q; -1 shows question not done yet
			State[QNum][1] = new Array(); //answers
			for (ANum = 0; ANum<I[QNum][3].length; ANum++){
				State[QNum][1][ANum] = 0; //answer not chosen yet; when chosen, will store its position in the series of choices
			}
			State[QNum][2] = 0; //tries at this q so far
			State[QNum][3] = 0; //incrementing percent-correct values of selected answers
			State[QNum][4] = 0; //penalties incurred for hints
			State[QNum][5] = ''; //Sequence of answers chosen by number
		}
		else{
			State[QNum] = null;
		}
	}
}



function CheckMCAnswer(QNum, ANum, Btn){
//if question doesn't exist, bail
	if (State[QNum].length < 1){return;}
	
//Get the feedback
	Feedback = I[QNum][3][ANum][1];
	
//Now show feedback and bail if question already complete
	if (State[QNum][0] > -1){
//Add an extra message explaining that the question
// is finished if defined by the user
		if (strQuestionFinished.length > 0){Feedback += '<br />' + strQuestionFinished;}
//Show the feedback
		ShowMessage(Feedback);
//New for 6.2.2.1: If you want to mark an answer as correct even when it's the final choice, uncomment this line.
//		if (I[QNum][3][ANum][2] >= 1){Btn.innerHTML = CorrectIndicator;}else{Btn.innerHTML = IncorrectIndicator;}	
		return;
	}
	
//Hide the button while processing
	Btn.style.display = 'none';

//Increment the number of tries
	State[QNum][2]++;
	
//Add the percent-correct value of this answer
	State[QNum][3] += I[QNum][3][ANum][3];
	
//Store the try number in the answer part of the State array, for tracking purposes
	State[QNum][1][ANum] = State[QNum][2];
	if (State[QNum][5].length > 0){State[QNum][5] += ' | ';}
	State[QNum][5] += String.fromCharCode(65+ANum);
	
//Should this answer be accepted as correct?
	if (I[QNum][3][ANum][2] < 1){
//It's wrong

//Mark the answer
		Btn.innerHTML = IncorrectIndicator;
		
//Remove any previous score unless exercise is finished (6.0.3.8+)
		if (Finished == false){
			WriteToInstructions(strInstructions);
		}	
		
//Check whether this leaves just one MC answer unselected, in which case the Q is terminated
		var RemainingAnswer = FinalAnswer(QNum);
		if (RemainingAnswer > -1){
//Behave as if the last answer had been selected, but give no credit for it
//Increment the number of tries
			State[QNum][2]++;		
		
//Calculate the score for this question
			CalculateMCQuestionScore(QNum);
			
//Get the overall score and add it to the feedback
			CalculateOverallScore();
//New for 6.2.2.1
			var QsDone = CheckQuestionsCompleted();
			if ((ContinuousScoring == true)||(Finished == true)){
				Feedback += '<br />' + YourScoreIs + ' ' + Score + '%.' + '<br />' + QsDone;
				WriteToInstructions(YourScoreIs + ' ' + Score + '%.' + '<br />' + QsDone);
			}
			else{
				WriteToInstructions(QsDone);
			}
		}
	}
	else{
//It's right
//Mark the answer
		Btn.innerHTML = CorrectIndicator;
				
//Calculate the score for this question
		CalculateMCQuestionScore(QNum);
		
//New for 6.2.2.0
		var QsDone = CheckQuestionsCompleted();

//Get the overall score and add it to the feedback
		if (ContinuousScoring == true){
			CalculateOverallScore();
			if ((ContinuousScoring == true)||(Finished == true)){
				Feedback += '<br />' + YourScoreIs + ' ' + Score + '%.' + '<br />' + QsDone;
				WriteToInstructions(YourScoreIs + ' ' + Score + '%.' + '<br />' + QsDone);
			}
		}
		else{
			WriteToInstructions(QsDone);
		}
	}
	
//Show the button again
	Btn.style.display = 'inline';
	
//Finally, show the feedback	
	ShowMessage(Feedback);
	
//Check whether all questions are now done
	CheckFinished();
}

function CalculateMCQuestionScore(QNum){
	var Tries = State[QNum][2] + State[QNum][4]; //include tries and hint penalties
	var PercentCorrect = State[QNum][3];
	var TotAns = GetTotalMCAnswers(QNum);
	var HintPenalties = State[QNum][4];
	
//Make sure it's not already complete

	if (State[QNum][0] < 0){
//Allow for Hybrids
		if (HintPenalties >= 1){
			State[QNum][0] = 0;
		}
		else{
//This line calculates the score for this question
			if (TotAns == 1){
				State[QNum][0] = 1;
			}
			else{
				State[QNum][0] = ((TotAns-((Tries*100)/State[QNum][3]))/(TotAns-1));
			}
		}
//Fix for Safari bug added for version 6.0.3.42 (negative infinity problem)
		if ((State[QNum][0] < 0)||(State[QNum][0] == Number.NEGATIVE_INFINITY)){
			State[QNum][0] = 0;
		}
	}
}

function GetTotalMCAnswers(QNum){
	var Result = 0;
	for (var ANum=0; ANum<I[QNum][3].length; ANum++){
		if (I[QNum][3][ANum][4] == 1){ //This is an MC answer
			Result++;
		}
	}
	return Result;
}

function FinalAnswer(QNum){
	var UnchosenAnswers = 0;
	var FinalAnswer = -1;
	for (var ANum=0; ANum<I[QNum][3].length; ANum++){
		if (I[QNum][3][ANum][4] == 1){ //This is an MC answer
			if (State[QNum][1][ANum] < 1){ //This answer hasn't been chosen yet
				UnchosenAnswers++;
				FinalAnswer = ANum;
			}
		}
	}
	if (UnchosenAnswers == 1){
		return FinalAnswer;
	}
	else{
		return -1;
	}
}





function CalculateOverallScore(){
	var TotalWeighting = 0;
	var TotalScore = 0;
	
	for (var QNum=0; QNum<State.length; QNum++){
		if (State[QNum] != null){
			if (State[QNum][0] > -1){
				TotalWeighting += I[QNum][0];
				TotalScore += (I[QNum][0] * State[QNum][0]);
			}
		}
	}
	if (TotalWeighting > 0){
		Score = Math.floor((TotalScore/TotalWeighting)*100);
	}
	else{
//if TotalWeighting is 0, no questions so far have any value, so 
//no penalty should be shown.
		Score = 100; 
	}
}

//New for 6.2.2.0
function CheckQuestionsCompleted(){
	if (ShowCompletedSoFar == false){return '';}
	var QsCompleted = 0;
	for (var QNum=0; QNum<State.length; QNum++){
		if (State[QNum] != null){
			if (State[QNum][0] >= 0){
				QsCompleted++;
			}
		}
	}
//Fixes for 6.2.2.2
	if (QsCompleted >= QArray.length){
		return ExerciseCompleted;
	}
	else{
		return CompletedSoFar + ' ' + QsCompleted + '/' + QArray.length + '.';
	}
}

function CheckFinished(){
	var FB = '';
	var AllDone = true;
	for (var QNum=0; QNum<State.length; QNum++){
		if (State[QNum] != null){
			if (State[QNum][0] < 0){
				AllDone = false;
			}
		}
	}
	if (AllDone == true){
	
//Report final score and submit if necessary
		CalculateOverallScore();
		FB = YourScoreIs + ' ' + Score + '%.';
		if (ShowCorrectFirstTime == true){
			var CFT = 0;
			for (QNum=0; QNum<State.length; QNum++){
				if (State[QNum] != null){
					if (State[QNum][0] >= 1){
						CFT++;
					}
				}
			}
			FB += '<br />' + CorrectFirstTime + ' ' + CFT + '/' + QsToShow;
		}
		
//New for 6.2.2.0
		FB += '<br />' + ExerciseCompleted;
		
		WriteToInstructions(FB);
		
		Finished == true;




		TimeOver = true;
		Locked = true;
		


		Finished = true;
		Detail = '<?xml version="1.0"?><hpnetresult><fields>';
		for (QNum=0; QNum<State.length; QNum++){
			if (State[QNum] != null){
				if (State[QNum][5].length > 0){
					Detail += '<field><fieldname>Question #' + (QNum+1) + '</fieldname><fieldtype>question-tracking</fieldtype><fieldlabel>Q ' + (QNum+1) + '</fieldlabel><fieldlabelid>QuestionTrackingField</fieldlabelid><fielddata>' + State[QNum][5] + '</fielddata></field>';
				}
			}
		}
		Detail += '</fields></hpnetresult>';
	}

}










//-->

//]]>

</script>


</head>

<body onload="StartUp()" id="TheBody" >

<!-- BeginTopNavButtons -->


<div class="NavButtonBar" id="TopNavBar">




<button class="NavButton" onclick="location='index.php'; return false;"> Index </button>




</div>



<!-- EndTopNavButtons -->

<div class="Titles">
	<h2 class="ExerciseTitle">Quiz de software seg&#x00FA;n su uso</h2>

	<h3 class="ExerciseSubtitle">Quiz</h3>



</div>

<div id="InstructionsDiv" class="StdDiv">
	<div id="Instructions">Seleccione una &#x00FA;nica respuesta correcta.</div>
</div>


<div id="ContainerDiv">



<div class="ExerciseContainer">

<div id="QNav" class="QuestionNavigation">

<p style="text-align: right;">
<button id="ShowMethodButton" class="FuncButton" onclick="ShowHideQuestions(); return false;">Mostrar todas las preguntas</button>
</p>

<div id="OneByOneReadout">
<button id="PrevQButton" class="FuncButton" onclick="ChangeQ(-1); return false;">&lt;=</button>

<span id="QNumReadout" class="QNum">&#160;</span>

<button id="NextQButton" class="FuncButton" onclick="ChangeQ(1); return false;">=&gt;</button>
<br />
</div>

</div>
 
<ol class="QuizQuestions" id="Questions">
<li class="QuizQuestion" id="Q_0" style="display: none;"><div class="QuestionText">&#x00BF;Cu&#x00E1;les son los tres tipos de software seg&#x00FA;n su uso?</div><ol class="MCAnswers"><li id="Q_0_0"><button class="FuncButton" id="Q_0_0_Btn" onclick="CheckMCAnswer(0,0,this)">?</button>&#160;&#160;Software de aplicaci&#x00F3;n, Software propietario y Software de demostraci&#x00F3;n.</li><li id="Q_0_1"><button class="FuncButton" id="Q_0_1_Btn" onclick="CheckMCAnswer(0,1,this)">?</button>&#160;&#160;Software de demostraci&#x00F3;n, Software de evaluaci&#x00F3;n y Software de sistema.</li><li id="Q_0_2"><button class="FuncButton" id="Q_0_2_Btn" onclick="CheckMCAnswer(0,2,this)">?</button>&#160;&#160;Software de sistema, software de programaci&#x00F3;n y software de aplicaci&#x00F3;n.</li></ol></li></ol>



</div>

</div>

<div class="Feedback" id="FeedbackDiv">
<div class="FeedbackText" id="FeedbackContent"></div>
<button id="FeedbackOKButton" class="FuncButton" onclick="HideFeedback(); return false;">&#160;OK&#160;</button>
</div>

<!-- BeginBottomNavButtons -->


<div class="NavButtonBar" id="BottomNavBar">




<button class="NavButton" onclick="location='index.php'; return false;"> Index </button>




</div>
<form>
		<CENTER><input type="button" value="Enviar respuestas" onclick="enviar()"></CENTER>
	</form>



<!-- EndBottomNavButtons -->

<!-- BeginSubmissionForm -->

<!-- EndSubmissionForm -->

</body>

</html>
