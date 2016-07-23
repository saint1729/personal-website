<html>

<style type="text/css">
h2 {margin:160px 0px 0px 550px;}
img.logo_small {margin:10px 0px 0px 0px;}
form {margin:20px 0px 0px 20px;}
input.submit {margin:05px 0px 0px 20px; width:103px; height:29px; cursor:pointer;}
.textfield {margin:06px 0px 0px 20px; width:500px; height:30px; font-size:20px;}
.footer {text-align:center;}
a {text-decoration:none; }
a:link {color: #00f000; }
a:active {color: #0000ff; }
a:visited {color: #008000; }
a:hover {color: #00f0f0; }
</style>

<?php

echo 	"<head>
	<title>Gobot - for Engineering Students</title>
	</head>
	<body>
	<form action='output.php' method='POST'>
	<table cellpadding='3' cellspacing='4' border='0'>
	<tr>
	<td><a href='index.php'><img class='logo_small' src='gobot_small.png' /></a></td>
	<td><input class='textfield' type='text' name='input' /></td>
	<td><input class='submit' type='submit' name='submit' value='Go on' /></td>
	</tr>
	</table>
	</form>
	</body>" ;

list($width, $height, $type, $attr) = getimagesize("gobot_small.png");

?>


<style type="text/css">
h3.output_title {margin:20px 0px 0px <?php $tm=20+$width+20+20; echo "$tm"."px"?>;}
h4.output_title {margin:20px 0px 0px <?php $tm=20+$width+20+20; echo "$tm"."px"?>;}
img.output_image {margin:20px 0px 0px <?php $tm=20+$width+20+20; echo "$tm"."px"?>;}
</style>


<?php
include 'wa_wrapper/WolframAlphaEngine.php';
$engine = new WolframAlphaEngine( '6KQP3T-EP3PWAQRWY' );

if ($_POST['submit'])
{
	$input = $_POST['input'];
}

//$otherParams = array('format'=>'html');
$resp = $engine->getResults($input);//, $otherParams);

if($resp)
{

		$pods = $resp->getPods();


		$i=0;
		$j=0;
		foreach($pods as $pod)
		{
			
				if($pod->attributes['title'])
				{
						echo "<h3 class='output_title'>".$pod->attributes['title']."<br />"."</h3>";
				}

				foreach($pod->getSubpods() as $subpod)
				{	
					if($subpod->image)//markup)//as $a => $b)
					{
							//echo $pod->markup."<br />";
							//echo $subpod->moutput;
							$src = $subpod->image->attributes['src'];//[];
							echo "<img class='output_image' src = \"$src\" />"."<br /><br /><br />" ;
							$j++;
							//break;
					}
				}

				/*if($i==3)
				{
					break;
				}*/
				
				$i++;
		}
}

//echo $j."<br />";
if($resp)
{
	if (!$j)
	{
			echo "<h4 class='output_title'>Sorry, I couldn't parse that! try something different ...</h4>";
	}
}

?>

<p class='footer'>This WebApp is designed by <b>Sai Nikhil Thirandas</b>. &copy;2012 <a href="javascript:void(0)">saint1729</a> <b>|</b> <a href="javascript:void(0)" onclick="window.open('http://products.wolframalpha.com/api/termsofuse.html')">Terms of Use</a></p>

</html>