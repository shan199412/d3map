(function() {
      var margin = { top: 50 , left: 50, right: 50, bottom: 50},
          height = 400 - margin.top - margin.bottom,
          width = 800 - margin.left - margin.right;


      var tooltip = d3.select("body").append("div")
        .attr("class", "tooltip")
        .style("opacity", 0);

      var svg = d3.select("#map")
                  .append("svg")
                  .attr("height", height + margin.top + margin.bottom)
                  .attr("width", width + margin.left + margin.right)
                  .append("g")
                  .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

      var projection = d3.geoMercator()
        .translate([-7700 , -2050])
        .scale(3200)

      var cities = ["GREATER BENDIGO", "GREATER GEELONG", "GREATER SHEPPARTON", "LATROBE", "WANGARATTA", "WODONGA", "BALLARAT", "HORSHAM", "MILDURA", "WARRNAMBOOL"]


      var path = d3.geoPath()
        .projection(projection)

      var url = "https://data.gov.au/geoserver/vic-local-government-areas-psma-administrative-boundaries/wfs?request=GetFeature&typeName=ckan_bdf92691_c6fe_42b9_a0e2_a4cd716fa811&outputFormat=json"
      d3.json(url, function(error, data) {
        if (error) throw error;

         svg.selectAll(".lga")
            .data(data.features)
            .enter().append("path")
            .attr("class","lga")
            .attr("d", path)
            .style("fill", function(d){
              if ( cities.includes(d.properties.vic_lga__3)){
                console.log(d.properties.vic_lga__3);
                return "#7AD0FF"
              } else {
                return "white"
              };
            })
            .on('mouseover', function(d){
              d3.select(this).classed("selected",true);
              tooltip.transition()
                .duration(200)
                .style("opacity", .9);
                tooltip.html(d.properties.vic_lga__3)
                .style("left", (d3.event.pageX) + "px")
                .style("top", (d3.event.pageY - 28) + "px");
            })
            .on('mouseout', function(d){
              d3.select(this).classed("selected",false);
              tooltip.transition()
                .duration(500)
                .style("opacity", 0);
            })
      });

})();
