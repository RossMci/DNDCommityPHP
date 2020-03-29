<?php

require('../Model/database.php');
require('../Model/CampaignsClass.php');
require('../Model/campaigns_db.php');
require('../Model/member.php');
require('../Model/member_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'add_edit_campaign_form';
    }
}


if ($action == 'add_edit_campaign_form') {
    $campaign_id = filter_input(INPUT_GET, 'campaign_id');

    if ($campaign_id == NULL) {
        $campaign_id = filter_input(INPUT_POST, 'campaign_id');
    }
    $campaign = campaigns_db::getCampaigns($campaign_id);

    include('Add-campaigns.php');
}else if( $action == 'createCampaign'){    

    $campaignID = filter_input(INPUT_POST, 'campaignID');
    $CTitle = filter_input(INPUT_POST, 'CTitle');
    $CDescription = filter_input(INPUT_POST, 'CDescription');
    $CVenue = filter_input(INPUT_POST, 'CVenue');
    $CDate = filter_input(INPUT_POST, 'CDate');
    $CTime = filter_input(INPUT_POST, 'CTime');
    $CLocation = filter_input(INPUT_POST, 'CLocation');
    $Players = filter_input(INPUT_POST, 'Players');
    $CampaignsNo = filter_input(INPUT_POST, 'CampaignsNo');
    $CimageLink = filter_input(INPUT_POST, 'CimageLink');
 if ($CTitle == NULL || $CDescription == NULL || $CVenue == NULL || $CDate == NULL || $CTime == NULL || $CLocation == NULL|| $Players == NULL || $CampaignsNo == NULL ) {
        $error = "Invalid user data. Check all fields and try again.";
        include('../errors/error.php');
    } else {

       $campaign= new CampaignsClass($campaignID, $CTitle, $CDescription, $CVenue, $CDate, $CTime, $CLocation ,$Players,$CampaignsNo,$CimageLink);
        campaigns_db::createCampaign($campaign);
        header("Location: /DNDCommityPHP/Host/index.php");
    }
}else if ($action=='currentCampaigns' ) {
    
}