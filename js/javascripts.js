function openWindow(page_name) {
      winStats='toolbar=no,location=no,directories=no,menubar=no,'
      winStats+='scrollbars=yes,resizable=yes,status=yes,width=550,height=550'
      if (navigator.appName.indexOf("Microsoft")>=0) {
        winStats+=',left=15,top=20'
      }else{
        winStats+=',screenX=15,screenY=20'
      }
      floater=window.open(page_name,"floater",winStats);
}

