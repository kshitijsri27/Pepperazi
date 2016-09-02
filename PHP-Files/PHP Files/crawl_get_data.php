<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style>
		
		body
		{
		margin-top:5%;
		}
		
	#disp_main_link
	{
		text-decoration:none;
		color:green;
	}

	#displink
	{	
		text-decoration:none;
		
		font-size: 40px;
		white-space:nowrap;
		margin-left:90px;
		line-height:180%;
	}
	
			
			#SearchBox {
				
				float: left;
				height: 60px;
				width: 370px;
				
				-webkit-box-shadow: 0px 1px 5px #999;
				margin-left:10%;
				
			}
			
			#SearchButton {
				float: left;
				height: 60px;
				width: 70px;
			}
			
			#SearchInput {
				
				border: none;
				color: #999999;
				font-size: 16px;
				outline: none;
				margin: 20px;
				width: 330px;
				
			}
			
			#SearchResults {
				background: #000000;
				display: none;
				overflow: auto;
				position: absolute;
				width: 330px;
				z-index: 99;
				margin-left:10%;
			}
			
			#SearchResults a {
				color: #FFFFFF;
				display: block;
				padding: 5px 5px 5px 15px;
				text-decoration: none;
			}
			
			
			#SearchResults a:hover {
				color: #333333;
				background: #CCCCFF;
			}
			
			#bookss
		{
			display:block;
			margin-left:24%;
			width:60%;
			height:auto;
			overflow:hidden;
		}
	
		</style>
		<script type="text/javascript" src="JS/jquery-1.3.2.min.js"></script>
		<script type="text/javascript">
		
		
			$(document).ready(function() {
			
				$("#SearchInput").focus(function() {
					if($("#SearchInput").val() == "History Search") {
						$("#SearchInput").val("");
					}
					$("#SearchInput").css("color", "#000000");
				});
				
				$("#SearchInput").blur(function() {
					if($("#SearchInput").val() == "") {
						$("#SearchInput").val("History Search");
						$("#SearchInput").css("color", "#999999");
					}
					$("#SearchResults").slideUp();
				});
				
				$("#SearchInput").keydown(function(e) {
					if(e.which == 8) {
						SearchText = $("#SearchInput").val().substring(0, $("#SearchInput").val().length-1);
					}
					else {
						SearchText = $("#SearchInput").val() + String.fromCharCode(e.which);
					}
					$("#SearchResults").load("crawl_ajax.php", { SearchInput: SearchText });
					$("#SearchResults").slideDown();
				});
			
			});
		</script>
	</head>
	
<body>
<?php
echo "<div id = 'bookss'>";
?>
<form action="" method="post" action="index.php">

<table style="margin: auto; width: 975px;">
	<tr>
		<td width="380">
			<div id="SearchBox">
				<input type="text" id="SearchInput" name="SearchInput" placeholder="Search Vacancy Area Wise" style="background-color:#ebe9e2" autocomplete="off">
			</div>
			<div id="SearchButton">
				<input type="image" src="images/glass.png" height="65px" width="65px"/>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="position: relative; left: 20px; top: -20px;">
				<div id="SearchResults"></div>
			</div>
		</td>
	</tr>
</table>
</form>

</body>
</html>

<?php
include 'Database_Connect.php';
if (isset($_GET["page"])) { 
							$page  = $_GET["page"]; 
						} 
						else { $page=1; }; 
