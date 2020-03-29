<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of campaigns_db
 *
 * @author ross1
 */
class campaigns_db {

    public static function getCampaigns() {
        $db = Database::getDB();
        $query = 'SELECT * FROM campaigns
                  ORDER BY  campaignID';
        $statement = $db->prepare($query);
        $statement->execute();

        $Campaigns = array();
        foreach ($statement as $row) {
            $campaign = new CampaignsClass($row['campaignID'], $row['CTitle'], $row['CDescription'], $row['CVenue'], $row['CDate'], $row['CTime'], $row['CLocation'], $row['Players'], $row['CampaignsNo'], $row['CimageLink']);

            $Campaigns[] = $campaign;
        }
        return $Campaigns;
    }

    public static function createCampaign($campaign) {
        $db = Database::getDB();
        $CTitle =$campaign->getCTitle();
        $CDescription =$campaign->getCDescription();
        $CVenue =$campaign->getCVenue();
        $CDate =$campaign->getCDate();
        $CTime =$campaign->getCTime();
        $CLocation =$campaign->getCLocation();
        $Players =$campaign->getPlayers();
        $CampaignsNo =$campaign->getCampaignsNo();
        $CimageLink =$campaign->getCimageLink();
        $query = 'INSERT INTO campaigns
                       ( CTitle, CDescription, CVenue, CDate, CTime, CLocation ,Players,CampaignsNo,CimageLink)
                  VALUES
                        ( :CTitle, :CDescription, :CVenue, :CDate, :CTime, :CLocation ,:Players,:CampaignsNo, :CimageLink)';
        $statement = $db->prepare($query);
        $statement->bindValue(':CTitle', $CTitle);
        $statement->bindValue(':CLocation', $CLocation);
        $statement->bindValue(':CDescription', $CDescription);
        $statement->bindValue(':CVenue', $CVenue);
        $statement->bindValue(':CDate', $CDate);
        $statement->bindValue(':CTime', $CTime);
        $statement->bindValue(':Players', $Players);
        $statement->bindValue(':CampaignsNo', $CampaignsNo);
        $statement->bindValue(':CimageLink', $CimageLink);
        $statement->execute();
        $statement->closeCursor();
    }
    
         public static function DeleteCampaign($campaign_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM campaigns
                  WHERE campaignID = :campaign_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':campaign_id', $campaign_id);
        $statement->execute();
        $statement->closeCursor();
    }

}

//image upload https://www.youtube.com/watch?v=l6E8AyNcVYo