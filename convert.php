<?php
function convertLength($v,$from,$to){
		switch($from)
{
			case "Meter" :
				switch($to){
					case "Meter":
						$result=$v;
					break;	
					case "Kilometer":
						$result=$v/1000;
					break;		
					case "Centimeter":
						$result=$v*100;
					break;	
					case "Millimeter":
						$result=$v*1000;
					break;	
					case "Micrometer":
						$result=$v*pow(10, 6);
					break;
					case "Nanometer":
						$result=$v*pow(10, 9);
					break;	
					case "Mile":
						$result=$v/1609;
					break;
					case "Yard":
						$result=$v*1.094;
					break;
					case "Foot":
						$result=$v*3.281;

					break;	
					case "Inch":
						$result=$v*39.37;
					break;	
						
				}
				break;
				///////////////////////////////////////////////////////////////////
			case "Kilometer":
					switch($to){
					case "Meter":
						$result=$v*1000;
					break;	
					case "Kilometer":
						$result=$v;
					break;		
					case "Centimeter":
						$result=$v*100000;
					break;	
					case "Millimeter":
						$result=$v*1000000;
					break;	
					case "Micrometer":
						$result=$v*pow(10, 9);
					break;
					case "Nanometer":
						$result=$v*pow(10, 12);
					break;	
					case "Mile":
						$result=$v/1.609;
					break;
					case "Yard":
						$result=$v*1094;
					break;
					case "Foot":
						$result=$v*3281;

					break;	
					case "Inch":
						$result=$v*39370;
					break;	
						
				}
				break;
				///////////////////////////centimeter////////////////////////////////////////
						case "Centimeter":
					switch($to){
					case "Meter":
						$result=$v/100;
					break;	
					case "Kilometer":
						$result=$v/100000;
					break;		
					case "Centimeter":
						$result=$v;
					break;	
					case "Millimeter":
						$result=$v*1000000;
					break;	
					case "Micrometer":
						$result=$v*10000;
					break;
					case "Nanometer":
						$result=$v*pow(10, 7);
					break;	
					case "Mile":
						$result=$v/160934;
					break;
					case "Yard":
						$result=$v/91.44;
					break;
					case "Foot":
						$result=$v/30.48;

					break;	
					case "Inch":
						$result=$v/2.54;
					break;	
						
				}
				break;	
				//////////////////////////////////Millimeter//////////////////////////////////
		case "Millimeter":
					switch($to){
					case "Meter":
						$result=$v/1000;
					break;	
					case "Kilometer":
						$result=$v/pow(10, 6);
					break;		
					case "Centimeter":
						$result=$v/10;
					break;	
					case "Millimeter":
						$result=$v;
					break;	
					case "Micrometer":
						$result=$v*1000;
					break;
					case "Nanometer":
						$result=$v*pow(10, 6);
					break;	
					case "Mile":
						$result=$v/(1.609 *pow(10, 6));

					break;
					case "Yard":
						$result=$v/914;
					break;
					case "Foot":
						$result=$v/305;

					break;	
					case "Inch":
						$result=$v/25.4;
					break;	
						
				}
				break;
	///////////////////////////////////Micrometer////////////////////////////////
				case "Micrometer":
					switch($to){
					case "Meter":
						$result=$v/pow(10, 6);
					break;	
					case "Kilometer":
						$result=$v/pow(10, 9);
					break;		
					case "Centimeter":
						$result=$v/10000;
					break;	
					case "Millimeter":
						$result=$v/1000;
					break;	
					case "Micrometer":
						$result=$v;
					break;
					case "Nanometer":
						$result=$v*1000;
					break;	
					case "Mile":
						$result=$v/(1.609*pow(10, 9));
					break;
					case "Yard":
						$result=$v/914400;
					break;
					case "Foot":
						$result=$v/304800;

					break;	
					case "Inch":
						$result=$v/25400;
					break;	
						
				}
				break;
	/////////////////////////////////Nano///////////////////////////
				
				case "Nanometer":
					switch($to){
					case "Meter":
						$result=$v/pow(10, 9);
					break;	
					case "Kilometer":
						$result=$v/pow(10, 12);
					break;		
					case "Centimeter":
						$result=$v/pow(10, 7);
					break;	
					case "Millimeter":
						$result=$v/pow(10, 6);
					break;	
					case "Micrometer":
						$result=$v/1000;
					break;
					case "Nanometer":
						$result=$v;
					break;	
					case "Mile":
						$result=$v/(1.609*pow(10, 12));
					break;
					case "Yard":
						$result=$v/(1.144*pow(10, 8));
					break;
					case "Foot":
						$result=$v/(3.048*pow(10, 8));

					break;	
					case "Inch":
						$result=$v/(2.54*pow(10, 7));
					break;	
						
				}
				break;
				/////////////////////////////////Mile///////////////////////////
				
								case "Mile":
					switch($to){
					case "Meter":
						$result=$v*1609;
					break;	
					case "Kilometer":
						$result=$v*1.609;
					break;		
					case "Centimeter":
						$result=$v*160934;
					break;	
					case "Millimeter":
						$result=$v*1.609*pow(10, 6);
					break;	
					case "Micrometer":
						$result=$v*1.609*pow(10, 9);
					break;
					case "Nanometer":
						$result=$v*1.609*pow(10, 12);
					break;	
					case "Mile":
						$result=$v;
					break;
					case "Yard":
						$result=$v*1760;
					break;
					case "Foot":
						$result=$v*5280;

					break;	
					case "Inch":
						$result=$v*63360;
					break;	
						
				}
				break;
				
			////////////////////////////////////Yard//////////////////////////
											case "Yard":
					switch($to){
					case "Meter":
						$result=$v/1.094;
					break;	
					case "Kilometer":
						$result=$v/1094;
					break;		
					case "Centimeter":
						$result=$v*91.44;
					break;	
					case "Millimeter":
						$result=$v*914;
					break;	
					case "Micrometer":
						$result=$v*914400;
					break;
					case "Nanometer":
						$result=$v*9.144*pow(10, 8);

					break;	
					case "Mile":
						$result=$v*1760;
					break;
					case "Yard":
						$result=$v;
					break;
					case "Foot":
						$result=$v*3;

					break;	
					case "Inch":
						$result=$v*36;
					break;	
						
				}
				break;	
				/////////////////////////////Foot/////////////////////////////////////////////////
															case "Foot":
					switch($to){
					case "Meter":
						$result=$v/3.281;
					break;	
					case "Kilometer":
						$result=$v/3281;
					break;		
					case "Centimeter":
						$result=$v*30.48;
					break;	
					case "Millimeter":
						$result=$v*305;
					break;	
					case "Micrometer":
						$result=$v*304800;
					break;
					case "Nanometer":
						$result=$v*3.048*pow(10, 8); 
					break;	
					case "Mile":
						$result=$v/5280;
					break;
					case "Yard":
						$result=$v/3;
					break;
					case "Foot":
						$result=$v;

					break;	
					case "Inch":
						$result=$v*12;
					break;	
						
				}
				break;	
				
/////////////////////////////INch/////////////////////////////////////////////////
																case "Inch":
					switch($to){
					case "Meter":
						$result=$v/39.37;
					break;	
					case "Kilometer":
						$result=$v/39370;
					break;		
					case "Centimeter":
						$result=$v*2.54;
					break;	
					case "Millimeter":
						$result=$v*25.4;
					break;	
					case "Micrometer":
						$result=$v*25400;
					break;
					case "Nanometer":
						$result=$v*2.54*pow(10, 7); 
					break;	
					case "Mile":
						$result=$v/63360;
					break;
					case "Yard":
						$result=$v/36;
					break;
					case "Foot":
						$result=$v/12;

					break;	
					case "Inch":
						$result=$v;
					break;	
						
				}
				break;	
				
}
	
return $result;	
	
}

