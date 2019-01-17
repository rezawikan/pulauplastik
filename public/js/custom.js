/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/custom.js":
/*!***************************************!*\
  !*** ./resources/assets/js/custom.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $(".front-background").vegas({
    delay: 7000,
    slides: [{
      src: "img/header.png"
    }, {
      src: "img/poster-event.jpg"
    }]
  });

  if (window.pageYOffset >= window.innerHeight) {
    $("nav").addClass("bg-dark");
    $("#problems").addClass("scroll-margin");
    $(".jumbotron .navbar-nav .nav-item .nav-link").addClass("scroll-color-header");
    $(".dropdown .dropdown-menu .dropdown-item").addClass("scroll-color-header");
    $(".dropdown").addClass("bg-dark");
  } else {
    //remove the background property so it comes transparent again (defined in your css)
    $("nav").removeClass("bg-dark");
    $("#problems").removeClass("scroll-margin");
    $(".jumbotron .navbar-nav .nav-item .nav-link").removeClass("scroll-color-header");
    $(".dropdown .dropdown-menu .dropdown-item").removeClass("scroll-color-header");
    $(".dropdown").removeClass("bg-dark");
  }

  $(window).on("scroll", function () {
    if (window.pageYOffset >= window.innerHeight) {
      $("nav").addClass("bg-dark");
      $("#problems").addClass("scroll-margin");
      $(".jumbotron .navbar-nav .nav-item .nav-link").addClass("scroll-color-header");
      $(".dropdown .dropdown-menu .dropdown-item").addClass("scroll-color-header");
      $(".dropdown").addClass("bg-dark");
    } else {
      //remove the background property so it comes transparent again (defined in your css)
      $("nav").removeClass("bg-dark");
      $("#problems").removeClass("scroll-margin");
      $(".jumbotron .navbar-nav .nav-item .nav-link").removeClass("scroll-color-header");
      $(".dropdown .dropdown-menu .dropdown-item").removeClass("scroll-color-header");
      $(".dropdown").removeClass("bg-dark");
    }
  });
  $('.front-arrow').click(function () {
    $('html, body').animate({
      scrollTop: $('#problems').offset().top
    }, 'slow');
  }); // if (window.location.hash.length) {
  //     window.scrollTo(0, 0);
  // }
  //
  // $("nav ul li a[href^='#']").on('click', function(e) {
  //
  //     // prevent default anchor click behavior
  //     e.preventDefault();
  //
  //     // store hash
  //     var hash = this.hash;
  //
  //     // animate
  //     if ($(hash).length) {
  //         $('html, body').animate({
  //             scrollTop: $(hash).offset().top -55
  //         }, 1000, function() {
  //
  //             // when done, add hash to url
  //             // (default click behaviour)
  //             window.location.href = hash;
  //             location.reload();
  //         });
  //     }
  // });
  // direct browser to top right away

  if (window.location.hash) scroll(0, 0); // takes care of some browsers issue

  setTimeout(function () {
    scroll(0, 0);
  }, 1);
  $(function () {
    //your current click function
    $("nav ul li a[href^='#']").on('click', function (e) {
      e.preventDefault();
      console.log('asd');

      if (this.hash) {
        $('html,body').animate({
          scrollTop: $($(this).attr('href')).offset().top
        }, 1000);
      }
    }); // if we have anchor on the url (calling from other page)

    if (window.location.hash) {
      // smooth scroll to the anchor id
      $('html,body').animate({
        scrollTop: $(window.location.hash).offset().top
      }, 1000);
    }
  });
});

/***/ }),

/***/ 2:
/*!*********************************************!*\
  !*** multi ./resources/assets/js/custom.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\pulauplastik\resources\assets\js\custom.js */"./resources/assets/js/custom.js");


/***/ })

/******/ });