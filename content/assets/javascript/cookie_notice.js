if (getCookie('cookiesAccepted') != "true") {
  document.getElementById('cookienotice').style.bottom = "50px";
}

function dismissCookiesNotice() {
  var now = new Date();
  now.setMonth( now.getMonth() + 1 );
  document.cookie = "cookiesAccepted=true; expires=" + now.toUTCString() + "; domain=semivanilla.com;"
  document.getElementById('cookienotice').style.bottom = "-300px";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
