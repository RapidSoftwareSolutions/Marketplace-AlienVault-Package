[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/AlienVault/functions?utm_source=RapidAPIGitHub_AlienVaultFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# AlienVault Package
AlienVault unifies all of your essential security tools in one location and combines them with real-time threat intelligence.
* Domain: [alienvault.com](https:\/\/otx.alienvault.com)
* Credentials: apiKey

## How to get credentials: 
0. Register on the [alienvault.com](https:\/\/otx.alienvault.com)
1. After registering, you will see apiKey in [console](https://otx.alienvault.com/api/)

 ## Custom datatypes: 
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]``` 
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
## AlienVault.getAllIndicators
Export indicators for pulses in your pulse subscriptions.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key.
| limit        | Number     | Number of results to include per page.
| page         | Number     | Which page of results is desired.
| types        | List       | Comma seperated list of indicator types to limit results to.
| modifiedSince| DatePicker | Iso format datetime (UTC) string) Only include pulses modified more recently than a specific time.

## AlienVault.getIndicatorForIPv4
Indicator page api for IPv4 Addresses.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| ip     | String     | Example -  8.8.8.8 ;
| section| Select     | Section name (one of general, reputation, geo, malware, urlList, passiveDns).

1. general: General information about the IP, such as geo data, and a list of the other sections currently available for this IP address.
2.  reputation: OTX data on malicious activity observed by AlienVault Labs (IP Reputation).
3.  geo: A more verbose listing of geographic data (Country code, coordinates, etc.)
4. malware: Malware samples analyzed by AlienVault Labs which have been observed connecting to this IP address.
5. urlList: URLs analyzed by AlienVault Labs which point to or are somehow associated with this IP address.
6. passiveDns: passive dns information about hostnames/domains observed by AlienVault Labs pointing to this IP address.
 Example: `api/v1/indicators/IPv4/8.8.8.8/general`


## AlienVault.getIndicatorForIPv6
Indicator page api for IPv6 Addresses.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| ip     | String     | Example -  8.8.8.8 ;
| section| Select     | Section name (one of general, reputation, geo, malware, urlList, passiveDns).

1. general: General information about the IP, such as geo data, and a list of the other sections currently available for this IP address.
2.  reputation: OTX data on malicious activity observed by AlienVault Labs (IP Reputation).
3.  geo: A more verbose listing of geographic data (Country code, coordinates, etc.)
4. malware: Malware samples analyzed by AlienVault Labs which have been observed connecting to this IP address.
5. urlList: URLs analyzed by AlienVault Labs which point to or are somehow associated with this IP address.
6. passiveDns: passive dns information about hostnames/domains observed by AlienVault Labs pointing to this IP address.
7.  httpScans: Meta data for http(s) connections to the IP.

## AlienVault.getIndicatorForDomain
Indicator page api for domain names.Example domains: 'rghost.net', 'spywaresite.info'.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| domain | String     | Single domain address.Example - spywaresite.info.
| section| Select     | Section name (one of general, reputation, geo, malware, urlList, passiveDns).

1. general: General information about the IP, such as geo data, and a list of the other sections currently available for this IP address.
2.  reputation: OTX data on malicious activity observed by AlienVault Labs (IP Reputation).
3.  geo: A more verbose listing of geographic data (Country code, coordinates, etc.)
4. malware: Malware samples analyzed by AlienVault Labs which have been observed connecting to this IP address.
5. urlList: URLs analyzed by AlienVault Labs which point to or are somehow associated with this IP address.
6. passiveDns: passive dns information about hostnames/domains observed by AlienVault Labs pointing to this IP address.

## AlienVault.getIndicatorForHostname
Indicator page api for hostname names.Example hostnames: 'otx.alienvault.com', 'bad-guys.no-ip.org', 'alpha.beta.google.co.uk'.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your API key.
| hostname| String     | Single hostname address.Example - mail.vspcord.com .
| section | Select     | Section name (one of general, reputation, geo, malware, urlList, passiveDns).

1. general: General information about the IP, such as geo data, and a list of the other sections currently available for this IP address.
2.  reputation: OTX data on malicious activity observed by AlienVault Labs (IP Reputation).
3.  geo: A more verbose listing of geographic data (Country code, coordinates, etc.)
4. malware: Malware samples analyzed by AlienVault Labs which have been observed connecting to this IP address.
5. urlList: URLs analyzed by AlienVault Labs which point to or are somehow associated with this IP address.
6. passiveDns: passive dns information about hostnames/domains observed by AlienVault Labs pointing to this IP address.

## AlienVault.getIndicatorForFileHashes
Indicator page api for files (file hashes).

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your API key.
| fileHash| String     | Single file hash.Example - `6c5360d41bd2b14b1565f5b18e5c203cf512e493` .
| section | Select     | Section name.

1. general: General metadata about the file hash, and a list of the other sections currently available for this hash.
2. analysis: dynamic and static analysis of this file (Cuckoo analysis, exiftool, etc.).

## AlienVault.getIndicatorForUrl
Indicator page api for URL.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| url    | String     | Single url.Example - `http://www.fotoidea.com/sport/4x4_san_ponso/slides/IMG_0068.html` .
| section| Select     | Section name.

1. general: Historical geographic info, any pulses this indicator is on, list of the other sections currently available for this URL.
2. url_list: Full results (potentially multiple) from AlienVault Labs url analysis.

## AlienVault.getIndicatorForCVE
Indicator page api for CVEs (MITRE's Common Vulnerability Enumeration).

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| cve    | String     | Example - `CVE-2014-0160` .
| section| Select     | Section name.General: MITRE CVE data (CPEs, CWEs, etc.), any pulses this indicator is on, list of the other sections currently available for this URL.

## AlienVault.getIndicatorForNIDS
Indicator page api for NIDSs.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| nids   | String     | Example - `2820184` .
| section| Select     | Section name.General: General metadata about NIDS.

## AlienVault.getIndicatorForCorrelationRules
Indicator page api for Correlation Rules.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API key.
| correlationRule| String     | Example - `572f8c3c540c6f0161677877` .
| section        | Select     | Section name.General: General metadata about the Correlation Rule.

## AlienVault.getPulse
Indicator page api for Correlation Rules.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| pulseId| String     | Example - `57204e9b3c4c3e015d93cb12`.

## AlienVault.getIndicatorsForPulse
Returns paginated list view of the indicators inside the pulse pulseId.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| pulseId| String     | Example - `57204e9b3c4c3e015d93cb12`.

## AlienVault.getSharePulsesAnIndicator
Return all pulses that share an indicator with this pulse.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| pulseId| String     | Example - `57204e9b3c4c3e015d93cb12`.

## AlienVault.getSubscriptions
Threat intelligence subscriptions.All pulses by users you are subscribed to;All pulses you are directly subscribed to;All pulses you have created yourself;All pulses from groups you are a member of;

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key.

## AlienVault.getActivity
Activity feed consists of pulses:All pulse subscriptions (directly subscribed to pulse, and all pulses by subscribed to users);All pulses created by myself;All pulses by users I am following;

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key.

## AlienVault.createPulse
Allow users to submit pulses via the API.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your API key.
| name       | String     | Name for new pulse.
| description| String     | A brief description of the pulse, the threat it addresses.
| public     | Select     | Public implies other users can see / subscribe to your pulse.
| TLP        | Select     | Amber and red pulses MUST be private.Default is green.
| indicators | List       | indicators (list of objects) List of objects (dicts): {type: 'email', indicator: 'badguy@malware.com', description: ''}. Every object in the list must contain these three fields.
| tags       | List       | (list of strings) Tags to describe your pulse. i.e. malware, phishing, hacking.team;
| references | List       | references (list of strings) External references to associate with this pulse.

## AlienVault.getIndicatorType 
Returns string representations of each indicator type (i.e. `domain`), as recognized by OTX.For use in indicator validation and create pulse.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key.

## AlienVault.getEvents
List events, such as subscribe/unsubscribe to user/pulse.
Triggered when certain actions happen on the website. Events may be useful for the purposes of threat intelligence management. Pulse subscribed/unsubscribed User subscribed/unsubscribed * Pulse (in my subscriptions) deleted by author

When a pulse you've previously subscribed to is deleted by the author, it will gone from your subscriptions. Pulse events will help you purge these entries if you're doing incremental updates. Alternatively, you can always refresh your locally stored indicators entirely everytime you update.


| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key.
| limit        | Number     | Number of results to include per page.
| page         | Number     | Which page of results is desired.
| modifiedSince| DatePicker | Iso format datetime (UTC) string) Only include pulses modified more recently than a specific time.

## AlienVault.getUserInfo
Returns authenticated users or passed in user created pulse feed, default sorted by latest modified.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your API key.
| username| String     | Single username.

## AlienVault.getUsersBySearch
Search for users matcing query.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your API key.
| limit      | Number     | Number of results to include per page.
| page       | Number     | Which page of results is desired.
| sort       | Select     | Order by one of these fields: username, pulse_count.
| searchQuery| String     | Query string to search results with

## AlienVault.getPulsesBySearch
Search for pulses matcing query.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your API key.
| limit      | Number     | Number of results to include per page.
| page       | Number     | Which page of results is desired.
| sort       | Select     | Order by one of these fields: username, pulse_count.
| searchQuery| String     | Query string to search results with.

## AlienVault.getMe
Validate your API Key configuration. If valid, some basic information about the user account corresponding to the API Key supplied will be returned.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key.

## AlienVault.createActionForUsers
Perform actions like follow/subscribe to other users by username.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your API key.
| username| String     | The name to which will be perform actions.
| action  | Select     | Options - subscribe,unsubscribe,follow,unfollow.

actions:
1. subscribe: Include all of this users' pulses in my threat intelligence feed.
2. unsubscribe: Remove all of this users' pulses from my threat intelligence feed.
3. follow: Include all of this users' pulses in my activity feed, (Individual pulses must be subscribed to directly for inclusion in threat intelligence feed).
4. unfollow: Remove all of this users' pulses from my activity feed.

## AlienVault.addTagsForPulse
Add tags for pulse.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| pulseId| String     | Example - `57204e9b3c4c3e015d93cb12`.
| tags   | List       | List of tags.

## AlienVault.removeTagsFromPulse
Add tags for pulse.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| pulseId| String     | Example - `57204e9b3c4c3e015d93cb12`.
| tags   | List       | List of tags.

## AlienVault.removeIndicatorsFromPulse
Remove indicators from pulse.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key.
| pulseId      | String     | Example - `57204e9b3c4c3e015d93cb12`.
| indicatorsIds| List       | List of indicators id.

## AlienVault.updateIndicatorsForPulse
Edit indicators from pulse.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| pulseId  | String     | Example - `57204e9b3c4c3e015d93cb12`.
| editField| JSON       | Example - `{'id': 1 'type': 'hostname', 'indicator': 'www.amazon.com'}`

## AlienVault.addIndicatorsForPulse
Add indicators from pulse.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your API key.
| pulseId | String     | Example - `57204e9b3c4c3e015d93cb12`.
| addField| JSON       | Example - `{'indicator': '8.8.8.9', 'type': 'IPv4', 'role': 'command_and_control'}`

## AlienVault.updatePulse
In an edit you can pass any pulse field(s) you wish to change. For string or numeric fields, pass the new value you wish to have. For `list` fields, pass a dictionary that can contain a `add` or `remove` field. For `add`, pass a list of new values.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API key.
| pulseId| String     | Example - `57204e9b3c4c3e015d93cb12`.
| body   | JSON       | Post body should be json format, containing fields you wish to edit.

View or edit of pulse with id pulse_id. When editing a pulse, use PATCH. Post body should be json format, containing fields you wish to edit. For string, numeric or boolean fields provide the literal value, for list fields provide the list of values you wish to add or remove (see example). Any fields that can be used to create a pulse can also be used to edit.


In an edit you can pass any pulse field(s) you wish to change. For string or numeric fields, pass the new value you wish to have. For "list" fields, pass a dictionary that can contain a "add" or "remove" field. For "add", pass a list of new values. For "remove", pass a list of values to remove

Indicators are a special case, you can also incude an "edit" field in the value dictionary.

Please see examples below for details

`body: {
     "description": "New Description",
     "tags": {"add": ["addtag1", "addtag2"], "remove": ["remtag1"]}
 }`
 
 This assumes you already have indicators in the pulse with ids 1, 2, 3 and 4. We edit 3 of them and remove 1. Note that for removing indicators, only the indicator id is necessary. For editing, you need the id and any fields you wish to change.
 
 `body: {'indicators': {
      'add': [
          {'indicator': '8.8.8.9', 'type': 'IPv4', 'role': 'command_and_control'},
          {'indicator': '8.8.8.10', 'type': 'IPv4'},
      ],
      'edit': [
          {'id': 1 'type': 'hostname', 'indicator': 'www.amazon.com'},
          {'id': 2, 'indicator': 'you@rustybrooks.com'},
          {'id': 3, 'is_active': True, 'expiration': '2017-01-01', 'role': 'scanning_host'},
      ],
      'remove': [
          {'id': 4},
      ]
  }`