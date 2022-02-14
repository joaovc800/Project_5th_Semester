/*!
  * Ace Admin Template v2.1.1
  * Copyright 2013-2020
  * You need a commercial license to use this product
  * https://bit.ly/35ciMLb
  */
(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory(require('jquery'), require('bootstrap')) :
  typeof define === 'function' && define.amd ? define(['jquery', 'bootstrap'], factory) :
  (global = global || self, global.AceApp = factory(global.jQuery, global.bootstrap));
}(this, (function ($, bootstrap) { 'use strict';

  $ = $ && $.hasOwnProperty('default') ? $['default'] : $;
  bootstrap = bootstrap && bootstrap.hasOwnProperty('default') ? bootstrap['default'] : bootstrap;

  function _typeof(obj) {
    "@babel/helpers - typeof";

    if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") {
      _typeof = function (obj) {
        return typeof obj;
      };
    } else {
      _typeof = function (obj) {
        return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
      };
    }

    return _typeof(obj);
  }

  function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
      throw new TypeError("Cannot call a class as a function");
    }
  }

  function _defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if ("value" in descriptor) descriptor.writable = true;
      Object.defineProperty(target, descriptor.key, descriptor);
    }
  }

  function _createClass(Constructor, protoProps, staticProps) {
    if (protoProps) _defineProperties(Constructor.prototype, protoProps);
    if (staticProps) _defineProperties(Constructor, staticProps);
    return Constructor;
  }

  function _defineProperty(obj, key, value) {
    if (key in obj) {
      Object.defineProperty(obj, key, {
        value: value,
        enumerable: true,
        configurable: true,
        writable: true
      });
    } else {
      obj[key] = value;
    }

    return obj;
  }

  function ownKeys(object, enumerableOnly) {
    var keys = Object.keys(object);

    if (Object.getOwnPropertySymbols) {
      var symbols = Object.getOwnPropertySymbols(object);
      if (enumerableOnly) symbols = symbols.filter(function (sym) {
        return Object.getOwnPropertyDescriptor(object, sym).enumerable;
      });
      keys.push.apply(keys, symbols);
    }

    return keys;
  }

  function _objectSpread2(target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i] != null ? arguments[i] : {};

      if (i % 2) {
        ownKeys(Object(source), true).forEach(function (key) {
          _defineProperty(target, key, source[key]);
        });
      } else if (Object.getOwnPropertyDescriptors) {
        Object.defineProperties(target, Object.getOwnPropertyDescriptors(source));
      } else {
        ownKeys(Object(source)).forEach(function (key) {
          Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key));
        });
      }
    }

    return target;
  }

  function _slicedToArray(arr, i) {
    return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _nonIterableRest();
  }

  function _toConsumableArray(arr) {
    return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread();
  }

  function _arrayWithoutHoles(arr) {
    if (Array.isArray(arr)) {
      for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) arr2[i] = arr[i];

      return arr2;
    }
  }

  function _arrayWithHoles(arr) {
    if (Array.isArray(arr)) return arr;
  }

  function _iterableToArray(iter) {
    if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter);
  }

  function _iterableToArrayLimit(arr, i) {
    if (!(Symbol.iterator in Object(arr) || Object.prototype.toString.call(arr) === "[object Arguments]")) {
      return;
    }

    var _arr = [];
    var _n = true;
    var _d = false;
    var _e = undefined;

    try {
      for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) {
        _arr.push(_s.value);

        if (i && _arr.length === i) break;
      }
    } catch (err) {
      _d = true;
      _e = err;
    } finally {
      try {
        if (!_n && _i["return"] != null) _i["return"]();
      } finally {
        if (_d) throw _e;
      }
    }

    return _arr;
  }

  function _nonIterableSpread() {
    throw new TypeError("Invalid attempt to spread non-iterable instance");
  }

  function _nonIterableRest() {
    throw new TypeError("Invalid attempt to destructure non-iterable instance");
  }

  /**
   * --------------------------------------------------------------------------
   * Ace (v2.1.0): util.js
     Some Utility Functions
  */
  // import $ from 'jquery'
  // import bootstrap from 'bootstrap'
  var Util =
  /*#__PURE__*/
  function () {
    function Util() {
      _classCallCheck(this, Util);
    }

    _createClass(Util, null, [{
      key: "isReducedMotion",
      value: function isReducedMotion() {
        return window.matchMedia('(prefers-reduced-motion)').matches;
      }
      /**
      static hasTransitionStart () {
        if (Util._supportsTransitionStart !== null) return Util._supportsTransitionStart
          Util._supportsTransitionStart = 'ontransitionstart' in window// doesn't work in Chrome
        if (!Util._supportsTransitionStart) {
          var tmp = $('<div style="opacity: 0; transition: opacity 1ms" />').appendTo(document.body)
          tmp.on('transitionstart', function () {
            Util._supportsTransitionStart = true
          }).on('transitionend', function () {
            tmp.remove()
          })
            tmp.get(0).offsetTop
          tmp.css('opacity', '1')
        }
          return Util._supportsTransitionStart
      }
      */

    }, {
      key: "getScrollbarInfo",
      value: function getScrollbarInfo() {
        var recalc = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
        if (recalc === false && Util._scrollbarInfo !== null) return Util._scrollbarInfo;
        var scrollDiv = document.createElement('div');
        scrollDiv.style.overflow = 'scroll';
        scrollDiv.style.position = 'absolute';
        scrollDiv.style.width = '50px';
        scrollDiv.style.height = '50px';
        var scrollbar = {};
        document.body.appendChild(scrollDiv);
        scrollbar.width = scrollDiv.getBoundingClientRect().width - scrollDiv.clientWidth;
        document.documentElement.style.setProperty('--scrollbar-width', scrollbar.width + 'px');
        var thinWidth = scrollbar.width;

        if (window.CSS) {
          scrollbar.thin = window.CSS.supports('scrollbar-width', 'thin'); // currently only firefox 64+ supports it

          if (scrollbar.thin) {
            scrollDiv.style['scrollbar-width'] = 'thin';
            thinWidth = scrollDiv.getBoundingClientRect().width - scrollDiv.clientWidth;
          }

          scrollbar.overlay = window.CSS.supports('overflow', 'overlay');
        } else {
          scrollbar.thin = false;
          scrollDiv.style.overflow = 'overlay'; // Webkit/Chromium based browsers support it

          scrollbar.overlay = scrollbar.width > 0 && scrollDiv.getBoundingClientRect().width - scrollDiv.clientWidth === 0;
        }

        document.documentElement.style.setProperty('--moz-scrollbar-thin', thinWidth + 'px');
        scrollDiv.style['-ms-overflow-style'] = '-ms-autohiding-scrollbar'; // IE

        scrollbar.autohide = scrollbar.width > 0 && scrollDiv.getBoundingClientRect().width - scrollDiv.clientWidth === 0; /// //////////////////////////////////

        document.body.removeChild(scrollDiv);
        Util._scrollbarInfo = scrollbar;
        return Util._scrollbarInfo;
      }
    }]);

    return Util;
  }();

  Util._supportsTransitionStart = null; // static property

  Util._scrollbarInfo = null; // static property

  var Basic =
  /*#__PURE__*/
  function () {
    function Basic() {
      _classCallCheck(this, Basic);
    }

    _createClass(Basic, null, [{
      key: "_HandleBasics",
      value: function _HandleBasics() {
        Basic._handleAlerts();

        Basic._handleDropdowns();

        Basic._handleNavbar();

        Basic._handleTabScroll();

        Basic._handleScrollTop();

        Basic._handleSticky();

        Basic._handleOther();
      }
    }, {
      key: "_handleAlerts",
      value: function _handleAlerts() {
        // collapse alert instead of fading it out
        $(document).on('close.bs.alert.alert-collapse', '.alert.alert-collapse', function (e) {
          e.preventDefault();
          $(this).wrap('<div class="collapse show alert-collapse"></div>').parent().collapse('hide').one('hidden.bs.collapse', function () {
            $(this).remove();
          });
        });
      }
    }, {
      key: "_handleDropdowns",
      value: function _handleDropdowns() {
        // hide dropdown when clicked on an element inside it with "data-dismiss=dropdown" attr
        $(document).on('click', '[data-dismiss=dropdown]', function (e) {
          $(e.target).closest('.dropdown-menu').removeClass('show').parent().removeClass('show');
        }); // don't hide dropdown when clicked inside a .dropdown-clickable element

        $(document).on('click.dropdown-clickable', '.dropdown-clickable', function (e) {
          e.stopImmediatePropagation();
        });
      }
    }, {
      key: "_handleNavbar",
      value: function _handleNavbar() {
        // hide navbar-collapse when clicked on it (i.e. the backdrop)
        $(document).on('click', '.navbar-backdrop.show', function (e) {
          if (e.target === this) $(this).collapse('hide');
        });
        var hideBodyScrollbar = false;
        $('.navbar-collapse').on('shown.bs.collapse', function () {
          hideBodyScrollbar = false; // move focus to it

          $(this).find('.autofocus').focus();

          if (this.classList.contains('navbar-backdrop')) {
            var scrollbarInfo = Util.getScrollbarInfo();

            if (scrollbarInfo.width === 0) {
              document.body.classList.add('mob-navbar-body');
              hideBodyScrollbar = true;
            }
          }
        }).on('hidden.bs.collapse', function () {
          if ($(this).hasClass('auto-collapsing')) {
            $(this).removeClass('auto-collapsing');
            return;
          }

          $('.navbar').removeClass('navbar-expanded');

          if (hideBodyScrollbar) {
            document.body.classList.remove('mob-navbar-body');
          }
        }).on('show.bs.collapse', function () {
          $('.navbar').addClass('navbar-expanded'); // hide other ones

          $('.navbar-collapse.show').addClass('auto-collapsing').css('transition-duration', '.1ms').collapse('hide').css('transition-duration', '');
        }); // if navbar dropdowns are not entirely inside window area, move them accordingly

        var _adjustDropdown = function _adjustDropdown() {
          var isRTL = document.documentElement.classList.contains('rtl');
          var prop = !isRTL ? 'marginLeft' : 'marginRight';
          this.style[prop] = '';
          var rect = this.getBoundingClientRect();
          if (rect.left < 0) this.style[prop] = parseInt(-1 * rect.left) + 5 + 'px';else {
            var sw = document.body.scrollWidth;

            if (rect.right > sw) {
              this.style[prop] = parseInt(sw - rect.right - 5) + 'px';
            }
          }
        };

        $('.navbar').on('transitionstart.adjust', '.dropdown-mega .dropdown-menu', function (ev) {
          if (ev.target !== this || ev.originalEvent.propertyName !== 'transform') return;

          _adjustDropdown.call(this);
        });
        $('.navbar').on('shown.bs.dropdown', '.dropdown-mega .dropdown-menu', function () {
          var pos = window.getComputedStyle(this).position;
          if (pos === 'absolute') _adjustDropdown.call(this);
        });
      }
    }, {
      key: "_handleTabScroll",
      value: function _handleTabScroll() {
        var _firefox = 'MozAppearance' in document.documentElement.style; // scroll tab button elements into view when clicked


        var _scrollIntoView = function _scrollIntoView() {
          var smooth = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : true;
          var li = this.parentNode;
          var nav = li.parentNode; // if (!nav.classList.contains('nav-tabs-scroll')) return

          var navClientWidth = nav.clientWidth;
          if (nav.scrollWidth <= navClientWidth) return; // don't scroll if not needed
          // scroll to this element (center it)

          var _scrollLeft = li.offsetLeft - (navClientWidth - li.clientWidth) / 2;

          if (_scrollLeft < 0) _scrollLeft = 0;
          smooth = !Util.isReducedMotion() && smooth === true;

          try {
            nav.scrollTo({
              top: 0,
              left: _scrollLeft,
              behavior: smooth ? 'smooth' : 'auto'
            }); // firefox needs double push when scrolling back

            if (_firefox && _scrollLeft < nav.scrollLeft) {
              setTimeout(function () {
                nav.scrollTo({
                  top: 0,
                  left: _scrollLeft,
                  behavior: smooth ? 'smooth' : 'auto'
                });
              }, 0);
            }
          } catch (e) {
            nav.scrollLeft = _scrollLeft;
          }
        };

        $('.nav-tabs-scroll').each(function () {
          var _this = this;

          var active = this.querySelector('.active'); // scroll to active element on page load

          if (active) {
            if (!_firefox) {
              _scrollIntoView.call(active, 0);
            } else {
              // still firefox doesn't scroll back to zero on page load!
              setTimeout(function () {
                _this.scrollLeft = 1;

                _scrollIntoView.call(active, 0);
              }, 500);
            }
          }

          $(this).find('a').on('click', function () {
            _scrollIntoView.call(this);
          });
        }); // tab pane swiping

        if ('ontouchstart' in window) {
          $('.tab-sliding:not([data-swipe="none"]').each(function () {
            var allowedDir = $(this).attr('data-swipe') || null;
            $(this).find('.tab-pane').on('touchstart', function (ev) {
              if (!this.classList.contains('active')) return;
              var curPane = this;
              var isRTL = document.documentElement.classList.contains('rtl');
              var initialTransform = !isRTL ? 'translateX(100%)' : 'translateX(-100%)';
              var touches = ev.originalEvent.changedTouches[0];
              var swipeDir = 0;
              var x1 = touches.pageX;
              var y1 = touches.pageY;
              var t1 = Date.now();
              var curDir = 0;
              var paneWidth = curPane.clientWidth;
              var siblingPane = null;

              function _dismiss() {
                $(curPane).off('touchmove touchend touchcancel');
                curPane.style.transform = '';
                curPane.classList.remove('tab-swiping');

                if (siblingPane) {
                  siblingPane.style.transform = '';
                  siblingPane.classList.remove('tab-swiping');
                }
              }

              function _reset(sibling) {
                sibling.style.transform = '';
                sibling.style.transitionDuration = '1ms';
                sibling.classList.remove('tab-swiping');

                function _transitionEnd() {
                  this.style.transitionDuration = '';
                  this.removeEventListener('transitionend', _transitionEnd);
                }

                sibling.addEventListener('transitionend', _transitionEnd);
              }

              $(this).on('touchmove', function (ev) {
                var touches = ev.changedTouches[0];
                var newX = touches.pageX;
                var newY = touches.pageY;

                if (swipeDir === 0) {
                  var diffY = Math.abs(y1 - newY);
                  var diffX = Math.abs(x1 - newX);

                  if (diffY > diffX) {
                    swipeDir = 2; // vertical i.e. scroll

                    $(curPane).off('touchmove');
                  } else if (diffX > 10) {
                    swipeDir = 1; // horizontal swipe
                  }
                }

                if (swipeDir !== 1) return; // return if not horizontal swipe

                var moveX = parseInt(x1 - newX);
                var newDir = 0;
                if ((allowedDir === null || allowedDir === 'left') && (!isRTL && moveX > 0 || isRTL && moveX < 0)) newDir = 1;else if ((allowedDir === null || allowedDir === 'right') && (!isRTL && moveX < 0 || isRTL && moveX > 0)) newDir = -1;

                if (newDir !== 0 && newDir !== curDir) {
                  if (siblingPane !== null) _reset(siblingPane); // undo previous direction for when we change swipe direction before a touchend

                  curDir = newDir;
                  var targetPane = curPane.getAttribute('data-swipe-' + (curDir === 1 ? 'next' : 'prev'));
                  if (targetPane) targetPane = document.querySelector(targetPane);
                  siblingPane = targetPane || (curDir === 1 ? curPane.nextElementSibling : curPane.previousElementSibling);

                  if (siblingPane === null || siblingPane === curPane) {
                    curDir = 0;
                  } else {
                    curPane.classList.add('tab-swiping');
                    siblingPane.classList.add('tab-swiping');
                  }
                }

                var moveXabs = Math.abs(moveX);

                if (curDir !== 0 && moveXabs < paneWidth + 24) {
                  // don't move more than 32px beyond its size
                  curPane.style.transform = initialTransform + ' translateX(' + -1 * moveX + 'px)';
                  siblingPane.style.transform = 'translateX(' + -1 * moveX + 'px)';
                } else if (curDir === 0 && moveXabs < 24) {
                  curPane.style.transform = initialTransform + ' translateX(' + -1 * moveX + 'px)';
                }
              }) // touchmove
              .on('touchend touchcancel', function (ev) {
                var touches = ev.originalEvent.changedTouches[0];
                var x2 = touches.pageX;
                var t2 = Date.now();
                var diff = Math.abs(x2 - x1);

                _dismiss();

                if (curDir !== 0 && swipeDir === 1 && (diff > paneWidth / 4 || diff > 100 || diff > paneWidth / 6 && t2 - t1 < 300)) {
                  // if moved more than 1/4 of its width or 100px or 1/6 in less than 300ms
                  siblingPane.classList.add('active', 'show');
                  curPane.classList.remove('active', 'show');
                  var id1 = curPane.id;
                  var id2 = siblingPane.id;
                  $('[href="#' + id1 + '"],[data-target="#' + id1 + '"]').removeClass('active');
                  var newActive = $('[href="#' + id2 + '"],[data-target="#' + id2 + '"]');
                  newActive.addClass('active');

                  _scrollIntoView.call(newActive.get(0));
                }
              }); // touchend
            }); // tab-pane touchstart
          }); // each
        } // 'ontouchstart' in window

      }
    }, {
      key: "_handleScrollTop",
      value: function _handleScrollTop() {
        // scroll to top button
        var _scrollBtn = document.querySelector('.btn-scroll-up'); // return if button is not visible


        if (_scrollBtn === null || _scrollBtn.offsetParent === null) return;

        var showScrollbtn = function showScrollbtn() {
          _scrollBtn.classList.add('scroll-btn-visible');
        };

        var hideScrollBtn = function hideScrollBtn() {
          _scrollBtn.classList.remove('scroll-btn-visible');
        };

        var scrollToTop = function scrollToTop() {
          try {
            // ScrollToOptions parameter may not be supported on some older browsers
            var smoothScroll = !Util.isReducedMotion();
            window.scroll({
              top: 0,
              behavior: smoothScroll ? 'smooth' : 'auto'
            });
          } catch (e) {
            window.scroll(0, 0);
          }
        };

        var _modernBrowser = 'IntersectionObserver' in window;

        _scrollBtn.addEventListener('click', function (e) {
          e.preventDefault();
          if (_modernBrowser) hideScrollBtn();
          scrollToTop();
        });

        if (_modernBrowser) {
          var _scrollBtnObserve = document.createElement('DIV');

          _scrollBtnObserve.classList.add('scroll-btn-observe');

          document.body.appendChild(_scrollBtnObserve);
          var observer = new window.IntersectionObserver(function (_ref) {
            var _ref2 = _slicedToArray(_ref, 1),
                entry = _ref2[0];

            var isOut = entry.intersectionRatio < 1 && entry.boundingClientRect.y < 0;

            if (isOut) {
              showScrollbtn();
            } else {
              hideScrollBtn();
            }
          }, {
            threshold: [1.0],
            delay: 100
          });
          observer.observe(_scrollBtnObserve);
          /**
          setTimeout(function () {
            // initial check!
            if (observedEl.getBoundingClientRect().y < 0) {
              showScrollbtn()
            }
          }, 200)
          */
        } else {
          // if browser doesn't support `IntersectionObserver` show the scroll to top button
          // we used to listen to 'scroll' event, but not anymore
          showScrollbtn();
        }
      } /// /
      // we use it when a sticky element becomes stuck on top and 1 pixel of it goes out of view (because of top: -1px)
      // so IntersectionObserver is triggered with intersectionRatio < 1 and y < 0
      // then we trigger an event for it, so we may for example change its classlist to update styling

    }, {
      key: "_handleSticky",
      value: function _handleSticky() {
        if (!window.IntersectionObserver) return;
        var stickyElements = document.querySelectorAll('[class*="sticky-nav"]');

        if (stickyElements.length > 0) {
          var observer = new window.IntersectionObserver(function (_ref3) {
            var _ref4 = _slicedToArray(_ref3, 1),
                entry = _ref4[0];

            var isSticky = entry.intersectionRatio < 1 && entry.boundingClientRect.y < 0; // isSticky=true means we are at sticky position
            // so if our sticky element is for example 'sticky-nav-md' and we are at sticky position
            // but our window size is above 'md' and therefore CSS rule 'position: sticky' is not applied at all
            // so we check if we are really sticky or not

            var stickyNav = entry.target.parentElement; // entry.target is the `.sticky-trigger` and parentElement is the `.sticky-nav` element

            if (isSticky && !stickyNav.classList.contains('sticky-nav')) {
              // don't check `.sticky-nav` element because it's sticky regardless of window size
              var pos = window.getComputedStyle(stickyNav).position;
              if (!(pos === 'sticky' || pos === '-webkit-sticky')) isSticky = false;
            }

            var evt = new window.CustomEvent('sticky-change', {
              detail: {
                isSticky: isSticky
              }
            });
            stickyNav.dispatchEvent(evt);
          }, {
            threshold: [1.0],
            delay: 100
          });
          stickyElements.forEach(function (stickyEl) {
            // var pos = window.getComputedStyle(stickyEl).position
            // if (!(pos === 'sticky' || pos === '-webkit-sticky')) return
            // add a dummy child to watch
            // when it goes out of window it means sticky-nav is sticky now
            // because dummy element is top: -1px or when below navbar it's top : -1 * ($navbar-height + 1px);
            var observedChild = document.createElement(stickyEl.tagName === 'UL' ? 'LI' : 'DIV');
            observedChild.classList.add('sticky-trigger');
            stickyEl.insertBefore(observedChild, stickyEl.firstChild);
            observer.observe(observedChild);
            setTimeout(function () {
              if (observedChild.getBoundingClientRect().y < 0) {
                var isSticky = true;

                if (isSticky && !stickyEl.classList.contains('sticky-nav')) {
                  var pos = window.getComputedStyle(stickyEl).position;
                  if (!(pos === 'sticky' || pos === '-webkit-sticky')) isSticky = false;
                }

                var evt = new window.CustomEvent('sticky-change', {
                  detail: {
                    isSticky: isSticky,
                    initialCheck: true
                  }
                });
                stickyEl.dispatchEvent(evt);
              }
            }, 200);
          });
        }
      } // /////////

    }, {
      key: "_handleOther",
      value: function _handleOther() {
        $('.input-floating-label input').each(function () {
          if (this.value !== '') this.classList.add('has-content');else this.classList.remove('has-content');
        });
        $(document).on('focusout', '.input-floating-label input', function (e) {
          if (this.value !== '') this.classList.add('has-content');else this.classList.remove('has-content');
        });
      }
    }]);

    return Basic;
  }();
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
  */


  if (typeof $ !== 'undefined') {
    Basic._HandleBasics();
  }

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME = 'aceScroll';
  var VERSION = '2.1.0';
  var DATA_KEY = 'ace.scroll';
  var EVENT_KEY = ".".concat(DATA_KEY);
  var DATA_API_KEY = '.data-api';
  var Event = {
    LOAD_DATA_API: "load".concat(EVENT_KEY).concat(DATA_API_KEY)
  };
  var Selector = {
    ACE_SCROLL: '[ace-scroll]'
  };
  var DefaultType = {
    type: 'string',
    smooth: 'boolean',
    height: '(number|null)',
    lock: 'boolean',
    ignore: '(string|null)',
    plugin: 'string',
    options: '(object|null)' // plugin settings

  };
  var Default = {
    type: 'native',
    smooth: false,
    height: null,
    lock: false,
    ignore: null,
    plugin: 'SimpleBar',
    options: null
  };

  var Scrollbar =
  /*#__PURE__*/
  function () {
    function Scrollbar(element, config) {
      _classCallCheck(this, Scrollbar);

      this._element = element;
      this.$element = $(element);
      this._config = this._getConfig(config);
      this._scrollbarInfo = Util.getScrollbarInfo();
      this.enableScrollbars();
    }

    _createClass(Scrollbar, [{
      key: "enableScrollbars",
      value: function enableScrollbars() {
        /**
        this._element.scrollTop = 0
        // For firefox. Because it has persistent scroll position on page reload
        // which doesn't look good when changing overflow: hidden to overflow: scroll on hover
        */
        // no scrollbars when specified
        if (this._config.ignore !== null) {
          if (this._config.ignore === 'mobile' && this._scrollbarInfo.width === 0 && 'ontouchstart' in window && window.matchMedia('(max-width: 840px)')) return;else if (this._config.ignore === 'desktop' && this._scrollbarInfo.width > 0) return;
        }

        this.update(this._config.height);
        this.lock(this._config.lock);

        this._element.classList.remove('ace-scroll', 'ace-scroll-mob', 'ace-scroll-wrap');

        if (this._config.type === 'native') {
          this._addNativeScrolls();
        } else if (this._config.type === 'auto') {
          this._preferNativeScrolls();
        } else if (this._config.type === 'plugin') {
          this._addPluginScrolls();
        }
      }
    }, {
      key: "update",
      value: function update(_height) {
        if (!_height) return;
        if (!isNaN(_height)) _height += 'px';
        this._element.style.maxHeight = _height;
      }
    }, {
      key: "lock",
      value: function lock(_lock) {
        if (_lock) this._element.classList.add('ace-scroll-lock');else this._element.classList.remove('ace-scroll-lock');
      }
    }, {
      key: "_addNativeScrolls",
      value: function _addNativeScrolls(smooth) {
        if (this._scrollbarInfo.width === 0) this._element.classList.add('ace-scroll-mob'); // mobile device
        else {
            this._element.classList.add('ace-scroll');

            var _smooth = typeof smooth !== 'undefined' ? smooth : this._config.smooth;

            if (_smooth) {
              // wrap children inside an .ace-scroll-inner
              var wrapper = document.createElement('div');
              wrapper.classList.add('ace-scroll-inner');
              wrapper.style.color = window.getComputedStyle(this._element).color;

              while (this._element.firstChild) {
                wrapper.appendChild(this._element.firstChild);
              }

              this._element.appendChild(wrapper); /// ///////
              // disable the initial transition effects


              this._element.style.transition = 'none';

              this._element.classList.add('ace-scroll-wrap');

              this._element.offsetLeft; // reflow

              this._element.style.transition = '';
            }
          }
      }
    }, {
      key: "_preferNativeScrolls",
      value: function _preferNativeScrolls() {
        if (this._scrollbarInfo.width === 0 || this._scrollbarInfo.overlay || this._scrollbarInfo.thin || !this._hasScrollbarPlugin()) {
          this._addNativeScrolls();
        } else {
          this._addPluginScrolls();
        }
      }
    }, {
      key: "_addPluginScrolls",
      value: function _addPluginScrolls() {
        if (this._hasScrollbarPlugin()) {
          return new window[this._config.plugin](this._element, this._config.options);
        } else {
          this._addNativeScrolls();
        }
      }
    }, {
      key: "_hasScrollbarPlugin",
      value: function _hasScrollbarPlugin() {
        return !!window[this._config.plugin];
      }
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread2({}, Default, {}, _typeof(config) === 'object' && config ? config : {});

        if (typeof bootstrap !== 'undefined') {
          bootstrap.Util.typeCheckConfig(NAME, config, this.constructor.DefaultType);
        }

        return config;
      } // Static methods

    }], [{
      key: "_jQueryInterface",
      value: function _jQueryInterface(config) {
        return this.each(function () {
          var $this = $(this);
          var data = $this.data(DATA_KEY);
          var options = this.getAttribute('ace-scroll') || {};
          if (!isNaN(options)) options = {
            height: parseInt(options)
          };else if (options.length > 1) {
            try {
              options = JSON.parse(options);
            } catch (e) {}
          }

          var _config = _objectSpread2({}, Default, {}, $this.data(), {}, _typeof(config) === 'object' && config ? config : {}, {}, _typeof(options) === 'object' && options ? options : {});

          if (!data) {
            data = new Scrollbar(this, _config);
            $this.data(DATA_KEY, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"".concat(config, "\""));
            }

            data[config]();
          }
        });
      }
    }, {
      key: "VERSION",
      get: function get() {
        return VERSION;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default;
      }
    }]);

    return Scrollbar;
  }();
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
  */


  $(window).on(Event.LOAD_DATA_API, function () {
    var scrollbars = [].slice.call(document.querySelectorAll(Selector.ACE_SCROLL));

    for (var i = 0; i < scrollbars.length; i++) {
      var $scrollbars = $(scrollbars[i]);

      Scrollbar._jQueryInterface.call($scrollbars, $scrollbars.data());
    }
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
  */

  if (typeof $ !== 'undefined') {
    var JQUERY_NO_CONFLICT = $.fn[NAME];
    $.fn[NAME] = Scrollbar._jQueryInterface;
    $.fn[NAME].Constructor = Scrollbar;

    $.fn[NAME].noConflict = function () {
      $.fn[NAME] = JQUERY_NO_CONFLICT;
      return Scrollbar._jQueryInterface;
    };
  }

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$1 = 'aceSidebar';
  var VERSION$1 = '2.1.0';
  var DATA_KEY$1 = 'ace.sidebar';
  var EVENT_KEY$1 = ".".concat(DATA_KEY$1);
  var DATA_API_KEY$1 = '.data-api';
  var Event$1 = {
    SHOW: "show".concat(EVENT_KEY$1),
    HIDE: "hide".concat(EVENT_KEY$1),
    COLLAPSE: "collapse".concat(EVENT_KEY$1),
    EXPAND: "expand".concat(EVENT_KEY$1),
    SHOWN: "shown".concat(EVENT_KEY$1),
    HIDDEN: "hidden".concat(EVENT_KEY$1),
    COLLAPSED: "collapsed".concat(EVENT_KEY$1),
    EXPANDED: "expanded".concat(EVENT_KEY$1),
    LOAD_DATA_API: "load".concat(EVENT_KEY$1).concat(DATA_API_KEY$1),
    CLICK_DATA_API: "click".concat(EVENT_KEY$1).concat(DATA_API_KEY$1)
  };
  var Selector$1 = {
    SIDEBAR: '.sidebar',
    DATA_TOGGLE: '[data-toggle="sidebar"]',
    DATA_TOGGLE_MOBILE: '[data-toggle-mobile="sidebar"]'
  };
  var DefaultType$1 = {
    swipe: 'boolean',
    dismiss: 'boolean',
    backdrop: 'boolean',
    gotoactive: 'boolean',
    subscroll: 'boolean',
    pullup: 'boolean'
  };
  var Default$1 = {
    swipe: false,
    dismiss: false,
    backdrop: false,
    gotoactive: false,
    subscroll: true,
    pullup: false
  };
  var ClassName = {
    DESKTOP_HIDE: 'collapsed',
    MOBILE_SHOW: 'sidebar-visible',
    COLLAPSED: 'collapsed',
    TOGGLING: 'toggling',
    INNER_HOVER: 'is-hover',
    BACKDROP: 'sidebar-backdrop',
    HORIZONTAL: 'sidebar-h'
  };
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Sidebar =
  /*#__PURE__*/
  function () {
    function Sidebar(element, config) {
      var _this$_sidebar$classL,
          _this = this;

      _classCallCheck(this, Sidebar);

      this._hasTransitionEvent = false;
      this._hasTransitionEvent2 = false;
      this._isTransitioning = false;
      this._isBeingDismissed = false;
      this._sidebar = element;

      (_this$_sidebar$classL = this._sidebar.classList).remove.apply(_this$_sidebar$classL, ['d-none', 'd-xl-block']);

      this._inner = this._sidebar.querySelector('.sidebar-inner');
      this._config = this._getConfig(config);
      this._scroller = this._sidebar.querySelector('[class*="ace-scroll"]');
      this._pullupEnabled = false;
      this._triggerArray = [].slice.call(document.querySelectorAll("[data-toggle=\"sidebar\"][href=\"#".concat(element.id, "\"],") + "[data-toggle=\"sidebar\"][data-target=\"#".concat(element.id, "\"]")));
      this._triggerArrayMobile = [].slice.call(document.querySelectorAll("[data-toggle-mobile=\"sidebar\"][href=\"#".concat(element.id, "\"],") + "[data-toggle-mobile=\"sidebar\"][data-target=\"#".concat(element.id, "\"]")));
      this._horizontal = this._sidebar.classList.contains(ClassName.HORIZONTAL);
      this._desktopCollapsedClass = this._triggerArray.length > 0 ? this._triggerArray[0].getAttribute('data-toggle-class') || ClassName.DESKTOP_HIDE : ClassName.DESKTOP_HIDE; //

      this._collapsed = this._sidebar.classList.contains(this._desktopCollapsedClass);
      $(this._inner).on('focus', 'input', function (e) {
        if (!_this._collapsed) return;

        _this._inner.classList.add('has-focus');

        $(e.target).one('blur', function () {
          _this._inner.classList.remove('has-focus');
        });
      }); //

      this._handleTriggerEvents();

      this.enableSubmenuToggle();
      if (this._config.pullup) this.enableSubmenuPullup();
      if (this._config.gotoactive) this.scrollToActive();

      if (this._config.backdrop) {
        this._sidebar.classList.add(ClassName.BACKDROP);
      } else if (this._sidebar.classList.contains(ClassName.BACKDROP)) {
        this._config.backdrop = true;
      }

      if (!this._horizontal && this._collapsed) {
        this._addTransitionEvent();
      }
    } // Getters


    _createClass(Sidebar, [{
      key: "_handleTriggerEvents",
      value: function _handleTriggerEvents() {
        var This = this;
        $(this._triggerArray).on('click', function () {
          This.toggle(this);
        });
        $(this._triggerArrayMobile).on('click', function () {
          This.toggleMobile(this);
        });
      }
    }, {
      key: "toggle",
      value: function toggle() {
        var btn = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

        if (this._sidebar.classList.contains(this._desktopCollapsedClass)) {
          this.expand(btn);
        } else {
          this.collapse(btn);
        }
      }
    }, {
      key: "toggleMobile",
      value: function toggleMobile() {
        var btn = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

        if (!this._sidebar.classList.contains(ClassName.MOBILE_SHOW)) {
          this.show(btn);
        } else {
          this.hide(btn);
        }
      } /// ////

    }, {
      key: "expand",
      value: function expand() {
        if (!this._hasTransitionEvent) this._addTransitionEvent();
        if (this._isTransitioning) return;
        var ev = new $.Event(Event$1.EXPAND);
        $(this._sidebar).trigger(ev);
        if (ev.isDefaultPrevented()) return;
        this._isTransitioning = true;

        this._sidebar.classList.add(ClassName.TOGGLING);

        this._sidebar.classList.remove(this._desktopCollapsedClass);

        this._updateTriggerBtns(this._triggerArray, true);

        this._collapsed = false;
        if (Util.isReducedMotion() || this._horizontal) this._toggleCompleted(); // call completion now
        //

        if (this._pullupEnabled) this._resetPullUp();

        this._inner.classList.remove(ClassName.INNER_HOVER);
      }
    }, {
      key: "collapse",
      value: function collapse() {
        var btn = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
        if (!this._hasTransitionEvent) this._addTransitionEvent();
        if (this._isTransitioning) return;
        var ev = new $.Event(Event$1.COLLAPSE);
        $(this._sidebar).trigger(ev);
        if (ev.isDefaultPrevented()) return;
        this._isTransitioning = true;

        this._sidebar.classList.add(ClassName.TOGGLING);

        this._sidebar.classList.add(this._desktopCollapsedClass);

        this._updateTriggerBtns(this._triggerArray, false);

        this._collapsed = true;
        if (Util.isReducedMotion() || this._horizontal) this._toggleCompleted(); // call completion now
        //

        if (this._pullupEnabled) this._resetPullUp(); // if the triggering button is inside sidebar, add is-hover class

        if (btn !== null && this._sidebar.classList.contains('expandable') && this._inner.contains(btn)) {
          this._inner.classList.add(ClassName.INNER_HOVER);
        }
      }
    }, {
      key: "show",
      value: function show() {
        var _this2 = this;
        if (!this._hasTransitionEvent2) this._addTransitionEvent2();
        var ev = new $.Event(Event$1.SHOW);
        $(this._sidebar).trigger(ev);
        if (ev.isDefaultPrevented()) return;

        this._sidebar.classList.add(ClassName.MOBILE_SHOW);

        this._updateTriggerBtns(this._triggerArrayMobile, true); // hide sidebar if clicked outside of it


        if (this._config.dismiss) {
          // document.body.classList.add('overflow-hidden')
          $(this._triggerArrayMobile).css('pointer-events', 'none'); // disable this button, because if we click on it, it will hide and then instantly show the sidebar again

          $(document).on('mouseup.sidebar-dismiss', function (e) {
            if (!$.contains(_this2._sidebar, e.target)) {
              // if clicked outside sidebar
              _this2._dismiss();
            }
          });
        }

        if (this._config.swipe) this.enableSwipeHide();
        if (Util.isReducedMotion()) this._toggleMobileCompleted(); // call completion now
        // in some webkit mobile browsers, sidebar scrolling works but scrollbars are not visible, unless something like this forces it to become visible

        if (this._scroller && !this._scroller.classList.contains('overflow-hidden')) {
          this._scroller.classList.add('overflow-hidden');

          this._scroller.offsetHeight; // force redraw

          this._scroller.classList.remove('overflow-hidden');
        } // hide body scrollbars
        // if sidebar has backdrop or it's .sidebar-push & fixed


        var scrollbarInfo = Util.getScrollbarInfo();

        if (scrollbarInfo.width === 0 && (this._config.backdrop || this._sidebar.classList.contains('sidebar-push') && this._sidebar.classList.contains('sidebar-fixed'))) {
          document.body.classList.add('mob-sidebar-body');
        }
      }
    }, {
      key: "hide",
      value: function hide() {
        if (!this._hasTransitionEvent2) this._addTransitionEvent2();
        var ev = new $.Event(Event$1.HIDE);
        $(this._sidebar).trigger(ev);
        if (ev.isDefaultPrevented()) return;

        this._sidebar.classList.remove(ClassName.MOBILE_SHOW);

        this._updateTriggerBtns(this._triggerArrayMobile, false); // if (this._config.backdrop || this._sidebar.classList.contains('sidebar-push')) {


        document.body.classList.remove('mob-sidebar-body'); // }

        if (Util.isReducedMotion()) this._toggleMobileCompleted(); // call completion now
      }
    }, {
      key: "_dismiss",
      value: function _dismiss() {
        this.hide(); // document.body.classList.remove('overflow-hidden');

        $(this._triggerArrayMobile).css('pointer-events', '');
        $(document).off('.sidebar-dismiss');
        $(document).off('.sidebar-swipe');
      }
    }, {
      key: "_updateTriggerBtns",
      value: function _updateTriggerBtns(btns) {
        var expanded = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

        for (var i = 0, len = btns.length; i < len; i++) {
          if (expanded) btns[i].classList.remove(ClassName.COLLAPSED);else btns[i].classList.add(ClassName.COLLAPSED);
          btns[i].setAttribute('aria-expanded', expanded);
        }
      }
    }, {
      key: "_toggleCompleted",
      value: function _toggleCompleted() {
        this._isTransitioning = false;

        this._sidebar.classList.remove(ClassName.TOGGLING);

        var expanded = !this._sidebar.classList.contains(this._desktopCollapsedClass);
        if (expanded) $(this._sidebar).trigger(Event$1.EXPANDED);else $(this._sidebar).trigger(Event$1.COLLAPSED);
        if (expanded) this._inner.classList.remove(ClassName.INNER_HOVER);
      }
    }, {
      key: "_toggleMobileCompleted",
      value: function _toggleMobileCompleted() {
        var shown = this._sidebar.classList.contains(ClassName.MOBILE_SHOW);

        if (shown) $(this._sidebar).trigger(Event$1.SHOWN);else $(this._sidebar).trigger(Event$1.HIDDEN);
      }
    }, {
      key: "_addTransitionEvent",
      value: function _addTransitionEvent() {
        var _this3 = this;

        if (this._hasTransitionEvent) return;
        this._hasTransitionEvent = true;
        $(this._sidebar).on('transitionend', function (e) {
          if (e.target !== _this3._sidebar) return; // make sure its not the children triggerring the event!

          _this3._toggleCompleted();
        }); // add 'is-hover' class to '.sidebar-inner' when it becomes expanded (i.e. when mouse hovers it)

        var counter = 0;
        $(this._inner).on('transitionstart', function (e) {
          // skip on mobile (in which propertyName is 'transform')
          if (e.target !== _this3._inner || e.originalEvent.propertyName !== 'width') return;
          counter++;
          if (counter === 1) _this3._inner.classList.add(ClassName.INNER_HOVER); // else if (counter >= 2) {
          //  this.classList.remove(ClassName.INNER_HOVER)
          //  counter = 0
          // }
        }).on('transitionend', function (e) {
          // skip on mobile (in which propertyName is transform)
          if (e.target !== _this3._inner || e.originalEvent.propertyName !== 'width') return;

          if (_this3._inner.clientWidth < 120) {
            // just to make sure we remove the extra class name when not needed
            _this3._inner.classList.remove(ClassName.INNER_HOVER);

            counter = 0; // blur input element

            if (document.activeElement.tagName === 'INPUT' && _this3._inner.contains(document.activeElement)) document.activeElement.blur();
          }
        });
      }
    }, {
      key: "_addTransitionEvent2",
      value: function _addTransitionEvent2() {
        var _this4 = this;

        if (this._hasTransitionEvent2) return;
        this._hasTransitionEvent2 = true;
        $(this._inner).on('transitionend', function (e) {
          if (e.target !== _this4._inner || e.originalEvent.propertyName !== 'transform') return;

          _this4._toggleMobileCompleted();
        });
      }
    }, {
      key: "enableSwipeHide",
      value: function enableSwipeHide() {
        // swipe to hide sidebar
        var x1 = 0;
        var y1 = 0;
        var swipeDir = 0;
        var aceScroll = this._scroller;
        var This = this;
        var isRTL = false;

        var touchMoveCallback = function touchMoveCallback(ev) {
          var touches = ev.changedTouches[0];
          var newX = touches.pageX;
          var newY = touches.pageY;

          if (swipeDir === 0) {
            var diffY = Math.abs(y1 - newY);
            var diffX = Math.abs(x1 - newX);

            if (diffY > diffX) {
              swipeDir = 2; // vertical i.e. scroll

              if (aceScroll) aceScroll.classList.remove('overflow-hidden'); // document.body.classList.remove('overflow-hidden')

              $(document).off('touchmove.sidebar-swipe');
            } else if (diffX > 10) {
              swipeDir = 1; // horizontal swipe

              This._inner.setAttribute('style', 'transition: none !important; will-change: transform; touch-action: none;');

              if (aceScroll) aceScroll.classList.add('overflow-hidden'); // document.body.classList.add('overflow-hidden')
            }
          }

          if (swipeDir !== 1) return;
          var moveX = parseInt(x1 - newX);

          if (!isRTL && moveX > 0 || isRTL && moveX < 0) {
            // move it outside of view
            This._inner.style.transform = 'translateX(' + -1 * moveX + 'px)';
          } else This._inner.style.transform = '';
        };

        var t1 = 0;
        $(document).on('touchstart.sidebar-swipe', function (e) {
          var touches = e.originalEvent.changedTouches[0];
          x1 = touches.pageX;
          y1 = touches.pageY;
          t1 = Date.now();
          isRTL = document.documentElement.classList.contains('rtl');
          $(this).on('touchmove.sidebar-swipe', function (e) {
            touchMoveCallback(e.originalEvent);
          });
        }).on('touchend.sidebar-swipe touchcancel.sidebar-swipe', function (e) {
          var touches = e.originalEvent.changedTouches[0];
          var x2 = touches.pageX;
          var t2 = Date.now();

          if (swipeDir === 1 && ( // dismiss if moved by more than 100px or moved more than 40px in a short time (less than 300ms)
          !isRTL && (x1 - x2 > 100 || x1 - x2 > 40 && t2 - t1 < 300) || isRTL && (x1 - x2 < -100 || x1 - x2 < -40 && t2 - t1 < 300))) {
            // if moved more than 100px or 40px in less than 300ms
            This._dismiss();
          }

          This._inner.setAttribute('style', '');

          if (aceScroll) aceScroll.classList.remove('overflow-hidden'); // document.body.classList.remove('overflow-hidden')

          swipeDir = 0;
        });
      }
    }, {
      key: "enableSubmenuToggle",
      value: function enableSubmenuToggle() {
        var _firefox = 'MozAppearance' in document.documentElement.style;

        var _scrollIntoViewOptions = 'scrollBehavior' in document.documentElement.style;

        var This = this;
        $(this._sidebar).on('click', '.dropdown-toggle', function (ev) {
          ev.preventDefault();
          var navItem = $(this).closest('.nav-item'); // get the parent LI.nav-item

          var subMenu = navItem.find('> .submenu').eq(0); // get the direct submenu (not the children)

          var subPos = null;

          if (This._sidebar.classList.contains('hoverable') || This._sidebar.classList.contains('sidebar-hover')) {
            // don't toggle submenu if submenu is supposed to be displayed as popup
            subPos = window.getComputedStyle(subMenu.get(0)).position;
            if (subPos === 'absolute') return;
          }

          if (subMenu.hasClass('collapsing')) return; // don't toggle in the middle of toggling
          // hide sibling submenus

          navItem.addClass('is-toggling');
          navItem.parent().find('> .nav-item.open').addClass('is-toggling').not(navItem).removeClass('open').find('> .submenu.show').collapse('hide'); // toggle submenu

          navItem.toggleClass('open');
          subMenu.collapse('toggle'); // scroll submenu into view

          if (This._config.subscroll && This._sidebar.classList.contains('sidebar-fixed') && navItem.hasClass('open')) {
            if (This._sidebar.classList.contains('sidebar-h')) {
              subPos = window.getComputedStyle(subMenu.get(0)).position;
              if (subPos === 'absolute') return;
              return; // no scroll for horizontal menu
            }

            var smooth = !Util.isReducedMotion();
            setTimeout(function () {
              try {
                if (_scrollIntoViewOptions) {
                  subMenu.get(0).scrollIntoView({
                    behavior: smooth ? 'smooth' : 'auto',
                    block: 'nearest'
                  });
                } else {
                  subMenu.get(0).scrollIntoView(false);
                }
              } catch (err) {}
            }, smooth ? 150 : 0);
          }

          subMenu.on('shown.bs.collapse.is-toggling hidden.bs.collapse.is-toggling', function () {
            subMenu.off('.is-toggling');
            $('.nav-item.is-toggling').removeClass('is-toggling');
          }); // firefox continues to disable scroll chaining when sidebar is not scrollable anymore, so a little fix around here

          if (_firefox) {
            subMenu.one('shown.bs.collapse.ff-fix hidden.bs.collapse.ff-fix', function () {
              subMenu.off('.ff-fix');
              if (This._scroller === null) return;

              if (This._scroller.scrollHeight <= This._scroller.clientHeight) {
                This._scroller.style.overscrollBehavior = 'auto';
              } else This._scroller.style.overscrollBehavior = '';
            });
          }
        });
      }
    }, {
      key: "enableSubmenuPullup",
      value: function enableSubmenuPullup() {
        if (this._pullupEnabled) return;
        this._pullupEnabled = true;
        var This = this;
        $(this._sidebar).on('transitionstart', '.submenu', function (ev) {
          if (ev.target !== this || ev.originalEvent.propertyName !== 'margin-left' || !(This._collapsed || This._sidebar.classList.contains('sidebar-hover'))) return;
          var navItem = $(this).parent();
          var submenu = $(this);
          var navtxt = navItem.find('> .nav-link > .nav-text.fadeable'); // only first level nav-text items

          navItem.removeClass('submenu-pullup');
          submenu.css('transform', '');
          navtxt.css('transform', ''); /// ///////////////////////

          var rect = submenu.get(0).getBoundingClientRect();
          var wh = $(window).height();
          var diff = parseInt(rect.bottom - wh);

          if (diff > 0) {
            // if submenu bottom is below window area
            // check to see if submenu top will go out of window if we move it up by "diff" pixels
            // also consider that the first level item's .nav-text shouldn't go out of window's top
            var navtxtHeight = navtxt.height() || 0;
            var diff2 = rect.top - navtxtHeight - diff - $('.navbar').height(); // don't go above navbar

            if (diff2 < 0) diff = diff + diff2;
            diff = parseInt(diff) + 1; // so that submenu's border is visible

            if (This._collapsed) {
              if (navtxtHeight && diff > navtxtHeight / 2) navItem.addClass('submenu-pullup'); // this class makes the .sub-arrow's color white, to match submenu color
            } else {
              navItem.addClass('submenu-pullup');
            }

            submenu.css('transform', 'translateY(-' + diff + 'px)');

            if (This._collapsed) {
              navtxt.css('transform', 'translateY(-' + diff + 'px)');
            }
          }
        });
      }
    }, {
      key: "disableSubmenuPullup",
      value: function disableSubmenuPullup() {
        this._pullupEnabled = false;
        $(this._sidebar).off('transitionstart.pullup');

        this._resetPullUp();
      }
    }, {
      key: "_resetPullUp",
      value: function _resetPullUp() {
        $(this._sidebar).find('.submenu-pullup').removeClass('submenu-pullup').find('.nav-text, .submenu').css('transform', '');
      } // scroll active item into view

    }, {
      key: "scrollToActive",
      value: function scrollToActive() {
        if (!this._sidebar.classList.contains('sidebar-fixed') || this._scroller === null) return;

        var active = this._sidebar.querySelector('.nav-item.active:not(.open) > .nav-link');

        try {
          active.scrollIntoView({
            behavior: 'auto',
            block: 'end'
          }); // or block: "center"?

          this._scroller.scrollTop = this._scroller.scrollTop + 30;
        } catch (e) {}
      }
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread2({}, Default$1, {}, _typeof(config) === 'object' && config ? config : {});

        if (typeof bootstrap !== 'undefined') {
          bootstrap.Util.typeCheckConfig(NAME$1, config, this.constructor.DefaultType);
        }

        return config;
      } // Static methods

    }], [{
      key: "_jQueryInterface",
      value: function _jQueryInterface(config) {
        return this.each(function () {
          var $this = $(this);
          var data = $this.data(DATA_KEY$1);

          var _config = _objectSpread2({}, Default$1, {}, $this.data(), {}, _typeof(config) === 'object' && config ? config : {});

          if (!data) {
            data = new Sidebar(this, _config);
            $this.data(DATA_KEY$1, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"".concat(config, "\""));
            }

            data[config]();
          }
        });
      }
    }, {
      key: "VERSION",
      get: function get() {
        return VERSION$1;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$1;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$1;
      }
    }]);

    return Sidebar;
  }();
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
  */


  $(window).on(Event$1.LOAD_DATA_API, function () {
    var sidebars = [].slice.call(document.querySelectorAll(Selector$1.SIDEBAR));

    for (var i = 0; i < sidebars.length; i++) {
      var $sidebar = $(sidebars[i]);

      Sidebar._jQueryInterface.call($sidebar, $sidebar.data());
    }
  });
  /**
  $(document).on(Event.CLICK_DATA_API, `${Selector.DATA_TOGGLE} , ${Selector.DATA_TOGGLE_MOBILE}`, function (event) {
  	if (event.currentTarget.tagName === 'A') {
  	  event.preventDefault()
  	}

  	const $trigger = $(this)
  	const selector = bootstrap.Util.getSelectorFromElement(this)
  	const selectors = [].slice.call(document.querySelectorAll(selector))

  	$(selectors).each(function () {
  	  const $target = $(this)
  	  const data    = $target.data(DATA_KEY)
  	  const config  = data ? 'toggle' : $trigger.data()
  	  Sidebar._jQueryInterface.call($target, config)
  	})
  })
  */

  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
  */

  if (typeof $ !== 'undefined') {
    var JQUERY_NO_CONFLICT$1 = $.fn[NAME$1];
    $.fn[NAME$1] = Sidebar._jQueryInterface;
    $.fn[NAME$1].Constructor = Sidebar;

    $.fn[NAME$1].noConflict = function () {
      $.fn[NAME$1] = JQUERY_NO_CONFLICT$1;
      return Sidebar._jQueryInterface;
    };
  }

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$2 = 'aceAside';
  var VERSION$2 = '2.1.0';
  var DATA_KEY$2 = 'ace.aside';
  var EVENT_KEY$2 = ".".concat(DATA_KEY$2);
  var Event$2 = {
    SHOW: "show".concat(EVENT_KEY$2),
    HIDE: "hide".concat(EVENT_KEY$2)
  };
  var DefaultType$2 = {
    placement: 'string',
    margin: 'number',
    fade: 'boolean',
    autohide: '(boolean|number)',
    dismiss: 'boolean',
    blocking: 'boolean',
    backdrop: '(boolean|string)',
    container: 'boolean',
    belowNav: 'boolean',
    width: '(boolean|number)',
    height: '(boolean|number)',
    scroll: '(boolean|string)'
  };
  var Default$2 = {
    placement: 'center',
    margin: 0,
    fade: false,
    autohide: false,
    dismiss: false,
    blocking: false,
    backdrop: false,
    container: false,
    belowNav: false,
    width: false,
    height: false,
    scroll: 'body'
  };
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Aside =
  /*#__PURE__*/
  function () {
    function Aside(element, config) {
      _classCallCheck(this, Aside);

      this._config = this._getConfig(config);
      this._element = element;
      this.$element = $(element);

      this._init(this._config);
    }

    _createClass(Aside, [{
      key: "_init",
      // update(config) {
      // this._config = this._getConfig(config);
      // this._clear();//clear previously assigned classes
      // this._init();
      // }
      value: function _init(config) {
        var _this$_element$classL;

        this._setPlacement(config.placement);

        this._element.classList.add('ace-aside');

        if (!config.blocking) {
          this._element.classList.add('modal-nb');

          this.$element.attr('data-backdrop', 'false').data('backdrop', false);
        } else {
          if (config.backdrop) {
            this.$element.attr('data-backdrop-bg', config.backdrop).data('backdrop', config.backdrop);
          } else {
            this.$element.attr('data-backdrop-bg', 'bg-transparent');
          }
        }

        if (config.dismiss) this._element.classList.add('modal-dismiss');

        if (config.fade) {
          this._element.classList.add('aside-fade', 'fade');
        }

        if (config.belowNav) this._element.classList.add('aside-below-nav');
        if (config.extraClass) (_this$_element$classL = this._element.classList).add.apply(_this$_element$classL, _toConsumableArray(config.extraClass.split(' ')));
        if (config.container) this._element.classList.add('container');

        if (config.width) {
          this.$element.find('.modal-dialog').css('width', isNaN(config.width) ? config.width : this._config.width + 'px');
        }

        if (config.height) {
          this.$element.find('.modal-dialog').css('height', isNaN(config.height) ? config.height : this._config.height + 'px');
        } // if (/^(content|body)$/.test(config.scroll)) {
        //  this.$element.find('.modal-content').addClass('scroll-' + config.scroll)
        // }


        this.$element.off('shown.bs.modal.autohide');

        if (config.autohide) {
          var This = this;
          this.$element.on('shown.bs.modal.autohide', function () {
            setTimeout(function () {
              This.hide();
            }, config.autohide);
          });
        }
      }
    }, {
      key: "_setPlacement",
      value: function _setPlacement() {
        var placement = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'center';
        var placementMap = {
          t: 'aside-top',
          top: 'aside-top',
          tc: 'aside-top aside-c',
          tr: 'aside-top aside-r',
          tl: 'aside-top aside-l',
          b: 'aside-bottom',
          bottom: 'aside-bottom',
          bc: 'aside-bottom aside-c',
          br: 'aside-bottom aside-r',
          bl: 'aside-bottom aside-l',
          r: 'aside-right',
          right: 'aside-right',
          rc: 'aside-right aside-m',
          l: 'aside-left',
          left: 'aside-left',
          lc: 'aside-left aside-m',
          c: 'aside-center',
          center: 'aside-center'
        };
        placement = placement || 'c';
        var className = placementMap[placement] || 'aside-center';

        if (placement === 'c' || placement === 'center') {
          this._config.fade = true;

          this._element.classList.remove('container');
        }

        this._element.className = this._element.className + ' ' + className;
      }
      /**
      _clear() {
        this._element.classList.remove('modal-nb');
        this._element.classList.remove('modal-dismiss');
        this._element.classList.remove('aside-fade');
        this._element.classList.remove('container');
          this._element.className = this._element.className.replace(/aside\-\w+\s/ , ' ');
      }
      */
      // Public methods

    }, {
      key: "show",
      value: function show() {
        var showEvent = new $.Event(Event$2.SHOW);
        this.$element.trigger(showEvent);

        if (showEvent.isDefaultPrevented()) {
          return;
        }

        this.$element.modal('show');
      }
    }, {
      key: "hide",
      value: function hide() {
        var hideEvent = new $.Event(Event$2.HIDE);
        this.$element.trigger(hideEvent);

        if (hideEvent.isDefaultPrevented()) {
          return;
        }

        this.$element.modal('hide');
      } // Private methods

    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread2({}, Default$2, {}, _typeof(config) === 'object' && config ? config : {});

        if (typeof bootstrap !== 'undefined') {
          bootstrap.Util.typeCheckConfig(NAME$2, config, this.constructor.DefaultType);
        }

        return config;
      } // Static methods

    }], [{
      key: "_jQueryInterface",
      value: function _jQueryInterface(config) {
        return this.each(function () {
          var $element = $(this);
          var data = $element.data(DATA_KEY$2); // return if it's a function call

          if (typeof config === 'string' && data) {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"".concat(config, "\""));
            }

            data[config](); // call function

            return;
          }

          var _config = _objectSpread2({}, Default$2, {}, $(this).data(), {}, _typeof(config) === 'object' && config ? config : {});

          if (!data) {
            data = new Aside(this, _config);
            $element.data(DATA_KEY$2, data);
          } else {
            // update config
            if (_typeof(config) === 'object') data.update(_config);
          }
        });
      } //

    }, {
      key: "_HandleAside",
      value: function _HandleAside() {
        var visibleModalSelector = '.modal.show:not(.modal-nb)';
        var dismissEventId = 0;
        $(document).on('show.bs.modal', '.modal', function (e) {
          if (e.isDefaultPrevented()) return;
          var modal = this;

          if (modal.classList.contains('modal-nb')) {
            if ($(visibleModalSelector).length === 0) {
              document.body.classList.add('modal-nb'); // disable .modal-open effects for .modal-nb
            }
          } else {
            if (!modal.classList.contains('ace-aside')) {
              // check to see if we will have modal scrollbars
              modal.style.display = 'block';
              if (modal.scrollHeight > modal.clientHeight) document.body.classList.add('modal-scroll');
              var scrollbars = Util.getScrollbarInfo();
              if (scrollbars.width === 0) document.body.classList.add('scrollbar-w0');
              modal.style.display = '';
            } // set modal padding value (equal to scrollbar width)


            document.body.style.setProperty('--modal-padding', window.innerWidth - document.body.scrollWidth + 'px');
            var backdropBg = $(modal).attr('data-backdrop-bg');

            if (backdropBg) {
              setTimeout(function () {
                $('.modal-backdrop').addClass(backdropBg);
              }, 0);
            }
          }
        }).on('shown.bs.modal', '.modal', function (e) {
          var modal = this;

          if (modal.classList.contains('modal-nb')) {
            document.body.classList.remove('modal-nb');

            if ($(visibleModalSelector).length === 0) {
              // if no blocking modals
              document.body.classList.remove('modal-open'); // disable .modal-open effects

              document.body.style.paddingRight = ''; // and remove paddingRight
            }

            if (modal.classList.contains('modal-dismiss')) {
              // we add an extra ID to our event namespace
              // because sometimes before a dismissible modal is hidden inside the below setTimeout, another dismissible gets shown and registers the following event which gets
              // cleared in the on.hidden event below ... so we use different IDs for each one ...
              modal.setAttribute('data-dismiss-event-id', ++dismissEventId);
              $(document.body).on('mouseup.aside-dismiss.' + dismissEventId + ' touchend.aside-dismiss.' + dismissEventId, function (e) {
                // why mouseup? because 'click' may get 'stopPropagated' in some plugins such as Bootstrap's dropdown
                if (!$.contains(modal, e.target)) {
                  // clicked outside modal
                  // $(document.body).off('.aside-dismiss.'+dismissEventId);//not needed, handled in hidden event callback
                  // why timeout?
                  // because if we click on the same button that triggers this modal, its 'hide' function will be called and instantly followed by 'show' function
                  // so we first let 'show' be called and then we call 'hide'
                  setTimeout(function () {
                    $(modal).modal('hide');
                  }, 0);
                }
              });
            }
          }
        }).on('hidden.bs.modal', '.modal', function () {
          if ($(visibleModalSelector).length === 0) document.body.style.paddingRight = ''; // required for rare cases that body padding is still not cleared

          if (!this.classList.contains('modal-nb')) {
            document.body.classList.remove('modal-scroll');
            document.body.classList.remove('scrollbar-w0');
          } // we might have dismissed modal dialog using the close button inside it, so we turn off the events looking for clicks outside modal


          if (this.classList.contains('modal-dismiss')) {
            var eid = this.getAttribute('data-dismiss-event-id');
            $(document.body).off('.aside-dismiss.' + eid);
          }
        }); //
        // enable modal functionality for modal boxes and asides that are shown (.show) by default

        $('.modal.show').modal('show');
      }
    }, {
      key: "VERSION",
      get: function get() {
        return VERSION$2;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$2;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$2;
      }
    }]);

    return Aside;
  }();
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
  */


  if (typeof $ !== 'undefined') {
    Aside._HandleAside();

    var JQUERY_NO_CONFLICT$2 = $.fn[NAME$2];
    $.fn[NAME$2] = Aside._jQueryInterface;
    $.fn[NAME$2].Constructor = Aside;

    $.fn[NAME$2].noConflict = function () {
      $.fn[NAME$2] = JQUERY_NO_CONFLICT$2;
      return Aside._jQueryInterface;
    };
  }

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$3 = 'aceToaster';
  var VERSION$3 = '2.1.0';
  var DATA_KEY$3 = 'ace.toaster';
  var EVENT_KEY$3 = ".".concat(DATA_KEY$3);
  var Event$3 = {
    CLEAR: "clear".concat(EVENT_KEY$3),
    ADD: "add".concat(EVENT_KEY$3),
    ADDED: "added".concat(EVENT_KEY$3)
  };
  var DefaultType$3 = {
    placement: 'string',
    close: 'boolean',
    autoremove: 'boolean',
    delay: 'number',
    template: 'string',
    alert: 'boolean'
  };
  var Default$3 = {
    placement: 'tr',
    close: true,
    autoremove: true,
    delay: 2500,
    template: '<div class="toast"><div class="d-flex"><div class="toast-image"></div><div class="toast-main"><div class="toast-header"></div><div class="toast-body"></div></div></div></div>',
    alert: true
  };
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Toaster =
  /*#__PURE__*/
  function () {
    function Toaster() {
      _classCallCheck(this, Toaster);

      this._lastToastId = 0;
      this._toast = null;
    }

    _createClass(Toaster, [{
      key: "add",
      // Public methods
      value: function add(config) {
        var _config = this._getConfig(config);

        var $newToast = $(_config.template);
        this._toast = $newToast[0];
        this._lastToastId++;
        $newToast.addClass('ace-toaster-item').attr({
          id: "ace-toaster-item-".concat(this._lastToastId),
          'aria-atomic': 'true'
        });

        if (_config.alert) {
          $newToast.attr({
            role: 'alert',
            'aria-live': 'assertive'
          });
        } else {
          $newToast.attr({
            role: 'status',
            'aria-live': 'polite'
          });
        }

        var $toastHeader = $newToast.find('.toast-header');

        if (_config.title) {
          var title = typeof _config.title === 'function' ? _config.title.call(this._toast, _config) : _config.title;
          title = $("<div class=\"toast-title\">".concat(title, "</div>"));

          if (_config.titleClass) {
            title.addClass(_config.titleClass);
          }

          $toastHeader.append(title);
        }

        if (_config.close) {
          var close = $newToast.find('[data-dismiss="toast"]');

          if (close.length === 0) {
            close = $('<button type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
            $toastHeader.append(close);
          }

          close.addClass(_config.closeClass ? _config.closeClass : 'close');
        }

        if (_config.body) {
          $newToast.find('.toast-body').append(typeof _config.body === 'function' ? _config.body.call(this._toast, _config) : _config.body);

          if (_config.bodyClass) {
            $newToast.find('.toast-body').addClass(_config.bodyClass);
          }
        }

        if (_config.image) {
          $newToast.find('.toast-image').append("<img src=\"".concat(_config.image, "\" />"));
        }

        if (_config.icon) {
          $newToast.find('.toast-image').append(_config.icon);
        }

        if (!(_config.image || _config.icon)) $newToast.find('.toast-image').remove();

        if (_config.className) {
          $newToast.addClass(_config.className);
        }

        if (_config.headerClass) {
          $toastHeader.addClass(_config.headerClass);
        }

        this._addToContainer($newToast, _config);

        return $newToast.get(0);
      } // add an existing toast element to our container

    }, {
      key: "addEl",
      value: function addEl(element, config) {
        var _config = this._getConfig(config);

        this._toast = element;
        var $existingToast = $(this._toast).addClass('ace-toaster-item');
        if (!$existingToast.attr('id')) $existingToast.attr('id', "ace-toaster-item-".concat(++this._lastToastId));

        this._addToContainer($existingToast, _config, false);
      } // add toast element to container

    }, {
      key: "_addToContainer",
      value: function _addToContainer($toast, _config) {
        var isNewElement = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
        // trigger ADD event before adding it to our container
        var addEvent = new $.Event(Event$3.ADD);
        addEvent.target = this._toast;
        $(document).trigger(addEvent);

        if (addEvent.isDefaultPrevented()) {
          if (isNewElement) $toast.remove();
          return;
        } // end of trigger
        // add the toaster container to body


        var container = $(".ace-toaster-container.position-".concat(_config.placement)).eq(0);

        if (container.length === 0) {
          container = $("<div class=\"ace-toaster-container position-".concat(_config.placement, "\"/>")).appendTo(document.body);
        }

        if (_config.belowNav) {
          container.addClass('toaster-below-nav');
        } // add to container


        if (_config.placement.indexOf('b') === 0) {
          // bottom placement
          container.prepend($toast);
        } else {
          container.append($toast);
        } // without having an initial .toast element, fade-in animation isn't taking place??!!


        var dummy = $('#ace-toaster-dummy-toast-1');
        if (dummy.length === 0) dummy = $('<div id="ace-toaster-dummy-toast-1" class="toast d-none invisible"></div>').appendTo('body');
        dummy.toast('show'); /// ///////////////////////////////////////////////

        var _toastOptions = {};
        if (_config.sticky === true || _config.autohide === false) _toastOptions.autohide = false;
        if (_config.animation === false) _toastOptions.animation = false; // if delay is below 30, we consider it as seconds, not milliseconds

        _toastOptions.delay = _config.delay > 30 ? _config.delay : _config.delay * 1000;
        if (_config.width) $toast.css('width', isNaN(_config.width) ? _config.width : _config.width + 'px');
        $toast.toast(_toastOptions).toast('show').one('hidden.bs.toast.1', function () {
          // show it again (invisibly with opacity = 0) and use bootstrap Collapse plugin to hide it, so that other toasts stacked below it move up smoothly
          $toast.removeClass('hide').addClass('show').collapse('hide').one('hidden.bs.collapse', function () {
            $toast.toast('dispose');

            if (_config.autoremove) {
              $toast.remove();
            }
          });
        }); // trigger ADDED event before adding it to DOM

        var addedEvent = new $.Event(Event$3.ADDED);
        addedEvent.target = this._toast;
        $(document).trigger(addedEvent);
      } // hide toasts

    }, {
      key: "remove",
      value: function remove(id) {
        this.hide(id, true);
      }
    }, {
      key: "removeAll",
      value: function removeAll() {
        var placement = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
        this.hideAll(placement, true);
      } // remove toast by ID or element reference

    }, {
      key: "hide",
      value: function hide(id) {
        var remove = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
        var selector = isNaN(id) ? id : '#ace-toaster-item-' + parseInt(id);

        this._hideBySelector(selector, remove);
      } // remove ALL toasts

    }, {
      key: "hideAll",
      value: function hideAll() {
        var placement = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
        var remove = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
        // trigger CLEAR event before removing ALL
        var clearEvent = new $.Event(Event$3.CLEAR); // ,  { placement: placement || 'all', remove: remove })

        $(document).trigger(clearEvent, {
          placement: placement || 'all',
          remove: remove
        });

        if (clearEvent.isDefaultPrevented()) {
          return;
        } // end of trigger


        var selector = '.toast.ace-toaster-item';
        if (placement) selector = ".ace-toaster-container.position-".concat(placement, " ").concat(selector);

        this._hideBySelector(selector, remove);
      }
    }, {
      key: "_hideBySelector",
      value: function _hideBySelector(selector) {
        var remove = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
        $(selector).each(function () {
          var $toast = $(this);

          if ($toast.is(':visible')) {
            // fade out and then remove
            $toast.toast('hide').off('hidden.bs.toast.1') // remove the previous handler above (because it has autoremove)
            .one('hidden.bs.toast.2', function () {
              $toast.toast('dispose');
              if (remove) $toast.remove();
            });
          } else {
            $toast.toast('dispose'); // instantly remove if not visible

            if (remove) $toast.remove();
          }
        });
      } // Private methods

    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread2({}, Default$3, {}, _typeof(config) === 'object' && config ? config : {});

        if (typeof bootstrap !== 'undefined') {
          bootstrap.Util.typeCheckConfig(NAME$3, config, this.constructor.DefaultType);
        }

        return config;
      } // Static methods

    }], [{
      key: "_jQueryInterface",
      value: function _jQueryInterface(config) {
        return this.each(function () {
          config = _objectSpread2({}, {
            autoremove: false
          }, {}, $(this).data(), {}, _typeof(config) === 'object' && config ? config : {});
          $.aceToaster.addEl(this, config);
        });
      }
    }, {
      key: "VERSION",
      get: function get() {
        return VERSION$3;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$3;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$3;
      }
    }]);

    return Toaster;
  }();
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
  */


  if (typeof $ !== 'undefined') {
    $[NAME$3] = new Toaster();
    var JQUERY_NO_CONFLICT$3 = $.fn[NAME$3];
    $.fn[NAME$3] = Toaster._jQueryInterface;
    $.fn[NAME$3].Constructor = Toaster;

    $.fn[NAME$3].noConflict = function () {
      $.fn[NAME$3] = JQUERY_NO_CONFLICT$3;
      return Toaster._jQueryInterface;
    };
  }

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$4 = 'aceWidget';
  var VERSION$4 = '2.1.0';
  var DATA_KEY$4 = 'ace.widget';
  var EVENT_KEY$4 = ".".concat(DATA_KEY$4);
  var DATA_API_KEY$2 = '.data-api';
  var Event$4 = {
    SHOW: "show".concat(EVENT_KEY$4),
    HIDE: "hide".concat(EVENT_KEY$4),
    SHOWN: "show".concat(EVENT_KEY$4),
    HIDDEN: "hide".concat(EVENT_KEY$4),
    CLOSE: "close".concat(EVENT_KEY$4),
    CLOSED: "closed".concat(EVENT_KEY$4),
    EXPAND: "expand".concat(EVENT_KEY$4),
    EXPANDED: "expanded".concat(EVENT_KEY$4),
    RESTORE: "restore".concat(EVENT_KEY$4),
    RESTORED: "restored".concat(EVENT_KEY$4),
    // RELOADED: `reloaded${EVENT_KEY}`,
    RELOAD: "reload".concat(EVENT_KEY$4),
    CLICK_DATA_API: "click".concat(EVENT_KEY$4).concat(DATA_API_KEY$2)
  };
  var Selector$2 = {
    DATA_ACTION: '.card-toolbar a[data-action]'
  };
  /**
  const DefaultType = {
    loadingHtml: 'string'
  }

  const Default = {
    loadingHtml: '<i class="bs-card-loading-icon fa fa-spinner fa-spin fa-2x text-white"></i>'
  }
  */

  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Widget =
  /*#__PURE__*/
  function () {
    function Widget(element, config) {
      _classCallCheck(this, Widget);

      this._config = this._getConfig(config);
      this._element = element;
      this.$box = $(element);
    }

    _createClass(Widget, [{
      key: "reload",

      /**
      static get DefaultType () {
        return DefaultType
      }
        static get Default () {
        return Default
      }
      */
      value: function reload() {
        var ev = new $.Event(Event$4.RELOAD);
        this.$box.trigger(ev);
        if (ev.isDefaultPrevented()) return;
        this.startLoading();
      }
    }, {
      key: "startLoading",
      value: function startLoading() {
        var loadingHtml = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '<i class="bs-card-loading-icon fa fa-spinner fa-spin fa-2x text-white"></i>';
        this.$box.append('<div class="bs-card-loading-overlay">' + loadingHtml + '</div>');
      }
    }, {
      key: "stopLoading",
      value: function stopLoading() {
        this.$box.find('.bs-card-loading-overlay').remove();
      }
    }, {
      key: "closeFast",
      value: function closeFast() {
        var ev = new $.Event(Event$4.CLOSE);
        this.$box.trigger(ev);
        if (ev.isDefaultPrevented()) return;
        this.$box.trigger(Event$4.CLOSED).remove();
      }
    }, {
      key: "close",
      value: function close() {
        var ev = new $.Event(Event$4.CLOSE);
        this.$box.trigger(ev);
        if (ev.isDefaultPrevented()) return;
        var $box = this.$box;

        var _closeComplete = function _closeComplete() {
          if (this.hasClass('card-expand')) this.next('.card-expanded-placeholder').remove(); // remove the placeholder

          this.trigger(Event$4.CLOSED).remove();
        };

        if (Util.isReducedMotion()) _closeComplete.call($box);else {
          $box.addClass('fade').on('transitionend.close', function (e) {
            if (e.target !== this) return; // because transitionend might fire for children elements (like animated toolbar buttons)

            _closeComplete.call($box);
          });
        }
      }
    }, {
      key: "toggle",
      value: function toggle(type) {
        var $box = this.$box;
        var $body = $box.find('.card-body').eq(0);
        var action = type && typeof type === 'string' && type.match(/show|hide/)[0] || ($body.is(':visible') ? 'hide' : 'show');
        var eventName = action === 'hide' ? 'hide' : 'show';
        var ev = new $.Event(eventName + EVENT_KEY$4);
        this.$box.trigger(ev);
        if (ev.isDefaultPrevented()) return;

        this._toggleIcon(type && _typeof(type) === 'object' && type instanceof window.HTMLElement ? type : null, action); ///


        if (action === 'hide') $body.addClass('show'); // .show class required for bs collapse plugin

        var eventCompleteName = action === 'hide' ? 'hidden' : 'shown';
        $body.collapse(action).on(eventCompleteName + '.bs.collapse', function () {
          $box.trigger(eventCompleteName + EVENT_KEY$4);
        });
      }
    }, {
      key: "hide",
      value: function hide() {
        this.toggle('hide');
      }
    }, {
      key: "show",
      value: function show() {
        this.toggle('show');
      }
    }, {
      key: "toggleFast",
      value: function toggleFast(type) {
        var $body = this.$box.find('.card-body').eq(0);
        var action = type && typeof type === 'string' && type.match(/show|hide/)[0] || ($body.is(':visible') ? 'hide' : 'show');
        var eventName = action === 'hide' ? 'hide' : 'show';
        var ev = new $.Event(eventName + EVENT_KEY$4);
        this.$box.trigger(ev);
        if (ev.isDefaultPrevented()) return;
        $body.addClass('collapse');
        if (action === 'hide') $body.removeClass('show');else $body.addClass('show');

        this._toggleIcon(type && _typeof(type) === 'object' && type instanceof window.HTMLElement ? type : null, action);

        var eventCompleteName = action === 'hide' ? 'hidden' : 'shown';
        this.$box.trigger(eventCompleteName + EVENT_KEY$4);
      }
    }, {
      key: "hideFast",
      value: function hideFast() {
        this.toggleFast('hide');
      }
    }, {
      key: "showFast",
      value: function showFast() {
        this.toggleFast('show');
      }
    }, {
      key: "_toggleIcon",
      value: function _toggleIcon(button, action) {
        if (!button) {
          button = this.$box.find('a[data-action=toggle]').get(0);
        } //


        if (button) {
          if (action === 'show') {
            button.classList.remove('collapsed');
          } else {
            button.classList.add('collapsed');
          }
        }
      } // fullscreen

    }, {
      key: "expand",
      value: function expand(_expand, animate) {
        var button = this.$box.find('> .card-header a[data-action=expand]');
        var $expand = _expand === true || !this.$box.hasClass('card-expand');
        animate = !(animate === false || Util.isReducedMotion()); // default is true

        var $box = this.$box;
        var box = $box[0];

        if ($expand) {
          var ev = new $.Event(Event$4.EXPAND);
          this.$box.trigger(ev);
          if (ev.isDefaultPrevented()) return;
          button.addClass('active');

          if (animate) {
            var rect = box.getBoundingClientRect();
            box.setAttribute('style', "left: ".concat(rect.left, "px; top: ").concat(rect.top, "px; width: ").concat(rect.width, "px; height: ").concat(rect.height, "px;"));
            box.classList.add('card-expanding');
            $box.on('transitionend.expanding', function (e) {
              if (e.target !== this) return; // because transitionend might fire for children elements (like animated icons of toolbar)

              $box.off('.expanding').removeClass('card-expanding').trigger(Event$4.EXPANDED);
            });
            var placeholder = document.createElement('DIV');
            placeholder.classList.add('card-expanded-placeholder');
            placeholder.setAttribute('style', "width: ".concat(rect.width, "px; height: ").concat(rect.height, "px;"));
            box.parentNode.insertBefore(placeholder, box.nextSibling); // insert after

            box.offsetHeight; // reflow...to force browser apply css/dom changes

            box.removeAttribute('style');
          }

          box.classList.add('card-expand');
          if (!animate) $box.trigger(Event$4.EXPANDED);
        } else {
          // restore
          var _ev = new $.Event(Event$4.RESTORE);

          this.$box.trigger(_ev);
          if (_ev.isDefaultPrevented()) return;
          button.removeClass('active');
          animate = animate && box.nextElementSibling !== null && box.nextElementSibling.classList.contains('card-expanded-placeholder');

          if (animate) {
            var rect1 = box.nextElementSibling.getBoundingClientRect();
            box.classList.add('card-expanding');
            box.setAttribute('style', "left: ".concat(rect1.left, "px; top: ").concat(rect1.top, "px; width: ").concat(rect1.width, "px; height: ").concat(rect1.height, "px;"));
            $box.on('transitionend.restoring', function (e) {
              if (e.target !== this) return; // because transitionend might fire for children elements (like animated icons of toolbar)

              $box.next().remove();
              $box.off('.restoring').removeClass('card-expanding').attr('style', '').trigger(Event$4.RESTORED);
            });
          }

          box.classList.remove('card-expand');
          if (!animate) $box.trigger(Event$4.RESTORED);
        }
      } // function expand

    }, {
      key: "expandFast",
      value: function expandFast() {
        return this.expand(true, false);
      }
    }, {
      key: "restore",
      value: function restore() {
        return this.expand(false);
      }
    }, {
      key: "restoreFast",
      value: function restoreFast() {
        return this.expand(false, false);
      }
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread2({}, _typeof(config) === 'object' && config ? config : {});

        if (typeof bootstrap !== 'undefined') {
          bootstrap.Util.typeCheckConfig(NAME$4, config, this.constructor.DefaultType);
        }

        return config;
      } // Static methods

    }], [{
      key: "_jQueryInterface",
      value: function _jQueryInterface(config, value) {
        return this.each(function () {
          var $this = $(this);
          var data = $this.data(DATA_KEY$4);

          var _config = _objectSpread2({}, $this.data(), {}, _typeof(config) === 'object' && config ? config : {});

          if (!data) {
            data = new Widget(this, _config);
            $this.data(DATA_KEY$4, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"".concat(config, "\""));
            }

            data[config](value);
          }
        });
      }
    }, {
      key: "VERSION",
      get: function get() {
        return VERSION$4;
      }
    }]);

    return Widget;
  }();
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
  */


  $(document).on(Event$4.CLICK_DATA_API, "".concat(Selector$2.DATA_ACTION), function (event) {
    if (event.currentTarget.tagName === 'A') {
      event.preventDefault();
    }

    var $actionBtn = $(this);
    var $box = $actionBtn.closest('.card');
    if ($box.length === 0) return;
    var $action = $actionBtn.data('action');
    $box.trigger(event = $.Event($action + EVENT_KEY$4));
    if (event.isDefaultPrevented()) return;
    $box.aceWidget($action, this);
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
  */

  if (typeof $ !== 'undefined') {
    var JQUERY_NO_CONFLICT$4 = $.fn[NAME$4];
    $.fn[NAME$4] = Widget._jQueryInterface;
    $.fn[NAME$4].Constructor = Widget;

    $.fn[NAME$4].noConflict = function () {
      $.fn[NAME$4] = JQUERY_NO_CONFLICT$4;
      return Widget._jQueryInterface;
    };
  }

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
  */

  var NAME$5 = 'aceFileInput';
  var VERSION$5 = '2.1.0';
  var DATA_KEY$5 = 'ace.file';
  var EVENT_KEY$5 = ".".concat(DATA_KEY$5);
  var Event$5 = {
    // PREVIEW: `preview${EVENT_KEY}`,
    INVALID: "invalid".concat(EVENT_KEY$5),
    RESET: "reset".concat(EVENT_KEY$5),
    PREVIEW_FAILED: "preview_failed".concat(EVENT_KEY$5)
  };
  var Default$4 = {
    style: false,
    persistent: false,
    container: 'border-1 brc-grey-l2 brc-h-warning-m1',
    btnChooseClass: 'bgc-default text-white px-2 pt-2 text-90 my-1px mr-1px',
    btnChangeClass: 'bgc-blue text-white px-2 pt-2 text-90 my-1px mr-1px',
    btnChooseText: 'Choose',
    btnChangeText: 'Change',
    placeholderClass: 'text-grey-m2 px-1',
    placeholderText: 'No file chosen',
    placeholderIcon: '<i class="fa fa-upload bgc-grey-m1 text-white w-4 py-2 text-center"></i>',
    iconClass: 'mx-2px',
    reset: '',
    resetText: '',
    resetIcon: '<i class="fa fa-times"></i>',
    droppable: false,
    thumbnail: false,
    // large, fit, small
    previewImage: true,
    allowExt: null,
    denyExt: null,
    allowMime: null,
    denyMime: null,
    maxSize: null,
    previewSize: false,
    previewWidth: false,
    previewHeight: false,
    // callbacks
    beforeChange: null,
    fileIcons: {
      file: '<i class="fa fa-file bgc-grey-m1 text-white w-4 py-2 text-center"></i>',
      image: '<i class="far fa-image bgc-purple-m1 text-white w-4 py-2 text-center"></i>',
      video: '<i class="fas fa-video bgc-success-m1 text-white w-4 py-2 text-center"></i>',
      audio: '<i class="fas fa-music bgc-pink-m1 text-white w-4 py-2 text-center"></i>',
      document: '<i class="far fa-file-alt bgc-default-d1 text-white w-4 py-2 text-center"></i>',
      archive: '<i class="far fa-file-archive bgc-warning text-white w-4 py-2 text-center"></i>',
      code: '<i class="fas fa-code file-code bgc-secondary text-white w-4 py-2 text-center"></i>'
    }
  };
  var DefaultType$4 = {
    persistent: 'boolean',
    style: '(boolean|string)',
    btn: '(string|undefined)',
    container: '(string|undefined)',
    icon: '(string|undefined)',
    placeholderText: '(string|undefined)',
    placeholderIcon: '(string|undefined)',
    btnChooseText: '(string|undefined)',
    btnChangeText: '(string|undefined)',
    reset: '(string|undefined)',
    resetText: '(string|undefined)',
    resetIcon: '(string|undefined)',
    droppable: 'boolean',
    thumbnail: '(boolean|string)',
    previewImage: 'boolean',
    allowExt: '(string|null)',
    denyExt: '(string|null)',
    allowMime: '(string|null)',
    denyMime: '(string|null)',
    maxSize: '(number|null)',
    previewSize: '(boolean|number)',
    previewWidth: '(boolean|number)',
    previewHeight: '(boolean|number)',
    fileIcons: '(object|null)',
    // callbacks
    beforeChange: '(function|null)'
  };
  var PreviewError = {
    FILE_LOAD_FAILED: 1,
    IMAGE_LOAD_FAILED: 2,
    THUMBNAIL_FAILED: 3
  };
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var FileInput =
  /*#__PURE__*/
  function () {
    function FileInput(element, config) {
      var _this = this;

      _classCallCheck(this, FileInput);

      this.settings = this._getConfig(config);
      this.settings.fileIcons = $.extend({}, Default$4.fileIcons, this.settings.fileIcons);
      this.fileList = [];
      this.selectMethod = '';
      this._hasMultiple = 'multiple' in document.createElement('INPUT');
      this._hasFileList = 'FileList' in window; // file list enabled in modern browsers

      this._hasFileReader = 'FileReader' in window;
      this._hasFile = 'File' in window;
      this.element = element;
      this.$element = $(element);
      this.disabled = false;
      this.canReset = true;
      this.$element.off('change.aceInnerCall').on('change.aceInnerCall', function (e, aceInnerCall) {
        if (_this.disabled) return;
        if (aceInnerCall === true) return; // this change Event is called from within this class (_enableFileDrop) and extra checkings are taken care of there

        return _this._handleOnChange();
      });
      var parentLabel = this.$element.closest('label').addClass('d-block');
      var tagName = parentLabel.length === 0 ? 'label' : 'span'; // if not inside a "LABEL" tag, use "LABEL" tag, otherwise use "SPAN"

      this.$element.wrap('<' + tagName + ' class="ace-file-input" />');
      this.$wrap = this.$element.parent();

      this._applySettings();
    } // Getters


    _createClass(FileInput, [{
      key: "_getConfig",
      value: function _getConfig(config, Default) {
        config = _objectSpread2({}, Default, {}, config);
        bootstrap.Util.typeCheckConfig(NAME$5, config, DefaultType$4);
        return config;
      }
    }, {
      key: "_applySettings",
      value: function _applySettings() {
        var _this2 = this;

        this._isMulti = this.$element.attr('multiple') && this._hasMultiple;
        this._isDropStyle = this.settings.style === 'drop';

        if (this._isDropStyle) {
          if (!this.settings.thumbnail) this.settings.thumbnail = 'small';
          this.$wrap.addClass('ace-file-multiple');
        } else {
          this.$wrap.removeClass('ace-file-multiple');
        }

        this.$wrap.find('*:not(input[type=file])').remove(); // remove all except our input, good for when changing settings

        var placeholder = "<div class=\"ace-file-placeholder h-100\">\n<span class=\"ace-file-icon align-self-center ".concat(this.settings.iconClass || '', "\">\n  ").concat(this.settings.placeholderIcon || '', "\n</span>\n<span class=\"ace-file-name ").concat(this.settings.placeholderClass || '', "\">\n  ").concat(this.settings.placeholderText, "\n</span>") + (!this._isDropStyle ? "<span class=\"ace-file-btn ml-auto ".concat(this.settings.btnChooseClass || '', "\">").concat(this.settings.btnChooseText, "</span>") : '') + '</div>';
        this.$element.after("<div class=\"ace-file-container d-flex flex-column ".concat(this.settings.container || '', "\">").concat(placeholder, "</div>"));
        this.$container = this.$element.next();

        if (this.settings.reset !== false) {
          var remove = this.settings.reset.length > 0 ? this.settings.reset : !this._isDropStyle ? 'position-rc text-danger mr-n25 w-3 radius-2 border-1 brc-h-danger-m4 text-center' : 'position-tr bgc-white text-danger mt-n25 mr-n25 w-4 h-4 text-center pt-2px radius-round border-2 brc-grey-m4 brc-h-danger-m3';
          var btn = $("<a title=\"".concat(this.settings.resetText || '', "\" class=\"remove ").concat(remove, "\" href=\"#\">").concat(this.settings.resetIcon, "</a>")).appendTo(this.$wrap);
          if (this.settings.resetText) btn.tooltip({
            container: 'body'
          });
          btn.on('click', function (e) {
            e.preventDefault();
            if (!_this2.canReset) return false;
            var event;

            _this2.$element.trigger(event = new $.Event(Event$5.RESET));

            if (event.isDefaultPrevented()) return false;

            _this2.resetInput();

            _this2.stopLoading();

            return false;
          });
        }

        if (this.settings.droppable && this._hasFileList) {
          this._enableFileDrop();
        }
      }
    }, {
      key: "showFileList",
      value: function showFileList($files, innerCall) {
        var _this3 = this;

        var files = $files || this.fileList;
        if (!files || !files.length) return; /// ///////////////////////////////////////////////////////////////

        if (!this.settings.persistent) {
          this.resetInputUI();
        }

        this.$container.addClass('selected');
        this.$container.find('.ace-file-placeholder').addClass('d-none');

        var _loop = function _loop(i) {
          var filename = '';
          var format = false;
          if (typeof files[i] === 'string') filename = files[i];else if (_this3._hasFile && files[i] instanceof window.File) filename = $.trim(files[i].name);else if (files[i] instanceof Object && Object.prototype.hasOwnProperty.call(files[i], 'name')) {
            // format & name specified by user (pre-displaying name, etc)
            filename = files[i].name;
            if (Object.prototype.hasOwnProperty.call(files[i], 'type')) format = files[i].type;
            if (Object.prototype.hasOwnProperty.call(files[i], 'path')) files[i].path = files[i].name;
          } else return "continue";
          var index = filename.lastIndexOf('\\') + 1;
          if (index === 0) index = filename.lastIndexOf('/') + 1;
          filename = filename.substr(index);

          if (!format) {
            if (/\.(jpe?g|png|gif|svg|bmp|tiff?|webp)$/i.test(filename)) {
              format = 'image';
            } else if (/\.(mpe?g|flv|mov|avi|swf|mp4|mkv|webm|wmv|3gp)$/i.test(filename)) {
              format = 'video';
            } else if (/\.(mp3|ogg|wav|wma|amr|aac)$/i.test(filename)) {
              format = 'audio';
            } else if (/\.(pdf|docx?|rtf|txt)$/i.test(filename)) {
              format = 'document';
            } else if (/\.(zip|rar|tar)$/i.test(filename)) {
              format = 'archive';
            } else if (/\.(html?|js|s?css|less|php|py|aspx?|rb|c|cpp|java|cs)$/i.test(filename)) {
              format = 'code';
            } else format = 'file';
          }

          fileIcon = _this3.settings.fileIcons[format];
          className = 'ace-file-item d-flex h-100';
          if (_this3.settings.thumbnail) className += " ".concat(_this3.settings.thumbnail !== 'small' ? 'flex-column my-2px py-2' : 'mx-1 py-1', " align-items-center");
          label = $("<div class=\"".concat(className, "\">\n<span class=\"ace-file-icon align-self-center ").concat(_this3.settings.iconClass || '', "\">").concat(fileIcon, "</span>\n<span class=\"ace-file-name ").concat(_this3.settings.thumbnail && _this3.settings.thumbnail !== 'small' ? 'px-2' : 'px-1', "\">").concat(filename, "</span>") + (!_this3._isDropStyle ? "<span class=\"ace-file-btn ml-auto ".concat(_this3.settings.btnChangeClass || '', "\">").concat(_this3.settings.btnChangeText, "</span>") : '') + '</div>').appendTo(_this3.$container);
          type = innerCall === true && _this3._hasFile && files[i] instanceof window.File ? $.trim(files[i].type) : '';
          canPreview = _this3.settings.previewImage !== false && _this3._hasFileReader && _this3.settings.thumbnail && (type.length > 0 && type.match('image') || type.length === 0 && format === 'image'); // the second one is for older Android's default browser which gives an empty text for file.type

          if (canPreview) {
            $.when(_this3._previewImage(files[i], label)) // .done( ()  => {
            // if( this.settings.thumbnail === 'small' ) label.find('.ace-file-icon').addClass('thumbnail-img');
            // })
            .fail(function (result) {
              _this3.$element.trigger(Event$5.PREVIEW_FAILED, {
                filename: filename,
                code: result.code
              });
            });
          }
        };

        for (var i = 0; i < files.length; i++) {
          var fileIcon;
          var className;
          var label;
          var type;
          var canPreview;

          var _ret = _loop(i);

          if (_ret === "continue") continue;
        }

        return true;
      }
    }, {
      key: "resetInput",
      value: function resetInput() {
        this.resetInputUI();
        this.resetInputField();
        this.resetInputData();
        this.$container.removeClass('selected');
      }
    }, {
      key: "resetInputUI",
      value: function resetInputUI() {
        this.$container.find('div:not(.ace-file-placeholder)').remove();
        this.$container.find('.ace-file-placeholder').removeClass('d-none'); // this.resetInputData();
      }
    }, {
      key: "resetInputField",
      value: function resetInputField() {
        // http://stackoverflow.com/questions/1043957/clearing-input-type-file-using-jquery/13351234#13351234
        this.$element.wrap('<form>').parent().each(function (index, formEl) {
          formEl.reset();
        });
        this.$element.unwrap(); // when reset is called on this temporary inner form
        // only **IE10** triggers 'reset' on the outer form as well
        // and as we have mentioned to reset input on outer form reset
        // it causes infinite recusrsion by coming back to resetInputField
        // thus calling reset again and again and again
        // so because when "reset" button of outer form is hit, file input is automatically reset
        // we just resetInputUI to avoid recursion
      }
    }, {
      key: "resetInputData",
      value: function resetInputData() {
        this.fileList = [];
        this.selectMethod = '';

        if (this.$element.data('ace_input_files')) {
          this.$element.removeData('ace_input_files');
          this.$element.removeData('ace_input_method');
        }
      }
    }, {
      key: "enableReset",
      value: function enableReset() {
        this.canReset = true;
      }
    }, {
      key: "disableReset",
      value: function disableReset() {
        this.canReset = false;
      }
    }, {
      key: "disable",
      value: function disable() {
        this.disabled = true;
        this.$element.attr('disabled', 'disabled').addClass('disabled');
      }
    }, {
      key: "enable",
      value: function enable() {
        this.disabled = false;
        this.$element.removeAttr('disabled').removeClass('disabled');
      }
    }, {
      key: "files",
      value: function files() {
        return this.fileList.length > 0 ? this.fileList : null;
      }
    }, {
      key: "method",
      value: function method() {
        return this.selectMethod;
      }
    }, {
      key: "updateSettings",
      value: function updateSettings(newSettings) {
        this.settings = $.extend({}, this.settings, newSettings);

        this._applySettings();
      }
    }, {
      key: "startLoading",
      value: function startLoading() {
        var loadingHtml = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '<i class="overlay-content fa fa-spin fa-spinner text-white fa-2x"></i>';
        var loader = this.$wrap.find('.ace-file-overlay');

        if (loader.length === 0) {
          loader = $('<div class="ace-file-overlay text-center"></div>').appendTo(this.$wrap);
          loader.on('click', function (e) {
            e.stopImmediatePropagation();
            e.preventDefault();
            return false;
          });
          this.element.setAttribute('readonly', 'true'); // for IE
        }

        loader.empty().append(loadingHtml);
      }
    }, {
      key: "stopLoading",
      value: function stopLoading() {
        this.$wrap.find('.ace-file-overlay').remove();
        this.element.removeAttribute('readonly');
      }
    }, {
      key: "_enableFileDrop",
      value: function _enableFileDrop() {
        var _this4 = this;

        var dropbox = this.$element.parent();
        dropbox.off('dragenter').on('dragenter', function (e) {
          e.preventDefault();
          e.stopPropagation();
        }).off('dragover').on('dragover', function (e) {
          e.preventDefault();
          e.stopPropagation();
        }).off('drop').on('drop', function (e) {
          e.preventDefault();
          e.stopPropagation();
          if (_this4.disabled) return;
          var dt = e.originalEvent.dataTransfer;
          var tmpFileList = dt.files;

          if (!_this4._isMulti && tmpFileList.length > 1) {
            // single file upload, but dragged multiple files
            var tmpfiles = [];
            tmpfiles.push(tmpFileList[0]);
            tmpFileList = tmpfiles; // keep only first file
          }

          tmpFileList = _this4._processFiles(tmpFileList, true); // true means files have been dropped

          if (tmpFileList === false) return false;

          _this4.$element.data('ace_input_method', 'drop');

          _this4.selectMethod = 'drop'; // const fileArray = [...tmpFileList]

          var fileArray = [];

          for (var f = 0; f < tmpFileList.length; f++) {
            fileArray.push(tmpFileList[f]);
          }

          if (_this4.settings.persistent) {
            _this4.fileList = _this4.fileList.concat(fileArray);
          } else {
            _this4.fileList = fileArray;
          }

          _this4.$element.data('ace_input_files', _this4.fileList);

          _this4.$element.data('ace_input_method', _this4.selectMethod);

          _this4.showFileList(fileArray, true);

          _this4.$element.triggerHandler('change', [true]); // true means aceInnerCall


          return true;
        });
      } /// ///////////

    }, {
      key: "_handleOnChange",
      value: function _handleOnChange() {
        var tmpFileList = this.element.files || [this.element.value]; // make it an array

        tmpFileList = this._processFiles(tmpFileList, false); // false means files have been selected, not dropped

        if (tmpFileList === false) return false; // const fileArray = [...tmpFileList];

        var fileArray = [];

        for (var f = 0; f < tmpFileList.length; f++) {
          fileArray.push(tmpFileList[f]);
        }

        this.selectMethod = 'select';

        if (this.settings.persistent) {
          this.fileList = this.fileList.concat(fileArray);
        } else {
          this.fileList = fileArray;
        }

        this.$element.data('ace_input_files', this.fileList);
        this.$element.data('ace_input_method', this.selectMethod);
        this.showFileList(fileArray, true);
        return true;
      }
    }, {
      key: "_previewImage",
      value: function _previewImage(file, label) {
        var $icon = label.find('.ace-file-icon'); // it should be out of onload, otherwise all onloads may target the same $icon because of delays

        $icon.empty();
        var deferred = new $.Deferred();

        var getImage = function getImage(src, $file) {
          $icon.prepend("<img style='display: none;' />");
          var img = $icon.find('img:last').get(0);
          $(img).one('load', function () {
            imgLoaded(img, $file);
          }).one('error', function () {
            imgFailed();
          });
          img.src = src;
        };

        var This = this;

        var imgLoaded = function imgLoaded(img, $file) {
          // if image loaded successfully
          var size = This.settings.previewSize;

          if (!size) {
            if (This.settings.previewWidth || This.settings.previewHeight) {
              size = {
                previewWidth: This.settings.previewWidth,
                previewHeight: This.settings.previewHeight
              };
            } else {
              size = 50;
              if (This.settings.thumbnail === 'large') size = 150;
            }
          }

          if (This.settings.thumbnail === 'fit') size = $icon.parent().width();else if (typeof size === 'number') size = parseInt(Math.min(size, $icon.parent().width()));
          var svg = /svg/.test($file.type);
          var thumb = !svg ? This._getThumbnail(img, size, $file.type) : false; //, file.type;

          if (thumb === null) {
            // if making thumbnail fails
            $(This).remove();
            deferred.reject({
              code: PreviewError.THUMBNAIL_FAILED
            });
            return;
          }
          /**
          // add width/height info to "file" and trigger preview finished event for each image!
          if ($file && $file instanceof window.File) {
            if (thumb) {
              $file.width = thumb.width
              $file.height = thumb.height
            }
              var event
            This.$element.trigger(event = new $.Event(Event.PREVIEW), { file: $file })
            if (event.isDefaultPrevented()) showPreview = false
          }
          */

          {
            if (svg) {
              if (This.settings.thumbnail === 'small') {
                $(img).css({
                  width: size
                });
              } else {
                if (img.width > img.height) {
                  $(img).css({
                    width: size
                  });
                } else $(img).css({
                  height: size
                });
              }
            } else {
              var w = thumb.previewWidth;
              var h = thumb.previewHeight;

              if (This.settings.thumbnail === 'small') {
                w = h = parseInt(Math.max(w, h));
              } else $icon.addClass('thumbnail-large');

              $(img).css({
                background: 'url(' + thumb.src + ') center no-repeat',
                width: w,
                height: h
              }).data('src', thumb.src).attr({
                src: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQImWNgYGBgAAAABQABh6FO1AAAAABJRU5ErkJggg=='
              });
            }

            img.style.display = '';
          } /// ////////////////


          deferred.resolve();
        };

        var imgFailed = function imgFailed() {
          // for example when a file has image extenstion, but format is something else
          $icon.find('img').remove();
          deferred.reject({
            code: PreviewError.IMAGE_LOAD_FAILED
          });
        };

        if (this._hasFile && file instanceof window.File) {
          var reader = new window.FileReader();

          reader.onload = function (e) {
            getImage(e.target.result, file);
          };

          reader.onerror = function (e) {
            deferred.reject({
              code: PreviewError.FILE_LOAD_FAILED
            });
          };

          reader.readAsDataURL(file);
        } else {
          if (file instanceof Object && Object.prototype.hasOwnProperty.call(file, 'path')) {
            getImage(file.path, null); // file is a file name (path) --- this is used to pre-show user-selected image
          }
        }

        return deferred.promise();
      } /// //////////

    }, {
      key: "_getThumbnail",
      value: function _getThumbnail(img, size, type) {
        var imgWidth = img.width;
        var imgHeight = img.height; //* *IE10** is not giving correct width using img.width so we use $(img).width()

        imgWidth = imgWidth > 0 ? imgWidth : $(img).width();
        imgHeight = imgHeight > 0 ? imgHeight : $(img).height();
        var previewSize = false;
        var previewHeight = false;
        var previewWidth = false;
        if (typeof size === 'number') previewSize = size;else if (size instanceof Object) {
          if (size.previewWidth && !size.previewHeight) previewWidth = size.previewWidth;else if (size.previewHeight && !size.previewWidth) previewHeight = size.previewHeight;else if (size.previewWidth && size.previewHeight) {
            previewWidth = size.previewWidth;
            previewHeight = size.previewHeight;
          }
        }

        if (previewSize) {
          if (imgWidth > imgHeight) {
            previewWidth = previewSize;
            previewHeight = parseInt(imgHeight / imgWidth * previewWidth);
          } else {
            previewHeight = previewSize;
            previewWidth = parseInt(imgWidth / imgHeight * previewHeight);
          }
        } else {
          if (!previewHeight && previewWidth) {
            previewHeight = parseInt(imgHeight / imgWidth * previewWidth);
          } else if (previewHeight && !previewWidth) {
            previewWidth = parseInt(imgWidth / imgHeight * previewHeight);
          }
        }

        var dataURL;

        try {
          var canvas = document.createElement('canvas');
          canvas.width = previewWidth;
          canvas.height = previewHeight;
          var context = canvas.getContext('2d');
          context.imageSmoothingQuality = 'medium';
          context.drawImage(img, 0, 0, imgWidth, imgHeight, 0, 0, previewWidth, previewHeight);
          dataURL = canvas.toDataURL(type, 0.8); // dataURL = canvas.toDataURL();
        } catch (e) {
          dataURL = null;
        }

        if (!dataURL) return null; // there was only one image that failed in firefox completely randomly! so let's double check things

        if (!/^data:image\/(png|jpe?g|gif|svg);base64,[0-9A-Za-z+/=]+$/.test(dataURL)) dataURL = null;
        if (!dataURL) return null;
        return {
          src: dataURL,
          previewWidth: previewWidth,
          previewHeight: previewHeight,
          width: imgWidth,
          height: imgHeight
        };
      }
    }, {
      key: "_processFiles",
      value: function _processFiles(tmpFileList, dropped) {
        var ret = this._checkFileList(tmpFileList, dropped);

        if (ret === -1) {
          this.resetInput();
          return false;
        }

        if (!ret || ret.length === 0) {
          if (!this.$element.data('ace_input_files')) this.resetInput(); // if nothing selected before, reset because of the newly unacceptable (ret=false||length=0) selection
          // otherwise leave the previous selection intact?!!!

          return false;
        }

        if (ret instanceof Array || this._hasFileList && ret instanceof window.FileList) tmpFileList = ret;
        ret = true;
        if (this.settings.beforeChange) ret = this.settings.beforeChange.call(this.element, tmpFileList, dropped);

        if (ret === -1) {
          this.resetInput();
          return false;
        }

        if (!ret || ret.length === 0) {
          if (!this.$element.data('ace_input_files')) this.resetInput();
          return false;
        } // inside beforeChange you can return a modified File Array as result


        if (ret instanceof Array || this._hasFileList && ret instanceof window.FileList) tmpFileList = ret;
        return tmpFileList;
      } /// ///////

    }, {
      key: "_checkFileList",
      value: function _checkFileList(files, dropped) {
        var allowExt = this._getExtRegex(this.settings.allowExt);

        var denyExt = this._getExtRegex(this.settings.denyExt);

        var allowMime = this._getMimeRegex(this.settings.allowMime);

        var denyMime = this._getMimeRegex(this.settings.denyMime);

        var maxSize = this.settings.maxSize || false;
        if (!(allowExt || denyExt || allowMime || denyMime || maxSize)) return true; // no checking required

        var safeFiles = [];
        var errorList = {}; // for (const file of files) {

        for (var i = 0; i < files.length; i++) {
          var file = files[i]; // file is either a string(file name) or a File object

          var filename = !this._hasFile ? file : file.name;

          if (allowExt && !allowExt.test(filename)) {
            // extension not matching whitelist, so drop it
            if (!('ext' in errorList)) errorList.ext = [];
            errorList.ext.push(filename);
            continue;
          } else if (denyExt && denyExt.test(filename)) {
            // extension is matching blacklist, so drop it
            if (!('ext' in errorList)) errorList.ext = [];
            errorList.ext.push(filename);
            continue;
          }

          var type;

          if (!this._hasFile) {
            // in browsers that don't support FileReader API
            safeFiles.push(file);
            continue;
          } else if ((type = $.trim(file.type)).length > 0) {
            // there is a mimetype for file so let's check against are rules
            if (allowMime && !allowMime.test(type)) {
              // mimeType is not matching whitelist, so drop it
              if (!('mime' in errorList)) errorList.mime = [];
              errorList.mime.push(filename);
              continue;
            } else if (denyMime && denyMime.test(type)) {
              // mimeType is matching blacklist, so drop it
              if (!('mime' in errorList)) errorList.mime = [];
              errorList.mime.push(filename);
              continue;
            }
          }

          if (maxSize && file.size > maxSize) {
            // file size is not acceptable
            if (!('size' in errorList)) errorList.size = [];
            errorList.size.push(filename);
            continue;
          }

          safeFiles.push(file);
        }

        if (safeFiles.length === files.length) return files; // return original file list if all are valid
        /// //////

        var errorCount = {
          ext: 0,
          mime: 0,
          size: 0
        };
        if ('ext' in errorList) errorCount.ext = errorList.ext.length;
        if ('mime' in errorList) errorCount.mime = errorList.mime.length;
        if ('size' in errorList) errorCount.size = errorList.size.length;
        var event;
        this.$element.trigger(event = new $.Event(Event$5.INVALID), {
          fileCount: files.length,
          invalidCount: files.length - safeFiles.length,
          errorList: errorList,
          errorCount: errorCount,
          dropped: dropped
        });
        if (event.isDefaultPrevented()) return -1; // it will reset input
        /// ///////

        return safeFiles; // return safeFiles
      }
    }, {
      key: "_getExtRegex",
      value: function _getExtRegex(ext) {
        if (!ext) return null;
        if (Array.isArray(ext)) ext = ext.join('|');
        if (ext.length === 0) return null;
        return new RegExp('\\.(?:' + ext + ')$', 'i');
      }
    }, {
      key: "_getMimeRegex",
      value: function _getMimeRegex(mime) {
        if (!mime) return null;
        if (Array.isArray(mime)) mime = mime.join('|');
        if (mime.length === 0) return null;
        return new RegExp('^(?:' + mime.replace(/\//g, '\\/') + ')$', 'i');
      }
    }], [{
      key: "_jQueryInterface",
      value: function _jQueryInterface(config, value) {
        return this.each(function () {
          var $this = $(this);
          var data = $this.data(DATA_KEY$5);

          var _config = _objectSpread2({}, Default$4, {}, $this.data(), {}, _typeof(config) === 'object' && config ? config : {}); // if (!data && _config.toggle && /show|hide/.test(config)) {
          //  _config.toggle = false
          // }


          if (!data) {
            data = new FileInput(this, _config);
            $this.data(DATA_KEY$5, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"".concat(config, "\""));
            }

            data[config](value);
          }
        });
      }
    }, {
      key: "VERSION",
      get: function get() {
        return VERSION$5;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$4;
      }
    }]);

    return FileInput;
  }();
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
  */


  if (typeof $ !== 'undefined') {
    var JQUERY_NO_CONFLICT$5 = $.fn[NAME$5];
    $.fn[NAME$5] = FileInput._jQueryInterface;
    $.fn[NAME$5].Constructor = FileInput;

    $.fn[NAME$5].noConflict = function () {
      $.fn[NAME$5] = JQUERY_NO_CONFLICT$5;
      return FileInput._jQueryInterface;
    };
  }

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$6 = 'aceWysiwyg';
  var VERSION$6 = '2.1.0';
  var DATA_KEY$6 = 'ace.wysiwyg';
  var DefaultType$5 = {
    wysiwyg: 'object',
    colors: 'array',
    // speech: 'boolean',
    toolbar: 'array',
    toolbarPlacement: '(function|null)',
    toolbarStyle: '(string|number)'
  };
  var Default$5 = {
    wysiwyg: {},
    // speech: true,
    toolbarPlacement: null,
    toolbarStyle: '',
    colors: ['#ac725e', '#d06b64', '#f83a22', '#fa573c', '#ff7537', '#ffad46', '#42d692', '#16a765', '#7bd148', '#b3dc6c', '#fbe983', '#fad165', '#92e1c0', '#9fe1e7', '#9fc6e7', '#4986e7', '#9a9cff', '#b99aff', '#c2c2c2', '#cabdbf', '#cca6ac', '#f691b2', '#cd74e6', '#a47ae2', '#444444'],
    toolbar: ['font', null, 'fontSize', null, 'bold', 'italic', 'strikethrough', 'underline', null, 'insertunorderedlist', 'insertorderedlist', 'outdent', 'indent', null, 'justifyleft', 'justifycenter', 'justifyright', 'justifyfull', null, 'createLink', 'unlink', null, 'insertImage', null, 'foreColor', null, 'undo', 'redo', null, 'viewSource']
  };

  var Wysiwyg =
  /*#__PURE__*/
  function () {
    function Wysiwyg(element, config) {
      _classCallCheck(this, Wysiwyg);

      this._element = element;
      this._config = this._getConfig(config);
      this.initEditor();
    }

    _createClass(Wysiwyg, [{
      key: "initEditor",
      value: function initEditor() {
        var toolbarHtml = this._createToolbarHtml();

        var toolbar; // if we have a function to decide where to put the toolbar, then call that

        if (this._config.toolbarPlacement) toolbar = this._config.toolbarPlacement.call(this._element, toolbarHtml);else toolbar = $(this._element).before(toolbarHtml).prev(); // otherwise put it just before our DIV

        if (this._config.toolbarStyle) toolbar.addClass('bsw-toolbar-style-' + this._config.toolbarStyle); // enable tooltips

        if ($.fn.tooltip) toolbar.find('a[title]').tooltip({
          animation: false,
          container: 'body'
        });
        toolbar.find('.dropdown-menu input[type=text]').on('click', function () {
          return false;
        }).on('change', function () {
          $(this).closest('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
        }).on('keydown', function (e) {
          if (e.which === 27) {
            this.value = '';
            $(this).change();
          } else if (e.which === 13) {
            e.preventDefault();
            e.stopPropagation();
            $(this).change();
          }
        });
        toolbar.find('input[type=file]').prev().on('click', function (e) {
          $(this).next().click();
        });
        var self = $(this._element); // view source

        var viewSource = false;
        toolbar.find('a[data-toggle=source]').on('click', function (e) {
          e.preventDefault();

          if (!viewSource) {
            $('<textarea />').css({
              width: self.outerWidth(),
              height: self.outerHeight()
            }).val(self.html()).insertAfter(self);
            self.addClass('d-none');
            $(this).addClass('active');
          } else {
            var textarea = self.next();
            self.html(textarea.val()).removeClass('d-none');
            textarea.remove();
            $(this).removeClass('active');
          }

          viewSource = !viewSource;
        }); // initiate wysiwyg plugin

        var $options = $.extend({}, {
          activeToolbarClass: 'active',
          toolbarSelector: toolbar
        }, this._config.wysiwyg || {});
        $(this._element).wysiwyg($options);

        this._handleImages();
      }
    }, {
      key: "_createToolbarHtml",
      value: function _createToolbarHtml() {
        var _buttonDefaults = {
          font: {
            values: ['Arial', 'Courier', 'Comic Sans MS', 'Helvetica', 'Open Sans', 'Tahoma', 'Verdana'],
            icon: 'fa fa-font text-secondary-m1',
            title: 'Font'
          },
          fontSize: {
            values: {
              5: 'Huge',
              3: 'Normal',
              1: 'Small'
            },
            icon: 'fa fa-text-height text-secondary-m1',
            title: 'Font Size'
          },
          bold: {
            icon: 'fa fa-bold text-secondary-m1',
            title: 'Bold (Ctrl/Cmd+B)'
          },
          italic: {
            icon: 'fa fa-italic text-secondary-m1',
            title: 'Italic (Ctrl/Cmd+I)'
          },
          strikethrough: {
            icon: 'fa fa-strikethrough text-secondary-m1',
            title: 'Strikethrough'
          },
          underline: {
            icon: 'fa fa-underline text-secondary-m1',
            title: 'Underline'
          },
          insertunorderedlist: {
            icon: 'fa fa-list-ul text-secondary-m1',
            title: 'Bullet list'
          },
          insertorderedlist: {
            icon: 'fa fa-list-ol text-secondary-m1',
            title: 'Number list'
          },
          outdent: {
            icon: 'fa fa-outdent text-secondary-m1',
            title: 'Reduce indent (Shift+Tab)'
          },
          indent: {
            icon: 'fa fa-indent text-secondary-m1',
            title: 'Indent (Tab)'
          },
          justifyleft: {
            icon: 'fa fa-align-left text-secondary-m1',
            title: 'Align Left (Ctrl/Cmd+L)'
          },
          justifycenter: {
            icon: 'fa fa-align-center text-secondary-m1',
            title: 'Center (Ctrl/Cmd+E)'
          },
          justifyright: {
            icon: 'fa fa-align-right text-secondary-m1',
            title: 'Align Right (Ctrl/Cmd+R)'
          },
          justifyfull: {
            icon: 'fa fa-align-justify text-secondary-m1',
            title: 'Justify (Ctrl/Cmd+J)'
          },
          createLink: {
            icon: 'fa fa-link text-secondary-m1',
            title: 'Hyperlink',
            button_text: 'Add',
            placeholder: 'URL',
            button_class: 'btn-primary'
          },
          unlink: {
            icon: 'fa fa-unlink text-secondary-m1',
            title: 'Remove Hyperlink'
          },
          insertImage: {
            icon: 'fa fa-image text-secondary-m1',
            title: 'Insert picture',
            button_text: '<i class="fa fa-file mr-1"></i> Choose an Image &hellip;',
            placeholder: 'Remote Image URL',
            button_insert: 'Insert',
            button_class: 'btn-success',
            button_insert_class: 'btn-primary',
            choose_file: true // show the choose file button?

          },
          foreColor: {
            icon: 'fas fa-eye-dropper text-pink-m2',
            values: this._config.colors,
            title: 'Foreground Color'
          },
          backColor: {
            icon: 'fas fa-fill-drip text-secondary-m1',
            values: this._config.colors,
            title: 'Background Color'
          },
          undo: {
            icon: 'fa fa-undo text-secondary-m1',
            title: 'Undo (Ctrl/Cmd+Z)'
          },
          redo: {
            icon: 'fa fa-redo text-secondary-m1',
            title: 'Redo (Ctrl/Cmd+Y)'
          },
          viewSource: {
            icon: 'fa fa-code text-secondary-m1',
            title: 'View Source'
          }
        };
        var toolbarButtons = this._config.toolbar;
        var toolbarHtml = ' <div class="bootstrap-wysiwyg-toolbar btn-toolbar text-center"> <div class="btn-group"> ';

        for (var tb in toolbarButtons) {
          if (Object.prototype.hasOwnProperty.call(toolbarButtons, tb)) {
            var button = toolbarButtons[tb];

            if (button === null) {
              toolbarHtml += ' </div> <div class="btn-group"> ';
              continue;
            }

            if (typeof button === 'string' && button in _buttonDefaults) {
              button = _buttonDefaults[button];
              button.name = toolbarButtons[tb];
            } else if (_typeof(button) === 'object' && button.name in _buttonDefaults) {
              button = $.extend(_buttonDefaults[button.name], button);
            } else continue;

            var className = 'className' in button ? button.className : 'my-2px btn-sm btn-outline-secondary btn-h-outline-primary btn-a-light-primary';

            switch (button.name) {
              case 'font':
                toolbarHtml += " <a class=\"btn btn-sm ".concat(className, " dropdown-toggle\" data-toggle=\"dropdown\" title=\"").concat(button.title, "\"><i class=\"").concat(button.icon, "\">").concat(button.iconText || '', "</i><i class=\"fa fa-angle-down ml-1 text-secondary-m2\"></i></a> ");
                toolbarHtml += ' <div class="dropdown-menu">';

                for (var font in button.values) {
                  if (Object.prototype.hasOwnProperty.call(button.values, font)) {
                    toolbarHtml += " <div class=\"dropdown-item\"><a data-edit=\"fontName ".concat(button.values[font], "\" style=\"font-family:'").concat(button.values[font], "'\">").concat(button.values[font], "</a></div> ");
                  }
                }

                toolbarHtml += ' </div>';
                break;

              case 'fontSize':
                toolbarHtml += " <a class=\"btn btn-sm ".concat(className, " dropdown-toggle\" data-toggle=\"dropdown\" title=\"").concat(button.title, "\"><i class=\"").concat(button.icon, "\">").concat(button.iconText || '', "</i>&nbsp;<i class=\"fa fa-angle-down ml-1 text-secondary-m2\"></i></a> ");
                toolbarHtml += ' <div class="dropdown-menu"> ';

                for (var size in button.values) {
                  if (Object.prototype.hasOwnProperty.call(button.values, size)) {
                    toolbarHtml += " <div class=\"dropdown-item\"><a data-edit=\"fontSize ".concat(size, "\"><font size=\"").concat(size, "\">").concat(button.values[size], "</font></a></div> ");
                  }
                }

                toolbarHtml += ' </div> ';
                break;

              case 'createLink':
                toolbarHtml += " <div class=\"btn-group\"> <a class=\"btn btn-sm ".concat(className, " dropdown-toggle\" data-toggle=\"dropdown\" title=\"").concat(button.title, "\"><i class=\"").concat(button.icon, "\">").concat(button.iconText || '', "</i></a> ");
                toolbarHtml += " <div class=\"dropdown-menu py-1 px-3 brc-primary-tp2 border-2\" style=\"min-width: 300px;\">\n\t\t\t\t\t\t <div class=\"input-group my-3\">\n\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"".concat(button.placeholder, "\" type=\"text\" data-edit=\"").concat(button.name, "\" />\n\t\t\t\t\t\t\t<div class=\"input-group-append\">\n\t\t\t\t\t\t\t\t<button class=\"btn btn-sm ").concat(button.button_class, "\" type=\"button\">").concat(button.button_text, "</button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t </div>\n\t\t\t\t\t</div> </div>");
                break;

              case 'insertImage':
                toolbarHtml += " <div class=\"btn-group\"> <a class=\"btn btn-sm ".concat(className, " dropdown-toggle\" data-toggle=\"dropdown\" title=\"").concat(button.title, "\"><i class=\"").concat(button.icon, "\">").concat(button.iconText || '', "</i></a> ");
                toolbarHtml += ' <div class="dropdown-menu p-3 brc-primary-tp2 border-2" style="min-width: 300px;">';

                if (button.choose_file && 'FileReader' in window) {
                  toolbarHtml += "<div class=\"text-muted\">Drag &amp; drop images into editor or</div>\n\t\t\t\t\t\t   <label class=\"text-center d-block mt-2 mb-0\">\n\t\t\t\t\t\t\t<button class=\"btn btn-sm ".concat(button.button_class, " wysiwyg-choose-file\" type=\"button\">").concat(button.button_text, "</button>\n\t\t\t\t\t\t\t<input type=\"file\" class=\"file-input-invisible\" data-edit=\"").concat(button.name, "\" />\n\t\t\t\t\t\t   </label><hr /> ");
                }

                toolbarHtml += "<div class=\"input-group my-3\">\n\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"".concat(button.placeholder, "\" type=\"text\" data-edit=\"").concat(button.name, "\" />\n\t\t\t\t\t\t\t<div class=\"input-group-append\">\n\t\t\t\t\t\t\t\t<button class=\"btn btn-sm ").concat(button.button_insert_class, "\" type=\"button\">").concat(button.button_insert, "</button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t </div>");
                toolbarHtml += ' </div> </div>';
                break;

              case 'foreColor':
              case 'backColor':
                toolbarHtml += "<div class=\"mr-1px\"><a class=\"btn btn-sm ".concat(className, " dropdown-toggle\" data-toggle=\"dropdown\" title=\"").concat(button.title, "\"><i class=\"").concat(button.icon, "\">").concat(button.iconText || '', "</i></a> ");
                toolbarHtml += ' <div class="dropdown-menu p-1 brc-primary-tp2 border-1" style="min-width:auto; width:128px;">';

                for (var color in button.values) {
                  if (Object.prototype.hasOwnProperty.call(button.values, color)) {
                    toolbarHtml += " <div class=\"dropdown-item p-0 d-inline-block w-auto\"><a class=\"p-0\" data-edit=\"".concat(button.name, " ").concat(button.values[color], "\" style=\"cursor:pointer;width:1.25rem;height:1.25rem;background-color:").concat(button.values[color], ";\"></a></div> ");
                  }
                }

                toolbarHtml += ' </div></div>';
                break;

              case 'viewSource':
                toolbarHtml += " <a class=\"btn btn-sm ".concat(className, "\" data-toggle=\"source\" title=\"").concat(button.title, "\"><i class=\"").concat(button.icon, "\">").concat(button.iconText || '', "</i></a> ");
                break;

              default:
                toolbarHtml += " <a class=\"btn btn-sm ".concat(className, "\" data-edit=\"").concat(button.name, "\" title=\"").concat(button.title, "\"><i class=\"").concat(button.icon, "\">").concat(button.iconText || '', "</i></a> ");
                break;
            }
          }
        }

        toolbarHtml += ' </div> '; // for .btn-group
        // var speech_input;
        // if (this._config.speech && 'onwebkitspeechchange' in (speech_input = document.createElement('input'))) {
        // toolbarHtml += ' <input class="wysiwyg-speech-input" type="text" data-edit="inserttext" x-webkit-speech />';
        // }
        // speech_input = null;
        /// /////////

        toolbarHtml += ' </div> '; // for .btn-toolbar

        return toolbarHtml;
      }
    }, {
      key: "_handleImages",
      value: function _handleImages() {
        // option for resizing an image
        var currentImg = null;
        $(this._element).on('click', 'img', function (ev) {
          if (currentImg) $(currentImg).popover('dispose');
          currentImg = this;
          if (!$(currentImg).data('original-width')) $(currentImg).data('original-width', currentImg.width);
          $(currentImg).popover({
            container: 'body',
            html: true,
            placement: function placement(popover) {
              var offset = currentImg.getBoundingClientRect();
              var scrollTop = document.scrollTop || document.documentElement.scrollTop || document.body.scrollTop;
              $(popover).addClass('popover-wysiwyg-image shadow brc-secondary-m4').css({
                'margin-left': offset.left + 4 + 'px',
                'margin-top': offset.top + scrollTop + 4 + 'px'
              });
              return 'auto';
            },
            title: 'Image Size & Position',
            trigger: 'manual',
            content: function content() {
              return $("<div class='btn-group'>\n\t\t\t\t\t\t\t\t<button type='button' class='btn btn-xs btn-outline-default' data-action='resize' data-value='0.25'>25%</button>\n\t\t\t\t\t\t\t\t<button type='button' class='btn btn-xs btn-outline-default' data-action='resize' data-value='0.50'>50%</button>\n\t\t\t\t\t\t\t\t<button type='button' class='btn btn-xs btn-outline-default' data-action='resize' data-value='1'>100%</button>\n\t\t\t\t\t\t\t  </div>\n\t\t\t\t\t\t\t  <input type='number' class='form-control d-inline-block form-control-sm' data-action='resize' style='max-width: 96px;' placeholder='specify width' value='".concat(currentImg.width, "' />\n\t\t\t\t\t\t\t  <hr class='my-2' />\n\t\t\t\t\t\t\t  <div class='btn-group'>\n\t\t\t\t\t\t\t\t<button type='button' class='btn btn-xs btn-outline-secondary' data-action='align' data-value='left'>left</button>\n\t\t\t\t\t\t\t\t<button type='button' class='btn btn-xs btn-outline-secondary' data-action='align' data-value='right'>right</button>\n\t\t\t\t\t\t\t\t<button type='button' class='btn btn-xs btn-outline-secondary' data-action='align' data-value='none'>none</button>\n\t\t\t\t\t\t\t </div>\n\t\t\t\t\t\t\t <div class='btn-group float-right'>\n\t\t\t\t\t\t\t\t<button type='button' tooltip='Remove image' class='btn btn-sm btn-outline-warning btn-h-outline-danger btn-a-light-danger btn-bold radius-round' data-action='remove'><i class='fa fa-trash text-red'></i></button>\n\t\t\t\t\t\t\t </div>"));
            }
          }).popover('show');
          $(document).on('click.popover-wysiwyg-image', function (ev) {
            if (ev.target === currentImg) return;

            if ($(ev.target).closest('.popover-wysiwyg-image').length > 0) {
              return;
            }

            if (currentImg) $(currentImg).popover('hide');
            currentImg = null;
            $(document).off('click.popover-wysiwyg-image');
          });
        });
        $(document).on('click', '.popover-wysiwyg-image button.btn', function () {
          if (!currentImg) return;
          var action = $(this).data('action');
          var value = $(this).data('value');

          if (action === 'resize') {
            var width = parseInt($(currentImg).data('original-width') * value);
            $(currentImg).css({
              width: width
            });
            $('.popover-wysiwyg-image input[type=number]').val(width);
          }

          if (action === 'align') $(currentImg).attr('class', 'float-' + value);else if (action === 'remove') {
            $(currentImg).popover('dispose').remove(); // fadeOut(200, function() { $(this).remove() });

            currentImg = null;
          }
        });
        $(document).on('change', '.popover-wysiwyg-image input[type=number]', function () {
          if (currentImg) $(currentImg).css({
            width: $(this).val() + 'px'
          });
        }); /// //////////////
      }
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread2({}, Default$5, {}, _typeof(config) === 'object' && config ? config : {});

        if (typeof bootstrap !== 'undefined') {
          bootstrap.Util.typeCheckConfig(NAME$6, config, this.constructor.DefaultType);
        }

        return config;
      } // Static methods

    }], [{
      key: "_jQueryInterface",
      value: function _jQueryInterface(config) {
        return this.each(function () {
          var $this = $(this);
          var data = $this.data(DATA_KEY$6);

          var _config = _objectSpread2({}, Default$5, {}, $this.data(), {}, _typeof(config) === 'object' && config ? config : {});

          if (!data) {
            data = new Wysiwyg(this, _config);
            $this.data(DATA_KEY$6, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"".concat(config, "\""));
            }

            data[config]();
          }
        });
      }
    }, {
      key: "VERSION",
      get: function get() {
        return VERSION$6;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$5;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$5;
      }
    }]);

    return Wysiwyg;
  }();

  if (typeof $ !== 'undefined') {
    var JQUERY_NO_CONFLICT$6 = $.fn[NAME$6];
    $.fn[NAME$6] = Wysiwyg._jQueryInterface;
    $.fn[NAME$6].Constructor = Wysiwyg;

    $.fn[NAME$6].noConflict = function () {
      $.fn[NAME$6] = JQUERY_NO_CONFLICT$6;
      return Wysiwyg._jQueryInterface;
    };
  }

  /**
   * --------------------------------------------------------------------------
   * Ace (v2.1.0): index.umd.js
   * --------------------------------------------------------------------------
   */
  var index_umd = {
    Util: Util,
    Basic: Basic,
    Scrollbar: Scrollbar,
    Sidebar: Sidebar,
    Aside: Aside,
    Toaster: Toaster,
    Widget: Widget,
    FileInput: FileInput,
    Wysiwyg: Wysiwyg
  };

  return index_umd;

})));
//# sourceMappingURL=ace.js.map
