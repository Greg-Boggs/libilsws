# libilsws

PHP package to support use of the SirsiDynix Symphony Web Services API (ILSWS)

John Houser
john.houser@multco.us

# Public Functions

## Low level (can be used with any ILSWS access point)
- connect()
- send_get ($url, $token, $params) 
- send_post ($url, $token, $query_json, $query_type)

## Convenience functions
- patron_activity_update ($token, $json)
- patron_alt_id_search ($token, $value, $count)
- patron_authenticate ($token, $id, $pin)
- patron_barcode_search ($token, $value, $count) 
- patron_create ($token, $json) 
- patron_describe ($token) 
- patron_search ($token, $index, $value, $params)
- patron_update ($token, $json, $key) 

## High level
- get_patron ($token, $username, $password)

# Example
~~~
require_once 'vendor/autoload.php';

$ilsws = new Libilsws\Libilsws();

$response = $ilsws->authenticate_patron($username, $password);
~~~
