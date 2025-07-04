!(function (i) {
	"use strict";
	var t = function () {
		(this.$body = i("body")), (this.$realData = []);
	};
	(t.prototype.createPlotGraph = function (t, o, e, a, r, n, s, l) {
		i.plot(
			i(t),
			[
				{ data: o, label: r[0], color: n[0] },
				{ data: e, label: r[1], color: n[1] },
				{ data: a, label: r[2], color: n[2] },
			],
			{
				series: {
					lines: {
						show: !0,
						fill: !0,
						lineWidth: 2,
						fillColor: {
							colors: [{ opacity: 0 }, { opacity: 0.5 }, { opacity: 0.6 }],
						},
					},
					points: { show: !1 },
					shadowSize: 0,
				},
				grid: {
					hoverable: !0,
					clickable: !0,
					borderColor: s,
					tickColor: "#f9f9f9",
					borderWidth: 1,
					labelMargin: 10,
					backgroundColor: l,
				},
				legend: {
					position: "ne",
					margin: [0, -24],
					noColumns: 0,
					backgroundColor: "transparent",
					labelBoxBorderColor: null,
					labelFormatter: function (t, o) {
						return t + "&nbsp;&nbsp;";
					},
					width: 30,
					height: 2,
				},
				yaxis: {
					axisLabel: "Daily Visits",
					tickColor: "rgba(108, 120, 151, 0.1)",
					font: { color: "#6c7897" },
				},
				xaxis: {
					axisLabel: "Last Days",
					tickColor: "rgba(108, 120, 151, 0.1)",
					font: { color: "#6c7897" },
				},
				tooltip: !0,
				tooltipOpts: {
					content: "%s: Value of %x is %y",
					shifts: { x: -60, y: 25 },
					defaultTheme: !1,
				},
			}
		);
	}),
		(t.prototype.createDonutGraph = function (t, o, e, a) {
			var r = [
					{ label: o[0], data: e[0] },
					{ label: o[1], data: e[1] },
					{ label: o[2], data: e[2] },
					{ label: o[3], data: e[3] },
				],
				n = {
					series: { pie: { show: !0, innerRadius: 0.7 } },
					legend: {
						show: !0,
						labelFormatter: function (t, o) {
							return '<div style="font-size:14px;">&nbsp;' + t + "</div>";
						},
						labelBoxBorderColor: null,
						margin: 50,
						width: 20,
						padding: 1,
						backgroundColor: "transparent",
					},
					grid: { hoverable: !0, clickable: !0 },
					colors: a,
					tooltip: !0,
					tooltipOpts: { content: "%s, %p.0%" },
				};
			i.plot(i(t), r, n);
		}),
		(t.prototype.init = function () {
			this.createPlotGraph(
				"#website-stats",
				[
					[0, 5],
					[1, 8],
					[2, 10],
					[3, 12],
					[4, 9],
					[5, 5],
					[6, 7],
					[7, 9],
					[8, 8],
					[9, 16],
					[10, 14],
					[11, 12],
					[12, 10],
				],
				[
					[0, 2],
					[1, 4],
					[2, 7],
					[3, 9],
					[4, 6],
					[5, 3],
					[6, 10],
					[7, 8],
					[8, 5],
					[9, 14],
					[10, 10],
					[11, 10],
					[12, 8],
				],
				[
					[0, 1],
					[1, 3],
					[2, 6],
					[3, 7],
					[4, 4],
					[5, 2],
					[6, 8],
					[7, 6],
					[8, 4],
					[9, 10],
					[10, 8],
					[11, 14],
					[12, 5],
				],
				["Google", "Yahoo", "Facebbok"],
				["#4bd396", "#f5707a", "#188ae2"],
				"rgba(108, 120, 151, 0.1)",
				"transparent"
			);
			this.createDonutGraph(
				"#donut-chart #donut-chart-container",
				["Series 1", "Series 2", "Series 3", "Series 4"],
				[35, 20, 10, 20],
				["#ff9800", "#8d6e63", "#26a69a", "#7fc1fc"]
			);
		}),
		(i.dashboard_2 = new t()),
		(i.dashboard_2.Constructor = t);
})(window.jQuery),
	(function (t) {
		"use strict";
		window.jQuery.dashboard_2.init();
	})(),
	$("#reportrange span").html(
		moment().subtract(29, "days").format("MMMM D, YYYY") +
			" - " +
			moment().format("MMMM D, YYYY")
	),
	$("#reportrange").daterangepicker(
		{
			format: "MM/DD/YYYY",
			startDate: moment().subtract(29, "days"),
			endDate: moment(),
			minDate: "01/01/2012",
			maxDate: "12/31/2025",
			dateLimit: { days: 60 },
			showDropdowns: !0,
			showWeekNumbers: !0,
			timePicker: !1,
			timePickerIncrement: 1,
			timePicker12Hour: !0,
			ranges: {
				Today: [moment(), moment()],
				Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
				"Last 7 Days": [moment().subtract(6, "days"), moment()],
				"Last 30 Days": [moment().subtract(29, "days"), moment()],
				"This Month": [moment().startOf("month"), moment().endOf("month")],
				"Last Month": [
					moment().subtract(1, "month").startOf("month"),
					moment().subtract(1, "month").endOf("month"),
				],
			},
			opens: "left",
			drops: "down",
			buttonClasses: ["btn", "btn-sm"],
			applyClass: "btn-success",
			cancelClass: "btn-default",
			separator: " to ",
			locale: {
				applyLabel: "Submit",
				cancelLabel: "Cancel",
				fromLabel: "From",
				toLabel: "To",
				customRangeLabel: "Custom",
				daysOfWeek: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
				monthNames: [
					"January",
					"February",
					"March",
					"April",
					"May",
					"June",
					"July",
					"August",
					"September",
					"October",
					"November",
					"December",
				],
				firstDay: 1,
			},
		},
		function (t, o, e) {
			console.log(t.toISOString(), o.toISOString(), e),
				$("#reportrange span").html(
					t.format("MMMM D, YYYY") + " - " + o.format("MMMM D, YYYY")
				);
		}
	);