$start_from = ($page-1) * 5; 


		if(isset($_POST['SearchInput']))
		{
		$search = htmlentities($_POST['SearchInput']);
		echo "<script>  
			$(document).ready(function(){
				
			});
					
			</script>";
			
/*---------------------------------------------------------------Crawling Free Jobs Alert----------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
				
include_once("simple_html_dom.php");

ini_set('max_execution_time', 3000);
$html = new simple_html_dom();
$query_URL = "http://www.freejobalert.com/latest-notifications/";
$html->load_file($query_URL);


		$date = date("d/m/Y");
		$heading = $html->find('.PostHeaderIcon-wrapper');
		echo "<h4><img src = 'new_images/sidebar/calender.png'/>";
		echo " ";
		echo $date;
/*--------------------------------------------------------------------------------Filtered Crawling -----------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

$Other_Govt_Financial_Institutes = 1 ;
$UPSC = 2 ;
$SSC = 3 ;
$Other_All_India_Exams = 4 ;
$Railways = 5;
$South_Central_Railway = 6 ;
$DLW_Varanasi = 8 ;
$DMRCL = 9 ;
$East_Coast_Railway = 10 ;
$Railtel_Corporation_of_India_Ltd = 11 ;
$Central_Railway_Mumbai = 14 ;
$Chittaranjan_Locomotive_Works = 15 ;
$Andaman_Nikobar = 16 ;
$Andhra_Pradesh = 17 ;
$Arunachal_Pradesh = 18 ;
$Assam = 19 ;
$Bihar = 20 ;
$Chandigarh = 21 ;
$Chhattisgarh = 22 ;
$Dadra_Nagar_Haveli = 23 ;
$Daman_Diu = 24 ;
$Delhi = 25 ;
$Goa = 26 ;
$Gujarat = 27 ;
$Haryana = 28 ;
$Himachal_Pradesh = 29 ;
$Jammu_Kashmir = 30 ;
$Jharkhand = 31 ;
$Karnataka = 32 ;
$Kerela = 33 ;
$Lakshadweep = 34 ;
$Madhya_Pradesh = 35 ;
$Maharashtra = 36 ;
$Manipur = 37 ;
$Meghalaya = 38 ;
$Mizoram = 39 ;
$Nagaland = 40 ;
$Odisha_Orissa = 41 ;
$Puduchhery = 42 ;
$Punjab = 43 ;
$Rajasthan = 44 ;
$Sikkim = 45 ;
$Tamil_Nadu = 46 ;
$Telangana = 47 ;
$Tripura = 48 ;
$Uttarakhand = 49 ;
$Uttar_Pradesh = 50 ;
$West_Bengal = 51 ;
$Medical_Hospital_Jobs = 52 ;

	foreach($html->find('.post') as $element) 
	{
			for( $x = 1 ; $x <= 50 ; $x++ )
			{
		
							if( $x == $Other_Govt_Financial_Institutes  && $search == "Other Govt Financial Institutes")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
							else if( $x == $UPSC  && $search == "UPSC")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
							else if( $x == $SSC  && $search == "SSC")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
							else if( $x == $Other_All_India_Exams && $search == "OtherAllIndiaExams")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
							else if( $x == $Railways  && $search == "Railways")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
							else if( $x == $South_Central_Railway  && $search == "South Central Railway")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
							else if( $x == $DLW_Varanasi  && $search == "Varanasi")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $DMRCL  && $search == "DMRCL")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $East_Coast_Railway  && $search == "East Coast Railway")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Railtel_Corporation_of_India_Ltd  && $search == "Railtel Corporation of India Ltd")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Central_Railway_Mumbai  && $search == "Central Railway Mumbai")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Chittaranjan_Locomotive_Works   && $search == "Locomotive Works")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Andaman_Nikobar  && $search == "Andaman & Nikobar")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Andhra_Pradesh  && $search == "Andhra Pradesh")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Arunachal_Pradesh  && $search == "Arunachal Pradesh")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Assam  && $search == "Assam")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Bihar  && $search == "Bihar")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Chandigarh  && $search == "Chandigarh")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Chhattisgarh  && $search == "Chhattisgarh")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Dadra_Nagar_Haveli   && $search == "Dadra & Nagar Haveli")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Daman_Diu  && $search == "Daman & Diu")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Delhi  && $search == "Delhi")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Goa  && $search == "Goa")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Gujarat  && $search == "Gujarat")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Haryana  && $search == "Haryana")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Himachal_Pradesh  && $search == "Himachal_Pradesh")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Jammu_Kashmir  && $search == "Jammu & Kashmir")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Jharkhand  && $search == "Jharkhand")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Karnataka  && $search == "Karnataka")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Kerela  && $search == "Kerela")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Lakshadweep  && $search == "Lakshadweep")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Madhya_Pradesh  && $search == "Madhya Pradesh")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Maharashtra  && $search == "Maharashtra")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Manipur  && $search == "Manipur")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Meghalaya  && $search == "Meghalaya")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Mizoram && $search == "Mizoram")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Nagaland  && $search == "Nagaland")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Odisha_Orissa  && $search == "Orrisa")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Puduchhery  && $search == "Puduchhery")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Punjab  && $search == "Punjab")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Rajasthan && $search == "Rajasthan")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Sikkim  && $search == "Sikkim")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Tamil_Nadu  && $search == "Tamil Nadu")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Telangana   && $search == "Telangana ")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Tripura  && $search == "Tripura")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Uttarakhand  && $search == "Uttarakhand")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Uttar_Pradesh  && $search == "Uttar Pradesh")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $West_Bengal  && $search == "West_Bengal")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
											
							else if( $x == $Medical_Hospital_Jobs  && $search == "Medical Hospital Jobs")	
							{
								$element_heading  = $element->find('p',$x);
								echo "<center>";
								echo $element_heading->innertext;
								echo "</center>";
								$element_heading_data_table = $element->find('table',$x);
								echo $element_heading_data_table;
							}
			}
	}
/*--------------------------------------------------------------------------------Filtered Crawling Ends -----------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------Mainlinks Crawling -----------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

		echo "</br>";
		$query = "select * from mainlinks where keywords like '%$search%' or link like '%$search%' ORDER BY counter DESC LIMIT $start_from,5";
		$result = mysql_query($query);

		if (!$result) {
				$message  = 'Invalid query: ' . mysql_error() . "\n";
				$message .= 'Whole query: ' . $query;
				die($message);
					  }
					  
                      while ($row = mysql_fetch_assoc($result)) 
						{
							$x = $row['link'];
							$y = $row['des'];
							
							echo "</br>";
							echo "<a id='disp_main_link' href=$x target='_blank'>$x</a>";
							echo "<div id=''>$y</div><br><br>";
							
						}
						
						$sql = "SELECT COUNT(*) FROM mainlinks where keywords like '%$search%' or link like '%$search%'"; 
						$rs_result = mysql_query($sql); 
						$row = mysql_fetch_row($rs_result); 
						$total_records = $row[0]; 
						$total_pages = ceil($total_records / 5); 
  
						
					/*	for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='crawl_get_data.php?page=".$i."'>".$i."</a> "; 
															}; 
					*/						
		}			  
?>
