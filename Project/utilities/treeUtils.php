<?php 

function visRoadmapNodes($roadmap){
	$count=0;
	foreach( $roadmap as $semester ){
		foreach( $semester as $course ){
			if($course['courseID'] > '1000' && $course['courseID'] !== '4230000' ){
				echo '{id: ' . $course['courseID'] . ', label: \'' . $course['name'] . '\', level: ' . $count . ', group: ' . $count . ',  title: \' ' . $course['name'] . '\', },';	
			}
		}
		$count++;
	}
}

function visRoadmapEdges($roadmap){
	foreach( $roadmap as $semester ){
		foreach( $semester as $course ){
			if($course['courseID'] > '1000' && $course['courseID'] !== '4230000' ){
				if(isset($course['prereqs'])){
					foreach($course['prereqs'] as $prereq){
						echo '{from: '.$prereq.', to: \''.$course['courseID'].'\', dashes: false,},';
					}
				}
				if(isset($course['coreqs'])){
					foreach($course['coreqs'] as $coreq){
						echo '{from: '.$coreq.', to: \''.$course['courseID'].'\', dashes: true, },';
					}
				}	
			}
		}
	}
}


?>