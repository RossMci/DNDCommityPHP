<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CampaignsClass
 *
 * @author ross1
 */
class CampaignsClass {

    private $campaignID, $CTitle, $CDescription, $CVenue, $CDate, $CTime, $CLocation, $Players, $CampaignsNo,$CimageLink;
    
        public function CampaignsClass($campaignID, $CTitle, $CDescription, $CVenue, $CDate, $CTime, $CLocation ,$Players,$CampaignsNo,$CimageLink) {
        $this->campaignID = $campaignID;
        $this->CTitle = $CTitle;
        $this->CDescription = $CDescription;
        $this->CVenue = $CVenue;
        $this->CDate = $CDate;
        $this->CTime = $CTime;
        $this->CLocation = $CLocation;
        $this->Players = $Players;
        $this->CampaignsNo = $CampaignsNo;
        $this->CimageLink=$CimageLink;
        
    }

    function getcampaignID() {
        return $this->campaignID;
    }

    function setcampaignID($value) {
        $this->campaignID = $value;
    }

    function getCTitle() {
        return $this->CTitle;
    }

    function setCTitle($value) {
        $this->CTitle = $value;
    }

    function getCDescription() {
        return $this->CDescription;
    }

    function setCDescription($value) {
        $this->CDescription = $value;
    }

    function getCVenue() {
        return $this->CVenue;
    }

    function setCVenue($value) {
        $this->CVenue = $value;
    }

    function getCDate() {
        return $this->CDate;
    }

    function setCDate($value) {
        $this->CDescription = $value;
    }

    function getCTime() {
        return $this->CTime;
    }

    function setCTime($value) {
        $this->CTime = $value;
    }

    function getCLocation() {
        return $this->CLocation;
    }

    function setCLocation($value) {
        $this->CLocation = $value;
    }

    function getPlayers() {
        return $this->Players;
    }

    function setPlayers($value) {
        $this->Players = $value;
    }

    function getCampaignsNo() {
        return $this->CampaignsNo;
    }

    function setCampaignsNo($value) {
        $this->CampaignsNo = $value;
    }
    
        function getCimageLink() {
        return $this->CimageLink;
    }

    function setCimageLink($value) {
        $this->CimageLink = $value;
    }

}