function convertTime($v,$from,$to){
		switch($from)
{
			case "Milliseconds" :
				switch($to){
					case "Second":
						 $result=$v/1000;
					break;	
                    case "Minute":
						 $result=$v/60000;
					break;	
					case "Hour":
						 $result=$v/(3.6*pow(10.6));
					break;	
					case "Day":
						 $result=$v(8.64*pow(10.7));
					break;	
					case "Milliseconds":
						 $result=$v;
					break;	
				}
				break;
				////////////////////////////Second/////////////////
				case "Second" :
				switch($to){
				case "Milliseconds":
				$result=$v*1000;
				break;
				case "Minute":
				$result=$v/60;
				break;
				case "Hour":
				$result=$v/3600;
				break;
				case "Day":
				$result=$v/86400;
				break;
				case "Second" :
				$result=$v;
				break;
				}
				break;
				////////////////////////Minute///////////////
								case "Minute" :
				switch($to){
					case "Milliseconds":
						$result=$v*60000;
					break;	
                    case "Second":
						$result=$v*60;
					break;	
					case "Hour":
						$result=$v/60;
					break;	
					case "Day":
						$result=$v/1440;
					break;	
					case "Minute":
						$result=$v;
					break;	
				}
				break;
				////////////////////////Hour///////////////
								case "Hour" :
				switch($to){
					case "Milliseconds":
						$result=$v*3.6*pow(10,6);
					break;	
                    case "Second":
						$result=$v*3600;
					break;	
					case "Hour":
						$result=$v;
					break;	
					case "Minute":
						$result=$v*60;
					break;	
					case "Day":
						$result=$v/24;
					break;		
				}
				break;
				////////////////////////Day///////////////
								case "Day" :
				switch($to){
					case "Milliseconds":
						$result=$v*8.64*pow(10,7);
					break;	
                    case "Second":
						$result=$v*86400;
					break;	
					case "Minute":
						$result=$v*1440;
					break;	
					case "Hour":
						$result=$v*24;
					break;	
					case "Day":
						$result=$v;
					break;	
				}
				break;
		}

return $result;	

}





function wichConversion($q,$v,$from,$to){
	switch($q){
		case "time" :
			$result=convertTime($v,$from,$to);
		break;
		case "length" :
			$result=convertLength($v,$from,$to);
		break;
		case "weight" :
			break;
		
		case "volume" :
			break;	
	}
return $result;	
}








if (empty($_POST)) {
    echo "Aucune donnée reçue";
}
else {
	$quantity=$_POST['quantity'];
	$value=floatval($_POST['value']);
	$fromUnit=$_POST['fromUnit'];
	$toUnit=$_POST['toUnit'];
	
	///////////////////////////////////
	
	$result=wichConversion($quantity,$value,$fromUnit,$toUnit);
	file_put_contents("result.log",$result);
	
	}

















?>