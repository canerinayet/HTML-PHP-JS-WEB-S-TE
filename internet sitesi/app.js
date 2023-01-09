function kontrol(value) {
    if (value.length > 10) {
        alert("Lütfen 10 basamaktan kısa bir şifre yazınız.");
        return false
    }
    return true
}

window.onload = function () {
    document.querySelector("#kayit").addEventListener("submit", function (e) {
        let a, b, c, d, f;
        a = document.form.kadi.value;
        b = document.form.tel.value;
        c = document.form.mail.value;
        d = document.form.sifre.value;
        f = document.form.tcno.value;
        let ek = document.querySelector("#tc").value;


        if (a == "" || b == "" || c == "" || d == "" || f == "") {

            alert("Alanları Boş Geçmeyiniz.");
            document.form.kadi.focus();
            e.preventDefault();


        }
        if (ek.length != 11) {
            alert("TC Kimlik Numarası Hatalı");
            document.form.kadi.focus();
            e.preventDefault();
        }
        else{
        var onay = prompt("Onaylıyorsanız tamam yazınız");
        if (onay != "tamam") {
            e.preventDefault();
        } else {
            alert("Tebrikler kayıt oldunuz");
        }
    }
    });
}


document.querySelector("#giris").addEventListener("submit", function (e) {
        let a = document.querySelector("#kadi")
        let b = document.querySelector("#sifre")
        if (a.value == "") {

            alert("Kullanıcı Adını Boş Geçmeyiniz.");
            document.form.kadi.focus();
            e.preventDefault();


        }
        if (b.value == "") {
            alert("Şifreyi Boş Geçmeyiniz.");
            document.form.sifre.focus();
            e.preventDefault();
        } else {

            alert("Ürünler Sayfasına Yönlendiriliyorsunuz... ");

        }


    }





);



var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}


var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}


var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);






function urun1() {
  var li = document.createElement("li");
  var inputValue = document.querySelector('input[name="urun1"]').value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  


  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}

function urun5() {
  var li = document.createElement("li");
  var inputValue = document.querySelector('input[name="urun5"]').value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  


  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
function urun6() {
  var li = document.createElement("li");
  var inputValue = document.querySelector('input[name="urun6"]').value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  


  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}


function urun4() {
  var li = document.createElement("li");
  var inputValue = document.querySelector('input[name="urun4"]').value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    
  } else {
    document.getElementById("myUL").appendChild(li);
    alert("Ürün sepete eklendi");
  }
  


  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}



function urun2() {
  var li = document.createElement("li");
  var inputValue = document.querySelector('input[name="urun2"]').value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    
  } else {
    document.getElementById("myUL").appendChild(li);
  }

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}





function urun3() {
  var li = document.createElement("li");
  var inputValue = document.querySelector('input[name="urun3"]').value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    
  } else {
    document.getElementById("myUL").appendChild(li);
  }


  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}


function urun2() {
  var li = document.createElement("li");
  var inputValue = document.querySelector('input[name="urun2"]').value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    
  } else {
    document.getElementById("myUL").appendChild(li);
  }


  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}

function sil(){

  var onay = prompt("Onaylıyorsanız tamam yazınız");
        if (onay != "tamam") {
            e.preventDefault();}
}



