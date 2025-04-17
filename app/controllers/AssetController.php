<?php
require_once __DIR__ . '/../models/AssetModel.php';

class AssetController
{
    public function createAsset()
    {
        $ad_account_id = $_POST['ad_account_id'];
        $asset_type = $_POST['asset_type'];
        $asset_subtype = $_POST['asset_subtype'] ?? null;

        $assetModel = new AssetModel();
        $result = $assetModel->create($ad_account_id, $asset_type, $asset_subtype);

        require_once __DIR__ . '/../views/result.php';
    }
}

