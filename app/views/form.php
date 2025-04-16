<!DOCTYPE html>
<html>

<head>
    <title>Create Asset</title>
</head>

<body>
    <h2>Create Asset</h2>
    <form method="POST" action="">
        <label>Ad Account ID:</label><br>
        <input type="text" name="ad_account_id" required><br><br>

        <label>Asset Type (IMAGE, AUDIO, VIDEO):</label><br>
        <input type="text" name="asset_type" required><br><br>

        <label>Asset Subtype (optional for AUDIO):</label><br>
        <input type="text" name="asset_subtype"><br><br>

        <button type="submit">Create</button>
    </form>
</body>

</html>