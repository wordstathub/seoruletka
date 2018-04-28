<?php
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>
<center>
<br/>
<br/>
  <h1>SEO-рулетка</h1>
<br/>
  <h2>Кому достанется проект?</h2>
<big>
<?php
$quotes[] = 'Саша';
$quotes[] = 'Илья';
$quotes[] = 'Николай';
srand ((double) microtime() * 1000000);
$random_number = rand(0,count($quotes)-1);
echo ($quotes[$random_number]);  
?>
</big>
</center>
