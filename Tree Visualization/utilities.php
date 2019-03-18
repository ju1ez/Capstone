<?php 
/*

	Example of what the function should return

    echo 
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
		
    ']);';
	
*/

//testing simple echo of hard code
function visJSNodeArray($roadmap){

    echo 
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
		
    ']);';
}
//successful


//now create code custom to the roadmap
function visRoadmapArray($roadmap){
	$count=0;
	echo 'var nodes = new vis.DataSet([';
	foreach( $roadmap as $semester ){
		foreach( $semester as $course ){
			if($course['name']!='--'){
				echo '{id: '.$course['courseID'].', label: \''.$course['name'].'\', level: '.$count.'},';	
			}
		}
		$count++;
	}
	echo ']);';
}

?>
	

	



