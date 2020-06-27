<?php 
for($i=1;$i<=$n;$i++)
{$res=mysqli_fetch_array($t);
  $user=$res['username'];
  $user_date=$res['date'];
  $m="select * from following where username='$username' && followingname='$user'";
  $mc=mysqli_query($con,$m);
  $mn=mysqli_num_rows($mc);
  $com=strcmp($username,$user);
  if($mn==1||$com==0){
 $c="select * from postdata where username='$user' && date='$user_date'";
   $d=mysqli_query($con,$c);
  $user_res=mysqli_fetch_array($d); 
    ?>
<div class="grid" id ="outside">
<div style="padding-bottom:10px;">
&nbsp;&nbsp;&nbsp;&nbsp; <button form="users" type="submit" name="myCountry" value="<?php echo $user; ?>" style="border:0px solid white;color:blue;"><b><?php echo $user; ?></b></button>
<span style="float:right; padding-right:20px;"><?php echo $user_date; ?></span></div>
<div id="headerr" style=" background-color: <?php echo $user_res['bgcolor']; ?>;color:<?php echo $user_res['fontcolor']; ?>;font-family:<?php echo $user_res['fontstyle']; ?>;font-size:<?php echo $user_res['text_size']; ?>;">
<pre><?php echo $user_res['textarea']; ?> </pre>
</div>
<div id="like" ><i class="material-icons ">whatshot</i><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
 <i class="material-icons" style="color:rgb(0, 122, 153);">comment</i>
</div>
<a href="https://wa.me/?text=localhost/ankit/yourcontent.php" data-action="share/whatsapp/share"><i class="material-icons" id="share">share</i></a><br>
</div>
 <?php
}
     }
    ?>