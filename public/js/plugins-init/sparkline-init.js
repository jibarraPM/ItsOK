(function($) {
    "use strict"

    
	function getSparkLineGraphBlockSize(selector)
	{
		var screenWidth = $(window).width();
		var graphBlockSize = '100%';
		
		if(screenWidth <= 768)
			{
				screenWidth = (screenWidth < 300 )?screenWidth:300;
				
				var blockWidth  = jQuery(selector).parent().innerWidth() - jQuery(selector).parent().width();
		
				blockWidth = Math.abs(blockWidth);
				
				var graphBlockSize = screenWidth - blockWidth - 10;	
			}
	
		
		
		return graphBlockSize;
		
	}
	
    // Line Chart
	if(jQuery('#sparklinedash').length > 0 ){	 
		 $("#sparklinedash").sparkline([10, 15, 26, 27, 28, 31, 34, 40, 41, 44, 49, 64, 68, 69, 72], {
			type: "bar",
			height: "50",
			barWidth: "4",
			resize: !0,
			barSpacing: "5",
			barColor: "#F59C20"
		});
	}
	
if(jQuery('#sparkline8').length > 0 ){	
    $("#sparkline8").sparkline([79, 72, 29, 6, 52, 32, 73, 40, 14, 75, 77, 39, 9, 15, 10], {
        type: "line",
        //width: "100%",
        width: getSparkLineGraphBlockSize('#sparkline8'),
        height: "50",
        lineColor: "#F59C20",
        fillColor: "rgba(47, 76, 221, .5)",
        minSpotColor: "#F59C20",
        maxSpotColor: "#F59C20",
        highlightLineColor: "#F59C20",
        highlightSpotColor: "#F59C20",
		
    });
}

if(jQuery('#sparkline9').length > 0 ){	
    $("#sparkline9").sparkline([27, 31, 35, 28, 45, 52, 24, 4, 50, 11, 54, 49, 72, 59, 75], {
        type: "line",
        //width: "100%",
        width: getSparkLineGraphBlockSize('#sparkline9'),
        height: "50",
        lineColor: "#ff6d4c",
        fillColor: "rgba(255, 109, 76, .5)",
        minSpotColor: "#ff6d4c",
        maxSpotColor: "#ff6d4c",
        highlightLineColor: "rgb(255, 159, 0)",
        highlightSpotColor: "#ff6d4c"
    });
}

    // Bar Chart

if(jQuery('#spark-bar').length > 0 ){	
    $("#spark-bar").sparkline([33, 22, 68, 54, 8, 30, 74, 7, 36, 5, 41, 19, 43, 29, 38], {
        type: "bar",
        height: "200",
        barWidth: 6,
        barSpacing: 7,
        barColor: "#2bc155"
    });
}	
if(jQuery('#spark-bar-2').length > 0 ){	
    $("#spark-bar-2").sparkline([33, 22, 68, 54, 8, 30, 74, 7, 36, 5, 41, 19, 43, 29, 38], {
        type: "bar",
        height: "140",
        width: 100,
        barWidth: 10,
        barSpacing: 10,
        barColor: "rgb(255, 206, 120)"
    });
}	
if(jQuery('#StackedBarChart').length > 0 ){	
    $('#StackedBarChart').sparkline([
        [1, 4, 2],
        [2, 3, 2],
        [3, 2, 2],
        [4, 1, 2]
    ], {
            type: "bar",
            height: "200",
            barWidth: 10,
            barSpacing: 7, 
            stackedBarColor: ['#F59C20', '#2bc155', '#ff6d4c']
        });
}
if(jQuery('#tristate').length > 0 ){	

    $("#tristate").sparkline([1, 1, 0, 1, -1, -1, 1, -1, 0, 0, 1, 1], {
        type: 'tristate',
        height: "200",
        barWidth: 10,
        barSpacing: 7, 
        colorMap: ['#F59C20', '#2bc155', '#ff6d4c'], 
        negBarColor: '#ff6d4c'
    });
}
    // Composite
if(jQuery('#composite-bar').length > 0 ){
    $("#composite-bar").sparkline([73, 53, 50, 67, 3, 56, 19, 59, 37, 32, 40, 26, 71, 19, 4, 53, 55, 31, 37], {
        type: "bar",
        height: "200",
        barWidth: "10",
        resize: true,
		// barSpacing: "7",
        barColor: "#F59C20", 
        width: '100%',
		
    });
}	
if(jQuery('#sparkline-composite-chart').length > 0 ){
    $("#sparkline-composite-chart").sparkline([5, 6, 7, 2, 0, 3, 6, 8, 1, 2, 2, 0, 3, 6], {
        type: 'line',
        width: '100%',
        height: '200', 
        barColor: '#2bc155', 
        colorMap: ['#2bc155', '#ff6d4c']
    });
}	
if(jQuery('#sparkline-composite-chart').length > 0 ){
    $("#sparkline-composite-chart").sparkline([5, 6, 7, 2, 0, 3, 6, 8, 1, 2, 2, 0, 3, 6], {
        type: 'bar',
        height: '150px',
        width: '100%',
        barWidth: 10,
        barSpacing: 5,
        barColor: '#34C73B',
        negBarColor: '#34C73B',
        composite: true,
	});
}
if(jQuery('#sparkline11').length > 0 ){
    //Pie
    $("#sparkline11").sparkline([24, 61, 51], {
        type: "pie",
        height: "100px",
        resize: !0,
        sliceColors: ["rgba(192, 10, 39, .5)", "rgba(0, 0, 128, .5)", "rgba(47, 76, 221, .5)"]
    });
}	
if(jQuery('#sparkline12').length > 0 ){
    //Pie
    $("#sparkline12").sparkline([24, 61, 51], {
        type: "pie",
        height: "100",
        resize: !0,
        sliceColors: ["rgba(179, 204, 255, 1)", "rgba(157, 189, 255, 1)", "rgba(112, 153, 237, 1)"]
    });
}	
if(jQuery('#bullet-chart').length > 0 ){
    // Bullet
    $("#bullet-chart").sparkline([10, 12, 12, 9, 7], {
        type: 'bullet',
        height: '100',
        width: '100%',
		targetOptions: { // Options related with look and position of targets 
			width: '100%',        // The width of the target 
			height: 3,            // The height of the target 
			borderWidth: 0,       // The border width of the target 
			borderColor: 'black', // The border color of the target 
			color: 'black'        // The color of the target 
		}
	});
}
if(jQuery('#boxplot').length > 0 ){
    //Boxplot
    $("#boxplot").sparkline([4,27,34,52,54,59,61,68,78,82,85,87,91,93,100], {
        type: 'box'
    });
}

    


})(jQuery);