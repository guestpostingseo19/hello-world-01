/**
 * PawlogicTech theme scripts.
 * Vanilla JavaScript only, mirroring the interactive behaviour of the original site:
 * the mobile menu toggle and the services hover/focus dropdown.
 */
(function () {
	'use strict';

	function initMobileMenu() {
		var toggle = document.querySelector('[data-pwt-menu-toggle]');
		var nav = document.getElementById('mobile-nav');
		if (!toggle || !nav) {
			return;
		}

		var label = toggle.querySelector('[data-pwt-menu-label]');
		var iconClosed = toggle.querySelector('[data-pwt-menu-icon-closed]');
		var iconOpen = toggle.querySelector('[data-pwt-menu-icon-open]');

		function setOpen(open) {
			toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
			nav.hidden = !open;
			if (iconClosed) {
				iconClosed.hidden = open;
			}
			if (iconOpen) {
				iconOpen.hidden = !open;
			}
			if (label) {
				label.textContent = open ? 'Close menu' : 'Open menu';
			}
		}

		toggle.addEventListener('click', function () {
			setOpen(toggle.getAttribute('aria-expanded') !== 'true');
		});

		nav.addEventListener('click', function (event) {
			if (event.target.closest('a')) {
				setOpen(false);
			}
		});

		document.addEventListener('keydown', function (event) {
			if (event.key === 'Escape') {
				setOpen(false);
			}
		});

		window.addEventListener('resize', function () {
			if (window.innerWidth >= 1024) {
				setOpen(false);
			}
		});
	}

	function initServicesDropdown() {
		var wrappers = document.querySelectorAll('[data-pwt-services]');

		Array.prototype.forEach.call(wrappers, function (wrapper) {
			var panel = wrapper.querySelector('[data-pwt-services-panel]');
			if (!panel) {
				return;
			}

			var show = function () {
				panel.hidden = false;
			};
			var hide = function () {
				panel.hidden = true;
			};

			wrapper.addEventListener('mouseenter', show);
			wrapper.addEventListener('mouseleave', hide);
			wrapper.addEventListener('focusin', show);
			wrapper.addEventListener('focusout', function (event) {
				if (!wrapper.contains(event.relatedTarget)) {
					hide();
				}
			});
			document.addEventListener('keydown', function (event) {
				if (event.key === 'Escape') {
					hide();
				}
			});
		});
	}

	function initContactForm() {
		var form = document.querySelector('[data-pwt-contact-form]');
		if (!form) {
			return;
		}
		form.addEventListener('submit', function () {
			var button = form.querySelector('button[type="submit"]');
			if (button) {
				button.setAttribute('aria-busy', 'true');
			}
		});
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', function () {
			initMobileMenu();
			initServicesDropdown();
			initContactForm();
		});
	} else {
		initMobileMenu();
		initServicesDropdown();
		initContactForm();
	}
})();
