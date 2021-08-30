$(document).ready(function () {
	$(".top-header-info").on("click", ".button-tombol-menu", function () {
		console.log("tester");
		if ($(this).hasClass("hide-sidebar")) {
			$("div.content-wrapper").css("margin-left", "0");
			$("aside.main-sidebar").css("left", "-231px");
			$("a.logo").css("margin-left", "-231px");
			$("nav.top-header-info").css("margin-left", "0");
			$(this).removeClass("hide-sidebar");
			$(this).addClass("show-sidebar");
			console.log("show sidebar");
		} else {
			$("div.content-wrapper").css("margin-left", "230px");
			$("aside.main-sidebar").css("left", "0");
			$("a.logo").css("margin-left", "");
			$("nav.top-header-info").css("margin-left", "230px");
			$(this).removeClass("show-sidebar");
			$(this).addClass("hide-sidebar");
			console.log("hide sidebar");
		}
	});

	$("div.content-wrapper").css("margin-left", "0");
	$("aside.main-sidebar").css("left", "-231px");

	$("a.logo").css("margin-left", "-231px");
	$("nav.top-header-info").css("margin-left", "0");

	$("#toggle-menu").css("display", "block");

	$("#example1").dataTable();
	$("#example2").dataTable({
		bPaginate: true,
		bLengthChange: false,
		bFilter: false,
		bSort: true,
		bInfo: true,
		bAutoWidth: false,
	});
});
