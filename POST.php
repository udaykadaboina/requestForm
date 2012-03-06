<?php
session_start();

$to = "unm@custhelp.com";
$cc = $_SESSION['element_2'];
if ($_SESSION['element_2'] <> "") $from = "From: ".$_SESSION['element_2']."\r\n";
else $from = "From: emrt@unm.edu \r\n";
$subject = " New Request ".$_SESSION['element_1_1']." ".$_SESSION['element_1_2'];
$text .= "NAME     : ".$_SESSION['element_1_1']." ".$_SESSION['element_1_2']."\n";
$text .= "EMAIL   : ".$_SESSION['element_2']."\n\n";

$text .= "DESCRIPTION OF REQUEST        : ".$_SESSION['element_13']."\n\n";

if (isset($_SESSION['element_3_1']) && isset($_SESSION['element_3_2']) && isset($_SESSION['element_3_3']))  $text .= "PHONE #     : ".$_SESSION['element_3_1']." ".$_SESSION['element_3_2']." ".$_SESSION['element_3_3']."\n\n";

if (isset($_SESSION['element_x4_1'])) $text .= "DEPARTMENT/COLLEGE     : ".$_SESSION['element_x4_1']."\n";
if (isset($_SESSION['element_x4_2'])) $text .= "DEPARTMENT CHAIR    : ".$_SESSION['element_x4_2']."\n";
if (isset($_SESSION['element_x4_3'])) $text .= "FACULTY/STAFF NAME   : ".$_SESSION['element_x4_3']."\n";
if (isset($_SESSION['element_x4_4_1'])) $text .= "STREET ADDRESS       : ".$_SESSION['element_x4_4_1']."\n";
if (isset($_SESSION['element_x4_4_2'])) $text .= "ADDRESS LINE 2        : ".$_SESSION['element_x4_4_2']."\n";
if (isset($_SESSION['element_x4_4_3'])) $text .= "CITY        : ".$_SESSION['element_x4_4_3']."\n";
if (isset($_SESSION['element_x4_4_4'])) $text .= "STATE        : ".$_SESSION['element_x4_4_4']."\n";
if (isset($_SESSION['element_x4_4_5'])) $text .= "ZIP CODE        : ".$_SESSION['element_x4_4_5']."\n";
if (isset($_SESSION['element_x4_4_6'])) $text .= "COUNTRY        : ".$_SESSION['element_x4_4_6']."\n\n";

if (isset($_SESSION['element_x5_1'])) $text .= "AGENCY        : ".$_SESSION['element_x5_1']."\n";
if (isset($_SESSION['element_x5_2'])) $text .= "COMPANY        : ".$_SESSION['element_x5_2']."\n";
if (isset($_SESSION['element_x5_4_1'])) $text .= "PHYSICAL ADDRESS        : ".$_SESSION['element_x5_4_1']."\n";
if (isset($_SESSION['element_x5_4_2'])) $text .= "STREET ADDRESS        : ".$_SESSION['element_x5_4_2']."\n";
if (isset($_SESSION['element_x5_4_3'])) $text .= "CITY        : ".$_SESSION['element_x5_4_3']."\n";
if (isset($_SESSION['element_x5_4_4'])) $text .= "STATE        : ".$_SESSION['element_x5_4_4']."\n";
if (isset($_SESSION['element_x5_4_5'])) $text .= "ZIP CODE        : ".$_SESSION['element_x5_4_5']."\n";
if (isset($_SESSION['element_x5_4_6'])) $text .= "COUNTRY        : ".$_SESSION['element_x5_4_6']."\n\n";

if (isset($_SESSION['element_14'])) $text .= "DATA FOR DEPT ONLY?        : ".$_SESSION['element_14']."\n";
if (isset($_SESSION['element_x2'])) $text .= "DATA PUBLISHED?        : ".$_SESSION['element_x2']."\n";
if (isset($_SESSION['element_x1'])) $text .= "CONTRACT OR RESEARCH?        : ".$_SESSION['element_x1']."\n";
if (isset($_SESSION['element_x11'])) $text .= "CONTRACT WITH        : ".$_SESSION['element_x11']."\n";
if (isset($_SESSION['element_15'])) $text .= "CENSUS OR POINT-N-TIME?        : ".$_SESSION['element_15']."\n";
if (isset($_SESSION['element_x21'])) $text .= "AGGREGATE(A) OR UNIT-RECORD(U)        : ".$_SESSION['element_x21']."\n";
if (isset($_SESSION['element_x22'])) $text .= "UNIT-RECORD JUSTIFICATION       : ".$_SESSION['element_x22']."\n\n";

$text .= "HOW DATA TO BE STORED        : ".$_SESSION['element_5']."\n";
$text .= "WHO HAS ACCESS TO DATA        : ".$_SESSION['element_6']."\n";
$text .= "HOW WILL DATA BE DESTROYED        : ".$_SESSION['element_7']."\n";
$text .= "WHO WILL DESTROY DATA        : ".$_SESSION['element_8']."\n";
$text .= "WHEN WILL DATA BE DESTROYED        : ".$_SESSION['element_9']."\n\n";

if (isset($_SESSION['element_16'])) $text .= "INFO REQUESTED BEFORE?        : ".$_SESSION['element_16']."\n";
if (isset($_SESSION['element_11']))$text .= "PREVIOUS REQUEST DATE        : ".$_SESSION['element_11']."\n";

