
 var refresh =$window.localStorage.getItem('refresh');
 console.log(refresh);
 if(refresh===null){
  window.location.reload(true);
  $window.localStorage.setItem('refresh',"1");
 }
