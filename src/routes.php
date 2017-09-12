<?php
$routes = [
    'metadata',
    'getAllIndicators',
    'getIndicatorForIPv4',
    'getIndicatorForIPv6',
    'getIndicatorForDomain',
    'getIndicatorForHostname',
    'getIndicatorForFileHashes',
    'getIndicatorForUrl',
    'getIndicatorForCVE',
    'getIndicatorForNIDS',
    'getIndicatorForCorrelationRules',
    'getPulse',
    'getIndicatorsForPulse',
    'getSharePulsesAnIndicator',
    'getSubscriptions',
    'getActivity',
    'createPulse',
    'getIndicatorType',
    'getEvents',
    'getUserInfo',
    'getUsersBySearch',
    'getPulsesBySearch',
    'getMe',
    'createActionForUsers',
    'addTagsForPulse',
    'removeTagsFromPulse',
    'removeIndicatorsFromPulse',
    'updateIndicatorsForPulse',
    'addIndicatorsForPulse',
    'updatePulse'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