if (isset($_SESSION['element_selection_1_1'])|| isset($_SESSION['element_selection_1_2']) || isset($_SESSION['element_selection_1_3']) || isset($_SESSION['element_selection_1_4'])) $text .= "DATA NEEDED       : ".$_SESSION['element_selection_1_1'].",\n ".$_SESSION['element_selection_1_2'].",\n ".$_SESSION['element_selection_1_3'].",\n ".$_SESSION['element_selection_1_4']."\n\n";

if (isset($_SESSION['element_selection_1_1'])) $text .= "STUDENT DATA REQUESTED        : ".$_SESSION['element_sf_1_1'].", ".$_SESSION['element_sf_1_2'].", ".$_SESSION['element_sf_1_3'].", ".$_SESSION['element_sf_1_4'].", ".$_SESSION['element_sf_1_5'].", ".$_SESSION['element_sf_1_6'].", ".$_SESSION['element_sf_1_7'].", ".$_SESSION['element_sf_1_8'].", ".$_SESSION['element_sf_1_9'].", ".$_SESSION['element_sf_1_10'].", ".$_SESSION['element_sf_1_11'].", ".$_SESSION['element_sf_1_12'].", ".$_SESSION['element_sf_1_13'].", ".$_SESSION['element_sf_1_14'].", ".$_SESSION['element_sf_1_15'].", ".$_SESSION['element_sf_1_16'].", ".$_SESSION['element_sf_1_17'].", ".$_SESSION['element_sf_1_18'].", ".$_SESSION['element_sf_1_19'].", ".$_SESSION['element_sf_1_20'].", ".$_SESSION['element_sf_1_21'].", ".$_SESSION['element_sf_1_22'].", ".$_SESSION['element_sf_1_23'].", ".$_SESSION['element_sf_1_24'].": ".$_SESSION['element_sf_1_25'].", ".$_SESSION['element_sf_1_26']."\n\n";

if (isset($_SESSION['element_selection_1_2'])) $text .= "FACULTY DATA REQUESTED        : ".$_SESSION['element_sf_2_1'].", ".$_SESSION['element_sf_2_2'].", ".$_SESSION['element_sf_2_3'].", ".$_SESSION['element_sf_2_4'].", ".$_SESSION['element_sf_2_5'].", ".$_SESSION['element_sf_2_6'].", ".$_SESSION['element_sf_2_7'].", ".$_SESSION['element_sf_2_8'].", ".$_SESSION['element_sf_2_9'].", ".$_SESSION['element_sf_2_10'].", ".$_SESSION['element_sf_2_11'].", ".$_SESSION['element_sf_2_12'].", ".$_SESSION['element_sf_2_13'].", ".$_SESSION['element_sf_2_14'].", ".$_SESSION['element_sf_2_15'].", ".$_SESSION['element_sf_2_16'].", ".$_SESSION['element_sf_2_17'].", ".$_SESSION['element_sf_2_18'].", ".$_SESSION['element_sf_2_19'].", ".$_SESSION['element_sf_2_20'].", ".$_SESSION['element_sf_2_21'].", ".$_SESSION['element_sf_2_22'].", ".$_SESSION['element_sf_2_23'].", ".$_SESSION['element_sf_2_24']."\n\n";

if (isset($_SESSION['element_selection_1_3'])) $text .= "COURSE DATA REQUESTED        : ".$_SESSION['element_sf_3_1'].", ".$_SESSION['element_sf_3_2'].", ".$_SESSION['element_sf_3_3'].", ".$_SESSION['element_sf_3_4'].", ".$_SESSION['element_sf_3_5'].", ".$_SESSION['element_sf_3_6'].", ".$_SESSION['element_sf_3_7'].", ".$_SESSION['element_sf_3_8'].", ".$_SESSION['element_sf_3_9'].", ".$_SESSION['element_sf_3_10'].", ".$_SESSION['element_sf_3_11'].", ".$_SESSION['element_sf_3_12'].", ".$_SESSION['element_sf_3_13'].", ".$_SESSION['element_sf_3_14'].", ".$_SESSION['element_sf_3_15']."\n\n";

if (isset($_SESSION['element_selection_1_4'])) $text .= "FINAID/SCHOL DATA REQUESTED        : ".$_SESSION['element_sf_4_1'].", ".$_SESSION['element_sf_4_2'].", ".$_SESSION['element_sf_4_3'].", ".$_SESSION['element_sf_4_4'].", ".$_SESSION['element_sf_4_5'].", ".$_SESSION['element_sf_4_6'].", ".$_SESSION['element_sf_4_7'].", ".$_SESSION['element_sf_4_8'].", ".$_SESSION['element_sf_4_9'].", ".$_SESSION['element_sf_4_10'].", ".$_SESSION['element_sf_4_11'].", ".$_SESSION['element_sf_4_12'].", ".$_SESSION['element_sf_4_13'].", ".$_SESSION['element_sf_4_14'].", ".$_SESSION['element_sf_4_15'].", ".$_SESSION['element_sf_4_16'].", ".$_SESSION['element_sf_4_17'].", ".$_SESSION['element_sf_4_18'].", ".$_SESSION['element_sf_4_19']."\n\n";

$headers = $from.$cc;
//$headers = $from;


mail ($to,$subject,$text,$headers);
header ("Location: ../requestForm/confirm_work_order.php");
?>