<script type="text/javascript">
var nodes = null;
var edges = null;
var network = null;

function destroy() {
    if (network !== null) {
        network.destroy();
        network = null;
    }
}

// draw is called in html **onload="draw();"**
function draw() {
    destroy();
    nodes = [];
    edges = [];
    var nodes = new vis.DataSet([
        // this will create code for the nodes
        <?php visRoadmapNodes($roadmap); ?>
    ]);

    var edges = new vis.DataSet([
        // this will create code for the edges
        <?php visRoadmapEdges($roadmap); ?>
    ]);

    var container = document.getElementById('mynetwork');
    var data = {
        nodes: nodes,
        edges: edges
    };
    var options = {
        edges: {
            smooth: {
                type: 'cubicBezier',
                roundness: 0.4
            }
        },
        groups: {
        // leave this here or else colors won't work
        },
        nodes: {
            shape: 'box',
            widthConstraint: 250,
            margin: 26,
            font: {
                size: 20
            }
        },
        layout: {
            hierarchical: {
                direction: "UD",
                sortMethod: "directed",
                levelSeparation: 300,
                nodeSpacing: 450,
                treeSpacing: 100,
                blockShifting: true,
                edgeMinimization: false,
                parentCentralization: true,
            }
        },
        physics:false,
        interaction: {
            hover: true,
        },

  };
network = new vis.Network(container, data, options);
}
</script>