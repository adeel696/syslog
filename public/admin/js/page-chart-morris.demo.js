/*   
Template Name: Source Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7 & Bootstrap 4
Version: 1.5.0
Author: Sean Ngu
Website: http://www.seantheme.com/source-admin-v1.5/admin/
*/

var primary		= '#2184DA',
    primaryLight= '#60A1DA',
    primaryDark	= '#1e77c5',
    info		= '#38AFD3',
    infoLight	= '#6FBDD5',
    infoDark	= '#2d8ca9',
    success		= '#17B6A4',
    successLight= '#59C2B7',
    successDark	= '#129283',
    warning		= '#fcaf41',
    warningLight= '#EEBD77',
    warningDark	= '#ca8c34',
    inverse		= '#3C454D',
    grey		= '#aab3ba',
    purple		= '#5f50c5',
    purpleLight	= '#7f73d1',
    purpleDark	= '#4c409e',
    danger      = '#F04B46';
    

var handleMorrisLineChart = function () {
    "use strict";
    
    var tax_data = [
        {"period": "2011 Q3", "licensed": 3407, "sorned": 660},
        {"period": "2011 Q2", "licensed": 3351, "sorned": 629},
        {"period": "2011 Q1", "licensed": 3269, "sorned": 618},
        {"period": "2010 Q4", "licensed": 3246, "sorned": 661},
        {"period": "2009 Q4", "licensed": 3171, "sorned": 676},
        {"period": "2008 Q4", "licensed": 3155, "sorned": 681},
        {"period": "2007 Q4", "licensed": 3226, "sorned": 620},
        {"period": "2006 Q4", "licensed": 3200, "sorned": 650},
        {"period": "2005 Q4", "licensed": 3300, "sorned": 660}
    ];
    Morris.Line({
        element: 'line-chart',
        data: tax_data,
        xkey: 'period',
        ykeys: ['licensed', 'sorned'],
        labels: ['Licensed', 'Off the road'],
        resize: true,
        lineColors: [inverse, success],
        gridTextFamily: "'Nunito', sans-serif",
        gridTextWeight: '300',
        gridTextSize: 11,
        gridTextColor: '#30373e',
        pointSize: 5,
        lineWidth: 3,
        pointStrokeColors: ['#ffffff', '#ffffff']
    });
};

var handleMorrisBarChart = function () {
    "use strict";
    
    Morris.Bar({
        element: 'bar-chart',
        data: [
            {device: 'iPhone', geekbench: 136},
            {device: 'iPhone 3G', geekbench: 137},
            {device: 'iPhone 3GS', geekbench: 275},
            {device: 'iPhone 4', geekbench: 380},
            {device: 'iPhone 4S', geekbench: 655},
            {device: 'iPhone 5', geekbench: 1571}
        ],
        xkey: 'device',
        ykeys: ['geekbench'],
        labels: ['Geekbench'],
        barRatio: 0.4,
        xLabelAngle: 35,
        resize: true,
        gridTextFamily: "'Nunito', sans-serif",
        gridTextWeight: '300',
        gridTextSize: 11,
        gridTextColor: '#30373e',
        barColors: [inverse]
    });
};

var handleMorrisAreaChart = function() {
    "use strict";
    
    Morris.Area({
        element: 'area-chart',
        data: [
            {period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647},
            {period: '2010 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
            {period: '2010 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
            {period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
            {period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
            {period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
            {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
            {period: '2011 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
            {period: '2012 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
            {period: '2012 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
        ],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 2,
        gridTextFamily: "'Nunito', sans-serif",
        gridTextWeight: '300',
        gridTextSize: 11,
        gridTextColor: '#30373e',
        resize: true,
        lineColors: [primary, info, inverse]
    });
};

var handleMorrisDonusChart = function() {
    "use strict";
    
    Morris.Donut({
        element: 'donut-chart',
        data: [
            {label: 'Jam', value: 25 },
            {label: 'Frosted', value: 40 },
            {label: 'Custard', value: 25 },
            {label: 'Sugar', value: 10 }
        ],
        formatter: function (y) { return y + "%" },
        resize: true,
        colors: [inverse, warning, danger, grey]
    });
};


/* Application Controller
------------------------------------------------ */
var PageDemo = function () {
	"use strict";
	
	return {
		//main function
		init: function () {
            handleMorrisLineChart();
            handleMorrisBarChart();
            handleMorrisAreaChart();
            handleMorrisDonusChart();
		}
    };
}();