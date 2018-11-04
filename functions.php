<?

$a=2; $b=3;

function numbers($one,$two){
   
   if ($one>=0 and $two>=0){
   	return $one+$two;
   }
   elseif ($one<0 and $two<0) {
   	 return $one-$two;
   }
   elseif ($one*$two<0) {
   	  return $one*$two;
   }
}

echo "1:\n";
echo numbers($a,$b);

echo "\n2:\n";
echo max($a,$b);

echo "\n3:\n";

$a=4;
echo "Swith \n";
switch ($a) {
	case 0:
	   echo "0, 1,2,3,4,5,6,7,8,9";
		# code...
		break;
	case 1:
		   echo "1,2,3,4,5,6,7,8,9";
			# code...
			break;	
	case 2:
		   echo "2,3,4,5,6,7,8,9";
		# code...
		break;
	case 3:
	   echo "3,4,5,6,7,8,9";break;
	  case 4:
	     echo "4,5,6,7,8,9";break;
	  case 5:
	     echo "5,6,7,8,9";  break;
	  case 6:
	     echo "6,7,8,9";
	     	# code...
	     	break;
	  case 7:
	     	echo " \n 7,8,9"; 	# code...
	     	   	break;
	 case 8:
	     	   echo "8,9";   	   	   	# code...
	     	   	   	   	break;    	   	   	   
	  	# code...
	case 9:
	     	   echo "9";
	     	   	   	   		# code...
	     	   	   	   		break;     	   	   	   	
	  	
	default:
		# code...
		break;
}

#functions for task 4
echo "/n";
function add($a,$b){ return $a+$b;}
function minus($a,$b){return $a-$b;}
function multi($a,$b){return $a*$b;}
function devide($a,$b){
if ($b!=0){
	return $a/$b;
}
else{
	return null;
}
}

$a=6; $b=2;
echo "\n";
echo "functions math";echo "\n";
echo add($a,$b); echo "\n";
echo minus($a,$b); echo "\n";
echo multi($a,$b); echo "\n";
echo devide($a,$b); echo "\n";

 function mathOperation($arg1, $arg2,$operation){
 	switch ($operation) {
 		case 'plus':
 			return add($arg1,$arg2);
 			break;
 		case 'minus':
 			return minus($arg1,$arg2);
 			break;
 	    case 'multi':
 	    	return multi($arg1,$arg2);
 	    	break;
 	    case 'devide':
 	    	return devide($arg1,$arg2);
 	    	# code...
 	    	break;
 		default:
 			# code...
 			break;
 	}
 }

echo mathOperation(1,2,"devide");

function max1($arg1,$arg2){
	if ($arg1>$arg2){
		return $arg1;
	}
	elseif ($arg1<$arg2){
		return $arg2;
	}

}

function min1($arg1,$arg2){
	if ($arg1<$arg2){
		return $arg1;
	}
	elseif ($arg1>$arg2){
		return $arg2;
	}
}



echo "task 7 \n";

$a=20; $b=30;

if(max1($a*$b,100)>100 and min1($a*$b,1000)<1000){
	echo max1($a,$b)-min1($a,$b);
}
else{
	echo $a*$b/max1($a,$b);
}