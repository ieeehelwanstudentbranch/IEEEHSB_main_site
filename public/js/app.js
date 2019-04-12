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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/add-post.js":
/*!**********************************!*\
  !*** ./resources/js/add-post.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

if (document.getElementById('title') && document.getElementById('description')) {
  var title = document.getElementById('title'),
      description = document.getElementById('body');
  title.addEventListener('keyup', function () {
    title.previousElementSibling.classList.add("active", "highlight");

    if (title.value == '') {
      title.previousElementSibling.classList.remove("active", "highlight");
    }
  });
  description.addEventListener('keyup', function () {
    description.previousElementSibling.classList.add("active", "highlight");

    if (description.value == '') {
      description.previousElementSibling.classList.remove("active", "highlight");
    }
  });
}

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
__webpack_require__(/*! ./carousel */ "./resources/js/carousel.js");

__webpack_require__(/*! ./add-post */ "./resources/js/add-post.js");

__webpack_require__(/*! ./dashboard-menu */ "./resources/js/dashboard-menu.js");

__webpack_require__(/*! ./login-form */ "./resources/js/login-form.js");

__webpack_require__(/*! ./published-menu */ "./resources/js/published-menu.js");

__webpack_require__(/*! ./slider-settings */ "./resources/js/slider-settings.js");

__webpack_require__(/*! ./sticky-menu */ "./resources/js/sticky-menu.js"); // require('./glider-settings')

/***/ }),

/***/ "./resources/js/carousel.js":
/*!**********************************!*\
  !*** ./resources/js/carousel.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

if (document.getElementById('carousel-wrap') && document.getElementById('arrow-left')) {
  var switchImage = function switchImage() {
    carousel_items.style.left = -width * currentImageIndex + 'px';
  };

  // auto click function
  var autoclick = function autoclick() {
    next.click();
    setTimeout('autoclick()', 5000);
  };

  var carousels = document.getElementById('carousel-wrap');
  var previous = document.getElementById('arrow-left'),
      next = document.getElementById('arrow-right'),
      carousel_items = document.getElementById('carousel-items'),
      images = carousel_items.getElementsByTagName('div'),
      currentImageIndex = 0,
      width = 500;
  next.addEventListener('click', function () {
    currentImageIndex = currentImageIndex + 1.5;

    if (currentImageIndex >= images.length) {
      currentImageIndex = 0;
    }

    switchImage();
  });
  previous.addEventListener('click', function () {
    currentImageIndex = currentImageIndex - 1.5;

    if (currentImageIndex < 0) {
      currentImageIndex = images.length - 1.5;
    }

    switchImage();
  });
  setTimeout("autoclick()", 5000);
}

/***/ }),

/***/ "./resources/js/dashboard-menu.js":
/*!****************************************!*\
  !*** ./resources/js/dashboard-menu.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

if (document.getElementById('menu-toggle') && document.querySelector('aside')) {
  var menu_button = document.getElementById('menu-toggle'),
      aside = document.querySelector('aside');
  menu_button.addEventListener('click', function () {
    if (aside.style.left == "-100%") {
      aside.style.left = "0%";
    } else {
      aside.style.left = "-100%";
    }
  });
}

/***/ }),

/***/ "./resources/js/login-form.js":
/*!************************************!*\
  !*** ./resources/js/login-form.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

if (document.getElementById('form') && document.getElementById('email') && document.getElementById('password')) {
  var form = document.getElementById('form'),
      email = document.getElementById('email'),
      name = document.getElementById('name'),
      pass = document.getElementById('password'),
      re_password = document.getElementById('re_password');
  email.addEventListener('keyup', function () {
    email.previousElementSibling.classList.add("active", "highlight");

    if (email.value == '') {
      email.previousElementSibling.classList.remove("active", "highlight");
    }
  });
  pass.addEventListener('keyup', function () {
    pass.previousElementSibling.classList.add("active", "highlight");

    if (pass.value == '') {
      pass.previousElementSibling.classList.remove("active", "highlight");
    }
  });
  name.addEventListener('keyup', function () {
    name.previousElementSibling.classList.add("active", "highlight");

    if (name.value == '') {
      name.previousElementSibling.classList.remove("active", "highlight");
    }
  });
  re_password.addEventListener('keyup', function () {
    re_password.previousElementSibling.classList.add("active", "highlight");

    if (re_password.value == '') {
      re_password.previousElementSibling.classList.remove("active", "highlight");
    }
  });
}

/***/ }),

/***/ "./resources/js/published-menu.js":
/*!****************************************!*\
  !*** ./resources/js/published-menu.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

if (document.getElementById('menu-toggle') && document.getElementById('menu')) {
  var menu_button = document.getElementById('menu-toggle'),
      menu = document.getElementById('menu');
  menu_button.addEventListener('click', function () {
    if (menu.style.display == "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  });
}

/***/ }),

/***/ "./resources/js/slider-settings.js":
/*!*****************************************!*\
  !*** ./resources/js/slider-settings.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

if (document.querySelectorAll(".slide") && document.querySelector("#arrow-right")) {
  var reset = function reset() {
    for (var i = 0; i < sliderImages.length; i++) {
      sliderImages[i].style.display = 'none';
    }
  }; // initialize the slider


  var startSlide = function startSlide() {
    reset();
    sliderImages[0].style.display = 'block';
  };

  var autoclick = function autoclick() {
    arrow_right.click();
    setTimeout('autoclick()', 5000);
  }; // show previous 


  var slideLeft = function slideLeft() {
    reset();
    sliderImages[current - 1].style.display = 'block';
    current--;
  }; // show next 


  var slideRight = function slideRight() {
    reset();
    sliderImages[current + 1].style.display = 'block';
    current++;
  }; // left arrow click


  var sliderImages = document.querySelectorAll(".slide"),
      arrow_right = document.querySelector("#arrow-right"),
      arrow_left = document.querySelector("#arrow-left"),
      current = 0;
  arrow_left.addEventListener('click', function () {
    if (current === 0) {
      current = sliderImages.length;
    }

    slideLeft();
  }); // right arrow click

  arrow_right.addEventListener('click', function () {
    if (current === sliderImages.length - 1) {
      current = -1;
    }

    slideRight();
  });
  startSlide();
  setTimeout("autoclick()", 5000);
}

/***/ }),

/***/ "./resources/js/sticky-menu.js":
/*!*************************************!*\
  !*** ./resources/js/sticky-menu.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

if (document.querySelector('header')) {
  var header = document.querySelector('header');
  window.addEventListener('scroll', function () {
    if (window.pageYOffset >= 200) {
      header.classList.add('sticky');
    } else {
      header.classList.remove('sticky');
    }
  });
}

/***/ }),

/***/ "./resources/sass/styles.scss":
/*!************************************!*\
  !*** ./resources/sass/styles.scss ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!****************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/styles.scss ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\moham\Desktop\updating-website\ieeehsb-19-ws\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\moham\Desktop\updating-website\ieeehsb-19-ws\resources\sass\styles.scss */"./resources/sass/styles.scss");


/***/ })

/******/ });
//# sourceMappingURL=app.js.map