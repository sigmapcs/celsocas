'use strict';

document.addEventListener("DOMContentLoaded", function (event) {
  setInterval(function () {
    var date = new Date();

    var getStringDay = function getStringDay(date) {
      var days = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
      return days[date.getDay()];
    };

    var getStringMonth = function getStringMonth(date) {
      var months = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'setiembre', 'octubre', 'noviembre', 'diciembre'];
      return months[date.getMonth()];
    };

    var hourLeadingZero = function hourLeadingZero(num) {
      return ('0' + num).slice(-2);
    };

    var getAmPmHour = function getAmPmHour(date) {
      var hours = date.getHours(),
          minutes = date.getMinutes(),
          seconds = date.getSeconds(),
          amPm = hours >= 12 ? 'pm' : 'am';
      if (amPm === 'pm') hours -= 12;
      return hourLeadingZero(hours) + ':' + hourLeadingZero(minutes) + ':' + hourLeadingZero(seconds) + amPm;
    };

    var dateFormated = ' ' + getStringDay(date) + ' ' + date.getDate() + ' de ' + getStringMonth(date) + ' de ' + date.getFullYear();

    // let date = new Date();
    document.getElementById('date').textContent = dateFormated;
  }, 1000);
});

document.addEventListener("DOMContentLoaded", function (event) {
  var currentYear = new Date().getFullYear();
  document.getElementById('cyear').textContent = currentYear;
});

document.addEventListener("DOMContentLoaded", function (event) {
  // alert('hola mundo');
  // let iframe = [...document.querySelectorAll('iframe')];
  // iframe.map(el =>{
  //   el.parentElement.classList.add('video');
  //   console.log(el.parentElement);
  // });

});
"use strict";
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

document.addEventListener("DOMContentLoaded", function (event) {
  var getMenues = [].concat(_toConsumableArray(document.querySelectorAll('.list-container-js')));
  var array = [];

  var obj = function obj(name, list) {
    _classCallCheck(this, obj);

    this.name = "";
    this.list = "";
  };

  var setLink = function setLink(menu, title) {
    var menuMore = document.createElement('li');
    menuMore.innerHTML = "\n    <a href=\"#\" class=\"vermas\" rel=\"" + title + "\">...Ver M\xE1s</a>\n  ";
    // console.log(menuMore);
    menu.appendChild(menuMore);
  };

  var createModal = function createModal(rel) {
    var modal = document.createElement('div');
    modal.className = "lightbox-overlay";
    modal.id = "modal";
    var modalC = document.createElement('div');
    var closeM = document.createElement('div');
    closeM.id = "closeM";
    closeM.className = "close-modal";
    closeM.classList.add('icon-close');
    modalC.className = "lightbox-conteinter";
    modalC.innerHTML = "\n      <h2> " + rel + " </h2>\n    ";
    array.map(function (obj) {
      if (obj.name === rel) {
        obj.list.map(function (li) {
          var aorigin = li.querySelector('a');
          var aoriginHref = aorigin.href;
          var aorigintext = aorigin.innerText;
          var liel = document.createElement('li');
          var ael = document.createElement('a');
          ael.href = aoriginHref;
          ael.innerText = aorigintext;
          if (rel != 'blog') {
            ael.setAttribute('target', '_blank');
          }
          liel.appendChild(ael);
          modalC.appendChild(liel);
        });
      }
    });
    modal.appendChild(closeM);
    modal.appendChild(modalC);
    document.body.appendChild(modal);
    setTimeout(function () {
      modalC.classList.add('show');
    }, .1);

    close(modal, modalC);
  };
  var close = function close(el, modalC) {
    el.addEventListener('click', function (e) {
      if (e.target.classList.contains('lightbox-overlay') || e.target.classList.contains('close-modal') || e.target.nodeName === "A") {
        var modal = document.getElementById('modal');
        var modaC = modal.querySelector('.lightbox-conteinter');
        modaC.classList.remove('show');
        setTimeout(function () {
          document.body.removeChild(modal);
        }, 500);
      }
    });
  };

  var menuCom = function menuCom(menu) {
    // console.log(menu);
    var menuC = menu.querySelector('ul');
    var menuT = menu.querySelector('h3');
    var lis = [].concat(_toConsumableArray(menu.querySelectorAll('li')));
    var title = menuT.innerText;
    var newO = new obj();
    newO.name = title;
    newO.list = lis;
    array.push(newO);
    lis.forEach(function (el, i) {
      if (i > 1) {
        menuC.removeChild(el);
        // console.log(menuC,el,i)
      }
    });
    setLink(menuC, title);
  };
  // console.log(array);
  getMenues.map(function (menu) {
    return menuCom(menu);
  });

  var verMas = [].concat(_toConsumableArray(document.querySelectorAll('.vermas')));
  // console.log(verMas);
  verMas.map(function (el) {
    el.addEventListener('click', function (e) {
      e.preventDefault();
      var _this = e.target;
      var rel = _this.getAttribute('rel');
      createModal(rel);
    });
  });
  var cardLinks = [].concat(_toConsumableArray(document.querySelectorAll('.card-menu')));
  console.log(cardLinks);
  cardLinks.map(function (el) {
    el.addEventListener('click', function (e) {
      e.preventDefault();
      // console.log(e.target.parentElement);
      var _this = e.target;
      var _target = void 0;
      if (_this.nodeName === 'IMG' || _this.nodeName === 'H3') {
        _target = _this.parentElement.getAttribute('rel');
      } else {
        _target = _this.getAttribute('rel');
      }
      // // let rel = _this.getAttribute('rel');
      createModal(_target);
      console.log(_target);
    });
  });
});