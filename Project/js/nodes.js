var nodes = null;
        var edges = null;
        var network = null;
        var directionInput = document.getElementById("direction");

        function destroy() {
            if (network !== null) {
                network.destroy();
                network = null;
            }
        }

        function draw() {
            destroy();
            nodes = [];
            edges = [];
            var connectionCount = [];

 // create an array with nodes
    var nodes = new vis.DataSet([
        {id: 556113011, label: 'CS 13011', level: 0},
        {id: 556113012, label: 'CS 13012', level: 0},
        {id: 556123001, label: 'CS 23001', level: 1},
        {id: 556123022, label: 'CS 23022', level: 1},
        {id: 556133211, label: 'CS 33211', level: 2},
		{id: 556135101, label: 'CS 35101', level: 2},
		{id: 556133007, label: 'CS 33007', level: 3},
		{id: 556135201, label: 'CS 35201', level: 3},
		{id: 556133901, label: 'CS 33901', level: 4},
		{id: 556144001, label: 'CS 44001', level: 4},
		{id: 556146101, label: 'CS 46101', level: 4},
		{id: 556133101, label: 'CS 33101', level: 5},
		{id: 556149901, label: 'CS 49901', level: 6},
		
		{id: 3027024012002, label: 'MATH 12002', level: 0},
		{id: 3027024012003, label: 'MATH 12003', level: 1}
		
    ]);

    // create an array with edges
    var edges = new vis.DataSet([
        {from: 556113011, to: 556113012},
        {from: 556113012, to: 556123001},
        {from: 556123001, to: 556133211},
        {from: 556133211, to: 556135101},
		{from: 556123001, to: 556133007},
		{from: 556123001, to: 556135201},
		{from: 556123001, to: 556133901},
		{from: 556123001, to: 556144001},
		{from: 556123001, to: 556146101},
		{from: 3027024012002, to: 3027024012003},
		{from: 3027024012003, to: 556146101},
		{from: 556123001, to: 556133101},
		{from: 556133007, to: 556149901},
		{from: 556133901, to: 556149901},
		{from: 556135201, to: 556149901}
    ]);


            // create a network
            var container = document.getElementById('mynetwork');
            var data = {
                nodes: nodes,
                edges: edges
            };

            var options = {
                edges: {
                    smooth: {
                        type: 'cubicBezier',
                        forceDirection: (directionInput.value == "UD" || directionInput.value == "DU") ? 'vertical' : 'horizontal',
                        roundness: 0.4
                    }
                },
                layout: {
                    hierarchical: {
                        direction: directionInput.value
                    }
                },
                physics:false
            };
            network = new vis.Network(container, data, options);

            // add event listeners
            network.on('select', function (params) {
                document.getElementById('selection').innerHTML = 'Selection: ' + params.nodes;
            });
        }