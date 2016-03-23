# CampaignDrive API Client for PHP

## Usage

```php
require_once 'autoload.php';

$api = new Pica9\CampaignDrive\ApiClient\DefaultApi;
$api->getApiClient()->getConfig()
    ->setHost('http://your-campaign-drive-domain.com');
try {
    $token = $api->createToken(
        "client_credentials",
        "your-client-id",
        "your-client-secret",
        "admin:document"
    );
    $api->getApiClient()->getConfig()
        ->setAccessToken($token->getAccessToken());
    $doc = $api->getDocumentById(1);
    echo $doc->getName();
} catch (\Pica9\CampaignDrive\ApiClient\ApiException $e) {
    echo "Error encountered!\n";
    echo $e->getResponseObject()->getReasonPhrase();
}
```
