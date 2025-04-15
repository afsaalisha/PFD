<?php
class AssetModel
{
    public function create($ad_account_id, $asset_type, $asset_subtype = null)
    {
        $url = "https://api.pocket.com/ad_accounts/{$ad_account_id}/assets";
        $accessToken = getenv('ACCESS_TOKEN');

        $data = [
            "asset_type" => $asset_type
        ];

        if ($asset_type === "AUDIO" && $asset_subtype) {
            $data["asset_subtype"] = $asset_subtype;
        }

        $options = [
            "http" => [
                "method" => "POST",
                "header" => "Content-Type: application/json\r\n" .
                    "Authorization: Bearer {$accessToken}\r\n",
                "content" => json_encode($data)
            ]
        ];

        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);

        return json_decode($response, true);
    }
}
