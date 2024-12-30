<?php

define('ADMIN','admin');
define('USER','user');
define('API_TOKEN','28a47031-fb05-4eb1-a5ee-d5a1bca315c0');

$post_types = ["booking","sale","rent"];
$screen_size = ["None","24 Inches","32 Inches","40 Inches","43 Inches","50 Inches","55 Inches","60 Inches","Other"];
$price_types = ["fixed","negotiable","daily","weekly","monthly","yearly"];
$features = ["4G", "5G", "Dual SIM", "Micro SIM", "Mini SIM", "USB Type-B Port", "USB Type-C Port", "Fast Charging", "Flash Charging", "Android", "Windows", "iOS", "Expandable Memory", "4 GB RAM", "8 GB RAM", "6 GB RAM", "12 GB RAM", "Dual Camera", "Triple Camera", "Dual LED Flash", "Quad LED Flash", "Bluetooth", "Wifi", "GPS", "Fingerprint sensor", "Infrared Port"];
$Fuel_type=["none","Diesel","Petrol","CNG","Hybrid","Electric"];
$Transmission=["none","Manual","Automatic","CNG","Triptronic","Other"];
$type=["none","Saloon","Hatchback","Station wagon","Other"];
$condition=["New"=>"New","Used"=>"Used","Reconditioned"=>"Reconditioned"];
$unit=["Purches","Acres"];
$bedRooms=['1','2','3','4','5','6','7','8','9+'];
$capacity=['none','9000 BTU','12000 BTU','18000 BTU','22000'];
$gender=['None','Boys','Girls','Baby','Unisex'];
$gender1=['Men','Women','Unisex'];
$food=['Fruits'=>'Fruits','Vegetables'=>'Vegetables'];
$jobType=['Full Time','Part Time','Contractual','Internship','Temporary','Work from Home'];
$educationLevel=['Ordinary Level','Advanced Level','Certificate','Diploma','Higher Diploma','Degree','Masters','Doctorate','Skilled Apprentice'];

return[
    'ADMIN'=>'admin',
    'JOBTYPE'=>$jobType,
    'EDUCATION'=>$educationLevel,
    'API_TOKEN'=>'28a47031-fb05-4eb1-a5ee-d5a1bca315c0',
    'USER'=>'user',
    'POST_TYPES' => $post_types,
    'PRICE_TYPES' => $price_types,
    'SCREEN_SIZE' => $screen_size,
    'FEATURES' => $features,
    'FUEL_TYPE'=>$Fuel_type,
    'TRANSMISSION'=>$Transmission,
    'BODY_TYPE'=>$type,
    'CONDITION'=>$condition,
    'UNIT'=>$unit,
    'BEDROOMS'=>$bedRooms,
    'CAPACITY'=>$capacity,
    'GENDER'=>$gender,
    'GENDER1'=>$gender1,
    'FOOD'=>$food,
];



