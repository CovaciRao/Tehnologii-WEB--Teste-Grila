<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Rezultate</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body background = "http://www.bullyproject.com/wp-content/uploads/light_gray_windows_8_background_by_gifteddeviant-d4wofjz.png">

	<div id="page-wrap">
<font size="8" color="blue">REZULTATE</font>  <BR><BR>
		
		
        <?php
		error_reporting(0); // temporar!
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5) { $totalCorrect++; }
             echo "Raspunsuri corecte: " ;
            echo $totalCorrect;
			echo " / 5" ;
            
        ?>
	
	</div>
	<br>
	 <iframe src="DB\billing.php" name="iframe_a" width="100%" height="500" frameborder="0" scrolling="no">
							   
<p>Browserul dvs. nu este la zi. Instalati cea mai noua versiune, apoi reveniti.</p>
</iframe>
	<center>
	<a href="index.html">Inapoi</a>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>
<center>
<br>
<FORM><INPUT Type="button" VALUE="Inapoi la pagina principala" onClick="history.go(-3);return true;"></FORM>
<br>
</body>

</html>