<?php

include 'utilities.php';

$throwid = 10;
$roadmap = array(
    array(
		array('name'=>'CS1-A', 'courseID'=>'556113011'),
		array('name'=>'CS1-B', 'courseID'=>'556113012'),
		array('name'=>'Calc2', 'courseID'=>'3027024012002'),
		array('name'=>'Kent Core', 'courseID'=>$throwid++), 
		array('name'=>'--', 'courseID'=>$throwid++),
		array('name'=>'--', 'courseID'=>$throwid++)
	),
    array(
		array('name'=>'CS2', 'courseID'=>'556123001'), 
		array('name'=>'Calc3', 'courseID'=>'3027024012003'), 
		array('name'=>'Data Structures', 'courseID'=>'556123022'), 
		array('name'=>'Foreign Language', 'courseID'=>$throwid++), 
		array('name'=>'--', 'courseID'=>$throwid++), 
		array('name'=>'--', 'courseID'=>$throwid++)
	),
    array(
		array('name'=>'CS3', 'courseID'=>'556144001'), 
		array('name'=>'Game Design', 'courseID'=>$throwid++), 
		array('name'=>'Yoga', 'courseID'=>$throwid++), 
		array('name'=>'Operating Systems', 'courseID'=>'556135101'), 
		array('name'=>'Database', 'courseID'=>'556133007'), 
		array('name'=>'--', 'courseID'=>$throwid++) 
	),
    array(
		array('name'=>'AI', 'courseID'=>'556133901'), 
		array('name'=>'Web Programming', 'courseID'=>'556135201'), 
		array('name'=>'Algorthims', 'courseID'=>'556146101'), 
		array('name'=>'--', 'courseID'=>$throwid++), 
		array('name'=>'--', 'courseID'=>$throwid++), 
		array('name'=>'--', 'courseID'=>$throwid++)
	),
    array(
		array('name'=>'Systems Programming', 'courseID'=>'556133211'), 
		array('name'=>'Capstone', 'courseID'=>'556149901'), 
		array('name'=>'Robotics', 'courseID'=>'556133101'), 
		array('name'=>'--', 'courseID'=>$throwid++), 
		array('name'=>'--', 'courseID'=>$throwid++), 
		array('name'=>'--', 'courseID'=>$throwid++) 
	)
);

echo '<style> body {background-color: goldenrod;} </style>';
echo '<body>';


$count = 1;
echo '<table border="1">';
echo '<tr><th>Semester</th><th>Course 1</th><th>Course 2</th><th>Course 3</th><th>Course 4</th><th>Course 5</th><th>Course 6</th></tr>';
foreach( $roadmap as $semester )
{
    echo '<tr>';
	echo '<td>'.$count.'</td>';
    foreach( $semester as $courses )
    {
        echo '<td>'.$courses['name'].'</td>';
    }
    echo '</tr>';
	$count++;
}
echo '</table>';



/////////////////////////////Tree Visualization Module///////////////////////////////////////////////////////////////
echo '<script type="text/javascript" src="vis.min.js"></script>';
echo '<link href="vis.min.css" rel="stylesheet" type="text/css" />';
echo '<style type="text/css"> #mynetwork {width: 800px;height: 800px;border: 5px solid lightgray;}</style>';
echo '<div id="mynetwork"></div>';
echo '<script type="text/javascript">';
    // create an array with nodes
	
	
	//need to replace this with a function that will return the correct echo code for this these arrays
	/*
    'var nodes = new vis.DataSet([',
        '{id: 556113011, label: \'CS 13011\', level: 0},',
        '{id: 556113012, label: \'CS 13012\', level: 0},',
        '{id: 556123001, label: \'CS 23001\', level: 1},',
        '{id: 556123022, label: \'CS 23022\', level: 1},',
        '{id: 556133211, label: \'CS 33211\', level: 2},',
		'{id: 556135101, label: \'CS 35101\', level: 2},',
		'{id: 556133007, label: \'CS 33007\', level: 3},',
		'{id: 556135201, label: \'CS 35201\', level: 3},',
		'{id: 556133901, label: \'CS 33901\', level: 4},',
		'{id: 556144001, label: \'CS 44001\', level: 4},',
		'{id: 556146101, label: \'CS 46101\', level: 4},',
		'{id: 556133101, label: \'CS 33101\', level: 5},',
		'{id: 556149901, label: \'CS 49901\', level: 6},',
		
		'{id: 3027024012002, label: \'MATH 12002\', level: 0},',
		'{id: 3027024012003, label: \'MATH 12003\', level: 1}',
    ']);',
	*/
	//test for functions to replace code above
	//visJSNodeArray($roadmap);
	visRoadmapArray($roadmap);
	
	
	
	
    // create an array with edges, should be a separate function that returns code for array
    echo 'var edges = new vis.DataSet([',
        '{from: 556113011, to: 556113012},',
        '{from: 556113012, to: 556123001},',
        '{from: 556123001, to: 556133211},',
        '{from: 556133211, to: 556135101},',
		'{from: 556123001, to: 556133007},',
		'{from: 556123001, to: 556135201},',
		'{from: 556123001, to: 556133901},',
		'{from: 556123001, to: 556144001},',
		'{from: 556123001, to: 556146101},',
		'{from: 3027024012002, to: 3027024012003},',
		'{from: 3027024012003, to: 556146101},',
		'{from: 556123001, to: 556133101},',
		'{from: 556133007, to: 556149901},',
		'{from: 556133901, to: 556149901},',
		'{from: 556135201, to: 556149901}',
    ']);',
            // create a network
            'var container = document.getElementById(\'mynetwork\');',
            'var data = {',
            '    nodes: nodes,',
            '    edges: edges',
            '};',

            'var options = {',
            '    edges: {',
            '        smooth: {',
            '            type: \'cubicBezier\',',
            '            forceDirection: \'vertical\',',
            '            roundness: 0.4',
            '        }',
            '    },',
            '    layout: {',
            '        hierarchical: {',
            '            direction: \'UD\'',
            '        }',
            '    },',
            '    physics:false',
            '};',
            'network = new vis.Network(container, data, options);',
'</script>';
/////////////////////////////////////////////////End of Tree Module///////////////////////////////////////////////////////////////

echo '</body>';

?>