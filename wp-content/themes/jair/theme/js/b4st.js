/*
 * b4st JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card mb-3');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here

	});

	$(".navbar-toggler").click(function () {
				$(".navbar").toggleClass("bg-header-mobile");
			  });

}(jQuery));


// document.addEventListener("DOMContentLoaded", function() {
//     const banner = document.querySelector(".banner-content");

//     // exibe logo ao carregar no topo
//     if (window.scrollY === 0) {
//         banner.style.display = "block";
//         banner.classList.add("animate__fadeInDown");
//     }

//     window.addEventListener("scroll", function() {
//         if (window.scrollY === 0) {
//             if (!banner.classList.contains("animate__fadeInDown")) {
//                 banner.style.display = "block";
//                 banner.classList.remove("animate__fadeOutUp");
//                 banner.classList.add("animate__fadeInDown");
//             }
//         } else {
//             if (banner.classList.contains("animate__fadeInDown")) {
//                 banner.classList.remove("animate__fadeInDown");
//                 banner.classList.add("animate__fadeOutUp");

//                 banner.addEventListener("animationend", function handler() {
//                     if (banner.classList.contains("animate__fadeOutUp")) {
//                         banner.style.display = "none";
//                     }
//                     banner.removeEventListener("animationend", handler);
//                 });
//             }
//         }
//     });
// });