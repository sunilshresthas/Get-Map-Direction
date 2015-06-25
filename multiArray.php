<?php 
	
	$multi[]=array('3','4','5');
        $multi[]=array('6','7','8');
	echo '<pre>'; print_r($multi); echo '</pre>';
        
        $max = false;
        $min = false;
        
        foreach($multi as $value){
          
            if(is_array($value)){
                foreach($value as $val){
                    if($max < $val || $max === false)
                        $max = $val;
                    if($min > $val || $min === false)
                        $min = $val;
                }
            }
            else{
                if($max < $value || $max === false)
                    $max = $value;
                if($min > $value || $min === false)
                    $min = $value;
                
            }  
        }
        
        echo 'maximum number->'.$max;
        
        echo '<br />minimum number->'.$min;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
<meta name="description" lang="en" content="A responsive CSS3 slider for any content (a text/image demo with play/pause toggle). Continuously cycle through slides with the previous and next arrow controls."/>
<title>Responsive CSS3 Any Content Slider (with JavaScript auto-play and simple controls)</title>
</head>
<body>
    <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
    
<script>
 window.fbAsyncInit = function() {
    FB.init({
      appId      : '497291720420592',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>