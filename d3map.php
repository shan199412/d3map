<?php
if (!defined('ABSPATH')) {
	exit;
}

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset = "utf-8">
    <style>
        * {
            font-family: "Helvetica Neue";
        }
        p {
            font-size: 0.85em;
        }
        svg {
            background: transparent;
        }
        .lga {
            /* fill: #cccccc; */
            stroke: #333333;
            stroke-width: 0.8;
        }
        .selected {
            fill: yellow;
        }
        .regional {
            fill: blue;
        }
        div.tooltip {
            position: absolute;
            text-align: center;
            width: 80px;
            height: 14px;
            padding: 2px;
            font: 8px sans-serif;
            background: #fff;
            border: 0px;
            pointer-events: none;
        }
    </style>
</head>
<link rel="shortcut icon" href="#" />
<body>
<div id="map"></div>

<script src="https://d3js.org/d3.v3.min.js"></script>

<script src="http://d3js.org/topojson.v1.min.js"></script>

<script src="https://d3js.org/d3-queue.v3.min.js"></script>

<script src="https://d3js.org/d3-array.v1.min.js"></script>
<script src="https://d3js.org/d3-geo.v1.min.js"></script>

<script src="visual.js"></script>

<script src="http://d3js.org/d3-scale-chromatic.v1.min.js"></script>
</body>



</html>
